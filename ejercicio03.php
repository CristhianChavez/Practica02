<!--5. Escriba una clase Calculadora que acepte dos valores como argumentos, y pueda sumarlos, restarlos,
 multiplicarlos, o dividirlos según requerimiento.• Por ejemplo:o
 $mycalc = new MiCalculadora(12, 6);o echo $mycalc- >sumar(); // Muestra 18o echo $mycalc- >multiplicar(); // Muestra 72-->
 <?php
include_once "operaciones.php";
$mycalc = new Operaciones(12, 6); 
echo $mycalc->suma(); 
echo $mycalc->multiplicacion();
?>