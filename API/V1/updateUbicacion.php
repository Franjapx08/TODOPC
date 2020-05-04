<?php
   if(isset($_POST['id']) && isset($_POST['contacto'])){ //si no hay parametros
        //si hay parametros
        include_once('../controllers/Banner.php');
        $banner = new Banner();
        $celular = $_POST['contacto'];
        $idPro = $_POST['id'];
        $direccion = $_POST['direccion'];
        $result = $banner->updateUbicacion($idPro, $direccion, $celular);
        $data = array(
        'code' => 1,
        'data' => array(),  
        'message' => 'Se modifico correctamente.'
        );
   //no hay parametros
   }else{
   $data = array(
                'code' => 6,
                'data' => array(),  
                'message' => 'Error al enviar datos.'
            );
   } 
echo json_encode($data, JSON_UNESCAPED_UNICODE);