<?php session_start();
session_destroy();
// détruit la session
header("Location:login.php");
exit;
?>