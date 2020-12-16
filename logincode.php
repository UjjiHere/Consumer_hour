<?php
session_start(); // Starting Session 
$error = ''; // Variable To Store Error Message 
if (isset($_POST['submit'])) { 
  if (empty($_POST['username']) || empty($_POST['password'])) { 
    $error = "<br> ALERT: Username or Password is Left Empty!"; 
    echo '<script>alert("ALERT: Username or Password is Left Empty!")</script>'; 
  } 
  else{ 
    // Define $username and $password 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    // mysqli_connect() function opens a new connection to the MySQL server. 
    $conn = mysqli_connect("localhost", "root", "", "consumer"); 
    // SQL query to fetch information of registerd users and finds user match. 
    $query = "SELECT username, password from signup where username='$username' AND password='$password'"; 
    // To protect MySQL injection for Security purpose 
    $stmt = $conn->prepare($query); 
    $stmt->bind_param("ss", $username, $password); 
    $stmt->execute(); 
    $stmt->bind_result($username, $password); 
    $stmt->store_result(); 
    if($stmt->fetch()) //fetching the contents of the row { 
      $_SESSION['login_user'] = $username; // Initializing Session 
    header("location:index2.php"); // Redirecting To Profile Page 
    mysqli_close($conn);     // Closing Connection 
  } 
      
} 
?>