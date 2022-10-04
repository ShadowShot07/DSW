<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javier Vera Suarez</title>
</head>

<body>
    <h1>MD5 cracker</h1>
    <p>Esta aplicación coge un MD5 hash de un pin de 4 digitos y chequee todas las 10.000 posibilidades para determinar el PIN</p>
    <pre>
Debug output:
<?php
$textoPin = "Ningun Hash puesto";

if (isset($_GET['md5'])) {
    $md5 = $_GET['md5'];

    if (strlen($md5 < 5)) {
        $tempo = microtime(true);

        $alfabeto = '0123456789';
        $repeticiones = 15;

        for ($i = 0; $i < strlen($alfabeto); $i++) {
            $letra1 = $alfabeto[$i];

            for ($j = 0; $j < strlen($alfabeto); $j++) {

                $letra2 = $alfabeto[$j];

                for ($l = 0; $l < strlen($alfabeto); $l++) {

                    $letra3 = $alfabeto[$l];

                    for ($p = 0; $p < strlen($alfabeto); $p++) {

                        $letra4 = $alfabeto[$p];

                        $intentos = "$letra1$letra2$letra3$letra4";
                        $check = hash('md5', $intentos);

                        if ($check == $md5) {
                            $textoPin = $intentos;
                            break;
                        }

                        if ($repeticiones > 0) {
                            echo "$check $intentos<br>";
                            $repeticiones = $repeticiones - 1;
                        }
                    }
                }
            }
        }
        $tempo2 = microtime(true);
        echo '<br>';
        echo "Checkeos totales: $intentos<br>";
        echo 'Tiempo transcurrido: ' . $tempo2 - $tempo;
    } else {
        $textoPin = "No encontrado";
    }
}
?>
</pre>
    <?php
    echo "Pin: $textoPin"
    ?>
    <form method="GET">
        <input type="text" name="md5" size="60" />
        <input type="submit" value="Crack MD5" />
    </form>
    <a href="index.php">Reset</a>
</body>

</html>