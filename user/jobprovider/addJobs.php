<?php
include("../../connection.php");
$con=conectar();

$tituloEmpleo = $_POST['tituloEmpleo'];
$ubicacion = $_POST['ubicacion'];
$descripcion = $_POST['descripcion'];
$php = 0;
$java = 0;
$python = 0;
$ofimatica = 0;
$angular = 0;
$laravel = 0;
$net = 0;
$sql = 0;
if (isset($_POST['php']))
    $php = $_POST['php'];
if (isset($_POST['java']))
    $java = $_POST['java'];
if (isset($_POST['python']))
    $python = $_POST['python'];
if (isset($_POST['ofimatica']))
    $ofimatica = $_POST['ofimatica'];
if (isset($_POST['angular']))
    $angular = $_POST['angular'];
if (isset($_POST['laravel']))
    $laravel = $_POST['laravel'];
if (isset($_POST['net']))
    $net = $_POST['net'];
if (isset($_POST['sql']))
    $sql = $_POST['sql'];

$query2 = "INSERT INTO `empleo`(`titulo`, `ubicacion`, `descripcion`, `c_php`, `c_java`, `c_python`, `c_ofimatica`, `c_angular`, `c_laravel`, `c_net`, `c_sql`) 
VALUES ('$tituloEmpleo','$ubicacion','$descripcion',$php,$java,$python,$ofimatica,$angular,$laravel,$net,$sql)";
$stmt2 = mysqli_query($con,$query2);

echo $query2;
//  $query4 = "SELECT * FROM `alumnos`";
//  $stmt4 = mysqli_query($con,$query4);
//  $id = 0;
//  while($extraido = mysqli_fetch_array($stmt4) ) {
//      $id = $extraido['id_alumno'];
//  }
//  $query = "INSERT INTO `datosacademicos`( `id_alumno`, `especialidad`, `ciclo`, `turno`, `ocupacion`, `dni`, `COB`, `otros`, `uCiclo`, `Semestre`, `anio`)
//  VALUES ($id,'$especialidad','$ciclo','$turno','$ocupacion','$dni','$COB','$otros','$uCiclo','$Semestre','$anio')";
//  $stmt = mysqli_query($con,$query);
//
//  $query3 = "INSERT INTO `actividadesextracurriculares`(`id_alumno`, `musica`, `canto`, `teatro`, `deportes`)
//  VALUES ($id,'$musica','$Canto','$Teatro','$deportes')";
//  $stmt3 = mysqli_query($con,$query3);

?>

