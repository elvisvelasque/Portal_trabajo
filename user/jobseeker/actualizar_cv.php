<?php
 include("../../connection.php");
		$con = conectar();
$dni = $_POST['dni'];
$id_post = $_POST['id_post'];
$direccion = $_POST['direccion'];
$Distrito = $_POST['Distrito'];
//$filePhoto = $_POST['filePhoto'];        foto ='$filePhoto',
$Telefono = $_POST['Telefono'];
$Edad = $_POST['Edad'];
$sexo = $_POST['Genero'];
$Estado = $_POST['Estado'];
$Lugar = $_POST['Lugar'];
$Institucion = $_POST['Institucion'];
$Puesto = $_POST['Puesto'];
$Carrera = $_POST['Carrera'];
$Descripcion = $_POST['Descripcion'];

$check_value1 = isset($_POST['PHP']) ? 1 : 0;
$check_value2 = isset($_POST['PYTHON']) ? 1 : 0;
$check_value3 = isset($_POST['JAVA']) ? 1 : 0;
$check_value4 = isset($_POST['SQL']) ? 1 : 0;
$check_value5 = isset($_POST['LARAVEL']) ? 1 : 0;
$check_value6 = isset($_POST['NET']) ? 1 : 0;
$check_value7 = isset($_POST['OFIMATICA']) ? 1 : 0;
$check_value8 = isset($_POST['ANGULAR']) ? 1 : 0;

$sql="update postulante 
        set dni ='$dni',sexo ='$sexo',
        direccion ='$direccion',
        edad='$Edad',
        telefono ='$Telefono',
        distrito ='$Distrito',
        estado_civil ='$Estado',
        lugar_nac ='$Lugar',
        institucion ='$Institucion', 
        carrera ='$Carrera', 
        puesto ='$Puesto', 
        descripcion ='$Descripcion',
        php='$check_value1',
        python='$check_value2',
        java='$check_value3',
        sql_='$check_value4',
        laravel='$check_value5',
        net='$check_value6',
        ofimatica='$check_value7',
        angular='$check_value8'
        where id_postulante = $id_post";

echo $sql;

$result=mysqli_query($con,$sql)or die(mysqli_error());


?>