<?php
// watch.php

// Check if the theme preference is set in the cookie
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light'; // Default to light mode

// Cool phrase, description, tips, and price for Apple Watch Series 9
$coolPhraseSeries9 = "Tu compañero de salud y estilo.";
$hugeDescriptionSeries9 = "El Apple Watch Series 9 es más que un reloj; es tu compañero de salud, fitness y estilo. Con su pantalla Retina siempre activa, monitorización avanzada de la salud y una batería que dura todo el día, el Apple Watch Series 9 te ayuda a mantenerte conectado y activo.";
$tipsSeries9 = "Consejo: Aprovecha al máximo tu Apple Watch Series 9 utilizando la app Salud para monitorizar tu actividad física, la app Sueño para mejorar tu descanso, y la app ECG para realizar electrocardiogramas desde tu muñeca.";
$priceSeries9 = "499€";

// Cool phrase, description, tips, and price for Apple Watch Ultra
$coolPhraseUltra = "El reloj definitivo para aventureros.";
$hugeDescriptionUltra = "El Apple Watch Ultra está diseñado para los aventureros más exigentes. Con su resistencia extrema, GPS de precisión, y una batería que dura hasta 36 horas, el Apple Watch Ultra es el compañero perfecto para explorar los límites.";
$tipsUltra = "Consejo: Aprovecha al máximo tu Apple Watch Ultra utilizando el modo Acción para actividades extremas, el modo Buceo para explorar el mundo submarino, y la app Brújula para orientarte en cualquier lugar.";
$priceUltra = "899€";
?>

<!DOCTYPE html>
<html lang="es" data-theme="<?php echo $theme; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Watch</title>
    <link rel="stylesheet" href="watch.css"> <!-- Reusing the same CSS file -->
    <link rel="icon" type="image/svg+xml" href="../../img/andre1z.svg">
</head>
<body>
    <h3>Apple Watch</h3>

    <!-- Flexbox Container for Apple Watches -->
    <div class="watch-container">
        <!-- Apple Watch Series 9 Section -->
        <div class="watch-item">
            <h4><?php echo $coolPhraseSeries9; ?></h4>
            <p><?php echo $hugeDescriptionSeries9; ?></p>
            <img src="../../img/watch_series9.png" alt="Apple Watch Series 9">
            <p><?php echo $tipsSeries9; ?></p>
            <div class="buy-section">
                <a href="../tienda/tienda.php">
                    <button class="buy-button">Comprar</button>
                </a>
                <p class="price"><?php echo $priceSeries9; ?></p>
            </div>
        </div>

        <!-- Apple Watch Ultra Section -->
        <div class="watch-item">
            <h4><?php echo $coolPhraseUltra; ?></h4>
            <p><?php echo $hugeDescriptionUltra; ?></p>
            <img src="../../img/watch_ultra.jpg" alt="Apple Watch Ultra">
            <p><?php echo $tipsUltra; ?></p>
            <div class="buy-section">
                <a href="../tienda/tienda.php">
                    <button class="buy-button">Comprar</button>
                </a>
                <p class="price"><?php echo $priceUltra; ?></p>
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

    <script src="watch.js"></script> <!-- Reusing the same JS file -->
</body>
</html>