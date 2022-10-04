<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javier Vera Suárez</title>
</head>

<body>
    <?php
    $numeroUsuario = htmlspecialchars($_GET['numero'] ?? ' ');
    $numeroObligatorio = is_numeric($numeroUsuario);
    $numeroMagico = 5;

    if ($numeroUsuario === ' ') {
        echo 'No has especificado ningún parámetro';
    }else {
        if (!$numeroObligatorio) {
            echo 'Debes introducir un número';
        }elseif ($numeroUsuario > $numeroMagico) {
            echo 'Mi número es menor';
        }elseif ($numeroUsuario < $numeroMagico) {
            echo 'Mi número es mayor';
        }elseif ($numeroUsuario == $numeroMagico) {
            echo 'Enhorabuena. Has acertado';
        }
    }

    ?>
</body>
</html>