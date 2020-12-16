<?php
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
	 echo "<script>
     alert('Incorrect User or Password!');
     window.location.href='http://localhost/consumerhour/login.php';
     </script>";
    //header("location: login.php");				// Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>

	<meta name="viewport" content="width=device-width">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Honest Reviews by real customers">
	<meta name="keywords" content="customer reviews, honest customer reviews, unbiased customer reviews">
  	<meta name="author" content="Akashdeep Sharma">
	<title>Customer Reviews | Welcome</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!--  Contains the title and Nav bar for the Site -->
<header>
	<div class="container">
		<div id="branding">
			<h1 ><font color="#e8491d">Customer</font> Reviews</h1>
		</div>
		
		<nav>
			<ul>
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="shop.html">Reviews</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="contactus.html">Contact Us</a>
				</li>
				<li>
				
		<b id="welcome" >Hi, &nbsp </b> <i><?php echo $login_session; ?></i><br>
					 <b id="logout"><a href="logout.php"> Log Out ?</a></b>
		
				</li>
				
			</ul>
		</nav>
	</div>
</header>
<!-- Highlight and Image Slider  -->
<section id="showcase">
<div class="container">
	
</div>
</section>
<!-- Newsletter section  -->
<section id="newsletter">
<div class="container">
	<h1>Subscribe to our Newsletter</h1>
	<form action="">
		<input type="email" placeholder="Enter Email">
		<button type="submit" class="news_button"  >Subscribe</button>
	</form>
</div>
</section>

<!-- Product Images -->
<section id="product_categories">
	<div class="container">
		<div class="box">
			<img src="img/smarthome.jpg"alt="Smart Home Appliances">
			<h3>Smart Home Applicances Reviews</h3>
			<p> Reliable Home Applicances Reviews </p>
		</div>
		<div class="box">
			<img src="img/comp.jpg" alt="">
			<h3>Computer & Access Reviews</h3>
			<p> Reliable Computer & Accessiories Reviews </p>
		</div>
		<div class="box">
			<img src="img/smartphone_category.jpg" alt="">
			<h3>Smartphones Reviews</h3>
			<p> Reliable Smartphones Reviews </p>
		</div>
		<div class="box">
			<img src="img/smartphone_category.jpg" alt="">
			<h3>Smartphones Reviews</h3>
			<p> Reliable Smartphones Reviews </p>
		</div>
		<div class="box">
			<img src="img/toys.jpg" alt="">
			<h3>Kids Toys Reviews</h3>
			<p> Reliable Kids Toys Reviews. </p>
		</div>
		<div class="box">
			<img src="img/mech_tools.jpg" alt="">
			<h3>Mechanical Tools Reviews</h3>
			<p> Reviews of the Mechanical Tools </p>
		</div>
	</div>
	
</section>
<footer>
	<p>Customer Review Site, Copyright &copy; 2020</p>
</footer>
</body>
</html> 