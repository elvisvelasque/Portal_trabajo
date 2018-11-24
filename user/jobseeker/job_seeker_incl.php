<?php
	session_start();
	if(!isset($_SESSION['email']))
	{
	  echo '<script>
            alert("Login First");
            window.location.href="../../login.php";
             </script>';
	}
	if($_SESSION['type']!='S')
	{
	  echo '<script>
            alert("Login As Job Seeker");
            window.location.href="../../logout.php";
             </script>';
	}
	
	$email=$_SESSION['email'];
	include("../../connection.php");
	?>