<?php
// mac.php

// Check if the theme preference is set in the cookie
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light'; // Default to light mode

// Cool phrase, description, tips, and price (unchanged)
$coolPhrase = "Potencia y elegancia en cada detalle.";
$hugeDescription = "El Mac es más que una computadora; es una experiencia. Diseñado para aquellos que exigen lo mejor, el Mac combina un rendimiento excepcional con un diseño elegante y minimalista. Con su potente procesador, pantalla Retina deslumbrante y una batería que dura todo el día, el Mac es la herramienta perfecta para creativos, profesionales y cualquier persona que busque lo último en tecnología. Ya sea para editar videos, diseñar gráficos o simplemente navegar por la web, el Mac ofrece un rendimiento impecable y una experiencia de usuario incomparable.";
$tips = "Consejo: Aprovecha al máximo tu Mac utilizando atajos de teclado como Command + Space para Spotlight, o Command + Tab para cambiar rápidamente entre aplicaciones. También puedes personalizar tu experiencia con widgets en el Centro de Notificaciones y usar iCloud para mantener tus archivos sincronizados en todos tus dispositivos Apple.";
$price = "985€";
?>

<!DOCTYPE html>
<html lang="es" data-theme="<?php echo $theme; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mac</title>
    <link rel="stylesheet" href="mac.css">
    <link rel="icon" type="image/svg+xml" href="../../img/andre1z.svg">
</head>
<body>
    <h3>Mac</h3>
    <h4><?php echo $coolPhrase; ?></h4>
    <p><?php echo $hugeDescription; ?></p>
    <img src="../../img/mac.jpg" alt="Mac">
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

    <script src="mac.js"></script>
</body>
</html>