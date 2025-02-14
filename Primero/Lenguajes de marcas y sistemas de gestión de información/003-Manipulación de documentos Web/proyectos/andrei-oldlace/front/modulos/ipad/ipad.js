// theme.js

// Get the theme toggle button
const themeToggle = document.getElementById('themeToggle');

// Function to toggle the theme
function toggleTheme() {
    const htmlElement = document.documentElement;
    const currentTheme = htmlElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';

    // Update the theme attribute
    htmlElement.setAttribute('data-theme', newTheme);

    // Update the button text
    themeToggle.textContent = `Cambiar a Modo ${newTheme === 'light' ? 'Oscuro' : 'Claro'}`;

    // Save the theme preference in a cookie
    document.cookie = `theme=${newTheme}; path=/; max-age=31536000`; // Expires in 1 year
}

// Add event listener to the toggle button
themeToggle.addEventListener('click', toggleTheme);

// Check for saved theme preference on page load
window.addEventListener('load', () => {
    const savedTheme = document.cookie.split('; ').find(row => row.startsWith('theme='))?.split('=')[1];
    if (savedTheme) {
        document.documentElement.setAttribute('data-theme', savedTheme);
        themeToggle.textContent = `Cambiar a Modo ${savedTheme === 'light' ? 'Oscuro' : 'Claro'}`;
    }
});