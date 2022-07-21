<?php session_start();?>
<?php
	$connect=mysqli_connect("localhost","root","","newproject") or failed("connection-failed");
?>
<?php
if (!empty($_GET['did']))
	{
		$id=$_GET['did'];
		$query="delete from signup where id=$id";
		if(mysqli_query($connect,$query))
		{
			echo('record deleted');
		}
		else
		{
			echo "record  not deleted";
		}
	}
?>
<!DOCTYPE html>
<html>
		<head>
		<title>Takes Grit</title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		
	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
		</head>
			<body>
		<div class="ul">
			<div class="ul-1">
				<label class="logo-1">User Login</label>
				<?php if(empty($_SESSION['username'])){?>
				<a href="index.php" class="act"><button type="button" class="bt-1">Log In </button></a>
				<?php } else{ ?>
				<a href="index.php" class="act"><button type="button" class="bt-1">Log out <?php echo $_SESSION['username']?></button></a>
				<?php } ?>
			</div>
		</div>
				<nav class="nn">
					<nav class="nnn">
					<label class="logo">Takes Grit.</label>
						<ul>
							<li><a href="index3.php">About Us</a></li>			
							<li><a href="index2.php">Page Management</a></li>	
						</ul>
						</nav>
				</nav>
				
				<!----About section start---->
	<section class="about-2">
		<div class="main-3">
		
			<div class="about-text">
					<div class="dish-info">
					<table>
					<table border="1" width="100%"/>
						<tr>
							<th>id</th>
							<th>Username</th>
							<th>Email Address</th>
							<th>Passwod</th>
							<th>Delete</th>
							<th>Change PW</th>
						</tr>
							<?php 
									
									$query="select * from signup ";
									$result=mysqli_query($connect,$query);
									while($row=mysqli_fetch_assoc($result))
									{
							?>
								<tr>
									<td><?php echo $row['id']?></td>
									<td><?php echo $row['fullname']?></td>
									<td><?php echo $row['email']?></td>
									<td><?php echo $row['password']?></td>
									<td><a href="index2.php?did=<?php echo $row['id']?>">Delete</td></a>
									<td><a href="changepw.php">change password</td></a>
									
								</tr>
								<?php } ?>
					</table>
					</div>
				
			</div>
		</div>
	</section>
	<!------footer start--------->
	<footer class="foo">
		<p>Samyak Verma</p>
		<p>This website is made by me by using htmk,css,js,and many other things for more websites contact me</p>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-dribbble"></i></a>
		</div>
		<p class="end">CopyRight By Samyak Verma</p>
	</footer>