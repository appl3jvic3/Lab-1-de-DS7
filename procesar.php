<?php

$resultado = "0";
$operacion_realizada = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $operacion = $_POST['operacion'];

    // Procesamiento matemático
    switch ($operacion) {
        case 'suma':
            $resultado = $num1 + $num2;
            $operacion_realizada = "$num1 + $num2";
            break;
        case 'resta':
            $resultado = $num1 - $num2;
            $operacion_realizada = "$num1 - $num2";
            break;
        case 'multiplicacion':
            $resultado = $num1 * $num2;
            $operacion_realizada = "$num1 × $num2";
            break;
        default:
            $resultado = "Operación no válida";
            break;
    }
}
