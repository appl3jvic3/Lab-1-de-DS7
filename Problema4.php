<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Problema 4</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    $autor1 = "Jhon Doe";
    $autor2 = "Max Mustermann";
    ?>
    <div class="lab">
        <div class="box">
            <h1>Hello World!</h1>

            <div class="row">
                <div class="k">Autores</div>
                <div class="v">Esta página dinámica fue creada por <?= $autor1 ?> y <?= $autor2 ?></div>
            </div>
        </div>
    </div>
</body>

</html>