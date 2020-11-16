<?php
    namespace Upgrade;
    
    require_once "poligono.php";

    class Circulo extends Poligono {
        private float $radius;

        public function __construct($radius) {
            $this->radius = $radius;
        }

        public function getRadius() {
            return $this->radius;
        }
        public function setRadius($radius) {
            $this->radius = $radius;
        }

        public function getArea() {
            return pi() * pow($this->radius, 2);
        }
    }
?>