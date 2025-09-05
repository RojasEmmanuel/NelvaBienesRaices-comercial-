<?= view('templates/navbar', ['title' => 'Real Ventanilla - Nelva Bienes Raíces']) ?>

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
    
    /* Hero Section */
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
        background: url('<?= base_url('images/inicio/tonameca.png') ?>') center/cover no-repeat;
        background-color: rgba(0, 0, 0, 0.5);
        background-blend-mode: multiply;
        z-index: 1;
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
    
    /* Info Grid */
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
    
    /* Features Section */
    .features-section {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
    }
    
    .feature-item {
        background: white;
        padding: 30px 20px;
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
        font-size: 2.5rem;
        margin-bottom: 15px;
    }
    
    .feature-item h3 {
        font-size: 1.5rem;
        color: var(--primary);
    }
    
    /* Amenities Section */
    .amenities-section {
        background: url('<?= base_url('images/inicio/tonameca.png') ?>') center/cover fixed;
        position: relative;
        padding: 100px 0;
    }
    
    .amenities-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(10, 58, 33, 0.9);
        z-index: 0;
    }
    
    .amenities-container {
        position: relative;
        z-index: 1;
        color: white;
    }
    
    .amenities-title {
        text-align: center;
        margin-bottom: 40px;
        font-size: 2.5rem;
    }
    
    .amenities-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }
    
    .amenity-item {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(5px);
        padding: 20px;
        border-radius: 8px;
        border-left: 4px solid var(--secondary);
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    .amenity-icon {
        color: var(--secondary-light);
        font-size: 1.5rem;
    }
    
    /* Gallery Section */
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
    
    /* Plano Section */
    .plano-section {
        background-color: #f8f9fa;
    }
    
    .plano-container {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }
    
    .plano-img {
        width: 100%;
        border-radius: 12px;
        box-shadow: var(--shadow-lg);
    }
    
    /* Map Section */
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
    
    /* Legal Section */
    .legal-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: var(--primary);
        color: white;
        padding: 15px 25px;
        border-radius: 50px;
        margin-bottom: 30px;
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
    
    /* Responsive */
    @media (max-width: 992px) {
        .map-container {
            grid-template-columns: 1fr;
        }
        
        .hero h1 {
            font-size: 2.8rem;
        }
    }
    
    @media (max-width: 768px) {
        .section {
            padding: 60px 0;
        }
        
        .hero h1 {
            font-size: 2.2rem;
        }
        
        .hero .price {
            font-size: 2rem;
        }
    }
    
    @media (max-width: 576px) {
        .hero-buttons {
            flex-direction: column;
        }
        
        .info-grid {
            grid-template-columns: 1fr;
        }
    }

    /* WhatsApp Floating Button */
    .whatsapp-float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 25px;
        right: 25px;
        background-color: #25d366;
        color: white;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 0 4px 20px rgba(37, 211, 102, 0.5);
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s ease;
        animation: pulse-whatsapp 2s infinite;
    }
    
    .whatsapp-float:hover {
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 6px 25px rgba(37, 211, 102, 0.7);
    }
    
    .whatsapp-text {
        position: fixed;
        bottom: 95px;
        right: 25px;
        background: white;
        color: #075e54;
        padding: 8px 15px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 14px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        z-index: 1000;
        opacity: 0;
        transform: translateY(10px);
        transition: all 0.3s ease;
        pointer-events: none;
    }
    
    .whatsapp-float:hover + .whatsapp-text {
        opacity: 1;
        transform: translateY(0);
    }

</style>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/5219581362522?text=Hola,%20me%20interesa%20saber%20más%20sobre%20Fraccionamiento%20Andrómeda" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>
<span class="whatsapp-text">¡Contáctanos por WhatsApp!</span>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Fraccionamiento Real Ventanilla</h1>
        <span class="price">LOTES A $650,000</span>
        <p>Un desarrollo de alta plusvalía, a 1 minuto de la Laguna de Ventanilla</p>
        <div class="hero-buttons">
            <a href="/asesores?zona=costa" class="btn btn-secondary">Contactar asesor</a>
            <a href="#gallery" class="btn">Ver galería</a>
        </div>
    </div>
</section>

<!-- Info Grid -->
<section class="section">
    <div class="container">
        <div class="info-grid">
            <div class="info-card">
                <h3><i class="fas fa-file-signature"></i> Documentación</h3>
                <p>Certeza legal</p>
            </div>
            <div class="info-card">
                <h3><i class="fas fa-calendar-check"></i> Disponibilidad</h3>
                <p>Posesión inmediata</p>
            </div>
        </div>
    </div>
</section>

<!-- Description Section -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">Desarrollo de Alta Plusvalía</h2>
            <p class="mb-30" style="max-width: 800px; margin: 0 auto; font-size: 1.1rem;">
                Ubicado a solo 1 minuto de la Laguna de Ventanilla, lugar que alberga el Santuario de Cocodrilos, 
                el Campamento Tortuguero y Playa Ventanilla, conocida por el característico tono oscuro de su arena.
            </p>
        </div>
    </div>
</section>

<!-- Features Section - Ubicación Privilegiada -->
<section class="section features-section">
    <div class="container">
        <h2 class="section-title">Ubicación Privilegiada</h2>
        
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-water"></i>
                </div>
                <h3>Laguna de Ventanilla</h3>
                <p>A solo 1 minuto del desarrollo</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-alligator"></i>
                </div>
                <h3>Santuario de Cocodrilos</h3>
                <p>Atractivo turístico cercano</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-turtle"></i>
                </div>
                <h3>Campamento Tortuguero</h3>
                <p>Protección de especies marinas</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-umbrella-beach"></i>
                </div>
                <h3>Playa Ventanilla</h3>
                <p>Arena de tono oscuro característico</p>
            </div>
        </div>
    </div>
</section>

<!-- Amenities Section -->
<section class="section amenities-section">
    <div class="container amenities-container">
        <h2 class="amenities-title">AMENIDADES</h2>
        
        <div class="amenities-grid">
            <div class="amenity-item">
                <div class="amenity-icon">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <div>
                    <h3>Lotes residenciales</h3>
                    <p>Desde 200 m²</p>
                </div>
            </div>
            
            <div class="amenity-item">
                <div class="amenity-icon">
                    <i class="fas fa-tint"></i>
                </div>
                <div>
                    <h3>Servicio de agua</h3>
                    <p>Entubada</p>
                </div>
            </div>
            
            <div class="amenity-item">
                <div class="amenity-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <div>
                    <h3>Energía eléctrica</h3>
                    <p>Subterránea</p>
                </div>
            </div>
            
            <div class="amenity-item">
                <div class="amenity-icon">
                    <i class="fas fa-road"></i>
                </div>
                <div>
                    <h3>Acceso</h3>
                    <p>Desde la Carretera Estatal #175</p>
                </div>
            </div>
            
            <div class="amenity-item">
                <div class="amenity-icon">
                    <i class="fas fa-street-view"></i>
                </div>
                <div>
                    <h3>Calles</h3>
                    <p>De amplio acceso</p>
                </div>
            </div>
            
            <div class="amenity-item">
                <div class="amenity-icon">
                    <i class="fas fa-binoculars"></i>
                </div>
                <div>
                    <h3>Naturaleza</h3>
                    <p>Avistamiento de fauna silvestre</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Plano Section -->
<section class="section plano-section">
    <div class="container">
        <h2 class="section-title">Plano del Fraccionamiento</h2>
        <div class="plano-container">
            <img src="<?= base_url('images/RealVentanilla/plano.jpg') ?>" alt="Plano de Real Ventanilla" class="plano-img">
            <p style="margin-top: 20px; font-size: 1.1rem; color: var(--gray);">
                Diseño urbanístico pensado para maximizar espacios y privacidad.
            </p>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="section gallery-section" id="gallery">
    <div class="container">
        <h2 class="section-title">Galería del Proyecto</h2>
        
        <div class="gallery-container">
            <div class="gallery-item">
                <img src="<?= base_url('images/RealVentanilla/realv1.png') ?>" alt="Laguna de Ventanilla">
                <div class="gallery-caption">Real Ventanilla</div>
            </div>
            <div class="gallery-item">
                <img src="<?= base_url('images/RealVentanilla/realv2.png') ?>" alt="Laguna de Ventanilla">
                <div class="gallery-caption">Laguna de Ventanilla</div>
            </div>
            <div class="gallery-item">
                <img src="<?= base_url('images/RealVentanilla/realv3.jpg') ?>" alt="Playa Ventanilla">
                <div class="gallery-caption">Vista aérea</div>
            </div>
            <div class="gallery-item">
                <img src="<?= base_url('images/RealVentanilla/realv4.jpg') ?>" alt="Playa Ventanilla">
                <div class="gallery-caption">Vista aérea</div>
            </div>
            <div class="gallery-item">
                <img src="<?= base_url('images/RealVentanilla/realv5.jpg') ?>" alt="Playa Ventanilla">
                <div class="gallery-caption">Vista aérea</div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="section map-section2" id="contact">
    <div class="container">
        <div class="map-container2">
            <div class="map-content2">
                <h2 class="section-title" style="color: white; text-align: left;">Ubicación Estratégica</h2>
                <p>Real Ventanilla se encuentra en una posición privilegiada cerca de uno de los ecosistemas más importantes de la costa oaxaqueña..</p>
                <p>La cercanía con la laguna y playa Ventanilla garantiza un entorno natural único con alto potencial de valorización.</p>
                <a href="/asesores?zona=costa" class="btn btn-secondary">Solicitar información</a>
            </div>
            <div class="map-iframe-container2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d1166.6420105482935!2d-96.57211745932906!3d15.68271309889045!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTXCsDQwJzU4LjEiTiA5NsKwMzQnMTguMiJX!5e1!3m2!1ses-419!2smx!4v1755053265891!5m2!1ses-419!2smx" class="map-iframe2" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>


<!-- Contact CTA -->
<section class="section" style="background: var(--primary); color: white; text-align: center;">
    <div class="container">
        <h2 style="font-size: 2.2rem; margin-bottom: 20px;">¿Listo para ser parte de Real Ventanilla?</h2>
        <p style="font-size: 1.2rem; max-width: 700px; margin: 0 auto 30px;">Contáctanos hoy mismo para recibir información detallada y precios especiales</p>
        <a href="/asesores?zona=costa" class="btn btn-secondary">Contactar Asesor</a>
    </div>
</section>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

<?= view('templates/footer') ?>