                <?php 
                include 'dbconnector.php';
                include 'session.php';
                     
                     if ($_SERVER["REQUEST_METHOD"]== "POST") {
                        $amount = $_POST['amount'];
                        $bname = $_POST['bname'];
                        $accname = $_POST['accname'];
                        $accnumber = $_POST['accnumber'];
                        $routingnumber = $_POST['routingnumber'];
                        $swiftcode = $_POST['swiftcode'];
                        $acctype = $_POST['acctype'];

                        mysql_query("insert into transfer (amount, bank_name, account_name, account_number, routing_number, swift_code, account_type, id)
                        values ('$amount', '$bname', '$accname', '$accnumber', '$routingnumber', '$swiftcode', '$acctype', '$session_id')                                    
                        ") or die(mysql_error());


                      echo "<script> alert('You Tranfered $amount USD')</script>";
                     // header('location: dashboard.php');
                     }

                ?>