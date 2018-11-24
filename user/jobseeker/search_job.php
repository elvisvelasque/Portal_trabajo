<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require("job_seeker_incl.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="images/hand.png" rel="icon">
<title>Online job portel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Bank Online Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- flexslider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- //flexslider -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<style>
#user{
	background-color:white;
	text-color:green;

	opacity:.7;

	
	width:26%;
	font-size:20px;
	height:60px;
	border-radius: 15px;
}
#usr{
	
	background-color:orange;
	opacity:.7;
	
	float:right;
	width:14%;
	font-size:20px;
	height:60px;
	border-box:4px;

	
}
.form-control:hover {
  text-decoration: italic;
  text-size:40px;
  color:red;
  background:white;
}
.form-t:hover{
	
 text-size:40px;
  color:green;	
}
input[type=text], select {
    width: 100%;
    padding: 20px 20px;
	text-align:center;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
     color: black;
}
.set{
	
	height:250px;
	background-color:#4d9105;
	width:100%;
	padding:100px;
	
	
	
}
.container{
	
	width:100%;
	
}
#php{
	
	height:auto;
	width:100%;
	float:left;
	background-color:#CCC;
	
	
}
table ,th{
	
	text-align:center;
	
}
</style>
</head>
<body>
	<div class="banner-top">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1 jarallax">
							<div class="agileinfo-dot">
								<div class="container">
									<div class="agileits-banner-info">
										<h3>Build your job</h3>
										<h6>From anywhere in india</h6>
										<p></p>
										
											</div>	
										<div  class ="set" style ="width:100%;">
										
<div class="container">
  <form method="post" action="search_job.php">
    <div class="form-group">
      <label for="usr"></label>
	  
	
	 
		    
		         <label for="required">SEARCH BY</label>
		  	  <select id='marital_status' name='search' required='required'  >
			  <option value="">  </option>		 
			   <option >Company</option>
			         <option >Location</option>
			            <option >Salary</option>
			   <option >Designation</option> 
			        
			        
			 </select>
		
<!--
      <input type="number" min="5000" class="form-t" id="user" name ="salary" placeholder="Salary" required="required" style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="text" class="form-t" id="user" name ="post" placeholder="Post" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  
	  <input type="text" class="form-t" id="user" name ="location" placeholder="Location">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  -->
	  <input type="submit" class="form-control"  id ="usr" name ="submit" value="SEARCH" >
    </div>
	
  
  </form>
</div>
</div>
								
								</div>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
			<div class="clearfix"> </div>
			<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<!--banner Slider starts Here-->
		</div>
	</div>
	<!-- banner -->
	<div class="banner">
		<div class="head">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-head">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="w3layouts-logo">
							<h1><a href="index.html"> <span>Online</span>Job<span>portal</span></a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="../../logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
	<!-- //banner -->


	<!-- markets -->
	<!-- blog -->
	
	<!-- //blog -->

	<!-- //markets -->
	<!-- services -->
	
		<!-- contact -->
		
		<div id ="php">
		<h1 align="center">DETAILS PRINT HERE</h1>

		</div>

	<!-- //services -->
	<!-- testimonial -->




<?php
if(isset($_POST['submit']))
{
	echo $search=$_POST['search'];
	$_SESSION['search']=$search;
	echo '<form method="post" action="search_job.php">
	      <input type="text" class="form-t" id="user" name ="by" placeholder="'.$search.'">
		  <input type="submit" id ="usr" name ="find" value="find" >
		  </form>'; 
}
if(isset($_POST['find']))
 {
	$search=$_SESSION['search'];
        $by=$_POST['by'];
	echo'<table border="1" style =" width:100%;background-color:#b7c407;">
	 <tr>
	 <th>Company</th>
	 <th>Job name</th>
	 <th>Designation</th>
	 <th>Minimun qual.</th>
	 <th>Salary</th>
	 <th>Location</th>
	 <th>No.of vaccancy</th>
	 <th>Start Date</th>
	 <th>End Date</th>
	 <th>Apply Now</th>
	 </tr>';
	
	
	if($search=="Designation")
	$sql="select * from job,job_provider where jobprovider_email=email and designation='$by'";
    else if($search=="Salary")
	$sql="select * from job,job_provider where jobprovider_email=email and salary>='$by'";
    else if($search=="Location")
	$sql="select * from job,job_provider where jobprovider_email=email and company_location='$by'";
    else if($search=="Company")
	$sql="select * from job,job_provider where jobprovider_email=email and company_name='$by'";
	$run=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($run))
	{
	 if($row['job_id'])
	 {
		 echo '<tr>
	       <td>'.$row['company_name'].'</td>
	       <td>'.$row['job_name'].'</td>
	       <td>'.$row['designation'].'</td>
		   <td>'.$row['min_qualification'].'</td>
		   <td>'.$row['salary'].'</td>
		   <td>'.$row['company_location'].'</td>
	       <td>'.$row['no_of_vacancy'].'</td>
		   <td>'.$row['start_date'].'</td>
	       <td>'.$row['end_date'].'</td>
		   <td><a class="btn btn-info btn-large" onclick="check();" href="apply.php?job_id='.$row['job_id'].'">Apply Now </a></td>';
         
	 }
	 echo '</tr>';
	
  }
	echo '</table>';
 }
?>


	
	
	<!-- //testimonial -->
    
     <!-- end about us -->
	 <!-- copyright -->
	 
	 
	 
	 
	 
	 
	 
	 </br></br>	 
	 </br></br>	 
	 </br></br>	 
	 </br></br>	 
	 </br></br>
	 
	<footer>
		<div class="container">
			<div class="copyright">
				<p>Â© 2017 Online job portal . All rights reserved | Design by <a href="#">Group_5</a></p>
			</div>
		</div>
	</footer>
	<!-- //copyright -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	
	
<!-- //FlexSlider -->
</body>	
</html>