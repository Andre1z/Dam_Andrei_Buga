// Agregar un evento al formulario para capturar el envío
document.getElementById('weatherForm').addEventListener('submit', function (e) {
  e.preventDefault(); // Evitar que el formulario se envíe y recargue la página
  const ciudad = document.getElementById('cityInput').value; // Obtener el valor ingresado por el usuario
  getWeather(ciudad); // Llamar a la función para obtener el clima
});

// Función para obtener los datos del clima desde la API de OpenWeatherMap
function getWeather(ciudad) {
  const apiKey = '1d5b279592277375f0d389d4370a2dd8'; // Clave API de OpenWeatherMap (reemplázala con la tuya)
  const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${ciudad}&appid=${apiKey}&units=metric`;

  // Realizar la solicitud a la API
  fetch(apiUrl)
    .then(response => response.json()) // Convertir la respuesta a formato JSON
    .then(data => {
      if (data.cod === 200) { // Si la respuesta es exitosa
        displayWeather(data); // Mostrar los datos del clima
      } else { // Si hay un error (ciudad no encontrada, etc.)
        displayError(data.message); // Mostrar el mensaje de error
      }
    })
    .catch(error => {
      displayError('Ocurrió un error. Por favor, intenta nuevamente.'); // Manejar errores de conexión o de API
    });
}

// Función para mostrar los datos del clima en la página
function displayWeather(data) {
  const tiempoResultado = document.getElementById('weatherResult'); // Obtener el contenedor donde se mostrará el clima
  const weatherIcon = `https://openweathermap.org/img/wn/${data.weather[0].icon}@2x.png`; // Obtener el ícono del clima

  // Insertar la información del clima en el HTML
  tiempoResultado.innerHTML = `
    <h2>${data.name}, ${data.sys.country}</h2>
    <img src="${weatherIcon}" alt="Weather Icon" class="weather-icon">
    <div class="weather-info">${data.weather[0].description}</div>
    <div class="weather-info">Temperatura: ${data.main.temp}°C</div>
    <div class="weather-info">Humedad: ${data.main.humidity}%</div>
    <div class="weather-info">Viento: ${data.wind.speed} m/s</div>
  `;
}

// Función para mostrar un mensaje de error en la página
function displayError(message) {
  const weatherResult = document.getElementById('weatherResult'); // Obtener el contenedor de resultados
  weatherResult.innerHTML = `<div class="error">${message}</div>`; // Mostrar el mensaje de error en el HTML
}
