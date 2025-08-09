<?php
    $name="Erick"; 
    /*las variables se inician con un signo de dolar, no permite ciertos simbolos
    ni numeros, ademas se recomienda usar camelCase (cadaPalabraEmpiezaEnMayuscula)
    en vez de usar cada_palabra_en_mayuscula*/
    $isDev=true;
    $edad=24;

    /*
    var_dump($name); //var_dump muestra informacion sobre las variables, tambien funciona
    //con echo gettype o con is_string y en este caso si es cadena te devuelve true
    var_dump($isDev);
    var_dump($edad);
    */
    $mensaje = "Hola " . $name .  " con una edad de " . $edad;
?>
<h1>
<?=//forma breve de echo 
$mensaje ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }
    body {
        display: grid;
        place-content: center;
    }
</style>
