<?php
   if(isset($_POST['id'])){ //si no hay parametros
        //si hay parametros
        include_once('../controllers/Banner.php');
        $banner = new Banner();
        //id de productos
        $idPro = $_POST['id'];  
        $result = $banner->deleteServicio($idPro);
        $data = array(
        'code' => 1,
        'data' => array(),  
        'message' => 'Se eliminaron correctamente.'
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