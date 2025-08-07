<?= view('templates/navbar', ['title' => 'Andromeda - Nelva Bienes Raíces']) ?>

<style>
    :root {
        --primary: #0a3a21;
        --primary-light: #1a5c3a;
        --primary-dark: #062113;
        --secondary: #d4af37;
        --secondary-light: #e8c874;
        --secondary-dark: #b38d2c;
        --light: #f8f9fa;
        --lighter: #fdfdfd;
        --dark: #212529;
        --darker: #121416;
        --gray: #6c757d;
        --transition: all 0.3s ease;
        --shadow-sm: 0 2px 8px rgba(0,0,0,0.08);
        --shadow-md: 0 4px 12px rgba(0,0,0,0.12);
        --shadow-lg: 0 8px 24px rgba(0,0,0,0.16);
    }
    
    
    body {
        font-family: 'Roboto';
        line-height: 1.6;
        color: var(--dark);
        overflow-x: hidden;
    }
    
    
    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .section {
        padding: 80px 0;
        position: relative;
    }
    
    .section-title {
        text-align: center;
        margin-bottom: 40px;
        color: var(--primary);
        font-size: 2.5rem;
        position: relative;
    }
    
    .section-title:after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--secondary), var(--secondary-light));
        margin: 5px auto 0;
        border-radius: 4px;
    }
    
    .btn {
        display: inline-block;
        padding: 12px 30px;
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        color: white;
        border: none;
        border-radius: 30px;
        font-weight: 600;
        text-decoration: none;
        transition: var(--transition);
        cursor: pointer;
        box-shadow: var(--shadow-sm);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.9rem;
    }
    
    .btn:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-md);
        background: linear-gradient(135deg, var(--primary-dark), var(--primary));
    }
    
    .btn-secondary {
        background: linear-gradient(135deg, var(--secondary), var(--secondary-light));
    }
    
    .btn-secondary:hover {
        background: linear-gradient(135deg, var(--secondary-dark), var(--secondary));
    }
    
    .text-center {
        text-align: center;
    }
    
    .mb-30 {
        margin-bottom: 30px;
    }
    
    /* Hero Section Mejorada */
    .hero {
        height: 90vh;
        min-height: 600px;
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
    }
    
    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('<?= base_url('images/RealCampestre/parallax.png') ?>') center/cover no-repeat;
        background-color: rgba(0, 0, 0, 0.5); /* Color negro con 50% de opacidad */
        background-blend-mode: multiply; /* Mezcla los colores para el efecto de oscurecimiento */
        z-index: 1;
    }
    
    .hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('') center/cover no-repeat;
        z-index: 0;
        animation: zoomEffect 20s infinite alternate;
    }
    
    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 900px;
        padding: 0 20px;
        animation: fadeInUp 1s ease;
    }
    
    .hero h1 {
        font-size: 3.5rem;
        margin-bottom: 15px;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
        letter-spacing: 1px;
    }
    
    .hero p {
        font-size: 1.3rem;
        margin-bottom: 25px;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .hero .price {
        font-size: 2.5rem;
        color: var(--secondary);
        font-weight: 700;
        margin: 25px 0;
        display: block;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }
    
    .hero-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    /* Info Grid Mejorada */
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .info-card {
        background: var(--lighter);
        border-radius: 12px;
        padding: 30px;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        border-top: 4px solid var(--secondary);
        text-align: center;
    }
    
    .info-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg);
    }
    
    .info-card h3 {
        color: var(--primary);
        margin-bottom: 15px;
        font-size: 1.3rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    
    .info-card p {
        font-size: 1.1rem;
        color: var(--gray);
    }
    
    /* Features & Amenities Section Mejorada */
    .features-section {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        position: relative;
        overflow: hidden;
    }
    
    .features-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('<?= base_url('images/RealCampestre/real1.png') ?>') center/cover no-repeat;
        opacity: 0.1;
        z-index: 0;
    }
    
    .features-container {
        position: relative;
        z-index: 1;
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }
    
    .feature-item {
        background: white;
        padding: 25px 15px;
        border-radius: 10px;
        text-align: center;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        border-bottom: 3px solid transparent;
    }
    
    .feature-item:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
        border-bottom-color: var(--secondary);
    }
    
    .feature-icon {
        color: var(--secondary);
        font-size: 2rem;
        margin-bottom: 15px;
    }
    
    .feature-item h3 {
        font-size: 1.5rem;
        margin-bottom: 5px;
        color: var(--primary);
    }
    
    .feature-item p {
        font-size: 0.9rem;
        color: var(--gray);
    }
    
    .amenities-section {
        background: white;
        padding: 60px 0;
    }
    
    .amenities-container {
        background: var(--primary);
        border-radius: 15px;
        padding: 40px;
        color: white;
        box-shadow: var(--shadow-lg);
        position: relative;
        overflow: hidden;
        margin: 0;
    }
    
    .amenities-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('<?= base_url('images/RealCampestre/parallax.png') ?>') center/cover no-repeat;
        opacity: 0.3;
        z-index: 0;
    }
    
    .amenities-title {
        color: white;
        text-align: center;
        margin-bottom: 30px;
        position: relative;
        z-index: 1;
        font: "Roboto";
    }
    
    .amenities-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 15px;
        position: relative;
        z-index: 1;
    }
    
    .amenity-item {
        display: flex;
        align-items: center;
        padding: 15px 20px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: var(--transition);
    }
    
    .amenity-item:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateX(5px);
    }
    
    .amenity-icon {
        color: var(--secondary-light);
        margin-right: 15px;
        font-size: 1.2rem;
        min-width: 25px;
    }
    
    /* Gallery Section Mejorada */
    .gallery-section {
        background: var(--lighter);
    }
    
    .gallery-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
    }
    
    .gallery-item {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow-sm);
        height: 250px;
        position: relative;
    }
    
    .gallery-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(0,0,0,0.5), transparent);
        opacity: 0;
        transition: var(--transition);
        z-index: 1;
    }
    
    .gallery-item:hover::before {
        opacity: 1;
    }
    
    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .gallery-item:hover img {
        transform: scale(1.05);
    }
    
    .gallery-caption {
        position: absolute;
        bottom: -50px;
        left: 0;
        width: 100%;
        padding: 15px;
        color: white;
        background: rgba(0,0,0,0.7);
        transition: var(--transition);
        z-index: 2;
    }
    
    .gallery-item:hover .gallery-caption {
        bottom: 0;
    }
    
    /* Map Section Mejorada */
    .map-section2 {
        background: linear-gradient(135deg, var(--primary-light), var(--primary-dark));
        color: white;
    }
    
    .map-container2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }
    
    .map-content2 {
        padding-right: 30px;
    }
    
    .map-content2 h2 {
        color: white;
    }
    
    .map-content2 p {
        margin-bottom: 25px;
        font-size: 1.1rem;
    }
    
    .map-iframe-container2 {
        height: 400px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        border: 5px solid white;
    }
    
    .map-iframe2 {
        width: 100%;
        height: 100%;
        border: none;
    }
    
    /* Contact CTA Mejorado */
    .contact-cta {
        background: url('<?= base_url('images/RealCampestre/parallax.png') ?>') center/cover no-repeat;
        position: relative;
        text-align: center;
        padding: 100px 20px;
    }
    
    .contact-cta::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(10, 58, 33, 0.9), rgba(26, 92, 58, 0.8));
        z-index: 0;
    }
    
    .contact-cta .container {
        position: relative;
        z-index: 1;
    }
    
    .contact-cta h2 {
        color: white;
        margin-bottom: 20px;
        font-size: 2.5rem;
    }
    
    .contact-cta p {
        color: rgba(255,255,255,0.9);
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto 30px;
    }
    
    
    
    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes zoomEffect {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(1.05);
        }
    }
    
    /* Responsive Adjustments */
    @media (max-width: 1200px) {
        .hero h1 {
            font-size: 3rem;
        }
    }
    
    @media (max-width: 992px) {
        .section {
            padding: 60px 0;
        }
        
        .hero {
            height: 70vh;
            min-height: 500px;
        }
        
        .hero h1 {
            font-size: 2.5rem;
        }
        
        .map-container2 {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        .map-content2 {
            padding-right: 0;
            text-align: center;
        }
    }
    
    @media (max-width: 768px) {
        .section {
            padding: 50px 0;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .hero {
            height: 60vh;
            min-height: 450px;
        }
        
        .hero h1 {
            font-size: 2.2rem;
        }
        
        .hero p {
            font-size: 1.1rem;
        }
        
        .hero .price {
            font-size: 2rem;
        }
        
        .features-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .info-grid {
            grid-template-columns: 1fr 1fr;
        }
    }
    
    @media (max-width: 576px) {
        .section {
            padding: 40px 0;
        }
        
        .hero {
            height: 50vh;
            min-height: 400px;
        }
        
        .hero h1 {
            font-size: 1.8rem;
        }
        
        .hero p {
            font-size: 1rem;
        }
        
        .hero-buttons {
            flex-direction: column;
            gap: 10px;
        }
        
        .hero-buttons .btn {
            width: 100%;
            max-width: 250px;
            margin: 0 auto;
        }
        
        .info-grid {
            grid-template-columns: 1fr;
        }
        
        .features-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Hero Section Mejorada -->
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
        <h1>FRACCIONAMIENTO ANDROMEDA</h1>
        <span class="price">$300,000.00</span>
        <p>Exclusivos lotes residenciales desde 200 mtrs</p>
        <p>Santa María Tonameca, Oaxaca</p>
        <div class="hero-buttons">
            <a href="#contact" class="btn btn-secondary">Contactar asesor</a>
            <a href="#gallery" class="btn">Ver galería</a>
        </div>
    </div>
</section>

<!-- Info Grid Mejorada -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Descubre Fraccionamiento Andromeda</h2>
        <p class="text-center mb-30" style="max-width: 800px; margin-left: auto; margin-right: auto;">
            Fraccionamiento Andrómeda es una comunidad planeada para quienes desean vivir en un entorno tranquilo, rodeado de belleza natural y con una alta proyección de plusvalía. Su diseño y ubicación lo convierten en una excelente opción para disfrutar de un estilo de vida relajado cerca del mar, ya sea como residencia permanente o como inversión.
        </p>
        
        <div class="info-grid">
            
            <div class="info-card">
                <h3><i class="fas fa-file-signature"></i> Documentación</h3>
                <p>Acta de Posesión</p>
            </div>
            <div class="info-card">
                <h3><i class="fas fa-calendar-check"></i> Disponibilidad</h3>
                <p>Lotes en venta inmediata</p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section Mejorada -->
<section class="section features-section">
    <div class="container features-container">
        <h2 class="section-title">Características del Desarrollo</h2>
        
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-ruler-combined"></i>
                </div>
                <h3>200 M²</h3>
                <p>Lotes desde</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-road"></i>
                </div>
                <h3>10 M</h3>
                <p>Calles pavimentadas</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>3 MIN</h3>
                <p>Playa Ventanilla</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-route"></i>
                </div>
                <h3>12 M</h3>
                <p>Avenidas principales</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Seguridad</h3>
                <p>Privada controlada</p>
            </div>
           
        </div>
    </div>
</section>

<!-- Amenities Section Mejorada -->
<section class="section">
    <div class="container">
        <div class="amenities-container">
            <h3 class="amenities-title">Ubicación Privilegiada</h3>
            
            <div class="amenities-list">
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-umbrella-beach"></i>
                    </div>
                    <p>Sobre la carretera federal 175 y 200</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <p>A 10 min. De mazunte pueblo mágico</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <p>A 10 min. De punta cometa</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <p>A 2 min. De ventanilla</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <p>A 50 min. De Puerto Escondido y Zicatela</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-sun"></i>
                    </div>
                    <p>A 30 min. De san pedro Pochutla</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Plano del Fraccionamiento -->
<section class="section" style="background-color: #f8f9fa;">
    <div class="container">
        <h2 class="section-title">Plano del Fraccionamiento</h2>
        <div style="max-width: 480px; margin: auto; box-shadow: var(--shadow-lg); border-radius: 12px; overflow: hidden;">
            <img src="<?= base_url('images/Andromeda/plano.webp') ?>" alt="Plano de Andromeda" style="width: 100%; height: auto; display: block;">
        </div>
        <p class="text-center" style="margin-top: 20px; font-size: 1.1rem; color: var(--gray);">
            Diseño urbanístico pensado para maximizar espacios y privacidad, con amplias áreas verdes y distribución estratégica.
        </p>
    </div>
</section>


<!-- Map Section Mejorada -->
<section class="section map-section2" id="contact">
    <div class="container">
        <div class="map-container2">
            <div class="map-content2">
                <h2 class="section-title" style="color: white; text-align: left;">Ubicación Estratégica</h2>
                <p>Ubicado en una de las zonas más atractivas de la costa oaxaqueña, Andrómeda ofrece acceso rápido a las principales playas de Oaxaca y a servicios básicos que garantizan comodidad y funcionalidad. Su excelente ubicación combina el valor de estar cerca del mar con el potencial de crecimiento y desarrollo en una región de alta demanda.</p>
                <a href="#contact-form" class="btn btn-secondary">Solicitar información</a>
            </div>
            <div class="map-iframe-container2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d532.5379816486387!2d-96.57814264768842!3d15.701101750866627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2smx!4v1754586414767!5m2!1ses!2smx" class="map-iframe2" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>


<!-- Gallery Section Mejorada -->
<section class="section gallery-section" id="gallery">
    <div class="container">
        <h2 class="section-title">Galería del Proyecto</h2>
        
        <div class="gallery-container">
            
            <div class="gallery-item">
                <img src="<?= base_url('images/Andromeda/Galeria/andromeda1.webp') ?>" alt="Vista del Fraccionamiento">
                <div class="gallery-caption">Vista aérea del terreno</div>
            </div>
            <div class="gallery-item">
                <img src="<?= base_url('images/Andromeda/Galeria/andromeda2.webp') ?>" alt="Vista del Fraccionamiento">
                <div class="gallery-caption">Vista aérea del terreno</div>
            </div>
            <div class="gallery-item">
                <img src="<?= base_url('images/Andromeda/Galeria/andromeda3.webp') ?>" alt="Vista del Fraccionamiento">
                <div class="gallery-caption">Vista aérea del terreno</div>
            </div>
            <div class="gallery-item">
                <img src="<?= base_url('images/Andromeda/Galeria/andromeda4.webp') ?>" alt="Vista del Fraccionamiento">
                <div class="gallery-caption">Vista aérea del terreno</div>
            </div>
            <div class="gallery-item">
                <img src="<?= base_url('images/Andromeda/Galeria/andromeda5.webp') ?>" alt="Vista del Fraccionamiento">
                <div class="gallery-caption">Vista aérea del terreno</div>
            </div>
        </div>
    </div>
</section>


<!-- Contact CTA Mejorado -->
<section class="contact-cta">
    <div class="container">
        <h2>¿Listo para ser parte de Fraccionamiento Andrómeda?</h2>
        <p>Contáctanos hoy mismo para recibir información detallada, precios especiales y asesoría personalizada sin compromiso.</p>
        <a href="#contact-form" class="btn btn-secondary">Solicitar información</a>
    </div>
</section>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

<?= view('templates/footer') ?>