<!--Escribe una función que verifique si un número es primo o no,
 un numero primo es un numero entero mayor a que solo es divisible entre la unidad y el mismo numero *-->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion02</title>
</head>
<body>
<?php
    function nprimos($nro1){
    
            $primer = true; 
   
                for ($i = 2; $i < $nro1; $i++) {
                     if ($nro1 % $i === 0) {
                            $primer = false;
                    }
                }
            
            if ($primer){
                echo "El numero ".$nro1." es primo";
            }
            else{
                echo "El numero ".$nro1." no es primo";
            }


        }

?> 
</body>
</html>

    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <br>
        <input type="text" name="nro1" placeholder="Ingrese el numero"/><br>
        <input type="submit" name="submit" value="Enviar"/>
    </form>

<?php
    if (isset($_POST["submit"])) {
        $nro1 =  $_POST["nro1"];
        
            nprimos($nro1);
        }
?>