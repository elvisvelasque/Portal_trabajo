<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html lang="en">
<head>
<title>REGISTRO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Employee Feedback Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!-- /font files -->
<!-- css files -->
<link href="css/style1.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->

</head>
<body>
<h1 class="header-w3ls">REGISTRO</h1>
<div class="content-w3ls">

	<div class="form-w3ls">
		<form action="register.php" method="post">
			<div class="content-wthree1">
				<div class="grid-agileits1">
					<div class="form-control"> 
						<label class="header">Nombre<span>:</span></label>
						<input type="text" id="name" name="name" placeholder="Nombre completo" title="Please enter your Full Name" required="">
					</div>
					 
		
					<div class="form-control">	
						<label class="header">Correo<span>:</span></label>
						<input type="email" id="email" name="email" placeholder="correo@gmail.com" title="Please enter a Valid Email Address" required="">
					</div>
					  <div class="form-control"> 
						<label class="header">Contraseña <span>:</span></label>
						<input type="password" id="name" name="pass" placeholder="" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
					</div>
					<div class="form-control"> 
						<label class="header">Subir CV <span>: </span></label>
					    <input type="file" name="fileToUpload" id="fileToUpload">
					</div>
				</div>			
			</div>
			
				
			<div class="content-wthree4">	
				<div class="form-control">
					<input type="submit" class="register" value="Aceptar" name="submit">
					<input type="reset" class="reset" value="Limpiar">
					<div class="clear"></div>
				</div>
			</div>		
		</form>
	</div>
</div>

<p class="copyright">O inicia sesión <a href="login.php" >aquí</a></p>

</body>
</html>
<!--target="_blank"-->
<?php
include'connection.php';

if(isset($_POST['submit']))
{
   $user=$_POST['name'];
   $email=$_POST['email'];
   $pass=$_POST['pass'];

   $sql="insert into user(user_name,password,email,type)values('$user','$pass','$email','S')";
   if($conn->query($sql))
   {
   	    ?>
      <script>
      alert('successfully registered');
      window.location.href="login.php?success";
             </script>
    <?php
   }
   else
   { ?>
     <script>
      alert('Error while register');
      window.location.href="register.php?Fail";
     </script>
     <?php
   }
}

?>
