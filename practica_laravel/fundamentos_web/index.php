<?php
    /*las variables, las cuales cambian cuando quieres de forma sencilla,
    se inician con un signo de dolar, no permite ciertos simbolos
    ni numeros, ademas se recomienda usar camelCase (cadaPalabraEmpiezaEnMayuscula)
    en vez de usar cada_palabra_en_mayuscula*/
    $name="Erick"; 
    $isDev=false;
    $edad=24;

    $isOld= $edad > 18;

    /*ternarias es otra forma mas sencilla de colocar if 
    $mostrarCondicion = $isOld
        ? 'Eres viej, lo siento'
        : 'Eres joven, enhorabuena';

    */
    
    //Si se necesita de información precisa se usa el match, 
    //el valor que se genera dentro pasa a la variable
    $mostrarCondicion = match (true) {
    $edad<2 => "Eres un bebé, $name",
    $edad<18 => "Eres un adolescente, $name",
    $edad<30 => "Eres un adulto joven, $name",
    $edad<50 => "Eres un adulto, $name",
    default => "Valimos, $name",
    };
        
    /*
    Constantes
    */
    define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg');
    //constantes locales, no necesitan el simbolo de $, se pueden colocar una sola vez
    //y no funcionan en tiempo de ejecucion, ya para eso tienes las variables
    const NOMBRE = "Erick";
    /*
    var_dump($name); //var_dump muestra informacion sobre las variables, tambien funciona
    //con echo gettype o con is_string y en este caso si es cadena te devuelve true
    var_dump($isDev);
    var_dump($edad);
    */
    $mensaje = "Hola " . $name .  " con una edad de " . $edad;

    /*arrays pueden contener int, string, etc
    */
    $mejoresLenguajes=["PHP", "Javascript", "Python"];
    $mejoresLenguajes[3]="Java"; //agrega java al final del array mejoresLenguajes
    $mejoresLenguajes[]= "Typescript";
?>
<img src="<?=LOGO_URL ?>" alt="PHP Logo" width="200">

<?php //Iterando un array?>

<ul>
    <?php foreach ($mejoresLenguajes as $key => $lenguajes): ?>
        <li><?= $key . " " . $lenguajes?></li>
    <?php endforeach; ?>
</ul>

<h1>
<?=//forma breve de echo 
$mostrarCondicion ?>
</h1>
<h1><?=
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
