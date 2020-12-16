<?php
$db ='consumer';
$conn = new mysqli('localhost','root','',$db);
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error() .')'
    . mysqli_connect_error());
}
else{  
if(isset($_REQUEST["submit"]))
{
	$value = $_REQUEST["username"];
	$value1 = $_REQUEST["firstname"];
	$value2 = $_REQUEST["lastname"];
	$value3 = $_REQUEST["mobilenumber"];
    $value4 = $_REQUEST["email"];
    $value5 = $_REQUEST["password"];


    $sql ="INSERT INTO signup(USERNAME,FIRSTNAME,LASTNAME,MOBILENUMBER,EMAIL,PASSWORD) 
    values('$value','$value1','$value2','$value3','$value4','$value5')";
    if($conn->query($sql)){
       echo "<script>
alert('Registered Successfully');
window.location.href='http://localhost/consumerhour/login.php';
</script>";
    }
    else{
        echo "Error :".$sql ."<br>". $conn->error;
    }
    $conn->close();
}
}
?>
