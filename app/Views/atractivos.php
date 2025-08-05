<?= view('templates/navbar', ['title' => 'Atractivos - Nelva Bienes Raíces']) ?>

<style>
    :root {
        --primary: #2a9d8f;
        --secondary: #264653;
        --accent: #e9c46a;
        --light: #f8f9fa;
        --dark: #343a40;
        --text: #4a4a4a;
        --overlay: rgba(38, 70, 83, 0.85);
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Open Sans', sans-serif;
        color: var(--text);
        line-height: 1.7;
        background-color: #f5f5f5;
        overflow-x: hidden;
    }
    
    /* Sección Parallax Moderna - Adaptable */
    .parallax-hero {
        position: relative;
        height: 100vh;
        min-height: 600px; /* Altura mínima para móviles */
        max-height: 900px; /* Altura máxima para escritorio */
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
        font-size: clamp(2rem, 5vw, 3.5rem); /* Tamaño adaptable */
        margin-bottom: 1.5rem;
        font-weight: 700;
        text-shadow: 0 2px 10px rgba(0,0,0,0.7);
        animation: fadeInUp 1s ease-out;
        padding: 0 1rem;
    }
    
    .parallax-hero p {
        font-size: clamp(1rem, 2.5vw, 1.3rem); /* Tamaño adaptable */
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
    
    /* Sección de Destinos - Adaptable */ 
    .destinations-container {
        max-width: 1400px; /* Aumentamos el ancho máximo */
        margin: 0 auto;
        padding: clamp(3rem, 5vw, 5rem) 1.5rem; /* Aumentamos el padding lateral */
    }
    
    .destination-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(min(280px, 100%), 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }
    .destination-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
    }
    
    .destination-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }
    
    .card-image-container {
        position: relative;
        height: clamp(200px, 30vw, 250px); /* Altura adaptable */
        overflow: hidden;
    }
    
    .card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }
    
    .destination-card:hover .card-image {
        transform: scale(1.1);
    }
    
    .card-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: var(--accent);
        color: var(--secondary);
        padding: 0.4rem 0.8rem;
        border-radius: 50px;
        font-weight: 600;
        font-size: clamp(0.7rem, 2vw, 0.8rem); /* Tamaño adaptable */
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .card-content {
        padding: clamp(1.2rem, 3vw, 1.8rem); /* Padding adaptable */
    }
    
    .card-title {
        font-family: 'Poppins', sans-serif;
        font-size: clamp(1.2rem, 3vw, 1.5rem); /* Tamaño adaptable */
        margin-bottom: 1rem;
        color: var(--secondary);
        position: relative;
        display: inline-block;
    }
    
    .card-title:after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 50px;
        height: 3px;
        background: var(--accent);
        border-radius: 3px;
    }
    
    .card-description2 {
        margin: 1.2rem 0;
        font-size: clamp(0.85rem, 2.5vw, 0.95rem); /* Tamaño adaptable */
        color: rgb(70,70,70);
    }
    
    .location-info {
        background-color: #f8f9fa;
        padding: 1rem;
        border-radius: 8px;
        margin: 1rem 0;
        border-left: 4px solid var(--accent);
    }
    
    .location-info h4 {
        font-size: clamp(0.9rem, 2.5vw, 1rem); /* Tamaño adaptable */
        color: var(--secondary);
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
    }
    
    .location-info h4 i {
        margin-right: 8px;
        color: var(--primary);
        font-size: clamp(0.9rem, 2.5vw, 1rem); /* Tamaño adaptable */
    }
    
    .location-info p {
        font-size: clamp(0.8rem, 2.5vw, 0.85rem); /* Tamaño adaptable */
        color: #666;
    }
    
    .gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 8px;
        margin-top: 1rem;
    }
    
    .gallery img {
        width: 100%;
        height: clamp(60px, 10vw, 80px); /* Altura adaptable */
        object-fit: cover;
        border-radius: 4px;
        cursor: pointer;
        transition: transform 0.3s ease;
    }
    
    .gallery img:hover {
        transform: scale(1.05);
    }
    
    .card-map {
        width: 100%;
        height: clamp(150px, 25vw, 200px); /* Altura adaptable */
        border: none;
        border-radius: 8px;
        margin-top: 1rem;
        filter: grayscale(20%);
        transition: filter 0.3s ease;
    }
    
    .destination-card:hover .card-map {
        filter: grayscale(0%);
    }
    
    .section-title2 {
        text-align: center;
        margin-bottom: 1rem;
        font-family: 'Poppins', sans-serif;
        color: var(--secondary);
        font-size: clamp(1.8rem, 5vw, 2.5rem); /* Tamaño adaptable */
        position: relative;
        padding: 0 1rem;
    }
    
    .section-subtitle2 {
        text-align: center;
        max-width: 700px;
        margin: 0 auto clamp(2rem, 4vw, 3rem); /* Margen adaptable */
        font-size: clamp(0.95rem, 2.5vw, 1.1rem); /* Tamaño adaptable */
        color: #4a4a4a;
        padding: 0 1rem;
    }
    
    /* Modal para la galería - Adaptable */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.9);
        overflow: auto;
        touch-action: manipulation; /* Mejorar interacción táctil */
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
        font-size: clamp(30px, 8vw, 40px); /* Tamaño adaptable */
        font-weight: bold;
        cursor: pointer;
        z-index: 1001;
    }
    
    /* Mejoras específicas para móviles */
    @media (max-width: 768px) {
        .parallax-hero {
            min-height: 500px;
            height: 80vh;
        }
        
        .destination-grid {
            grid-template-columns: 1fr;
            padding: 0;
        }
        
        .gallery {
            grid-template-columns: repeat(2, 1fr);
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
    
    /* Mejoras para pantallas muy pequeñas */
    @media (max-width: 480px) {
        .parallax-hero {
            min-height: 400px;
            height: 70vh;
        }
        
        .card-image-container {
            height: 180px;
        }
        
        .gallery {
            grid-template-columns: 1fr;
        }
        
        .gallery img {
            height: 100px;
        }
        
        .modal-content {
            max-height: 70%;
            margin-top: 15vh;
        }
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

    /* Nuevas reglas para pantallas grandes */
    @media (min-width: 1200px) {
        .destination-grid {
            grid-template-columns: repeat(4, 1fr); /* 4 columnas en pantallas grandes */
        }
        
        .destination-card {
            display: flex;
            flex-direction: column;
            height: 100%; /* Aseguramos que todas las tarjetas tengan la misma altura */
        }
        
        .card-content {
            flex-grow: 1; /* Hace que el contenido ocupe el espacio restante */
            display: flex;
            flex-direction: column;
        }
        
        .card-map {
            margin-top: auto; /* Empuja el mapa hacia abajo */
        }
    }
    
    /* Ajustes para pantallas medianas */
    @media (min-width: 768px) and (max-width: 1199px) {
        .destination-grid {
            grid-template-columns: repeat(2, 1fr); /* 2 columnas en tablets */
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
        <div class="destination-card">
            <div class="card-image-container">
                <img src="https://img.travesiasdigital.com/cdn-cgi/image/quality=90,format=auto,onerror=redirect/2019/07/la-ventanilla-oaxaca-playa-02-e1564513095137.jpg" alt="La Ventanilla" class="card-image">
                <div class="card-badge">Vida Natural</div>
            </div>
            <div class="card-content">
                <h3 class="card-title">Ventanilla Oax.</h3>
                <p class="card-description2">
                    Ventanilla es un rincón paradisíaco en Oaxaca, famoso por su tranquilidad, paisajes naturales y su rica biodiversidad. Ideal para quienes buscan conexión con la naturaleza.
                </p>
                
                <div class="location-info">
                    <h4><i class="fas fa-map-marker-alt"></i> Ubicación</h4>
                    <p>La Ventanilla se encuentra a 12 km al oeste de Mazunte, en el municipio de Santa María Tonameca. Accesible por carretera desde Puerto Escondido (1.5 horas) o desde Pochutla (30 minutos).</p>
                </div>
                
                <div class="gallery">
                    <img src="https://www.oaxaca-mio.com/fotografias/la-ventanilla-1.jpg" alt="Ventanilla 1" onclick="openModal(this)">
                    <img src="https://www.oaxaca-mio.com/fotografias/la-ventanilla-2.jpg" alt="Ventanilla 2" onclick="openModal(this)">
                    <img src="https://www.oaxaca-mio.com/fotografias/la-ventanilla-3.jpg" alt="Ventanilla 3" onclick="openModal(this)">
                </div>
                
                <iframe class="card-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245780.23953209125!2d-96.94686960404245!3d15.734401019421178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85b92808fca9472d%3A0xc65df1b8df4192a6!2sPlaya%20La%20Ventanilla!5e1!3m2!1ses!2smx!4v1754415567220!5m2!1ses!2smx" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
        <!-- Destino 2 - Punta Cometa -->
        <div class="destination-card">
            <div class="card-image-container">
                <img src="https://www.mexicodesconocido.com.mx/wp-content/uploads/2025/07/Punta-Cometa-PORTADA-900x675.png" alt="Punta Cometa" class="card-image">
                <div class="card-badge">Paisajes</div>
            </div>
            <div class="card-content">
                <h3 class="card-title">Punta Cometa</h3>
                <p class="card-description2">
                    Punta Cometa, en Mazunte, es un rincón mágico donde el océano Pacífico se encuentra con la tierra en un espectáculo visual. Este mirador ofrece vistas panorámicas impresionantes.
                </p>
                
                <div class="location-info">
                    <h4><i class="fas fa-map-marker-alt"></i> Ubicación</h4>
                    <p>Punta Cometa se ubica en el extremo sur de Mazunte, a 250 km al sureste de la ciudad de Oaxaca. Se puede llegar caminando desde el centro de Mazunte (20 minutos).</p>
                </div>
                
                <div class="gallery">
                    <img src="https://www.mexicodesconocido.com.mx/wp-content/uploads/2025/07/Punta-Cometa-1.jpg" alt="Punta Cometa 1" onclick="openModal(this)">
                    <img src="https://www.mexicodesconocido.com.mx/wp-content/uploads/2025/07/Punta-Cometa-2.jpg" alt="Punta Cometa 2" onclick="openModal(this)">
                    <img src="https://www.mexicodesconocido.com.mx/wp-content/uploads/2025/07/Punta-Cometa-3.jpg" alt="Punta Cometa 3" onclick="openModal(this)">
                </div>
                
                <iframe class="card-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3841.753280071125!2d-96.55874722543669!3d15.658121150313528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85b928402c82221d%3A0x7678ce7c27654759!2sPunta%20Cometa!5e0!3m2!1ses!2smx!4v1754415821086!5m2!1ses!2smx" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
        <!-- Destino 3 - Mazunte -->
        <div class="destination-card">
            <div class="card-image-container">
                <img src="https://blog.paseandoando.mx/wp-content/uploads/2022/09/Mazunte-Oaxaca-Pueblo-Magico-PlayaS.webp" alt="Mazunte" class="card-image">
                <div class="card-badge">Cultura</div>
            </div>
            <div class="card-content">
                <h3 class="card-title">Mazunte</h3>
                <p class="card-description2">
                    Mazunte es un paraíso costero en Oaxaca, conocido por sus playas vírgenes, aguas cristalinas y su ambiente tranquilo. Ideal para quienes buscan desconectar.
                </p>
                
                <div class="location-info">
                    <h4><i class="fas fa-map-marker-alt"></i> Ubicación</h4>
                    <p>Mazunte se localiza en la costa del Pacífico, a 22 km al suroeste de Pochutla. Desde Oaxaca capital son aproximadamente 6 horas en auto.</p>
                </div>
                
                <div class="gallery">
                    <img src="https://www.mexicodesconocido.com.mx/wp-content/uploads/2025/07/Mazunte-1.jpg" alt="Mazunte 1" onclick="openModal(this)">
                    <img src="https://www.mexicodesconocido.com.mx/wp-content/uploads/2025/07/Mazunte-2.jpg" alt="Mazunte 2" onclick="openModal(this)">
                    <img src="https://www.mexicodesconocido.com.mx/wp-content/uploads/2025/07/Mazunte-3.jpg" alt="Mazunte 3" onclick="openModal(this)">
                </div>
                
                <iframe class="card-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3823.064229064683!2d-96.3846826856187!3d15.66994398873393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85b8d9a9a3d4e5a5%3A0x9e8a6b1b1b1b1b1b!2sMazunte%2C%20Oaxaca!5e1!3m2!1ses!2smx!4v1620000000000!5m2!1ses!2smx" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
        <!-- Destino 4 - San Agustinillo -->
        <div class="destination-card">
            <div class="card-image-container">
                <img src="https://www.monteuzulu.com/wp-content/uploads/2019/12/San-Agustinillo-aerial-peninsula.jpg" alt="San Agustinillo" class="card-image">
                <div class="card-badge">Paraíso</div>
            </div>
            <div class="card-content">
                <h3 class="card-title">San Agustinillo</h3>
                <p class="card-description2">
                    Descubre un rincón mágico en la costa del Pacífico mexicano, donde el ritmo pausado de las olas y la calidez de su gente crean un refugio perfecto para desconectarte.
                </p>
                
                <div class="location-info">
                    <h4><i class="fas fa-map-marker-alt"></i> Ubicación</h4>
                    <p>San Agustinillo se encuentra a solo 3 km al este de Mazunte. Se accede por la misma carretera costera que lleva a Mazunte y Zipolite.</p>
                </div>
                
                <div class="gallery">
                    <img src="https://www.monteuzulu.com/wp-content/uploads/2019/12/San-Agustinillo-beach.jpg" alt="San Agustinillo 1" onclick="openModal(this)">
                    <img src="https://www.monteuzulu.com/wp-content/uploads/2019/12/San-Agustinillo-sunset.jpg" alt="San Agustinillo 2" onclick="openModal(this)">
                    <img src="https://www.monteuzulu.com/wp-content/uploads/2019/12/San-Agustinillo-village.jpg" alt="San Agustinillo 3" onclick="openModal(this)">
                </div>
                
                <iframe class="card-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3823.064229064683!2d-96.3846826856187!3d15.66994398873393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85b8d9a9a3d4e5a5%3A0x9e8a6b1b1b1b1b1b!2sSan%20Agustinillo%2C%20Oaxaca!5e1!3m2!1ses!2smx!4v1620000000000!5m2!1ses!2smx" allowfullscreen="" loading="lazy"></iframe>
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