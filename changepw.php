<?php
	$connect=mysqli_connect("localhost","root","","newproject") or failed("connection-failed");
?>
<?php
session_start();

if (!empty($_POST['save']))
	{
		$op=$_POST['oldpass'];
		$np=$_POST['newpass'];
		$cp=$_POST['cnewpass'];
		if($np==$cp)
		{
			$query="select * from signup where password='$op'";
			$result=mysqli_query($connect,$query);
			$count=mysqli_num_rows($result);
			if($count>0){
				$query="update signup set password='$np'";
				mysqli_query($connect,$query);
				echo"password updated successfully";
			}
				else{
			echo "Old password does not match ";
			}
		}
			else{
				echo"New Password and confirm new password does not match";
			
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
      <div class="title">Change Password</div>
      <form method="post">
	   <div class="field">
          <input type="password" name="oldpass">
          <label>Current Password</label>
        </div>
        <div class="field">
          <input type="text" name="newpass">
          <label>New Password</label>
        </div>
        <div class="field">
          <input type="password" name="cnewpass">
          <label> Confirm  Password</label>
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
