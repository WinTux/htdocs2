<?php   require_once 'tercero.php';
        require_once 'tercero.php'; ?>
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

    $nombres = ['Pepe','Ana'];
    foreach($nombres as $nom){
        echo '<br>NOMBRE: ', $nom;
    }

    // llave => valor
    foreach($nombres as $lla => $nom){
        echo '<br> LLAVE: ',$lla,'; NOMBRE: ', $nom;
    }

    //Pasando por referencia
    foreach($nombres as $lla => &$nom){
        $nom = 'Samantha';
    }
    echo '<br>';
    print_r($nombres);

    //Pasando por valor (por defecto)
    foreach($nombres as $lla => $nom){
        $nom = 'Pepe';
    }
    echo '<br>';
    print_r($nombres);

    echo '<br>', $nom;

    //Caso delicado: pasar por referencia y modificar la variable luego del bucle
    $nombres = ['Pepe','Ana'];
    foreach($nombres as $lla => &$nom){
        echo '<br> LLAVE: ',$lla,'; NOMBRE: ', $nom;
    }
    unset($nom);
    $nom = 'Sofía';
    echo '<br>';
    print_r($nombres);

    $empleado = [
        'nombre' => 'Pepe',
        'apellido' => 'Perales',
        'experiencia' => ['EPSAS','Vicepresidencia','GAMLP']
    ];
    foreach($empleado as $llave => $valor){
        echo '<br>', $llave, ': ', json_encode($valor);// inplode()
    }

    foreach($empleado as $llave => $valor){
        echo '<br>', $llave,': ';//, '; ', json_encode($valor);
        if(is_array($valor)){
            foreach($valor as $exp){
                echo $exp, ', ';
            }
        }else{
            echo $valor;
        }
    }
/*
    for():
    endfor;
    foreach():
    endforeach;
*/
    $dia = 'domingo';
    switch($dia){
        case 'lunes':
            echo 'Hoy es lunes';
            break;
        case 'martes':
            echo 'Hoy es martes';
            break; 
        case 'sábado':
        case 'domingo':
            echo 'Hoy es fin de semana';
            break; 
        default:
            echo 'Día indeterminado';
            break;         
    }

    $dias = [1,3,5];
    foreach($dias as $dia){
        switch($dia){
            case 1:
                echo 'Hoy es lunes';
                break 2;
            case 3: 
                echo 'Hoy es miércoles';
                break;
            case 5:
                echo 'Hoy es viernes';
                break;
            default:
                echo 'Día indeterminado';
        }
    }
    echo '<br>FUERA DEL FOREACH';
    
function proceso(){
    sleep(5);
    echo '<br>Fin de la ejecución.';
    return 4;
}
/*
if(proceso() == 1){
    echo '<br>UNO';
}elseif(proceso() == 2){
    echo '<br>DOS';
}elseif(proceso() == 3){
    echo '<br>TRES';
}elseif(proceso() == 4){
    echo '<br>CUATRO';
}
*/
switch(proceso()){
    case 1:
        echo '<br>UNO';
        break;
    case 2:
        echo '<br>DOS';
        break;
    case 3:
        echo '<br>TRES';
        break;
    case 4:
        echo '<br>CUATRO';
        break;
}

$d = match($dia){
    1 => 'Hoy es lunes',
    3 => 'Hoy es miércoles',
    5 => 'Hoy es viernes',
    default => 'Día no definido'
};
echo '<br>', $d;

return;

    ?>
</body>
</html>