<?php
    class Libro
    {
        public $nomlib;
        public $numisbn;
        public $nomautor;
        public $editorial;


        //constructor con parámetros
        public static function setlibroInfo(String $nomlib, String $nomautor, String $editorial, int $numisbn)
        {
        }
    

    

        //método para la info
        public static function getLibroInfo()
        {
            echo $nomlib;
            echo $nomautor;
            echo $editorial;
            echo $numisbn;
        }
    }
?>