<?php
// iphone.php

// Check if the theme preference is set in the cookie
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light'; // Default to light mode

// Cool phrase, description, tips, and price (updated for iPhone)
$coolPhrase = "El poder de la innovación en tu bolsillo.";
$hugeDescription = "El iPhone 16 es más que un teléfono; es una extensión de tu vida. Con su potente chip, pantalla Super Retina XDR y un sistema de cámaras profesionales, el iPhone es la herramienta perfecta para capturar momentos, mantenerse conectado y disfrutar de entretenimiento de alta calidad. Ya sea para tomar fotos impresionantes, jugar juegos intensos o trabajar sobre la marcha, el iPhone ofrece un rendimiento excepcional y una experiencia de usuario incomparable.";
$tips = "Consejo: Aprovecha al máximo tu iPhone utilizando el modo Retrato para fotos profesionales, el Face ID para desbloquear tu dispositivo de forma segura, y el modo No Molestar para concentrarte cuando lo necesites.";
$price = "999€"; // Updated price for iPhone

// Cool phrase, description, tips, and price for iPhone 16 Pro
$coolPhraseIphone16Pro = "El futuro en tus manos.";
$hugeDescriptionIphone16Pro = "El iPhone 16 Pro es la culminación de la innovación y el diseño. Con su potente chip A18 Pro, pantalla Super Retina XDR con ProMotion, y un sistema de cámaras avanzado con zoom óptico de 5x, el iPhone 16 Pro redefine lo que un teléfono puede hacer.";
$tipsIphone16Pro = "Consejo: Aprovecha al máximo tu iPhone 16 Pro utilizando el modo Cinematográfico para videos de calidad de cine, el LiDAR para experiencias AR inmersivas, y el modo Always-On Display para mantener la información a la vista.";
$priceIphone16Pro = "1,299€";
?>

<!DOCTYPE html>
<html lang="es" data-theme="<?php echo $theme; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 16</title>
    <link rel="stylesheet" href="iphone.css"> <!-- Reusing the same CSS file -->
    <link rel="icon" type="image/svg+xml" href="../../img/andre1z.svg">
</head>
<body>
    <h3>iPhone 16</h3>
    <div class="iphone-container">
        <!-- iPhone Section -->
        <div class="iphone-item">
            <h4><?php echo $coolPhrase ?></h4>
            <p><?php echo $hugeDescription; ?></p>
            <img src="../../img/iphone.png" alt="iPhone">
            <p><?php echo $tips; ?></p>
            <div class="buy-section">
                <a href="../tienda/tienda.php">
                    <button class="buy-button">Comprar</button>
                </a>
                <p class="price"><?php echo $price; ?></p>
            </div>
        </div>

        <!-- iPhone 16 Pro Section -->
        <div class="iphone-item">
            <h4><?php echo $coolPhraseIphone16Pro; ?></h4>
            <p><?php echo $hugeDescriptionIphone16Pro; ?></p>
            <img src="../../img/iphone16pro.png" alt="iPhone 16 Pro">
            <p><?php echo $tipsIphone16Pro; ?></p>
            <div class="buy-section">
                <a href="../tienda/tienda.php">
                    <button class="buy-button">Comprar</button>
                </a>
                <p class="price"><?php echo $priceIphone16Pro; ?></p>
            </div>
        </div>
    </div>

    <div class="back-section">
        <a href="../../index.php">
            <button class="back-button">Volver al Inicio</button>
        </a>
    </div>

    <!-- Theme Toggle Button -->
    <button id="themeToggle">Cambiar a Modo <?php echo $theme === 'light' ? 'Oscuro' : 'Claro'; ?></button>

    <script src="iphone.js"></script> <!-- Reusing the same JS file -->
</body>
</html>