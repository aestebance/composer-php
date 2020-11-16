<?php
    namespace Upgrade;
    
    require_once "poligono.php";

    class Cuadrado extends Poligono {
        
        private float $side;

        public function __construct(float $side) {
            $this->side = $side;
        }

        public function setSide(float $side) {
            $this->side = $side;
        }

        public function getSide() {
            return $this->side;
        }

        public function getArea() {
            return pow($this->side,2);
        }
    }

?>