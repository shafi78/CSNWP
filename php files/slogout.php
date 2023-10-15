<?php

session_start() ;
unset($_SESSION['email']);

?>

<script>alert("Logout Successful");
location.replace("home.php") ;
</script>
