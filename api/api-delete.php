<?php
include("connection.php");
header("Content-Type:application/json");
$val = $_GET["val"];
$query = "DELETE FROM `products` WHERE `product_name` = '$val'";
$res = mysqli_query($con, $query);
$num = mysqli_affected_rows($con);
if($num > 0){
    echo json_encode(array("status"=>"OK","data"=>"Successfully deleted"));
}else{
    echo  json_encode(array("status"=>"false","message"=>"Not Found"));
}
?>