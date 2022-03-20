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
        alert('You Can Reach Us Via\n Email: help@cent-online.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C,  
Denmark');
    }
function contact() {
        alert('You Can Reach Us Via\n Email: info@mycentonline.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C,  
Denmark');
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






<div id="news">
    <div id="sub_news">
        <div class="plan_head">
            <p>YOUR GOALS</p>
        </div>
        <div class="plan_img">
            <img src="images/cl.png">
        </div>
        <div class="all_news">
            <div class="news_left">


What’s important to you is important to us. That’s why, whether it’s business or personal, CentBank Wealth Management is here to provide the financial guidance you need to move forward with confidence and clarity. <br><br>
                
<div class="news_one">
                    <div class="news_icon">
                        <img src="images/news.png">
                    </div>
                    <div class="news_textright">
                        <div class="news-tittle">
                            <p>Your Personal Wealth Goals</p>
                        </div>
                        <div class="news_text">
                            <p>When it comes to pursuing your personal wealth goals, we offer the guidance you need for all stages of life....<br/></p><br>
                        </div>
                    </div>

                     <b>YOUR PERSONAL WEALTH GOALS</b>
                    <hr>
<p>In life, it’s important to have goals. At CB Wealth Management, we make it easier for you to work toward them. We want to help you see the big picture by elevating the discussion beyond numbers. After all, there’s a lot more to your life than dollar signs. make inquiries or explore financial topics that interest you in the pdf magazine. If you'd like to begin the conversation with one of our knowledgeable consultants, submit your contact information via our email to  request a meeting.

We also assist businesses with their financial planning needs.</p>
<br>
<p>contact us via email to learn how we can serve you.</p>
                </div>
                
            

<div class="news_one">
                    <div class="news_icon">
                        <img src="images/news.png">
                    </div>
                    <div class="news_textright">
                        <div class="news-tittle">
                            <p>Your Business Wealth Goals</p>
                        </div>
                        <div class="news_text">
                            <p>When you set out to reach your business wealth goals, choosing an experienced team just makes sense...<br/></p><br>
                        </div>
                    </div>

                    <b>YOUR BUSINESS WEALTH GOALS</b>
                    <hr>
<p>Goals are essential to any business plan. So is a partner who can work side by side with you to help you move toward your goals. Whether you’re looking to grow your business, preserve the wealth you’ve built or protect your employees, CB Wealth Management makes your goals ours. Explore topics that may be important to your business in the following section. Start the conversation now by requesting a meeting using the interactive form below. We want to learn more about what counts to you!</p>
<br>
<p>If you are an individual instead of a business, contact us via email to learn how we can serve you.</p>
                </div>
                
            






            </div>
        </div>
    </div>
</div>
















    <?php include 'footer.php'; ?>