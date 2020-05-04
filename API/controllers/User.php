<?php
    include_once('Conection.php');
    
    Class User {
        private $conexion;

        public function __construct() {
            $this->conexion = new Conexion();
        }

        function getUsers() {
            $result = $this->conexion->getQuery("SELECT * FROM usuarios");
            return $result;
        }

        function loginUsuarios($email, $password){
            $result = $this->conexion->getQuery("SELECT id, nombre, correo FROM usuarios WHERE correo = '".$email."' AND password = '".$password."';");
            return $result;
        }
    }