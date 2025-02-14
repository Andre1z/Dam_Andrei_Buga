<?php
// ipad.php

// Check if the theme preference is set in the cookie
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light'; // Default to light mode

// Cool phrase, description, tips, and price (updated for iPad)
$coolPhrase = "Innovación en tus manos.";
$hugeDescription = "El iPad es más que una tableta; es una ventana a la creatividad y la productividad. Con su potente chip, pantalla Liquid Retina impresionante y compatibilidad con el Apple Pencil y el Magic Keyboard, el iPad es la herramienta perfecta para artistas, estudiantes y profesionales. Ya sea para tomar notas, dibujar, editar videos o simplemente disfrutar de tus películas y juegos favoritos, el iPad ofrece un rendimiento excepcional y una experiencia de usuario incomparable.";
$tips = "Consejo: Aprovecha al máximo tu iPad utilizando el Apple Pencil para tomar notas o dibujar, y el Magic Keyboard para transformarlo en una laptop. También puedes usar el modo multitarea para trabajar con varias aplicaciones al mismo tiempo.";
$price = "875€"; // Updated price for iPad
?>

<!DOCTYPE html>
<html lang="es" data-theme="<?php echo $theme; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPad</title>
    <link rel="stylesheet" href="ipad.css"> <!-- Reusing the same CSS file -->
    <link rel="icon" type="image/svg+xml" href="../../img/andre1z.svg">
</head>
<body>
    <h3>iPad</h3>
    <h4><?php echo $coolPhrase; ?></h4>
    <p><?php echo $hugeDescription; ?></p>
    <img src="../../img/ipad.jpg" alt="iPad"> <!-- Updated image for iPad -->
    <p><?php echo $tips; ?></p>
    <div class="buy-section">
        <a href="../tienda/tienda.php">
            <button class="buy-button">Comprar</button>
        </a>
        <p class="price"><?php echo $price; ?></p>
    </div>
    <div class="back-section">
        <a href="../../index.php">
            <button class="back-button">Volver al Inicio</button>
        </a>
    </div>

    <!-- Theme Toggle Button -->
    <button id="themeToggle">Cambiar a Modo <?php echo $theme === 'light' ? 'Oscuro' : 'Claro'; ?></button>

    <script src="ipad.js"></script> <!-- Reusing the same JS file -->
</body>
</html>