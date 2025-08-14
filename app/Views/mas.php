<?= view('templates/navbar', ['title' => 'Más - Nelva Bienes Raíces']) ?>

<style>
    :root {
        --primary: #4361ee;
        --accent: #0850a8ff;
        --light: #f8f9fa;
        --dark: #212529;
        --transition: all 0.3s ease;
    }
    
    .social-container {
        padding: 40px 20px;
        background: #f5f5f5;
        min-height: calc(100vh - 120px); /* Ajusta según altura de tu navbar/footer */
    }
    
    .social-section {
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
        padding: 40px;
        background: rgba(255, 255, 255, 0.98);
        border-radius: 24px;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);
        text-align: center;
    }
    
    .social-header {
        margin-bottom: 40px;
    }
    
    .social-title2 {
        font-size: clamp(1.8rem, 5vw, 3rem);
        margin-bottom: 16px;
        background: linear-gradient(to right, var(--primary), var(--accent));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        line-height: 1.2;
    }
    
    .social-subtitle {
        font-size: clamp(0.9rem, 2vw, 1.1rem);
        color: #64748b;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }
    
    .social-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 20px;
        margin-top: 40px;
    }
    
    .social-card {
        background: white;
        border-radius: 16px;
        padding: 25px 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
        transition: var(--transition);
        cursor: pointer;
        border: 1px solid rgba(0, 0, 0, 0.03);
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
    .social-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .social-icon {
        font-size: 2.2rem;
        margin-bottom: 15px;
        transition: var(--transition);
    }
    
    .social-card:hover .social-icon {
        transform: scale(1.15);
    }
    
    .social-name {
        font-size: 1.1rem;
        margin-bottom: 10px;
        font-weight: 600;
        color: var(--dark);
    }
    
    .social-username {
        color: #64748b;
        margin-bottom: 15px;
        font-size: 0.85rem;
        word-break: break-word;
    }
    
    .social-link2 {
        display: inline-block;
        padding: 8px 20px;
        background: linear-gradient(to right, var(--primary), var(--accent));
        color: white;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.85rem;
        transition: var(--transition);
        margin-top: auto;
    }
    
    .social-link2:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
    }
    
    /* Colores redes sociales */
    .facebook { color: #1877f2; }
    .instagram { 
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
    .youtube { color: #ff0000; }
    .tiktok { color: #000000; }
    .whatsapp { color: #25d366; }

    /* Ajustes para móviles */
    @media (max-width: 768px) {
        .social-container {
            padding: 20px 10px;
        }
        
        .social-section {
            padding: 30px 15px;
            border-radius: 16px;
        }
        
        .social-header {
            margin-bottom: 30px;
        }
        
        .social-grid {
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
        }
        
        .social-card {
            padding: 20px 10px;
        }
        
        .social-icon {
            font-size: 2rem;
        }
        
        .social-name {
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .social-grid {
            grid-template-columns: 1fr 1fr;
        }
        
        .social-title {
            font-size: 1.8rem;
        }
    }


    /* Estilos mejorados para la sección de noticias */
    .news-section {
        padding: 80px 20px;
        background: #f5f5f5;
    }
    
    .news-container {
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }
    
    .section-title {
        font-size: clamp(2rem, 5vw, 3rem);
        margin-bottom: 15px;
        background: linear-gradient(to right, var(--primary), var(--accent));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        position: relative;
        display: inline-block;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        width: 50%;
        height: 4px;
        background: linear-gradient(to right, var(--primary), var(--accent));
        bottom: -10px;
        left: 25%;
        border-radius: 2px;
    }
    
    .section-subtitle {
        color: #64748b;
        font-size: 1.2rem;
        max-width: 700px;
        margin: 20px auto 0;
        line-height: 1.6;
    }
    
    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 40px;
    }
    
    .news-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        display: flex;
        flex-direction: column;
    }
    
    .news-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
    }
    
    /* Carrusel de imágenes */
    .news-carousel {
        position: relative;
        width: 100%;
        height: 250px;
        overflow: hidden;
        border-radius: 20px 20px 0 0;
    }
    
    .carousel-slides {
        display: flex;
        width: 100%;
        height: 100%;
        transition: transform 0.5s ease;
    }
    
    .carousel-slide {
        min-width: 100%;
        height: 100%;
    }
    
    .carousel-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .carousel-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.7);
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-size: 1.2rem;
        color: var(--primary);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        z-index: 10;
    }
    
    .carousel-btn:hover {
        background: white;
        transform: translateY(-50%) scale(1.1);
    }
    
    .carousel-prev {
        left: 15px;
    }
    
    .carousel-next {
        right: 15px;
    }
    
    .carousel-dots {
        position: absolute;
        bottom: 15px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 8px;
        z-index: 10;
    }
    
    .carousel-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .carousel-dot.active {
        background: white;
        transform: scale(1.2);
    }
    
    .news-content {
        padding: 30px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }
    
    .news-date {
        color: var(--primary);
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 10px;
        display: block;
    }
    
    .news-title {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: var(--dark);
        line-height: 1.4;
    }
    
    .news-text {
        color: #64748b;
        line-height: 1.7;
        margin-bottom: 25px;
        flex-grow: 1;
    }
    
    .news-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .news-tag {
        display: inline-block;
        padding: 6px 15px;
        background-color: #e0e7ff;
        color: var(--primary);
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .news-social {
        display: flex;
        gap: 10px;
    }
    
    .news-social a {
        color: #94a3b8;
        transition: color 0.3s ease;
    }
    
    .news-social a:hover {
        color: var(--primary);
    }
    
    /* Botón Ver Más */
    .load-more-container {
        text-align: center;
        margin-top: 40px;
    }
    
    .load-more-btn {
        display: inline-block;
        padding: 12px 30px;
        background: linear-gradient(to right, var(--primary), var(--accent));
        color: white;
        border: none;
        border-radius: 50px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        box-shadow: 0 5px 15px rgba(67, 97, 238, 0.2);
    }
    
    .load-more-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
    }
    
    .hidden-news {
        display: none;
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .news-grid {
            gap: 30px;
        }
        
        .news-carousel {
            height: 220px;
        }
    }
    
    @media (max-width: 768px) {
        .news-section {
            padding: 60px 15px;
        }
        
        .section-header {
            margin-bottom: 40px;
        }
        
        .news-grid {
            grid-template-columns: 1fr;
            max-width: 600px;
            margin: 0 auto;
            gap: 35px;
        }
    }
    
    @media (max-width: 480px) {
        .news-content {
            padding: 20px;
        }
        
        .news-title {
            font-size: 1.3rem;
        }
        
        .carousel-btn {
            width: 35px;
            height: 35px;
            font-size: 1rem;
        }
        
        .load-more-btn {
            padding: 10px 25px;
            font-size: 0.9rem;
        }
    }
</style>

<div class="news-section">
    <div class="news-container">
        <div class="section-header">
            <h2 class="section-title">Noticias y Eventos</h2>
            <p class="section-subtitle">Descubre nuestras últimas actividades, proyectos y compromisos con la comunidad</p>
        </div>
        
        <div class="news-grid">
            <!-- Noticia 1 (visible inicialmente) -->
       
            <!-- Noticia 2 (visible inicialmente) -->
            <div class="news-card">
                <div class="news-carousel">
                    <div class="carousel-slides">
                        <div class="carousel-slide">
                            <img src="/images/facebook/noticiaAguamarina1.jpg" alt="Nueva oficina">
                        </div>
                        <div class="carousel-slide">
                            <img src="/images/facebook/noticiaAguamarina2.jpg"" alt="Equipo de trabajo">
                        </div>
                        <div class="carousel-slide">
                            <img src="images/facebook/noticiaAguamarina3.jpg"" alt="Equipo de trabajo">
                        </div>
                    </div>
                    <button class="carousel-btn carousel-prev">❮</button>
                    <button class="carousel-btn carousel-next">❯</button>
                    <div class="carousel-dots">
                        <div class="carousel-dot active"></div>
                        <div class="carousel-dot"></div>
                        <div class="carousel-dot"></div>
                    </div>
                </div>
                
                <div class="news-content">
                    <span class="news-date">03 Junio 2025</span>
                    <h3 class="news-title">Expansión Agua Marina</h3>
                    <p class="news-text">
                        De parte de todo el equipo de Nelva Bienes Raíces, agradecemos a todo nuestro equipo de ventas, clientes y amigos que estuvieron presentes en esta gran inauguración de Expansión Agua Marina.
                    </p>
                    
                    <div class="news-footer">
                        <span class="news-tag">Expansión</span>
                        <div class="news-social">
                            <a href="https://www.facebook.com/share/p/19nVgKHRyN/" target="_blank" title="Compartir en Facebook"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Noticia 3 (visible inicialmente) -->
            <div class="news-card">
                <div class="news-carousel">
                    <div class="carousel-slides">
                        <div class="carousel-slide">
                            <img src="/images/facebook/noticiaTorneo1.jpg" alt="Partido de basketball">
                        </div>
                        <div class="carousel-slide">
                            <img src="/images/facebook/noticiaTorneo2.jpg" alt="Equipo local">
                        </div>
                        <div class="carousel-slide">
                            <img src="/images/facebook/noticiaTorneo3.jpg" alt="Trofeo">
                        </div>
                    </div>
                    <button class="carousel-btn carousel-prev">❮</button>
                    <button class="carousel-btn carousel-next">❯</button>
                    <div class="carousel-dots">
                        <div class="carousel-dot active"></div>
                        <div class="carousel-dot"></div>
                        <div class="carousel-dot"></div>
                    </div>
                </div>
                
                <div class="news-content">
                    <span class="news-date">15 Julio 2023</span>
                    <h3 class="news-title">En NELVA BIENES RAÍCES apoyamos el deporte</h3>
                    <p class="news-text">
                        Nos enorgullece ser patrocinadores de la Liga de Basketball Pochutla, apoyando el talento local y fomentando un estilo de vida saludable.
                        El deporte no solo fortalece el cuerpo, sino que también promueve valores como la disciplina, el trabajo en equipo y la perseverancia.🤠✨
                    </p>
                    
                    <div class="news-footer">
                        <span class="news-tag">Comunidad</span>
                        <div class="news-social">
                            <a href="#" title="Compartir en Facebook"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>

                
            </div>
            
            <div class="news-card">
                <div class="news-carousel">
                    <div class="carousel-slides">
                        <div class="carousel-slide">
                            <img src="/images/facebook/noticiaDiaNiño1.jpg" alt="Niños">
                        </div>
                        <div class="carousel-slide">
                            <img src="/images/facebook/noticiaDiaNiño2.jpg" alt="Niños">
                        </div>
                        <div class="carousel-slide">
                            <img src="/images/facebook/noticiaDiaNiño3.jpg" alt="Niños">
                        </div>
                    </div>
                    <button class="carousel-btn carousel-prev">❮</button>
                    <button class="carousel-btn carousel-next">❯</button>
                    <div class="carousel-dots">
                        <div class="carousel-dot active"></div>
                        <div class="carousel-dot"></div>
                        <div class="carousel-dot"></div>
                    </div>
                </div>
                    
                <div class="news-content">
                    <span class="news-date">30 Abril 2025</span>
                    <h3 class="news-title">🎉 ¡Un Día del Niño lleno de alegría en Guelaguechi! 🧸🌟</h3>
                    <p class="news-text">
                        Este 30 de abril fuimos parte de una hermosa celebración organizada por el Comité Ejidal de Guelaguechi, donde se regalaron momentos de felicidad a las niñas y niños de la comunidad.
                        Gracias al comité y a todos los que hicieron posible esta jornada tan significativa. 💛
                    </p>
                    
                    <div class="news-footer">
                        <span class="news-tag">Comunidad</span>
                        <div class="news-social">
                            <a href="https://www.facebook.com/share/p/1B1H7GrRYc/" target="_blank" title="Compartir en Facebook"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Noticia 4 (oculta inicialmente) 
            <div class="news-card hidden-news">
                
            </div>
            -->
            <!-- Puedes agregar más noticias ocultas aquí si las tienes -->
        </div>
        
        <div class="load-more-container">
            <button class="load-more-btn" id="loadMoreBtn">Ver más noticias</button>
        </div>
    </div>
</div>

<div class="social-container">
    <section class="social-section">
        <div class="social-header">
            <h1 class="social-title2">Conéctate con Nelva Bienes Raíces</h1>
            <p class="social-subtitle">Síguenos en nuestras redes sociales para conocer las mejores propiedades y promociones exclusivas</p>
        </div>
        
        <div class="social-grid">
            <div class="social-card" onclick="window.open('https://www.facebook.com/profile.php?id=100063637222584', '_blank')">
                <i class="fab fa-facebook-f social-icon facebook"></i>
                <h3 class="social-name">Facebook</h3>
                <p class="social-username">@NelvaBienesRaices</p>
                <a class="social-link2">Seguir</a>
            </div>
            
            <div class="social-card" onclick="window.open('https://www.instagram.com/nelvabienesraices/', '_blank')">
                <i class="fab fa-instagram social-icon instagram"></i>
                <h3 class="social-name">Instagram</h3>
                <p class="social-username">@NelvaBienesRaices</p>
                <a class="social-link2">Seguir</a>
            </div>
            
            <div class="social-card" onclick="window.open('https://www.tiktok.com/@nelvabienesraices.mx?is_from_webapp=1&sender_device=pc', '_blank')">
                <i class="fab fa-tiktok social-icon tiktok"></i>
                <h3 class="social-name">TikTok</h3>
                <p class="social-username">@nelvabienesraices.mx</p>
                <a class="social-link2">Seguir</a>
            </div>
            <div class="social-card" onclick="window.open('https://www.youtube.com/@NELVABIENESRAICES', '_blank')">
                <i class="fab fa-youtube social-icon youtube"></i>
                <h3 class="social-name">YouTube</h3>
                <p class="social-username">Nelva Bienes Raíces</p>
                <a class="social-link2">Suscribirse</a>
            </div>
            
            <div class="social-card" onclick="window.open('https://wa.me/9581199171', '_blank')">
                <i class="fab fa-whatsapp social-icon whatsapp"></i>
                <h3 class="social-name">WhatsApp</h3>
                <p class="social-username">+52 123 456 7890</p>
                <a class="social-link2">Contactar</a>
            </div>
        </div>
    </section>
</div>

<script>
    // Inicializar todos los carruseles
    document.querySelectorAll('.news-carousel').forEach(carousel => {
        const slides = carousel.querySelector('.carousel-slides');
        const slideItems = carousel.querySelectorAll('.carousel-slide');
        const prevBtn = carousel.querySelector('.carousel-prev');
        const nextBtn = carousel.querySelector('.carousel-next');
        const dots = carousel.querySelectorAll('.carousel-dot');
        
        let currentIndex = 0;
        const totalSlides = slideItems.length;
        
        // Actualizar posición del carrusel
        function updateCarousel() {
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
            
            // Actualizar dots
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }
        
        // Evento para botón anterior
        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalSlides - 1;
            updateCarousel();
        });
        
        // Evento para botón siguiente
        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex < totalSlides - 1) ? currentIndex + 1 : 0;
            updateCarousel();
        });
        
        // Eventos para dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel();
            });
        });
        
        // Auto-avance cada 5 segundos
        let interval = setInterval(() => {
            currentIndex = (currentIndex < totalSlides - 1) ? currentIndex + 1 : 0;
            updateCarousel();
        }, 5000);
        
        // Pausar auto-avance al interactuar
        carousel.addEventListener('mouseenter', () => clearInterval(interval));
        carousel.addEventListener('mouseleave', () => {
            interval = setInterval(() => {
                currentIndex = (currentIndex < totalSlides - 1) ? currentIndex + 1 : 0;
                updateCarousel();
            }, 5000);
        });
    });
    
    // Función para mostrar más noticias
    document.getElementById('loadMoreBtn').addEventListener('click', function() {
        // Mostrar todas las noticias ocultas
        document.querySelectorAll('.hidden-news').forEach(news => {
            news.classList.remove('hidden-news');
        });
        
        // Ocultar el botón después de hacer clic
        this.style.display = 'none';
    });
</script>

<?= view('templates/footer') ?>