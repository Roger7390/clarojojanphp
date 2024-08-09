function buyNow(url) {
    // Muestra un mensaje de confirmación antes de redirigir
    alert('¡Gracias por tu compra! Serás redirigido al enlace correspondiente.');
    
    // Redirige al usuario al enlace proporcionado después de 1 segundo
    setTimeout(function() {
        window.location.href = url;
    }, 1000);
}
