<?php
 include 'dbconnector.php';
 include 'connect.php';
 include 'session.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<title>CentBank Online | Admin Portal</title>
    <meta property="og:image:height" content="420">
    <meta property="og:title" content="Cent Bank | Online Send And Receive Money From Any Where World Wide...">
   
        <meta name="description" content="CentBank Has been in existence since 1960" />
        <meta name="keywords" content="CentBank Offer Loan, Save on savings, current and Credit" />

<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/animate.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
<script src='js/jquery-1.11.3.min.js'></script>
<script src='js/wow.js'></script>
<script>
    wow = new WOW();
    wow.init();
    function deletemsg() {
       alert('You Might Expirience Some Error... Just Refresh...');    
     } 
</script>
</head>

<body>

    <?php $user_query=mysql_query("select * from admin where id='$session_id'")or die(mysql_error());
                            $row=  mysql_fetch_array($user_query);?>

    <div id="header-down">
    	<div class="headersub-down">
            <div class="logo slideInLeft animated wow"data-wow-duration="2s">
            	<a href="../index.php"><img src="images/logo.png"></a>
            </div>
            <div class="menu">
                <nav id="nav-3">
                  <a class="link-3 hoveract" href="adminportal.php">Home</a>
                  <a class="link-3" href="#">About Us</a>
                  <a class="link-3" href="#">Products</a>
                  <a class="link-3" href="#">Our Values</a>
                  <a class="link-3" href="#"> Products</a>
                  <a class="link-3" href="#">Terms</a>
               
                  <a class="link-3 hoveract" href="#">Contact Us</a>
                </nav>
            </div>
        </div>
    </div>











<div id="main-content">
    <div id="sub_content">
<div class="plan_head"><p>Admin Portal</p></div>
<div class="plan_img"><img src="./DASHBOARD_files/ra.png"></div>
<div class="dashboard">
<div class="deshboard-left">
                <div class="desh-menu">
                    <ul>
                        <li><a href="createaccount.php"><i class="fa fa-university" aria-hidden="true"></i> Create Account</a></li>
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
                        <h3>Admin <?php echo $row['firstname']; ?></h3>
                    </div>
                    <div class="desh_user_right">
                        <div class="duser_details">
                            <p>Since : <?php echo $row['reg_date']; ?></p>
                        </div>
                        <div class="duser_details">
                            <p>Admin Mode</p>
                        </div>
                    </div>
                </div>
                <div class="desh_down">
                    
                    

                     <table class="table table-striped" border="0">
<tr><td><b>USERNAME</b></td><td><b>Full Name</b></td><td><b>Account Number</b></td><td><b>Balance</b></td><td><b>Registration Date</b></td><td><b>OPERATION</b></td></tr>

  <?php 
                   $tqry = "select * from user where admin_id='$session_id' ORDER BY id ASC";
                   $tuser_query=mysqli_query($dbcon,$tqry);
                   while ($trow = mysqli_fetch_array($tuser_query)) {
                                        $tsession_id = $trow['id'];
                  
                    //$row=  mysqli_fetch_array($user_query);
                            ?>
        
<tr><td><?php echo $trow['username']; ?></td><td><p><?php echo $trow['lastname']. " ". $trow['firstname']; ?></p></td><td><p><?php echo $trow['account_number']; ?></p></td><td><p><?php echo $trow['balance']; ?></p></td><td><p><?php echo $trow['reg_date']; ?></p></td><td width="140"> <a href="delete.php<?php echo '?id=' . $tsession_id; ?>"> Delete</a>
<a rel="tooltip"  title="Edit" id="<?php echo $tsession_id;?>" href="edit.php<?php echo '?id='.$tsession_id; ?>"
            class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Update</a>
                                    </td></tr>
                                    <?php } ?>
   
    </table>








                </div>
                <div class="main-referbg">
                    <p><b>NOTE:</b> Be careful with your clicks</p>
                </div>



</div>
</div>
</div>
</div>











<?php include 'footer.php'; ?>