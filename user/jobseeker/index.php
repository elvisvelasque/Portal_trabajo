<?php
require("job_seeker_incl.php");
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

<style>
.welcome{
text-align:center;
float:left;
margin-left:40px;
margin-top:-20px;
color:#e5f29d;
width:30%;
}
</style>
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
                <?php
	$que = "select fname from job_seeker where email='$email'";
	$run = mysqli_query($conn,$que);
        $row=mysqli_fetch_array($run);
	$name=$row['fname'];
       ?>
                                       <div class="welcome">
							<h1><marquee>Welcome <?php echo $name; ?></marquee> </h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Home</a></li>
								<li><a href="view.php">View Profile</a></li>
								<li><a href="search_job.php">Search job</a></li>
							    <li><a href="../../logout.php" >Logout</a></li>
                                                                
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>

	<!--below form display the records of the co-passenger details-->
	<h2 align="center"> Jobs You Have Applied</h2>
	 
	<?php
	$que = "select company_name,job.job_id,job_name,designation,applied_on from applied,job,job_provider where applied.job_id=job.job_id and jobprovider_email=email and jobseeker_email='$email'";
	$run = mysqli_query($conn,$que);
	if($run->num_rows>0)
	{
	?>
    <div class="container">
      <div class="table-responsive">
        <table class="table table-bordered">
           <tr>
		        <td align="center"><h4><b>Company:</b></h4></td>
		        <td align="center"><h4><b>Job Id</b></h4></td>
				<td align="center"><h4><b>Job_Name:</b></h4></td>
				<td align="center"><h4><b>Designation:</b></h4></td>
				<td align="center"><h4><b>Applied On</b></h4></td>
				<td align="center"><h4><b>Print Acknowledgment</b></h4></td>
		<!--	<td align="center"><h4><b>Start_Date:</b></h4></td>
				<td align="center"><h4><b>End_Date:</b></h4></td>
				<td align="center"><h4><b>Min_Qualification:</b></h4></td>
				<td align="center"><h4><b>Update</b></h4></td>
				<td align="center"><h4><b>View Applied Candidates</b></h4></td> -->
			</tr>
			
    <?php
	while($row = mysqli_fetch_array($run))
	{
    ?>
			<th>
			<tr>
            
			    <td align="center"><?php echo $row["company_name"];?></td>
				
				
				<td align="center"><?php echo $row["job_id"]; ?></td>
            
			
                <td align="center"><?php echo $row["job_name"]; ?></td>
            
                
                <td align="center"><?php echo $row["designation"]; ?></td>
            
                
                <td align="center"><?php echo $row["applied_on"];?></td> 
				
				
				<td align="center"><a class="btn btn-info btn-large" onclick="check();" href="acknowledgment.php?job_id=<?php echo $row['job_id']; ?> ">Print</a></td>
            
                     
            <!--     <td><?php echo $row["start_date"];?></td>
            
                
                <td><?php echo $row["end_date"];?></td>
            
                
                <td><?php echo $row["min_qualification"];?></td>
				
				<td><a class="btn btn-info btn-large" onclick="check();" href="updatepostjob.php?job_id=<?php echo $row['job_id']; ?> ">Update</a></td>
				
				<td align="center"><a class="btn btn-info btn-large" onclick="check();" href="view_candidate.php?job_id=<?php echo $row['job_id']; ?> ">view</a></td>  -->
            
            </tr>
			
        
      </div>
      <?php
	}
	}
	else echo"You haven't Apply for any job";
	?>
	</th>
	</table>
    </div>
  </body>
</html>