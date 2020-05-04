<!DOCTYPE html>
<?php
  include 'config.php';
 ?>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contacto</title>
		<?php
        include './includes/meta.php';
    ?>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>
    <div class="page">
       <!--Header-->
       <?php
        include 'includes/header.php';
        ?>
        <div class="container" style="margin-top: 70px; margin-bottom: 100px;">
					<div class="form-group">
						<label for="email">Correo electrónico</label>
						<input type="email" class="form-control" id="email" aria-describedby="emailHelp">
					</div>
						<div class="form-group">
						<label for="nombre">Nombre completo</label>
						<input type="email" class="form-control" id="nombre" aria-describedby="emailHelp">
					</div>
						<div class="form-group">
						<label for="asunto">Asunto</label>
					 <textarea class="form-control" id="asunto" ></textarea>
					</div>
					<button type="button" id="enviar" style="background: green;" class="btn btn-success">Enviar</button>
        </div>
            
      <?php
        include './includes/footer.php'
      ?>
       <footer class="section footer-classic">
        <div class="container">
          <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Todo PC</span>
          <!-- <span>.&nbsp;</span><a href="#">Politica privacidad</a>. -->
           <!-- Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com/">Rogelio Amador Fernandez</a></p> -->
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>