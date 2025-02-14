<?php
// index.php

// Check if the theme preference is set in the cookie
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light'; // Default to light mode
?>

<!DOCTYPE html>
<html lang="es" data-theme="<?php echo $theme; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de QR</title>
    <link rel="stylesheet" href="mac.css"> <!-- Reusing the same CSS file -->
    <link rel="icon" type="image/svg+xml" href="../../img/andre1z.svg">
</head>
<body>
    <h3>Generador de Código QR</h3>
    <form action="generate_qr.php" method="POST">
        <label for="url">Introduce una URL:</label>
        <input type="text" id="url" name="url" placeholder="https://ejemplo.com" required>
        <button type="submit">Generar QR</button>
    </form>

    <!-- Theme Toggle Button -->
    <button id="themeToggle">Cambiar a Modo <?php echo $theme === 'light' ? 'Oscuro' : 'Claro'; ?></button>

    <script src="mac.js"></script> <!-- Reusing the same JS file -->
</body>
</html>