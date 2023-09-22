<?php
include("top_inc.php");
include("../api/connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $pname = $_POST["pname"];
    $price = $_POST["price"];
    $desc = $_POST["desc"];
    $stock = $_POST["stock"];
    $brand = $_POST["brand"];
    $category = $_POST["category"];
    if($_FILES["image"]){
        // echo "<pre>";
        // print_r($_FILES["image"]);
        // echo "</pre>";
        $img_name = $_FILES["image"]["name"];
        $tmp_name = $_FILES["image"]["tmp_name"];
        move_uploaded_file($tmp_name,"../product_images/".$img_name);
        $url = "../product_images/".$img_name;
        $query =  "INSERT INTO `products`(`product_name`,`product_price`,`product_description`,`stock`,`brand`,`category`,`image`)
        VALUES('$pname','$price','$desc','$stock','$brand','$category','$url')";
        if(mysqli_query($con,$query)){
            echo "Successfully";
        }else{
            echo mysqli_errno($con);
        }
    }
}
?>
<div class="container">
    <h1>Add products in database</h1>
    <form method="post" enctype="multipart/form-data" action="">
  <div class="mb-3">
    <label for="productname" class="form-label">Product Name</label>
    <input type="text" class="form-control" name="pname" id="pname" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" name="price" id="price">
  </div>
  <div class="mb-3">
    <label for="productdesc" class="form-label">Product Description</label>
    <input type="text" class="form-control" name="desc" id="">
  </div>
  <div class="mb-3">
    <label for="Stock" class="form-label">Stock</label>
    <input type="number" class="form-control" name="stock" id="stock">
  </div>
  <div class="mb-3">
    <label for="brand" class="form-label">Brand</label>
    <input type="text" class="form-control" name="brand" id="brand">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <input type="text" class="form-control"name="category" id="category">
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Image of Product</label>
    <input type="file" class="form-control" name="image" id="image">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>