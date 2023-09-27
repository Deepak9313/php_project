<?php
include("connection.php");
header("Content-Type:application/json");
$key = $_GET['api_key'] ? $_GET['api_key'] : "abc";
$api_check = "SELECT * FROM api_keys WHERE `api_key` = '$key'";
$res = mysqli_query($con, $api_check);
$num = mysqli_num_rows($res);
if($num > 0){
    $query = "SELECT * FROM user_accounts";
    $res = mysqli_query($con,$query);
    $output = array();
    while ($row = mysqli_fetch_assoc($res)){
       $output[] = array(
        "user_id" => $row["user_id"],
        "name" => $row["name"],
        "password" => $row["password"],
        "lastname" => $row["lastname"],
        "email" => $row["email"],
        "contact" => $row["contact"],
        "address" => $row["address"],
        "pincode" => $row["pincode"],
        "delivery_address" => $row["delivery_address"]
       );
    };
    $num = mysqli_num_rows($res);
    echo json_encode(array("status"=>"OK","data"=>$output,"totalresults"=>$num));
}else{
    echo  json_encode(array("status"=>"false","data"=>"Please provide a valid API key"));
}
?>