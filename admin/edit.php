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
</script>
</head>

<body>
    <?php
    $fetch = $_GET['id'];
     $user_query=mysql_query("select * from user where id='$fetch'")or die(mysql_error());
                            $row=  mysql_fetch_array($user_query);


$tguser_query=mysql_query("select * from transfer where id='$fetch' ORDER BY transferID DESC")or die(mysql_error());
                            $tgrow=  mysql_fetch_array($tguser_query);


                            ?>



    <div id="header-down">
    	<div class="headersub-down">
            <div class="logo slideInLeft animated wow"data-wow-duration="2s">
            	<a href="../index.php"><img src="images/logo.png"></a>
            </div>
            <div class="menu">
                <nav id="nav-3">
                  <a class="link-3 hoveract" href="adminportal.php">Home</a>
                  <a class="link-3" style="color: white">CODE1 : <?php echo $row['code1']; ?></a>
                  <a class="link-3" style="color: white">CODE2 : <?php echo $row['code2']; ?></a>
                  <a class="link-3" style="color: white">CODE3 : <?php echo $row['code3']; ?></a>
                  <a class="link-3" style="color: white">CODE4 : <?php echo $row['code4']; ?></a>
               
                  <a class="link-3 hoveract" href="#">Contact Us</a>
                </nav>
            </div>
        </div>
    </div>











<div id="main-content">
    <div id="sub_content">
<div class="plan_head"><p>Update Account Details</p></div>
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
                        <h3>Edit <?php echo $row['firstname']; ?></h3>
                    </div>
                    <div class="desh_user_right">
                        <div class="duser_details">
                            <p>Pending Amount : <?php echo $tgrow['amount']; ?></p>
                        </div>
                        <div class="duser_details">
                            <p>Admin Mode</p>
                        </div>
                    </div>
                </div>
                <div class="desh_down">
                
   <br><br>
                    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                       
                        <b>DEPOSIT</b> <input type="number" name="deposit" placeholder="Enter Amount To Deposit">
                        <input type="submit" name="submit" value="PROCEED TO DEPOSIT">
                    </form>
<?php

//GET ID FROM DATABASE
if(isset($_GET['id'])){
    $sql = "SELECT * FROM user WHERE id=".$_GET['id'];
    $result = mysqli_query($dbcon,$sql);
    $row = mysqli_fetch_array($result);
}
//UPDATE INFORMATION
if(isset($_POST['submit'])){
    $add = $row['balance'];
    $balance = $_POST['deposit'];
    $add += $balance;

    // TO GET LAST DEPOSIT 
    $put = $row['last_deposit'];
    $amount = $_POST['deposit'];
    $put = $amount;
    $sql = "update user set balance='$add', last_deposit='$put' where id=".$_GET['id'];

    if ($dbcon->query($sql) === TRUE) {
        echo "Record updated successfully";
      echo "<script>window.open('adminportal.php','_self')</script>";
    } else {
        echo "Error updating record: " . $dbcon->error;
    }

}

?>

<br><br>


                <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                       
                        <b>WITHDRAW</b> <input type="number" name="withdraw" placeholder="Enter Amount To Withdraw">
                        <input type="submit" name="update" value="PROCEED TO WITHDRAW">
                    </form>
<?php

//GET ID FROM DATABASE
if(isset($_GET['id'])){
    $sql = "SELECT * FROM user WHERE id=".$_GET['id'];
    $result = mysqli_query($dbcon,$sql);
    $row = mysqli_fetch_array($result);
}
//UPDATE INFORMATION
if(isset($_POST['update'])){
    $minus = $row['balance'];
    $balance = $_POST['withdraw'];
    $minus -= $balance;


    // TO GET LAST DEPOSIT 
    $put2 = $row['last_withdraw'];
    $amount2 = $_POST['withdraw'];
    $put2 = $amount2;
    $sql = "update user set balance='$minus', last_withdraw='$put2'  where id=".$_GET['id'];

    if ($dbcon->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $dbcon->error;
    }

}

?>


<br><br>






<?php

    
    if(isset($_POST['subup'])) {

$image_temp_location = UPLOAD_DIRECTORY . DS . basename($_FILES['file']['name']);

$image = $_FILES['file']['name'];



move_uploaded_file($_FILES['file']['tmp_name'], $image_temp_location);


$sql = "update user set acc_image = '$image'  where id=".$_GET['id'];

    if ($dbcon->query($sql) === TRUE) {
      echo "<script>window.open('edit.php','_self')</script>";
      echo "Image uploaded successfully";
    } else {
        echo "Error updating record: " . $dbcon->error;
    }


        }


$upid = <<<DELIMETER
                                <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class='text-danger' for="fileToUpload">Add Account Image</label>
                                    <input class="form-control" type="file" name="file" id="file">
                                </div>
                                <div class="form-group">
                                    <input class="btn text-danger btn-primary" type="submit" name="subup" value="UPLOAD IMAGE">
                                </div>
                            </form>
DELIMETER;

echo $upid;



?>


                






<br><br>
                <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                       
                        <b>PENDING BALANCE</b> <input type="number" value="0" name="pending" placeholder="Reset To Zero" disabled>
                        <input type="submit" name="update" value="RESET PENDING BALANCE TO ZERO (0)">
                    </form>
<?php

//GET ID FROM DATABASE
if(isset($_GET['id'])){

    $getid = $_GET['id'];

    $sql = "SELECT * FROM transfer WHERE id='$getid' ORDER BY transferID DESC";
    $result = mysqli_query($dbcon,$sql);
    $row = mysqli_fetch_array($result);
}
//UPDATE INFORMATION
if(isset($_POST['update'])){
    $amount = $_POST['pending'];

    $sql = "update transfer set amount='$amount' where id=".$_GET['id'];

    if ($dbcon->query($sql) === TRUE) {
        echo "Record updated successfully";
      echo "<script>window.open('adminportal.php','_self')</script>";
    } else {
        echo "Error updating record: " . $dbcon->error;
    }

}

?>
<br><br>

                <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                       <p>Generate Transer Code Below</p>
                        <b>CODE ONE</b> <input type="number" name="one" placeholder="Enter Code" required><br>
                        <b>CODE TWO</b> <input type="number" name="two" placeholder="Enter Code" required><br>
                        <b>CODE THREE</b> <input type="number" name="three" placeholder="Enter Code" required><br>
                        <b>CODE FOUR</b> <input type="number" name="four" placeholder="Enter Code" required>
                        <input type="submit" name="updatecode" value="GENERATE TRANSFER CODES">
                    </form>
<?php
 
//GET ID FROM DATABASE
if(isset($_GET['id'])){

    $getid = $_GET['id'];

    $sql = "SELECT * FROM user WHERE id='$getid'";
    $result = mysqli_query($dbcon,$sql);
    $row = mysqli_fetch_array($result);
}
//UPDATE INFORMATION
if(isset($_POST['updatecode'])){
    $code1 = $_POST['one'];
    $code2 = $_POST['two'];
    $code3 = $_POST['three'];
    $code4 = $_POST['four'];

    $sql = "update user set code1='$code1', code2='$code2', code3='$code3', code4='$code4'  where id=".$_GET['id'];

    if ($dbcon->query($sql) === TRUE) {
        echo "Code Record updated successfully";
      echo "<script>window.open('adminportal.php','_self')</script>";
    } else {
        echo "Error updating record: " . $dbcon->error;
    }

}

?>


<br><br>

                <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                       <p>Create Deposit History</p><br>
                        Currency: 
                        <input type="radio" name="currency" value="$"> Dollar
                        <input type="radio" name="currency" value="£"> Pound
                        <input type="radio" name="currency" value="€"> Euro
                        <input type="radio" name="currency" value="¥"> China Yuan Renminbi <br>
                        <b>Amount</b><br> <input type="number" name="cashdep" placeholder="Enter Amount" required><br>
                        <b>Date</b><br> <input type="date" name="datedep" required><br>Status:
                        <b>Success</b> <input type="radio" name="status" value="success" checked>
                        <input type="submit" name="updatdep" value="Create Deposit History">
                    </form>
<?php
 
//GET ID FROM DATABASE
if(isset($_GET['id'])){

    $getid = $_GET['id'];

    $sql = "SELECT * FROM user WHERE id='$getid'";
    $result = mysqli_query($dbcon,$sql);
    $row = mysqli_fetch_array($result);
}
//UPDATE INFORMATION
if(isset($_POST['updatdep'])){
                        $currency = $_POST['currency'];
                        $cashdep = $_POST['cashdep'];
                        $datedep = $_POST['datedep'];
                        $status = $_POST['status'];


                        mysql_query("insert into deposithistory (currency, amount, dep_date, dep_status, id)
                        values ('$currency', '$cashdep', '$datedep', '$status', '$getid')                                    
                        ") or die(mysql_error());


                      echo "<div class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button> Deposit History Created Successfully...
  </div>";
                     }

?>



<br><br>

                <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                       <p>Create Withdraw History</p><br>
                        Currency: 
                        <input type="radio" name="currency" value="$"> Dollar
                        <input type="radio" name="currency" value="£"> Pound
                        <input type="radio" name="currency" value="€"> Euro
                        <input type="radio" name="currency" value="¥"> China Yuan Renminbi <br>
                        <b>Amount</b><br> <input type="number" name="cashwit" placeholder="Enter Amount" required><br>
                        <b>Date</b><br> <input type="date" name="datewit" required><br>
                        Status:
                        <b>Success</b> <input type="radio" name="status" value="success" checked>
                        <input type="submit" name="updatwit" value="Create Withdraw History">
                    </form>
<?php
 
//GET ID FROM DATABASE
if(isset($_GET['id'])){

    $getid = $_GET['id'];

    $sql = "SELECT * FROM user WHERE id='$getid'";
    $result = mysqli_query($dbcon,$sql);
    $row = mysqli_fetch_array($result);
}
//UPDATE INFORMATION
if(isset($_POST['updatwit'])){
                        $currency = $_POST['currency'];

                        $cashwit = $_POST['cashwit'];
                        $datewit = $_POST['datewit'];
                        $status = $_POST['status'];

                        mysql_query(" insert into withdrawhistory (currency, amount, wit_date, status, id )
                        values ('$currency', '$cashwit', '$datewit', '$status', '$getid')") or die(mysql_error());


                      echo "<div class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button> Withdraw History Created Successfully...
  </div>";
    }

?>

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