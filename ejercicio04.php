<!--Cree una clase llamada Libro, que deberá incluir cuatro (04) variables:
 nombre de libro, número de ISBN, nombre de autor y editor.
  La clase deberá contar con un constructor inicialice las cuatro variables, 
  y un método llamado getLibroInfo que devuelva la descripción del Libro como una cadena
   (la descripción debe incluir toda la información sobre el libro). Escriba una aplicación de prueba 
   llamada LibroTest y cree una instancia para demostrar las capacidades de la clase Libro (deberá hacer uso del método getLibroInfo).-->
<!--Librotest-->
<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">

</form>
<?php

    require_once "libro.php";

    Libro::setlibtoInfo("ftsgbcehc","ftvghebfvr","fsbchdv",34);
    Libro:: getLibroInfo();



?>