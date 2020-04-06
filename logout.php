<?php
include_once "header.php";
if($_SESSION['loggedIn'])
{
  session_destroy();
  session_unset();
  header('Location: index.php');
}else {
  header('Location: index.php');
}
  ?>
