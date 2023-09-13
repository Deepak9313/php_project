<?php
include("connection.php");
header('Content-Type:application/json');
header("Allow-origin:*");
header('Allow-Method:get');
$name = isset($_GET["data"]) ? $_GET["data"] : null;
if($name == ""){
    $err = json_encode(array('message'=>'Please Provide the name in url'));
    print_r($err);
    die();
}else{
    $search = "SELECT * FROM `user_accounts` where `name` LIKE '%{$name}%'";
$res = mysqli_query($con,$search);
$num = mysqli_num_rows($res);
if($num > 0){
    $output = mysqli_fetch_assoc($res);
    echo json_encode($output);
}else{
    $err = array("message"=>"No data exist");
    $json = json_encode($err);
    echo $json;
}
}


?>