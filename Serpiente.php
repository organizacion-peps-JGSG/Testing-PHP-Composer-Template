
<?php
    /**
     * Clase Serpiente que hereda de Animal
     * @author José Gaspar Sánchez García
     */

     include 'Animal.php';

    class Serpiente extends Animal{
        protected $longitud;

        /**
         * Constructor
         */
        public function __construct($_nombre)
        {
            parent::__construct($_nombre,"Serpiente","Reptil");
            $this->longitud=0;
        }

        public function setLongitud($l)
        {
            $this->longitud=$l;
        }

        public function getLongitud()
        {
            return $this->longitud;
        }
        /**
         * @override Animal::sonido()
         */
        public function sonido()
        {
            return "Sisssss!";
        }
    }
?>