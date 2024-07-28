<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Futbolista</title>
</head>
<body>
    <h2>Crear Futbolista</h2>
    <form action="/futbolista/ins" method="POST">
        @csrf

        <label for="Nombre">Nombre:</label><br>
        <input type="text" id="Nombre" name="Nombre"><br>

        <label for="Apellido">Apellido:</label><br>
        <input type="text" id="Apellido" name="Apellido"><br><br>

        <label for="Numero_Camisa">Numero Camisa:</label><br>
        <input type="text" id="Numero_Camisa" name="Numero_Camisa"><br>

        <label for="Fecha_Nacimiento">Fecha de Nacimiento:</label><br>
        <input type="date" id="Fecha_Nacimiento" name="Fecha_Nacimiento"><br><br>

        <label for="Fecha_Retiro">Fecha de Retiro:</label><br>
        <input type="date" id="Fecha_Retiro" name="Fecha_Retiro"><br><br>

        <button type="submit">Crear</button>
    </form>
</body>
</html>
