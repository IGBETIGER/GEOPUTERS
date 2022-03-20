<?php
 include 'dbconnector.php';
 include 'connect.php';
 include 'session.php'; 


if (isset($_POST['c3'])) {

    $user_query=mysql_query("select * from user where id='$session_id'")or die(mysql_error());
                            $row=  mysql_fetch_array($user_query);

                     
                        $code3 = $row['code3'];
                        $n3 = $_POST['name2'];


                        if ($code3 == $n3) {
                            $put = 4;
                            $sql = "update user set rank='$put' where id='$session_id'";
                            $dbcon->query($sql) === TRUE;
                            echo "<script>alert('Electronic Code Successful')</script>";
                            header( "refresh:0;url=dashboard.php" );
                        }
                        
                        else{

                             echo "<script>alert('Invalid Electronic Code, Enter A Valid Code')</script>";
                            header( "refresh:0;url=dashboard.php" );

                    
                        }
                    } 

                  

 ?>
