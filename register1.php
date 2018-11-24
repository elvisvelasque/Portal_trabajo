<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html lang="en">
<head>
<title>Registration form</title>
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
<h1 class="header-w3ls">Register form</h1>
<div class="content-w3ls">

	<div class="form-w3ls">
		<form action="register1.php" method="post">
			<div class="content-wthree1">
				<div class="grid-agileits1">
					<div class="form-control"> 
						<label class="header">User Name <span>:</span></label>
						<input type="text" id="name" name="name" placeholder="" title="Please enter your Full Name" required="">
					</div>
		
					<div class="form-control">	
						<label class="header">Email Address <span>:</span></label>
						<input type="email" id="email" name="email" placeholder="" title="Please enter a Valid Email Address" required="">
					</div>
					 <div class="form-control"> 
						<label class="header">Password <span>:</span></label>
						<input type="password" id="name" name="pass" placeholder="" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
					</div>
	
					<div class="form-control"> 
						<label class="header">Company Name <span>:</span></label>
						<input type="text" id="orgn" name="comp_name" placeholder="" title="Please enter your Company id" required="">
					</div>
					<div class="form-control"> 
						<label class="header">Location <span>:</span></label>
						<input type="text" id="orgn" name="loc" placeholder="" title="Please enter Company loaction" required="" pattern="[a-zA-Z]+">
					</div>
					<div class="form-control"> 
						<label class="header">Contact Number<span>:</span></label>
						<input type="text" id="orgn" name="cont" placeholder="" title="Please enter your content number" required="" pattern="[0-9]+">
					</div>
				</div>
				
				
			</div>
		
			<div class="content-wthree3">	
				
			</div>	
			<div class="content-wthree4">	
				<div class="form-control">
					<input type="submit" class="register" value="Submit" name="submit">
					<input type="reset" class="reset" value="Reset">
					<div class="clear"></div>
				</div>
			</div>		
		</form>
	</div>
</div>

<p class="copyright">Login page <a href="login.php" >login</a></p>

</body>
</html>
<?php
include'connection.php';

if(isset($_POST['submit']))
{
   $user=$_POST['name'];
   $email=$_POST['email'];
   $pass=$_POST['pass'];
   $comp_name=$_POST['comp_name'];
   $loc=$_POST['loc'];
   $cont=$_POST['cont'];

   $sql="insert into user(user_name,password,email,type)values('$user','$pass','$email','P')";
   $sql1="insert into job_provider(company_name,company_location,email,Contact_no)values('$comp_name','$loc','$email','$cont')";
   if($conn->query($sql)&&$conn->query($sql1))
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
      window.location.href="register1.php?Fail";
     </script>
     <?php
   }
}
?>