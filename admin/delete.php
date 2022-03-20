<?php
include('connect.php');
include 'session.php';
$get_id=$_GET['id'];

$sql = "delete from user where id='$get_id'";
if ($dbcon->query($sql) === TRUE) {
    echo "Record Deleted successfully";
    echo "<script>window.open('adminportal.php','_self')</script>";
} else {
    echo "Error Deleting record: " . $dbcon->error;
}
?>