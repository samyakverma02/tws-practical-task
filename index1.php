<?php
	$connect=mysqli_connect("localhost","root","","newproject") or failed("connection-failed");
?>
<?php
   if (!empty($_POST['save']))
	{
		$name=$_POST['fn'];
		$email=$_POST['em'];
		$password=$_POST['pw'];
		$query="insert into signup (fullname,email,password) values('$name','$email','$password')";
		if(mysqli_query($connect,$query))
		{
			header('location:index.php');
		}
		else
		{
			echo "record  not inserted ";
		}
	}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style1.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">New User</div>
      <form method="post">
	   <div class="field">
          <input type="text" name="fn">
          <label>Full Name</label>
        </div>
        <div class="field">
          <input type="text" name="em">
          <label>Email Address</label>
        </div>
        <div class="field">
          <input type="password" name="pw">
          <label>Password</label>
        </div>
		
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
         
        </div>
        <div class="field">
         <input type="submit" name="save" value="Sign up">
        </div>
       
      </form>
    </div>
  </body>
</html>
