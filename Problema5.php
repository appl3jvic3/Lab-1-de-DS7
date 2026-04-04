<?php


// 1. Recepción y Sanitización (Trimming) para eliminar espacios accidentales 
if (isset($_POST['nombre']) && isset($_POST['edad'])) {

    $Nombre = trim($_POST['nombre']);
    $Edad = trim($_POST['edad']);

    // 2. Salida del nombre 
    // Usamos htmlspecialchars por seguridad al mostrar datos del usuario
    echo "El nombre es: " . htmlspecialchars($Nombre) . "<br>";

    // 3. Lógica de validación de edad 
    if (!empty($Edad) && $Edad >= 18) {
        // Acción si es mayor de edad
        echo "Usted puede votar en las próximas elecciones 2028";
    } else {
        // Acción si es menor de edad
        echo "Usted no es mayor de edad";
    }
} else {
    echo "Por favor, complete el formulario primero.";
}
