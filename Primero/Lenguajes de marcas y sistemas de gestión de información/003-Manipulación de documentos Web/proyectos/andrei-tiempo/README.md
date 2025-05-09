# Aplicación meteorológica

Una aplicación meteorológica sencilla y con capacidad de respuesta creada con **PHP**, **JavaScript** y **CSS**. Esta aplicación permite a los usuarios buscar las condiciones meteorológicas actuales de cualquier ciudad mediante la **API OpenWeatherMap**.

---

## Características
- Búsqueda del tiempo por nombre de ciudad.
- Visualización de los detalles del tiempo actual:
- Temperatura
- Humedad
- Velocidad del viento
- Condiciones meteorológicas (por ejemplo, soleado, lluvioso)
- Íconos meteorológicos dinámicos basados ​​en las condiciones.
- Diseño adaptable tanto para dispositivos móviles como de escritorio.

---

## Tecnologías utilizadas
- **PHP**: Backend para gestionar solicitudes de API.
- **JavaScript**: Obtener datos meteorológicos de forma dinámica y actualizar la interfaz de usuario.
- **CSS**: Dar estilo a la aplicación para que tenga un aspecto limpio y moderno.
- **API OpenWeatherMap**: API meteorológica gratuita para obtener datos meteorológicos en tiempo real.

---

## Instrucciones de configuración

### 1. Clonar el repositorio
```bash
git clone https://github.com/Andre1z/andrei-tiempo.git
cd andrei-tiempo

2. Obtenga una clave API
Regístrese en OpenWeatherMap y obtenga una clave API gratuita.

Reemplace YOUR_API_KEY en el archivo script.js con su clave API real.

3. Ejecute la aplicación
Abra el archivo index.php en su navegador.

Ingrese el nombre de una ciudad (por ejemplo, "Madrid") y haga clic en "Ver tiempo".

weather-app/
├── index.php # Archivo principal de la aplicación
├── estilo.css # Estilos para la aplicación
├── script.js # JavaScript para obtener y mostrar datos meteorológicos
├── README.md # Documentación del proyecto

Ejemplo de solicitud de API
Reemplace YOUR_API_KEY con su clave de API real en el archivo script.js:
const apiKey = 'YOUR_API_KEY';
const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

Autor
Andrei Buga

¡Disfruta de la aplicación del tiempo! 🌤️