<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica dental | Registrar paciente</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f8ff; /* azul claro */
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #0077b6;
            margin-top: 30px;
        }

        form {
            max-width: 500px;
            margin: 40px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #023e8a;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #90e0ef;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #00b4d8;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0077b6;
        }

        @media (max-width: 600px) {
            form {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <h1>Registrar pacienes</h1>
    <form action="guardar.php" method="POST">
        <label for="">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="">Apellido:</label>
        <input type="text" name="apellido" required>

        <label for="">Cedula:</label>
        <input type="number" name="cedula" required>

        <label for="">Edad:</label>
        <input type="number" name="edad" required>

        <label for="">Motivo:</label>
        <select name="motivo" id="">
            <option value="">---Seleccionar---</option>
            <option value="limpieza">limpieza</option>
            <option value="caries">caries</option>
            <option value="dolor">dolor</option>
            <option value="chequeo">chequeo</option>
        </select>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>

<!-- Frankoris Rodriguez Ortiz 2023-1346 -->