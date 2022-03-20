<?php
 include 'dbconnector.php';
 include 'connect.php';
 include 'session.php'; ?>
<!DOCTYPE html>
<html><html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<title>CentBank Online | Account</title>
<meta property="og:image" content="https://financialcommission.org/wp-content/uploads/2017/11/bitcoin.png">
 <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="420">
    <meta property="og:title" content="Cent Bank | Online Send And Receive Money From Any Where World Wide...">
    <meta property="og:description" content="Cent Bank | Online Send And Receive Money From Any Where World Wide... 
">
<link rel="stylesheet" type="text/css" href="./DASHBOARD_files/style.css">
<link rel="stylesheet" type="text/css" href="./DASHBOARD_files/animate.css">
<link rel="stylesheet" type="text/css" href="./DASHBOARD_files/font-awesome.css">
<link rel="stylesheet" type="text/css" href="./DASHBOARD_files/font-awesome.min.css">
 
<script> 
    wow = new WOW();
    wow.init(); 
    function checkTransfer() {
        alert('You Have A Pending Tranfer, Resolve Now!!!');
    }

    function deposit() {
        alert('Initiate Deposit With Account ID');
    }

    function withdrawHis() {
        alert('Withdraw History Has Been Sent To Your Email');
    }

    function contact2() {
        alert('You Can Reach Us Via\n Email: help@cent-online.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C, Denmark');
    }
    
function contact() {
        alert('You Can Reach Us Via\n Email: info@mycentonline.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C, Denmark');
    }    

    function depositHis() {
        alert('Deposit History Has Been Sent To Your Email');
    }

    function statement() {
        alert('Account Statement Has Been Sent To Your Email');
    }

    function settings() {
        alert('Set your account through the private link sent to your email...');
    }

    function more() {
        alert('Log Out To Read More...');
    }
    function withdraw() {
        alert('Make Use Of Your MasterCard At Any ATM Point');
        }
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<link rel="stylesheet" type="text/css" href="./DASHBOARD_files/faq.css">
<script type="text/javascript" src="./DASHBOARD_files/faq.js.download"></script>
<style>
 .box6 {
   
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
    line-height: 25px;
    color: #555;
}
</style>

</head>

<body>
    <div style="position: fixed; bottom: 5px; left: 2px; z-index: 40" id="google_translate_element"> <img src="images/lang.png"><div style="width: 900px; height: 20px">.</div></div>
<?php
                                        $Today = date('y:m:d');
                                        $date = date('l, F d, Y', strtotime($Today));
                                        ?>

<?php $user_query=mysql_query("select * from user where id='$session_id'")or die(mysql_error());
                            $row=  mysql_fetch_array($user_query);
                        ?>


                            
<div id="slider">
    <div id="header-down">
        <div class="headersub-down">
            <div class="logo slideInLeft  wow animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: slideInLeft;">
                <a href="dashboard.php?a=home"><img src="./DASHBOARD_files/logo.png"></a>
            </div>
             <div class="menu">
                <nav id="nav-3">
                  <a class="link-3 hoveract" href="dashboard.php">Account</a>
                  <a class="link-3" style="cursor: pointer; color: white" onclick="more()">About Us</a>
                  <a class="link-3" style="color: white" ><?php echo $date; ?></a>
                  <?php
                    if ($row['admin_id']==1) {
                        echo "<a class='link-3' style='cursor: pointer' onclick='contact2()'>Contact Us</a>";
                    } else {
                        echo "<a class='link-3' style='cursor: pointer' onclick='contact()'>Contact Us</a>";
                    }
                    
                  ?>
               
                  <a class="link-3 hoveract" href="logout.php">Log Out</a>
                </nav>
            </div>
        </div>
    </div>







<div id="main-content">
    <div id="sub_content">
<div class="plan_head"><p>Withdraw Transactions</p></div>
<div class="plan_img"><img src="./DASHBOARD_files/ra.png"></div>
<div class="dashboard">
<div class="deshboard-left">
                <div class="desh-menu">
                    <ul>
                        <li><a href="dashboard.php"><i class="fa fa-university" aria-hidden="true"></i> Dashboard</a></li>
                        <li><a href="logout.php"><i class="fa fa-cloud-download" aria-hidden="true"></i> Log Out</a></li>
                    </ul>
                </div>
            </div>
<div class="desh_right">







<div style="display:none">
</div>

                <div class="desh_bg">
                    <div class="desh_icon">
                        <img src="./DASHBOARD_files/duser.png">
                    </div>
                    <div class="welcome">
                        <h3>Welcome <?php echo $row['firstname']; ?></h3>
                    </div>
                    <div class="desh_user_right">
                        <div class="duser_details">
                            <p>AC NO. : <?php echo $row['account_number']; ?></p>
                        </div>
                        <div class="duser_details">
                            <p>Transfer/Withdraw History</p>
                        </div>
                    </div>
                </div>
                <div class="desh_down">
                    
                    

                     <table class="table table-striped" border="0">
<tr><td><b>T/WITHDRAW ID</b></td><td><b>AMOUNT</b></td><td><b>DATE</b></td><td><b>ID</b></td><td><b>STATUS</b></td></tr>

  <?php 
                   $qry = "select * from withdrawhistory where id='$session_id' ORDER BY id ASC";
                   $user_query=mysqli_query($dbcon,$qry);
                   while ($row = mysqli_fetch_array($user_query)) {
                                        $session_id = $row['id'];
                  
                    //$row=  mysqli_fetch_array($user_query);
                            ?>

        
<tr><td><?php echo "CBGXCV".$row['wit_id']*31; ?></td><td><p style="color: red">-<?php echo $row['currency']. "". number_format($row['amount']); ?></p></td><td><p><?php echo $row['wit_date']; ?></p></td><td><p><?php echo $row['wit_id']*7; ?></p></td><td><p style="color: green"><?php echo $row['status']; ?></p></td></tr>
                                    <?php } ?>
   
    </table>








                </div>
                <div class="main-referbg">
                    <p><b>NOTE:</b> Summary</p>
                </div>



</div>
</div>
</div>
</div>









<script>
function resolve() {
    document.getElementById("show").style.display = "block";
}
function resolveClose() {
    document.getElementById("show").style.display = "none";
}
</script>
    


<?php include 'footer.php'; ?>