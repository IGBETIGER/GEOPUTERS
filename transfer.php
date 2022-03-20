<?php
 include 'dbconnector.php';
 include 'connect.php';
 include 'session.php'; ?>
<!DOCTYPE html>
<html><html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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

    function more() {
        alert('Log Out To Read More...');
    }
    function contact() {
        alert('You Can Reach Us Via\n Email: info@mycentonline.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C,  
Denmark');
    }

    function contact2() {
        alert('You Can Reach Us Via\n Email: help@cent-online.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C,  
Denmark');
    }

    function withdraw() {
        alert('Make Use Of Your MasterCard At Any ATM Point');
    }

    function deposit() {
        alert('Initiate Deposit With Account ID');
    }

    function withdrawHis() {
        alert('Withdraw History Has Been Sent To Your Email');
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
    <div style="position: fixed; bottom: 5px; left: 2px; z-index: 9" id="google_translate_element"> <img src="images/lang.png"><div style="width: 400px; height: 20px">.</div></div>
<?php
                                        $Today = date('y:m:d');
                                        $date = date('l, F d, Y', strtotime($Today));
                                        ?>

<?php $user_query=mysql_query("select * from user where id='$session_id'")or die(mysql_error());
                            $row=  mysql_fetch_array($user_query);
$rank = $row['rank'];
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
                  <a class="link-3" style="cursor: pointer" onclick="more()">About Us</a>
                  <a class="link-3" ><?php echo $date; ?></a>
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
<div class="plan_head"><p>Transfer Money</p></div>
<div class="plan_img"><img src="./DASHBOARD_files/ra.png"></div>
<div class="dashboard">
<div class="deshboard-left">
                <div class="desh-menu">
                    <ul>
                        <li><a href="dashboard.php"><i class="fa fa-cloud-download" aria-hidden="true"></i><< Go Back << </a></li>
                        <li><a style="cursor: pointer" onclick="withdraw()"><i class="fa fa-upload" aria-hidden="true"></i> Withdraw</a></li>
                        <li><a style="cursor: pointer" href="deposithistory.php?a=Deposit-History"><i class="fa fa-briefcase" aria-hidden="true"></i> Deposit History</a></li>
                        <li><a style="cursor: pointer" href="withdrawhistory.php?a=Withdraw-History"><i class="fa fa-history" aria-hidden="true"></i> T/Withdraw History</a></li>
                        <li><a href="goal.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Our Goal</a></li>
                        <li><a style="cursor: pointer" onclick="statement()"><i class="fa fa-link" aria-hidden="true"></i> Statement</a></li>
                        <li><a style="cursor: pointer" onclick="settings()"><i class="fa fa-user" aria-hidden="true"></i> Account Setting</a></li>
                        <li><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Log Out</a></li>
                    </ul>
                </div>
            </div>
<div class="desh_right">







<div style="display:none">
</div>
<p style="color: red"><b><marquee behavior="alternate"> Sensitive Informations Will Be Sent To Your Email On Request For Security Reasons</marquee></b></p>

                <div class="desh_bg">
                    <div class="desh_icon">
                        <img src="./DASHBOARD_files/duser.png">
                    </div>
                    <div class="welcome">
                        <h3>Welcome <?php echo $row['firstname'] ?></h3>
                    </div>
                    <div class="desh_user_right">
                        <div class="duser_details">
                            <p>Account No. : <?php echo $row['account_number'] ?></p>
                        </div>
                        <div class="duser_details">
                            <p>Transferable : <?php echo $row['currency'];?><?php echo number_format($row['balance'] - 50) ?></p>
                        </div>
                    </div>
                </div>


                <div style="z-index: 20" class="desh_down">

                     <?php 
                include 'dbconnector.php';
                //include 'session.php';

                $Tuser_query=mysql_query("select * from transfer where id='$session_id' ORDER BY transferID DESC")or die(mysql_error());
                            $trow=  mysql_fetch_array($Tuser_query);


                    

                    if ($_SERVER["REQUEST_METHOD"]== "POST") {
                        $amount = $_POST['amount'];
                        if ($row['balance']-50 >= $amount && $amount > 0) {

                            $put = 0;
                            $sql = "update user set rank='$put' where id='$session_id'";
                            $dbcon->query($sql) === TRUE;

                        $minus = $row['balance'] - $amount;

                        mysql_query("update user set balance='$minus' where id=".$session_id);
                        $country = $_POST['country'];
                        $bname = $_POST['bname'];
                        $accname = $_POST['accname'];
                        $accnumber = $_POST['accnumber'];
                        $routingnumber = $_POST['routingnumber'];
                        $swiftcode = $_POST['swiftcode'];
                        $acctype = $_POST['acctype'];

                        mysql_query("insert into transfer (amount, country, bank_name, account_name, account_number, routing_number, swift_code, account_type, id)
                        values ('$amount', '$country', '$bname', '$accname', '$accnumber', '$routingnumber', '$swiftcode', '$acctype', '$session_id')                                    
                        ") or die(mysql_error());


                        $put = 1;
                            $sql = "update user set rank='$put' where id='$session_id'";
                            $dbcon->query($sql) === TRUE;

                    
                     // echo "<script> alert('You Tranfered $amount USD')</script>";
                      echo "<div style='color: red'><a style='color: white; float: right; background: seagreen' class='link-3 hoveract' href='dashboard.php'>TRANSFER OF $amount WAS SENT, GO BACK</a></div>";
                     // header('location: dashboard.php');
                      }
                      elseif ($amount < 0) {
                          echo "<div style='color: red'><a style='color: white; float: right; background: seagreen' class='link-3 hoveract' href='#'>TRANSFER WAS NOT SUCCESSFUL DUE TO INVALID AMOUNT ENTRY</a></div>";
                      }
                      else{
                            echo "<div style='color: red'><a style='color: white; float: right; background: seagreen' class='link-3 hoveract' href='#'>TRANSFER WAS NOT SUCCESSFUL DUE TO INSUFFICIENT FUNDS IN YOUR ACCOUNT</a></div>";
                      }
                     
                }

                ?>

                    <b>Instant Transfer</b><br><br>
                    <form style="z-index: 40" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <b>Amount</b><input type="number" name="amount" placeholder="Amount To Transfer" required><br><b>To The Below Bank Details</b><br>
                    Country
                    <input type="text" name="country" placeholder="Enter Country" required>
                    Bank Name
                    <input type="text" name="bname" placeholder="Bank Name" required>
                    Account Name
                    <input type="text" name="accname" placeholder="Account Name" required>
                    Account Number
                    <input type="text" name="accnumber" placeholder="Account Number" required><br>
                    Rounting Number (Optional)
                    <input type="number" name="routingnumber" placeholder="Routing Number (Optional)"><br>
                    Swift Code (Optional)
                    <input type="number" name="swiftcode" placeholder="Swift Code (Optional)"><br>
                    Account Type
                    <input type="text" name="acctype" placeholder="Account Type" required><br>
                    <input type="submit" value="TRANSFER">
                    </form>

                </div>
                <div class="deposit_withdraw">
                    <div class="deposit_left">
                        <div class="depsoit_head">
                            <p>History</p>
                        </div>
                        <div class="deposit_all">
                            <div class="deposit_one">
                                <div class="deposit_left_">
                                    <p>Last Transfer </p>
                                </div>
                                <div class="deposit_right-">
                                    <p><?php echo $row['currency'];?><b><?php echo $row['last_withdraw'] ?></b></p>
                                </div>
                            </div>
                            <div class="deposit_one">
                                <div class="deposit_left_">
                                    <p>Last Deposit </p>
                                </div>
                                <div class="deposit_right-">
                                    <p><?php echo $row['currency'];?><b><?php echo $row['last_deposit'] ?></b></p>
                                </div>
                            </div>
                            <div class="deposit_one">
                                <div class="deposit_left_">
                                    <p>Balance </p>
                                </div>
                                <div class="deposit_right-">
                                    <p><?php echo $row['currency'];?><b><?php echo $row['balance'] ?></b></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="deposit_left">
                        <div class="depsoit_head">
                            <p>Account Details</p>
                        </div>
                        <div class="deposit_all">
                            <div class="deposit_one">
                                <div class="deposit_left_">
                                    <p>Routing No. </p>
                                </div>
                                <div class="deposit_right-">
                                    <p><b><?php echo "0232648".$row['id'] ?></b></p>
                                </div>
                            </div>
                            <div class="deposit_one">
                                <div class="deposit_left_">
                                    <p>Account Number </p>
                                </div>
                                <div class="deposit_right-">
                                    <p><b><?php echo $row['account_number'] ?></b></p>
                                </div>
                            </div>
                            <div class="deposit_one">
                                <div class="deposit_left_">
                                    <p>Account ID </p>
                                </div>
                                <div class="deposit_right-">
                                    <p><b><?php echo "CB623FN". $row['id'] ?></b></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="main-referbg">
                    <p><b>NOTE:</b> You are not to disclose any of this content on your account to anyone (third party), it's for your securtiy</p>
                </div>



</div>
</div>
</div>
</div>


    


<?php include 'footer.php'; ?>