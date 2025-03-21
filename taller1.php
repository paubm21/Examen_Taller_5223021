<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuario</title>
</head>
<body>
    <h2>Formulario de Usuario</h2>
    <form action="index.php" method="post">
        <label>Nombre: <input type="text" name="nombre" required></label><br>
        <label>Edad: <input type="number" name="edad" required></label><br>
        <button type="submit" name="crear">Guardar</button>
    </form>
</body>
</html>