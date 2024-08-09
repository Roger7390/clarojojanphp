<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes Claro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Planes Claro</h1>
        <div class="plans">
            <div class="plan">
                <h2>Plan Básico</h2>
                <p>Incluye 5GB de datos, llamadas ilimitadas y mensajes ilimitados.</p>
                <p class="price">$20.000/mes</p>
                <button class="buy-now" onclick="buyNow('https://example.com/plan-basico')">Comprar Ahora</button>
            </div>
            <div class="plan">
                <h2>Plan Avanzado</h2>
                <p>Incluye 10GB de datos, llamadas ilimitadas y mensajes ilimitados.</p>
                <p class="price">$30.000/mes</p>
                <button class="buy-now" onclick="buyNow('https://example.com/plan-avanzado')">Comprar Ahora</button>
            </div>
            <div class="plan">
                <h2>Plan Premium</h2>
                <p>Incluye 20GB de datos, llamadas ilimitadas y mensajes ilimitados.</p>
                <p class="price">$40.000/mes</p>
                <button class="buy-now" onclick="buyNow('https://example.com/plan-premium')">Comprar Ahora</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
