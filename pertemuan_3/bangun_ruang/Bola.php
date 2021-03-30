<?php
    class Bola {
        private $radius;
        public function setRadius($rad) {
            $this->radius = $rad;
        }

        public function getRadius() {
            return $this->radius;
        }

        public function volume() {
            $volume = 4/3 * pi() * pow($this->radius, 3);
            return $volume;
        } 

        public function luas() {
            $luas = 4 * pi() * pow($this->radius, 2);
            return $luas;
        }
    }

?>