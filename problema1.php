<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Problema 1 - Dinámico</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    // Inicializamos variables para evitar errores de "Undefined index"
    $radio = 0;
    $unidad = "";
    $area = 0;
    $perimetro = 0;

    // Comprobamos si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radio = isset($_POST['radio']) ? floatval($_POST['radio']) : 0;
        $unidad = isset($_POST['unidad']) ? htmlspecialchars($_POST['unidad']) : "";

        // Cálculos matemáticos
        if ($radio > 0) {
            $area = pi() * pow($radio, 2);
            $perimetro = 2 * pi() * $radio;
        }
    }
    ?>

    <div class="lab">
        <div class="box">
            <h1>Cálculo de Círculo</h1>

            <form method="POST" action="">
                <div class="row">
                    <div class="k">Ingresa Radio:</div>
                    <div class="v">
                        <input type="number" name="radio" step="any" value="<?= $radio ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="k">Unidad (ej: cm):</div>
                    <div class="v">
                        <input type="text" name="unidad" value="<?= $unidad ?>" placeholder="m, cm, etc.">
                    </div>
                </div>
                <div style="text-align: center; margin-top: 15px;">
                    <button type="submit">Calcular</button>
                </div>
            </form>

            <hr>

            <h1>Resultados</h1>
            <div class="row">
                <div class="k">Radio</div>
                <div class="v"><?= $radio ?> <?= $unidad ?></div>
            </div>
            <div class="row">
                <div class="k">Área</div>
                <div class="v"><?= number_format($area, 2) ?> <?= $unidad ?>²</div>
            </div>
            <div class="row">
                <div class="k">Perímetro</div>
                <div class="v"><?= number_format($perimetro, 2) ?> <?= $unidad ?></div>
            </div>

        </div>
    </div>
</body>

</html>