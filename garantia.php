<!DOCTYPE html>
<?php
  include 'config.php';
 ?>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Ubicación</title>
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
      <div class="row">
            <ul class="list-md" style="text-align: center; width: 100%; margin-top: 10px;">
            <li>
                <img src="./images/+.png">
                <br>
                <h4>Nuestros productos y servicios son de la mejor calidad y la mas alta tecnologia, 
                </h4>
                <br>
                <h4>están garantizadas para la tranquilidad de nuestros clientes</h4>
                <br>
                <span>POLITICAS DE GARANTÍA</span>
                <p>
                 <img src="./images/garantia.jpg" style="max-width: 750px;">
                </p>
            </li>
            </ul>
        </div>
      <?php
        include './includes/footer.php'
      ?>
     <footer class="section footer-classic">
        <div class="container">
          <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Todo PC</span>
        
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>