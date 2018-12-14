<?php
 include("../../connection.php");
		$con = conectar();
		$nombre = $_POST['nombre'];
		$dni = $_POST['dni'];
		$direccion = $_POST['direccion'];
		$Distrito = $_POST['Distrito'];
		$filePhoto = $_POST['filePhoto'];
		$Telefono = $_POST['Telefono'];
		$Edad = $_POST['Edad'];
		$sexo = $_POST['Genero'];
		$Estado = $_POST['Estado'];
		$Lugar = $_POST['Lugar'];
		$Institucion = $_POST['Institucion'];
		$Carrera = $_POST['Carrera'];
		$Descripcion = $_POST['Descripcion'];
		
		mysqli_query($con,"update postulante set nombre = '$nombre', dni ='$dni',sexo ='$sexo',
		direccion ='$direccion',
		edad='$Edad',
		telefono ='$Telefono',
		distrito ='$Distrito',
		foto ='$filePhoto',
		estado_civil ='$Estado',
		lugar_nac ='$Lugar',
		institucion ='$Institucion', 
		carrera ='$Carrera', 
		Descripcion ='$Descripcion', 
		where student_id = 1
		")or die(mysqli_error());
		

		?>
		
		
		<!--
		
		s