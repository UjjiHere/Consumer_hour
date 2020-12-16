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
	$value1 = $_REQUEST["number"];
	$value2 = $_REQUEST["email"];
	$value3 = $_REQUEST["message"];
   


    $sql ="INSERT INTO contact(fullname,email,number,message) 
    values('$value','$value2','$value1','$value3')";
    if($conn->query($sql)){
       echo "<script>
alert('Entered Successfully');
window.location.href='http://localhost/consumerhour/index.html';
</script>";
    }
    else{
        echo "Error :".$sql ."<br>". $conn->error;
    }
    $conn->close();
}
}
?>