<html>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="images/hand.png" rel="icon">
<title>Online job portel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Bank Online Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
    <style>
        a{
            color: black;
        }
    </style>
<!-- flexslider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- //flexslider -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  --><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<?php
    include("../../connection.php");
    $con=conectar();
    $queryAbierto = "SELECT COUNT(*) FROM `empleo` WHERE estado = 1";
    $queryPausado = "SELECT COUNT(*) FROM `empleo` WHERE estado = 2";
    $queryCerrado = "SELECT COUNT(*) FROM `empleo` WHERE estado = 3";
    $queryJobs = "SELECT * FROM `empleo`";
    $stmtAbierto = mysqli_query($con,$queryAbierto);
    $countAbierto = mysqli_fetch_array($stmtAbierto);
    $stmtPausado = mysqli_query($con,$queryPausado);
    $countPausado = mysqli_fetch_array($stmtPausado);
    $stmtCerrado = mysqli_query($con,$queryCerrado);
    $countCerrado = mysqli_fetch_array($stmtCerrado);
?>
<body>
	<div class="banner-top">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top jarallax">
							<div class="agileinfo-dot">
                                <div class="container" style="color: #fff;">
                                    <br><br><br><br><br>
                                    <br><br>
                                    <div class="container">
                                        <div class="col-md-9">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" style="color: #000; background-color: rgba(255, 255, 255, .5)">
                                                    <thead>
                                                        <tr style="background-color: rgba(211,211,211, .6)">
                                                            <th style="text-align: center"><h4><b>#</b></h4></th>
                                                            <th style="text-align: center"><h4><b>ÚLTIMOS PUESTOS LABORALES</b></h4></th>
                                                            <th style="text-align: center"><h4><b>EXAMEN CON.</b></h4></th>
                                                            <th style="text-align: center"><h4><b>EXAMEN PSIC.</b></h4></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $stmtJobs = mysqli_query($con,$queryJobs);
                                                        $i = 0;
                                                        while($row = mysqli_fetch_array($stmtJobs)) {
                                                            $i++;
                                                            $id = $row['id_empleo'];

                                                            $queryConocimientos = "SELECT COUNT(*) FROM `examen` WHERE `tipo` = 1 and `id_empleo` = $id";
                                                            $stmtConocimientos = mysqli_query($con,$queryConocimientos);
                                                            $countConocimientos = mysqli_fetch_array($stmtConocimientos);

                                                            $queryPsicologico = "SELECT COUNT(*) FROM `examen` WHERE `tipo` = 2 and `id_empleo` = $id";
                                                            $stmtPsicologico = mysqli_query($con,$queryPsicologico);
                                                            $countPsicologico = mysqli_fetch_array($stmtPsicologico);

                                                            ?>
                                                            <tr>
                                                                <td align="center"><?php echo $i;?></td>
                                                                <td>
                                                                    <p><b><a href="rankByJob.php?id=<?php echo $row['id_empleo'];?>"><?php echo $row['titulo']; ?></a></b></p>
                                                                    <p style="margin-top: : -12px"><?php echo $row['descripcion']; ?></p>
                                                                </td>
                                                                <td align="center">
                                                                    <button style="display: <?php if($countConocimientos[0] > 0) {echo 'none';} else echo 'block'?>" type="button" class="btn btn-warning" onclick="goToExam(1, <?php echo $row['id_empleo'];?> )">Crear</button>
                                                                    <p style="display: <?php if($countConocimientos[0] > 0) {echo 'block';} else echo 'none'?>" >El examen ya fue creado</p>
                                                                </td>
                                                                <td align="center">
                                                                    <button style="display: <?php if($countPsicologico[0] > 0) {echo 'none';} else echo 'block'?>" type="button" class="btn btn-success" onclick="goToExam(2, <?php echo $row['id_empleo'];?>)">Crear</button>
                                                                    <p style="display: <?php if($countPsicologico[0] > 0) {echo 'block';} else echo 'none'?>" >El examen ya fue creado</p>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-offset-1 col-md-2">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" style="color: #000; background-color: rgba(255, 255, 255, .5)">
                                                    <tr style="background-color: rgba(211,211,211, .6)">
                                                        <th style="text-align: center"><h4><b>Estado</b></h4></th>
                                                        <th style="text-align: center"><h4><b>#</b></h4></th>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">Abierto</td>
                                                        <td align="center"><?php echo $countAbierto[0] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">Pausado</td>
                                                        <td align="center"><?php echo $countPausado[0] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">Cerrado</td>
                                                        <td align="center"><?php echo $countCerrado[0] ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br><br>
                                </div>
							</div>
						</div>
					</li>
					
					
				</ul>
			</div>
			<div class="clearfix"> </div>
			<script src="js/responsiveslides.min.js"></script>
			
			<!--banner Slider starts Here-->
		</div>
	</div>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="w3layouts-logo">
							<h1><a href="index.html"> <span>Online</span>Job<span>portal</span></a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="index.php">Inicio</a></li>
                                <li><a href="jobs.php">Nuevo Puesto</a></li>
                                <li><a href="puestos_laborales.php">Puestos laborales</a></li>
                                <li><a href="candidatos.php">Candidatos</a></li>
                                <li><a href="../../logout.php" >Cerrar sesión</a></li>

                            </ul>
                        </nav>
                    </div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>


    <footer>
        <div class="container">
            <div class="copyright">
                <p>© 2018 Multitron-Bolsa de trabajo . Todos los derechos reservados <a href="#"></a></p>
            </div>
        </div>
    </footer>
  </body>
</html>
<script type="application/javascript">
    function goToExam (type, id) {
        window.location.href = "http://localhost/Portaltrabajo/user/jobprovider/exam.php?type="+type+"&id="+id;
    }
</script>