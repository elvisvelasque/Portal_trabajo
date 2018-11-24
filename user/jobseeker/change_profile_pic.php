<?php
require("job_seeker_incl.php");
?>
<html>
	<head>
	<link href="css/frame.css" rel="stylesheet">
	<link href="css/frame_menu.css" rel="stylesheet">
	</head>
<body>
	<div id="fixedheader1">
	<a href="index.php"><font id="logo_text" size="5px">Home</font></a>
	<a href="../../logout.php"><font id="logo_text" size="5px">Logout</font></a>
			
		</div>
		<div id="main_section">
			<?php echo "<img src='img/requested_people.png' id='requested_people'><p id='requested_text'>Change Profile Picture</p>" ;//SESSION VARIABLE VALUE 
			// ############################PHP CODE FOR VIEW REQUEST####################
			echo '<br><br><br><hr color=" #d7d1d0" size="1px">';
			if(isset($_POST['upload']))
{
	$file_name = $_FILES['file']['name'];
	echo "$file_name";
	$file_type = $_FILES['file']['type'];
	$file_size = $_FILES['file']['size'];
	$file_tem_loc =$_FILES['file']['tmp_name'];
  	$file_store="profile_pictures/".$file_name;
	move_uploaded_file($file_tem_loc,$file_store);

	if($file_name=="")
	{
		echo "please select a photo";
	}
	else
	{
		if($file_size>2097152)
		{
			echo "photo >2mb pls crop it";
		}
		else
		{
			
			
			if($file_type=="profile_pictures/jpeg "|| $file_type=="profile_pictures/JPEG"|| $file_type=="profile_pictures/jpg" || $file_type=="profile_pictures/JPG" || $file_type=="profile_pictures/png" || $file_type!="profile_pictures/PNG")
			{
                    echo "<img src='profile_pictures/".$file_name."' width='20%' , height='30%' >";						
					//echo "<br>Your image have been uploaded..";
					echo "<br><a href='index.php' id='redirect'>Uploaded Succesfully...Click to go back</a><style>#redirect{text-decoration:none;}</style>";
			
			}
			else
			{
				echo "please upload jpg/png/jpeg";
			}
		}
		}
	
	$sql="update job_seeker set profile_pic='$file_name' where email='$email'";
	$result=mysqli_query($conn,$sql);
	}
?>
</center>
<br><br>
<form action="change_profile_pic.php" method="post" enctype="multipart/form-data">
    <!--Select image to upload:-->
    <!--<input type="hidden" name="file" value="100000">-->
    <div>
    	<input type="file"  name="file">
    </div>
    <input type="submit" value="Upload Image" name="upload">
</form>
			<br><br><br><hr color=" #d7d1d0" size="1px">
		<div>
	<div id="fixedfooter">CopyrightNITC</div>
</body>
</html>