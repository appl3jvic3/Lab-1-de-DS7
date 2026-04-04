<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Problema 1</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    // se ingresa el radio del circulo
    $radio = 5;

    // se calculan el area y el perimetro del circulo
    $area = pi() * pow($radio, 2);
    $perimetro = 2 * pi() * $radio;
    ?>
    <div class="lab">
        <div class="box">
            <h1>Resultados</h1>

            <div class="row">
                <div class="k">Radio</div>
                <div class="v"><?= $radio ?></div>
            </div>
            <div class="row">
                <div class="k">Área</div>
                <div class="v"><?= $area ?></div>
            </div>
            <div class="row">
                <div class="k">Perímetro</div>
                <div class="v"><?= $perimetro ?></div>
            </div>

        </div>
    </div>
</body>

</html>