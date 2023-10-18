<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Cosas</h4>
    <?php $nota = 91; ?>
    <?php if($nota > 90): ?>
        <strong>Excelente.<strong>
    <?php elseif($nota > 60): ?>
        <br>Muy bien.
    <?php elseif($nota >50): ?>
        <br>bien. 
    <?php else: ?>
        <br>Mal.
    <?php endif ?>
    <h1>Bucles</h1>
    <h3>While</h3>
    <?php
        $n = 0;
        while($n <= 10){
            echo '<br>', $n++;
        }
        //Con el resto de código
    ?>
    <h3>While (break)</h3>
    <?php
        while(true){
            if($n > 20) break;
            echo '<br>', $n++;
        }
        //Con el resto de código
    ?>
    <h3>While (multi break)</h3>
    <?php
        while(true){
            while($n >= 30){
                break 2;
            }
            echo '<br>', $n++;
        }
        //Con el resto de código
    ?>
    <h3>While (con endwhile)</h3>
    <?php
    $a = 0;
        while($a <= 15):
            if($a % 2 === 0){
                $a++;
                continue;
            }
            echo  $a++, ', ';
        endwhile;
        //Con el resto de código

        do{
            //código cualquiera
        }while($a === 5);
    ?>
    <h3>FOR</h3>
    <?php
    for($i = 0; $i < 10; print $i, $i++){
        echo $i,', ';
    }
    echo '<br>';
    for($i = 0; print $i,$i < 10; $i++){
        echo $i,', ';
    }

    echo '<br>';
    $texto = 'Pepe';
    for($i = 0; $i < strlen($texto); $i++)
        echo '<br>', $texto[$i];
    ?>
</body>
</html>