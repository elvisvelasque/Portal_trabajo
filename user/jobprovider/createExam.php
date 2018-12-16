<?php
include("../../connection.php");
$con=conectar();

$type = $_POST['type'];
$id = $_POST['id'];
$count = $_POST['count'];

$query2 = "INSERT INTO `examen`(`id_empleo`, `tipo`) 
           VALUES ('$id','$type')";
$stmt2 = mysqli_query($con,$query2);

$query3 = "SELECT * FROM `examen` WHERE `id_empleo` = '$id' and `tipo` = '$type'";
$stmt3 = mysqli_query($con,$query3);
$idExamen = 1;
while($row = mysqli_fetch_array($stmt3)) {
    $idExamen = $row["id_examen"];
}
for($i = 1; $i <= $count ; $i++){
    $name = "input".$i;
    $opcion1name = "input".$i."o1";
    $opcion2name = "input".$i."o2";
    $opcion3name = "input".$i."o3";
    $opcion4name = "input".$i."o4";
    $respuestaName = "respuesta".$i;
    $encabezado = $_POST[$name];
    $opcion1 = $_POST[$opcion1name];
    $opcion2 = $_POST[$opcion2name];
    $opcion3 = $_POST[$opcion3name];
    $opcion4 = $_POST[$opcion4name];
    $respuesta = $_POST[$respuestaName];
    $query4 = "INSERT INTO `pregunta_examen`( `id_examen`, `encabezado`, `opcion1`, `opcion2`, `opcion3`, `opcion4`, `respuesta`) 
VALUES ($idExamen,'$encabezado','$opcion1','$opcion2','$opcion3','$opcion4','$respuesta')";
    $stmt4 = mysqli_query($con,$query4);
}

echo $idExamen;
?>

