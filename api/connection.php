<?php
$servername = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($servername,$username,$password,"ecommerce_project");
if($con){
    echo "";
}else{
    echo mysqli_connect_error();
}

?>