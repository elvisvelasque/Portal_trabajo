<?php
include("../../connection.php");
$con=conectar();

$state = $_POST['state'];
$id = $_POST['id'];

$query2 = "UPDATE `postulante_empleo` SET `seleccionado`= $state WHERE `id_postulante_empleo` = $id";
$stmt2 = mysqli_query($con,$query2);
echo $state;
?>

