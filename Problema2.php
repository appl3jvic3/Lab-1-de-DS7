<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Problema 2</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    // aqui se ingresa las pulgadas para convertir a centimetros
    $pulgadas = 10; // Ejemplo de dato de entrada

    // Proceso de conversión
    $centimetros = $pulgadas * 2.54;
    ?>
    <div class="lab">
        <div class="box">
            <h1>Conversor de Medidas</h1>

            <div class="row">
                <div class="k">Pulgadas</div>
                <div class="v"><?= $pulgadas ?></div>
            </div>

            <div class="row">
                <div class="k">Centímetros</div>
                <div class="v"><?= $centimetros ?></div>
            </div>

            <div class="row">
                <div class="k">Resultado</div>
                <div class="v"><?= $pulgadas ?> pulgadas equivalen a <?= $centimetros ?> centímetros.</div>
            </div>
        </div>
    </div>
</body>

</html>