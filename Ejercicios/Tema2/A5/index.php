<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QueryString Javier Vera Suárez</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php 
    $nombre_usuario = trim($_GET['usuario'] ?? 'Javi', "/");
    echo '¡Hola '.htmlspecialchars($nombre_usuario).'!';
    ?>
    
    <h1>Ejercicio 2</h1>
    <?php echo strlen($nombre_usuario);?>
    
    <h1>Ejercicio 3</h1>
    <?php 
    echo strtoupper($nombre_usuario)."<br>";
    echo strtolower($nombre_usuario);
    ?>

    <h1>Ejercicio 4</h1>
    <?php
    $prefijo = $_GET['prefijo'] ?? 'J';
    $nombre_usuarioM = strtoupper($nombre_usuario);
    $prefijoM = strtoupper($prefijo);
    $posicion = strpos($nombre_usuarioM, $prefijoM);

    if ($posicion == 0) {
        echo 'El prefijo es correcto';
    } else {

    }
    ?>

    <h1>Ejercicio 5</h1>
    <?php 
    $letra = 'a';
    $repeticion = substr_count($nombre_usuarioM, strtoupper($letra));

    echo $repeticion;
    ?>

    <h1>Ejercicio 6</h1>
    <?php    
    $contar = stripos($nombre_usuario, $letra);

    if ($contar === false) {
        echo 'No hay ninguna a';
    }else {
        echo $contar+1;
    }
    ?>

    <h1>Ejercicio 7</h1>
    <?php 
    $letra2 = 'o';
    $sustituir = str_ireplace($letra2, '0', $nombre_usuario);
    
    echo $sustituir;
    ?>

    <h1>Ejercicio 8</h1>
    <?php 
    $url = 'http://username:password@hostname:9090/path?arg=value';

    echo 'protocolo: '.parse_url($url, PHP_URL_SCHEME).'<br>';
    echo 'Usuario: '.parse_url($url, PHP_URL_USER).'<br>';
    echo 'Path: '.parse_url($url,PHP_URL_PATH).'<br>';
    echo 'QueryString: '.parse_url($url, PHP_URL_QUERY).'<br>';
    ?>
</body>
</html>