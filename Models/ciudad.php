<?php

    class Ciudad{

        // Foreign keys
        private $idPais;
        private $idEstado;

        private $idCiudad;
        private $nombreCiudad;
        
        private $db;

        public function __construct(){
            
            $this->db = DataBase::connect();
        }

        
        public function getIdPais(){

            return $this->idPais;
        }

        public function setIdPais($idPais){

            $this->idPais = $idPais;
        }


        public function getIdEstado(){

            return $this->idEstado;
        }

        public function setIdEstado($idEstado){
                
            $this->idEstado = $idEstado;
        }
        

        public function getIdCiudad(){

            return $this->idCiudad;
        }

        public function setIdCiudad($idCiudad){
                
            $this->idCiudad = $idCiudad;
        }


        public function getNombreCiudad(){
                
            return $this->nombreCiudad;
        }

        public function setNombreCiudad($nombreCiudad){
                
            $this->nombreCiudad = $nombreCiudad;
        }
    }
?>