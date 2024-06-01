<?php

session_start();

if(isset($_SESSION['user'])){
	header('Location: '."/");
}
//include_once 'classes/database.php';
//include_once 'classes/users.php';
//include_once 'initial.php';

$username ="admin";
$password = "admin";

$error = "";

if(isset($_POST['submit']) && $_POST['submit'] == "login"){

	  if($_POST['username'] == $username && $_POST['password'] == $password){
		$_SESSION["user"] = $username;

		header('Location: '."/");
	  }else{
		$error = "Please Enter valid Credintials ";
	  } 
}

?>

<!DOCTYPE html style="height: 100%;">
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>IOT System | Login Form</title>
  
        <link href="../library/css/bootstrap.css" rel="stylesheet" media="screen" />
        <link href="../library/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     	<script src="../library/js/bootstrap.min.js"></script> 
  
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>



<body style="background-color: #21D4FD;background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%); ">
<div class="login-form">
    <form action="login.php" method="post">
        <h2 class="text-center" style="color: #390e58;">Login</h2>      
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" name="submit" value="login"style="background-color: #21D4FD;background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);">
        </div>
      
      	<p style="color:red;"> <?php echo $error ?> </p>
              
    </form>
</div>
</body>
</html>