<?php
    namespace Upgrade;
    
    require_once "poligono.php";

    class Rectangulo extends Poligono {

        private float $length;
        private float $width;

        public function __construct($length, $width) {
            $this->length = $length;
            $this->width = $width;
        }

        public function getLength() {
            return $this->length;
        }
        public function setLength($length) {
            $this->length = $length;
        }

        public function getWidth() {
            return $this->width;
        }
        public function setWidth($width) {
            $this->width = $width;
        }

        public function getArea() {
            return $this->length * $this->width;
        }
    
    }

?>