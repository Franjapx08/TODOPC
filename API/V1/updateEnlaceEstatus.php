<?php
   if(isset($_POST['id']) && isset($_POST['estatus'])){ //si no hay parametros
		//si hay parametros
		include_once('../controllers/Banner.php');
		$banner = new Banner();
		$result = $banner->updateEnlaceEstatus($_POST['id'], $_POST['estatus']);
		$data = array(
			'code' => 1,  
			'message' => 'Se modificaron correctamente.'
		);
   }else{
    	$data = array(
      	'code' => 6, 
        'message' => 'Error al enviar datos.'
      );
   }
echo json_encode($data, JSON_UNESCAPED_UNICODE);