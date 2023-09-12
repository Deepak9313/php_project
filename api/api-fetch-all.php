<?php
include("connection.php");
header("Content-Type:application/json");
$query = "SELECT * FROM user_accounts";
$res = mysqli_query($con,$query);
$num = mysqli_num_rows($res);
if($num > 0){
    $output = mysqli_fetch_all($res);
    $json = json_encode($output);
    echo $json;
}else{
    print_r("Not");
}

?>