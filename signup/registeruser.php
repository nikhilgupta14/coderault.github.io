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

if(isset($_REQUEST['email']))
{
	 $name=$_POST['inputName'];
	 $email=$_POST['email'];
	 $pass=md5($_POST['password']);
	 $usertype=$_POST['usertype'];

	 $query="INSERT INTO `registeruser`(`user_id`, `name`, `email`, `password`, `usertype`) VALUES ('','$name','$email','$pass','$usertype')";

	 $res=mysqli_query($conn,$query);
	 if ($res) {
	 	$_SESSION['success']="Data inserted succesfully !";
	 	header('location:signup.php');
	 }
	 else{
	 	echo "Data not inserted ";
	 }

}