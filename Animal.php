<?php
/**
 * Clase Animal
 * @author: José Gaspar Sámchez Garcia
 */
    class Animal{
        protected $nombre;
        protected $especie;
        protected $grupo;

        public function __construct($n,$e,$g)
        {
            $this->nombre=$n;
            $this->especie=$e;
            $this->grupo=$g;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function getEspecie()
        {
            return $this->especie;
        }

        public function getGrupo()
        {
            return $this->grupo;
        }

        public function setNombre($n)
        {
            $this->nombre=$n;
        }

        public function setEspecie($e)
        {
            $this->especie=$e;
        }

        public function setGrupo($g)
        {
            $this->grupo=$g;
        }

        public function sonido()
        {
            return "Soy un Amimal!!!";
        }

        public function mostrarInfo()
        {
            $info="<h1>Información de un animal</h1>";
            $info.="<br/>Nombre: ".$this->nombre;
            $info.="<br/>Especie: ".$this->especie;
            $info.="<br/>Grupo: ".$this->grupo;

            return $info;
        }
    }
?>