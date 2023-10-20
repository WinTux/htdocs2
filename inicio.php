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
    ?>
    
    <h1>INICIO</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum pariatur quis delectus?</p>
</body>
</html>