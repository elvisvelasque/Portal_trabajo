<?php
	session_start();
	if(isset($_SESSION['email']))
	{
	  if($_SESSION['type']=='P')
	{
	  echo '<script>
            alert("Already Login As Job provider");
            window.location.href="user/jobprovider/index.php";
             </script>';
          }

   if($_SESSION['type']=='S')
	{
	  echo '<script>
            alert("Already Login As Job Seeker");
            window.location.href="user/jobseeker/index.php";
             </script>';
          }
	}
	
	?>

<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html lang="en">
<head>
<title>Login form</title>
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
<script src="js/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

<style> 
#panel, #flip {
    padding: 10px;
    text-align: center;
    color: yellow;
       
}

#panel {
    padding: 10px;
    display: none;
}
u:hover {
    color: orange;
}

</style>
</head>
<body>

<h1 class="header-w3ls">Login page</h1> <p class="copyright"><a href="index.html">HOME</a></p>
   
<div class="content-w3ls">
	<div class="form-w3ls">
		<form action="login.php" method="post">
			<div class="content-wthree1">
				    
                           <div class="form-control">	
						<label class="header">Email Address <span>:</span></label>
						<input type="email" id="email" name="email" placeholder="" title="Please enter a Valid Email Address" required="">
					</div>
					<div class="form-control"> 
						<label class="header">Password <span>:</span></label>
						<input type="password" id="name" name="pass" placeholder="" title="Please enter your Password" required="">
					</div>
		
					
					
				<div class="content-wthree2">
				<div class="grid-w3layouts1">
					<div class="w3-agile1">
						<label class="rating">Login As:<span>:</span></label>
						<ul>
							<li>
								<input type="radio" id="a-option" name="type" value="S" required="">
								<label for="a-option">Job Seeker</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="b-option" name="type" value="P"required="">
								<label for="b-option">Job provider</label>
								<div class="check"><div class="inside"></div></div>
							</li>
							
							
						</ul>
					</div>	
				</div>
				
			
			</div>
			
					
	       </br></br></br>
			
			<div class="content-wthree4">	
				<div class="form-control">
					<input type="submit" class="register" value="login" name="login">
					
				</div>
			</div>	
                   	
		</form>
	</div>
</div>

<div class="copyright" >you don't have account ?<a id="flip" href="#">Register now</a></div>
<div id="panel"><a href="register.php"><u>Register As Job Seeker</u></a></br><a href="register1.php"><u>Register As Job Provider</u></a></div>

</body>
</html>
<?php
include'connection.php';
if(isset($_POST['login']))
{
    $user=$_POST['email'];
    $pass=$_POST['pass'];
	$type=$_POST['type'];
      $sql="select * from user where email='$user' and password='$pass' and type='$type'";
      $result2=$conn->query($sql);
     if($result2->num_rows==1)
      {
        session_start();
		 $_SESSION['email']=$user;
		 $_SESSION['type']=$type;		
		/*$sql="select * from user where email='$user' and password='$pass'";
		$result=$conn->query($sql);
		 $num=$result->num_rows;
		 $sql1="select * from company where email='$user' and password='$pass'";
		  $result1=$conn->query($sql1);
		  if($result1->num_rows==1)
		  {
		     ?>
           <script>
            alert('Login successfully 1');
            window.location.href="index.html?success";
             </script>
            <?php
		  }
		elseif($num==1)
		{
			  ?>
           <script>
            alert('Login successfully ');
            window.location.href="index.html?success";
             </script>
            <?php
		}
		else
		{
			  ?>
              <script>
              alert('Incorrect username and password');
              //window.location.href="login.php?Fail";
             </script>
            <?php
		}
	}
	else
	{
		?>
              <script>
              alert('you hvae not registered');
              //window.location.href="login.php?Fail";
             </script>
            <?php*/
			
			
			if($type=="P")
			{
				?>
           <script>
            alert('Login successfully ');
            window.location.href="user/jobprovider/index.php";
             </script>
            <?php
		}
		else
		{
			  ?>
              <script>
              alert('login successfully');
              window.location.href="user/jobseeker/index.php";
             </script>
            <?php
		}
	}
	
	else
		{
			  ?>
              <script>
              alert('Incorrect username and password');
              window.location.href="login.php?Fail";
             </script>
            <?php
		}

}
?>