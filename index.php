<?php session_start();?>
<?php
	$connect=mysqli_connect("localhost","root","","newproject") or failed("connection-failed");
?>
<?php
if (!empty($_POST['log']))
	{
		$email=$_POST['un'];
		$password=$_POST['ps'];
		$query="select * from signup where email='$email' and password='$password'";
		$result=mysqli_query($connect,$query);
		$r=mysqli_fetch_assoc($result);
		$count=mysqli_num_rows($result);
		if ($count>0) 
		{
			$_SESSION['username']=$r['fullname'];
			$_SESSION['userid']=$r['id'];
			header('location:index3.php');
			// echo"record inserted";
		}
		else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
	}
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login Form</div>
      <form method="post">
        <div class="field">
         <input type="text" name="un">
          <label>Email Address</label>
        </div>
        <div class="field">
         <input type="password" name="ps">
          <label>Password</label>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
        
        </div>
        <div class="field">
         <input class="log" type="submit" name="log" onclick="myFunction" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="index1.php">Signup now</a></div>
      </form>
    </div>
  </body>
</html>
