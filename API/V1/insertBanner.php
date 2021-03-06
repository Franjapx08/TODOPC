
<?php
    if(isset($_FILES['img'])){
        include_once('../controllers/Banner.php');
        $banner = new Banner();
        //var_dump($_FILES['img']);
        $directorio = "../../imgBanner/";
        $tipo = $_FILES['img']['type']; //tipo de archivo
        if($tipo == "image/jpg" || $tipo == "image/png" || $tipo == "image/jpeg" ){ //si es tipo IMG
        $tamano = $_FILES['img']['size']; //taamño de imagen
            if($tamano  < 1000000 ){ //limitar tamaño de IMG
                $nameIMG = $_FILES['img']['name'];
                $newEncrypName = sha1(date('l jS \of F Y h:i:s A')).$nameIMG;
                move_uploaded_file($_FILES['img']['tmp_name'],$directorio.$newEncrypName); //mover a carpeta en el servidor
                $r = $banner->insertBanner($newEncrypName);
                $data = array(
                    'code' => 1,
                    'message' => 'Banner creado con éxito'
                );      
            }else{
                //IMG muy grande
                $data = array(
                'code' => 2,
                'data' => array(),  
                'message' => 'Tamaño de imagen demasaido grande'
                );
            }
        }else{
            //no es IMAGEN
            $data = array(
            'code' => 2,
            'data' => array(),  
            'message' => 'Tipo de archivo no admitido'
            );
        }
   }else{
        $data = array(
            'code' => 2,
            'message' => 'Falanta parametros error'
          ); 
    }
echo(json_encode($data));

