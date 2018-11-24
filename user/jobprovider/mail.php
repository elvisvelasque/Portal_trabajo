<?php
require("job_provider_incl.php");
 if(isset($_GET['job_id'])&&isset($_GET['email']))
	{
	$_SESSION['job_id']=$_GET['job_id'];
	$_SESSION['to']=$_GET['email'];
	}
else  
{
	 echo '<script>
        window.location.href="index.php";
       </script>';
	}	
	$job_id=$_SESSION['job_id'];
	$to=$_SESSION['to'];
	//if(isset($submit))
	$subject = 'Confirmation of Application';
    $message = "!!Congratulations!!
	               your application for job_id:$job_id
                     have approved.";
    mail($to,$subject,$message);
 ?>