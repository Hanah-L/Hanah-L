<?php
session_start();
unset($_SESSION['loginUser']);
header('Location: a0406-08-login.php');
?>