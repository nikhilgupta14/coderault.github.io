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

if(isset($_POST['name']))
{
	
	$name = $_POST['name'];
	$password = md5($_POST['password']);

	$query = "select * from registeruser where name='$name' AND password='$password'";
	$sql = mysqli_query($conn , $query);
	$count = mysqli_num_rows($sql);
	$row=mysqli_fetch_array($sql);

		if($count == 1)
		{
			$session_id=session_id();
			$_SESSION['auth']=$session_id;
		$role=$row['usertype'];
			if($role=='ADMIN')
			{
				header('location:../admin/admindashboard.php');
		}
		elseif ($role=='USER')
		 {
			header('location:../user/userdashboard.php');
		}
		}
		else {
			header('location:login.php');
			$_SESSION['error']="Wrong Email or Password !";
		}
	}

?>