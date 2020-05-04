<?php
    include_once('Conection.php');
    
    Class Banner {
        private $conexion;

        public function __construct() {
            $this->conexion = new Conexion();
        }

        function getBanner() {
            $result = $this->conexion->getQuery("SELECT * FROM banner WHERE estatus = 0 ");
            return $result;
        }
        
        function getBannerControl() {
            $result = $this->conexion->getQuery("SELECT * FROM banner ");
            return $result;
        }

        function getBannerByID($id) {
            $result = $this->conexion->getQuery("SELECT * FROM banner WHERE id = '".$id."'");
            return $result;
        }

        function deleteBanner($id) {
            $result = $this->conexion->getQuery("DELETE  FROM banner WHERE id = '".$id."'");
            return $result;
        }

        function updateEstatus($id, $estatus) {
            $result = $this->conexion->runQuery("UPDATE banner SET estatus = '".$estatus."' WHERE id = '".$id."'");
            return $result;
        }

        function updatePosicion($id, $posicion) {
            $result = $this->conexion->runQuery("UPDATE banner SET posicion = '".$posicion."' WHERE id = '".$id."'");
            return $result;
        }

        function insertBanner($nameIMG) {
           $result = $this->conexion->runQuery("INSERT INTO banner (`nombreImg`, `estatus`)
           VALUES ('".$nameIMG."', 0);");
           return $result;
        }

        /* servicio */

        function getServicio() {
            $result = $this->conexion->getQuery("SELECT * FROM servicio WHERE estatus = 0 ");
            return $result;
        }
        
        function getServicioControl() {
            $result = $this->conexion->getQuery("SELECT * FROM servicio");
            return $result;
        }

        function insertServicio($nameIMG, $titulo) {
           $result = $this->conexion->runQuery("INSERT INTO servicio (`titulo`, `img`, `estatus`)
           VALUES ('".$titulo."', '".$nameIMG."', 0);");
           return $result;
        }

        function deleteServicio($id) {
            $result = $this->conexion->getQuery("DELETE  FROM servicio WHERE id = '".$id."'");
            return $result;
        }

        function updateServicio($id, $titulo) {
            $result = $this->conexion->runQuery("UPDATE servicio SET titulo = '".$titulo."' WHERE id = '".$id."'");
            return $result;
        }
    
        function updateEstatusServicio($id, $estatus) {
            $result = $this->conexion->runQuery("UPDATE servicio SET estatus = '".$estatus."' WHERE id = '".$id."'");
            return $result;
        }

        /* enlaces */
        function getEnlace() {
            $result = $this->conexion->getQuery("SELECT * FROM enlaces WHERE estatus = 0 ");
            return $result;
        }
        
        function getEnlaceControl() {
            $result = $this->conexion->getQuery("SELECT * FROM enlaces");
            return $result;
        }

        function insertEnlace($nameIMG, $link) {
           $result = $this->conexion->runQuery("INSERT INTO enlaces (`link`, `img`, `estatus`)
           VALUES ('".$link."', '".$nameIMG."', 0);");
           return $result;
        }

        function deleteEnlace($id) {
            $result = $this->conexion->getQuery("DELETE  FROM enlaces WHERE id = '".$id."'");
            return $result;
        }

        function updateEnlace($id, $link) {
            $result = $this->conexion->runQuery("UPDATE enlaces SET link = '".$link."' WHERE id = '".$id."'");
            return $result;
        }
    
        function updateEnlaceEstatus($id, $estatus) {
            $result = $this->conexion->runQuery("UPDATE enlaces SET estatus = '".$estatus."' WHERE id = '".$id."'");
            return $result;
        }

         /* staff */
        function getStaff() {
            $result = $this->conexion->getQuery("SELECT * FROM staff WHERE estatus = 0 ");
            return $result;
        }
        
        function getStaffControl() {
            $result = $this->conexion->getQuery("SELECT * FROM staff");
            return $result;
        }

        function insertStaff($nameIMG, $telefono, $celular, $email) {
           $result = $this->conexion->runQuery("INSERT INTO staff (`img`, `telefono`, `celular`, `email`, `estatus`)
           VALUES ('".$nameIMG."', '".$telefono."', '".$celular."', '".$email."', 0);");
           return $result;
        }

        function deleteStaff($id) {
            $result = $this->conexion->getQuery("DELETE FROM staff WHERE id = '".$id."'");
            return $result;
        }

        function updateStaff($id, $telefono, $celular, $email) {
            $result = $this->conexion->runQuery("UPDATE staff SET telefono = '".$telefono."', celular = '".$celular."', 
            email = '".$email."' WHERE id = '".$id."'");
            return $result;
        }
    
        function updateStaffEstatus($id, $estatus) {
            $result = $this->conexion->runQuery("UPDATE staff SET estatus = '".$estatus."' WHERE id = '".$id."'");
            return $result;
        }

          /* ubicacion */
        function getUbicacion() {
            $result = $this->conexion->getQuery("SELECT * FROM ubicacion WHERE estatus = 0 ");
            return $result;
        }
        
        function getUbicacionControl() {
            $result = $this->conexion->getQuery("SELECT * FROM ubicacion");
            return $result;
        }

        function insertUbicacion($imgTienda, $imgMapa, $direccion, $contacto) {
           $result = $this->conexion->runQuery("INSERT INTO ubicacion (`imgTienda`, `imgMapa`, `direccion`, `contacto` , `estatus`)
           VALUES ('".$imgTienda."', '".$imgMapa."', '".$direccion."', '".$contacto."', 0);");
           return $result;
        }

        function deleteUbicacion($id) {
            $result = $this->conexion->getQuery("DELETE FROM ubicacion WHERE id = '".$id."'");
            return $result;
        }

        function updateUbicacion($id, $direccion, $contacto) {  
            $result = $this->conexion->runQuery("UPDATE ubicacion SET direccion = '".$direccion."', contacto = '".$contacto."' WHERE id = '".$id."'");
            return $result;
        }
    
        function updateUbicacionEstatus($id, $estatus) {
            $result = $this->conexion->runQuery("UPDATE ubicacion SET estatus = '".$estatus."' WHERE id = '".$id."'");
            return $result;
        }

           /* galeria */
        function getGaleria() {
            $result = $this->conexion->getQuery("SELECT * FROM galeria WHERE estatus = 0 ");
            return $result;
        }
        
        function getGaleriaControl() {
            $result = $this->conexion->getQuery("SELECT * FROM galeria");
            return $result;
        }

        function insertGaleria($img) {
           $result = $this->conexion->runQuery("INSERT INTO galeria (`img`, `estatus`)
           VALUES ('".$img."', 0);");
           return $result;
        }

        function deleteGaleria($id) {
            $result = $this->conexion->getQuery("DELETE FROM galeria WHERE id = '".$id."'");
            return $result;
        }
    
        function updateGaleriaEstatus($id, $estatus) {
            $result = $this->conexion->runQuery("UPDATE galeria SET estatus = '".$estatus."' WHERE id = '".$id."'");
            return $result;
        }

    }