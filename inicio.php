<?php //declare(strict_types=1); ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Una página</title>
</head>
<body>
    <?php 
    ob_start();
    include './extracto/nav.php'; 
    $nav = ob_get_clean();
    $nav = str_replace('Inicio','Home', $nav);
    var_dump($nav);

    function nombre(){
        return '<br>HOLA';
    }

    echo nombre();

    function algo(){
        echo 'es la función algo';
        function otro(){
            echo 'es la otra función';
        }
    }


    algo();
    otro();

    function elementos(): int{
        return '1';
    }

    echo var_dump(elementos());

    function elementos2(): int{
        return '1';
    }

    echo var_dump(elementos2());

    function elementos3(): mixed{
        return [1,2,3];
    }

    function algo2(int $a, int $b){
        return $a - $b;
    }

    echo algo2(4,5);
    echo algo2(4.4,'5');

    function resta(int|float $a, int|float $b = 45){
        return $a - $b;
    }

    echo '<br>La resta es: ', resta(56);

    function calculoComplejo(float $estatura,float $peso,  float $cintura = 50, float $torso = 45){
        echo '<br>Estatura:',$estatura,', peso: ', $peso, '$cintura: ',$cintura, '$torso: ', $torso;
    }
    calculoComplejo(1,3,2,4);
    calculoComplejo(1,2,4);
    calculoComplejo(2,3);

    function sumar_n(...$numeros): int|float{
        $total = 0;
        foreach($numeros as $n){
            $total += $n;
        }
        // return array_sum($numeros);
        return $total;
    }

    $a = 50; $b = 3;
    echo '<br> La sumatoria es: ', sumar_n($a, $b, 60, 13, 4);

    $arr = [3,4,2,1];
    echo '<br> La sumatoria es: ', sumar_n($a, $b, ...$arr);

    calculoComplejo(peso: $a, torso: 56, cintura: 65, estatura: $b );
    ?>
    
    <h1>INICIO</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum pariatur quis delectus?</p>
</body>
</html>