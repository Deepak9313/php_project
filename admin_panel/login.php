<?php
 require('connection_inc.php');
 require('function_inc.php');
 $msg='';
 if(isset($_POST['submit']))
 {
   $username=get_safe_value($con,$_POST['username']);
   $password=get_safe_value($con,$_POST['password']);
   $sqli="select * from `admin_users` where `username`='$username' and `password`='$password'";
   $result=mysqli_query($con,$sqli);
   $num=mysqli_num_rows($result);
   if($num==1)
   {  
                          // here session ser
      
      $_SESSION['admin_login']='true';
      $_SESSION['admin_username']=$username;
                 // locate to category.php file
      header('location:products.php');       
      
      die();
   }
   else
   {
      $msg="Please enter correct login details";
   }

 }


?>


<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body  >
  <div class="container ">
 
                <!-- login forms -->
<form class="ml-4 my-5"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
  <div class="mb-3 col-md-6 ml-4 ">
    <label for="Username" class="form-label" >Username</label>
    <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" name="username">

  </div>
  <div class="mb-3 col-md-6 ml-4">
    <label for="password" class="form-label" >Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
 
  <button type="submit" class="btn btn-info ml-4" name="submit">Submit</button>
  <button type="reset" class="btn btn-info ml-4">Reset</button>
  <div class="field_error"> <?php echo $msg  ?> </div>
</form>
</div>
</div>

        <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="assets/js/popper.min.js" type="text/javascript"></script>
        <script src="assets/js/plugins.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
</body>

</html>