<?php
      if(isset($_POST['correo']) && isset($_POST['pass'])){
        include_once('../controllers/User.php');
        $usuario = new User();
        $result = $usuario->loginUsuarios($_POST['correo'], sha1($_POST['pass']));
        if(sizeof($result)!=0){   
            session_start();
            $_SESSION["user"] = $result[0];
            $data = array(
                'code' => 1,
                'data' => $result[0],
                'message' => 'Usuario logeado con éxito'
            );
        }else{ 
            $data = array(
                'code' => -1,
                'message' => 'Error al encontrar el usuario'
                );
        }
    }else {
        $data = array(
            'code' => -1,
            'data' => array(),
            'message' => 'Error al enviar datos.'
        );
    }
echo(json_encode($data));