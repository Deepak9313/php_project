<?php
session_start();
unset($_SESSION['admin_login']);
unset($_SESSION['admin_username']);

session_destroy();
          // locate to category.php file
header('location:login.php');       















?>