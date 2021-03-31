<?php
    class Tabung {
        private $diameter = 0;
        private $height = 0;
        private $radius = 0;


        // public function __construct($d, $h) {
        //     $this->diameter = $d;
        //     $this->radius = $this->diameter / 2;
        //     $this->height = $h;
        // }
        
        public function setDiameter($val) {
            $this->diameter = $val;
            $this->radius = $this->diameter / 2;
        }

        public function setHeight($val) {
            $this->height = $val;
        }

        public function getDiameter() {
            return $this->diameter;
        }

        public function getRadius() {
            return $this->radius;
        }

        public function getHeight() {
            return $this->height;
        }

        public function volume() {
            $volume = pi() * $this->radius * $this->radius * $this->height;
            return $volume;
        } 

        public function luas() {
            $luas = 4 * pi() * pow($this->radius, 2);
            return $luas;
        }
    }
?>