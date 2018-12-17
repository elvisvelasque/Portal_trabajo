<?php
 include("../../connection.php");
 $con = conectar();

 function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
    }

   session_start();
 $id_post =  $_SESSION['id_post'];
?>
	<form action="" method="post">
        <table class="table table-bordered" style="color: #000; background-color: rgba(255, 255, 255, .5)">
         <div class="pull-right">
                            <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Imprimir Postulaciones</a> 
                            </div>
	</div>
		<thead>
		<tr>		
					<th  style="text-align: center">Nro</th>
					<th  style="text-align: center">Fecha</th>
					<th  style="text-align: center">Lugar</th>
					<th  style="text-align: center">Puesto</th>
					<th  style="text-align: center" class="empty"></th>
		</tr>
		</thead>
		<tbody>
		<?php
		$query2 = mysqli_query($con,"SELECT b.*,a.estado_fase,a.rechazado,a.fase FROM postulante_empleo a
		inner join empleo b on a.id_empleo=b.id_empleo and a.id_postulante='$id_post' ")or die(mysqli_error());
		$i = 0;
		while($row2= mysqli_fetch_array($query2)){
		    $i++;
		$nro =$row2['id_empleo'];
		$fecha = $row2['fecha'];
		$lugar =$row2['ubicacion'];
		$puesto =$row2['titulo'];
		$fase =$row2['fase'];
		$estado_fase =$row2['estado_fase'];
		$rechazado =$row2['rechazado'];

		console_log($estado_fase);
		if ($estado_fase ==0 ){
			$boton='Espera';
			$href='#';
		}else{
			if ($estado_fase ==1 ){
			$boton='Examen';
			$href='examen.php?id='.$nro;
			}
		}

		if ($rechazado==1){
			$boton='Terminado';
			$href='#';
			}

			if ($fase ==5 ){
			$boton='CONTRATADO';
			$href='#';
			}
		
		?>
        <tr>
		<!--<tr style=" <?php //if($stud_id==1){ echo 'display:none';}?> "> -->
		<td align="center"><?php echo $i; ?></td>
		<td align="center"><?php echo $fecha; ?></td>
		<td align="center"><?php echo $lugar ; ?></td>
		<td align="center"><?php echo $puesto; ?></td>
		<td align="center" class="empty" width="250">
		
		<a data-placement="top" title="Click to View all Details" id="view<?php echo $nro; ?>" href="<?php echo $href; ?>" class="btn btn-warning"><i class="icon-search icon-large"></i><?php echo $boton; ?></a>
            <?php } ?>

        </td>
		</tr>
	
		</tbody>
	</table>
	</form>