<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <script type="text/javascript" src="js/loading-spinner.js"></script>
    <title>Login - Todo PC</title>
</head>
<body>
 <?php
  include 'config.php';
  if(!$sesion){
 ?>
    <div id="loginContainer">
        <div class="form">
            <div class="title">
          <!--   <h2>TodoPc</h2>  -->
            </div>
            <img src="images/todopc.png" >
            <div id="contenedor-error">
                Datos erróneos. Por favor, inténtelo otra vez.
            </div>
            <div>
                <input class="inputForm" type="text" name="correo" id="correo" placeholder="Correo electronico" maxlengh="99">
            </div>
            <div>
                <input class="inputForm" type="password" name="pass" id="pass" placeholder="Contraseña" maxlengh="99">
            </div>
            <div>
                <button class="button" type="button" id="ok">Aceptar</button>
            </div>
            <div>
                <!-- <a href="">Registrarme</a> -->
               <!--  <a href="">¿Olvidaste tu contraseña?</a> -->
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/login.js"></script>
    <?php
  }else{
     header("Location: http://localhost/TODOPC/");
  }
    ?>
</body>
</html>