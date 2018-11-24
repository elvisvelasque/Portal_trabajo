<?php
require("job_seeker_incl.php");
 $sql="select * from job_seeker where email='$email'";
      $result2=$conn->query($sql);
     if($result2->num_rows==0)
      {
		  echo '<script>
            alert("First Set Profile hen you Can Update Now");
            window.location.href="index.php";
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
   		public function edit_profile($conn)      //this functon is used for updating the profile after taking data from form//
		{
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
			 $email=$_SESSION['email'];
		
		if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
		$a="";
		foreach($_POST['check_list'] as $selected){
		$a.=$selected;
		$a.=",";
	  }
	}
	$skill=rtrim($a,", ");
	 $sql="update job_seeker set fname='$fname',lname='$lname',address='$address',
		dob='$dob',contact_no='$contact_no',qualification='$qualification',percentage='$percentage',
		experience='$experience',skill='$skill',gender='$gender' where email='$email' ";
	
// here condition is checking if true then give a msg//
		if(mysqli_query($conn, $sql))
			{
		    	echo "Records updated successfully in Database";
			}
	 	else
		{
       		echo "</br>ERROR: Could not able to execute";
		}
	}
}
	  
	  //here creation of object//
		  $obj=new profile();
		  //calling of method//
		 $abc=$obj->fetch_profile();
	      
      if(isset($_POST['update']))
	         {
				 $obj->edit_profile($conn);         //calling of method of edit profile//
			 }
	
	// here at the down profile inforamtion will print in the form  while click on edit profile//


	
echo '<html lang="en">';
echo '<head>';
echo '<title>Update Profile</title>';
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

echo '<a href="index.php">Home</a> </br>
      <a href="../../logout.php">Logout</a>';
					
echo '<h1 class="header-w3ls">Update Profile</h1>';
echo '<div class="content-w3ls">';

	echo '<div class="form-w3ls">';
		echo '<form action="edit_profile.php" method="post">';
			echo '<div class="content-wthree1">';
				echo '<div class="grid-agileits1">';
					echo '<div class="form-control"> ';
						echo '<label class="header">First Name <span>:</span></label>';
						echo '<input type="text" id="name" name="fname" placeholder="" value='.$abc['fname'].' title="Please enter your First Name" required="">';
					echo '</div>';
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

		   
		   echo '<div class="form-control">';
		    echo '<label class="header">Your skills<span>:</span></label>';
		   	echo '</div>';
		   	echo '<br>';
			echo '<div class="form-control">	';
				echo '<input type="checkbox" name="check_list[]" value="C"> <p1>C</p1>&nbsp&nbsp';
				echo '<input type="checkbox" name="check_list[]" value="C++"> <p1>C++</p1>&nbsp&nbsp';
				echo '<input type="checkbox" name="check_list[]" value="Java"> <p1>Java</p1>&nbsp';
				echo '<input type="checkbox" name="check_list[]" value="Php"> <p1>Mysql</p1>&nbsp&nbsp';
				echo '<input type="checkbox" name="check_list[]" value="Php"> <p1>Php</p1>&nbsp';
				echo '<input type="checkbox" name="check_list[]" value="Html"> <p1>Html</p1><br>';
				echo '<input type="checkbox" name="check_list[]" value="Python"> <p1>Python</p1>';
				echo '<input type="checkbox" name="check_list[]" value="Css"> <p1>Css</p1>&nbsp&nbsp';
				echo '<input type="checkbox" name="check_list[]" value="Ruby"> <p1>Ruby</p1>&nbsp&nbsp';
				echo '<input type="checkbox" name="check_list[]" value="Js"> <p1>Js</p1>&nbsp&nbsp';
				echo '<input type="checkbox" name="check_list[]" value="JQuery"> <p1>jQuery</p1>';
				
			echo '</div>	';
		
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
		/*
			echo '<div class="content-wthree3">';
			echo '<label class="header">upload Your Photo<span>:</span></label>';
	
	echo '<input type="file" name="file" title="select  your Photo" id="p12" required="">';
			echo '</div>';
			*/
			echo '<div class="content-wthree3">';

			echo '</div>';
	
			echo '<div class="content-wthree4">	';
				echo '<div class="form-control">';
					echo '<input type="submit" class="register" value="update" name="update">';
					echo '<input type="reset" class="reset" value="Reset" name="reset">';
					echo '<div class="clear"></div>';
				echo '</div>';
			echo '</div>';
		echo '</form>';
	echo '</div>';
echo '</div>';

echo '<p class="copyright">resume page <a href="#" >top</a></p>';

echo '</body>';
echo '</html>';