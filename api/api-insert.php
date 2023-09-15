<?php
include('connection.php');
header("Content-Type:application/json");
header("Allow-Method:GET");
// name=priyanshu&password=2303&lastname=gaur&email=p123@gmail.com&contact=2323&address=delhi&pin=12200
$name = isset($_GET["name"]) ? $_GET["name"] : null;
$password  = isset($_GET["password"]) ? $_GET["password"] : null;
$lastname  = isset($_GET["lastname"]) ? $_GET["lastname"] : null;
$email  = isset($_GET["email"]) ? $_GET["email"] : null;
$contact = isset($_GET["contact"]) ? $_GET["contact"] : null;
$address = isset($_GET["address"]) ? $_GET["address"] : null;
$pin  = isset($_GET["pin"]) ? $_GET["pin"] : null;
$search = "SELECT email FROM user_accounts WHERE email = '$email'";
$qe2 = mysqli_query($con,$search);
$num = mysqli_num_rows($qe2);
if($num > 0){
    $output = array("meesage"=>"Username Exists in Database");
    echo json_encode($output);
    die();
}else{
    $query = "INSERT INTO user_accounts (`name`,`password`,`lastname`,`email`,`contact`,`address`,`pin_code`)VALUES('$name','$password','$lastname','$email','$contact','$address','$pin')";
    $res = mysqli_query($con,$query);
    if($res){
    $output = array("meesage"=>"Data inserted into column");
    echo json_encode($output);
    }else{
    $output = array("meesage"=>"Data Not inserted");
    echo json_encode($output);
}
}
