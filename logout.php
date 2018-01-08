<?php 
unset($_SESSION['login_username']);
unset($_SESSION['login_user_id']);
session_destroy();
header('Location: home.php');
 ?>