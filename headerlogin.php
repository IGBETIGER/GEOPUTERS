<?php 
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<!DOCTYPE html>
<html><html lang="en-US">
<head>
<meta charset="utf-8">
<title>CentBank Online</title>
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

    function contact() {
        alert('You Can Reach Us Via\n Email: info@mycentonline.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C, Denmark');
    }

    function apply() {
        alert('Send us application message Via\n Email: info@mycentonline.com\n A registration link we be sent to you.');
        }
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>

<body>
    <div style="position: fixed; bottom: 5px; left: 2px; z-index: 40" id="google_translate_element"> <img src="images/lang.png"><div style="width: 900px; height: 20px">.</div></div>

<div id="slider">
    <div id="header-down">
        <div class="headersub-down">
            <div class="logo slideInLeft animated wow"data-wow-duration="2s">
                <a href="index.php?a=home"><img src="images/logo.png"></a>
            </div>
            <div class="menu">
                <nav id="nav-3">
                  <a class="link-3 hoveract" href="index.php?a=Home">Home</a>
                  <a class="link-3" href="about.php?a=About-us">About Us</a>
                  <a class="link-3" href="services.php?a=Services">Services</a>
                  <a class="link-3" href="goals.php?a=Our-goals">Our Goal</a>
                  <a class="link-3" href="products.php?a=Products"> Products</a>
                  <a class="link-3" href="login.php?a=login">Login</a>
               
                  <a class="link-3 hoveract" style="cursor: pointer" onclick="contact()">Contact Us</a>
                </nav>
            </div>
        </div>
    </div>
    <div id="sub-slider">
        <div class="slider_man bounceInUp animated wow"data-wow-duration="2s">
            <img src="images/man.png"/ height="426">
        </div>
        <div class="slider_text">
            <div class="slider_text_">
                <p>Welcome To CentBank Online</p>
            </div>
            <div class="slider_head">
                <h3>“ We're helping our neighbors save for rainy days and supporting local charities who make our region great ”</h3>
            </div>
            <div class="login-register">
            
                <div class="login bounceInLeft  wow   animated" data-wow-duration="2s">
                    <a style="cursor: pointer;" onclick="apply()" class="a-link">Apply Online Banking</a>
                </div>
                <div class="register bounceInRight  wow   animated" data-wow-duration="2s">
                    <a href="login.php" class="a-link">Login Now</a>
                </div>
                            </div>
        </div>
    </div>
</div><br><br>