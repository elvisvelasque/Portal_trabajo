
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
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link href="../../util/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
    <script src="../../util/jGrowl/jquery.jgrowl.js"></script>
<style>
.welcome{
text-align:center;
float:left;
margin-left:40px;
margin-top:-20px;
color:#e5f29d;
width:30%;
}
.copyright p {
    text-align: left;
    color: #FFFFFF;
    margin: 0;
    font-size: .9em;
}
</style>
</head>
<?php
include("../../connection.php");
$con=conectar();

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
<div align="Right">
  <br><br><br>
            <div ="col-sm-7">
                            <input type="text" class="form-control" placeholder="Buscar" style="width: auto">
                        </div>
                        <div class="col-sm-5" style="align-items: left">
                            <button type="button" class="btn btn-info">Buscar</button>
                        </div>
        </div>                                    <br><br>
                                    <div class="container">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" style="color: #000; background-color: rgba(255, 255, 255, .5)">
                                                <thead></thead>
                                                <tr style="background-color: rgba(211,211,211, .6)">
                                                    <th style="text-align: center"><h4><b>#</b></h4></th>
                                                    <th style="text-align: center"><h4><b>Fecha</b></h4></th>
                                                    <th style="text-align: center"><h4><b>Lugar</b></h4></th>
                                                    <th style="text-align: center"><h4><b>Puesto</b></h4></th>
                                                    <th style="text-align: center"><h4><b>Estado</b></h4></th>
                                                </tr>
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
                                <li ><a href="index.php">Inicio</a></li>
                                <li><a href="jobs.php">Nuevo Puesto</a></li>
                                <li class="active"><a href="puestos_laborales.php">Puestos laborales</a></li>
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
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3" style="align-items: left">
                        <p align="left"><b><a href="default.asp" target="_blank">Inicio</a></b></p>
                        <p><b><a href="default.asp" target="_blank">Puestos Laborales</a></b></p>
                        <p><b><a href="default.asp" target="_blank">Mi CV</a></b></p>
                        <p><b><a href="default.asp" target="_blank">Postulaciones</a></b></p>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2">
                        <label style="color: #fff;">Suscribete a nuestro boletín!</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" placeholder="Ingresa tu email" style="width: auto">
                        </div>
                        <div class="col-sm-5" style="align-items: left">
                            <button type="button" class="btn btn-info">Suscribir</button>
                        </div>
                    </div>

                </div>
                <br>
                <br>
            </div>
            <p align="center" style="color: #fff">© 2018 Multitron-Bolsa de trabajo . Todos los derechos reservados <a href="#"></a></p>

        </div>
    </footer>
</body>
</html>

<script>
    function changeState(value, id, titulo) {
        var parametros = {
            "state" : value,
            "id" : id
        };
        $.ajax({
            data:  parametros,
            url:   'updateStateJobs.php',
            type:  'post',
            success:  function (response) {
                console.log(response)
                $.jGrowl("El estado del puesto \"" + titulo + "\" fue actualizado con éxito", { header: 'Actualizado' });
                setTimeout(location.reload.bind(location), 1500);
            }
        });
    }
</script>