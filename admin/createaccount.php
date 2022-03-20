<?php
 include 'dbconnector.php';
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
                  <a class="link-3" style="color: white"><?php
                                        $Today = date('y:m:d');
                                        $new = date('l, F d, Y', strtotime($Today));
                                        echo $new;
                                        ?></a>
                  <a class="link-3" href="#">Our Values</a>
                  <a class="link-3" href="#">Terms</a>
               
                  <a class="link-3 hoveract" href="#">Contact Us</a>
                </nav>
            </div>
        </div>
    </div>











<div id="main-content">
    <div id="sub_content">
<div class="plan_head"><p>Create New Account</p></div>
<div class="plan_img"><img src="./DASHBOARD_files/ra.png"></div>
<div class="dashboard">
<div class="deshboard-left">
                <div class="desh-menu">
                    <ul>
                        <li><a href="adminportal.php"><i class="fa fa-university" aria-hidden="true"></i> Back</a></li>
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
                <?php 
                     
                     if ($_SERVER["REQUEST_METHOD"]== "POST") {
                        $currency = $_POST['currency'];
                        $firstname = $_POST['firstname'];
                        $lastname = $_POST['lastname'];
                        $account_number = $_POST['account_number'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $account_type = $_POST['account_type'];

                        mysql_query("insert into user (currency, firstname, lastname, account_number, username, password, email, phone, account_type, admin_id)
                        values ('$currency', '$firstname', '$lastname', '$account_number', '$username', '$password', '$email', '$phone', '$account_type','$session_id')                                    
                        ") or die(mysql_error());


                      echo "<div class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button> Account Number: $account_number Created Successfully...
  </div>";
                     }

                ?>
                    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                        Fill the form correctly to create account...<br>
                        Currency: 
                        <input type="radio" name="currency" value="$"> Dollar
                        <input type="radio" name="currency" value="£"> Pound
                        <input type="radio" name="currency" value="€"> Euro
                        <input type="radio" name="currency" value="¥"> China Yuan Renminbi
                        <input type="text" name="firstname" placeholder="First Name">
                        <input type="text" name="lastname" placeholder="Last Name">
                        <input type="text" name="account_number" placeholder="Account Number">
                        <input type="text" name="username" placeholder="Enter Username">
                        <input type="text" name="password" placeholder="Enter Password">
                        <input type="email" name="email" placeholder="Email">
                        <input type="phone" name="phone" placeholder="Mobile Number">
                        <br>
                        Account Type: 
                        <input type="radio" name="account_type" value="Current"> Current
                        <input type="radio" name="account_type" value="Savings"> Savings
                        <input type="radio" name="account_type" value="Checking"> Checking
                        <input type="submit" value="SUBMIT">
                    </form>
                </div>
                <div class="deposit_withdraw">
                       <marquee behavior="alternate" style="color: red"> CALL ME NUMBER IF YOU HAVE ANY QUESTION: 08167645937</marquee>
                </div>
                <div class="main-referbg">
                    <p><b>NOTE:</b> Fill the form correctly, And Always remember the account you created</p>
                </div>



</div>
</div>
</div>
</div>











<?php include 'footer.php'; ?>