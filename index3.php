<?php session_start();?>
<?php
	$connect=mysqli_connect("localhost","root","","newproject") or failed("connection-failed");
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
		<img src="images/Nav-portriat-edited-10x9-v3-1-730x657.jpg">
			<div class="about-text">
				<h2>Nav Dhunay</h2>
				<h5>FOUNDER <span>& CEO</span></h5>
				<p>Nav Dhunay is the founder and the Chief Executive Officer of Takes Grit Ltd. He is responsible for the overall corporate and investment vision of the company.  Colin started his career in larger corporate environments: NCR Canada, CAST Shipping in Belgium and Hummingbird Communications; and later as an entrepreneur/founder of Truition, Jatheon Technologies, FirstCoverage, TreyeWear, reBOOT Canada, Dos Cielos; and then as a venture investor for all the portfolio companies at Hero Ventures. His track record at Hero Ventures surpassed 32% annual return with 2 exits over $100m  on Well.ca and Visualase - having been in the first investment rounds.

 

 

Colin currently serves on the board of Jatheon Technologies, JobAdX, reBOOT Canada and the R H Webster Foundation. In addition, Colin serves as an advisor to Next Canada, the UofT Hatchery and the Forum for Women Entrepreneurs programs. 

 

Colin is a Electrical Engineering/Economics major from Princeton University, holds two patents for sports glasses technologies and received the Silver Jubilee Medal from the Queen for his non-profit work with reBOOT Canada.

</p>
				<button type="button">Let's Talk</button>
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