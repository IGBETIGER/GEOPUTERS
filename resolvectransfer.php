<?php
 include 'dbconnector.php';
 include 'connect.php';
 include 'session.php'; 

if (isset($_POST['c4'])) {

    $user_query=mysql_query("select * from user where id='$session_id'")or die(mysql_error());
                            $row=  mysql_fetch_array($user_query);

    $Tuser_query=mysql_query("select * from transfer where id='$session_id' ORDER BY transferID DESC")or die(mysql_error());
                            $trow=  mysql_fetch_array($Tuser_query);

                     
                        $code4 = $row['code4'];
                        $n4 = $_POST['name3'];

 
                        if ($code4 == $n4) {
                            $put = 5;
                            $sql = "update user set rank='$put' where id='$session_id'";
                            $dbcon->query($sql) === TRUE;



//UPDATE LAST WITHDRAWAL
                            $last = $row['last_withdraw'];
                            $pending = $trow['amount'];
                            $last = $pending;
                            $sql = "update user set last_withdraw='$last' where id='$session_id'";
                            $dbcon->query($sql) === TRUE;

                            $put = 6;
                            $sql = "update user set rank='$put' where id='$session_id'";
                            $dbcon->query($sql) === TRUE;


                            header( "refresh:0;url=dashboard.php" );
                        }
                        
                        else{

                             echo "<script>alert('Invalid Code, Enter A Valid Code')</script>";
                            header( "refresh:0;url=dashboard.php" );

                    
                        }
                    }                  

 ?>
