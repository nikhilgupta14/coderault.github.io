<?php include "../authentication/auth.php";
?>
<!DOCTYPE html>

<html>
<head><title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

<header>
      <a href="" class="ab"><img src="../cr1.png"></a>
      <a href="" class="cd"><img src="../cr3.png"></a> 
    <div class="container">
      <div class="rightmenu">
        <a href="" class="logo"><img src=""></a>
        <nav>
          <ul>
          	<li><a href="admindashboard.php" class="ni">Dashboard</a></li>
            <li><a href="logout.php" class="ni">Logout</a></li>
            <li><a href="signup.php" class="ni">Register</a></li>
            <li><a href="../development/development.php" class="ni">Development</a></li>

          </ul>
        </nav>
      </div>
      
    </div>
   
  </header>
  <div class="container">
  <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>SR No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Usertype</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
$query = "select * from registeruser";
  $sql = mysqli_query($conn , $query);
  $count = mysqli_num_rows($sql);
  if($count>0)
  {
 while($row=mysqli_fetch_array($sql))
 {

    ?>
    <tr class="table-active">
      <td><?php echo $i; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['usertype']; ?></td>
         
      <td><a href="edit-user.php?id=<?php echo $row['user_id']?>">Edit</a>|<a href="delete-user.php?id=<?php echo $row['user_id']?>">Delete</a></td>
    </tr>
  <?php  $i++;}}else{
    echo "No record found";
  }
  ?>
  </tbody>
</table> 
</div>
</body>
</html>