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
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link href="../../util/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
    <script src="../../util/jGrowl/jquery.jgrowl.js"></script>
    <style>
        [type="checkbox"]
        {
            vertical-align:middle;
        }
        label{
            font-weight: normal;
            margin-bottom: -10px;
        }
    </style>

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
</head>
<body>
	<div class="banner-top">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top jarallax">
							<div class="agileinfo-dot">
                                <div class="container" style="color: black;">
                                    <br><br><br><br><br>
                                    <br><br>
                                    <form enctype="multipart/form-data" id="formuploadajax2" method="post">
                                        <div class="col-lg-offset-2 col-lg-8"  style="background-color: rgba(255, 255, 255, .5); padding-top: 25px;">
                                            <h4>NUEVO EMPLEO</h4>
                                            <div class="form-group col-md-12">
                                                <h5>Título del empleo</h5>
                                                <input type="text" id="tituloEmpleo" name="tituloEmpleo" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <h5>Ubicación</h5>
                                                <input type="text" id="ubicacion" name="ubicacion" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-6" id="divConocimientos">
                                                <div class="col-sm-8">
                                                    <h5>Conocimientos necesarios</h5>
                                                </div>
                                                <div class="col-sm-4">
                                                    <button type="button" class="btn btn-danger" onclick="createInput()">Nuevo</button>
                                                </div>
                                                <br><br>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="php"  style="word-wrap:break-word">
                                                            <input id="php" name="php" type="checkbox" value="1" />PHP
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="java"  style="word-wrap:break-word">
                                                            <input id="java" name="java" type="checkbox" value="1" />Java
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="python"  style="word-wrap:break-word">
                                                            <input id="python" name="python" type="checkbox" value="1" />Python
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ofimatica"  style="word-wrap:break-word">
                                                            <input id="ofimatica" name="ofimatica" type="checkbox" value="1" />Ofimática
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="angular">
                                                            <input id="angular" name="angular" type="checkbox" value="1" />Angular
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="laravel"  style="word-wrap:break-word">
                                                            <input id="laravel" name="laravel" type="checkbox" value="1" />Laravel
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="net"  style="word-wrap:break-word">
                                                            <input id="net" name="net" type="checkbox" value="1" />. NET
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="sql"  style="word-wrap:break-word">
                                                            <input id="sql" name="sql" type="checkbox" value="1" />SQL
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"></div>
                                                    <br><br><br>
                                            <input type="text" name="count" id="count" style="display: none">
                                             <div class="form-group col-md-12">
                                                <h5>Descripción</h5>
                                                <textarea class="form-control" name="descripcion" id="descripcion" cols="100" rows="10" required></textarea>
                                             </div>
                                            <br>
                                            <div class="col-md-12" align="center">
                                                <button type="submit"  class="btn btn-info">Guardar</button>
                                                <button type="button" class="btn btn-info">Cancelar</button>
                                                <button type="button" class="btn btn-info">Limpiar</button>
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
	<div class="banner">
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
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
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav>
                            <ul class="nav navbar-nav navbar-right">
                                <li ><a href="index.php">Inicio</a></li>
                                <li class="active"><a href="jobs.php">Nuevo Puesto</a></li>
                                <li><a href="puestos_laborales.php">Puestos laborales</a></li>
                                <li><a href="candidatos.php">Candidatos</a></li>
                                <li><a href="postulantes.php">Total Postulantes</a></li>

                                <li><a href="../../logout.php" >Cerrar sesión</a></li>
                            </ul>
                        </nav>
                    </div>
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
    <script>
        var contador = 1;
        document.getElementById("count").value = contador;
        function createInput() {
            contador ++;
            var container = document.getElementById("divConocimientos")
            var input = document.createElement("input");
            input.type = "text";
            input.name = "input"+contador;
            input.id = "input"+contador;
            input.className = "form-control";
            container.appendChild(input);
            document.getElementById("count").value = contador;
        }


        function createJob() {
            var parametros = {
                "tituloEmpleo" : $( "#tituloEmpleo" ).val(),
                "ubicacion" : $( "#ubicacion" ).val(),
                "descripcion" : $( "#descripcion" ).val(),
            };
            console.log(parametros);
            $.ajax({
                data:  parametros,
                url:   'addJobs.php',
                type:  'post',
                success:  function (response) {
                    $.jGrowl("Datos actualizados con éxito", { header: 'Actualizado' });
                    setTimeout(location.reload.bind(location), 1500);
                }
            });
        }
        $(function(){
            $("#formuploadajax2").on("submit", function(e){
                e.preventDefault();
                var f = $(this);
                var formData = new FormData(document.getElementById("formuploadajax2"));
                formData.append("dato", "valor");
                $.ajax({
                    url: "addJobs.php",
                    type: "post",
                    dataType: "html",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false
                })
                    .done(function(res){
                        console.log(res);
                        $.jGrowl("Registro agregado con éxito", { header: 'Agregado' });
                        //setTimeout(location.reload.bind(location), 1500);
                    });
            });
        });
    </script>
  </body>
</html>