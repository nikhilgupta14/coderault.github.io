<?php session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Coderault signup </title>
<link rel="stylesheet" type="text/css" href="signup.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  function formvalidation(){
    var name=$('#inputName') .val();
    var email=$('#inputEmail') .val();
    var password=$('#inputPassword').val();
    var passlength=$('#inputPassword').val().length;
if(name=='')
  {
    alert("Please enter your name");
    return false;
  }
  if(email=='')
  {
    alert("please enter your mail id");
    return false;
  }
  if (password=='') 
  {
    alert("please enter your password");
    return false;
  }
  if (passlength<4) 
  {
    alert("please enter minimum 5 digit password");
    return false;
}
  }
</script>



</head>
<body>
	<header>
      <a href="" class="ab"><img src="cr1.png"></a>
      <a href="" class="cd"><img src="cr3.png"></a> 
    <div class="container">
      <div class="rightmenu">
        <a href="" class="logo"><img src=""></a>
        <nav>
          <ul>
            <li><a href="../homepage.php" class="ni">HOME</a></li>
            <li><a href="../login/login.php" class="ni">LOGIN</a></li>
            <li><a href="../contact/contactus.php" class="ni">CONTACT US</a></li>

          </ul>
        </nav>
        
      </div>
      
    </div>
</header>
    
		<ul>
	     <div id="login-box">
	       	<div class="left-box">
      
			         <h1>Sign Up </h1>
            <form class="form-horizontal" method="post" action="registeruser.php" onsubmit="return formvalidation();">
			 <?php
          if(isset($_SESSION['success']))
           {
             echo $_SESSION['success'];
             unset($_SESSION['success']);
           }
        ?>
         <label for="inputName" class="col-lg-2 control-label"></label>
           <div>
             <input type="text" id="inputName" name="inputName" placeholder="name">
           
            </div>
             <label for="inputEmail" class="nic col-lg-2 control-label"></label>
           <div>
            <input type="email" id="inputEmail" name="email" placeholder="Email">
		          </div>
            <label for="inputPassword" class="col-lg-2 control-label"></label>
            <div>
			   <input type="password" id="inputPassword" name="password" placeholder="Password"/>
			   </div>

           <input type="password" name="password2" placeholder="Retype-Password"/>
         <div class="form-group">

         <label class="col-lg-2 control-label">Usertype</label>
         
         <div class="radio">
          <label>
            <input type="radio" name="usertype" id="usertype" value="USER" checked="">
              USER
          </label>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
         <div class="col-lg-10 col-lg-offset-2">
           <button type="reset" class="btn btn-danger">cancel</button>
         </div>
         <div class="col-lg-10 col-lg-offset-2">

     <button type="submit" class="btn btn-success">submit</button>
     </div>
   </div>
</div>
</div>
</form>
<div class="right-box">
	<span class="signinwith"> Sign in With <br/> social network</span>
<button class="social-facebook"> Log in with Facebook </button>
	<button class="social-twitter"> Log in with Twitter </button>
	<button class="social-google"> Log in with Google+ </button>
</div>
<div class="line">
</div>
</body>
</html>



