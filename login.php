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
		<form  method="post" id="form">
			<div class="content-wthree1">
                <div class="form-control">
                    <label class="header">Correo electrónico<span>:</span></label>
                    <input type="email" id="email" name="email" title="Por favor ingresa tu correo electrónico" required>
                </div>
                <div class="form-control">
                    <label class="header">Contraseña <span>:</span></label>
                    <input type="password" id="pass" name="pass" title="Por favor ingresa tu contraseña" required>
                </div>
               
                <div class="form-control" align="center">
                  <select name="rol" id="rol" onchange="">
                  <option value="A">Administrador</option>
                  <option value="P">Postulante</option>
                  </select>
                </div>

                <br><br>

                 <div class="content-wthree4">
                    <div class="form-control">
                        <input type="submit" class="register" value="Aceptar" name="submit">
                    </div>
                </div>
             </div>
        </form>

<?php
    include('connection.php');
    $con = conectar();

    function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
    }

?>
<?php
if(isset($_POST['submit']))
{
    $username = $_POST['email'];
    $password = $_POST['pass'];
    $rol = $_POST['rol'];

    $sql="SELECT * FROM postulante WHERE email='$username' and contrasena='$password' and rol='$rol'";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    echo $sql;
    session_start();
    $_SESSION['id_post']=$row['id_postulante'];
    
    $count=mysqli_num_rows($result);

    if($count > 0){
        echo 'true';
        if($rol == 'A'){
            ?>
            <script>
                window.location.href="user/jobprovider/index.php";
             </script>
     <?php       
     }else{
         ?>
            <script>
                 window.location.href="user/jobseeker/index.php";
            </script>
     <?php 

        }
    }
    else{
        console_log($sql)
     ?>
            <script>
                alert('error');
                window.location.href="login.php";
             </script>
     <?php  
             
    }
}

    ?>


	</div>
</div>

<div class="copyright"  align="center" style="color: #fff;">¿No tienes una cuenta?<a id="flip" href="register.php">Regístrate ahora</a></div>

</body>
</html>



 


      




     