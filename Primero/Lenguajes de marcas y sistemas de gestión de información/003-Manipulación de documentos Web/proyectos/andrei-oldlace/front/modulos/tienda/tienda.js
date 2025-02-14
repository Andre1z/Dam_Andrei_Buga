document.addEventListener('DOMContentLoaded', function () {
    console.log('Tienda.js is loaded and ready!');

    const products = document.querySelectorAll('.product');
    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];

    products.forEach(product => {
        product.addEventListener('click', function () {
            const productName = this.getAttribute('data-name');
            addToCart(productName);
            showCartMessage(productName);
        });
    });

    function addToCart(productName) {
        cartItems.push(productName);
        localStorage.setItem('cart', JSON.stringify(cartItems));
    }

    function showCartMessage(productName) {
        // Create a message box
        const messageBox = document.createElement('div');
        messageBox.className = 'cart-message';
        messageBox.innerHTML = `
            <p>${productName} added to cart</p>
            <button id="continue-shopping">Seguir comprando</button>
            <button id="process-payment">Procesar el pago</button>
        `;

        // Append the message box to the body
        document.body.appendChild(messageBox);

        // Add event listeners to the buttons
        document.getElementById('continue-shopping').addEventListener('click', function () {
            document.body.removeChild(messageBox);
        });

        document.getElementById('process-payment').addEventListener('click', function () {
            window.location.href = '../carrito/carrito.php';
        });
    }

    if (document.getElementById('cart-items')) {
        displayCartItems();
    }

    function displayCartItems() {
        const cartItemsDiv = document.getElementById('cart-items');
        if (cartItems.length === 0) {
            cartItemsDiv.innerHTML = '<p>Your cart is empty.</p>';
        } else {
            cartItemsDiv.innerHTML = '<ul>' + cartItems.map(item => `<li>${item}</li>`).join('') + '</ul>';
        }
    }
});