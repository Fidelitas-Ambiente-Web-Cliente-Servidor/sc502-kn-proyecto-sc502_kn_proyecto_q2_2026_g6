<?php


session_start();



require_once(__DIR__ . "/../controllers/UserController.php");



$mensaje = "";



if(isset($_POST["ingresar"]))
{


    $correo = $_POST["correo"];


    $contrasena = $_POST["contrasena"];




    $controller = new UserController();



    $usuario = $controller->login($correo,$contrasena);



    if($usuario)
    {


        $_SESSION["usuario"] = $usuario;



        header("Location: ../dashboard.php");


        exit();



    }
    else
    {


        $mensaje = "Usuario o contraseña incorrectos";


    }



}


?>



<!DOCTYPE html>

<html lang="es">


<head>

<meta charset="UTF-8">

<title>Login ADNA</title>


<link rel="stylesheet" href="../css/style.css">


</head>


<body>



<div class="login-container">


<div class="login-box">



<h1>ADNA</h1>


<h2>Inicio de Sesión</h2>



<?php if($mensaje != ""){ ?>

<p class="error">

<?php echo $mensaje; ?>

</p>

<?php } ?>



<form method="POST">



<label>
Correo:
</label>


<input 
type="email"
name="correo"
required>



<label>
Contraseña:
</label>


<input 
type="password"
name="contrasena"
required>



<button 
type="submit"
name="ingresar">

Ingresar

</button>



</form>



</div>


</div>



</body>


</html>