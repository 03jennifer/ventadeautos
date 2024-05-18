<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Autos</title>
    <link rel="stylesheet" href="catalogo_styles.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<script src="btn_acarrito.js"></script>
<body>
<div class="toolbar">
        <div class="toolbar-container">
            <div class="toolbar-section">
                <a href="#">Registrarse</a>
            </div>
            <div class="toolbar-section">
                <a href="login.php">Iniciar Sesión</a>
            </div>
            <div class="toolbar-section">
                <a href="index.php">Promociones</a>
            </div>
            <div class="toolbar-section">
                <a href="catalogo.php">Catálogo</a>
            </div>
            <div class="toolbar-section">
                <a href="#" id="carrito-enlace">Carrito (<span id="carrito-contador">0</span>)</a>
            </div>
        </div>
    </div>
<!-- Botón para regresar arriba -->
<button class="scroll-to-top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">&#8593;</button>
<script>
    // Mostrar u ocultar el botón de regresar dependiendo de la posición del scroll
    window.addEventListener('scroll', function() {
        var scrollPosition = window.pageYOffset;
        var scrollToShowButton = 200; // Puedes ajustar esta posición según tu preferencia

        var scrollToTopButton = document.querySelector('.scroll-to-top');
        if (scrollPosition > scrollToShowButton) {
            scrollToTopButton.style.display = 'block';
        } else {
            scrollToTopButton.style.display = 'none';
        }
    });
</script>

<div class="navbar">
    <a href="#ford">Ford</a>
    <a href="#audi">Audi</a>
    <a href="#chevrolet">Chevrolet</a>
    <a href="#toyota">Toyota</a>
    <a href="#bmw">BMW</a>
    <a href="#mercedes">Mercedes</a>
</div>

<div class="content">
    <div id="ford" class="section">
        <h2>Ford</h2>
        <div class="model-container">
            <img src="https://media.cgtrader.com/variants/hwFLagL55QFLewETNs3gqY7o/508c09fe26e63b93baec6d888aa2950650a509b5e04f2f03a4f2af52a04363ea/1.485.jpg" alt="Ford Fiesta">
            <div class="model-info">
                <h3>Ford Fiesta</h3>
                <p>El Ford Fiesta es un vehículo compacto y ágil, perfecto para la ciudad. Con una elegante carrocería, este automóvil ofrece un excelente rendimiento en combustible y una experiencia de conducción emocionante. Equipado con características avanzadas de seguridad y entretenimiento, el Ford Fiesta garantiza comodidad y conveniencia en cada viaje.</p>
                <h4>Especificaciones:</h4>
                <ul>
                    <li>Motor: 1.6L Ti-VCT</li>
                    <li>Potencia: 120 HP</li>
                    <li>Transmisión: Automática de 6 velocidades</li>
                    <li>Consumo de combustible: 28 mpg en ciudad, 36 mpg en carretera</li>
                </ul>
                <a href="#" class="add-to-cart-btn" id="ford-fiesta-btn">Agregar al carrito</a>

            </div>
        </div>
        <div class="model-container">
            <img src="https://media.cgtrader.com/variants/hwFLagL55QFLewETNs3gqY7o/508c09fe26e63b93baec6d888aa2950650a509b5e04f2f03a4f2af52a04363ea/1.485.jpg" alt="Ford Focus">
            <div class="model-info">
                <h3>Ford Focus</h3>
                <p>El Ford Focus es un sedán deportivo con un diseño moderno y dinámico. Ofrece un rendimiento excepcional y una experiencia de manejo emocionante. Equipado con tecnología innovadora y características de seguridad avanzadas, el Ford Focus brinda comodidad y tranquilidad en cada viaje.</p>
                <h4>Especificaciones:</h4>
                <ul>
                    <li>Motor: 2.0L EcoBoost</li>
                    <li>Potencia: 160 HP</li>
                    <li>Transmisión: Automática de 8 velocidades</li>
                    <li>Consumo de combustible: 26 mpg en ciudad, 34 mpg en carretera</li>
                </ul>
                <a href="#" class="add-to-cart-btn">Agregar al carrito</a>
            </div>
        </div>
        <!-- Más modelos de Ford -->
    </div>

    <div id="audi" class="section">
        <h2>Audi</h2>
        <div class="model-container">
            <img src="https://media.cgtrader.com/variants/hwFLagL55QFLewETNs3gqY7o/508c09fe26e63b93baec6d888aa2950650a509b5e04f2f03a4f2af52a04363ea/1.485.jpg" alt="Audi A3">
            <div class="model-info">
                <h3>Audi A3</h3>
                <p>El Audi A3 combina estilo, rendimiento y tecnología en un paquete elegante. Con su interior lujoso y suave, este automóvil proporciona una experiencia de conducción de primera clase. Equipado con lo último en sistemas de asistencia al conductor y entretenimiento a bordo, el Audi A3 ofrece comodidad y conveniencia en cada viaje.</p>
                <h4>Especificaciones:</h4>
                <ul>
                    <li>Motor: 2.0L TFSI</li>
                    <li>Potencia: 200 HP</li>
                    <li>Transmisión: S tronic de 7 velocidades</li>
                    <li>Consumo de combustible: 24 mpg en ciudad, 32 mpg en carretera</li>
                </ul>
                <a href="#" class="add-to-cart-btn" data-item="ford-fiesta">Agregar al carrito</a>
            </div>
        </div>
        <div class="model-container">
            <img src="https://media.cgtrader.com/variants/hwFLagL55QFLewETNs3gqY7o/508c09fe26e63b93baec6d888aa2950650a509b5e04f2f03a4f2af52a04363ea/1.485.jpg" alt="Audi A4">
            <div class="model-info">
                <h3>Audi A4</h3>
                <p>El Audi A4 es un sedán de lujo con un diseño elegante y un rendimiento excepcional. Con su potente motor y su avanzada tecnología de suspensión, este automóvil ofrece una conducción suave y cómoda. Equipado con características de seguridad de última generación, el Audi A4 brinda tranquilidad en cada viaje.</p>
                <h4>Especificaciones:</h4>
                <ul>
                    <li>Motor: 2.0L TFSI</li>
                    <li>Potencia: 250 HP</li>
                    <li>Transmisión: S tronic de 7 velocidades</li>
                    <li>Consumo de combustible: 22 mpg en ciudad, 30 mpg en carretera</li>
                </ul>
                <a href="#" class="add-to-cart-btn" data-item="ford-fiesta">Agregar al carrito</a>
            </div>
        </div>
        <!-- Más modelos de Audi -->
    </div>
    <div id="chevrolet" class="section">
    <h2>Chevrolet</h2>
    <div class="model-container">
        <img src="https://media.cgtrader.com/variants/hwFLagL55QFLewETNs3gqY7o/508c09fe26e63b93baec6d888aa2950650a509b5e04f2f03a4f2af52a04363ea/1.485.jpg" alt="Chevrolet Camaro">
        <div class="model-info">
            <h3>Chevrolet Camaro</h3>
            <p>El Chevrolet Camaro es un automóvil deportivo legendario que combina un diseño aerodinámico con un rendimiento impresionante. Con su potente motor V8 y su suspensión deportiva, el Camaro ofrece una experiencia de conducción emocionante. Equipado con tecnología avanzada y características de seguridad, el Chevrolet Camaro es el sueño de todo amante de la velocidad.</p>
            <h4>Especificaciones:</h4>
            <ul>
                <li>Motor: 6.2L V8</li>
                <li>Potencia: 455 HP</li>
                <li>Transmisión: Manual de 6 velocidades</li>
                <li>Consumo de combustible: 16 mpg en ciudad, 24 mpg en carretera</li>
            </ul>
            <a href="#" class="add-to-cart-btn" data-item="ford-fiesta">Agregar al carrito</a>
        </div>
    </div>
    <div class="model-container">
        <img src="https://media.cgtrader.com/variants/hwFLagL55QFLewETNs3gqY7o/508c09fe26e63b93baec6d888aa2950650a509b5e04f2f03a4f2af52a04363ea/1.485.jpg" alt="Chevrolet Cruze">
        <div class="model-info">
            <h3>Chevrolet Cruze</h3>
            <p>El Chevrolet Cruze es un sedán compacto diseñado para ofrecer eficiencia y estilo. Con su diseño elegante y su interior espacioso, el Cruze ofrece comodidad y conveniencia. Equipado con características de seguridad avanzadas y tecnología de última generación, el Chevrolet Cruze es ideal tanto para viajes diarios como para aventuras en carretera.</p>
            <h4>Especificaciones:</h4>
            <ul>
                <li>Motor: 1.4L Turbo</li>
                <li>Potencia: 153 HP</li>
                <li>Transmisión: Automática de 6 velocidades</li>
                <li>Consumo de combustible: 28 mpg en ciudad, 38 mpg en carretera</li>
            </ul>
            <a href="#" class="add-to-cart-btn" data-item="ford-fiesta">Agregar al carrito</a>
        </div>
    </div>
    <!-- Más modelos de Chevrolet -->
</div>

<div id="toyota" class="section">
    <h2>Toyota</h2>
    <div class="model-container">
        <img src="https://media.cgtrader.com/variants/hwFLagL55QFLewETNs3gqY7o/508c09fe26e63b93baec6d888aa2950650a509b5e04f2f03a4f2af52a04363ea/1.485.jpg" alt="Toyota Corolla">
        <div class="model-info">
            <h3>Toyota Corolla</h3>
            <p>El Toyota Corolla es un automóvil compacto confiable y económico que ofrece una conducción suave y eficiente. Con su reputación legendaria de durabilidad y bajo mantenimiento, el Corolla es una opción popular para aquellos que buscan un vehículo práctico y seguro. Equipado con características de seguridad avanzadas y tecnología intuitiva, el Toyota Corolla es el compañero perfecto para la vida diaria.</p>
            <h4>Especificaciones:</h4>
            <ul>
                <li>Motor: 1.8L de 4 cilindros</li>
                <li>Potencia: 132 HP</li>
                <li>Transmisión: Automática de continuamente variable (CVT)</li>
                <li>Consumo de combustible: 30 mpg en ciudad, 38 mpg en carretera</li>
            </ul>
            <a href="#" class="add-to-cart-btn" data-item="ford-fiesta">Agregar al carrito</a>
        </div>
    </div>
    <div class="model-container">
        <img src="https://media.cgtrader.com/variants/hwFLagL55QFLewETNs3gqY7o/508c09fe26e63b93baec6d888aa2950650a509b5e04f2f03a4f2af52a04363ea/1.485.jpg" alt="Toyota RAV4">
        <div class="model-info">
            <h3>Toyota RAV4</h3>
            <p>La Toyota RAV4 es una SUV versátil que combina la comodidad de conducción de un automóvil con la capacidad de un vehículo utilitario deportivo. Con su diseño elegante y aerodinámico, la RAV4 es perfecta tanto para aventuras fuera de la carretera como para viajes urbanos. Equipada con tracción en las cuatro ruedas y características de seguridad avanzadas, la Toyota RAV4 ofrece rendimiento y seguridad en cualquier terreno.</p>
            <h4>Especificaciones:</h4>
            <ul>
                <li>Motor: 2.5L de 4 cilindros</li>
                <li>Potencia: 203 HP</li>
                <li>Transmisión: Automática de 8 velocidades</li>
                <li>Consumo de combustible: 27 mpg en ciudad, 35 mpg en carretera</li>
            </ul>
            <a href="#" class="add-to-cart-btn" data-item="ford-fiesta">Agregar al carrito</a>
        </div>
    </div>
    <!-- Más modelos de Toyota -->
</div>

<div id="bmw" class="section">
    <h2>BMW</h2>
    <div class="model-container">
        <img src="https://media.cgtrader.com/variants/hwFLagL55QFLewETNs3gqY7o/508c09fe26e63b93baec6d888aa2950650a509b5e04f2f03a4f2af52a04363ea/1.485.jpg" alt="BMW Serie 3">
        <div class="model-info">
            <h3>BMW Serie 3</h3>
            <p>El BMW Serie 3 es un sedán deportivo de lujo que ofrece un equilibrio perfecto entre rendimiento y elegancia. Con su diseño aerodinámico y su potente motor, el Serie 3 brinda una experiencia de conducción emocionante y dinámica. Equipado con tecnología de vanguardia y acabados de alta calidad, el BMW Serie 3 es la opción ideal para aquellos que buscan lujo y rendimiento.</p>
            <h4>Especificaciones:</h4>
            <ul>
                <li>Motor: 2.0L TwinPower Turbo</li>
                <li>Potencia: 255 HP</li>
                <li>Transmisión: Automática de 8 velocidades</li>
                <li>Consumo de combustible: 26 mpg en ciudad, 36 mpg en carretera</li>
            </ul>
            <a href="#" class="add-to-cart-btn" data-item="ford-fiesta">Agregar al carrito</a>
        </div>
    </div>
    <div class="model-container">
        <img src="https://media.cgtrader.com/variants/hwFLagL55QFLewETNs3gqY7o/508c09fe26e63b93baec6d888aa2950650a509b5e04f2f03a4f2af52a04363ea/1.485.jpg" alt="BMW X5">
        <div class="model-info">
            <h3>BMW X5</h3>
            <p>El BMW X5 es un SUV de lujo que combina el rendimiento de un automóvil deportivo con la versatilidad de un vehículo utilitario deportivo. Con su diseño elegante y su interior espacioso, el X5 ofrece comodidad y conveniencia en cualquier viaje. Equipado con características de seguridad avanzadas y tecnología innovadora, el BMW X5 es la opción perfecta para aquellos que buscan lujo y aventura.</p>
            <h4>Especificaciones:</h4>
            <ul>
                <li>Motor: 3.0L TwinPower Turbo</li>
                <li>Potencia: 335 HP</li>
                <li>Transmisión: Automática de 8 velocidades</li>
                <li>Consumo de combustible: 20 mpg en ciudad, 27 mpg en carretera</li>
            </ul>
            <a href="#" class="add-to-cart-btn" data-item="ford-fiesta">Agregar al carrito</a>
        </div>
    </div>
    <!-- Más modelos de BMW -->
</div>
<div id="mercedes" class="section">
    <h2>Mercedes</h2>
    <div class="model-container">
        <img src="https://media.cgtrader.com/variants/hwFLagL55QFLewETNs3gqY7o/508c09fe26e63b93baec6d888aa2950650a509b5e04f2f03a4f2af52a04363ea/1.485.jpg" alt="Mercedes-Benz Clase C">
        <div class="model-info">
            <h3>Mercedes-Benz Clase C</h3>
            <p>El Mercedes-Benz Clase C es un sedán de lujo que combina elegancia con rendimiento. Con su diseño aerodinámico y su interior lujoso, el Clase C ofrece una experiencia de conducción sofisticada y cómoda. Equipado con tecnología innovadora y sistemas de asistencia al conductor, el Mercedes-Benz Clase C redefine el estándar de excelencia en su clase.</p>
            <h4>Especificaciones:</h4>
            <ul>
                <li>Motor: 2.0L Turbo</li>
                <li>Potencia: 255 HP</li>
                <li>Transmisión: Automática de 9 velocidades</li>
                <li>Consumo de combustible: 23 mpg en ciudad, 33 mpg en carretera</li>
            </ul>
            <a href="#" class="add-to-cart-btn" data-item="ford-fiesta">Agregar al carrito</a>
        </div>
    </div>
    <div class="model-container">
        <img src="https://media.cgtrader.com/variants/hwFLagL55QFLewETNs3gqY7o/508c09fe26e63b93baec6d888aa2950650a509b5e04f2f03a4f2af52a04363ea/1.485.jpg" alt="Mercedes-Benz GLC">
        <div class="model-info">
            <h3>Mercedes-Benz GLC</h3>
            <p>El Mercedes-Benz GLC es una SUV de lujo que ofrece estilo, rendimiento y versatilidad. Con su diseño elegante y su interior espacioso, el GLC es perfecto para cualquier aventura, ya sea en la ciudad o fuera de ella. Equipado con características de seguridad avanzadas y tecnología de vanguardia, el Mercedes-Benz GLC es la elección ideal para aquellos que buscan lujo y comodidad.</p>
            <h4>Especificaciones:</h4>
            <ul>
                <li>Motor: 2.0L Turbo</li>
                <li>Potencia: 255 HP</li>
                <li>Transmisión: Automática de 9 velocidades</li>
                <li>Consumo de combustible: 22 mpg en ciudad, 29 mpg en carretera</li>
            </ul>
            <a href="#" class="add-to-cart-btn">Agregar al carrito</a>
        </div>
    </div>
    <!-- Más modelos de Mercedes -->
</div>

    <!-- Más marcas y modelos aquí -->

</div>

</body>
</html>

