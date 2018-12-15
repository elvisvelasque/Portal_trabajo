<?php
include("../../connection.php");
$con=conectar();

$state = $_POST['state'];
$id = $_POST['id'];

$query2 = "UPDATE `empleo` SET `estado`= $state WHERE `id_empleo` = $id";
$stmt2 = mysqli_query($con,$query2);
echo $id;
?>

