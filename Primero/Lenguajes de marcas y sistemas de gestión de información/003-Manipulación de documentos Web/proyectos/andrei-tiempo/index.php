<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Configuración básica del documento -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>andrei-tiempo</title>
  <!-- Enlace al archivo de estilos para la presentación visual -->
  <link rel="Stylesheet" href="estilo.css">
</head>
<body>
  <!-- Contenedor principal para la aplicación del tiempo -->
  <div class="weather-container">
    <!-- Título de la aplicación -->
    <h1>andrei-tiempo</h1>

    <!-- Formulario para ingresar el nombre de la ciudad -->
    <form id="weatherForm">
      <!-- Campo de entrada para el nombre de la ciudad -->
      <input type="text" id="cityInput" placeholder="Escribe un ciudad" required>
      <!-- Botón para enviar la solicitud -->
      <button type="submit">Ver tiempo</button>
    </form>

    <!-- Área donde se mostrarán los resultados del tiempo -->
    <div id="weatherResult">
      <!-- Los datos del tiempo se cargarán aquí dinámicamente -->
    </div>
  </div>

  <!-- Enlace al archivo JavaScript que maneja la lógica de la aplicación -->
  <script src="script.js"></script>
</body>
</html>