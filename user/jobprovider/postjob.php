<?php
require("job_provider_incl.php");
 ?>
<html>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  --><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="banner-top">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top jarallax">
							<div class="agileinfo-dot">
								<div class="container">
									<div class="agileits-banner-info">
										<h3>Offering a wide range</h3>
										<h6>of recruitment solution </h6>
										<p></p>
									
									</div>	
								</div>
							</div>
						</div>
					</li>
					
					
				</ul>
			</div>
			<div class="clearfix"> </div>
			<script src="js/responsiveslides.min.js"></script>
			
			<!--banner Slider starts Here-->
		</div>
	</div>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
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
								<li><a href="index.php">Home</a></li>
								<li class="active"><a href="#" class="active">Post job</a></li>
								<li><a href="../../logout.php" >Logout</a></li>
                                                                
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
	<!-- //banner -->
<style>
.cell-md-6
{
	width:30%;
	
}
.cell-lg-12 
{
	width:30%;

}
.shell
{
float:left;
width:100%;
color: purple;
}
.rd-mailform text-left offset-top-50
{
border-style: groove;
}
h1 {
    color: purple;
}
body {
    background-image: url("C:\Users\abhishektoppo\Desktop\online-job-master\online-job-master\images\17.jpg");
}
</style>



<body>

<section class="section-98 section-sm-110">
<div class="shell">
		<h1 align="center"><u>Post Your Job Details</u></h1>
		<hr class="divider bg-darkers">

		<div class="range range-xs-center offset-top-66">
			<div class="cell-md-10 cell-lg-7">
			</div>
		</div>
		<div class="range range-xs-center offset-top-0">
			<div class="cell-sm-10">
				<form data-form-output="form-output-global" data-form-type="contact" method="POST" action="postjob.php" class="rd-mailform text-left offset-top-50" novalidate="novalidate">
						<div class="range" align="center">
							<div class="cell-md-6 offset-top-30 offset-md-top-0">
								<div class="form-group">
									<label for="post-job-last-name" class="form-label form-label-outside text-sbold rd-input-label">Job Name</label>
									<input id="post-job-last-name" type="text" name="jname" class="form-control form-control-has-validation form-control-last-child" required pattern="[a-zA-Z]" placeholder="enter job name">
								</div>
							</div>
							<div class="cell-md-6 offset-top-30">
								<div class="form-group">
									<label for="post-job-company-name" class="form-label form-label-outside text-sbold rd-input-label">Designation</label>
									<input id="post-job-company-name" type="text" name="designation" class="form-control form-control-has-validation form-control-last-child" required pattern="[a-zA-Z]" placeholder="enter job designation">
								</div>
							</div>
							<div class="cell-md-6 offset-top-30">
								<div class="form-group">
									<label for="post-job-location" class="form-label form-label-outside text-sbold rd-input-label">No_Of_Vacancies</span></label>
									<input id="post-job-location" type="text" name="vacancy" required class="form-control form-control-has-validation form-control-last-child" pattern="[1-9]{1}" placeholder="enter numeber of vacancies">
								</div>
							</div>
							<div class="cell-md-6 offset-top-30">
								<div class="form-group">
									<label for="post-job-category" class="form-label form-label-outside text-sbold rd-input-label">Start_Date</label>
									<input type="date" name="start_date" class="form-control form-control-has-validation form-control-last-child" required placeholder="enter starting date">
								</div>
							</div>
							<div class="cell-lg-12">
								<div class="form-group">
									<label for="contact-me-message" class="form-label form-label-outside text-sbold rd-input-label">End_Date</label>
									<input type="date" name="end_date" class="form-control form-control-has-validation form-control-last-child" required placeholder="enter ending date">
								</div>
							</div>
							<div class="cell-lg-12">
								<div class="form-group">
									<label for="contact-me-message" class="form-label form-label-outside text-sbold rd-input-label">Qualificaton</label> 
										<select required name="qualification" class="form-control form-control-has-validation form-control-last-child">
											<option value=" ">Select qualificaton</option>
											<option>graduation</option>
											<option>pg</option>
											<option>phd</option>
										</select>
								</div>
							</div>
							<div class="cell-md-6 offset-top-30">
								<div class="form-group">
									<label for="post-job-minimum-salary" class="form-label form-label-outside text-sbold rd-input-label">Salary Offered </span></label>
									<input type="text" name="salary" class="form-control form-control-has-validation form-control-last-child" required placeholder="salary greater than 30000" min="30000">
								</div>
							</div>
						</div>
						<div class="group group-xl offset-top-30 text-center text-md-left">
							<input type="submit" class="btn btn-primary" name="submit" value="Post"></input>
						</div>
				</form>
			</div>
		</div>
</div>
</section>
</body>
</html>
<?php
  if(isset($_POST['submit']))
		{
			echo $jname=$_POST['jname'];
			echo $desig=$_POST['designation'];
			echo $vacancy=$_POST['vacancy'];
			echo $sdate=$_POST['start_date'];
			echo $edate=$_POST['end_date'];
			echo $salary=$_POST['salary'];
			echo $qual=$_POST['qualification'];
			//echo $com_id=10;
			//$job="sumeettoppo95@gmail.com"
			$sql="insert into job (`job_id`, `job_name`, `designation`, `min_qualification`, `no_of_vacancy`, `salary`, `start_date`, `end_date`, `jobprovider_email`) VALUES  ('','$jname','$desig','$qual','$vacancy','$salary','$sdate','$edate','$email')";
			$run=mysqli_query($conn,$sql);
			if($run) 
			{
				echo "<script>alert('Records Inserted')</script>";
			} 
			else 
			{
				echo "<script>alert('Records Not Inserted')</script>";
			}
		}
?>