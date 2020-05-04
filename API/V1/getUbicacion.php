<?php
        include_once('../controllers/Banner.php');
        $Banner = new Banner();
        $result = $Banner->getUbicacion();
        if(sizeof($result)!=0){
            $data = array(
                'code' => 1,
                'data' => $result,
                'message' => 'Datos con éxito'
            );
        }else{ 
            $data = array(
                'code' => -1,
                'message' => 'Error al encontrar resultados'
                );
        }
   
echo(json_encode($data));