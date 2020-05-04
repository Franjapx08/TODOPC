<?php
   if(isset($_POST['id']) && isset($_POST['email'])){ //si no hay parametros
        //si hay parametros
        include_once('../controllers/Banner.php');
        $banner = new Banner();
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $celular = $_POST['celular'];
        $idPro = $_POST['id'];
        $result = $banner->updateStaff($idPro, $telefono, $celular, $email);
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