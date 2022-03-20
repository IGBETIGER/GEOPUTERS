<?php
 include 'dbconnector.php';
 include 'connect.php';
 include 'session.php'; 


if (isset($_POST['c2'])) {

    $user_query=mysql_query("select * from user where id='$session_id'")or die(mysql_error());
                            $row=  mysql_fetch_array($user_query);

                     
                        $code2 = $row['code2'];
                        $n2 = $_POST['name1'];


                        if ($code2 == $n2) {
                            $put = 3;
                            $sql = "update user set rank='$put' where id='$session_id'";
                            $dbcon->query($sql) === TRUE;
                            echo "<script>alert('COT Code Successful')</script>";
                            header( "refresh:0;url=dashboard.php" );
                            
                            //header('Location: dashboard.php');
                            //exit();
                        }
                        
                        else{

                             echo "<script>alert('Invalid COT Code, Enter A Valid Code')</script>";
                            header( "refresh:0;url=dashboard.php" );
                            // header('Location: dashboard.php');
                            //exit();
                    
                        }
                    }


 
 ?>
