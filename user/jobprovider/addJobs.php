<?php
include("../../connection.php");
$con=conectar();

$tituloEmpleo = $_POST['tituloEmpleo'];
$ubicacion = $_POST['ubicacion'];
$descripcion = $_POST['descripcion'];
$count = $_POST['count'];

$query2 = "INSERT INTO `empleo`(`titulo`, `ubicacion`, `descripcion`) 
           VALUES ('$tituloEmpleo','$ubicacion','$descripcion')";
$stmt2 = mysqli_query($con,$query2);

$query3 = "SELECT * FROM `empleo` WHERE `titulo` = '$tituloEmpleo' and `ubicacion` = '$ubicacion' and `descripcion` = '$descripcion'";
$stmt3 = mysqli_query($con,$query3);
$idEmpleo = 1;
while($row = mysqli_fetch_array($stmt3)) {
    $idEmpleo = $row["id_empleo"];
}
for($i = 1; $i <= $count ; $i++){
    $name = "input".$i;
    $conocimiento = $_POST[$name];
    $query4 = "INSERT INTO `conocimiento_empleo`(`id_empleo`, `descripcion`) 
         VALUES ($idEmpleo,'$conocimiento')";
    $stmt4 = mysqli_query($con,$query4);
}

echo $idEmpleo;
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

