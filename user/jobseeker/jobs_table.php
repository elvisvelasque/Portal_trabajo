<?php
 include("../../connection.php");
 $con = conectar();
  session_start();
  $id_post =  $_SESSION['id_post'];

?>
	<form action="" method="post">
        <table class="table table-bordered" style="color: #000; background-color: rgba(255, 255, 255, .5)">
		<div class="pull-right">	 
	</div>
		<thead>
		<tr>		<th  style="text-align: center">Nro</th>
					<th  style="text-align: center">Fecha</th>
					<th  style="text-align: center">Lugar</th>
					<th  style="text-align: center">Puesto</th>
					<th  style="text-align: center" class="empty"></th>

		</tr>
		</thead>
		<tbody>
		<?php
		$query2 = mysqli_query($con,"SELECT t.* FROM empleo t where estado=1
			and id_empleo not in (select distinct id_empleo from postulante_empleo
			where id_postulante='$id_post')");
		while($row2= mysqli_fetch_array($query2)){
		$nro =$row2['id_empleo'];
		$fecha = $row2['fecha'];
		$lugar =$row2['ubicacion'];
		$puesto =$row2['titulo']; 
		
		?>
		<tr>

		<!--<tr style=" <?php //if($stud_id==1){ echo 'display:none';}?> "> -->
		<td><?php echo $nro; ?></td> 
		<td><?php echo $fecha; ?></td> 
		<td><?php echo $lugar ; ?></td> 
		<td><?php echo $puesto; ?></td> 
	
		<td class="empty" width="250">
		
		<a data-placement="top" title="Click to View all Details" id="view<?php echo $nro; ?>" href="ver_empleo.php<?php echo '?id='.$nro; ?>" class="btn btn-warning"><i class="icon-search icon-large"></i> Ver </a>
		 <?php } ?>

		</td>
		</tr>
	
		</tbody>
	</table>
	</form>