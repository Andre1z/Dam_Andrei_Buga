<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Página de Andrei Buga</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="contenedor">
        <?php
        include 'cabecera.php';     // Include the header
        include 'navegacion.php';   // Include the navigation menu
        include 'contenido.php';    // Include the main content
        include 'contacto.php';     // Include the contact form
        include 'piedepagina.php';  // Include the footer
        ?>
    </div>
</body>
</html>