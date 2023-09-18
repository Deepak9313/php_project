<?php
include("api/connection.php");
include("navbar.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $user = $_POST["user"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $lastname = $_POST["lastname"];
  $contact = $_POST["contact"];
  $address = $_POST["addr"];
  $pin = $_POST["pin"];
  $delivery_addr = $_POST["daddr"];
  $query = "SELECT * FROM user_accounts WHERE  `email` = '$email'";
  $res = mysqli_query($con,$query);
  $num = mysqli_num_rows($res);
  if($num > 0){
    echo "username already exists";
  }else{
    $query = "INSERT INTO user_accounts (`name`,`password`,`lastname`,`email`,`contact`,`address`,`pincode`,`delivery_address`)VALUES('$user','$password','$lastname','$email','$contact','$address','$pin','$delivery_addr')";
    $res = mysqli_query($con,$query);
    echo "<h1>USER CREATED successfully</h1>";
  }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Signup Form</h3>

<div class="container">
  <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    <label for="fname">Username</label>
    <input type="text" id="fname" name="user" placeholder="Your name..">

    <label for="lname">Password</label>
    <input type="text" id="password" name="password" placeholder="Your last name..">
    <label for="lname">Email</label>
    <input type="text" id="email" name="email" placeholder="Your last name..">
    <label for="lname">Lastname</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <label for="lname">Contact</label>
    <input type="text" id="contact" name="contact" placeholder="Your last name..">
    <label for="lname">Address</label>
    <input type="text" id="addr" name="addr" placeholder="Your last name..">
    <label for="lname">Pin Code</label>
    <input type="text" id="pincode" name="pin" placeholder="Your last name..">
    <label for="lname">Delivery Address</label>
    <input type="text" id="daddr" name="daddr" placeholder="Your last name..">
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
