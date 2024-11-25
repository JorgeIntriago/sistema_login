<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Registrar Usuario</h2>
        <form action="register.php" method="POST">
            <label for="new_username">Usuario:</label>
            <input type="text" id="new_username" name="username" required>
            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" required>
            <label for="new_password">Contraseña:</label>
            <input type="password" id="new_password" name="password" required>
            <button type="submit">Registrar</button>
        </form>
        <a href="index.php"> Iniciar Sesion </a>
    </div>

</body>
</html>
