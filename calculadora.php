<?php
// Importamos el archivo que procesa las operaciones
include 'procesar.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora UI/UX - Lab 1</title>

    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <div class="calculadora-card">
        <h2>Calculadora Pro</h2>

        <div class="pantalla">
            <p class="operacion-texto">
                <?php echo $operacion_realizada; ?>
            </p>
            <p class="resultado-texto">
                <?php echo $resultado; ?>
            </p>
        </div>

        <form method="POST" action="">
            <div class="grupo-entrada">
                <label for="num1">Primer Número</label>
                <input type="number" step="any" name="num1" id="num1" placeholder="Ej: 10" required
                    value="<?php echo isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : ''; ?>">
            </div>

            <div class="grupo-entrada">
                <label for="operacion">Operación</label>
                <select name="operacion" id="operacion">
                    <option value="suma" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'suma') ? 'selected' : ''; ?>>➕ Suma</option>
                    <option value="resta" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'resta') ? 'selected' : ''; ?>>➖ Resta</option>
                    <option value="multiplicacion" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'multiplicacion') ? 'selected' : ''; ?>>✖️ Multiplicación</option>
                </select>
            </div>

            <div class="grupo-entrada">
                <label for="num2">Segundo Número</label>
                <input type="number" step="any" name="num2" id="num2" placeholder="Ej: 5" required
                    value="<?php echo isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : ''; ?>">
            </div>

            <button type="submit">Calcular Ahora</button>
        </form>
    </div>

</body>

</html>