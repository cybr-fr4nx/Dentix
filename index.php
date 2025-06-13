<?php
// cargar los archivos existentes
$visitas = file_exists('visitas.json') ? json_decode(file_get_contents('visitas.json'), true) : [];

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica dental</title>

     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Azul muy claro */
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #0077b6; /* Azul fuerte */
        }

        a {
            display: inline-block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #00b4d8;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0077b6;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #d1e7f0;
        }

        th {
            background-color: #caf0f8;
            color: #023e8a;
        }

        tr:hover {
            background-color: #f1f9ff;
        }

        @media (max-width: 600px) {
            table, th, td {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <h1>Clinica Dental</h1>
    <a href="registrar.php">Registrar Nuevo paciente</a>
    <table>
        <tr>
            <th>Cedula:</th>
            <th>Nombre:</th>
            <th>Motivo:</th>
            <th>Fecha:</th>
        </tr>
        <?php foreach ( $visitas as $visita): ?>
        <tr>  
            <td><?= htmlspecialchars($visita['cedula']) ?></td>
            <td><?= htmlspecialchars($visita['nombre'] . ' ' . $visita['apellido']) ?></td>
            <td><?= htmlspecialchars($visita['motivo']) ?></td>
            <td><?= htmlspecialchars($visita['fecha']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>



<!-- Frankoris Rodriguez Ortiz 2023-1346 -->