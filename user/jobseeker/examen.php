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
<?php $get_id = $_GET['id']; ?>

<html>
<!DOCTYPE html>
<html lang="es">
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
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                        $query = mysqli_query($con,"SELECT * FROM `pregunta_examen` WHERE 
                    id_examen in
                    (select id_examen from examen where tipo in (select fase-1 as tipo from postulante_empleo 
                    where id_empleo='$get_id' and id_postulante='$id_post') and id_empleo='$get_id')")or die(mysql_error());
                        ?>
                        <form id="actualizar_cv" class="form-signin" method="post">

                                    <br><br><br><br><br><br>
                                    <div class="container">

                                        <div class="container-fluid">
                                                <center>
                                                <h1>EXAMEN</h1>
                                                </center>
                                        </div>
                                        <div class="col-lg-12">


                                        <?php 
                                        while($row2= mysqli_fetch_array($query)){
                                            $nro =$row2['id_pregunta'];
                                             $encabezado = $row2['encabezado'];
                                             $opcion1 =$row2['opcion1'];
                                             $opcion2 =$row2['opcion2'];
                                             $opcion3 =$row2['opcion3'];
                                             $opcion4 =$row2['opcion4'];
                                             $respuesta =$row2['respuesta'];

                                             if ($respuesta==1) {
                                                $valor1=1;
                                                $valor2=0;
                                                $valor3=0;
                                                $valor4=0;

                                             }else{
                                                  if ($respuesta==2) {
                                                $valor1=0;
                                                $valor2=1;
                                                $valor3=0;
                                                $valor4=0;                                            
                                             }else{
                                                  if ($respuesta==3) {
                                                $valor1=0;
                                                $valor2=0;
                                                $valor3=1;
                                                $valor4=0;
                                             }else{
                                                  if ($respuesta==4) {
                                                $valor1=0;
                                                $valor2=0;
                                                $valor3=0;
                                                $valor4=1;
                                             }else{
                                                $valor1=0;
                                                $valor2=0;
                                                $valor3=0;
                                                $valor4=0;
                                             }
                                             }
                                             }
                                             }


                                        ?>
                    
                                            <br>
                                            <div class="container-fluid" style="background-color: whitesmoke; color: #000">
                                                <h3 style="border-bottom: 2px solid red"><?php echo $encabezado; ?></h3>
                                                <div class="col-md-12">
                                                <input type="checkbox" name="check_box[]" value="<?php echo $valor1; ?>"><?php echo $opcion1; ?><br>
                                                <input type="checkbox" name="check_box[]" value="<?php echo $valor2; ?>"><?php echo $opcion2; ?><br>
                                                <input type="checkbox" name="check_box[]" value="<?php echo $valor3; ?>"><?php echo $opcion3; ?><br>
                                                <input type="checkbox" name="check_box[]" value="<?php echo $valor4; ?>"><?php echo $opcion4; ?><br>
                                                </div>
                                            </div>
                                            <br>
                                             <?php } ?>


                                            <div class="container-fluid">
                                                <center>
                                                <input type="submit" class="btn btn-info"  name="submit" />
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

                    <?php
$count=0;

if(isset($_POST['submit']))
{

       if(isset($_POST['check_box']))
{
    foreach($_POST['check_box'] as $id)
    {
        console_log($id);
        $count=$count+$id;
    }
}else{
    console_log("ni llego");
}

console_log($count);


 $quer3 = mysqli_query($con,"select case when fase=2 then 'calificacion_conocimientos'
                                         when fase=3 then 'calificacion_psicologico'
                                         when fase=4 then 'calificacion_entrevista'
                                          end tipo, fase from postulante_empleo 
                    where id_empleo='$get_id' and id_postulante='$id_post'")or die(mysql_error());
        
 $row3= mysqli_fetch_array($quer3);
 $tipo= $row3['tipo'];
 $fase= $row3['fase'];

   $quer4=" update postulante_empleo
   set
   $tipo=$count,
   fase='$fase',
   estado_fase=0
   where id_empleo='$get_id' and id_postulante='$id_post'
   ";
   console_log($quer4);
   $result=mysqli_query($con,$quer4);

   if($result)
   {

        ?>
      <script>
      //alert('Has postulado');
      window.location.href="index.php";
             </script>
    <?php
   }
   else
   { ?>
     <script>
      alert('Error while register');

      //window.location.href="register.php?Fail";
     </script>
     <?php }
     } ?>