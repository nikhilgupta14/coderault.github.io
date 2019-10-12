<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/contactus.css">
	<title>Contact form</title>
    
</head>
<body>
	<header>
      <a href="" class="ab"><img src="cr1.png"></a> 
      <a href="" class="cd"><img src="cr3.png"></a> 
    <div class="container">
      <div class="rightmenu">
       
        <nav>
          <ul>
            <li><a href="../homepage.php" class="ni">HOME</a></li>
            <li><a href="../login/login.php" class="ni">LOGIN</a></li>
            <li><a href="../services/services.php" class="ni">SERVICES</a></li>
          </ul>
        </nav>
        
      </div>
      
    </div>
    </header>
    <div class="ef">
    <img src="mgirl.png">
</div>
      <div class="contact-title">  
      
      	<h1>We are always ready to serve you!</h1>
</div>

<div class="contact-form>">
	<form id="contact-form" method="post" action="contactmail.php">
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