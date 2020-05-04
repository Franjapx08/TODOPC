<!DOCTYPE html>
 <?php
  include 'config.php';
 ?>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Equipo</title>
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
      <!--Base typography -->
        <div class="container" id="datos">
            
        </div>
       <!--Contacts-->
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
    <script src="js/staff.js"></script>
  </body>
</html>