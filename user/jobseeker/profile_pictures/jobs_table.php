
	<form action="" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">	 
	</div>
		<thead>
		<tr>		
					<th>Nro</th>
					<th>Fecha</th>
					<th>Lugar</th>
					<th>Puesto</th>
					<th>Estado</th>				
					<th class="empty"></th>
		</tr>
		</thead>
		<tbody>
		<?php
		$query2 = mysqli_query($con,"
		SELECT t.*, 
       	@rownum := @rownum + 1 AS rank
  		FROM TRABAJOS t, 
       	(SELECT @rownum := -1) r
       	--where status != 'exempted'
       	")or die(mysql_error());
		while($row2= mysqli_fetch_array($query2)){
		$nro =$row2['rank'];
		$fecha = $row2['FECHA'];
		$lugar =$row2['lugar'];
		$puesto =$row2['puesto']; 
		$estado =$row2['estado']; 
		
		}
		
		?>
		<!--<tr style=" <?php //if($stud_id==1){ echo 'display:none';}?> "> -->
		<td><?php echo $nro; ?></td> 
		<td><?php echo $fecha; ?></td> 
		<td><?php echo $lugar ; ?></td> 
		<td><?php echo $puesto; ?></td> 
		<td><?php echo $estado; ?></td> 
	
		<td class="empty" width="250">
		
		<a data-placement="top" title="Click to View all Details" id="view<?php echo $trabajo_id_id; ?>" href="view_pay.php<?php echo '?id='.$stud_id; ?>" class="btn btn-warning"><i class="icon-search icon-large"></i> Ver </a>
			
		</td>
		</tr>
	  <?php }?>  
	
		</tbody>
	</table>
	</form>