<?php
include("connection.php");
header("Content-Type:application/json");
$query = "SELECT * FROM products";
$res = mysqli_query($con,$query);
$num = mysqli_num_rows($res);
if($num > 0){
    $output = array();
    while ($row = mysqli_fetch_assoc($res)){
       $output[] = array(
        "product_id" => $row["product_id"],
        "product_name" => $row["product_name"],
        "product_price" => $row["product_price"],
        "product_description" => $row["product_description"],
        "stock" => $row["stock"],
        "brand" => $row["brand"],
        "category" => $row["category"],
        "image" => $row["image"],
       );
    };
    $num = mysqli_num_rows($res);
    echo json_encode(array("status"=>"OK","data"=>$output,"totalresults"=>$num));
}else{
    print_r("Not");
}
?>