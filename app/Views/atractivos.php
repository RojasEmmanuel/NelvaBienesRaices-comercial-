<?= view('templates/navbar', ['title' => 'Atractivos - Nelva Bienes Raíces']) ?>

<style>
    /* Variables CSS */
    :root {
        --primary: #2a9d8f;
        --secondary: #264653;
        --accent: #e9c46a;
        --light: #f8f9fa;
        --dark: #343a40;
        --text: #4a4a4a;
        --overlay: rgba(38, 70, 83, 0.85);
    }
    
    /* Reset básico */
    body.nelva-atractivos * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body.nelva-atractivos {
        font-family: 'Open Sans', sans-serif;
        color: var(--text);
        line-height: 1.7;
        background-color: #f5f5f5;
        overflow-x: hidden;
    }
    
    /* Sección Hero */
    .parallax-hero {
        position: relative;
        height: 100vh;
        min-height: 500px;
        max-height: 900px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
    }
    
    .parallax-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://www.oaxaca.gob.mx/comunicacion/wp-content/uploads/sites/28/2025/06/e37ab0ea-8942-47b1-b57d-7e2aab7f7546.jpeg') center/cover no-repeat;
        z-index: -1;
        transform: translateZ(0);
        will-change: transform;
    }
    
    .parallax-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: var(--overlay);
        z-index: 0;
    }
    
    .parallax-content {
        position: relative;
        z-index: 1;
        max-width: 900px;
        padding: 0 2rem;
        transform: translateZ(0);
    }
    
    .parallax-hero h1 {
        font-family: 'Poppins', sans-serif;
        font-size: clamp(2rem, 5vw, 3.5rem);
        margin-bottom: 1.5rem;
        font-weight: 700;
        text-shadow: 0 2px 10px rgba(0,0,0,0.7);
        animation: fadeInUp 1s ease-out;
        padding: 0 1rem;
    }
    
    .parallax-hero p {
        font-size: clamp(1rem, 2.5vw, 1.3rem);
        margin-bottom: 2.5rem;
        text-shadow: 0 1px 5px rgba(0,0,0,0.2);
        animation: fadeInUp 1s ease-out 0.3s forwards;
        opacity: 0;
        padding: 0 1rem;
    }
    
    .scroll-indicator {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        animation: bounce 2s infinite;
    }
    
    .scroll-indicator i {
        font-size: 2rem;
        color: white;
    }
    
    /* Contenedor Principal */
    .destinations-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: clamp(3rem, 5vw, 5rem) 1.5rem;
    }
    
    /* Grid de Destinos - Responsivo */
    .destination-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(min(300px, 100%), 1fr));
        gap: 2.5rem;
        margin-top: 3rem;
    }
    
    /* Tarjetas de Destino - Versión Mejorada */
    .destination-card-alt {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    
    .destination-card-alt:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }
    
    .card-header-alt {
        position: relative;
        height: clamp(220px, 25vw, 280px);
        overflow: hidden;
    }
    
    .card-image-alt {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }
    
    .destination-card-alt:hover .card-image-alt {
        transform: scale(1.05);
    }
    
    .card-badge-alt {
        position: absolute;
        bottom: 20px;
        left: 20px;
        background: var(--accent);
        color: var(--secondary);
        padding: 0.5rem 1rem;
        border-radius: 6px;
        font-weight: 700;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 3px 8px rgba(0,0,0,0.15);
    }
    
    .card-body-alt {
        padding: 1.8rem;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    
    .card-title-alt {
        font-family: 'Poppins', sans-serif;
        font-size: clamp(1.3rem, 2vw, 1.5rem);
        margin-bottom: 1rem;
        color: var(--secondary);
        font-weight: 700;
        display: flex;
        align-items: center;
    }
    
    .card-title-alt:before {
        content: '';
        display: inline-block;
        width: 25px;
        height: 3px;
        background: var(--accent);
        margin-right: 12px;
    }
    
    .card-description-alt {
        margin: 1rem 0;
        font-size: clamp(0.9rem, 1.5vw, 1rem);
        color: #555;
        line-height: 1.7;
    }
    
    .card-features-alt {
        margin: 1.2rem 0;
        display: flex;
        flex-wrap: wrap;
        gap: 0.6rem;
    }
    
    .feature-tag {
        background: rgba(233, 196, 106, 0.2);
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.8rem;
        color: var(--secondary);
        border: 1px solid rgba(233, 196, 106, 0.3);
    }
    
    .card-footer-alt {
        margin-top: auto;
        padding-top: 1.2rem;
        border-top: 1px solid #eee;
    }
    
    .location-info-alt {
        display: flex;
        align-items: flex-start;
        gap: 0.8rem;
        margin-bottom: 1.2rem;
    }
    
    .location-icon {
        color: var(--primary);
        font-size: 1.2rem;
        margin-top: 0.2rem;
    }
    
    .location-text {
        font-size: 0.9rem;
        color: #666;
        line-height: 1.6;
    }
    
    .location-text strong {
        color: var(--secondary);
    }
    
    .gallery-alt {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0.8rem;
        margin: 1rem 0;
    }
    
    .gallery-alt img {
        width: 100%;
        height: clamp(80px, 10vw, 100px);
        object-fit: cover;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .gallery-alt img:hover {
        transform: scale(1.05);
        box-shadow: 0 3px 10px rgba(0,0,0,0.2);
    }
    
    .card-map-alt {
        width: 100%;
        height: clamp(150px, 20vw, 180px);
        border: none;
        border-radius: 10px;
        margin-top: 1rem;
        filter: grayscale(20%);
        transition: filter 0.4s ease;
    }
    
    .destination-card-alt:hover .card-map-alt {
        filter: grayscale(0%);
    }
    
    /* Títulos de Sección */
    .section-title2 {
        text-align: center;
        margin-bottom: 1rem;
        font-family: 'Poppins', sans-serif;
        color: var(--secondary);
        font-size: clamp(1.8rem, 5vw, 2.5rem);
        position: relative;
        padding: 0 1rem;
    }
    
    .section-subtitle2 {
        text-align: center;
        max-width: 700px;
        margin: 0 auto clamp(2rem, 4vw, 3rem);
        font-size: clamp(0.95rem, 2.5vw, 1.1rem);
        color: #4a4a4a;
        padding: 0 1rem;
    }
    
    /* Modal para la Galería */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.6);
        overflow: auto;
        touch-action: manipulation;
    }
    
    .modal-content {
        margin: auto;
        display: block;
        max-width: 95%;
        max-height: 90%;
        width: auto;
        height: auto;
        margin-top: 5vh;
        object-fit: contain;
    }
    
    .close {
        position: absolute;
        top: 15px;
        right: 25px;
        color: #f1f1f1;
        font-size: clamp(30px, 8vw, 40px);
        font-weight: bold;
        cursor: pointer;
        z-index: 1001;
    }
    
    /* Animaciones */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0) translateX(-50%);
        }
        40% {
            transform: translateY(-20px) translateX(-50%);
        }
        60% {
            transform: translateY(-10px) translateX(-50%);
        }
    }
    
    /* Media Queries para Responsividad */
    @media (min-width: 1200px) {
        .destination-grid {
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        }
        
        .card-body-alt {
            padding: 2rem;
        }
    }
    
    @media (min-width: 768px) and (max-width: 1199px) {
        .destination-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (max-width: 767px) {
        .parallax-hero {
            min-height: 400px;
            height: 80vh;
        }
        
        .destination-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        
        .card-header-alt {
            height: 250px;
        }
        
        .gallery-alt {
            grid-template-columns: repeat(3, 1fr);
        }
        
        .modal-content {
            max-width: 100%;
            max-height: 80%;
            margin-top: 10vh;
        }
        
        .close {
            top: 10px;
            right: 15px;
        }
    }
    
    @media (max-width: 480px) {
        .parallax-hero {
            min-height: 350px;
        }
        
        .card-header-alt {
            height: 200px;
        }
        
        .card-body-alt {
            padding: 1.5rem;
        }
        
        .gallery-alt img {
            height: 70px;
        }
        
        .modal-content {
            max-height: 70%;
            margin-top: 15vh;
        }
    }
    
    @media (hover: none) {
        .destination-card-alt:hover {
            transform: none;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        
        .destination-card-alt:hover .card-image-alt {
            transform: none;
        }
        
        .gallery-alt img:hover {
            transform: none;
            box-shadow: none;
        }
    }
</style>


<section class="parallax-hero">
    <div class="parallax-bg" id="parallaxBg"></div>
    <div class="parallax-overlay"></div>
    <div class="parallax-content">
        <h1>Descubre la Costa Mágica de Oaxaca</h1>
        <p>Descubre la riqueza de Oaxaca a través de sus increíbles destinos. Desde playas paradisíacas y mágicos manglares hasta imponentes montañas y sitios arqueológicos llenos de historia.</p>
    </div>
    <div class="scroll-indicator">
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<!-- Sección de Destinos -->
<div class="destinations-container">
    <h2 class="section-title2">Paraísos por Descubrir</h2>
    <p class="section-subtitle2">Explora estos destinos únicos en la costa de Oaxaca, donde la naturaleza y la cultura se unen para crear experiencias inolvidables.</p>
    
    <div class="destination-grid">
        <!-- Destino 1 - La Ventanilla -->
        <div class="destination-card-alt">
            <div class="card-header-alt">
                <img src="<?= base_url('images/atractivos/ventanilla3.png') ?>" alt="La Ventanilla" class="card-image-alt">
                <div class="card-badge-alt">Vida Natural</div>
            </div>
            
            <div class="card-body-alt">
                <h3 class="card-title-alt">Ventanilla Oax.</h3>
                
                <div class="card-features-alt">
                    <span class="feature-tag">Manglares</span>
                    <span class="feature-tag">Fauna</span>
                    <span class="feature-tag">Tranquilidad</span>
                </div>
                
                <p class="card-description-alt">
                    Ventanilla es un rincón paradisíaco en Oaxaca, famoso por su tranquilidad, paisajes naturales y su rica biodiversidad. Ideal para quienes buscan conexión con la naturaleza.
                </p>
                
                <div class="location-info-alt">
                    <i class="fas fa-map-marker-alt location-icon"></i>
                    <div>
                        <p class="location-text"><strong>Ubicación:</strong> La Ventanilla se encuentra a 12 km al oeste de Mazunte, en el municipio de Santa María Tonameca. Accesible por carretera desde Puerto Escondido (1.5 horas) o desde Pochutla (30 minutos).</p>
                    </div>
                </div>
                
                <div class="gallery-alt">
                    <img src="<?= base_url('images/atractivos/ventanilla1.png') ?>"  alt="Ventanilla 1" onclick="openModal(this)">
                    <img src="<?= base_url('images/atractivos/ventanilla2.png') ?>"  alt="Ventanilla 2" onclick="openModal(this)">
                    <img src="<?= base_url('images/atractivos/ventanilla4.png') ?>"  alt="Ventanilla 3" onclick="openModal(this)">
                    <img src="<?= base_url('images/atractivos/ventanilla5.png') ?>"  alt="Ventanilla 3" onclick="openModal(this)">
                </div>
            </div>
            
            <div class="card-footer-alt">
                <iframe class="card-map-alt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245780.23953209125!2d-96.94686960404245!3d15.734401019421178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85b92808fca9472d%3A0xc65df1b8df4192a6!2sPlaya%20La%20Ventanilla!5e1!3m2!1ses!2smx!4v1754415567220!5m2!1ses!2smx" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
        <!-- Destino 2 - Punta Cometa -->
        <div class="destination-card-alt">
            <div class="card-header-alt">
                <img src="<?= base_url('images/atractivos/puntacometa1.png') ?>"  alt="Punta Cometa" class="card-image-alt">
                <div class="card-badge-alt">Paisajes</div>
            </div>
            
            <div class="card-body-alt">
                <h3 class="card-title-alt">Punta Cometa</h3>
                
                <div class="card-features-alt">
                    <span class="feature-tag">Atardeceres</span>
                    <span class="feature-tag">Mirador</span>
                    <span class="feature-tag">Senderismo</span>
                </div>
                
                <p class="card-description-alt">
                    Punta Cometa, en Mazunte, es un rincón mágico donde el océano Pacífico se encuentra con la tierra en un espectáculo visual. Este mirador ofrece vistas panorámicas impresionantes.
                </p>
                
                <div class="location-info-alt">
                    <i class="fas fa-map-marker-alt location-icon"></i>
                    <div>
                        <p class="location-text"><strong>Ubicación:</strong> Punta Cometa se ubica en el extremo sur de Mazunte, a 250 km al sureste de la ciudad de Oaxaca. Se puede llegar caminando desde el centro de Mazunte (20 minutos).</p>
                    </div>
                </div>
                
                <div class="gallery-alt">
                    <img src="<?= base_url('images/atractivos/puntacometa2.png') ?>"  alt="Punta Cometa 1" onclick="openModal(this)">
                    <img src="<?= base_url('images/atractivos/puntacometa3.png') ?>"  alt="Punta Cometa 2" onclick="openModal(this)">
                    <img src="<?= base_url('images/atractivos/puntacometa4.png') ?>" alt="Punta Cometa 3" onclick="openModal(this)">
                    <img src="<?= base_url('images/atractivos/puntacometa5.png') ?>" alt="Punta Cometa 3" onclick="openModal(this)">
                    
                </div>
            </div>
            
            <div class="card-footer-alt">
                <iframe class="card-map-alt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3841.753280071125!2d-96.55874722543669!3d15.658121150313528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85b928402c82221d%3A0x7678ce7c27654759!2sPunta%20Cometa!5e0!3m2!1ses!2smx!4v1754415821086!5m2!1ses!2smx" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
        <!-- Destino 3 - Mazunte -->
        <div class="destination-card-alt">
            <div class="card-header-alt">
                <img src="<?= base_url('images/atractivos/mazunte1.png') ?>" alt="Mazunte" class="card-image-alt">
                <div class="card-badge-alt">Cultura</div>
            </div>
            
            <div class="card-body-alt">
                <h3 class="card-title-alt">Mazunte</h3>
                
                <div class="card-features-alt">
                    <span class="feature-tag">Playas</span>
                    <span class="feature-tag">Ecología</span>
                    <span class="feature-tag">Relax</span>
                </div>
                
                <p class="card-description-alt">
                    Mazunte es un paraíso costero en Oaxaca, conocido por sus playas vírgenes, aguas cristalinas y su ambiente tranquilo. Ideal para quienes buscan desconectar y disfrutar de la naturaleza.
                </p>
                
                <div class="location-info-alt">
                    <i class="fas fa-map-marker-alt location-icon"></i>
                    <div>
                        <p class="location-text"><strong>Ubicación:</strong> Mazunte se localiza en la costa del Pacífico, a 22 km al suroeste de Pochutla. Desde Oaxaca capital son aproximadamente 6 horas en auto.</p>
                    </div>
                </div>
                
                <div class="gallery-alt">
                    <img src="<?= base_url('images/atractivos/mazunte2.png') ?>" alt="Mazunte 1" onclick="openModal(this)">
                    <img src="<?= base_url('images/atractivos/mazunte3.png') ?>"  alt="Mazunte 2" onclick="openModal(this)">
                    <img src="<?= base_url('images/atractivos/mazunte4.png') ?>"  alt="Mazunte 3" onclick="openModal(this)">
                    <img src="<?= base_url('images/atractivos/mazunte5.png') ?>"  alt="Mazunte 3" onclick="openModal(this)">
                </div>
            </div>
            
            <div class="card-footer-alt">
                <iframe class="card-map-alt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3823.064229064683!2d-96.3846826856187!3d15.66994398873393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85b8d9a9a3d4e5a5%3A0x9e8a6b1b1b1b1b1b!2sMazunte%2C%20Oaxaca!5e1!3m2!1ses!2smx!4v1620000000000!5m2!1ses!2smx" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
        <!-- Destino 4 - San Agustinillo -->
        <div class="destination-card-alt">
            <div class="card-header-alt">
                <img src="<?= base_url('images/atractivos/agustinillo3.png') ?>" alt="San Agustinillo" class="card-image-alt">
                <div class="card-badge-alt">Paraíso</div>
            </div>
            
            <div class="card-body-alt">
                <h3 class="card-title-alt">San Agustinillo</h3>
                
                <div class="card-features-alt">
                    <span class="feature-tag">Tranquilidad</span>
                    <span class="feature-tag">Gastronomía</span>
                    <span class="feature-tag">Surf</span>
                </div>
                
                <p class="card-description-alt">
                    Descubre un rincón mágico en la costa del Pacífico mexicano, donde el ritmo pausado de las olas y la calidez de su gente crean un refugio perfecto para desconectarte del mundo.
                </p>
                
                <div class="location-info-alt">
                    <i class="fas fa-map-marker-alt location-icon"></i>
                    <div>
                        <p class="location-text"><strong>Ubicación:</strong> San Agustinillo se encuentra a solo 3 km al este de Mazunte. Se accede por la misma carretera costera que lleva a Mazunte y Zipolite.</p>
                    </div>
                </div>
                
                <div class="gallery-alt">
                    <img src="<?= base_url('images/atractivos/agustinillo1.png') ?>" alt="San Agustinillo 1" onclick="openModal(this)">
                    <img src="<?= base_url('images/atractivos/agustinillo2.png') ?>"  alt="San Agustinillo 2" onclick="openModal(this)">
                    <img src="<?= base_url('images/atractivos/agustinillo4.png') ?>" alt="San Agustinillo 3" onclick="openModal(this)">
                </div>
            </div>
            
            <div class="card-footer-alt">
                <iframe class="card-map-alt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3823.064229064683!2d-96.3846826856187!3d15.66994398873393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85b8d9a9a3d4e5a5%3A0x9e8a6b1b1b1b1b1b!2sSan%20Agustinillo%2C%20Oaxaca!5e1!3m2!1ses!2smx!4v1620000000000!5m2!1ses!2smx" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal para la galería -->
<div id="imageModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImage">
</div>

<script>
    // Efecto Parallax optimizado para móviles
    window.addEventListener('scroll', function() {
        const parallaxBg = document.getElementById('parallaxBg');
        // Reducir efecto en móviles para mejor rendimiento
        const intensity = window.innerWidth > 768 ? 0.5 : 0.3;
        let scrollPosition = window.pageYOffset;
        parallaxBg.style.transform = 'translateY(' + scrollPosition * intensity + 'px)';
    });
    
    // Animación suave al hacer scroll
    document.querySelector('.scroll-indicator').addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector('.destinations-container').scrollIntoView({ 
            behavior: 'smooth' 
        });
    });
    
    // Funciones para la galería modal
    function openModal(img) {
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        modal.style.display = "block";
        modalImg.src = img.src;
        
        // Bloquear scroll del body cuando el modal está abierto
        document.body.style.overflow = 'hidden';
    }
    
    function closeModal() {
        document.getElementById('imageModal').style.display = "none";
        // Restaurar scroll del body
        document.body.style.overflow = 'auto';
    }
    
    // Cerrar modal al hacer clic fuera de la imagen
    window.onclick = function(event) {
        const modal = document.getElementById('imageModal');
        if (event.target == modal) {
            closeModal();
        }
    }
    
    // Cerrar modal con tecla ESC
    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape") {
            closeModal();
        }
    });
    
    // Optimización para móviles: evitar hover en dispositivos táctiles
    function hasTouch() {
        return 'ontouchstart' in document.documentElement
            || navigator.maxTouchPoints > 0
            || navigator.msMaxTouchPoints > 0;
    }
    
    if (hasTouch()) {
        document.body.classList.add('touch-device');
    }
</script>

<?= view('templates/footer') ?>