 <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="170px" data-xl-stick-up-offset="170px" data-xxl-stick-up-offset="170px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            
            <div class="rd-navbar-aside-outer" style="background: black; max-heigth: 50px;">
              <div class="rd-navbar-aside">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/todopc.png" alt="" width="170" height="51"/></a>
                  </div>
                </div>
                <div class="rd-navbar-info rd-navbar-collapse">
                  <article class="info-modern">
                      <ul style="list-style-type: none; margin: 0; padding: 0; overflow: hidden;">
                        <li style="float: left;"><i class="fas fa-phone" style="display: block; color: white; text-align: center; padding: 16px; font-size: 20px;"></i></li>
                        <li style="float: left;"><a style="display: block; color: white; text-align: center; padding: 16px; text-decoration: none;">612 151 5981</a></li>
                        <li style="float: left;"><a href="https://www.facebook.com/profile.php?id=100009700682194"><i class="fa fa-facebook" style="color: white; text-align: center; padding: 16px; font-size: 20px;"></i></a></li>
                      </ul>
                  </article>
                  <!-- <img src="images/3.png" width="200" height="51"> -->
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Inicio</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">Nosotros</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="servicios.php">Servicio</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="staff.php">Staff</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Ubicación</a>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacto.php">Contacto</a></li>
                    <?php
                      if($sesion){
                        ?>
                        <li class="rd-nav-item"><a class="rd-nav-link"  href="mypc.php">Administrador</a>
                      <?php
                      }              
                    ?>
                    <?php
                      if($sesion){
                        ?>
                        <li class="rd-nav-item"><a class="rd-nav-link"  href="logout.php">Cerrar sesión</a>
                      <?php
                      }              
                    ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>