             <div class="table-responsive">
             <form action="">
                                            <table class="table table-bordered" style="color: #000; background-color: rgba(255, 255, 255, .5)">
                            <div class="pull-right">
                            <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Imprimir Puestos</a> 
                            </div>

                                                <thead>
                                                <tr style="background-color: rgba(211,211,211, .6)">
                                                    <th style="text-align: center"><h4><b>#</b></h4></th>
                                                    <th style="text-align: center"><h4><b>Fecha</b></h4></th>
                                                    <th style="text-align: center"><h4><b>Lugar</b></h4></th>
                                                    <th style="text-align: center"><h4><b>Puesto</b></h4></th>
                                                    <th style="text-align: center"><h4><b>Estado</b></h4></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $queryJobs = "SELECT * FROM `empleo`";
                                                $stmtJobs = mysqli_query($con,$queryJobs);
                                                while($row = mysqli_fetch_array($stmtJobs)) {
                                                    $id = $row['id_empleo'];
                                                    ?>
                                                    <tr>
                                                        <td align="center"><?php echo $row['id_empleo'];?></td>
                                                        <td align="center">14/12/2018</td>
                                                        <td align="center"><?php echo $row['ubicacion']; ?></td>
                                                        <td align="center"><?php echo $row['titulo']; ?></td>
                                                        <td align="center">
                                                            <select class="form-control" onchange="changeState(this.value, <?php echo $row['id_empleo']; ?>, <?php echo "'".$row['titulo']."'"; ?>)">
                                                                <option value="1"<?php if ($row['estado'] == 1) echo ' selected="selected"'; ?>>Activo</option>
                                                                <option value="2"<?php if ($row['estado'] == 2) echo ' selected="selected"'; ?>>Pausado</option>
                                                                <option value="3"<?php if ($row['estado'] == 3) echo ' selected="selected"'; ?>>Cerrado</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                            </form>
                                        </div>