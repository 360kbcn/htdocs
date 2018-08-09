<?php
  session_start();
  $_SESSION=[];
  session_destroy();
  
  if(!isset($_SESSION['user'])) header("Location: login.php");
?>
