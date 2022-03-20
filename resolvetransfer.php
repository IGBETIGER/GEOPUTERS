<?php
 include 'dbconnector.php';
 include 'connect.php';
 include 'session.php'; 


if (isset($_POST['c1'])) {

    $user_query=mysql_query("select * from user where id='$session_id'")or die(mysql_error());
                            $row=  mysql_fetch_array($user_query);

                    $code1 = $row['code1'];
                     $n1 = $_POST['n1'];

                        if ($code1 == $n1) {
                            $put = 2;
                            $sql = "update user set rank='$put' where id='$session_id'";
                            $dbcon->query($sql) === TRUE;
                            echo "<script>alert('OTP Code Successful')</script>";
                            header( "refresh:0;url=dashboard.php" );
                            
        
                        }
                        
                        else{

                             echo "<script>alert('Invalid OTP Code, Enter A Valid Code')</script>";
                            header( "refresh:0;url=dashboard.php" );
                            
                           //  header('Location: dashboard.php');
                         //   exit();

                    
                        }
                    }



 ?>
