

<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8">
<title>Coderault login</title>
<link rel="stylesheet" type="text/css" href="login.css">


<h2> Join Us ! </h2>
<h3> Because We Are Reliable </h3>

<body>
<header>
      <a href="../insidelogo/insidelogo.php" class="ab"><img src="cr1.png"></a>
      <a href="../insidelogo/insidelogo.php" class="cd"><img src="cr3.png"></a> 
    <div class="container">
      <div class="rightmenu">
        <a href="" class="logo"><img src=""></a>

        <nav>
          <ul>
            <li><a href="../homepage.php" class="ni">HOME</a></li>
            
            <li><a href="../signup/signup.php" class="ni">SIGN UP</a></li>
            <li><a href="../contact/contactus.php" class="ni">CONTACT US</a></li>

          </ul>
        </nav>
      </div>
      
    </div>
   
  </header>
	
	
	<div class="login-box">

		<h1>Login</h1>
    <form action="userlogin.php" method="POST">
		<div class="textbox">
      

        <?php
        if(isset($_SESSION['error']))
        {
          echo $_SESSION['error'];
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success']))
        {
          echo $_SESSION['success'];
          unset($_SESSION['success']);
        }
        ?>
			<i class="fa fa-user" aria-hidden="true"></i>
			<input type="text" placeholder=" Username" name="name" value="">

	<i class="fa fa-lock" aria-hidden="true"></i>
			<input type="password" placeholder=" Password" name="password" value="">
</div>


<input class="btn" type="submit" name="submit" value="sign in">
</form>
</div>

<div class="s">
<a href="../signup/signup.php">New User</a>
</div>
</body>
</html>
