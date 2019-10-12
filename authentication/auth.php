<?php
session_start();
$host="localhost";
$username="root";
$pass="";
$db="coderault";
$conn=mysqli_connect($host,$username,$pass,$db);
if(!$conn){
	die("Database connection error");
}
if(!isset($_SESSION['auth']))
{
header('location:../login/login.php');
}
?>