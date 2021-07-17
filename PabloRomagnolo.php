<h2>Laboratorio #1: Min, Max y Promedio de Facturación</h2>
<?php
    $fact = [
        'enero' => 500,
        'febrero' => 230,
        'marzo' => 134,
        'abril' => 425,
        'mayo' => 815,
        'junio' => 632,
        'julio' => 54,
        'agosto' => 105,
        'septiembre' => 123,
        'octubre' => 478,
        'noviembre' => 412,
        'diciembre' => 953
    ];
    //var_dump($fact);
    //echo max($fact);
    /*
    tengo creado el arreglo, almaceno la función en una variable y después lo paso por un bucle "foreach". Este tiene una pregunta que si la variable fact tomando la clave "mes" es igual a la variable max o min y así nos dice cuál es el valor correspondiente
    */

    /*$fact_format(
        int $decimals = 0,
    );*/
    $max = max($fact);
    $min = min($fact);

    /*for($i = 0; $i<count($fact); $i++){
        if($fact[$i]==$max){
            echo "El valor máximo se encuentra en ".$i;
        }
    }*/

    foreach($fact as $mes => $valor){
        if($fact[$mes]==$max){
            echo "El valor máximo se encuentra en ".$mes . " y su valor es " . $valor;
        }
    }
    echo"<br>";
    foreach($fact as $mes => $valor){
        if($fact[$mes]==$min){
            echo "El valor mínimo se encuentra en ".$mes . " y su valor es " . $valor;
        }
    }
    echo"<br>";

    $media= array_sum($fact)/count($fact);
    echo "El valor promedio de la facturación es ".$media;
 
    echo"<hr>";
?>
<h2>Laboratorio #2: Ordenar un Vector</h2>
<?php
    $nombres = [
        "Juan",
        "Martín",
        "Nicolas",
        "Miguel",
        "Carlos"
    ];

    sort($nombres);
    //dump($nombres);
    /*$cantidad = sizeof($nombres);
    for($i=0; $i<$cantidad; $i++){
        echo "<p> $i = $nombres[$i]</p>";
    };*/
    $cantidad = sizeof($nombres);


?>
<table border="1" cellpadding="10" bordercolor="#333333" align="center">

    <tr>
        <td>Indice</td>
        <td>Nombre</td>
    </tr>

	<tr>
		<td align="center"><?php   for($i=0; $i<$cantidad; $i++){
                    echo "<p> $i</p>";
                    }; ?>
        </td>
        <td align="center"><?php   for($i=0; $i<$cantidad; $i++){
                    echo "<p> $nombres[$i]</p>";
                    }; ?>
        </td>
	</tr>
</table>

<hr>

<h2>Laboratorio #3: Vector Asociativo</h2>

<?php


$alumnos = [
    "Juan" => 5,
    "Martin" => 7,
    "Nicolas" => 10,
    "Miguel" => 2,
    "Carlos" => 8
];


?>
<table border="1" cellpadding="10" bordercolor="#333333" align="center">

<tr>
    <td>Nombre</td>
    <td>Nota</td>
</tr>

<tr>
    <td align="center"><?php foreach($alumnos as $nombre => $calificacion){echo "<p> $nombre </p>";
    }; ?> </td>
    <td align="center"><?php foreach($alumnos as $nombre => $calificacion){echo "<p> $calificacion </p>";
    }; ?> </td>
</tr>
</table>

<?php
    $notamax=max($alumnos);
    $notamin=min($alumnos);
    
    foreach($alumnos as $nombre => $calificacion){
        if($alumnos[$nombre]==$notamax){
            echo "El alumno se llama ".$nombre . " y su calificación es " . $calificacion;
        }
    };
echo "<br>";
    foreach($alumnos as $nombre => $calificacion){
        if($alumnos[$nombre]==$notamin){
            echo "El alumno se llama ".$nombre . " y su calificación es " . $calificacion;
        }
    };
echo "<br>";
    $notamedia= array_sum($alumnos)/count($alumnos);
    echo "El promedio de las calificaciones es ".$notamedia;
?>



