<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosas PHP</title>
</head>
<body>
    <h1>
        <?php 
        $num1 = 6;
        $num2 = 4;
        $res = $num1 + $num2;
        echo 'Hola a todos: ', $res;
        
        ?>
    </h1>

    <h2>
        <?= 'Desde PHP' ?>
    </h2>

    <?php 
        /*
        UN ÇCOMENTARIO
        */
        $a = 10;
        $b = 5;
        // Una linea de comentario
        echo '<a href="#">', $a, '</a>'; 
        echo '<p>', $b, '</p>'; # el tercer comentario

        define('PI',3.1416);
        echo '
        Esta es una constante: ', PI, '<br>
        PI está definido: ';

        echo defined('PI');
        echo '<br> Existe la constante G: ';
        echo defined('G');

        const G = 6.7;
        echo '<br>', 'Ahora sí, el valor de G es: ', G;
        echo '<br> Existe la constante G: ';
        echo defined('G');

        //'const' definirá el valor durante la compilación y 'define' lo hará durante la ejecución
        // Ejemplo sobre el uso de define (permitido)
        if(true){
            define('E', 2.7);
            echo '<br>', E;
        }
        echo '<br>', E;
        echo '<br><h5>EL PROGRAMA DEBE CONTINUAR</h5>';

        // Ejemplo sobre el uso de define (no permitido)
        if(true){
            define('E', 3);
            echo '<br>', E;
        }
        echo '<br>', E;
        echo '<br><h5>EL PROGRAMA DEBE CONTINUAR</h5>';

        //Podemos crear nombres de constantes de manera dinámica mediante 'define'
        $mi_nombre_de_constante = 'GRAVEDAD';
        define($mi_nombre_de_constante, 9.81);
        echo '<br>La gravedad vale: ', GRAVEDAD;

        define('BOLIVIA_'.$mi_nombre_de_constante, 9.4);
        echo '<br>La gravedad vale: ', BOLIVIA_GRAVEDAD;

        echo PHP_VERSION;
        echo '<br> Flotante mínimo: ', PHP_FLOAT_MIN;
        echo '<br> Flotante máximo: ', PHP_FLOAT_MAX;

        echo '<br>Valor de linea (constante magica): ', __LINE__; 

        echo '<br>Valor de linea (constante magica): ', __LINE__; 

        echo '<br>Valor de archivo (constante magica): ', __FILE__; 


        // Hablemos sobre las variables variables
        $nom_var = 'altura';
        $$nom_var = 3500;
        echo '<table border=1><tr><td> ', $altura, '</td></tr></table>';
        
        if(true){

            $var = 'cajas';
            $$var = 40;
        }

        echo '<br>Cantidad de cajas: ', $cajas;

        /////$nom_var = 'abc';
        //Mostrando variables variable
        echo '<br>Veamos: ',$nom_var, ' ', $$nom_var;
        echo "<br>Veamos: $nom_var {$$nom_var}";
        echo "<br>Veamos: $nom_var ${$nom_var}";
    # fin ?>
</body>
</html>