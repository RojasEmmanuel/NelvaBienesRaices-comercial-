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
    }

    
</style>

<div class="news-section">
    <div class="news-container">
        <div class="section-header">
            <h2 class="section-title">Noticias y Eventos</h2>
            <p class="section-subtitle">Descubre nuestras últimas actividades, proyectos y compromisos con la comunidad</p>
        </div>
        
        <div class="news-grid">
            <!-- Noticia 1 -->
             <div class="news-card">
                <div class="news-carousel">
                    <div class="carousel-slides">
                        <div class="carousel-slide">
                            <img src="https://scontent-qro1-1.xx.fbcdn.net/v/t39.30808-6/503956137_1267074212090474_6864461385920080095_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=127cfc&_nc_ohc=3dBh8YLpe0wQ7kNvwHafQyd&_nc_oc=Adkysp7H-fnnVNb0FgVunTzmf5myh2s5VY_sGwnNB8RbaukJpY88x53ggAEJisPPFvFPvnF-d_Aoe6dPx-fDDQxB&_nc_zt=23&_nc_ht=scontent-qro1-1.xx&_nc_gid=A_wjUAQLfvmV6z5tK0lKGQ&oh=00_AfXug7qGD6UTWnw_hSrLNxWDjSmbkUB-ssd-u3JpqH2p4A&oe=689809A0" alt="Nueva oficina">
                        </div>

                        <div class="carousel-slide">
                            <img src="https://scontent-qro1-1.xx.fbcdn.net/v/t39.30808-6/504002223_1267074178757144_3921178225848898215_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=127cfc&_nc_ohc=7C2FWGVbWdYQ7kNvwGQbgZT&_nc_oc=AdlFJo_anlOtIkKogtNYNcKxE33ydJcqmxX46SvUbXszDk5HbtFsFyuSrgHx4IUvZOpw6rBGd3nSZB71gwitkPaV&_nc_zt=23&_nc_ht=scontent-qro1-1.xx&_nc_gid=7krjmjSgACy0g06yKx_lvw&oh=00_AfWWlZy0YsVB9qhaWkA1Ln-sl0Eh_gkM-siqKDjNtIi0vg&oe=689805E4" alt="Equipo de trabajo">
                        </div>
                        <div class="carousel-slide">
                            <img src="https://scontent-qro1-2.xx.fbcdn.net/v/t39.30808-6/503870572_1267072832090612_8935345513034951157_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=127cfc&_nc_ohc=w22clZxbL5gQ7kNvwGtOLZq&_nc_oc=AdlkQr1m75Y4igccIo4-mi4Cf72yetm8HzVL3d3Vf4w2VNTyuhu7r3FGUbW4kNxxDPOjoCssrKSM2FjIXefQyR7T&_nc_zt=23&_nc_ht=scontent-qro1-2.xx&_nc_gid=pcLYnyjQfEtfqTQnC3JQ5Q&oh=00_AfVQ3JDuZ-dtrH12R8BJ8U3W6b5TyACOSP6WjYSGGty0Zw&oe=689801C4" alt="Equipo de trabajo">
                        </div>
                    </div>
                    <button class="carousel-btn carousel-prev">❮</button>
                    <button class="carousel-btn carousel-next">❯</button>
                    <div class="carousel-dots">
                        <div class="carousel-dot active"></div>
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


            <!-- Noticia 2 -->
            <div class="news-card">
                <div class="news-carousel">
                    <div class="carousel-slides">
                        <div class="carousel-slide">
                            <img src="https://scontent-qro1-1.xx.fbcdn.net/v/t39.30808-6/494307367_1239042821560280_2133002173111436746_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=127cfc&_nc_ohc=uk41CBODG0oQ7kNvwE9gq6l&_nc_oc=AdkDJCbWLoVT1ernzlQxXbZULzsEOGyLAqllbgwZtzoq40vIkQWI7f_VS9HBQxXQNWZNUAMRdHmBwly40Mz7zK79&_nc_zt=23&_nc_ht=scontent-qro1-1.xx&_nc_gid=a4x61kTMmzaPNIv_S4MT_Q&oh=00_AfUxm_oDB1BXs_4mCQA6c2LOTOPiV8BpN0DIJnLjIIxyzw&oe=6897EEAC" alt="Partido de basketball">
                        </div>
                        <div class="carousel-slide">
                            <img src="https://scontent-qro1-1.xx.fbcdn.net/v/t39.30808-6/494993833_1239042804893615_450834361493133950_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=yKhp7Rt5otsQ7kNvwFMfj9d&_nc_oc=AdnX-58VF16syhZoNeyt8e47gtuYPrpJdezaXTovQeRC6fI4ul-ScsJgAIrNnLKECwwPN1g8FpCcqjYGD03HYAMn&_nc_zt=23&_nc_ht=scontent-qro1-1.xx&_nc_gid=4lwmuGFAyFsq-R77zzJyVg&oh=00_AfUdxevk_s25RsoF5DSb-NIToqChJaYSB0qtmc79E6caxw&oe=6898069B" alt="Equipo local">
                        </div>
                        <div class="carousel-slide">
                            <img src="https://scontent-qro1-2.xx.fbcdn.net/v/t39.30808-6/494995612_1239043191560243_8180247493487885627_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=127cfc&_nc_ohc=vqlDJjDidgIQ7kNvwHh3mFj&_nc_oc=AdlJNkyZi6FNmmWPi5lrqgg98iUSQ9kGB1utE1_Rd6ZbiD4ssOxHc-QrGRat-k1vrbjNhW4CpHX6chEgFKXWpukv&_nc_zt=23&_nc_ht=scontent-qro1-2.xx&_nc_gid=NcSGJ-2VBxn-Vw2GpPsuMw&oh=00_AfXPhuEERT17z6D6qsLu7uKJBp1SvHtLBBD8wx_BHNOXJQ&oe=6897FDE6" alt="Trofeo">
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
                        El deporte no solo fortalece el cuerpo, sino que también promueve valores como la disciplina, el trabajo en equipo y la perseverancia. Además, es una excelente herramienta para la integración social y el desarrollo de nuestra comunidad.
                        NELVA Bienes Raíces comprometidos en apoyar el talento Oaxaqueño. 🤠✨
                    </p>
                    
                    <div class="news-footer">
                        <span class="news-tag">Comunidad</span>
                        <div class="news-social">
                            <a href="#" title="Compartir en Facebook"><i class="fab fa-facebook-f"></i></a>
        
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Noticia 2 -->
            <div class="news-card">
                <div class="news-carousel">
                    <div class="carousel-slides">
                        <div class="carousel-slide">
                            <img src="https://scontent-qro1-1.xx.fbcdn.net/v/t39.30808-6/494550940_1240558454742050_2529286116005357666_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=127cfc&_nc_ohc=3d_ieIodc54Q7kNvwGBxfzi&_nc_oc=Admc39-PTTYvqKWGPtX19Hucb3_GIDOCdc4pSUfZquDmUl8wK80RHJ7XgCHEglu2iB2KwTC2wmxknjk72a87TieP&_nc_zt=23&_nc_ht=scontent-qro1-1.xx&_nc_gid=8QulT9-DG8nmy5J7W3YUEw&oh=00_AfUMnQGLqdS5p0D2YBDgLNWKaKChIYokk2iwsUy4WuM_6g&oe=68982991" alt="Nueva oficina">
                        </div>

                        <div class="carousel-slide">
                            <img src="https://scontent-qro1-2.xx.fbcdn.net/v/t39.30808-6/495021248_1240558314742064_9221354949965865525_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=127cfc&_nc_ohc=InUPUhyQdJgQ7kNvwGw8mrc&_nc_oc=AdmUMSfD8QtZyooBsaXLBzlPKoUAXEMs0GqsqX0MnIvBLSbw9KreVYdS2FshsPCoTbNWvrrCOUMKfHWWToVcuMjw&_nc_zt=23&_nc_ht=scontent-qro1-2.xx&_nc_gid=Xyt9hr-r7axSGViP5yAtaw&oh=00_AfX3pZkv_SR5bxHhEJQCWSLElCm06NWK_iYs36h0EaEYgQ&oe=68981152" alt="Equipo de trabajo">
                        </div>
                        <div class="carousel-slide">
                            <img src="https://scontent-qro1-1.xx.fbcdn.net/v/t39.30808-6/494440421_1240558028075426_1460033583951121609_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=127cfc&_nc_ohc=MaXrEH1uy0YQ7kNvwG9JWOX&_nc_oc=Adn3drKjy-SLZAmb2AL3uVHw_y2NivV5CwFECfu08DLghoPi2SdxzGkPi45sw7_kCPIFMfDucCfDQHjo42tJ6_4k&_nc_zt=23&_nc_ht=scontent-qro1-1.xx&_nc_gid=18W1TyGQTI-xsKav1HjnVQ&oh=00_AfXfcNSpwXs9jAacxuFoeNOyxEA5TbdwdY2preU2S5KYAg&oe=6897F3CA" alt="Equipo de trabajo">
                        </div>
                    </div>
                    <button class="carousel-btn carousel-prev">❮</button>
                    <button class="carousel-btn carousel-next">❯</button>
                    <div class="carousel-dots">
                        <div class="carousel-dot active"></div>
                        <div class="carousel-dot"></div>
                    </div>
                </div>
                
                <div class="news-content">
                    <span class="news-date">30 Abril 2025</span>
                    <h3 class="news-title">🎉 ¡Un Día del Niño lleno de alegría en Guelaguechi! 🧸🌟</h3>
                    <p class="news-text">
                        Este 30 de abril fuimos parte de una hermosa celebración organizada por el Comité Ejidal de Guelaguechi, donde se regalaron momentos de felicidad a las niñas y niños de la comunidad.
                        Desde Nelva Bienes Raíces nos unimos con mucho gusto aportando juguetes para esta causa, agradecidos de poder compartir sonrisas y contribuir, aunque sea un poco, a un día tan especial.
                        Gracias al comité y a todos los que hicieron posible esta jornada tan significativa. 💛
                    </p>
                    
                    <div class="news-footer">
                        <span class="news-tag">Expansión</span>
                        <div class="news-social">
                            <a href="https://www.facebook.com/share/p/1B1H7GrRYc/" target="_blank" title="Compartir en Facebook"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            
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
</script>


<?= view('templates/footer') ?>