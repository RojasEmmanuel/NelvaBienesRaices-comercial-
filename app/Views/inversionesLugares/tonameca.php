<?= view('templates/navbar', ['title' => 'Tonameca - Nelva Bienes Raíces']) ?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Arial', sans-serif;
    }
    
    /* Sección Hero con Parallax */
    .hero {
        height: 100vh;
        background-image: url('/images/inversiones/bannerTonameca.webp');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
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
        background-color: rgba(0, 0, 0, 0.1);
    }
    
    .hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        padding: 0 20px;
    }
    
    .hero h1 {
        font-size: 3.5rem;
        margin-bottom: 1.5rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .hero p {
        font-size: 1.5rem;
        margin-bottom: 2.5rem;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }
    
    .btn-hero {
        display: inline-block;
        background-color: #e67e22;
        color: white;
        padding: 15px 30px;
        font-size: 1.2rem;
        text-decoration: none;
        border-radius: 50px;
        transition: all 0.3s ease;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
    
    .btn-hero:hover {
        background-color: #d35400;
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }
    
    /* Sección Banner */
    .banner-section {
        padding: 60px 20px;
        background-color: white;
    }
    
    .banner-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
    }
    
    .banner-image {
        flex: 1;
        min-height: 400px;
        background-image: url('/images/inversiones/TonamecaGallery.png');
        background-size: cover;
        background-position: center;
    }
    
    .banner-content {
        flex: 1;
        padding: 40px;
        text-align: center;
    }
    
    .banner-content h2 {
        font-size: 2.2rem;
        color: #2c3e50;
        margin-bottom: 20px;
    }
    
    .banner-content p {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 30px;
        line-height: 1.6;
    }
    
    .btn-banner {
        display: inline-block;
        background-color: #2c3e50;
        color: white;
        padding: 12px 30px;
        font-size: 1rem;
        text-decoration: none;
        border-radius: 50px;
        transition: all 0.3s ease;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .btn-banner:hover {
        background-color: #1a252f;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    
    /* Sección de contenido adicional */
    .info-section {
        padding: 80px 20px;
        background-color: white;
        text-align: center;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2.5rem;
        }
        
        .hero p {
            font-size: 1.2rem;
        }
        
        .btn-hero {
            padding: 12px 25px;
            font-size: 1rem;
        }
        
        .banner-container {
            flex-direction: column;
        }
        
        .banner-image {
            width: 100%;
            min-height: 250px;
        }
    }


    /* Sección Fraccionamientos */
    .developments-section {
        padding: 80px 20px;
        background-image: url('/images/inversiones/bannerTonameca.webp');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        color: #fff;
    }

    .developments-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(9, 0, 0, 0.1);
    }

    .section-header {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
        z-index: 1;
    }

    .section-header h2 {
        font-size: 2.8rem;
        color: #43b4ffff;
        margin-bottom: 15px;
    }

    .section-header p {
        font-size: 1.2rem;
        color: #fff;
        max-width: 700px;
        margin: 0 auto;
    }

    .developments-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        position: relative;
        z-index: 1;
    }

    .development-card {
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .development-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .card-image {
        height: 250px;
        width: 100%;
        object-fit: cover;
    }

    .card-content {
        padding: 25px;
    }

    .card-content h3 {
        font-size: 1.8rem;
        color: #2c3e50;
        margin-bottom: 15px;
    }

    .card-content p {
        color: #666;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .btn-info {
        display: inline-block;
        background-color: #3498db;
        color: white;
        padding: 10px 25px;
        font-size: 1rem;
        text-decoration: none;
        border-radius: 50px;
        transition: all 0.3s ease;
        font-weight: bold;
    }

    .btn-info:hover {
        background-color: #2980b9;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .section-header h2 {
            font-size: 2.2rem;
        }
        
        .section-header p {
            font-size: 1rem;
        }
        
        .developments-container {
            grid-template-columns: 1fr;
        }
    }
</style>
  <!-- Sección Hero con Parallax -->
<section class="hero">
    <div class="hero-content">
        <h1>Inversión en Tonameca</h1>
        <p>Descubre terrenos exclusivos en Santa María Tonameca, un lugar privilegiado por su belleza natural y gran potencial de desarrollo. Invierte en un destino que combina tranquilidad, cercanía a playas icónicas y un futuro prometedor. Este es el momento perfecto para asegurar tu espacio en un entorno que promete alto crecimiento y conexión con la naturaleza.</p>
        <a href="/asesores?zona=costa" class="btn-hero">Contactar un asesor</a>
    </div>
</section>

<!-- Sección Banner -->
<section class="banner-section">
    <div class="banner-container">
        <div class="banner-image"></div>
        <div class="banner-content">
            <h2>¡Descubre oportunidades inmobiliarias de primer nivel en Santa María Tonameca¡</h2>
            <p>Experimente la impresionante belleza y el potencial de crecimiento de las principales subdivisiones.</p>
            <a href="/asesores?zona=costa" class="btn-banner">CONTACTA A UN ASESOR</a>
        </div>
    </div>
</section>


<!-- Sección Fraccionamientos -->
<section class="developments-section">
    <div class="section-header">
        <h2>Invierta en el Paraíso: Tonameca le Espera</h2>
        <p>Descubre las mejores opciones de inversión en los fraccionamientos más exclusivos de la región</p>
    </div>
    
    <div class="developments-container">
        <!-- Fraccionamiento 1 -->
        <div class="development-card">
            <img src="/images/inversiones/jicaro.webp" alt="Vista del fraccionamiento" class="card-image">
            <div class="card-content">
                <h3>Fraccionamiento El Jicaro</h3>
                <p>Ubicado en una zona de alto potencial, el Fraccionamiento el Jicaro ofrece lotes únicos rodeados de un entorno natural y sereno. Con un diseño pensado para brindar comodidad y vistas espectaculares, este desarrollo de Nelva Bienes Raíces es la inversión ideal para quienes buscan un futuro próspero en una de las áreas con mayor crecimiento y expansión de la región.</p>
                <a href="/el-jicaro" class="btn-info">Más información</a>
            </div>
        </div>
        
        <!-- Fraccionamiento 2 -->
        <div class="development-card">
            <img src="/images/inversiones/nyssa.webp" alt="Vista del fraccionamiento" class="card-image">
            <div class="card-content">
                <h3>Fraccionamiento Nyssa</h3>
                <p>Disfruta de la oportunidad de invertir en terrenos únicos en una ubicación estratégica, rodeados de naturaleza y con un alto potencial de valorización. En el Fraccionamiento Real Campestre, cada lote ofrece la combinación perfecta entre un ambiente tranquilo y un futuro lleno de posibilidades. Este desarrollo de Nelva Bienes Raíces es ideal para quienes buscan un espacio para vivir o invertir en una zona de crecimiento continuo.</p>
                <a href="/nyssa" class="btn-info">Más información</a>
            </div>
        </div>
        
        <!-- Fraccionamiento 3 -->
        <div class="development-card">
            <img src="/images/inversiones/realCampestre.webp" alt="Vista del fraccionamiento" class="card-image">
            <div class="card-content">
                <h3>Fraccionamiento Real Campestre</h3>
                <p>Disfruta de la oportunidad de invertir en terrenos únicos en una ubicación estratégica, rodeados de naturaleza y con un alto potencial de valorización. En el Fraccionamiento Real Campestre, cada lote ofrece la combinación perfecta entre un ambiente tranquilo y un futuro lleno de posibilidades. Este desarrollo de Nelva Bienes Raíces es ideal para quienes buscan un espacio para vivir o invertir en una zona de crecimiento continuo.</p>
                <a href="/real-campestre" class="btn-info">Más información</a>
            </div>
        </div>
    </div>
</section>
<?= view('templates/footer') ?>