<?php
	
 require("job_provider_incl.php");
 
	if(isset($_GET['job_id']))
	{
	$job_id=$_GET['job_id'];
	$_SESSION['job_id']=$job_id;
	}
	else  
   {
	 echo '<script>
        window.location.href="index.php";
       </script>';
	}
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
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="postjob.php" class="active">Post job</a></li>
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
	<h2 align="center"> Candidate list for Job Id: <?php echo $job_id; ?></h2>
	
	 <?php
	$que = "select * from job_seeker,applied where email=jobseeker_email and job_id='$job_id'";
	$run = mysqli_query($conn,$que);
	if($run->num_rows>0)
	{
	?>
	
    <div class="container">
      <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
               
            </tr>
			<th>
			<tr>
				<td align="center"><h4><b>FName:</b></h4></td>
				<td align="center"><h4><b>Lname:</b></h4></td>
				<td align="center"><h4><b>Address:</b></h4></td>
				<td align="center"><h4><b>DOB:</b></h4></td>
				<td align="center"><h4><b>Gender:</b></h4></td>
				<td align="center"><h4><b>contact No.:</b></h4></td>
				<td align="center"><h4><b>Qualification</b></h4></td>
				<td align="center"><h4><b>Percentage</b></h4></td>
				<td align="center"><h4><b>Experience</b></h4></td>
				<td align="center"><h4><b>Skill</b></h4></td>
				<td align="center"><h4><b>E-mail</b></h4></td>
				<td align="center"><h4><b>Send Confirmation Mail</b></h4></td>
			</tr>
			</th>
   <?php
    while($row = mysqli_fetch_array($run))
	{
    ?>
			<th>
			<tr>
            
                <td><?php echo $row["fname"]; ?></td>
            
                
                <td><?php echo $row["lname"]; ?></td>
            
                
                <td><?php echo $row["address"];?></td>
            
                
                <td><?php echo $row["dob"];?></td>
            
                
                <td><?php echo $row["gender"];?></td>
            
                
                <td><?php echo $row["contact_no"];?></td>
            
                
                <td><?php echo $row["qualification"];?></td>
				
				
				<td><?php echo $row["percentage"];?></td>
				
				
				<td><?php echo $row["experience"];?></td>
				
				
				<td><?php echo $row["skill"];?></td>
				
				
				<td><?php echo $row["email"];?></td>
				
				
				<td align="center"><a class="btn btn-info btn-large" target="_blank" onclick="check();" href="mail.php?job_id=<?php echo $row['job_id']; ?>&&email=<?php echo $row['email']; ?> ">Send</a></td>
            
            </tr>
			
        
      </div>
      <?php
	}
	}
	else echo '<h3 align="center"> No candidate have applied yet </h3>';
	?>
	</th>
	</table>
    </div>
  </body>
</html>