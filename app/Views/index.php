
<!-- Asi se incrusta la sección del navbar y se le da el titulo a la pagina -->
<?= view('templates/navbar', ['title' => 'Nelva Bienes Raíces']) ?>

<style>
    /* Estilos generales */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        overflow-x: hidden;
        color: #333;
        background-color: #f9f9f9;
    }

    section {
        padding: 80px 20px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    h1, h2, h3 {
        font-weight: 700;
        margin-bottom: 20px;
    }

    p {
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .btn {
        display: inline-block;
        padding: 12px 30px;
        background: linear-gradient(45deg, #3a7bd5, #00d2ff);
        color: white;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .text-center {
        text-align: center;
    }

    /* Sección Parallax Mejorada */
    .parallax-section {
        height: 100vh;
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }

    .parallax-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -2;
    }

    .parallax-bg iframe {
        width: 100vw;
        height: 56.25vw;
        min-height: 100vh;
        min-width: 177.77vh;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .parallax-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(5px);
        z-index: -1;
    }

    .parallax-content {
        max-width: 800px;
        padding: 0 20px;
        z-index: 1;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
    }

    .parallax-content h1 {
        font-size: 3.5rem;
        margin-bottom: 30px;
        animation: fadeInDown 1s ease;
    }

    .parallax-content p {
        font-size: 1.2rem;
        margin-bottom: 40px;
        animation: fadeInUp 1s ease;
    }

    .highlight {
        color: #FEB818;
        font-weight: 700;
    }

    /* Estilos para la sección de estadísticas */
    .stats-section {
        padding: 80px 20px;
        background-color: white;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 50px;
        color: #333;
        position: relative;
    }

    .section-title::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: linear-gradient(to right, #3a7bd5, #00d2ff);
        margin: 15px auto 0;
        border-radius: 2px;
    }

    /* Diseño mejorado de tarjetas con animación */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }

    .stat-card {
        background: white;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        border: 1px solid rgba(0, 0, 0, 0.05);
        text-align: center;
        position: relative;
        overflow: hidden;
        height: 220px;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(to right, #3a7bd5, #00d2ff);
    }

    .stat-front {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 30px;
        transition: all 0.4s ease;
    }

    .stat-icon {
        font-size: 2.5rem;
        color: #3a7bd5;
        margin-bottom: 15px;
        transition: all 0.4s ease;
    }

    .stat-number {
        font-size: 2.2rem;
        font-weight: 700;
        color: #3a7bd5;
        margin-bottom: 5px;
        transition: all 0.4s ease;
    }

    .stat-number span {
        font-size: 1.5rem;
        color: #3a7bd5;
        margin-left: 3px;
        transform: translateY(-3px);
        display: inline-block;
    }

    .stat-title {
        font-size: 1rem;
        font-weight: 600;
        color: #333;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.4s ease;
    }

    .stat-back {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        padding: 25px;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.4s ease;
    }

    .stat-description {
        font-size: 0.9rem;
        color: #666;
        line-height: 1.6;
        text-align: center;
    }

    /* Efecto hover mejorado */
    .stat-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
    }

    .stat-card:hover .stat-front {
        opacity: 0;
        transform: translateY(-20px);
    }

    .stat-card:hover .stat-back {
        opacity: 1;
        transform: translateY(0);
    }

    /* Efecto especial para iconos */
    .stat-card:hover .stat-icon {
        transform: scale(1.2);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .stats-grid {
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .section-title {
            font-size: 2rem;
            margin-bottom: 30px;
        }
        
        .stat-card {
            height: 200px;
            padding: 25px;
        }
        
        .stat-description {
            font-size: 0.85rem;
        }
        
        .stat-icon {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Sección de proyectos modificada */


        /* Nuevos estilos para el título de la sección de proyectos */
    /* Estilos para la sección de proyectos modificada */
    .projects-section {
        padding: 80px 20px;
        background-color: #3a7bd5;
    }

    .projects-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .projects-header h2 {
        font-size: 2.5rem;
        color: #02304A;
        margin-bottom: 15px;
        position: relative;
    }

    .projects-header h2::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: linear-gradient(to right, #3a7bd5, #00d2ff);
        margin: 15px auto 0;
        border-radius: 2px;
    }

    .projects-header p {
        font-size: 1.1rem;
        color: #666;
        max-width: 700px;
        margin: 0 auto;
    }

    .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .project-card {
        background: black;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        position: relative;
        overflow: hidden;
        height: 250px;
    }

    .project-logo {
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }

    .project-logo img {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain;
        filter: drop-shadow(0 2px 5px rgba(0,0,0,0.1));
    }

    .project-location {
        color: #3a7bd5;
        font-weight: 600;
        margin-top: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .project-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(58, 123, 213, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .project-card:hover .project-overlay {
        opacity: 1;
    }

    .project-card:hover .project-logo {
        transform: translateY(-20px);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .projects-grid {
            grid-template-columns: 1fr;
        }
        
        .project-card {
            height: 220px;
            padding: 20px;
        }
        
        .project-logo {
            height: 100px;
        }
    }


    /* Sección Turística Compacta y Escalable */
    .destinations-section {
        padding: 80px 20px;
        background-color: #f9f9f9;
    }
    
    .destinations-container {
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .section-header h2 {
        font-size: 2.5rem;
        color: #02304A;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }
    
    .section-header h2::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: linear-gradient(to right, #3a7bd5, #00d2ff);
        margin: 15px auto 0;
        border-radius: 2px;
    }
    
    .section-header p {
        font-size: 1.1rem;
        color: #666;
        max-width: 700px;
        margin: 0 auto;
    }
    
    .destinations-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
    }
    
    .destination-card {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .destination-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }
    
    .destination-image {
        height: 220px;
        position: relative;
        overflow: hidden;
    }
    
    .destination-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .destination-card:hover .destination-image img {
        transform: scale(1.05);
    }
    
    .destination-content {
        padding: 25px;
        background: white;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }
    
    .destination-content h3 {
        font-size: 1.5rem;
        color: #02304A;
        margin-bottom: 15px;
        position: relative;
        padding-bottom: 10px;
    }
    
    .destination-content h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: #FEB818;
    }
    
    .destination-content p {
        color: #666;
        line-height: 1.6;
        margin-bottom: 20px;
        flex-grow: 1;
    }
    
    .destination-highlights {
        margin: 15px 0;
    }
    
    .highlight-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        color: #333;
        font-size: 0.9rem;
    }
    
    .highlight-icon {
        width: 22px;
        height: 22px;
        background: rgba(254, 184, 24, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        flex-shrink: 0;
        color: #FEB818;
        font-size: 0.8rem;
    }
    
    .destination-btn {
        display: inline-block;
        padding: 10px 25px;
        background: #02304A;
        color: white;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        text-align: center;
        margin-top: auto;
    }
    
    .destination-btn:hover {
        background: #FEB818;
        color: #02304A;
        transform: translateY(-2px);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .destinations-grid {
            grid-template-columns: 1fr;
        }
        
        .section-header h2 {
            font-size: 2rem;
        }
    }
    
    /* Sección de pasos */
    
    
    /* Sección de Pasos Compacta */
    .compact-steps {
        padding: 60px 20px;
        background-color: #f9f9f9;
    }

    .compact-steps .container {
        max-width: 1000px;
        margin: 0 auto;
    }

    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-header h2 {
        font-size: 2.2rem;
        color: #333;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .section-header h2::after {
        content: '';
        display: block;
        width: 60px;
        height: 4px;
        background: linear-gradient(to right, #3a7bd5, #00d2ff);
        margin: 15px auto 0;
        border-radius: 2px;
    }

    .section-header p {
        font-size: 1.1rem;
        color: #666;
        max-width: 700px;
        margin: 0 auto;
    }

    /* Diseño compacto horizontal */
    .steps-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .step-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        width: calc(33.333% - 20px);
        min-width: 280px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .step-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .step-number {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 30px;
        height: 30px;
        background: linear-gradient(135deg, #3a7bd5, #00d2ff);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 0.9rem;
    }

    .step-icon {
        width: 50px;
        height: 50px;
        background: rgba(58, 123, 213, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        color: #3a7bd5;
        font-size: 1.5rem;
    }

    .step-card h3 {
        font-size: 1.2rem;
        color: #333;
        margin-bottom: 15px;
        min-height: 60px;
    }

    .step-card p {
        color: #666;
        line-height: 1.5;
        font-size: 0.9rem;
    }

    /* Línea conectadora solo en desktop */
    .step-connector {
        position: absolute;
        top: 50%;
        right: -20px;
        width: 20px;
        height: 2px;
        background: #3a7bd5;
        display: none;
    }

    /* Responsive */
    @media (min-width: 992px) {
        .step-connector {
            display: block;
        }
        
        .step-card:nth-child(3n) .step-connector {
            display: none;
        }
    }

    @media (max-width: 991px) {
        .step-card {
            width: calc(50% - 15px);
        }
        
        .step-card:nth-child(2n) .step-connector {
            display: none;
        }
    }

    @media (max-width: 767px) {
        .compact-steps {
            padding: 40px 20px;
        }
        
        .section-header h2 {
            font-size: 1.8rem;
        }
        
        .section-header p {
            font-size: 1rem;
        }
        
        .steps-container {
            flex-direction: column;
            align-items: center;
        }
        
        .step-card {
            width: 100%;
            max-width: 400px;
        }
        
        .step-connector {
            display: none;
        }
        
        .step-card h3 {
            min-height: auto;
        }
    }

    @media (max-width: 480px) {
        .step-card {
            padding: 20px;
        }
        
        .step-icon {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        
        .step-card h3 {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }
        
        .step-card p {
            font-size: 0.85rem;
        }
    }
    
    /* Sección de promociones */
    .promo-section {
        padding: 100px 20px;
        background-color: #f5f7fa;
    }

    .promo-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }

    .promo-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .promo-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    .promo-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .promo-card-content {
        padding: 20px;
    }

    /* Animaciones */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .parallax-content h1 {
            font-size: 2.5rem;
        }

        .parallax-content p {
            font-size: 1rem;
        }

        section {
            padding: 60px 20px;
        }

        .stat-card {
            height: 180px;
        }
    }
</style>

<!-- Sección Parallax Mejorada -->
<section class="parallax-section">
    <div class="parallax-bg">
        <iframe width="100%" height="100%" 
                src="https://www.youtube.com/embed/JyQgWZVuCAw?autoplay=1&mute=1&loop=1&controls=0&playlist=JyQgWZVuCAw" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
    </div>
    <div class="parallax-overlay"></div>
    <div class="parallax-content">
        <h1>TODO LO QUE NECESITAS PARA <span class="highlight">TUS PROYECTOS</span> EN UN SOLO LUGAR</h1>
        <p>Ya sea que busques INVERTIR en terrenos cerca de los destinos turísticos más hermosos de Oaxaca, servicios profesionales de topografía o renta de equipo de maquinaria especializada, estamos aquí para ayudarte.</p>
        <a href="/asesores" class="btn">Contactar con un asesor</a>
    </div>
</section>

<!-- Sección de Estadísticas con Animación Hover -->
<section class="stats-section">
    <div class="container">
        <h2 class="section-title">Nuestros Logros</h2>
        
        <div class="stats-grid">
            <!-- Tarjeta 1 -->
            <div class="stat-card">
                <div class="stat-front">
                    <div class="stat-icon"><i class="fas fa-calendar-alt"></i></div>
                    <div class="stat-number">6+</div>
                    <h3 class="stat-title">Años de experiencia</h3>
                </div>
                <div class="stat-back">
                    <p class="stat-description">
                        En Nelva Bienes Raíces, ofrecemos confianza y calidad en la venta de terrenos, topografía, renta de equipos y construcción cerca de los mejores destinos turísticos de Oaxaca.
                    </p>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="stat-card">
                <div class="stat-front">
                    <div class="stat-icon"><i class="fas fa-users"></i></div>
                    <div class="stat-number">1000+</div>
                    <h3 class="stat-title">Clientes satisfechos</h3>
                </div>
                <div class="stat-back">
                    <p class="stat-description">
                        Más de 1000 personas han confiado en nosotros para invertir en terrenos y convertir sus sueños en proyectos reales con nuestra asesoría especializada.
                    </p>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="stat-card">
                <div class="stat-front">
                    <div class="stat-icon"><i class="fas fa-map-marked-alt"></i></div>
                    <div class="stat-number">20+</div>
                    <h3 class="stat-title">Desarrollos</h3>
                </div>
                <div class="stat-back">
                    <p class="stat-description">
                        Desarrollos estratégicos en la Costa e Istmo de Tehuantepec, ideales para invertir y construir cerca de los destinos más exclusivos de Oaxaca.
                    </p>
                </div>
            </div>

            <!-- Tarjeta 4 -->
            <div class="stat-card">
                <div class="stat-front">
                    <div class="stat-icon"><i class="fas fa-star"></i></div>
                    <div class="stat-number">100+</div>
                    <h3 class="stat-title">5 estrellas</h3>
                </div>
                <div class="stat-back">
                    <p class="stat-description">
                        Reconocidos por más de 100 clientes satisfechos que avalan nuestra calidad y compromiso en cada proyecto realizado.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Proyectos Modificada -->
<section class="projects-section" style="background-color: #f5f7fa;">
    <div class="container">
        <div class="projects-header">
            <h2>Nuestros Fraccionamientos</h2>
            <p>Descubre nuestros desarrollos estratégicamente ubicados cerca de los mejores destinos turísticos de Oaxaca</p>
        </div>
        
        <div class="projects-grid">
            <!-- Proyecto 1 -->
            <div class="project-card">
                <div class="project-logo">
                    <img src="<?= base_url('images/inicio/REAL-CAMPESTRE-BLANCO.png') ?>" alt="Real Campestre">
                </div>
                <div class="project-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Sta. María Tonameca, Oaxaca</span>
                </div>
                <div class="project-overlay">
                    <a href="/real-campestre" class="btn">Ver</a>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-logo">
                    <img src="<?= base_url('images/inicio/nura.png') ?>" alt="Nura">
                </div>
                <div class="project-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Mazunte, Oaxaca</span>
                </div>
                <div class="project-overlay">
                    <a href="/Nura" class="btn">Ver</a>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-logo">
                    <img src="<?= base_url('images/inicio/andromeda.png') ?>" alt="Andromeda">
                </div>
                <div class="project-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Sta. María Tonameca, Oaxaca</span>
                </div>
                <div class="project-overlay">
                    <a href="/Andromeda" class="btn">Ver</a>
                </div>
            </div>
            
            <!-- Proyecto 2 -->
            <div class="project-card">
                <div class="project-logo">
                    <img src="<?= base_url('images/inicio/jicaro.png') ?>" alt="El Jicaro">
                </div>
                <div class="project-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Sta. María Tonameca, Oaxaca</span>
                </div>
                <div class="project-overlay">
                    <a href="/el-jicaro" class="btn">Ver</a>
                </div>
            </div>
            
            <!-- Proyecto 3 -->
            <div class="project-card">
                <div class="project-logo">
                    <img src="<?= base_url('images/inicio/oceanica.png') ?>" alt="Oceanica">
                </div>
                <div class="project-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Guapinole, Sta. María Tonameca, Oax. </span>
                </div>
                <div class="project-overlay">
                    <a href="/oceanica" class="btn">Ver</a>
                </div>
            </div>

            <div class="project-card">
                <div class="project-logo">
                    <img src="<?= base_url('images/inicio/Santuario.png') ?>" alt="El Santuario de las Tortugas">
                </div>
                <div class="project-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Escobilla, Sta. María Tonameca, Oax.</span>
                </div>
                <div class="project-overlay">
                    <a href="/el-santuario-tortugas" class="btn">Ver</a>
                </div>
            </div>

            <div class="project-card">
                <div class="project-logo">
                    <img src="<?= base_url('images/inicio/nyssa.png') ?>" alt="Nyssa">
                </div>
                <div class="project-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Sta. María Tonameca, Oax.</span>
                </div>
                <div class="project-overlay">
                    <a href="/nyssa" class="btn">Ver</a>
                </div>
            </div>

            <div class="project-card">
                <div class="project-logo">
                    <img src="<?= base_url('images/inicio/sicaru.png') ?>" alt="Sicarú">
                </div>
                <div class="project-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Guelaguechi, Salina Cruz, Oaxaca</span>
                </div>
                <div class="project-overlay">
                    <a href="/sicaru" class="btn">Ver</a>
                </div>
            </div>

            <div class="project-card">
                <div class="project-logo">
                    <img src="<?= base_url('images/inicio/zull.png') ?>" alt="Zull">
                </div>
                <div class="project-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Dunas Playa Azul, Salina Cruz, Oaxaca</span>
                </div>
                <div class="project-overlay">
                    <a href="/zull" class="btn">Ver</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Destinos Turísticos Compacta -->
<section class="destinations-section">
    <div class="destinations-container">
        <div class="section-header">
            <h2>Destinos Turísticos Exclusivos</h2>
            <p>Descubre los lugares más emblemáticos de Oaxaca donde tenemos desarrollos estratégicos para tu inversión</p>
        </div>
        
        <div class="destinations-grid">
            <!-- Mazunte -->
            <div class="destination-card">
                <div class="destination-image">
                    <img src="images/inicio/mazunte.png" alt="Mazunte">
                </div>
                <div class="destination-content">
                    <h3>Mazunte</h3>
                    <p>Pueblo Mágico conocido por sus playas vírgenes, ambiente bohemio y espectaculares atardeceres frente al Pacífico.</p>
                    
                    <div class="destination-highlights">
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-umbrella-beach"></i>
                            </div>
                            <span>Playas vírgenes</span>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-sun"></i>
                            </div>
                            <span>Atardeceres únicos</span>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-tree"></i>
                            </div>
                            <span>Reserva natural</span>
                        </div>
                    </div>
                    
                    <a href="#" class="destination-btn">Ver fraccionamientos</a>
                </div>
            </div>
            
            <!-- Santa María Tonameca -->
            <div class="destination-card">
                <div class="destination-image">
                    <img src="images/inicio/tonameca.png" alt="Santa María Tonameca">
                </div>
                <div class="destination-content">
                    <h3>Santa María Tonameca</h3>
                    <p>Combinación perfecta entre la tranquilidad de un pueblo auténtico y la cercanía a playas paradisíacas.</p>
                    
                    <div class="destination-highlights">
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-mountain"></i>
                            </div>
                            <span>Entorno natural</span>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-water"></i>
                            </div>
                            <span>Ríos y manglares</span>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <span>Ubicación estratégica</span>
                        </div>
                    </div>
                    
                    <a href="#" class="destination-btn">Ver fraccionamientos</a>
                </div>
            </div>
            
            <!-- Salina Cruz -->
            <div class="destination-card">
                <div class="destination-image">
                    <img src="images/inicio/salinas.png" alt="Salina Cruz">
                </div>
                <div class="destination-content">
                    <h3>Salina Cruz</h3>
                    <p>Zona clave del Corredor Interoceánico con gran potencial de desarrollo económico y crecimiento urbano.</p>
                    
                    <div class="destination-highlights">
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-anchor"></i>
                            </div>
                            <span>Puerto estratégico</span>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <span>Zona en desarrollo</span>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <span>Equilibrio ecológico</span>
                        </div>
                    </div>
                    
                    <a href="#" class="destination-btn">Ver fraccionamientos</a>
                </div>
            </div>
        </div>
        
        <!-- Espacio para fácil adición de nuevos destinos -->
        <!-- Simplemente agregar nuevas cards dentro del destinations-grid -->
    </div>
</section>


<!-- Sección de Pasos Compacta -->
<section class="compact-steps">
    <div class="container">
        <div class="section-header">
            <h2>Tu camino hacia el lote perfecto</h2>
            <p>Un proceso simple y transparente en solo 5 pasos</p>
        </div>
        
        <div class="steps-container">
            <!-- Paso 1 -->
            <div class="step-card">
                <div class="step-number">1</div>
                <div class="step-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3>Haz una cita</h3>
                <p>Agenda una cita para conocer tus necesidades y preferencias sobre el tipo de propiedad que deseas.</p>
                <div class="step-connector"></div>
            </div>
            
            <!-- Paso 2 -->
            <div class="step-card">
                <div class="step-number">2</div>
                <div class="step-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3>Evalúa propiedades</h3>
                <p>Te ayudamos a evaluar las propiedades disponibles según precio, ubicación y potencial.</p>
                <div class="step-connector"></div>
            </div>
            
            <!-- Paso 3 -->
            <div class="step-card">
                <div class="step-number">3</div>
                <div class="step-icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <h3>Crédito sin buro</h3>
                <p>Gestionamos tu crédito sin revisión de buró de manera ágil y transparente.</p>
                <div class="step-connector"></div>
            </div>
            
            <!-- Paso 4 -->
            <div class="step-card">
                <div class="step-number">4</div>
                <div class="step-icon">
                    <i class="fas fa-key"></i>
                </div>
                <h3>Posesión inmediata</h3>
                <p>Posibilidad de tomar posesión inmediata del lote seleccionado.</p>
                <div class="step-connector"></div>
            </div>
            
            <!-- Paso 5 -->
            <div class="step-card">
                <div class="step-number">5</div>
                <div class="step-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>Cierra y disfruta</h3>
                <p>Cerramos el trato eficientemente para que disfrutes tu nueva propiedad con tranquilidad.</p>
            </div>
        </div>
    </div>
</section>


<!-- Sección de Promociones -->
<section class="promo-section">
    <div class="container">
        <h2 class="text-center">Promociones Especiales</h2>
        <p class="text-center">Aprovecha nuestras ofertas exclusivas para invertir en tu próximo proyecto</p>
        
        <div class="promo-grid">
            <div class="promo-card">
                <img src="https://nelvabienesraices.com/wp-content/uploads/2025/01/TERRENOS-UBICADOS-CERCA-DE-LA-CARRETERA-1024x576.jpg">
                <div class="promo-card-content">
                    <h3>Financiamiento especial</h3>
                    <p>Hasta 5 años para pagar tu terreno con enganche del 20%</p>
                </div>
            </div>
            <div class="promo-card">
                <img src="https://nelvabienesraices.com/wp-content/uploads/2025/01/CONSTRUYE-TU-SUENO%C2%A1-1024x576.jpg" alt="Promoción 2">
                <div class="promo-card-content">
                    <h3>Paquete completo</h3>
                    <p>Terreno + construcción con 10% de descuento en el diseño</p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Asi se incrusta la sección del footer -->
<?= view('templates/footer') ?>