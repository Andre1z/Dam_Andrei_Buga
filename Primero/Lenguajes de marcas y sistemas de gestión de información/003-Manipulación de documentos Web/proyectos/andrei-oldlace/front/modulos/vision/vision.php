<?php
// vision.php

// Check if the theme preference is set in the cookie
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light'; // Default to light mode

// Cool phrase, description, tips, and price for Apple Vision Pro
$coolPhrase = "El futuro de la realidad aumentada.";
$hugeDescription = "El Apple Vision Pro redefine la forma en que interactuamos con la tecnología. Con su pantalla de alta resolución, seguimiento ocular preciso y sonido espacial inmersivo, el Apple Vision Pro te sumerge en un mundo de realidad aumentada como nunca antes. Ya sea para trabajo, entretenimiento o creatividad, el Apple Vision Pro es la herramienta definitiva para explorar nuevas dimensiones.";
$tips = "Consejo: Aprovecha al máximo tu Apple Vision Pro utilizando las aplicaciones de realidad aumentada para diseño 3D, juegos inmersivos y colaboración virtual. También puedes personalizar tu experiencia con ajustes de seguimiento ocular y gestos intuitivos.";
$price = "3,499€"; // Price for Apple Vision Pro
?>

<!DOCTYPE html>
<html lang="es" data-theme="<?php echo $theme; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Vision Pro</title>
    <link rel="stylesheet" href="vision.css"> <!-- Reusing the same CSS file -->
    <link rel="icon" type="image/svg+xml" href="../../img/andre1z.svg">
</head>
<body>
    <h3>Apple Vision Pro</h3>
    <h4><?php echo $coolPhrase; ?></h4>
    <p><?php echo $hugeDescription; ?></p>
    <img src="../../img/vision.jpg" alt="Apple Vision Pro"> <!-- Image for Apple Vision Pro -->
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

    <script src="vision.js"></script> <!-- Reusing the same JS file -->
</body>
</html>