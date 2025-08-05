<?= view('templates/navbar', ['title' => 'Nelva Bienes Raíces']) ?>

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
        background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
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


    
</style>

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

<?= view('templates/footer') ?>