<?php
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<title>CentBank Online | Admin</title>
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
</script>
</head>

<body>
    <?php
                                        $Today = date('y:m:d');
                                        $date = date('l, F d, Y', strtotime($Today));
                                        ?>
<div id="slider">
    <div id="header-down">
    	<div class="headersub-down">
            <div class="logo slideInLeft animated wow"data-wow-duration="2s">
            	<a href="../index.php"><img src="images/logo.png"></a>
            </div>
            <div class="menu">
                <nav id="nav-3">
                  <a class="link-3 hoveract" href="../index.php">Home</a>
                  <a class="link-3" href="#">About Us</a>
                  <a class="link-3" href="#">Products</a>
                  <a class="link-3" href="#">Our Values</a>
                  <a class="link-3" href="#"><?php echo $date; ?></a>
                  <a class="link-3" href="#">Terms</a>
               
                  <a class="link-3 hoveract" href="#">Contact Us</a>
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
                <p>THIS IS AN ADMIN PORTAL</p>
            </div>
            <div class="slider_head">
                <h3>“ KEEP THIS PORTAL SAFE FROM EVERYONE... IT'S FOR YOU ALONE. ”</h3>
            </div>
            <div class="login-register">
			<form method="POST">
                <div class="login bounceInLeft  wow   animated" data-wow-duration="2s">
                     <input type="text" placeholder="Enter Username" name="username">
                </div>
                <div class="register bounceInRight  wow   animated" data-wow-duration="2s">
                    <input type="text" placeholder="Enter Password" name="password">
                </div>
                    <input type="submit" name="login" value="Login">
                </form>
                <?php
                    include 'dbconnector.php';
                                if (isset($_POST['login'])) {

                                    function clean($str) {
                                        $str = @trim($str);
                                        if (get_magic_quotes_gpc()) {
                                            $str = stripslashes($str);
                                        }
                                        return mysql_real_escape_string($str);
                                    } 

                                    $username = clean($_POST['username']);
                                    $password = clean($_POST['password']);

                                    $query = mysql_query("select * from admin where username='$username' and password='$password'") or die(mysql_error());
                                    $count = mysql_num_rows($query);
                                    $row = mysql_fetch_array($query);


                                    if ($count > 0) {
                                        session_start();
                                        session_regenerate_id();
                                        $_SESSION['id'] = $row['id'];
                                        header('location:adminportal.php');
                                        session_write_close();
                                        exit();
                                    } else {
                                        session_write_close();
                                        ?>

                                     <?php
                                       echo "<div class='alert alert-danger'><i class='icon-remove-sign'></i>&nbsp;Access Denied (Password Or Username Not Correct!)</div>";
                                    ?>
                                        <?php
                                      
                                    }
                                }
                                ?>
			</div>

        </div>
    </div>
</div>























<?php include 'footer.php'; ?>