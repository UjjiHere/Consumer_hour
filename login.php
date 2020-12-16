<?php
include('logincode.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: index2.php"); // Redirecting To Profile Page
}
?>
<html>
<head>
<title> Consumer Reviews Login </title>   
    <link rel="stylesheet" type="text/css" href="loginsignup.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
     <meta name="viewport" content="width=device-width">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Honest Reviews by real customers">
    <meta name="keywords" content="Sign up customer reviews, login customer reviews">
    <meta name="author" content="Akashdeep Sharma">
</head>
<body>
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
          <a href="reviews.html">Reviews</a>
        </li>
        <li>
          <a href="about.html">About</a>
        </li>
        <li>
          <a href="contact.php">Contact US</a>
        </li>
        <li>
          <a href="login.html">Log In</a>
        </li>
        <li>
          <a href="signup.html">Sign up</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
<form action="" method="post">
    <div id="login-box">
      <div class="left-box">
        <h1> Log in</h1>
          <input type="text" name="username" placeholder="Username"/>
          <input type="password" name="password" placeholder="Password"/>
        
          <input type="submit" name="submit" value="Login"/>
          <span><?php echo $error; ?></span>
        
        </div>
      </form>
        <div class="right-box">
          <span class="signinwith">Sign in with<br/>Social Network     </span>
        
        <button class="social facebook">Log in with Facebook</button>    
        <button class="social twitter">Log in with Twitter</button> 
        <button class="social google">Log in with Google+</button> 
            
        
        </div>
        <div class="or">OR</div>
    </div>
        <footer>
  <p>Customer Review Site, Copyright &copy; 2020</p>
</footer>
</body>    
</html>