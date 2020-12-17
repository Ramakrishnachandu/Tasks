<?php
$host="localhost";
$user="root";
$password="";
$db="ram";
 $fname=$_POST['fname'];
 $phno=$_POST['phno'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $repass=$_POST['repass'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users ( fname,phno,email,pass,repass)
VALUES ( $fname,  $phno , $email, $pass, $repass)";
$result1 = mysqli_query($conn,$sql);

if ( $result1 === TRUE) 
{
    echo "<center><h1 style='color:red'> Record Insert Successfully......</center></h1>";
} 
else
	{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
			 

					 
			
					 
					   
$conn->close();
?>