
<?= view('templates/navbar', ['title' => 'Real Campestre - Nelva Bienes Raíces']) ?>

<style>
    :root {
        --primary: #0a3a21;
        --primary-light: #1a5c3a;
        --secondary: #d4af37;
        --secondary-light: #e8c874;
        --light: #f8f9fa;
        --dark: #212529;
        --gray: #6c757d;
        --transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    }
    
  
    h1, h2, h3, h4 {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        line-height: 1.3;
    }
    
    .container {
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 30px;
    }
    
    .section {
        padding: 80px 0;
        position: relative;
    }
    
    .section-title {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
        color: var(--primary);
        font-size: 2.5rem;
        opacity: 0;
        transform: translateY(30px);
        transition: var(--transition);
    }
    
    .section-title.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    .section-title:after {
        content: '';
        display: block;
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, var(--secondary), var(--secondary-light));
        margin: 15px auto 0;
        border-radius: 2px;
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
        box-shadow: 0 5px 15px rgba(10, 58, 33, 0.2);
    }
    
    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(10, 58, 33, 0.3);
    }
    
    /* Hero Section */
    .hero {
        height: 100vh;
        min-height: 700px;
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        isolation: isolate;
    }
    
    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(10, 58, 33, 0.7), rgba(26, 92, 58, 0.5));
        z-index: 1;
    }
    
    .hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://images.unsplash.com/photo-1560520031-3a4dc4e9de0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover no-repeat;
        background-attachment: fixed;
        z-index: 0;
        transform: scale(1.1);
        transition: transform 8s cubic-bezier(0.16, 1, 0.3, 1);
    }
    
    .hero:hover .hero-bg {
        transform: scale(1);
    }
    
    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 900px;
        padding: 0 30px;
        opacity: 0;
        transform: translateY(50px);
        transition: var(--transition);
    }
    
    .hero-content.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    .hero h1 {
        font-size: 3.5rem;
        margin-bottom: 20px;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    }
    
    .hero p {
        font-size: 1.3rem;
        margin-bottom: 30px;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        font-weight: 300;
    }
    
    .hero .price {
        font-size: 2.5rem;
        color: var(--secondary);
        font-weight: 700;
        margin: 25px 0;
        display: block;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }
    
    /* Logo sobre el parallax */
    .hero-logo {
        position: absolute;
        top: 30px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 3;
        max-width: 200px;
        opacity: 0;
        transition: var(--transition);
    }
    
    .hero-logo.visible {
        opacity: 1;
    }
    
    /* Mini Map Section */
    .mini-map-container {
        position: relative;
        max-width: 1400px;
        margin: -100px auto 0;
        padding: 0 30px;
        z-index: 10;
    }
    
    .mini-map-wrapper {
        display: flex;
        justify-content: flex-end;
    }
    
    .mini-map-card {
        width: 350px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        transform: translateY(50px);
        opacity: 0;
        transition: var(--transition);
    }
    
    .mini-map-card.visible {
        transform: translateY(0);
        opacity: 1;
    }
    
    .mini-map-logo {
        padding: 20px;
        text-align: center;
        background: var(--primary);
    }
    
    .mini-map-logo img {
        max-width: 150px;
        height: auto;
    }
    
    .mini-map-iframe {
        height: 200px;
        width: 100%;
        border: none;
    }
    
    .mini-map-content {
        padding: 20px;
    }
    
    .mini-map-content h3 {
        color: var(--primary);
        margin-bottom: 10px;
        font-size: 1.2rem;
    }
    
    .mini-map-content p {
        font-size: 0.9rem;
        margin-bottom: 15px;
    }
    
    /* Description Section */
    .description {
        background: white;
    }
    
    .description-content {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        justify-content: center;
        align-items: flex-start;
    }
    
    .description-text {
        flex: 1;
        min-width: 300px;
        opacity: 0;
        transform: translateX(-30px);
        transition: var(--transition);
    }
    
    .description-text.visible {
        opacity: 1;
        transform: translateX(0);
    }
    
    .description-details {
        flex: 1;
        min-width: 300px;
        max-width: 400px;
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        opacity: 0;
        transform: translateX(30px);
        transition: var(--transition);
    }
    
    .description-details.visible {
        opacity: 1;
        transform: translateX(0);
    }
    
    .detail-item {
        margin-bottom: 20px;
        position: relative;
        padding-left: 20px;
    }
    
    .detail-item:before {
        content: '';
        position: absolute;
        left: 0;
        top: 10px;
        width: 8px;
        height: 8px;
        background: var(--secondary);
        border-radius: 50%;
    }
    
    .detail-item h4 {
        color: var(--primary);
        margin-bottom: 5px;
        font-size: 1.1rem;
    }
    
    /* Features Section - Tarjetas más compactas */
    .features {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 25px;
        text-align: center;
    }
    
    .feature-item {
        padding: 25px 15px;
        border-radius: 10px;
        transition: var(--transition);
        background: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        opacity: 0;
        transform: translateY(30px);
    }
    
    .feature-item.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    .feature-item:hover {
        transform: translateY(-8px) !important;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .feature-icon {
        font-size: 2rem;
        margin-bottom: 15px;
        color: var(--primary);
        transition: var(--transition);
    }
    
    .feature-item h3 {
        margin-bottom: 8px;
        color: var(--primary);
        font-size: 1.5rem;
    }
    
    .feature-item p {
        font-size: 0.9rem;
        color: var(--gray);
    }
    
    /* Amenities Section - Organización mejorada */
    .amenities {
        background: white;
    }
    
    .amenities-container {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .amenities-list {
        flex: 2;
        min-width: 300px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 15px;
    }
    
    .amenity-item {
        display: flex;
        align-items: center;
        padding: 15px;
        background: var(--light);
        border-radius: 8px;
        transition: var(--transition);
        opacity: 0;
        transform: translateY(20px);
    }
    
    .amenity-item.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    .amenity-item:hover {
        transform: translateY(-3px) !important;
        background: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }
    
    .amenity-icon {
        color: var(--secondary);
        font-size: 1.2rem;
        margin-right: 15px;
        min-width: 20px;
    }
    
    .amenity-item p {
        font-size: 0.95rem;
    }
    
    /* Ubicación fija en desktop */
    .location-card {
        flex: 1;
        min-width: 300px;
        max-width: 400px;
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        position: sticky;
        top: 100px;
        height: fit-content;
        opacity: 0;
        transform: translateY(30px);
    }
    
    .location-card.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    .location-card h3 {
        color: var(--primary);
        margin-bottom: 15px;
        font-size: 1.3rem;
    }
    
    .location-card p {
        margin-bottom: 20px;
        font-size: 0.95rem;
    }
    
    /* Plan Section */
    .plan {
        background: linear-gradient(135deg, var(--primary-light), var(--primary));
        color: white;
        text-align: center;
    }
    
    .plan .section-title {
        color: white;
    }
    
    .plan .section-title:after {
        background: var(--secondary);
    }
    
    .plan-image-container {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        opacity: 0;
        transform: scale(0.95);
        transition: var(--transition);
    }
    
    .plan-image-container.visible {
        opacity: 1;
        transform: scale(1);
    }
    
    .plan-image {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 8s cubic-bezier(0.16, 1, 0.3, 1);
    }
    
    .plan-image-container:hover .plan-image {
        transform: scale(1.03);
    }
    
    /* Gallery Section */
    .gallery {
        background: var(--light);
    }
    
    .gallery-container {
        position: relative;
        max-width: 1000px;
        margin: 0 auto;
    }
    
    .gallery-slide {
        display: none;
        text-align: center;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }
    
    .gallery-slide.active {
        display: block;
        animation: fadeIn 0.8s ease;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    .gallery-image {
        width: 100%;
        max-height: 600px;
        object-fit: cover;
    }
    
    .gallery-nav {
        display: flex;
        justify-content: center;
        margin-top: 25px;
    }
    
    .gallery-dot {
        width: 12px;
        height: 12px;
        background: var(--gray);
        border-radius: 50%;
        margin: 0 6px;
        cursor: pointer;
        transition: var(--transition);
    }
    
    .gallery-dot.active {
        background: var(--primary);
        transform: scale(1.2);
    }
    
    .gallery-description {
        text-align: center;
        margin-top: 40px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
        padding: 30px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        opacity: 0;
        transform: translateY(30px);
        transition: var(--transition);
    }
    
    .gallery-description.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Map Section */
    .map-section {
        background: white;
    }
    
    .map-iframe-container {
        height: 500px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        opacity: 0;
        transform: translateY(30px);
        transition: var(--transition);
    }
    
    .map-iframe-container.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    .map-iframe {
        width: 100%;
        height: 100%;
        border: none;
    }
    
    /* Ubicación estratégica destacada */
    .location-highlight {
        background: var(--primary);
        color: white;
        padding: 60px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .location-highlight::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://images.unsplash.com/photo-1582719471387-6d765170c77f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover no-repeat;
        opacity: 0.15;
        z-index: 0;
    }
    
    .location-highlight-content {
        position: relative;
        z-index: 1;
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 30px;
    }
    
    .location-highlight h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: white;
    }
    
    .location-highlight p {
        font-size: 1.2rem;
        margin-bottom: 30px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .location-features {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        margin-top: 40px;
    }
    
    .location-feature {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(5px);
        border-radius: 10px;
        padding: 25px;
        width: 250px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: var(--transition);
    }
    
    .location-feature:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.15);
    }
    
    .location-feature i {
        font-size: 2.5rem;
        color: var(--secondary);
        margin-bottom: 15px;
        display: block;
    }
    
    .location-feature h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 1200px) {
        .hero h1 {
            font-size: 3rem;
        }
        
        .section {
            padding: 70px 0;
        }
    }
    
    @media (max-width: 992px) {
        .hero h1 {
            font-size: 2.7rem;
        }
        
        .hero .price {
            font-size: 2.2rem;
        }
        
        .section-title {
            font-size: 2.2rem;
        }
        
        .location-card {
            position: static;
            max-width: 100%;
        }
        
        .amenities-container {
            flex-direction: column;
        }
        
        .mini-map-container {
            margin-top: 0;
            padding-bottom: 50px;
        }
        
        .mini-map-wrapper {
            justify-content: center;
        }
    }
    
    @media (max-width: 768px) {
        .hero {
            min-height: 600px;
        }
        
        .hero h1 {
            font-size: 2.3rem;
        }
        
        .hero p {
            font-size: 1.1rem;
        }
        
        .hero .price {
            font-size: 2rem;
        }
        
        .hero-logo {
            max-width: 150px;
            top: 20px;
        }
        
        .section {
            padding: 60px 0;
        }
        
        .section-title {
            font-size: 2rem;
            margin-bottom: 40px;
        }
        
        .features-grid {
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 20px;
        }
        
        .amenities-list {
            grid-template-columns: 1fr;
        }
        
        .mini-map-card {
            width: 100%;
        }
        
        .location-highlight h2 {
            font-size: 2rem;
        }
        
        .location-highlight p {
            font-size: 1rem;
        }
    }
    
    @media (max-width: 576px) {
        .hero h1 {
            font-size: 2rem;
        }
        
        .hero p {
            font-size: 1rem;
        }
        
        .section {
            padding: 50px 0;
        }
        
        .section-title {
            font-size: 1.8rem;
        }
        
        .btn {
            padding: 10px 25px;
        }
        
        .description-content {
            flex-direction: column;
        }
        
        .description-text, .description-details {
            min-width: 100%;
        }
        
        .map-iframe-container {
            height: 350px;
        }
        
        .hero-logo {
            max-width: 120px;
            top: 15px;
        }
        
        .location-highlight h2 {
            font-size: 1.8rem;
        }
        
        .location-feature {
            width: 100%;
        }
    }
</style>

<!-- Hero Section with Parallax -->
<section class="hero">
    <!-- Logo del fraccionamiento sobre el parallax -->
    <img src="" alt="Logo Real Campestre" class="hero-logo">
    
    <div class="hero-bg"></div>
    <div class="hero-content">
        <h1>Real Campestre</h1>
        <span class="price">$120,000.00</span>
        <p>LOTES RESIDENCIALES DESDE 200 M²</p>
        <p>Santa María Tonameca, Oaxaca</p>
        <a href="#contact" class="btn">Contactar asesor</a>
    </div>
</section>


<!-- Description Section -->
<section class="section description">
    <div class="container">
        <h2 class="section-title">Descripción del Fraccionamiento</h2>
        <div class="description-content">
            <div class="description-text">
                <p>El Fraccionamiento Real Campestre es un desarrollo exclusivo ubicado en el corazón de la costa oaxaqueña, diseñado para aquellos que buscan tranquilidad, seguridad y un estilo de vida en contacto con la naturaleza. Nuestros lotes ofrecen la oportunidad perfecta para construir tu hogar soñado en un entorno privilegiado, con amplios espacios y cercanía a los principales atractivos turísticos de la región.</p>
                <p>Con infraestructura de calidad y un diseño urbanístico cuidadosamente planificado, Real Campestre combina la belleza natural de la zona con las comodidades modernas que esperas para tu futuro hogar.</p>
            </div>
            <div class="description-details">
                <div class="detail-item">
                    <h4>Estado de la propiedad</h4>
                    <p>Venta De Lotes</p>
                </div>
                <div class="detail-item">
                    <h4>Tipo de Propiedad</h4>
                    <p>Acta De Posesión</p>
                </div>
                <div class="detail-item">
                    <h4>Superficie</h4>
                    <p>Lotes desde 200 m² hasta 500 m²</p>
                </div>
                <div class="detail-item">
                    <h4>Ubicación</h4>
                    <p>Santa María Tonameca, Oaxaca</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section features">
    <div class="container">
        <h2 class="section-title">Características</h2>
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-vector-square"></i>
                </div>
                <h3>200 M²</h3>
                <p>Lotes desde</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-road"></i>
                </div>
                <h3>10 M²</h3>
                <p>Calles de</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>3 MIN</h3>
                <p>Ventanilla</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-route"></i>
                </div>
                <h3>12 M²</h3>
                <p>Avenidas de</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>5 MIN</h3>
                <p>Mazunte</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-umbrella-beach"></i>
                </div>
                <h3>30 MIN</h3>
                <p>Zicatela y Pto Escondido</p>
            </div>
        </div>
    </div>
</section>

<!-- Amenities Section -->
<section class="section amenities">
    <div class="container">
        <h2 class="section-title">Amenidades y Ubicación</h2>
        <div class="amenities-container">
            <div class="amenities-list">
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <p>SOBRE LA CARRETERA FEDERAL 175 Y 200</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <p>A 10 MIN. DE MAZUNTE PUEBLO MÁGICO</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <p>A 10 MIN. DE PUNTA COMETA</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <p>A 2 MIN. DE VENTANILLA</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <p>A 50 MIN. DE PUERTO ESCONDIDO Y ZICATELA</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <p>A 30 MIN. DE SAN PEDRO POCHUTLA</p>
                </div>
            </div>
            
            <!-- Tarjeta de ubicación fija en desktop -->
            <div class="location-card">
                <h3>Ubicación Privilegiada</h3>
                <p>El Fraccionamiento Real Campestre se encuentra en Santa María Tonameca, Oaxaca, con acceso directo a las carreteras federales 175 y 200.</p>
                <p>Disfruta de la cercanía a las playas más hermosas de la costa oaxaqueña y todos los servicios necesarios.</p>
                <a href="#contact" class="btn" style="margin-top: 15px;">Ver en mapa</a>
            </div>
        </div>
    </div>
</section>

<!-- Location Highlight Section -->
<section class="location-highlight">
    <div class="location-highlight-content">
        <h2>Ubicación Estratégica</h2>
        <p>Real Campestre se encuentra en un punto clave de la costa oaxaqueña, con acceso rápido a los principales destinos turísticos y servicios de la región.</p>
        
        <div class="location-features">
            <div class="location-feature">
                <i class="fas fa-road"></i>
                <h3>Accesibilidad</h3>
                <p>Directo sobre carretera federal con fácil acceso</p>
            </div>
            <div class="location-feature">
                <i class="fas fa-umbrella-beach"></i>
                <h3>Playas Cercanas</h3>
                <p>A minutos de las mejores playas de Oaxaca</p>
            </div>
            <div class="location-feature">
                <i class="fas fa-tree"></i>
                <h3>Entorno Natural</h3>
                <p>Rodeado de vegetación y vida silvestre</p>
            </div>
            <div class="location-feature">
                <i class="fas fa-city"></i>
                <h3>Cercanía Urbana</h3>
                <p>Próximo a servicios y centros turísticos</p>
            </div>
        </div>
    </div>
</section>

<!-- Plan Section -->
<section class="section plan">
    <div class="container">
        <h2 class="section-title">Plano del Fraccionamiento</h2>
        <div class="plan-image-container">
            <img src="https://via.placeholder.com/1200x800?text=Plano+del+Fraccionamiento" alt="Plano del Fraccionamiento Real Campestre" class="plan-image">
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="section gallery">
    <div class="container">
        <h2 class="section-title">Galería</h2>
        <div class="gallery-container">
            <div class="gallery-slide active">
                <img src="" alt="Imagen del fraccionamiento" class="gallery-image">
            </div>
            <div class="gallery-slide">
                <img src="https://via.placeholder.com/1000x600?text=Imagen+2+del+Fraccionamiento" alt="Imagen del fraccionamiento" class="gallery-image">
            </div>
            <div class="gallery-slide">
                <img src="https://via.placeholder.com/1000x600?text=Imagen+3+del+Fraccionamiento" alt="Imagen del fraccionamiento" class="gallery-image">
            </div>
            <div class="gallery-nav">
                <div class="gallery-dot active"></div>
                <div class="gallery-dot"></div>
                <div class="gallery-dot"></div>
            </div>
        </div>
        <div class="gallery-description">
            <p>Explora nuestra galería y descubre la belleza y los detalles únicos de cada uno de nuestros desarrollos. Cada imagen captura la esencia de los espacios y las vistas excepcionales que te esperan en el Fraccionamiento Real Campestre. Sumérgete en el paisaje, la tranquilidad y la arquitectura que hacen de este lugar una opción perfecta para tu futuro hogar.</p>
            <p>¡Imagina tu vida aquí a través de nuestras imágenes!</p>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="section map-section" id="contact">
    <div class="container">
        <h2 class="section-title">Ubicación en Mapa</h2>
        <div class="map-iframe-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.647614783725!2d-96.5403889246901!3d15.79878548485915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85b8c5a0b5c5b5c5%3A0x5b8c5a0b5c5b5c5!2sSanta%20Mar%C3%ADa%20Tonameca%2C%20Oaxaca!5e0!3m2!1ses!2smx!4v1620000000000!5m2!1ses!2smx" class="map-iframe" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<script>
    
    let currentSlide = 0;
    const slides = document.querySelectorAll('.gallery-slide');
    const dots = document.querySelectorAll('.gallery-dot');
    
    function showSlide(n) {
        // Hide all slides
        slides.forEach(slide => {
            slide.classList.remove('active');
        });
        dots.forEach(dot => {
            dot.classList.remove('active');
        });
        
        // Show selected slide
        currentSlide = (n + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }
    
    // Add click events to dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
        });
    });
    
    // Auto slide change every 5 seconds
    setInterval(() => {
        showSlide(currentSlide + 1);
    }, 5000);
    
    // Scroll animation for sections
    function checkVisibility() {
        const elements = document.querySelectorAll('.section-title, .hero-content, .hero-logo, .mini-map-card, .description-text, .description-details, .feature-item, .amenity-item, .location-card, .plan-image-container, .gallery-description, .map-iframe-container');
        
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementTop < windowHeight - 100) {
                element.classList.add('visible');
            }
        });
    }
    
    // Check visibility on load and scroll
    window.addEventListener('load', checkVisibility);
    window.addEventListener('scroll', checkVisibility);
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">


<?= view('templates/footer') ?>