document.addEventListener('DOMContentLoaded', function() {
    console.log('Carrito.js is loaded and ready!');

    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    displayCartItems();

    function displayCartItems() {
        const cartItemsDiv = document.getElementById('cart-items');
        if (cartItems.length === 0) {
            cartItemsDiv.innerHTML = '<p>Your cart is empty.</p>';
        } else {
            cartItemsDiv.innerHTML = '<ul>' + cartItems.map(item => `<li>${item} <button class="remove-item" data-name="${item}">Remove</button></li>`).join('') + '</ul>';
        }

        const removeButtons = document.querySelectorAll('.remove-item');
        removeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const itemName = this.getAttribute('data-name');
                removeFromCart(itemName);
                displayCartItems();
            });
        });
    }

    function removeFromCart(itemName) {
        const index = cartItems.indexOf(itemName);
        if (index > -1) {
            cartItems.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cartItems));
        }
    }

    document.getElementById('empty-cart').addEventListener('click', function() {
        cartItems.length = 0;
        localStorage.setItem('cart', JSON.stringify(cartItems));
        displayCartItems();
    });
});


    document.getElementById('pay-cart').addEventListener('click', function() {
        if (cartItems.length === 0) {
            alert('Your cart is empty. Please add items before proceeding to payment.');
        } else {
            alert('Proceeding to payment...');
            // Here you can add the logic to redirect to a payment page or handle the payment process
            // For example: window.location.href = '/payment/process';
        }
    });
