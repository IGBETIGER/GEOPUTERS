<?php 
include ('dbconnector.php');

                                if (isset($_POST['save'])) {

                                    function clean($str) {
                                        $str = @trim($str);
                                        if (get_magic_quotes_gpc()) {
                                            $str = stripslashes($str);
                                        }
                                        return mysql_real_escape_string($str);
                                    } 

                                    $username = clean($_POST['username']);
                                    $password = clean($_POST['password']);

                                    $query = mysql_query("select * from user where username='$username' and password='$password'") or die(mysql_error());
                                    $count = mysql_num_rows($query);
                                    $row = mysql_fetch_array($query);


                                    if ($count > 0) {
                                                $seconds = 120 + time () ;
                                                setcookie(loggedin, date ("F jS - a "), $seconds);

                                        session_start();
                                        session_regenerate_id();
                                        $_SESSION['id'] = $row['id'];
                                        header('location:dashboard.php');
                                        session_write_close();
                                        exit();
                                    } else {
                                        session_write_close();
                                        ?>

                                     <?php
                                           include 'headerlogin.php';
                                       echo "<div class='alert alert-danger'><i class='icon-remove-sign' style='color: red'></i>&nbsp;Access Denied (Password Or Username Not Correct!)</div>";
                                           include 'footer.php';
                                    ?>
                                        <?php
                                      
                                    }
                                }


?>