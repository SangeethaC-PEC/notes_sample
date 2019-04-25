<?php
$user = $_GET['user'];
$pass = $_GET['pass'];
$c=mysqli_connect('localhost','root','toor');

$dbc=mysqli_select_db($c,"krishna");
$query = "SELECT * FROM login WHERE username ='".$user."' AND password ='".$pass."'";
$result=$c->query($query);
if($result->num_rows>0)
{
	echo "login sucessfull";
	header('location:cse.html');
}
else
{
	echo "invalid";
}
?>
