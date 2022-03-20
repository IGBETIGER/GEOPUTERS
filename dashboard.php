<?php
 include 'dbconnector.php';
 include 'connect.php';
 include 'session.php'; ?>
<!DOCTYPE html>
<html><html lang="en-US"><html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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
function contact() {
        alert('You Can Reach Us Via\n Email: info@mycentonline.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C, Denmark');
    }

    function contact2() {
        alert('You Can Reach Us Via\n Email: help@cent-online.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C, Denmark');
    }
    
    function contact5() {
        alert('You Can Reach Us Via\n Email: care@cent-online.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C, Denmark');
    }
    
    function contact6() {
        alert('You Can Reach Us Via\n Email: info@cent-online.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C, Denmark');
    }
    
    function contact7() {
        alert('You Can Reach Us Via\n Email: message@cent-online.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C, Denmark');
    }
    
    function contact8() {
        alert('You Can Reach Us Via\n Email: helpdesk@cent-online.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C, Denmark');
    }

    function contact3() {
        alert('You Can Reach Us Via\n Email: support@cent-online.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C, Denmark');
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
$rank = $row['rank'];
$code1 = $row['code1'];
$code2 = $row['code2'];
$code3 = $row['code3'];
$code4 = $row['code4'];
$acc_image = $row['acc_image'];
$admin_id = $row['admin_id'];

$n1;
$n2;
$n3;
$n4;

                            ?>

<?php $transfer_query=mysql_query("select * from transfer where id='$session_id' ORDER BY transferID DESC")or die(mysql_error());
                            $trow=  mysql_fetch_array($transfer_query);?>                            
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
                  <a class="link-3" style="cursor: pointer"><?php echo $date; ?></a>
                  <?php
                    if ($row['admin_id']==1) {
                        echo "<a class='link-3' style='cursor: pointer' onclick='contact2()'>Contact Us</a>";
                    } else if($row['admin_id']==4){
                        echo "<a class='link-3' style='cursor: pointer' onclick='contact3()'>Contact Us</a>";
                    } else if($row['admin_id']==8){
                        echo "<a class='link-3' style='cursor: pointer' onclick='contact8()'>Contact Us</a>";
                    }
                    else if($row['admin_id']==5){
                        echo "<a class='link-3' style='cursor: pointer' onclick='contact5()'>Contact Us</a>";
                    }
                    else if($row['admin_id']==6){
                        echo "<a class='link-3' style='cursor: pointer' onclick='contact6()'>Contact Us</a>";
                    }
                    else if($row['admin_id']==7){
                        echo "<a class='link-3' style='cursor: pointer' onclick='contact7()'>Contact Us</a>";
                    }
                    else {
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
<div class="plan_head"><p>My account</p></div>
<div class="plan_img"><img src="./DASHBOARD_files/ra.png"></div>
<div class="dashboard">
<div class="deshboard-left">
                <div class="desh-menu">
                    <ul>
                        <li><a href="dashboard.php"><i class="fa fa-university" aria-hidden="true"></i> Dashboard</a></li>
                        <li><a style="cursor: pointer" onclick="withdraw()"><i class="fa fa-upload" aria-hidden="true"></i> Withdraw</a></li>
                        <li><a style="cursor: pointer" onclick="deposit()"><i class="fa fa-list" aria-hidden="true"></i> Deposit</a></li>
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
                        <?php
                        
                        $num3 = 9;
                        
                            if($admin_id == $num3){
                                
                                echo "<img height='80' width='95' src='./admin/uploads/$acc_image' alt='Account Image'>";
                                
                            }
                            else{
                              echo "<img height='80' width='95' src='./admin/uploads/$acc_image' alt='Account Image'>";
                            }
                        
                        
                        ?>
                        
                    </div>
                    <div class="welcome">
                        <h3>Welcome <?php echo $row['firstname'] ?></h3>
                    </div>
                    <div class="desh_user_right">
                        <div class="duser_details">
                            <p>Last Name : <?php echo $row['lastname'] ?></p>
                        </div>
                        <div class="duser_details">
                            <p>Account Type : <?php echo $row['account_type'] ?></p>
                        </div>
                    </div>
                </div>

        <?php
                
                if ($row['admin_id'] == 1) {
                    
                    if ($rank == 1) {

                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> Your Transfer Needs An OTP Code To Be 100% Successful... Contact Us Via Email: <em>help@cent-online.com</em> </p><br>

                     Enter OTP Code <form method='post' action='resolvetransfer.php'><input type='number' name='n1' style=' height: 30px; margin-left: 4px' placeholder='OTP CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c1' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                      
                    
                    }
                }
                else if ($rank == 2) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> OTP Code Was Registered, You Need A COT Code To Complete The Transfer... Contact Us Via Email: <em>help@cent-online.com</em> </p><br>

                     Enter COT Code <form method='post' action='resolveatransfer.php'><input type='number' name='name1' style=' height: 30px; margin-left: 4px' placeholder='COT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c2' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";
                    
                    }
                }
                else if ($rank == 3) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> COT Code Was Successful, Electronic Code Is Needed... Contact Us Via Email: <em>help@cent-online.com</em> </p><br>

                     Enter Electronic Code <form method='post' action='resolvebtransfer.php'><input type='number' name='name2' style=' height: 30px; margin-left: 4px' placeholder='Electronic Code'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c3' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if ($rank == 4) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: seagreen' class='main-referbg'>
                    <p><b>NOTE:</b> Congratulations, Your Transfer Is 98% Successful, Enter VAT Code For 100% Transfer... Contact Us Via Email: <em>help@cent-online.com</em> </p><br>

                     Enter VAT Code <form method='post' action='resolvectransfer.php'><input type='number' name='name3' style=' height: 30px; margin-left: 4px' placeholder='VAT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c4' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if($rank == 6){


                    echo "<script>alert('Congratulations, Your Transfer Is 100% Complete!!!')</script>";

                    $put = 7;
                    $sql = "update user set rank='$put' where id='$session_id'";
                    $dbcon->query($sql) === TRUE;
                    

                }

                }
                else if($row['admin_id'] == 4) {
                    
                    if ($rank == 1) {

                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> Your Transfer Needs An OTP Code To Be 100% Successful... Contact Us Via Email: <em>support@cent-online.com</em> </p><br>

                     Enter OTP Code <form method='post' action='resolvetransfer.php'><input type='number' name='n1' style=' height: 30px; margin-left: 4px' placeholder='OTP CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c1' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                      
                    
                    }
                }
                else if ($rank == 2) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> OTP Code Was Registered, You Need A COT Code To Complete The Transfer... Contact Us Via Email: <em>support@cent-online.com</em> </p><br>

                     Enter COT Code <form method='post' action='resolveatransfer.php'><input type='number' name='name1' style=' height: 30px; margin-left: 4px' placeholder='COT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c2' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";
                    
                    }
                }
                else if ($rank == 3) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> COT Code Was Successful, Electronic Code Is Needed... Contact Us Via Email: <em>support@cent-online.com</em> </p><br>

                     Enter Electronic Code <form method='post' action='resolvebtransfer.php'><input type='number' name='name2' style=' height: 30px; margin-left: 4px' placeholder='Electronic Code'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c3' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if ($rank == 4) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: seagreen' class='main-referbg'>
                    <p><b>NOTE:</b> Congratulations, Your Transfer Is 98% Successful, Enter VAT Code For 100% Transfer... Contact Us Via Email: <em>support@cent-online.com</em> </p><br>

                     Enter VAT Code <form method='post' action='resolvectransfer.php'><input type='number' name='name3' style=' height: 30px; margin-left: 4px' placeholder='VAT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c4' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if($rank == 6){


                    echo "<script>alert('Congratulations, Your Transfer Is 100% Complete!!!')</script>";

                    $put = 7;
                    $sql = "update user set rank='$put' where id='$session_id'";
                    $dbcon->query($sql) === TRUE;
                    

                }

                }
                
                else if($row['admin_id'] == 5) {
                    
                    if ($rank == 1) {

                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> Your Transfer Needs An OTP Code To Be 100% Successful... Contact Us Via Email: <em>care@cent-online.com</em> </p><br>

                     Enter OTP Code <form method='post' action='resolvetransfer.php'><input type='number' name='n1' style=' height: 30px; margin-left: 4px' placeholder='OTP CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c1' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                      
                    
                    }
                }
                else if ($rank == 2) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> OTP Code Was Registered, You Need A COT Code To Complete The Transfer... Contact Us Via Email: <em>care@cent-online.com</em> </p><br>

                     Enter COT Code <form method='post' action='resolveatransfer.php'><input type='number' name='name1' style=' height: 30px; margin-left: 4px' placeholder='COT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c2' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";
                    
                    }
                }
                else if ($rank == 3) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> COT Code Was Successful, Electronic Code Is Needed... Contact Us Via Email: <em>care@cent-online.com</em> </p><br>

                     Enter Electronic Code <form method='post' action='resolvebtransfer.php'><input type='number' name='name2' style=' height: 30px; margin-left: 4px' placeholder='Electronic Code'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c3' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if ($rank == 4) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: seagreen' class='main-referbg'>
                    <p><b>NOTE:</b> Congratulations, Your Transfer Is 98% Successful, Enter VAT Code For 100% Transfer... Contact Us Via Email: <em>care@cent-online.com</em> </p><br>

                     Enter VAT Code <form method='post' action='resolvectransfer.php'><input type='number' name='name3' style=' height: 30px; margin-left: 4px' placeholder='VAT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c4' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if($rank == 6){


                    echo "<script>alert('Congratulations, Your Transfer Is 100% Complete!!!')</script>";

                    $put = 7;
                    $sql = "update user set rank='$put' where id='$session_id'";
                    $dbcon->query($sql) === TRUE;
                    

                }

                }
                
                else if($row['admin_id'] == 6) {
                    
                    if ($rank == 1) {

                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> Your Transfer Needs An OTP Code To Be 100% Successful... Contact Us Via Email: <em>info@cent-online.com</em> </p><br>

                     Enter OTP Code <form method='post' action='resolvetransfer.php'><input type='number' name='n1' style=' height: 30px; margin-left: 4px' placeholder='OTP CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c1' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                      
                    
                    }
                }
                else if ($rank == 2) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> OTP Code Was Registered, You Need A COT Code To Complete The Transfer... Contact Us Via Email: <em>info@cent-online.com</em> </p><br>

                     Enter COT Code <form method='post' action='resolveatransfer.php'><input type='number' name='name1' style=' height: 30px; margin-left: 4px' placeholder='COT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c2' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";
                    
                    }
                }
                else if ($rank == 3) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> COT Code Was Successful, Electronic Code Is Needed... Contact Us Via Email: <em>info@cent-online.com</em> </p><br>

                     Enter Electronic Code <form method='post' action='resolvebtransfer.php'><input type='number' name='name2' style=' height: 30px; margin-left: 4px' placeholder='Electronic Code'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c3' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if ($rank == 4) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: seagreen' class='main-referbg'>
                    <p><b>NOTE:</b> Congratulations, Your Transfer Is 98% Successful, Enter VAT Code For 100% Transfer... Contact Us Via Email: <em>info@cent-online.com</em> </p><br>

                     Enter VAT Code <form method='post' action='resolvectransfer.php'><input type='number' name='name3' style=' height: 30px; margin-left: 4px' placeholder='VAT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c4' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if($rank == 6){


                    echo "<script>alert('Congratulations, Your Transfer Is 100% Complete!!!')</script>";

                    $put = 7;
                    $sql = "update user set rank='$put' where id='$session_id'";
                    $dbcon->query($sql) === TRUE;
                    

                }

                }
                
                else if($row['admin_id'] == 7) {
                    
                    if ($rank == 1) {

                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> Your Transfer Needs An OTP Code To Be 100% Successful... Contact Us Via Email: <em>message@cent-online.com</em> </p><br>

                     Enter OTP Code <form method='post' action='resolvetransfer.php'><input type='number' name='n1' style=' height: 30px; margin-left: 4px' placeholder='OTP CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c1' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                      
                    
                    }
                }
                else if ($rank == 2) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> OTP Code Was Registered, You Need A COT Code To Complete The Transfer... Contact Us Via Email: <em>message@cent-online.com</em> </p><br>

                     Enter COT Code <form method='post' action='resolveatransfer.php'><input type='number' name='name1' style=' height: 30px; margin-left: 4px' placeholder='COT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c2' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";
                    
                    }
                }
                else if ($rank == 3) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> COT Code Was Successful, Electronic Code Is Needed... Contact Us Via Email: <em>message@cent-online.com</em> </p><br>

                     Enter Electronic Code <form method='post' action='resolvebtransfer.php'><input type='number' name='name2' style=' height: 30px; margin-left: 4px' placeholder='Electronic Code'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c3' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if ($rank == 4) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: seagreen' class='main-referbg'>
                    <p><b>NOTE:</b> Congratulations, Your Transfer Is 98% Successful, Enter VAT Code For 100% Transfer... Contact Us Via Email: <em>message@cent-online.com</em> </p><br>

                     Enter VAT Code <form method='post' action='resolvectransfer.php'><input type='number' name='name3' style=' height: 30px; margin-left: 4px' placeholder='VAT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c4' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if($rank == 6){


                    echo "<script>alert('Congratulations, Your Transfer Is 100% Complete!!!')</script>";

                    $put = 7;
                    $sql = "update user set rank='$put' where id='$session_id'";
                    $dbcon->query($sql) === TRUE;
                    

                }

                }
                
                else if($row['admin_id'] == 6) {
                    
                    if ($rank == 1) {

                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> Your Transfer Needs An OTP Code To Be 100% Successful... Contact Us Via Email: <em>info@cent-online.com</em> </p><br>

                     Enter OTP Code <form method='post' action='resolvetransfer.php'><input type='number' name='n1' style=' height: 30px; margin-left: 4px' placeholder='OTP CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c1' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                      
                    
                    }
                }
                else if ($rank == 2) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> OTP Code Was Registered, You Need A COT Code To Complete The Transfer... Contact Us Via Email: <em>info@cent-online.com</em> </p><br>

                     Enter COT Code <form method='post' action='resolveatransfer.php'><input type='number' name='name1' style=' height: 30px; margin-left: 4px' placeholder='COT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c2' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";
                    
                    }
                }
                else if ($rank == 3) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> COT Code Was Successful, Electronic Code Is Needed... Contact Us Via Email: <em>info@cent-online.com</em> </p><br>

                     Enter Electronic Code <form method='post' action='resolvebtransfer.php'><input type='number' name='name2' style=' height: 30px; margin-left: 4px' placeholder='Electronic Code'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c3' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if ($rank == 4) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: seagreen' class='main-referbg'>
                    <p><b>NOTE:</b> Congratulations, Your Transfer Is 98% Successful, Enter VAT Code For 100% Transfer... Contact Us Via Email: <em>info@cent-online.com</em> </p><br>

                     Enter VAT Code <form method='post' action='resolvectransfer.php'><input type='number' name='name3' style=' height: 30px; margin-left: 4px' placeholder='VAT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c4' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if($rank == 6){


                    echo "<script>alert('Congratulations, Your Transfer Is 100% Complete!!!')</script>";

                    $put = 7;
                    $sql = "update user set rank='$put' where id='$session_id'";
                    $dbcon->query($sql) === TRUE;
                    

                }

                }
                
                else if($row['admin_id'] == 8) {
                    
                    if ($rank == 1) {

                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> Your Transfer Needs An OTP Code To Be 100% Successful... Contact Us Via Email: <em>helpdesk@cent-online.com</em> </p><br>

                     Enter OTP Code <form method='post' action='resolvetransfer.php'><input type='number' name='n1' style=' height: 30px; margin-left: 4px' placeholder='OTP CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c1' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                      
                    
                    }
                }
                else if ($rank == 2) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> OTP Code Was Registered, You Need A COT Code To Complete The Transfer... Contact Us Via Email: <em>helpdesk@cent-online.com</em> </p><br>

                     Enter COT Code <form method='post' action='resolveatransfer.php'><input type='number' name='name1' style=' height: 30px; margin-left: 4px' placeholder='COT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c2' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";
                    
                    }
                }
                else if ($rank == 3) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> COT Code Was Successful, Electronic Code Is Needed... Contact Us Via Email: <em>helpdesk@cent-online.com</em> </p><br>

                     Enter Electronic Code <form method='post' action='resolvebtransfer.php'><input type='number' name='name2' style=' height: 30px; margin-left: 4px' placeholder='Electronic Code'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c3' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if ($rank == 4) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: seagreen' class='main-referbg'>
                    <p><b>NOTE:</b> Congratulations, Your Transfer Is 98% Successful, Enter VAT Code For 100% Transfer... Contact Us Via Email: <em>helpdesk@cent-online.com</em> </p><br>

                     Enter VAT Code <form method='post' action='resolvectransfer.php'><input type='number' name='name3' style=' height: 30px; margin-left: 4px' placeholder='VAT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c4' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if($rank == 6){


                    echo "<script>alert('Congratulations, Your Transfer Is 100% Complete!!!')</script>";

                    $put = 7;
                    $sql = "update user set rank='$put' where id='$session_id'";
                    $dbcon->query($sql) === TRUE;
                    

                }

                }
                 else {
                    // Normal form
                    if ($rank == 1) {

                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> Your Transfer Needs An OTP Code To Be 100% Successful... Contact Us. </p><br>

                     Enter OTP Code <form method='post' action='resolvetransfer.php'><input type='number' name='n1' style=' height: 30px; margin-left: 4px' placeholder='OTP CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c1' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                      
                    
                    }
                }
                else if ($rank == 2) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> OTP Code Was Registered, You Need A COT Code To Complete The Transfer... </p><br>

                     Enter COT Code <form method='post' action='resolveatransfer.php'><input type='number' name='name1' style=' height: 30px; margin-left: 4px' placeholder='COT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c2' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";
                    
                    }
                }
                else if ($rank == 3) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: grey' class='main-referbg'>
                    <p><b>NOTE:</b> COT Code Was Successful, Electronic Code Is Needed... Contact Us. </p><br>

                     Enter Electronic Code <form method='post' action='resolvebtransfer.php'><input type='number' name='name2' style=' height: 30px; margin-left: 4px' placeholder='Electronic Code'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c3' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }

                }
                else if ($rank == 4) {
                    if ($trow['amount'] > 0) {
                    echo "<div id='show' class='desh_down' style='display: none; padding-left: 1px; padding-right: 3px'>";
                    echo "<div style='background: seagreen' class='main-referbg'>
                    <p><b>NOTE:</b> Congratulations, Your Transfer Is 98% Successful, Enter VAT Code For 100% Transfer!!! </p><br>

                     Enter VAT Code <form method='post' action='resolvectransfer.php'><input type='number' name='name3' style=' height: 30px; margin-left: 4px' placeholder='VAT CODE'><input style='display: inline;  height: 38px; width: 7vw; padding: 2px; background: seagreen' type='submit' name='c4' value='Proceed'></form";
                    echo "<br><br><a style='font-size: 15px; cursor: pointer; display: inline; width: 6vw; padding: 2px; float: right; margin: 2px'  onclick='resolveClose()' class='a-link'>Close</a></div>
                    </div>";

                    }
                }
                else if($rank == 6){


                    echo "<script>alert('Congratulations, Your Transfer Is 100% Complete!!!')</script>";

                    $put = 7;
                    $sql = "update user set rank='$put' where id='$session_id'";
                    $dbcon->query($sql) === TRUE;
                    

                }

                }
                

        ?>


                <div class="desh_down">
                    <div class="balance_left">
                        <div class="balance_one">
                            <div class="balance_icon">
                                <img src="./DASHBOARD_files/tba.png">
                            </div>
                            <div class="balance_tittle">
                                <p>Total Balance:  <br><b><?php echo $row['currency'].number_format($row['balance']); ?></b></p>
                            </div>
                        </div>
                        <div onclick="" class="balace_btn1">
                            <?php 

                                if (($rank == 1) || ($rank == 2) || ($rank == 3) || ($rank == 4) || ($rank == 5)) {
                                 echo "<div onclick='checkTransfer()'  style='font-size: 15px; cursor: pointer'  class='a-link'>Transfer Money</div>";
                                }
                                else{
                                    echo "<a style='font-size: 15px;' href='transfer.php' class='a-link'>Transfer Money</a>";
                                }


                            ?>
                                
                        </div>
                    </div>
                    <div class="balance_right">
                        <div class="balance_one">
                            <div class="balance_icon">
                                <img src="./DASHBOARD_files/tba.png">
                            </div>
                            <?php 

                                if (($rank == 1) || ($rank == 2) || ($rank == 3) || ($rank == 4) || ($rank == 5)) {
                                 echo "<div class='balance_tittle'>";
                                    echo "<p style='color:red'>Transfer Pending: <br><b>";
                                    echo $row['currency'] .number_format($trow['amount']);
                                 echo "</b></p></div>";
                                }
                                else{
                                    echo "<div class='balance_tittle'>";
                                    echo "<p style='color:black'>Notice Board <br> <b>";
                                    echo "No signal";
                                    echo "</b></p></div>";
                                }

                            ?>
                        </div>
                        <div class="balace_btn1">

                            <?php 

                                if (($rank == 1) || ($rank == 2) || ($rank == 3) || ($rank == 4) || ($rank == 5)) {
                                 echo "<a style='font-size: 15px; background: red; cursor: pointer'  onclick='resolve()' class='a-link'>Resolve</a>";
                                }
                                else{
                                    echo "<a style='font-size: 15px;'  href='#' class='a-link'>Refresh</a>";
                                }


                            ?>
                                   
                        </div>
                    </div>
                </div>
<p style="color: green; float: right; margin-right: 30px">
    <?php 

        if ($rank == 1) {
            echo "<b> Your Transfer Progress Is 25% Complete</b>";
        } 
        else if($rank == 2){
            echo "<b> Your Transfer Progress Is 52% Complete</b>";
        }
        else if($rank == 3){
            echo "<b> Your Transfer Progress Is 70% Complete</b>";
        }
        else if($rank == 4){
            echo "<b> Your Transfer Progress Is 98% Complete</b>";
        }
        



    ?>

</p>


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
                                    <p><?php echo $row['currency'];?><b><?php echo number_format($row['last_withdraw']) ?></b></p>
                                </div>
                            </div>
                            <div class="deposit_one">
                                <div class="deposit_left_">
                                    <p>Last Deposit </p>
                                </div>
                                <div class="deposit_right-">
                                    <p><?php echo $row['currency'];?><b><?php echo number_format($row['last_deposit']) ?></b></p>
                                </div>
                            </div>
                            <div class="deposit_one">
                                <div class="deposit_left_">
                                    <p>Withdrawable </p>
                                </div>
                                <div class="deposit_right-">
                                    <p><?php echo $row['currency'];?><b><?php echo  number_format($row['balance'] - 50) ?></b></p>
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

<script>
function resolve() {
    document.getElementById("show").style.display = "block";
}
function resolveClose() {
    document.getElementById("show").style.display = "none";
}
</script>
    


<?php include 'footer.php'; ?>