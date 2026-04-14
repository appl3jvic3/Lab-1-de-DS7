<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado de Validación</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Contenedor de la tarjeta */
        .card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 90%;
            text-align: center;
        }

        .nombre-titulo {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 10px;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }

        /* Mensajes de estado */
        .mensaje {
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            font-weight: 500;
        }

        .exito {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .info {
            background-color: #e2e3e5;
            color: #383d41;
        }
    </style>
</head>

<body>

    <div class="card">
        <?php
        if (isset($_POST['nombre']) && isset($_POST['edad'])) {

            $Nombre = trim($_POST['nombre']);
            $Nombre = ucwords(strtolower($Nombre));
            $Edad = trim($_POST['edad']);

            // Mostramos el nombre con estilo
            echo "<div class='nombre-titulo'>" . htmlspecialchars($Nombre) . "</div>";

            if (!empty($Edad) && $Edad >= 18) {
                echo "<div class='mensaje exito'> Usted puede votar en las próximas elecciones 2028.</div>";
            } else {
                echo "<div class='mensaje error'> Usted no es mayor de edad para votar.</div>";
            }
        } else {
            echo "<div class='mensaje info'>Por favor, complete el formulario primero.</div>";
        }
        ?>
        <br>
        <a href="javascript:history.back()" style="color: #666; text-decoration: none; font-size: 0.9rem;">← Volver</a>
    </div>

</body>

</html>