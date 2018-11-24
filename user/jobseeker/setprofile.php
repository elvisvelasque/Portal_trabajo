<?php
require("job_seeker_incl.php");
      $sql="select * from job_seeker where email='$email'";
      $result2=$conn->query($sql);
     if($result2->num_rows>0)
      {
		  echo '<script>
            alert("Profile Already SET You Can Update Now");
            window.location.href="index.php";
             </script>';
	  }
 if(isset($_POST['register']))
 {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$address=$_POST['address'];
	$dob=$_POST['dob'];
	$contact_no=$_POST['contact_no'];
	$qualification=$_POST['qualification'];
	$percentage=$_POST['percentage'];
	$experience=$_POST['experience'];
	$gender=$_POST['gender'];
	
		if(!empty($_POST['check_list'])){
			$a="";
				foreach($_POST['check_list'] as $selected){
					$a.=$selected;
					$a.=",";
				}
			}
	 $skill=rtrim($a,", ");
	 $sql="insert into job_seeker values('$fname','$lname','$address',
	 '$dob','$gender','$contact_no','$qualification','$percentage',
	 '$experience','$skill','$email','a.jpg')";
	 if($conn->query($sql))
	 {
		 echo "<script>window.alert(' registered successfully')</script>";
	 }
	 else
		 echo "<script>window.alert('something problem in registering')</script>";
 }
?>
<!doctype html>
<html lang="en">
<head>
<title>Set Profile</title>
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
<style>
	#birthDate{
		 height: 50px;
		 width: 530px;
		 background-color:#212121; 
		 color: white;
		 border-color: #999999;
	}
	p1{
		font-size: 30px;
		color:#808000;
		font:bold;
	}
	#p12{
		color: white;
		font-size: 20px;
		
	}
</style>
</head>
<body>
<a href="index.php">Home</a> </br>
<a href="../../logout.php">Logout</a>;
		
<h1 class="header-w3ls">set Profile</h1>
<div class="content-w3ls">

	<div class="form-w3ls">
		<form action="setprofile.php" method="post">
			<div class="content-wthree1">
				<div class="grid-agileits1">
					<div class="form-control"> 
						<label class="header">First Name <span>:</span></label>
						<input type="text" id="name" name="fname" placeholder="" title="Please enter your First Name" required="">
					</div>
					<div class="form-control"> 
						<label class="header">Last Name <span>:</span></label>
						<input type="text" id="name" name="lname" placeholder="" title="Please enter your Last Name" required="">
					</div>
		
					<div class="form-control">	
						<label class="header">Address <span>:</span></label>
						<input type="text" id="email" name="address" placeholder="" title="Please enter a Valid Email Address" required="">
					</div>
					
					<div class="form-control"> 
						<label class="header">Date of birth<span>&nbsp :&nbsp</span></label>
					 
                        <input type="date" id="birthDate" name="dob" required="" title="Please enter date of birth" required="">
                   
					</div>

					<div class="form-control"> 
						<label class="header">Contact Number<span>:</span></label>
						<input type="text" id="name" name="contact_no" placeholder="" title="Please enter your content number" required="">
					</div>
					
					<div class="form-control">
					
					<label class="header">Qualificaton<span>:</span></label> 
						    <select required  id="birthDate" name="qualification" >
                      
                            <option value=" ">Select qualificaton</option>
                            <option >graduation</option>
                            <option >pg</option>
                            <option >phd</option>
                            </select>
					</div>
					
					 <div class="form-control"> 
						<label class="header"> Percentage <span>:</span></label>
						<input type="text" id="name" name="percentage" placeholder="" title="Please enter your Password" required="">
					</div>
					<div class="form-control"> 
						<label class="header">Experience <span>:</span></label>
						<input type="text" id="orgn" name="experience" placeholder="" title="Please enter your Company id" required="">
					</div>


				</div>
				
				
			</div>

		   <div class="form-control">
		    <label class="header">Your skills<span>:</span></label>
		   	</div>
		   	<br>
			<div class="form-control">	
				<input type="checkbox" name="check_list[]" value="C"> <p1>C</p1>&nbsp&nbsp
				<input type="checkbox" name="check_list[]" value="C++"> <p1>C++</p1>&nbsp&nbsp
				<input type="checkbox" name="check_list[]" value="Java"> <p1>Java</p1>&nbsp
				<input type="checkbox" name="check_list[]" value="mysql"> <p1>Mysql</p1>&nbsp&nbsp
				<input type="checkbox" name="check_list[]" value="Php"> <p1>Php</p1>&nbsp
				<input type="checkbox" name="check_list[]" value="Html"> <p1>Html</p1><br>
				<input type="checkbox" name="check_list[]" value="Python"> <p1>Python</p1>
				<input type="checkbox" name="check_list[]" value="Css"> <p1>Css</p1>&nbsp&nbsp
				<input type="checkbox" name="check_list[]" value="Ruby"> <p1>Ruby</p1>&nbsp&nbsp
				<input type="checkbox" name="check_list[]" value="Js"> <p1>Js</p1>&nbsp&nbsp
				<input type="checkbox" name="check_list[]" value="JQuery"> <p1>jQuery</p1>
				
			</div>	
			
				<div class="content-wthree2">
				<div class="grid-w3layouts1">
					<div class="w3-agile1">
						<label class="rating">Please Specify Gender<span>:</span></label>
						<ul>
							<li>
								<input type="radio" id="a-option" name="gender" value="Male" required="">
								<label for="a-option">Male</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="b-option" name="gender" value="Female "required="">
								<label for="b-option">Female</label>
								<div class="check"><div class="inside"></div></div>
							</li>
							
							
						</ul>
					</div>	
				</div>
				
			
			</div>
	<!--
			<div class="content-wthree3">
			<label class="header">upload Your Photo<span>:</span></label>
			<input type="file" name="contact_pic" title="select  your Photo" id="p12" required="">
			</div>
			-->
			<div class="content-wthree3">

			</div>
		

			<div class="content-wthree4">	
				<div class="form-control">
					<input type="submit" class="register" value="register" name="register">
					<input type="reset" class="reset" value="Reset" name="reset">
					<div class="clear"></div>
				</div>
			</div>		
		</form>
	</div>
</div>

<p class="copyright">resume page <a href="#" >top</a></p>

</body>
</html>