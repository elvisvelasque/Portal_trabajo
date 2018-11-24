<?php
session_start();
include('../../connection.php');
?>
<html>
<title>
View Profile
</title>
<link href="css/drop.css" rel="stylesheet" type="text/css" />
<link href="css/view_profile.css" rel="stylesheet" type="text/css" />
<head>
</head>

 <body>
	<div id="header_to_view_profile"><center><a href="" id="home_logo" style="text-decoration:none"><font color="white" size="6px" face="Times new roman" >Job Seeker Pannel</font></a></center> </div>
  <nav class="menu" tabindex="0">
	
  <header class="avatar">
		<!--img src="img/person.jpg" /-->
<br>
    <h2>
	
	<?php
	
    $email=$_SESSION['email'];
	$type=$_SESSION['type'];
	$sql="select fname,lname,profile_pic from job_seeker where email='$email'";
	$var=$conn->query($sql);
	if($var->num_rows > 0)
	{
	
	while($row=$var->fetch_assoc())
	{
		if($row== '.' || $row=='..') continue;
			{
			}
		echo "<img  width='120' height='120' src='profile_pictures/".$row['profile_pic']. "'>";
		echo" <br>".$row['fname'];
		echo $row['lname'];
	}
	}
	
	
	?>
	</h2>
	<h3><a href="change_profile_pic.php" id="home_logo" >change picture</a></h3>
  </header>
	<ul>
	
	 <?php
	   $sql="select * from job_seeker where email='$email'";
      $result2=$conn->query($sql);
     if($result2->num_rows==0)
      {
	   ?>
         <li><a href="setprofile.php">Set Profile</a></li>
      <?php } 
	  else {
	  ?>
	   <li><a href="edit_profile.php">Edit Profile</a></li>
	  <?php } ?>
         <li><a href="search_job.php">Search job</a></li>
         <li><a href="apply.php">Apply job</a></li>
		 <li><a href="logout.php">Logout</a></li>
   </ul>
</nav>

<main>
  <div class="helper">
   <p class="dotted">PERSONAL DETAIL</p>
		<span>
		
		<?php
/*		
  if(isset($_POST['view_profile']))
  {	  
*/
$sql="select * from job_seeker where email='$email'";
	 $var=$conn->query($sql);
	while($row=$var->fetch_assoc())
	{
		//if($senders_details== '.' || $senders_details=='..') continue;
			//	{
				//}
		echo "<table><tr><td>NAME:-</td><td>".$row['fname']." ".$row['lname']."</td></tr>
		<tr><td>CONTACT:-</td><td>".$row['contact_no'].
		"</td></tr><tr><td>EMAIL:-</td><td>".$row['email'].
		"</td></tr><tr><td>Address:-</td><td>".$row['address'].
		"</td></tr>
		<tr><td>DOB:-</td><td>".$row['dob'].
		"</td></tr><tr><td>Qualification:-</td><td>".$row['qualification'].
		"</td></tr><tr><td>Percentage:-</td><td>".$row['percentage'].
		"</td></tr><tr><td>Experience:-</td><td>".$row['experience'].
		"</td></tr><tr><td>Skill:-</td><td>".$row['skill'].
		
		
		"</td></tr><tr><td>SEX:-</td><td>".$row['gender']."</td></tr></table>";
		
		
	}
	
	
   
   
	

	
	

?>
</span>
  </div>
</main>
</body>
</html>