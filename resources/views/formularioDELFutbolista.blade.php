<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Futbolista</title>
</head>
<body>
    <h2>Crear Futbolista</h2>
    <form action="/futbolista/del" method="POST">
        @csrf

        <label for="ID">ID del futbolista a eliminar:</label><br>
        <input type="text" id="ID" name="ID"><br>

        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
