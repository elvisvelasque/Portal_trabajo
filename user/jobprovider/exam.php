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
        [type="checkbox"]
        {
            vertical-align:middle;
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
<?php $type = $_GET["type"];
      $id = $_GET["id"];?>
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
                                    <form enctype="multipart/form-data" id="formuploadajax2" method="post">
                                        <div class="container" align="center">
                                            <input type="text" name="count" id="count" style="display: none">
                                            <input type="text" name="type" id="type" value="<?php echo $type?>" style="display: none">
                                            <input type="text" name="id" id="id" value="<?php echo $id?>" style="display: none">

                                            <h1><?php if($type == 1){
                                                        echo "EXAMEN DE CONOCIMIENTOS";
                                                      }else{
                                                        echo "EXAMEN PSICOLÓGICO";
                                                      }
                                                ?></h1>
                                            <div class="col-lg-6 col-lg-offset-3" id="preguntas" align="center">
                                                <button type="button" class="btn btn-success" onclick="createQuestion()">Agregar Pregunta</button>
                                            </div>

                                        </div>
                                        <div class="container" align="center">
                                            <br>
                                            <button type="submit" class="btn btn-danger">Guardar</button>
                                        </div>
                                    </form>
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

<script>
    var contador = 0;
    document.getElementById("count").value = contador;
    function createQuestion() {
        contador ++;
        document.getElementById("count").value = contador;
        var newElem0 = document.createElement("BR");
        var newElem = document.createElement("BR");
        var newElem1 = document.createElement("BR");
        var newElem2 = document.createElement("BR");
        var newElem3 = document.createElement("BR");
        var newElem4 = document.createElement("BR");
        var label = document.createElement("LABEL");
        label.style.fontSize = "25"
        var labelt = document.createTextNode("Pregunta "+contador+": ");
        label.appendChild(labelt);
        var container = document.getElementById("preguntas")
        var input = document.createElement("input");
        input.type = "text";
        input.name = "input"+contador;
        input.id = "input"+contador;
        input.className = "form-control";
        input.required = true;
        container.appendChild(newElem0);
        container.appendChild(label);
        container.appendChild(input);
        container.appendChild(newElem);

        var option1 = document.createElement("LABEL");
        var t1 = document.createTextNode("Opción 1: ");
        option1.appendChild(t1);
        var inputOption1 = document.createElement("input");
        inputOption1.type = "text";
        inputOption1.style.color = "black";
        inputOption1.name = "input"+contador+"o1";
        inputOption1.id = "input"+contador+"o1";
        inputOption1.required = true;

        option1.appendChild(inputOption1);

        var option2 = document.createElement("LABEL");
        var t2 = document.createTextNode("Opción 2: ");
        option2.appendChild(t2);
        var inputOption2 = document.createElement("input");
        inputOption2.type = "text";
        inputOption2.style.color = "black";
        inputOption2.name = "input"+contador+"o2";
        inputOption2.id = "input"+contador+"o2";
        inputOption2.required = true;

        option2.appendChild(inputOption2);

        var option3 = document.createElement("LABEL");
        var t3 = document.createTextNode("Opción 3: ");
        option3.appendChild(t3);
        var inputOption3 = document.createElement("input");
        inputOption3.type = "text";
        inputOption3.style.color = "black";
        inputOption3.name = "input"+contador+"o3";
        inputOption3.id = "input"+contador+"o3";
        inputOption3.required = true;

        option3.appendChild(inputOption3);

        var option4 = document.createElement("LABEL");
        var t4 = document.createTextNode("Opción 4: ");
        option4.appendChild(t4);
        var inputOption4 = document.createElement("input");
        inputOption4.type = "text";
        inputOption4.style.color = "black";
        inputOption4.name = "input"+contador+"o4";
        inputOption4.id = "input"+contador+"o4";
        inputOption4.required = true;

        option4.appendChild(inputOption4);

        var option5 = document.createElement("LABEL");
        var t5 = document.createTextNode("Respuesta: ");
        option5.appendChild(t5);
        var inputOption5 = document.createElement("select");
        inputOption5.type = "text";
        inputOption5.style.color = "black";
        inputOption5.name = "respuesta"+contador;
        inputOption5.id = "respuesta"+contador;
        inputOption5.required = true;

        var optionSelect1 = option1

        option5.appendChild(inputOption5);
        container.appendChild(option1);
        container.appendChild(newElem1);
        container.appendChild(option2);
        container.appendChild(newElem2);
        container.appendChild(option3);
        container.appendChild(newElem3);
        container.appendChild(option4);
        container.appendChild(newElem4);
        container.appendChild(option5);
        $(function(){
            $("#formuploadajax2").on("submit", function(e){
                e.preventDefault();
                var f = $(this);
                var formData = new FormData(document.getElementById("formuploadajax2"));
                formData.append("dato", "valor");
                $.ajax({
                    url: "createExam.php",
                    type: "post",
                    dataType: "html",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false
                })
                .done(function(res){
                    console.log(res);
                    $.jGrowl("Examen creado con éxito", { header: 'Agregado' });
                    setTimeout(location.reload.bind(location), 2500);
                });
            });
        });

    }

</script>