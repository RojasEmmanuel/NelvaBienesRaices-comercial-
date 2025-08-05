<!-- Asi se incrusta la sección del navbar y se le da el titulo a la pagina -->
<?= view('templates/navbar', ['title' => 'Servicios - Nelva Bienes Raíces']) ?>


<style>
    :root {
        --primary3: #2c3e50;
        --secondary3: #3498db;
        --accent3: #e74c3c;
        --light3: #ecf0f1;
        --dark3: #2c3e50;
        --text3: #333;
        --text-light3: #7f8c8d;
    }
    
    body {
        color: var(--text3);
        line-height: 1.6;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    /* Hero Section with Parallax */
    .hero {
        height: 70vh;
        background: url('images/Servicios/parallax.png') no-repeat center center/cover;
        background-attachment: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        position: relative;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
    }
    
    .hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        padding: 0 2rem;
    }
    
    .hero h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .hero p {
        font-size: 1.2rem;
        margin-bottom: 2rem;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }
    
    .btn {
        display: inline-block;
        padding: 0.8rem 1.8rem;
        background-color: var(--secondary3);
        color: white;
        text-decoration: none;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }
    
    .btn:hover {
        background-color: var(--primary3);
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    /* About Section */
    .section {
        padding: 5rem 5%;
        max-width: 1400px;
        margin: 0 auto;
    }
    
    .section-title {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    .section-title h2 {
        font-size: 2.5rem;
        color: var(--primary);
        margin-bottom: 1rem;
    }
    
    .section-title p {
        color: rgb(51,51,51);
        max-width: 700px;
        margin: 0 auto;
    }
    
    /* Services Section */
    .services {
        background-color: #f9f9f9;
    }
    
    .services-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }
    
    .service-card {
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    
    .service-img {
        height: 250px;
        overflow: hidden;
    }
    
    .service-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .service-card:hover .service-img img {
        transform: scale(1.1);
    }
    
    .service-content {
        padding: 2rem;
    }
    
    .service-content h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: var(--primary3);
    }
    
    .service-features {
        margin: 1.5rem 0;
    }
    
    .feature-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 0.8rem;
    }
    
    .feature-icon {
        color: var(--secondary3);
        margin-right: 1rem;
        font-size: 1.2rem;
        margin-top: 0.2rem;
    }
    
    .service-btn {
        display: inline-block;
        margin-top: 1rem;
        width: 100%;
        text-align: center;
        background-color: var(--primary3);
    }
    
    .service-btn:hover {
        background-color: var(--secondary3);
    }
    
    .contact-info2 {
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 1px solid #eee;
    }
    
    .contact-item2 {
        display: flex;
        align-items: center;
        margin-top: 1rem;
    }
    
    .contact-icon {
        margin-right: 1rem;
        color: var(--secondary3);
        font-size: 1.2rem;
        width: 20px;
        text-align: center;
    }
    
    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.8);
        transition: all 0.3s ease;
    }
    
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 30px;
        border-radius: 10px;
        width: 80%;
        max-width: 900px;
        box-shadow: 0 5px 30px rgba(0,0,0,0.3);
        position: relative;
        animation: modalopen 0.5s;
    }
    
    @keyframes modalopen {
        from {opacity: 0; transform: translateY(-50px);}
        to {opacity: 1; transform: translateY(0);}
    }
    
    .close-modal {
        position: absolute;
        top: 15px;
        right: 25px;
        font-size: 28px;
        font-weight: bold;
        color: #aaa;
        cursor: pointer;
        transition: color 0.3s;
    }
    
    .close-modal:hover {
        color: var(--accent3);
    }
    
    .modal-header {
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
        margin-bottom: 20px;
    }
    
    .modal-header h2 {
        color: var(--primary3);
        font-size: 2rem;
        margin-bottom: 10px;
    }
    
    .modal-body {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
    }
    
    .modal-text {
        flex: 1;
        min-width: 300px;
    }
    
    .modal-text p {
        margin-bottom: 20px;
        line-height: 1.7;
    }
    
    .modal-gallery {
        flex: 1;
        min-width: 300px;
    }
    
    /* Carrusel de imágenes */
    .carousel {
        position: relative;
        width: 100%;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    
    .carousel-inner {
        display: flex;
        transition: transform 0.5s ease;
    }
    
    .carousel-item {
        min-width: 100%;
        position: relative;
    }
    
    .carousel-item img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        display: block;
    }
    
    .carousel-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0,0,0,0.6);
        color: white;
        padding: 10px;
        text-align: center;
    }
    
    .carousel-controls {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
        z-index: 10;
    }
    
    .carousel-control {
        background: rgba(255,255,255,0.5);
        border: none;
        color: var(--primary3);
        font-size: 1.5rem;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 10px;
        transition: all 0.3s;
    }
    
    .carousel-control:hover {
        background: rgba(255,255,255,0.8);
    }
    
    .carousel-indicators {
        display: flex;
        justify-content: center;
        padding: 10px 0;
    }
    
    .indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #ccc;
        margin: 0 5px;
        cursor: pointer;
        transition: background 0.3s;
    }
    
    .indicator.active {
        background: var(--secondary3);
    }
    
    /* Responsive Design */
    @media (max-width: 992px) {
        .hero h1 {
            font-size: 2.5rem;
        }
        
        .hero p {
            font-size: 1.1rem;
        }
        
        .modal-content {
            width: 90%;
        }
    }
    
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2rem;
        }
        
        .section {
            padding: 3rem 5%;
        }
        
        .modal-body {
            flex-direction: column;
        }
        
        .modal-text, .modal-gallery {
            min-width: 100%;
        }
    }
    
    @media (max-width: 576px) {
        .hero h1 {
            font-size: 1.8rem;
        }
        
        .section-title h2 {
            font-size: 2rem;
        }
        
        .services-container {
            grid-template-columns: 1fr;
        }
        
        .modal-content {
            width: 95%;
            padding: 20px;
            margin: 10% auto;
        }
        
        .carousel-item img {
            height: 200px;
        }
    }
</style>


<section class="hero">
    <div class="hero-content">
        <h1>Soluciones inmobiliarias integrales en Oaxaca</h1>
        <p>Nos especializamos en la venta de lotes con alta plusvalía, servicios de topografía, renta de maquinaria y desarrollo de construcción, con enfoque de calidad y cuidado del medio ambiente.</p>
        <a href="#servicios" class="btn">Nuestros Servicios</a>
    </div>
</section>

<!-- Services Section -->
<section class="section services" id="servicios">
    <div class="section-title">
        <h2>Nuestros Servicios</h2>
        <p>Ofrecemos soluciones integrales para tus proyectos inmobiliarios y de construcción en los principales destinos turísticos de Oaxaca.</p>
    </div>
    
    <div class="services-container">
        <!-- Service 1 -->
        <div class="service-card">
            <div class="service-img">
                <img src="images/Servicios/ventaTerrenos.png" alt="Venta de Terrenos">
            </div>
            <div class="service-content">
                <h3>Venta de Terrenos</h3>
                <div class="service-features">
                    <div class="feature-item">
                        <i class="fas fa-umbrella-beach feature-icon"></i>
                        <p>Acceso a la playa</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-binoculars feature-icon"></i>
                        <p>Vistas panorámicas al mar</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-swimming-pool feature-icon"></i>
                        <p>Zona para deportes acuáticos</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-fish feature-icon"></i>
                        <p>Zona de pesca</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-archway feature-icon"></i>
                        <p>Cercanía a sitios arqueológicos o culturales</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-ruler-combined feature-icon"></i>
                        <p>Terrenos desde 200m²</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-tree feature-icon"></i>
                        <p>Áreas verdes y naturaleza</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-utensils feature-icon"></i>
                        <p>Cercanía a restaurantes y mercados locales</p>
                    </div>
                </div>
                
                <div class="contact-info2">
                    <h4>Contacto para este servicio:</h4>
                    <div class="contact-item2">
                        <i class="fas fa-phone contact-icon"></i>
                        <p>+52 (958) 119 9171</p>
                    </div>
                    <div class="contact-item2">
                        <i class="fas fa-envelope contact-icon"></i>
                        <p>marketing@nelvabienesraices.com</p>
                    </div>
                    <div class="contact-item2">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <p>Oaxaca, México</p>
                    </div>
                </div>
                
                <a href="#" class="btn service-btn">Más Información</a>
            </div>
        </div>
        
        <!-- Service 2 -->
        <div class="service-card">
            <div class="service-img">
                <img src="images/Servicios/topografia.png" alt="Levantamiento Topográfico">
            </div>
            <div class="service-content">
                <h3>Levantamiento Topográfico</h3>
                <div class="service-features">
                    <div class="feature-item">
                        <i class="fas fa-map-marked-alt feature-icon"></i>
                        <p>Estudio detallado del terreno</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-mountain feature-icon"></i>
                        <p>Medición precisa de desniveles y altimetría</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-globe-americas feature-icon"></i>
                        <p>Análisis de las características geográficas</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-file-alt feature-icon"></i>
                        <p>Informe técnico sobre el perfil del terreno</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-leaf feature-icon"></i>
                        <p>Detección de áreas verdes y vegetación relevante</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-water feature-icon"></i>
                        <p>Estudio de drenaje y cuerpos de agua cercanos</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-tree feature-icon"></i>
                        <p>Evaluación de la proximidad a zonas naturales y reservas</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-lightbulb feature-icon"></i>
                        <p>Recomendaciones para proyectos de construcción</p>
                    </div>
                </div>
                
                <div class="contact-info2">
                    <h4>Contacto para este servicio:</h4>
                    <div class="contact-item2">
                        <i class="fas fa-phone contact-icon"></i>
                        <p>+52 (958) 119 9171</p>
                    </div>
                    <div class="contact-item2">
                        <i class="fas fa-envelope contact-icon"></i>
                        <p>marketing@nelvabienesraices.com</p>
                    </div>
                    <div class="contact-item2">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <p>Oaxaca, México</p>
                    </div>
                </div>
                
                <a href="#modal-topografia" class="btn service-btn modal-btn">Más Información</a>
            </div>
        </div>
        
        <!-- Service 3 -->
        <div class="service-card">
            <div class="service-img">
                <img src="images/Servicios/renta.png" alt="Renta de Maquinaria">
            </div>
            <div class="service-content">
                <h3>Renta de Maquinaria</h3>
                <p>En Nelva Bienes Raíces, entendemos que cada proyecto tiene sus propias necesidades y requerimientos en cuanto a maquinaria y equipo. Por ello, te ofrecemos una amplia gama de equipos de alta calidad para facilitar tu trabajo, sin la necesidad de hacer una gran inversión en compra de maquinaria.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <i class="fas fa-truck-monster feature-icon"></i>
                        <p>Maquinaria pesada</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-tools feature-icon"></i>
                        <p>Equipos de construcción</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-satellite-dish feature-icon"></i>
                        <p>Tecnología avanzada para medición</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-headset feature-icon"></i>
                        <p>Soporte integral</p>
                    </div>
                </div>
                
                <div class="contact-info2">
                    <h4>Contacto para este servicio:</h4> 
                    <div class="contact-item2">
                        <i class="fas fa-phone contact-icon"></i>
                        <p>+52 (958) 119 9171</p>
                    </div>
                    <div class="contact-item2">
                        <i class="fas fa-envelope contact-icon"></i>
                        <p>marketing@nelvabienesraices.com</p>
                    </div>
                    <div class="contact-item2">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <p>Oaxaca, México</p>
                    </div>
                </div>
                
                <a href="#modal-maquinaria" class="btn service-btn modal-btn">Más Información</a>
            </div>
        </div>
    </div>
</section>

<!-- Modal Topografía -->
<div id="modal-topografia" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>Contamos con</h2>
            <p>Servicio profesional de topografía para tus proyectos</p>
        </div>
        <div class="modal-body">
            <div class="modal-text">
                <p>El servicio de levantamiento topográfico para proporcionar mediciones precisas y detalladas de terrenos. Este proceso es clave para identificar los límites, las características físicas y las dimensiones exactas de una propiedad, siendo una herramienta fundamental para proyectos de construcción, desarrollo inmobiliario, trámites legales y más.</p>
                
                <p><strong>Beneficios de nuestro servicio:</strong></p>
                <ul>
                    <li>Precisión milimétrica en mediciones</li>
                    <li>Equipo de última generación</li>
                    <li>Topógrafos certificados</li>
                    <li>Informes técnicos detallados</li>
                    <li>Asesoramiento profesional</li>
                </ul>
            </div>
            <div class="modal-gallery">
                <div class="carousel" id="topografia-carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="images/Servicios/topografia1.jpg" data-lightbox="topografia" data-title="Equipo de topografía en acción">
                                <img src="images/Servicios/topografia1.png" alt="Equipo de topografía">
                            </a>
                            <div class="carousel-caption">Equipo profesional trabajando</div>
                        </div>
                        <div class="carousel-item">
                            <a href="images/Servicios/topografia2.jpg" data-lightbox="topografia" data-title="Mediciones precisas con tecnología avanzada">
                                <img src="images/Servicios/topografia2.png" alt="Tecnología de medición">
                            </a>
                            <div class="carousel-caption">Tecnología de punta</div>
                        </div>
                        <div class="carousel-item">
                            <a href="images/Servicios/topografia3.jpg" data-lightbox="topografia" data-title="Informes detallados y profesionales">
                                <img src="images/Servicios/topografia3.png" alt="Informes topográficos">
                            </a>
                            <div class="carousel-caption">Documentación profesional</div>
                        </div>
                    </div>
                    <div class="carousel-controls">
                        <button class="carousel-control prev" onclick="moveSlide('topografia-carousel', -1)">&#10094;</button>
                        <button class="carousel-control next" onclick="moveSlide('topografia-carousel', 1)">&#10095;</button>
                    </div>
                    <div class="carousel-indicators">
                        <span class="indicator active" onclick="goToSlide('topografia-carousel', 0)"></span>
                        <span class="indicator" onclick="goToSlide('topografia-carousel', 1)"></span>
                        <span class="indicator" onclick="goToSlide('topografia-carousel', 2)"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Maquinaria -->
<div id="modal-maquinaria" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>Renta de Maquinaria</h2>
            <p>Renta de Equipo de Construcción</p>
        </div>
        <div class="modal-body">
            <div class="modal-text">
                <p>Ofrecemos renta de equipo de construcción de alta calidad, como excavadoras, compactadoras y herramientas especializadas, ideales para proyectos de cualquier escala. Todos nuestros equipos están en excelentes condiciones, garantizando eficiencia y seguridad. Al alquilar con nosotros, obtienes maquinaria de última tecnología sin los costos de mantenimiento y almacenamiento.</p>
                
                <p><strong>Nuestro inventario incluye:</strong></p>
                <ul>
                    <li>Retroexcavadoras</li>
                    <li>Excavadoras</li>
                    <li>Vibrocompactadores</li>
                    <li>Camiones de volteo</li>
                </ul>
                

            </div>
            <div class="modal-gallery">
                <div class="carousel" id="maquinaria-carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="images/Servicios/maquinaria1.jpg" data-lightbox="maquinaria" data-title="Retroexcavadora en perfecto estado">
                                <img src="images/Servicios/maquinaria1.png" alt="Retroexcavadora">
                            </a>
                            <div class="carousel-caption">Retroexcavadora CAT</div>
                        </div>
                        <div class="carousel-item">
                            <a href="images/Servicios/maquinaria2.jpg" data-lightbox="maquinaria" data-title="Bulldozer para movimiento de tierra">
                                <img src="images/Servicios/maquinaria2.png" alt="Bulldozer">
                            </a>
                            <div class="carousel-caption">Retroexcavadora CAT</div>
                        </div>
                        <div class="carousel-item">
                            <a href="images/Servicios/maquinaria3.jpg" data-lightbox="maquinaria" data-title="Equipos de compactación">
                                <img src="images/Servicios/maquinaria3.png" alt="Compactadores">
                            </a>
                            <div class="carousel-caption">Volteo</div>
                        </div>
                        <div class="carousel-item">
                            <a href="images/Servicios/maquinaria4.jpg" data-lightbox="maquinaria" data-title="Camiones de volteo para transporte">
                                <img src="images/Servicios/maquinaria4.png" alt="Camiones de volteo">
                            </a>
                            <div class="carousel-caption">Retroexcavadora</div>
                        </div>
                    </div>
                    <div class="carousel-controls">
                        <button class="carousel-control prev" onclick="moveSlide('maquinaria-carousel', -1)">&#10094;</button>
                        <button class="carousel-control next" onclick="moveSlide('maquinaria-carousel', 1)">&#10095;</button>
                    </div>
                    <div class="carousel-indicators">
                        <span class="indicator active" onclick="goToSlide('maquinaria-carousel', 0)"></span>
                        <span class="indicator" onclick="goToSlide('maquinaria-carousel', 1)"></span>
                        <span class="indicator" onclick="goToSlide('maquinaria-carousel', 2)"></span>
                        <span class="indicator" onclick="goToSlide('maquinaria-carousel', 3)"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script>
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^=""]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Modal functionality
    const modalBtns = document.querySelectorAll('.modal-btn');
    const modals = document.querySelectorAll('.modal');
    const closeBtns = document.querySelectorAll('.close-modal');
    
    modalBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const modalId = this.getAttribute('href');
            document.querySelector(modalId).style.display = 'block';
            document.body.style.overflow = 'hidden';
        });
    });
    
    closeBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            this.closest('.modal').style.display = 'none';
            document.body.style.overflow = 'auto';
        });
    });
    
    window.addEventListener('click', function(e) {
        if (e.target.classList.contains('modal')) {
            e.target.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
    
    // Carousel functionality
    function moveSlide(carouselId, direction) {
        const carousel = document.getElementById(carouselId);
        const inner = carousel.querySelector('.carousel-inner');
        const items = carousel.querySelectorAll('.carousel-item');
        const indicators = carousel.querySelectorAll('.indicator');
        
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
    
    function goToSlide(carouselId, index) {
        const carousel = document.getElementById(carouselId);
        const inner = carousel.querySelector('.carousel-inner');
        const items = carousel.querySelectorAll('.carousel-item');
        const indicators = carousel.querySelectorAll('.indicator');
        
        items.forEach(item => item.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));
        
        items[index].classList.add('active');
        indicators[index].classList.add('active');
        
        inner.style.transform = `translateX(-${index * 100}%)`;
    }
    
    // Initialize carousels
    document.addEventListener('DOMContentLoaded', function() {
        // Set up lightbox
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'showImageNumberLabel': true,
            'disableScrolling': true
        });
        
        // Auto-advance carousels
        setInterval(() => {
            if (document.getElementById('modal-topografia').style.display === 'block') {
                moveSlide('topografia-carousel', 1);
            }
            if (document.getElementById('modal-maquinaria').style.display === 'block') {
                moveSlide('maquinaria-carousel', 1);
            }
        }, 5000);
    });
</script>

<div id="footer-container"></div>
<script src="template.js"></script>



<!-- Asi se incrusta la sección del footer -->
<?= view('templates/footer') ?>