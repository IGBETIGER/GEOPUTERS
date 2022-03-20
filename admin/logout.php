<?php
   session_start();
   
   if(session_destroy()) {
   	echo "<script>
        alert('You have Successfully Logged Out');
   	</script>";	
     header("Location: index.php");
   }
?>