<?php 
$conn=new mysqli('localhost', 'root', '','homes'); 
$name=$_GET['name']; 
$surname=$_GET['surname']; 
$username=$_GET['username']; 
$email=$_GET['email']; 
$password=$_GET['password']; 

$query="INSERT INTO home_architecture VALUES('$name', '$surname', '$username', 
	'$password', '$email')"; 
$conn->query($query); 
echo "success"; 
?>