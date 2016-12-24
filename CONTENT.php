<?php 
$conn=new mysqli('localhost', 'root', '','homes'); 


$username = $_GET["username"]; 
$password = $_GET["password"]; 

$found = false; 
$results=$conn->query("SELECT * FROM `home_architecture` "); 
foreach ($results as $result) { 
if ($username==$result['username'] && $password==$result['password']){ 
echo "success";
$found=true; 
break; 
} 
} 
if (!$found) 
echo "fail"; 
?>