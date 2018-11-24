<?php
	session_start();
	if(!isset($_SESSION['email']))
	{
	  echo '<script>
            alert("Login First");
            window.location.href="../../login.php";
             </script>';
	}
	if($_SESSION['type']!='P')
	{
	  echo '<script>
            alert("Login As Job provider");
            window.location.href="../../logout.php";
             </script>';
	}
	
	$email=$_SESSION['email'];
	include("../../connection.php");
	?>