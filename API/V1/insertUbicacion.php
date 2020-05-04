
<?php
if(isset($_FILES['imgTienda']) && isset($_FILES['imgMapa'])){
    include_once('../controllers/Banner.php');
    $banner = new Banner();
    $contacto = $_POST['celular'];
    $direccion = $_POST['direccion'];
    $directorio = "../../imgUbicacion/";
    $tipo1 = $_FILES['imgTienda']['type']; //tipo de archivo
    $tipo2 = $_FILES['imgMapa']['type']; //tipo de archivo
    if($tipo1 == "image/jpg" || $tipo1 == "image/png" || $tipo1 == "image/jpeg" || $tipo2 == "image/jpg" || $tipo2 == "image/png" || $tipo2 == "image/jpeg"  ){ //si es tipo2 IMG
    $tamano = $_FILES['imgTienda']['size']; //taamño de imagen
    $tamano2 = $_FILES['imgMapa']['size']; //taamño de imagen
        if($tamano  < 1000000 && $tamano2  < 1000000 ){ //limitar tamaño de IMG
            $nameIMG = $_FILES['imgTienda']['name'];
            $nameIMG2 = $_FILES['imgMapa']['name'];
            $newEncrypName1 = sha1(date('l jS \of F Y h:i:s A')).$nameIMG;
            $newEncrypName2 = sha1(date('l jS \of F Y h:i:s A')).$nameIMG2;
            move_uploaded_file($_FILES['imgTienda']['tmp_name'],$directorio.$newEncrypName1); //mover a carpeta en el servidor
            move_uploaded_file($_FILES['imgMapa']['tmp_name'],$directorio.$newEncrypName2); //mover a carpeta en el servidor
            $r = $banner->insertUbicacion($newEncrypName1, $newEncrypName2,  $direccion, $contacto);
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

