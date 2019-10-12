<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../contact/css/contactus.css">
	<title>Contact form</title>
    
</head>
<body>
	<header>
      <a href="" class="ab"><img src="../cr1.png"></a> 
      <a href="" class="cd"><img src="../cr3.png"></a> 
    <div class="container">
      <div class="rightmenu">
       
        <nav>
          <ul>
            <li><a href="admindashboard.php" class="ni">Dashboard</a></li>
            <li><a href="logout.php" class="ni">Logout</a></li>
            
          </ul>
        </nav>
        
      </div>
      
    </div>
    </header>
    <div class="ef">
    <img src="../contact/mgirl.png">
</div>
      <div class="contact-title">  
      
      	<h1>We are always ready to serve you!</h1>
</div>

<div class="contact-form>">
	<form id="contact-form" method="post" action="../contact/contactmail.php">
	<input type="text" name="name" class="form-control" placeholder="Your Name" required>
	<br>
	<input type="email" name="email" class="form-control" placeholder="Your Email" required>
	<br>
	<textarea name="message" class="form-control" rows="4" required></textarea><br>
	<input type="submit" class="form-control submit" value="send" >
</form>
</div>

</body>
</html>