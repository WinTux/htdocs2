<?php declare(strict_types = 1) ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos</title>
</head>
<body>
    <?php
    
        /*
        TIPOS DE DATOS EN PHP

        3 grupos:
        - Escalares: int, bool, float, string 
        - Compuestos: arreglos, objetos, callable, iterable
        - Especiales
        */

        // Grupo 1
        $edad = 22;
        $soltera = true;
        $promedio = 89.7;
        $nombre = 'Samantha';
        echo $edad, '<br>';
        echo $soltera, '<br>';
        echo $promedio, '<br>';
        echo $nombre, '<br>';

        echo gettype($edad), '<br>';
        echo gettype($soltera), '<br>';
        echo gettype($promedio), '<br>';
        echo gettype($nombre), '<br>';

        var_dump($edad);
        echo '<br>';
        var_dump($soltera);
        echo '<br>';
        var_dump($promedio);
        echo '<br>';
        var_dump($nombre);
        echo '<br>';

        // Grupo 2
        $arreglo = [1, 2, 'A', 'Z', true];

        echo '<br>', $arreglo, '<br> Mostrando correctamente: ';

        print_r($arreglo);
        echo '<br>';
        var_dump(67.81);

        function suma(int $n1, float $n2){
            var_dump($n1, $n2);
            return $n1 + $n2;
        }

        echo '<br>', suma(4,5),'<br>';


        $resultado = suma(12,12.6);
        echo '<br>';
        var_dump($resultado);


        // Casteo

        $numero_texto = '10';
        $num = (int)$numero_texto;
        var_dump($num);
        var_dump($numero_texto);

        //booleanos
        $en_tramite = false;
        $casada = 'texto'; // 0, -0, 0.0, -0.0: false... '', '0'... []... null
        $disponible = FaLse;

        if($casada){
            echo '<br><h3>En hora buena</h3>';
        }else{
            echo '<br><h3>Genial</h3>';
        }

        echo '<br>Booleano casteado: ',(string)$casada , '<br>';

        var_dump(is_bool($casada));
        /*
        Rescatar el valor asociado a la variable $casada: '0'
        Determinar si es, o no es, booleano el elemento dado: false
        Mostrar el tipo de dato, y el valor, de un elemento dado: bool(false)
        */

        // Numeros hexadecimales
        $num1 = 0x2A;
        echo $num1;
        $num1 = 055;
        echo $num1;

        $num1 = 0b11;
        echo $num1;

        echo '<br>Valor máximo de un entero: ', PHP_INT_MAX;

        $un_num = PHP_INT_MAX;
        echo '<br>', $un_num;
        var_dump($un_num);
        $un_num = PHP_INT_MAX + 1;
        echo '<br>', $un_num;
        var_dump($un_num);

        $num1 = (int) false;
        $num1 = (integer) true;
        var_dump($num1);

        $peso = 50.9999999;
        $peso_entero = (int)$peso;

        $numero = (int)'-123.5';// no funciona le guión bajo (visto más adelante)
        echo '<br>Valor casteado: ', $numero;

        $numero = (int)'502pepe perales80';
        echo '<br>Valor casteado: ', $numero;

        $numero = (int)'Samantha6666 Molina7777';
        echo '<br>Valor casteado: ', $numero;

        $numero = (int)null;
        echo '<br>Valor casteado: ', $numero;
        if(is_int($numero)){
            echo 'Efectivamente, es un entero.';
        }else{
            echo 'Lamentablemente, no es un entero.';
        }

        $numero = 65_165_164_546;
        $numero2 = 1;
        echo '<br>La resta es: ', ($numero - $numero2);
        if(is_int($numero)){
            echo 'Efectivamente, es un entero.';
        }else{
            echo 'Lamentablemente, no es un entero.';
        }

        /* Flotantes */
        echo '<h3>FLOTANTES</h3>';
        $x = 31.5;
        echo '<br>',$x;

        $x = 13.5e-3;
        echo '<br>';
        var_dump($x);
        echo '<br>', $x;

        echo '<br>', PHP_FLOAT_MAX;
        echo '<br>', PHP_FLOAT_MIN;

        $x = floor((0.1 + 0.7) * 10); // 8 ... sino: 7.9999999
        echo '<br> Contemplad, el ocho: ',$x;

        $x = ceil((0.1 + 0.2) * 10); //3 ... sino: 3.0000000001
        echo '<br> Contemplad, el tres: ',$x;

        $num1 = 0.34;
        $num2 = 1 - 0.66;
        echo '<br>';
        var_dump($num1, $num2);

        if($num1 == $num2)
            echo '<br>Son iguales';
        else 
            echo '<br>NO son iguales';
        $x = log(-1);
        echo '<br>', $x;
        var_dump($x);
        echo '<br>Es NaN: ', is_nan($x);
        $x = PHP_FLOAT_MAX * 2;
        echo '<br>', $x;
        var_dump($x);
        echo '<br>Es infinito: ', is_infinite($x);

        // casteo de flotantes
        echo '<h3>Casteo de flotantes</h3>';
        $nn = 4;
        var_dump((float)$nn);

        var_dump(floatval($nn));

        $numero = (float)'-123.5';// no funciona le guión bajo (visto más adelante)
        echo '<br>Valor casteado: ', $numero;

        $numero = (float)'502pepe perales80';
        echo '<br>Valor casteado: ', $numero;

        $numero = (float)'Samantha6666 Molina7777';
        echo '<br>Valor casteado: ', $numero;

        // String
        $cadena1 = 'asdfg';
        $cadena2 = "ñlkjh";
        $cadena1 = "$cadena1 ñlkjh";
        echo '<br>', $cadena1[1]; // s

        echo $cadena1[-2];

        $cadena2[2] = 'X';
        $cadena2[1] = 'Z';
        echo '<br>', $cadena2;

        var_dump($cadena2);
        $cadena2[17] = 'Y';
        echo '<br>';
        var_dump($cadena2);


        /* HEREDOC NOWDOC */

        $un_texto = <<<MENSAJE
        Este es un texto que $cadena1
        tiene  saltos de línea $cadena2
        pero que posiblente no se muestren bien.
        MENSAJE;

        echo '<br>', $un_texto;

        echo '<br>';

        echo nl2br($un_texto);

        $un_texto_2 = <<<'MENSAJE'
        Este es un texto que
        tiene  saltos de línea
        pero que posiblente no se muestren bien.
        MENSAJE;

        echo nl2br($un_texto_2);

        // NULL
        $xx = null;
        $xx = NULL;
        echo '<br>';
        var_dump($xx);
        var_dump(is_null($xx));

        var_dump($xx === null);

        var_dump($super_variable_colosal_magestic_pro_and_knucles);

        $xx = 89;echo '<br> Valor antes de unset: ';
        var_dump($xx);
        unset($xx);
        echo '<br> Valor despues de unset: ';
        var_dump($xx);

        $xx = null;
        echo '<br> Valor despues de asignación a null: ';
        var_dump($xx);
        echo '<br> Valor despues de casteo a string: ';
        var_dump((string)$xx);
        echo '<br> Valor despues de casteo a int: ';
        var_dump((int)$xx);
        echo '<br> Valor despues de casteo a bool: ';
        var_dump((bool)$xx);
        echo '<br> Valor despues de casteo a array: ';
        var_dump((array)$xx);

        // Arreglos
        $nombres = array('Pepe','Ana','Sofía');
        $nombres = ['Pepe','Ana','Sofía'];
        echo '<br>', $nombres[1];
        /*
        
        0 -> Pepe   (0,Pepe)
        1 -> Ana    (1,Ana)
        2 -> Sofía  (2,Sofía)

        */
        echo '<br>Retorna nulo, si el índice no existe: ', $nombres[8];

        if(isset($nombres[8])) echo '<br>Existe el elemento en 8.';
        else echo '<br>No existe tal índice.';

        $nombres[0] = 'Samantha';
        echo '<br>', $nombres[0];
        echo '<br>', var_dump($nombres);
        echo '<pre>';
        print_r($nombres);
        echo '<pre>';
        echo '<br>', count($nombres);

        $nombres[] = 'Sara';
        echo '<pre>';
        print_r($nombres);
        echo '<pre>';
        echo '<br>', count($nombres);

        array_push($nombres, 'Martha', 'Lizeth','Mónica');
        echo '<pre>';
        print_r($nombres);
        echo '<pre>';
        echo '<br>', count($nombres);

        $profesiones = [
            'Pepe' => 'Informático',
            'Ana' => 'Ing. Telecomunicaciones',
            'Sofía' => 'Ing. de Sistemas'
        ];
        echo '<br>', $profesiones['Ana'];
        echo '<pre>';
        print_r($profesiones);
        echo '<pre>';
        echo '<br>', count($profesiones);
        echo '<br>Elemento en 2: ', $profesiones[2];

        $nom = 'Sofía';
        echo '<br>', $profesiones[$nom];

        $profesiones['Samantha'] = 'Admin. de empresas';
        echo '<pre>';
        print_r($profesiones);
        echo '<pre>';
        echo '<br>', count($profesiones);

        $nom = 'Carlos';
        $pro = 'Ing. industrial';
        $profesiones[$nom] = $pro;
        echo '<pre>';
        print_r($profesiones);
        echo '<pre>';
        echo '<br>', count($profesiones);

        $profesiones = [
            'Pepe' => [
                'titulo' => 'Lic. Informática',
                'email' => 'pepe@hotmail.com',
                'promedio' => 7.5,
                'disponible' => true,
                'experiencia' => [
                    ['entidad' => 'EPSAS', 'gestion' => 2018],
                    ['entidad' => 'GAMLP', 'gestion' => 2022]
                ]
            ]
        ];
        echo '<pre>';
        print_r($profesiones);
        echo '<pre>';
        echo '<br>', count($profesiones);

        echo '<br>', $profesiones['Pepe']['email'];
        echo '<br>', $profesiones['Pepe']['experiencia'][0]['gestion'];
    ?>
</body>
</html>