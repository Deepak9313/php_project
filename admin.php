<?php
include("navbar.php");
if($_SESSION["user"]){
    echo "<h1>Welcome ".$_SESSION['user']."</h1>";
}else{
    header("location:login.php");
}


?>