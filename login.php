<!doctype html>
<html lang="en">
<head>
<title>Login form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Employee Feedback Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!-- /font files -->
<!-- css files -->
<link href="css/style1.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
<script src="js/jquery.min.js"></script>
<style> 
#panel, #flip {
    padding: 10px;
    text-align: center;
    color: yellow;
       
}

#panel {
    padding: 10px;
    display: none;
}
u:hover {
    color: orange;
}
    .register {
        margin-left: 38%;
        width: 120px;
    }
    .content-w3ls{
        margin-top: -50px !important;
    }

</style>
</head>
<body>

<h2 class="header-w3ls" align="center" ">INGRESAR</h2>
<p class="copyright"><a href="index.html">INICIO</a></p>
   
<div class="content-w3ls">
	<div class="form-w3ls">
		<form action="user/jobprovider/index.php" method="post" id="form">
			<div class="content-wthree1">
                <div class="form-control">
                    <label class="header">Correo electrónico<span>:</span></label>
                    <input type="email" id="email" name="email" placeholder="" title="Por favor ingresa tu correo electrónico" required="">
                </div>
                <div class="form-control">
                    <label class="header">Contraseña <span>:</span></label>
                    <input type="password" id="name" name="pass" placeholder="" title="Por favor ingresa tu contraseña" required="">
                </div>
                <div class="content-wthree4">
                    <div class="form-control">
                        <input type="submit" class="register" value="INGRESAR" name="login">
                    </div>
                </div>
            </div>
		</form>
        <br>
        <br>
        <br>
        <div align="center">
            <select name="rol" id="rol" onchange="select()">
                <option value="1">Administrador</option>
                <option value="2">Postulante</option>
            </select>
        </div>
	</div>
</div>

<div class="copyright"  align="center" style="color: #fff;">¿No tienes una cuenta?<a id="flip" href="register.php">Regístrate ahora</a></div>

</body>
</html>
<script type="application/javascript">
    function select() {
        console.log(document.getElementById("rol").value);
        if(document.getElementById("rol").value === 1){
            document.getElementById("form").action = "user/jobprovider/index.php";
        }
        else
            document.getElementById("form").action = "user/jobseeker/index.php";
    }
</script>
