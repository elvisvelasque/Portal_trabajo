<?php
include("../../connection.php");
$con=conectar();

$state = $_POST['state'];
$fase = $_POST['fase'];
if($state == 1)
    $fase++;
else
    $fase--;

$id = $_POST['id'];

$query2 = "UPDATE `postulante_empleo` SET `estado_fase`= $state , `fase`= $fase WHERE `id_postulante_empleo` = $id";
$stmt2 = mysqli_query($con,$query2);
echo $query2;
?>

