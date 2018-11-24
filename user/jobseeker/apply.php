<?php
require("job_seeker_incl.php");
if(isset($_GET['job_id']))
{
$job_id=$_GET['job_id'];
$_SESSION['job_id']=$job_id;
}	 
else  echo '<script>
            alert("First Choose a job to apply");
            window.location.href="search_job.php";
             </script>';    
 
  $sql="select min_qualification,start_date,end_date from job where job_id='$job_id'";
  $result=$conn->query($sql);
  $row=mysqli_fetch_array($result);
  $min_qual=$row['min_qualification']; 
  $start_date=$row['start_date'];
  $end_date=$row['end_date'];
  $now = new DateTime();
  
  $start = strtotime($start_date); 
  $end =  strtotime($end_date);
  $current= $now->getTimestamp(); 
  
   if($current<$start)
	   echo '<script>
            alert("Apply date have not started yet");
            window.location.href="search_job.php";
             </script>';
			 
  if($current>$end)
	   echo '<script>
            alert("Last date to apply is over");
            window.location.href="search_job.php";
             </script>'; 
  
  $sql="select qualification from job_seeker where email='$email'";
  $result=$conn->query($sql);
  $row=mysqli_fetch_array($result);
  $qual=$row['qualification'];    
  if($min_qual=='phd'&&$qual=='pg')
	  echo '<script>
            alert("You Are Not Eligible For This Job");
            window.location.href="search_job.php";
             </script>';
			 
	 if($qual=='graduation'&&$min_qual!='graduation')
	  echo '<script>
            alert("You Are Not Eligible For This Job");
            window.location.href="search_job.php";
             </script>';

   $sql="select * from applied where job_id='$job_id' and jobseeker_email='$email'";
      $result2=$conn->query($sql);
     if($result2->num_rows>0)
      {
          echo '<script>
            alert("You Have Already Applied For This Job");
            window.location.href="search_job.php";
             </script>';
      }
			 
	  class profile
{
	   public  $row,$sql,$conn;
	   
	   public function fetch_profile()    //this function is used to fetching profile information from database//
	       {
			  $email=$_SESSION['email'];
	     	 include('../../connection.php');
		
	     	   $this->sql=$conn->query("select * from job_seeker where email='$email'");
		 	   $this->row=$this->sql->fetch_array(MYSQLI_BOTH);
		       return $this->row;
		 
	       }
   		public function apply_job($conn)      //this functon is used for updating the profile after taking data from form//
		{
           		         $job_id=$_SESSION['job_id'];
                                 $email=$_SESSION['email'];
				 $sql="insert into applied values('$job_id','$email',now())";
				 mysqli_query($conn, $sql);
                        $fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$address=$_POST['address'];
			$dob=$_POST['dob'];
			$contact_no=$_POST['contact_no'];
			$qualification=$_POST['qualification'];
			$percentage=$_POST['percentage'];
			$experience=$_POST['experience'];
			//$skill=$_POST['skill'];
			$gender=$_POST['gender'];
		        //$contact_pic=$_POST['contact_pic'];
		

		 $sql="update job_seeker set fname='$fname',lname='$lname',address='$address',
	dob='$dob',gender='$gender',contact_no='$contact_no',qualification='$qualification',percentage='$percentage',
		experience='$experience' where email='$email'";
	 	
// here condition is checking if true then give a msg//
		if(mysqli_query($conn, $sql))
			{
		    	echo '<script>
            alert("Applied Successfully");
			window.location.href="search_job.php";
            </script>';
			}
	 	else
		{
       		//echo "</br>ERROR: Could not able to execute";
		}
	}
}
	  
	  //here creation of object//
		  $obj=new profile();
		  //calling of method//
		 $abc=$obj->fetch_profile();
	      
      if(isset($_POST['apply']))
	         {

                               $obj->apply_job($conn);         //calling of method of Apply//
			 }
	
	// here at the down profile inforamtion will print in the form  while click on edit profile//


	
echo '<html lang="en">';
echo '<head>';
echo '<title>Apply</title>';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo '<meta name="keywords" content="Employee Feedback Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />';

echo '<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>';

echo '<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">';


echo '<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />';
echo '<style>';
	echo '#birthDate{';
		 echo 'height: 50px;';
		 echo 'width: 530px;';
		 echo 'background-color:#212121; ';
		 echo 'color: white;';
		 echo 'border-color: #999999;';
	echo '}';
	echo 'p1{';
		echo 'font-size: 30px;';
		echo 'color:#808000;';
		echo 'font:bold;';
	echo '}';
	echo '#p12{';
		echo 'color: white;';
		echo 'font-size: 20px;';
		
	echo '}';
echo '</style>';
echo '</head>';
echo '<body>';
echo'<a href="index.php">Home</a> </br>
<a href="../../logout.php">Logout</a>';
echo '<h1 class="header-w3ls">Application Form</h1>';
echo '<div class="content-w3ls">';

	echo '<div class="form-w3ls">';
		echo '<form action="apply.php?job_id='.$job_id.'" method="post">';
			echo '<div class="content-wthree1">';
				echo '<div class="grid-agileits1">';
			
	     	   $sql=$conn->query("select job_name,designation from job where job_id='$job_id'");
		 	   $row=$sql->fetch_array(MYSQLI_BOTH);
		      
				
							echo '<div class="form-control"> ';
						echo '<label class="header">Job Name<span>:</span></label>';
						echo '<input type="text" id="name" name="contact_no" readonly="readonly" value='.$row[0].' title="Please enter your content number" required="">';
					echo '</div>';
						echo '<br>';
						
							echo '<div class="form-control"> ';
						echo '<label class="header">Designation<span>:</span></label>';
						echo '<input type="text" id="name" name="contact_no" readonly="readonly" value='.$row[1].' title="Please enter your content number" required="">';
					echo '</div>';
						echo '<br>';
						
						
					echo '<div class="form-control"> ';
						echo '<label class="header">First Name <span>:</span></label>';
						echo '<input type="text" id="name" name="fname" placeholder="" value='.$abc['fname'].' title="Please enter your First Name" required="">';
					echo '</div>';
                                        echo '<br>';
					echo '<div class="form-control"> ';
						echo '<label class="header">Last Name <span>:</span></label>';
						echo '<input type="text" id="name" name="lname" placeholder="" value='.$abc['lname'].' title="Please enter your Last Name" required="">';
					echo '</div>';
		
					echo '<div class="form-control">	';
						echo '<label class="header">Address <span>:</span></label>';
						echo '<input type="text" id="email" name="address" placeholder="" value='.$abc['address'].' title="Please enter a Valid Email Address" required="">';
					echo '</div>';
					
					 echo '<div class="form-control"> ';
						echo '<label class="header">Date of birth<span>&nbsp :&nbsp</span></label>';
					 
                        echo '<input type="date" id="birthDate" name="dob" required="" value='.$abc['dob'].' title="Please enter date of birth" required="">';
                   
					echo '</div>';

                   
					echo '<div class="form-control"> ';
						echo '<label class="header">Contact Number<span>:</span></label>';
						echo '<input type="text" id="name" name="contact_no" value='.$abc['contact_no'].' title="Please enter your content number" required="">';
					echo '</div>';
						echo '<br>';
						
					echo '<div class="form-control">';
					
					echo '<label class="header">Qualificaton<span>:</span></label> ';
						    echo '<select required  id="birthDate"  name="qualification" value='.$abc['qualification'].' >';
                      
                            echo '<option >'.$abc['qualification'].'</option>';
                            echo '<option >graduation</option>';
                            echo '<option >pg</option>';
                            echo '<option >phd</option>';
                            echo '</select>';
					echo '</div>';
					
					
					 echo '<div class="form-control"> ';
						echo '<label class="header"> Percentage <span>:</span></label>';
						echo '<input type="text" id="name" name="percentage" value='.$abc['percentage'].' title="Please enter your Password" required="">';
					echo '</div>';
					echo '<div class="form-control"> ';
						echo '<label class="header">Experience <span>:</span></label>';
						echo '<input type="text" id="orgn" name="experience"  value='.$abc['experience'].' title="Please enter your Company id" required="">';
					echo '</div>';


				echo '</div>';
				
				
			echo '</div>';

		   
		
				echo '<div class="content-wthree2">';
				echo '<div class="grid-w3layouts1">';
					echo '<div class="w3-agile1">';
						echo '<label class="rating">Please Specify Gender<span>:</span></label>';
						echo '<ul>';
							echo '<li>';
							if($abc['gender']=="Male")
								echo '<input type="radio" id="a-option" name="gender" value="Male" checked="checked" required="">';
							else 
								echo '<input type="radio" id="a-option" name="gender" value="Male" required="">';
								echo '<label for="a-option">Male</label>';
								echo '<div class="check"></div>';
							echo '</li>';
							echo '<li>';
								if($abc['gender']=="Female")
								echo '<input type="radio" id="b-option" name="gender" value="Female" checked="checked" required="">';
							else 
								echo '<input type="radio" id="b-option" name="gender" value="Female" required="">';
								echo '<label for="b-option">Female</label>';
								echo '<div class="check"><div class="inside"></div></div>';
							echo '</li>';
							
							
						echo '</ul>';
					echo '</div>	';
				echo '</div>';
				
			
			echo '</div>';
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
echo '<div class="form-control"> ';
					echo '<input type="checkbox" name="test" required="">';
echo '<label class="rating">  I agree that the details provided by me are true to the best of my kowledge.</label>';
						
					echo '</div>';
                        echo '<br>';
echo '<br>';
/*
			echo '<div class="content-wthree3">';
			echo '<label class="header">upload Your Photo<span>:</span></label>';
	
	echo '<input type="file" name="file" title="select  your Photo" id="p12" required="">';
			echo '</div>';
			*/
			
			echo '<div class="content-wthree4">	';
				echo '<div class="form-control">';
					echo '<input type="submit" class="register" value="apply" name="apply">';
					echo '<a href="index.php"><input type="button" class="reset" value="Cancel" name="cancel"></a>';
					echo '<div class="clear"></div>';
				echo '</div>';
			echo '</div>';

echo '</form>';
	echo '</div>';
echo '</div>';

echo '<p class="copyright">resume page <a href="#" >top</a></p>';

echo '</body>';
echo '</html>';