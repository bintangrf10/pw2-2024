<?php

    class Lingkaran {
        private $jari;
        const PHI = 3.14;

        function __construct($r)
        {
            $this->jari = $r;
        }

        function getLuas() {
            return self::PHI * $this->jari;
        }    
    
        function getKel() {
            return self::PHI * $this->jari;
        }
    }
?>