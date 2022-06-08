<?php
    require_once('app/core/ConexionDB.php');
    class Usuario extends ConexionPDO{
        // Atributos
        public $id_usuario;
        public $nombre;
        public $email;
        private $password;

        // Metodos
        public function loguear($name, $pass){
            $this->query = "SELECT U.usuario_id, U.usuario, U.email 
                            FROM usuarios AS U";
            $this->obtenerRows();
            return $this->rows;
        }

        public function guardar(){
            $this->query = "INSERT INTO usuarios (usuario, email, password) 
                            VALUES (:usuario, :email, :password)";

            $this->ejecutar( array(
                ":usuario" => $this->nombre, 
                ":email" => $this->email, 
                ":password" => $this->password
            ));
        }

        public function actualizar(){
            $this->query = "UPDATE usuarios 
                            SET usuario = :usuario, 
                                email = :email, 
                                password = :password 
                            WHERE usuario_id = :usuario_id";

            $this->ejecutar( array(
                ":usuario" => $this->nombre, 
                ":email" => $this->email, 
                ":password" => $this->password,
                ":usuario_id" => $this->id_usuario
            ));
        }

    }

?>