<?php
include("../../connection.php");
$con=conectar();

$value = $_POST['value'];
$id = $_POST['id'];

$query2 = "UPDATE `postulante_empleo` SET `calificacion_entrevista`= $value WHERE `id_postulante_empleo` = $id";
$stmt2 = mysqli_query($con,$query2);
echo $query2;
?>

