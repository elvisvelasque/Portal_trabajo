<?php
 include("../../connection.php");
 $con = conectar();
 session_start();
 $id_post =  $_SESSION['id_post'];

 function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
    }

?>

<html>
<!DOCTYPE html>
<html lang="es">
<head>
<link href="images/hand.png" rel="icon">
<title>Bolsa de trabajo</title>
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
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<body>


	<div class="banner-top">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top jarallax">
							<div class="agileinfo-dot">
                                <div class="container" style="color: #fff;">
                                <?php
                                    console_log($id_post);
                                    $query = mysqli_query($con,"select * from postulante where id_postulante = '$id_post'")or die(mysql_error());
                                    $row = mysqli_fetch_array($query);
                                    $foto=$row['foto'];
                                    ?>
                                    <form enctype="multipart/form-data" id="formuploadajax" method="post">

                                        <input type="text" name="id_post" style="display: none;" value="<?php echo $id_post?>">
                                    <br><br><br><br><br><br>
                                    <div class="container">

                                        <div class="col-md-3" onclick="$('#filePhoto').click()">
                                            <img id="imagePreview" src="images/<?php echo $row['foto']; ?>" style="">
                                            <!--<input type="file" name="userprofile_picture" value="images/uploadImage.jpg" id="filePhoto" accept="image/*"/>-->
                                        </div>
                                        <div class="col-lg-9">
                                         <div class="pull-right">
                            <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Imprimir Cv</a> 
                            </div>

                                            <div class="container-fluid" style="background-color: whitesmoke; color: #000">
                                                <h3 style="border-bottom: 2px solid red">Datos personales</h3>
                                                <div class="col-md-12">
                                                    <p>Nombres y apellidos</p>
                                                    <p style="margin-top: -12px"><b><?php echo $row['nombre']; ?></b></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>DNI</p>
                                                    <input type="text" class="form-control span9" name="dni" id="dni"   placeholder="DNI" value="<?php echo $row['dni']; ?>" required>
                                                    <p>Dirección</p>
                                                    <input type="text" class="form-control span9" name="direccion" id="direccion"   placeholder="Dirección" value="<?php echo $row['direccion']; ?>" required>
                                                    <p>Distrito</p>
                                                    <input type="text" class="form-control span9" name="Distrito" id="Distrito"   placeholder="Distrito"  value="<?php echo $row['distrito']; ?>" required>
                                                    <p>Correo Electrónico</p>
                                                    <p style="margin-top: -12px"><b><?php echo $row['email']; ?></b></p>
                                                    <p>Celular/Teléfono</p>
                                                    <input type="text" class="form-control span9" name="Telefono" id="Telefono"   placeholder="Teléfono" value="<?php echo $row['telefono']; ?>"  required>
                                                    <br><br>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Edad</p>
                                                    <input type="text" class="form-control span9" name="Edad" id="Edad"   placeholder="Edad" value="<?php echo $row['edad']; ?>" required>
                                                    <p>Género</p>
                                                    <input type="text" class="form-control span9" name="Genero" id="Genero"   placeholder="Género" value="<?php echo $row['sexo']; ?>" required>
                                                    <p>Estado Civil</p>
                                                    <input type="text" class="form-control span9" name="Estado" id="Estado"   placeholder="Estado" value="<?php echo $row['estado_civil']; ?>" required>
                                                    <p>Lugar de Nacimiento</p>
                                                    <input type="text" class="form-control span9" name="Lugar" id="Lugar"   placeholder="Lugar" value="<?php echo $row['lugar_nac']; ?>" required>
                                                    <br><br>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="container-fluid" style="background-color: whitesmoke; color: #000">
                                                <h3 style="border-bottom: 2px solid red">Estudios</h3>
                                                <div class="col-md-12">
                                                    <p>Institución</p>
                                                    <input type="text" class="form-control span9" name="Institucion" id="Institucion" value="<?php echo $row['institucion']; ?>"  placeholder="Institución educativa"  required>
                                                    <p>Carrera</p>
                                                    <input type="text" class="form-control span9" name="Carrera" id="Carrera" value="<?php echo $row['carrera']; ?>"  placeholder="Carrera"  required>
                                                </div>
                                                <br><br>

                                            </div>
                                            <br>
                    
                                            <br>
                                            <div class="container-fluid" style="background-color: whitesmoke; color: #000">
                                                <h3 style="border-bottom: 2px solid red">Conocimientos</h3>
                                                <div class="col-md-12">
                                                <input type="checkbox" name="PHP" value="1" <?php if($row['php']) echo "checked"  ?>  >PHP<br>
                                                <input type="checkbox" name="JAVA" value="1" <?php if($row['java']) echo "checked" ?>  >JAVA<br>
                                                <input type="checkbox" name="PYTHON" value="1" <?php if($row['python']) echo "checked" ?>  >PYTHON<br>
                                                <input type="checkbox" name="LARAVEL" value="1" <?php if($row['laravel']) echo "checked" ?>  >LARAVEL<br>
                                                <input type="checkbox" name="NET" value="1" <?php if($row['net']) echo "checked" ?>  >.NET<br>
                                                <input type="checkbox" name="SQL" value="1" <?php if($row['sql_']) echo "checked" ?>  >SQL<br>
                                                <input type="checkbox" name="OFIMATICA" value="1" <?php if($row['ofimatica']) echo "checked" ?>  >OFIMATICA<br>
                                                <input type="checkbox" name="ANGULAR" value="1" <?php if($row['angular']) echo "checked" ?>  >ANGULAR<br>

                                                </div>
                                            </div>
                                            <br>
                                            <div class="container-fluid" style="background-color: whitesmoke; color: #000">
                                                <h3 style="border-bottom: 2px solid red">Experiencia Laboral</h3>
                                                <div class="col-md-12">
                                                    <p>Puesto</p>
                                                    <input type="text" class="form-control span9" name="Puesto" id="Puesto"   placeholder="Puesto" value="<?php echo $row['puesto']; ?>" required>
                                                    <p>Descripción</p>
                                                    <input type="text" class="form-control span9" name="Descripcion" id="Descripcion"   placeholder="Descripcion" value="<?php echo $row['descripcion']; ?>" required>
                                                </div>
                                            </div>

                                            <div class="container-fluid" style="background-color: whitesmoke; color: #000">
                                                <center>
                                                <input type="submit" class="btn btn-info"  value="Actualizar"/>
                                                </center>
                                            </div>
                                            
                                            <br>
                                        </div>
                                    </div>
                        </form>         

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
								<li><a href="#">Inicio</a></li>
								<li><a href="jobs.php">Puestos laborales</a></li>
                                <li class="active"><a href="my_cv.php">Mi CV</a></li>
                                <li><a href="index.php">Mis postulaciones</a></li>
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
            <br>
            <p align="center" style="color: #fff">© 2018 Multitron-Bolsa de trabajo . Todos los derechos reservados <a href="#"></a></p>

        </div>
    </footer>
</body>
</html>

    <script type="application/javascript">
        $(function(){
            $("#formuploadajax").on("submit", function(e){
                e.preventDefault();
                var f = $(this);
                var formData = new FormData(document.getElementById("formuploadajax"));
                formData.append("dato", "valor");
                $.ajax({
                    url: "actualizar_cv.php",
                    type: "post",
                    dataType: "html",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false
                })
                    .done(function(res){
                        console.log(res);
                        $.jGrowl("CV actualizado con éxito", { header: 'Actualizado' });
                        //setTimeout(window.location.href = "http://localhost/Portal_trabajo/user/jobprovider/index.php", 1000);
                    });
            });
        });
    </script>

