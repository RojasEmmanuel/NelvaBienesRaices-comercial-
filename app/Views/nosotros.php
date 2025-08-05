<!DOCTYPE html>
<html lang="es">
<head>
    <title>Nosotros - Bienes Raíces</title>


    <style>
        /* Estilos para el contenido de la página Nosotros */
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }
        
        .hero-content h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .hero-content p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* Sección Nosotros */
        .about-section {
            padding: 80px 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 36px;
            color: #2c3e50;
            margin-bottom: 15px;
        }
        
        .section-title p {
            color: #7f8c8d;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .about-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 40px;
            margin-bottom: 60px;
        }
        
        .about-text {
            flex: 1;
            min-width: 300px;
        }
        
        .about-text h3 {
            font-size: 28px;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        
        .about-text p {
            margin-bottom: 15px;
            color: #555;
        }
        
        .about-image {
            flex: 1;
            min-width: 300px;
        }
        
        .about-image img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        /* Equipo */
        .team-section {
            background-color: #f9f9f9;
            padding: 80px 5%;
        }
        
        .team-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .team-members {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }
        
        .team-member {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 280px;
            text-align: center;
            transition: transform 0.3s;
            display: flex; /* Agregamos display flex */
            flex-direction: column; /* Organizamos el contenido en columna */
        }
        
        .team-member:hover {
            transform: translateY(-10px);
        }
        
        /* Modifica estos estilos en la sección de CSS */
        .member-image {
            height: 380px; /* Aumentamos la altura para imágenes verticales */
            overflow: hidden;
            position: relative; /* Agregamos posición relativa */
        }
        
        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: contain; /* Cambiamos a contain para mantener la proporción */
            object-position: center; /* Centramos la imagen */
            background-color: #f9f9f9; /* Color de fondo para los espacios vacíos */
        }
        
        .member-info {
            padding: 20px;
        }
        
        .member-info h4 {
            font-size: 20px;
            color: #2c3e50;
            margin-bottom: 5px;
        }
        
        .member-info p {
            color: #e74c3c;
            font-weight: 500;
            margin-bottom: 15px;
        }
        
        /* Valores */
        .values-section {
            padding: 80px 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .value-card {
            text-align: center;
            padding: 30px;
            border-radius: 8px;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }
        
        .value-card:hover {
            transform: translateY(-5px);
        }
        
        .value-icon {
            font-size: 40px;
            color: #e74c3c;
            margin-bottom: 20px;
        }
        
        .value-card h4 {
            font-size: 20px;
            color: #2c3e50;
            margin-bottom: 15px;
        }
        
        .value-card p {
            color: #7f8c8d;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero {
                margin-top: 60px;
                height: 50vh;
            }
            
            .hero-content h1 {
                font-size: 36px;
            }
            
            .hero-content p {
                font-size: 18px;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .section-title h2 {
                font-size: 30px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<!-- Contenido de la página Nosotros -->
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Sobre Nosotros</h1>
            <p>Conoce más sobre nuestra empresa y nuestro compromiso con encontrar el hogar perfecto para ti</p>
        </div>
    </section>

    <!-- Sección Nosotros -->
    <section class="about-section">
        <div class="section-title">
            <h2>Nuestra Historia</h2>
            <p>Más de 5 años ayudando a las personas a encontrar su hogar ideal</p>
        </div>
        
        <div class="about-content">
            <div class="about-text">
                <h3>Desarrolladora Nelva Bienes Raices S de R. L de C. V Desde 2019</h3>
                <p>Nelva Bienes Raíces es una empresa inmobiliaria 100% oaxaqueña con más de 5 años de experiencia, legalmente constituida cuya razón social es: Desarrolladora Nelva Bienes Raíces S. DE R.L DE C.V, la cual ofrece soluciones de alta calidad en la compra, venta y desarrollo de propiedades en el estado de oaxaca.</p>
            </div>
            <div class="about-image">
                <img src="images/nosotros/rfc.webp" alt="Oficina de Bienes Raíces">
            </div>
        </div>

        <div class="about-content">
            <div class="about-text">
                <h3>Misión</h3>
                <p>Nos apasiona crear historias para que tú y tu familia cuenten con soluciones inmobiliarias efectivas, con garantía y alta plusvalía en las playas más importantes del estado de Oaxaca. Nos enfocamos en brindarte un servicio confiable y seguro, ayudándote a hacer realidad el hogar de tus sueños.</p>
            </div>

            <div class="about-text">
                <h3>Visión</h3>
                <p>Consolidarnos como una empresa líder e innovadora en el estado de Oaxaca, capaz de brindarte soluciones inmobiliarias integrales que generen bienestar económico, social y ambiental para ti y tu familia. Buscamos ser una referencia en el sector inmobiliario, comprometidos con el desarrollo sostenible y la satisfacción de nuestros clientes.</p>
            </div>

        </div>

                <div class="about-content">
            <div class="about-image">
                <img src="images/nosotros/asian.webp" alt="Oficina de Bienes Raíces">
            </div>
            <div class="about-image">
                <img src="images/nosotros/family_house.webp" alt="Oficina de Bienes Raíces">
            </div>
        </div>
    </section>

    <!-- Sección Equipo -->
    <section class="team-section">
        <div class="team-container">
            <div class="section-title">
                <h2>Nuestro Equipo</h2>
                <p>Profesionales dedicados a brindarte el mejor servicio</p>
            </div>

            <div class="team-members">

                <div class="team-member">
                    <div class="member-image">
                        <img src="images/nosotros/imagen1.webp" alt="Agente 3">
                    </div>
                    <div class="member-info">
                        <h4>Nelson Valencia Juárez</h4>
                        <p>Director General</p>
                    </div>
                </div>
                
            </div>
            
            <div class="team-members">
                
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/nosotros/imagen2.webp">
                    </div>
                    <div class="member-info">
                        <h4>Victoria López García</h4>
                        <p>Servicios Administrativos Costa</p>
                        <p>Se encarga de los servicios administrativos en la zona costera de Oaxaca. Su labor es esencial para garantizar la organización y eficiencia de las operaciones en esta región, asegurando que todos los procesos sean adecuados y gestionados de forma efectiva.</p>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/nosotros/imagen3.webp" alt="Agente 2">
                    </div>
                    <div class="member-info">
                        <h4>Hermilo Valencia Santiago</h4>
                        <p>Gestor de Propiedades</p>
                    </div>
                </div>

                <div class="team-member">
                    <div class="member-image">
                        <img src="images/nosotros/imagen4.webp" alt="Agente 2">
                    </div>
                    <div class="member-info">
                        <h4>Williams Hernández Gómez</h4>
                        <p>Servicios Administrativos Istmo</p>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>

    <!-- Sección Valores -->
    <section class="values-section">
        <div class="section-title">
            <h2>Nuestros Valores</h2>
            <p>Principios que guían nuestro trabajo diario</p>
        </div>
        
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h4>Confianza</h4>
                <p>Construimos relaciones basadas en la honestidad y transparencia en cada transacción.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-star"></i>
                </div>
                <h4>Excelencia</h4>
                <p>Nos esforzamos por superar las expectativas en cada servicio que ofrecemos.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h4>Pasión</h4>
                <p>Amamos lo que hacemos y eso se refleja en nuestro compromiso con cada cliente.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h4>Innovación</h4>
                <p>Utilizamos tecnología de punta para ofrecer soluciones creativas y eficientes.</p>
            </div>
        </div>
    </section>

    <!-- Sección Valores (existente) -->
<section class="values-section">
    <!-- ... contenido actual de valores ... -->
</section>

<!-- Nueva sección Filosofía (agregar esto justo después de values-section) -->
<section class="philosophy-section" style="background-color: #f8f9fa; padding: 80px 5%;">
    <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
        <h2 style="font-size: 36px; color: #2c3e50; margin-bottom: 20px;">La mejor agencia inmobiliaria que puedes encontrar</h2>
        <p style="font-size: 18px; color: #555; max-width: 800px; margin: 0 auto 40px;">
            Somos líderes en ofrecer soluciones inmobiliarias efectivas y con alta plusvalía en las mejores zonas de Oaxaca.
        </p>
        
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin-bottom: 40px;">
            <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); width: 300px; text-align: left;">
                <h3 style="color: #e74c3c; margin-bottom: 15px; font-size: 22px;">✓ Los Mejores Precios</h3>
                <p style="color: #555;">Garantizamos las mejores opciones del mercado con excelente relación calidad-precio.</p>
            </div>
            
            <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); width: 300px; text-align: left;">
                <h3 style="color: #e74c3c; margin-bottom: 15px; font-size: 22px;">✓ Agencia Confiable</h3>
                <p style="color: #555;">Más de 5 años de experiencia respaldan nuestra seriedad y profesionalismo.</p>
            </div>
            
            <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); width: 300px; text-align: left;">
                <h3 style="color: #e74c3c; margin-bottom: 15px; font-size: 22px;">✓ Precios Accesibles</h3>
                <p style="color: #555;">Opciones para todos los presupuestos sin comprometer calidad o ubicación.</p>
            </div>
        </div>
        
        <div style="background: #e74c3c; color: white; padding: 20px; border-radius: 8px; display: inline-block;">
            <h3 style="font-size: 24px; margin-bottom: 10px;">FILOSOFÍA NELVA</h3>
            <p style="font-size: 18px; font-weight: bold;">+5 Años de experiencia</p>
        </div>
    </div>
</section>
</body>
</html>