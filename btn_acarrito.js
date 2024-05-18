function handleAddToCart(event) {
    event.preventDefault(); // Prevenir el comportamiento por defecto del enlace
    
    if (isUserLoggedIn()) {
        // Lógica para agregar al carrito
        console.log('Artículo agregado al carrito.'); // Mensaje de depuración
    } else {
        redirectToLogin();
    }
}

function isUserLoggedIn() {
    // Verificar si el usuario ha iniciado sesión (simulado con localStorage)
    // Devuelve true si el usuario ha iniciado sesión, de lo contrario, false
    return localStorage.getItem('isLoggedIn') === 'true';
}

function redirectToLogin() {
    // Redirigir al usuario a la página de inicio de sesión
    window.location.href = '/login.php';
}

// Seleccionar todos los botones "Agregar al carrito" y agregar un listener de clic a cada uno
document.querySelectorAll('.add-to-cart-btn').forEach(function(button) {
    button.addEventListener('click', handleAddToCart);
});
