<?= view('templates/navbar', ['title' => 'Servicios - Nelva Bienes Raíces']) ?>

<style>
    /* Variables únicas con prefijo nbr- */
    :root {
        /* Colores principales */
        --nbr-primary-blue: #2A5C8B;
        --nbr-primary-blue-dark: #1E4566;
        --nbr-primary-blue-light: #3A7CBA;
        
        --nbr-secondary-green: #4CAF50;
        --nbr-secondary-green-dark: #3D8B40;
        
        --nbr-accent-coral: #FF6B6B;
        --nbr-accent-coral-dark: #E05555;
        
        /* Escala de grises */
        --nbr-light-bg: #F7F9FC;
        --nbr-dark-text: #2C3E50;
        --nbr-main-text: #333333;
        --nbr-light-text: #6C757D;
        --nbr-white: #FFFFFF;
        --nbr-gray: #E9ECEF;
        
        /* Efectos */
        --nbr-transition: all 0.3s ease;
        --nbr-shadow-sm: 0 2px 8px rgba(0,0,0,0.1);
        --nbr-shadow-md: 0 4px 12px rgba(0,0,0,0.15);
        --nbr-shadow-lg: 0 8px 24px rgba(0,0,0,0.2);
        --nbr-border-radius: 8px;
        --nbr-border-radius-lg: 12px;
    }
    
    /* Estilos base */
    
  
    a {
        text-decoration: none;
        color: var(--nbr-primary-blue);
        transition: var(--nbr-transition);
    }
    
    img {
        max-width: 100%;
        height: auto;
        display: block;
    }
    
    .nbr-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }
    
    .nbr-section {
        padding: 5rem 0;
    }
    
    .nbr-section-title {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    .nbr-section-title h2 {
        font-size: 2.5rem;
        position: relative;
        display: inline-block;
        padding-bottom: 0.5rem;
    }
    
    .nbr-section-title h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: var(--nbr-secondary-green);
        border-radius: 2px;
    }
    
    .nbr-section-title p {
        color: var(--nbr-light-text);
        max-width: 700px;
        margin: 0 auto;
    }
    
    .nbr-btn {
        display: inline-block;
        padding: 0.8rem 2rem;
        background-color: var(--nbr-primary-blue);
        color: var(--nbr-white);
        border-radius: 50px;
        font-weight: 600;
        text-align: center;
        transition: var(--nbr-transition);
        border: 2px solid transparent;
        cursor: pointer;
        box-shadow: var(--nbr-shadow-sm);
    }
    
    .nbr-btn:hover {
        background-color: var(--nbr-primary-blue-dark);
        color: var(--nbr-white);
        transform: translateY(-3px);
        box-shadow: var(--nbr-shadow-md);
    }
    
    .nbr-btn-secondary {
        background-color: var(--nbr-secondary-green);
    }
    
    .nbr-btn-secondary:hover {
        background-color: var(--nbr-secondary-green-dark);
        color: var(--nbr-white);
    }
    
    /* Hero Section */
    .nbr-hero {
        position: relative;
        height: 80vh;
        min-height: 500px;
        display: flex;
        align-items: center;
        background: linear-gradient(rgba(0,0,0,0.5)), 
                    url('<?= base_url('images/Servicios/parallax.png') ?>') no-repeat center center/cover;
        color: #FFFFFF;
        text-align: center;
        overflow: hidden;
    }
    
    .nbr-hero-content {
        position: relative;
        z-index: 2;
        max-width: 800px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }
    
    .nbr-hero h1 {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    }
    
    .nbr-hero p {
        font-size: 1.25rem;
        margin-bottom: 2rem;
        opacity: 0.9;
    }
    
    /* Services Wide Cards */
    .nbr-services-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }
    
    .nbr-service-card {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        background: var(--nbr-white);
        border-radius: var(--nbr-border-radius-lg);
        overflow: hidden;
        box-shadow: var(--nbr-shadow-md);
        margin-bottom: 3rem;
        transition: var(--nbr-transition);
    }
    
    .nbr-service-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--nbr-shadow-lg);
    }
    
    .nbr-service-img {
        position: relative;
        height: 100%;
        min-height: 300px;
    }
    
    .nbr-service-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .nbr-service-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background-color: var(--nbr-accent-coral);
        color: var(--nbr-white);
        padding: 0.3rem 1rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        box-shadow: var(--nbr-shadow-sm);
    }
    
    .nbr-service-content {
        padding: 2rem;
    }
    
    .nbr-service-title {
        font-size: 1.8rem;
        color: var(--nbr-primary-blue);
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 0.5rem;
    }
    
    .nbr-service-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: var(--nbr-secondary-green);
    }
    
    .nbr-service-features {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
        margin: 2rem 0;
    }
    
    .nbr-feature-item {
        display: flex;
        align-items: flex-start;
    }
    
    .nbr-feature-icon {
        color: var(--nbr-secondary-green);
        margin-right: 0.8rem;
        font-size: 1.1rem;
        margin-top: 0.2rem;
    }
    
    .nbr-feature-text {
        font-size: 0.95rem;
    }
    
    .nbr-service-contact {
        background: rgba(42, 92, 139, 0.05);
        padding: 1.5rem;
        border-radius: var(--nbr-border-radius);
        margin: 2rem 0;
    }
    
    .nbr-contact-title {
        font-size: 1.1rem;
        margin-bottom: 1rem;
        color: var(--nbr-primary-blue);
    }
    
    .nbr-contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 0.8rem;
        font-size: 0.95rem;
    }
    
    .nbr-contact-icon {
        margin-right: 0.8rem;
        color: var(--nbr-primary-blue);
        font-size: 1rem;
    }
    
    .nbr-service-btn {
        display: inline-block;
        width: 100%;
        padding: 0.8rem;
        background: var(--nbr-primary-blue);
        color: var(--nbr-white);
        text-align: center;
        border-radius: var(--nbr-border-radius);
        font-weight: 600;
        transition: var(--nbr-transition);
    }
    
    .nbr-service-btn:hover {
        background: var(--nbr-primary-blue-dark);
        transform: translateY(-3px);
        box-shadow: var(--nbr-shadow-md);
    }
    
    /* Modal Styles - Rediseñado */
    .nbr-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(11, 11,11, 0.5);
        z-index: 1000;
        overflow-y: auto;
        padding: 2rem 0;
    }

    .nbr-modal-content {
        background: var(--nbr-white);
        border-radius: var(--nbr-border-radius-lg);
        max-width: 900px;
        margin: 2rem auto;
        overflow: hidden;
        animation: nbr-modalFadeIn 0.4s ease;
        box-shadow: 0 10px 50px rgba(0,0,0,0.3);
    }

    @keyframes nbr-modalFadeIn {
        from { opacity: 0; transform: translateY(-20px) scale(0.95); }
        to { opacity: 1; transform: translateY(0) scale(1); }
    }

    .nbr-modal-header {
        padding: 2rem;
        background: linear-gradient(135deg, var(--nbr-primary-blue), var(--nbr-primary-blue-dark));
        color: var(--nbr-white);
        position: relative;
        border-bottom: 4px solid var(--nbr-secondary-green);
    }

    .nbr-modal-header h2 {
        color: var(--nbr-white);
        margin-bottom: 0.5rem;
        font-size: 2rem;
        letter-spacing: 0.5px;
    }

    .nbr-modal-header p {
        color: rgba(255,255,255,0.8);
        margin-bottom: 0;
    }

    .nbr-modal-body {
        padding: 2.5rem;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2.5rem;
        background: var(--nbr-white);
    }

    .nbr-modal-text {
        padding-right: 1rem;
    }

    .nbr-modal-text p {
        margin-bottom: 1.5rem;
        line-height: 1.7;
    }

    .nbr-modal-text ul {
        margin: 1.5rem 0;
        padding-left: 1.5rem;
        list-style-type: none;
    }

    .nbr-modal-text li {
        margin-bottom: 0.8rem;
        position: relative;
        padding-left: 1.8rem;
        line-height: 1.5;
    }

    .nbr-modal-text li:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0.5rem;
        width: 8px;
        height: 8px;
        background-color: var(--nbr-secondary-green);
        border-radius: 50%;
    }

    .nbr-modal-text strong {
        color: var(--nbr-primary-blue);
    }

    .nbr-close-modal {
        position: absolute;
        top: 1.5rem;
        right: 1.5rem;
        font-size: 1.8rem;
        color: var(--nbr-white);
        cursor: pointer;
        transition: var(--nbr-transition);
        background: rgba(0,0,0,0.2);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
    }

    .nbr-close-modal:hover {
        color: var(--nbr-accent-coral);
        transform: rotate(90deg);
        background: rgba(0,0,0,0.3);
    }

    /* Carousel en modales - Estilo mejorado */
    
    .nbr-carousel {
        position: relative;
        border-radius: var(--nbr-border-radius);
        overflow: hidden;
        height: 100%;
        box-shadow: var(--nbr-shadow-sm);
    }
    
    .nbr-carousel-inner {
        display: flex;
        transition: transform 0.5s ease;
        height: 100%;
        width: 100%;
    }
    
    .nbr-carousel-item {
        min-width: 100%;
        position: relative;
        transition: opacity 0.5s ease;
    }
    
    .nbr-carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .nbr-carousel-item:hover img {
        transform: scale(1.02);
    }
    
    .nbr-carousel-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0,0,0,0.7));
        color: var(--nbr-white);
        padding: 1rem;
        font-size: 1rem;
        text-align: center;
    }
    
    .nbr-carousel-controls {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
        padding: 0 1rem;
        z-index: 10;
    }
    
    .nbr-carousel-control {
        background: rgba(255, 255, 255, 0.9);
        border: none;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--nbr-transition);
        color: var(--nbr-primary-blue);
        font-weight: bold;
        font-size: 1.3rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }
    
    .nbr-carousel-control:hover {
        background: var(--nbr-white);
        transform: scale(1.1);
    }
    
    .nbr-carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 8px;
        z-index: 10;
    }
    
    .nbr-carousel-indicator {
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: var(--nbr-transition);
        border: 2px solid transparent;
    }
    
    .nbr-carousel-indicator.active {
        background: var(--nbr-white);
        transform: scale(1.2);
        border-color: var(--nbr-secondary-green);
    }
    
    /* Ajuste para el modal gallery */
    .nbr-modal-gallery {
        height: 350px;
    }
    
    /* Responsive para modales */
    @media (max-width: 768px) {
        .nbr-modal-body {
            grid-template-columns: 1fr;
            padding: 1.5rem;
            gap: 1.5rem;
        }
        
        .nbr-modal-header {
            padding: 1.5rem;
        }
        
        .nbr-modal-header h2 {
            font-size: 1.5rem;
        }
        
        .nbr-carousel-item img {
            height: 250px;
        }
    }
    
    /* Responsive Design */
    @media (max-width: 992px) {
        .nbr-hero h1 {
            font-size: 2.5rem;
        }
        
        .nbr-section {
            padding: 4rem 0;
        }
        
        .nbr-service-card {
            grid-template-columns: 1fr;
        }
        
        .nbr-service-img {
            min-height: 250px;
        }
        
    }
    
    @media (max-width: 768px) {
        .nbr-hero {
            height: 70vh;
        }
        
        .nbr-hero h1 {
            font-size: 2.2rem;
        }
        
        .nbr-hero p {
            font-size: 1.1rem;
        }
        
        .nbr-section-title h2 {
            font-size: 2rem;
        }
        
        .nbr-service-features {
            grid-template-columns: 1fr;
        }
    }
    
    @media (max-width: 576px) {
        .nbr-hero {
            height: 60vh;
            min-height: 400px;
        }
        
        .nbr-hero h1 {
            font-size: 1.8rem;
        }
        
        .nbr-section {
            padding: 3rem 0;
        }
        
        .nbr-section-title h2 {
            font-size: 1.8rem;
        }
    }

     @media (max-width: 768px) {
        .nbr-modal-gallery {
            height: 250px;
        }
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

<!-- Hero Section -->
<section class="nbr-hero">
    <div class="nbr-hero-content">
        <h1>Soluciones inmobiliarias integrales en Oaxaca</h1>
        <p>Nos especializamos en la venta de lotes con alta plusvalía, servicios de topografía, renta de maquinaria y desarrollo de construcción, con enfoque de calidad y cuidado del medio ambiente.</p>
        <a href="#nbr-servicios" class="nbr-btn">Nuestros Servicios</a>
    </div>
</section>

<!-- Services Section -->
<section class="nbr-section" id="nbr-servicios">
    <div class="nbr-section-title">
        <h2>Nuestros Servicios</h2>
        <p>Ofrecemos soluciones integrales para tus proyectos inmobiliarios y de construcción en los principales destinos turísticos de Oaxaca.</p>
    </div>
    
    <div class="nbr-services-container">
        <!-- Service 1 - Venta de Terrenos -->
        <div class="nbr-service-card">
            <div class="nbr-service-img">
                <img src="<?= base_url('images/Servicios/ventaTerrenos.png') ?>" alt="Venta de Terrenos">
                <span class="nbr-service-badge">Más popular</span>
            </div>
            <div class="nbr-service-content">
                <h3 class="nbr-service-title">Venta de Terrenos en Zonas Privilegiadas</h3>
                
                <div class="nbr-service-features">
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-umbrella-beach"></i>
                        </div>
                        <span class="nbr-feature-text">Acceso directo a playas vírgenes</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-binoculars"></i>
                        </div>
                        <span class="nbr-feature-text">Vistas panorámicas al océano</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-swimming-pool"></i>
                        </div>
                        <span class="nbr-feature-text">Zonas para deportes acuáticos</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-fish"></i>
                        </div>
                        <span class="nbr-feature-text">Excelentes áreas de pesca</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-archway"></i>
                        </div>
                        <span class="nbr-feature-text">Cercanía a sitios arqueológicos</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-ruler-combined"></i>
                        </div>
                        <span class="nbr-feature-text">Terrenos desde 200m² hasta 5,000m²</span>
                    </div>
                </div>
                
                <div class="nbr-service-contact">
                    <h4 class="nbr-contact-title">Contacto directo:</h4>
                    <div class="nbr-contact-item">
                        <i class="fas fa-phone nbr-contact-icon"></i>
                        <span>+52 (958) 119 9171</span>
                    </div>
                    <div class="nbr-contact-item">
                        <i class="fas fa-envelope nbr-contact-icon"></i>
                        <span>ventas@nelvabienesraices.com</span>
                    </div>
                    <div class="nbr-contact-item">
                        <i class="fas fa-map-marker-alt nbr-contact-icon"></i>
                        <span>Oficinas en Puerto Escondido y Huatulco</span>
                    </div>
                </div>
                
                <a href="<?= base_url('/#pro-section') ?>" class="nbr-service-btn">Solicitar información detallada</a>
            </div>
        </div>
        
        <!-- Service 2 - Topografía -->
        <div class="nbr-service-card">
            <div class="nbr-service-img">
                <img src="<?= base_url('images/Servicios/topografia.png') ?>" alt="Levantamiento Topográfico">
                <span class="nbr-service-badge">Servicio profesional</span>
            </div>
            <div class="nbr-service-content">
                <h3 class="nbr-service-title">Levantamientos Topográficos de Precisión</h3>
                
                <div class="nbr-service-features">
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <span class="nbr-feature-text">Estudio detallado del terreno</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <span class="nbr-feature-text">Medición precisa de desniveles y altimetría</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <span class="nbr-feature-text">Análisis de las características geográficas</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <span class="nbr-feature-text">Informe técnico sobre el perfil del terreno</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <span class="nbr-feature-text">Detección de áreas verdes y vegetación relevante</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-water"></i>
                        </div>
                        <span class="nbr-feature-text">Estudio de drenaje y cuerpos de agua cercanos</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <span class="nbr-feature-text">Evaluación de la proximidad a zonas naturales y reservas</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <span class="nbr-feature-text">Recomendaciones para proyectos de construcción</span>
                    </div>
                </div>
                
                <div class="nbr-service-contact">
                    <h4 class="nbr-contact-title">Contacto para topografía:</h4>
                    <div class="nbr-contact-item">
                        <i class="fas fa-phone nbr-contact-icon"></i>
                        <span>+52 (958) 119 9172</span>
                    </div>
                    <div class="nbr-contact-item">
                        <i class="fas fa-envelope nbr-contact-icon"></i>
                        <span>topografia@nelvabienesraices.com</span>
                    </div>
                    <div class="nbr-contact-item">
                        <i class="fas fa-clock nbr-contact-icon"></i>
                        <span>Lunes a Viernes: 8:00 - 18:00 hrs</span>
                    </div>
                </div>
                
                <button type="button" class="nbr-service-btn nbr-modal-btn" data-modal-target="nbr-modal-topografia">Cotizar servicio</button>
            </div>
        </div>
        
        <!-- Service 3 - Maquinaria -->
        <div class="nbr-service-card">
            <div class="nbr-service-img">
                <img src="<?= base_url('images/Servicios/renta.png') ?>" alt="Renta de Maquinaria">
                <span class="nbr-service-badge">Equipo disponible</span>
            </div>
            <div class="nbr-service-content">
                <h3 class="nbr-service-title">Renta de Maquinaria para Construcción</h3>
                <p style="margin-bottom: 20px; color: var(--nbr-light-text);">Flota moderna de maquinaria pesada con operadores certificados y mantenimiento preventivo incluido.</p>
                
                <div class="nbr-service-features">
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-truck-monster"></i>
                        </div>
                        <span class="nbr-feature-text">Maquinaria pesada</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-truck-monster"></i>
                        </div>
                        <span class="nbr-feature-text">Equipos de construcción</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-truck-monster"></i>
                        </div>
                        <span class="nbr-feature-text">Tecnología avanzada para medición</span>
                    </div>
                    <div class="nbr-feature-item">
                        <div class="nbr-feature-icon">
                            <i class="fas fa-truck-monster"></i>
                        </div>
                        <span class="nbr-feature-text">Soporte integral</span>
                    </div>
                    
                </div>
                
                <div class="nbr-service-contact">
                    <h4 class="nbr-contact-title">Disponibilidad:</h4>
                    <div class="nbr-contact-item">
                        <i class="fas fa-phone nbr-contact-icon"></i>
                        <span>+52 (958) 119 9173</span>
                    </div>
                    <div class="nbr-contact-item">
                        <i class="fas fa-envelope nbr-contact-icon"></i>
                        <span>maquinaria@nelvabienesraices.com</span>
                    </div>
                    <div class="nbr-contact-item">
                        <i class="fas fa-calendar-check nbr-contact-icon"></i>
                        <span>Reservas con 48 hrs de anticipación</span>
                    </div>
                </div>
                
                <button type="button" class="nbr-service-btn nbr-modal-btn" data-modal-target="nbr-modal-maquinaria">Consultar disponibilidad</button>
            </div>
        </div>
    </div>
</section>

<!-- Modal Topografía -->
<div id="nbr-modal-topografia" class="nbr-modal">
    <div class="nbr-modal-content">
        <span class="nbr-close-modal">&times;</span>
        <div class="nbr-modal-header">
            <h2>Servicio Profesional de Topografía</h2>
       </div>
        <div class="nbr-modal-body">
            <div class="nbr-modal-text">
                <p>El servicio de levantamiento topográfico para proporcionar mediciones precisas y detalladas de terrenos. Este proceso es clave para identificar los límites, las características físicas y las dimensiones exactas de una propiedad, siendo una herramienta fundamental para proyectos de construcción, desarrollo inmobiliario, trámites legales y más.</p>
               
                <p><strong>Tipos de levantamientos:</strong></p>
                <ul>
                    <li>Topografía de lote</li>
                    <li>Nivelación de terreno</li>
                    <li>Plano de construcción</li>
                    <li>Estudios de pendiente</li>
                    <li>Delimitación de predios</li>
                </ul>
            </div>
            <div class="nbr-modal-gallery">
                <div class="nbr-carousel" id="nbr-topografia-carousel">
                    <div class="nbr-carousel-inner">
                        <div class="nbr-carousel-item active">
                            <a href="<?= base_url('images/Servicios/topografia.png') ?>" data-lightbox="nbr-topografia" data-title="Equipo de topografía en acción">
                                <img src="<?= base_url('images/Servicios/topografia.png') ?>" alt="Equipo de topografía">
                            </a>
                            <div class="nbr-carousel-caption">Equipo profesional trabajando</div>
                        </div>
                        <div class="nbr-carousel-item">
                            <a href="<?= base_url('images/Servicios/topografia1.png') ?>" data-lightbox="nbr-topografia" data-title="Trabajo de campo preciso">
                                <img src="<?= base_url('images/Servicios/topografia1.png') ?>" alt="Trabajo de campo">
                            </a>
                            <div class="nbr-carousel-caption">Trabajo de campo preciso</div>
                        </div>
                        <div class="nbr-carousel-item">
                            <a href="<?= base_url('images/Servicios/topografia2.png') ?>" data-lightbox="nbr-topografia" data-title="Informes detallados">
                                <img src="<?= base_url('images/Servicios/topografia2.png') ?>" alt="Informes topográficos">
                            </a>
                            <div class="nbr-carousel-caption">Documentación profesional</div>
                        </div>
                    </div>
                    <div class="nbr-carousel-controls">
                        <button class="nbr-carousel-control prev" onclick="nbrMoveSlide('nbr-topografia-carousel', -1)">&#10094;</button>
                        <button class="nbr-carousel-control next" onclick="nbrMoveSlide('nbr-topografia-carousel', 1)">&#10095;</button>
                    </div>
                    <div class="nbr-carousel-indicators">
                        <span class="nbr-carousel-indicator active" onclick="nbrGoToSlide('nbr-topografia-carousel', 0)"></span>
                        <span class="nbr-carousel-indicator" onclick="nbrGoToSlide('nbr-topografia-carousel', 1)"></span>
                        <span class="nbr-carousel-indicator" onclick="nbrGoToSlide('nbr-topografia-carousel', 2)"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Maquinaria -->
<div id="nbr-modal-maquinaria" class="nbr-modal">
    <div class="nbr-modal-content">
        <span class="nbr-close-modal">&times;</span>
        <div class="nbr-modal-header">
            <h2>Renta de Maquinaria para Construcción</h2>
        </div>
        <div class="nbr-modal-body">
            <div class="nbr-modal-text">
                <p>Ofrecemos renta de equipo de construcción de alta calidad, como excavadoras, compactadoras y herramientas especializadas, ideales para proyectos de cualquier escala. Todos nuestros equipos están en excelentes condiciones, garantizando eficiencia y seguridad. Al alquilar con nosotros, obtienes maquinaria de última tecnología sin los costos de mantenimiento y almacenamiento.</p>
                
                <p><strong>Nuestro inventario incluye:</strong></p>
                <ul>
                    <li>Retroexcavadoras CAT 320</li>
                    <li>Excavadoras hidráulicas</li>
                    <li>Vibrocompactadores</li>
                    <li>Camiones de volteo 14m³</li>
                </ul>
                
            </div>
            <div class="nbr-modal-gallery">
                <div class="nbr-carousel" id="nbr-maquinaria-carousel">
                    <div class="nbr-carousel-inner">
                        <div class="nbr-carousel-item active">
                            <a href="<?= base_url('images/Servicios/maquinaria1.png') ?>" data-lightbox="nbr-maquinaria" data-title="Retroexcavadora CAT 320">
                                <img src="<?= base_url('images/Servicios/maquinaria1.png') ?>" alt="Retroexcavadora">
                            </a>
                            <div class="nbr-carousel-caption">Retroexcavadora CAT 320</div>
                        </div>
                        <div class="nbr-carousel-item">
                            <a href="<?= base_url('images/Servicios/maquinaria2.png') ?>" data-lightbox="nbr-maquinaria" data-title="Bulldozer D6T">
                                <img src="<?= base_url('images/Servicios/maquinaria2.png') ?>" alt="Bulldozer">
                            </a>
                            <div class="nbr-carousel-caption">Bulldozer D6T</div>
                        </div>
                        <div class="nbr-carousel-item">
                            <a href="<?= base_url('images/Servicios/maquinaria3.png') ?>" data-lightbox="nbr-maquinaria" data-title="Camiones de volteo">
                                <img src="<?= base_url('images/Servicios/maquinaria3.png') ?>" alt="Camiones de volteo">
                            </a>
                            <div class="nbr-carousel-caption">Volteo de 14m³</div>
                        </div>
                        <div class="nbr-carousel-item">
                            <a href="<?= base_url('images/Servicios/maquinaria4.png') ?>" data-lightbox="nbr-maquinaria" data-title="Excavadora hidráulica">
                                <img src="<?= base_url('images/Servicios/maquinaria4.png') ?>" alt="Excavadora">
                            </a>
                            <div class="nbr-carousel-caption">Excavadora hidráulica</div>
                        </div>
                    </div>
                    <div class="nbr-carousel-controls">
                        <button class="nbr-carousel-control prev" onclick="nbrMoveSlide('nbr-maquinaria-carousel', -1)">&#10094;</button>
                        <button class="nbr-carousel-control next" onclick="nbrMoveSlide('nbr-maquinaria-carousel', 1)">&#10095;</button>
                    </div>
                    <div class="nbr-carousel-indicators">
                        <span class="nbr-carousel-indicator active" onclick="nbrGoToSlide('nbr-maquinaria-carousel', 0)"></span>
                        <span class="nbr-carousel-indicator" onclick="nbrGoToSlide('nbr-maquinaria-carousel', 1)"></span>
                        <span class="nbr-carousel-indicator" onclick="nbrGoToSlide('nbr-maquinaria-carousel', 2)"></span>
                        <span class="nbr-carousel-indicator" onclick="nbrGoToSlide('nbr-maquinaria-carousel', 3)"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script>
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Modal functionality
    // Modal functionality - Versión corregida
    document.addEventListener('DOMContentLoaded', function() {
        // Manejo de modales con delegación de eventos
        document.addEventListener('click', function(e) {
            // Abrir modal
            if (e.target.closest('[data-modal-target]')) {
                e.preventDefault();
                const modalId = e.target.closest('[data-modal-target]').getAttribute('data-modal-target');
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.style.display = 'block';
                    document.body.style.overflow = 'hidden';
                    
                    // Reset carousel
                    const carouselId = modalId + '-carousel';
                    if (document.getElementById(carouselId)) {
                        nbrGoToSlide(carouselId, 0);
                    }
                }
            }
            
            // Cerrar modal
            if (e.target.closest('.nbr-close-modal') || e.target.classList.contains('nbr-modal')) {
                e.preventDefault();
                const modal = e.target.closest('.nbr-modal');
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Previene el comportamiento por defecto de los enlaces #
        document.querySelectorAll('a[href="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
            });
        });
    });
        
    // Carousel functionality
    function nbrMoveSlide(carouselId, direction) {
        const carousel = document.getElementById(carouselId);
        const inner = carousel.querySelector('.nbr-carousel-inner');
        const items = carousel.querySelectorAll('.nbr-carousel-item');
        const indicators = carousel.querySelectorAll('.nbr-carousel-indicator');
        
        let currentIndex = Array.from(items).findIndex(item => item.classList.contains('active'));
        
        items[currentIndex].classList.remove('active');
        indicators[currentIndex].classList.remove('active');
        
        let newIndex = currentIndex + direction;
        
        if (newIndex < 0) newIndex = items.length - 1;
        if (newIndex >= items.length) newIndex = 0;
        
        items[newIndex].classList.add('active');
        indicators[newIndex].classList.add('active');
        
        inner.style.transform = `translateX(-${newIndex * 100}%)`;
    }
    
    function nbrGoToSlide(carouselId, index) {
        const carousel = document.getElementById(carouselId);
        const inner = carousel.querySelector('.nbr-carousel-inner');
        const items = carousel.querySelectorAll('.nbr-carousel-item');
        const indicators = carousel.querySelectorAll('.nbr-carousel-indicator');
        
        items.forEach(item => item.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));
        
        items[index].classList.add('active');
        indicators[index].classList.add('active');
        
        inner.style.transform = `translateX(-${index * 100}%)`;
    }
    
    // Initialize carousels and lightbox
    document.addEventListener('DOMContentLoaded', function() {
        // Set up lightbox
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'showImageNumberLabel': true,
            'disableScrolling': true,
            'alwaysShowNavOnTouchDevices': true,
            'fadeDuration': 300,
            'imageFadeDuration': 300,
            'positionFromTop': 100
        });

        // Auto-advance carousels when modal is open
        const nbrCarouselIntervals = {};
        
        nbrModals.forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    const carouselId = this.id + '-carousel';
                    if (nbrCarouselIntervals[carouselId]) {
                        clearInterval(nbrCarouselIntervals[carouselId]);
                    }
                }
            });
            
            const modalId = modal.id;
            const carouselId = modalId + '-carousel';
            if (document.getElementById(carouselId)) {
                modal.addEventListener('mouseenter', function() {
                    nbrCarouselIntervals[carouselId] = setInterval(() => {
                        nbrMoveSlide(carouselId, 1);
                    }, 5000);
                });
                
                modal.addEventListener('mouseleave', function() {
                    if (nbrCarouselIntervals[carouselId]) {
                        clearInterval(nbrCarouselIntervals[carouselId]);
                    }
                });
            }
        });
    });
</script>

<?= view('templates/footer') ?>