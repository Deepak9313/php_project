<?php
include("api/connection.php");
include("navbar.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $user = $_POST["user"];
  $password = $_POST["password"];
  $query = "SELECT * FROM user_accounts WHERE `name` = '$user' AND `password` = '$password'";
  $res = mysqli_query($con,$query);
  $num = mysqli_num_rows($res);
  if($num > 0){
    header("location:admin.php");
    $_SESSION["user"] = $user;
  }else{
    echo "<h1>Sorry Your user and password is not match in the database</h1>";
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

<h3>Login Form</h3>

<div class="container">
  <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    <label for="fname">Username</label>
    <input type="text" id="fname" name="user" placeholder="Your name..">

    <label for="lname">Password</label>
    <input type="text" id="lname" name="password" placeholder="Your last name..">
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
