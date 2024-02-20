<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$alejandro = ['telefono' => 54743221, 'edad' => 20, 'pais' => 'mexico'];

echo $alejandro['telefono'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        echo '<h1>una</h1>' . '<br>' ;
        foreach($meses as $mes){
            echo $meses[0] . '<br>' . '<br>';

        }

        echo '<h1>dos</h1>' . '<br>' . '<br>' ; 
        foreach($meses as $mes){
            echo $mes . '<br>';
        }

        echo'<h1>tres<h1>' . '<br>';
        foreach($meses as $mes){
            echo '<li>' . $mes . '<br>' . '</li>';

        }


        ?>
    </ul>
</body>
</html>