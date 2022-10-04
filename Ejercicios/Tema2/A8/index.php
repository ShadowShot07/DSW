<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javier Vera Suarez</title>
</head>
<body>
    <?php 
    // Ejercicio 1
    $nombres = array('Javi' , 'Isa', 'Ari');
    //Ejercicio 2
    $contados = count ($nombres);
    echo("$contados<br>");
    //Ejercicio 3
    $cadena = implode(' ', $nombres);
    echo("$cadena<br>");
    //Ejercicio 4
    asort($nombres);
    foreach ($nombres as $key => $val) {
        echo("$val ");
    }
    echo '<br>';
    //Ejercicio 5
    sort($nombres);
    foreach ($nombres as $key => $val) {
        echo ("$key = $val,");
    }
    echo '<br>';

    ksort($nombres);
    foreach ($nombres as $key => $val) {
        echo ("$key = $val,");
    }
    echo '<br>';
    //Ejercicio 6
    $reverso = array_reverse($nombres);
    print_r ($reverso);
    echo '<br>';
    //Ejercicio 7
    $buscar = array_search('Javi' ,$nombres);
    echo("$buscar<br>");
    //Ejercicio 8
    $alumnos = array(
        array(
            'id' => 1, 
            'nombre' => 'Javi', 
            'edad' => 22
        ),
        array(
            'id' => 2, 
            'nombre' => 'Isa', 
            'edad' => 22
        ),
        array(
            'id' => 3, 
            'nombre' => 'Ari', 
            'edad' => 21
        ),
    );
    print_r($alumnos);
    echo '<br>';
    //Ejercicio 9
    echo '<table border="1">';
    foreach ($alumnos as $key) {
        echo '<tr>';
        foreach ($key as $key2 => $val) {
            echo ("<th>$key2</th>");
            echo ("<td>$val</td>");
        }
        echo '</tr>';
    }
    echo '</table>';
    //Ejercicio 10
    $columna = array_column($alumnos, 'nombre');
    print_r($columna);
    echo '<br>';
    //Ejercicio 11
    $numeros = array(1,2,3,4,5,6,7,8,9,10);
    $suma = array_sum($numeros);
    echo ($suma);
    ?>
</body>
</html>