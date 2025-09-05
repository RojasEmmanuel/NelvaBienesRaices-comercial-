<?= view('templates/navbar', ['title' => 'Residencial Aqua - Nelva Bienes Raíces']) ?>

<style>
    :root {
        --primary: #0a3a21;
        --primary-light: #1a5c3a;
        --primary-dark: #062113;
        --secondary: #d4af37;
        --secondary-light: #e8c874;
        --secondary-dark: #b38d2c;
        --mexico-green: #006847;
        --mexico-white: #FFFFFF;
        --mexico-red: #CE1126;
        --light: #f8f9fa;
        --lighter: #fdfdfd;
        --dark: #212529;
        --darker: #121416;
        --gray: #6c757d;
        --transition: all 0.3s ease;
        --shadow-sm: 0 2px 8px rgba(0,0,0,0.08);
        --shadow-md: 0 4px 12px rgba(0,0,0,0.12);
        --shadow-lg: 0 8px 24px rgba(0,0,0,0.16);
    }
    
    body {
        font-family: 'Roboto';
        line-height: 1.6;
        color: var(--dark);
        overflow-x: hidden;
    }
    
    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .section {
        padding: 80px 0;
        position: relative;
    }
    
    .section-title {
        text-align: center;
        margin-bottom: 40px;
        color: var(--primary);
        font-size: 2.5rem;
        position: relative;
    }
    
    .section-title:after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--secondary), var(--secondary-light));
        margin: 5px auto 0;
        border-radius: 4px;
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
        box-shadow: var(--shadow-sm);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.9rem;
    }
    
    .btn:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-md);
        background: linear-gradient(135deg, var(--primary-dark), var(--primary));
    }
    
    .btn-secondary {
        background: linear-gradient(135deg, var(--secondary), var(--secondary-light));
    }
    
    .btn-secondary:hover {
        background: linear-gradient(135deg, var(--secondary-dark), var(--secondary));
    }
    
    .btn-patriotic {
        background: linear-gradient(90deg, var(--mexico-green), var(--mexico-white), var(--mexico-red));
        color: var(--dark);
        font-weight: bold;
        position: relative;
        overflow: hidden;
    }
    
    .btn-patriotic:hover {
        background: linear-gradient(90deg, var(--mexico-green), var(--mexico-white), var(--mexico-red));
        transform: translateY(-3px);
        color: var(--dark);
    }
    
    .text-center {
        text-align: center;
    }
    
    .mb-30 {
        margin-bottom: 30px;
    }
    
    /* Hero Section Mejorada */
    .hero {
        height: 90vh;
        min-height: 600px;
        position: relative;
        overflow: hidden;
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
        background: url('<?= base_url('images/Aqua/banner.jpg') ?>') center/cover no-repeat;
        background-color: rgba(0, 0, 0, 0.5);
        background-blend-mode: multiply;
        z-index: 1;
    }
    
    .hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('') center/cover no-repeat;
        z-index: 0;
        animation: zoomEffect 20s infinite alternate;
    }
    
    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 900px;
        padding: 0 20px;
        animation: fadeInUp 1s ease;
    }
    
    .hero h1 {
        font-size: 3.5rem;
        margin-bottom: 15px;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
        letter-spacing: 1px;
    }
    
    .hero p {
        font-size: 1.3rem;
        margin-bottom: 25px;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .hero .price {
        font-size: 2.5rem;
        color: var(--secondary);
        font-weight: 700;
        margin: 25px 0;
        display: block;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }
    
    .hero-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    /* Info Grid Mejorada */
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .info-card {
        background: var(--lighter);
        border-radius: 12px;
        padding: 30px;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        border-top: 4px solid var(--secondary);
        text-align: center;
    }
    
    .info-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg);
    }
    
    .info-card h3 {
        color: var(--primary);
        margin-bottom: 15px;
        font-size: 1.3rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    
    .info-card p {
        font-size: 1.1rem;
        color: var(--gray);
    }
    
    /* Features & Amenities Section Mejorada */
    .features-section {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        position: relative;
        overflow: hidden;
    }
    
    .features-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('<?= base_url('images/Aqua/banner.jpg') ?>') center/cover no-repeat;
        opacity: 0.1;
        z-index: 0;
    }
    
    .features-container {
        position: relative;
        z-index: 1;
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }
    
    .feature-item {
        background: white;
        padding: 25px 15px;
        border-radius: 10px;
        text-align: center;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        border-bottom: 3px solid transparent;
    }
    
    .feature-item:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
        border-bottom-color: var(--secondary);
    }
    
    .feature-icon {
        color: var(--secondary);
        font-size: 2rem;
        margin-bottom: 15px;
    }
    
    .feature-item h3 {
        font-size: 1.5rem;
        margin-bottom: 5px;
        color: var(--primary);
    }
    
    .feature-item p {
        font-size: 0.9rem;
        color: var(--gray);
    }
    
    .amenities-section {
        background: white;
        padding: 60px 0;
    }
    
    .amenities-container {
        background: var(--primary);
        border-radius: 15px;
        padding: 40px;
        color: white;
        box-shadow: var(--shadow-lg);
        position: relative;
        overflow: hidden;
        margin: 0;
    }
    
    .amenities-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('<?= base_url('images/Aqua/banner.jpg') ?>') center/cover no-repeat;
        opacity: 0.3;
        z-index: 0;
    }
    
    .amenities-title {
        color: white;
        text-align: center;
        margin-bottom: 30px;
        position: relative;
        z-index: 1;
        font: "Roboto";
    }
    
    .amenities-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 15px;
        position: relative;
        z-index: 1;
    }
    
    .amenity-item {
        display: flex;
        align-items: center;
        padding: 15px 20px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: var(--transition);
    }
    
    .amenity-item:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateX(5px);
    }
    
    .amenity-icon {
        color: var(--secondary-light);
        margin-right: 15px;
        font-size: 1.2rem;
        min-width: 25px;
    }
    
    /* Gallery Section Mejorada */
    .gallery-section {
        background: var(--lighter);
    }
    
    .gallery-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
    }
    
    .gallery-item {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow-sm);
        height: 250px;
        position: relative;
    }
    
    .gallery-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(0,0,0,0.5), transparent);
        opacity: 0;
        transition: var(--transition);
        z-index: 1;
    }
    
    .gallery-item:hover::before {
        opacity: 1;
    }
    
    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .gallery-item:hover img {
        transform: scale(1.05);
    }
    
    .gallery-caption {
        position: absolute;
        bottom: -50px;
        left: 0;
        width: 100%;
        padding: 15px;
        color: white;
        background: rgba(0,0,0,0.7);
        transition: var(--transition);
        z-index: 2;
    }
    
    .gallery-item:hover .gallery-caption {
        bottom: 0;
    }
    
    /* Map Section Mejorada */
    .map-section2 {
        background: linear-gradient(135deg, var(--primary-light), var(--primary-dark));
        color: white;
    }
    
    .map-container2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }
    
    .map-content2 {
        padding-right: 30px;
    }
    
    .map-content2 h2 {
        color: white;
    }
    
    .map-content2 p {
        margin-bottom: 25px;
        font-size: 1.1rem;
    }
    
    .map-iframe-container2 {
        height: 400px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        border: 5px solid white;
    }
    
    .map-iframe2 {
        width: 100%;
        height: 100%;
        border: none;
    }
    /* Contact CTA Mejorado */
    .contact-cta {
        background: url('<?= base_url('images/Aqua/banner.jpg') ?>') center/cover no-repeat;
        position: relative;
        text-align: center;
        padding: 100px 20px;
    }
    
    .contact-cta::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(10, 58, 33, 0.9), rgba(26, 92, 58, 0.8));
        z-index: 0;
    }
    
    .contact-cta .container {
        position: relative;
        z-index: 1;
    }
    
    .contact-cta h2 {
        color: white;
        margin-bottom: 20px;
        font-size: 2.5rem;
    }
    
    .contact-cta p {
        color: rgba(255,255,255,0.9);
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto 30px;
    }
    
    /* Promoción Especial - Septiembre 2025 */
    .promo-section {
        background: linear-gradient(135deg, var(--mexico-green), var(--mexico-white), var(--mexico-red));
        color: var(--dark);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }
    
    .promo-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100" opacity="0.05"><text x="50%" y="50%" font-size="12" text-anchor="middle" fill="%23006847">🇲🇽</text></svg>');
        z-index: 0;
    }
    
    .promo-container {
        position: relative;
        z-index: 1;
        text-align: center;
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .promo-badge {
        background: linear-gradient(135deg, var(--mexico-green), var(--mexico-white), var(--mexico-red));
        color: var(--dark);
        padding: 10px 25px;
        border-radius: 30px;
        font-weight: bold;
        font-size: 1.1rem;
        display: inline-block;
        margin-bottom: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        animation: pulse 2s infinite;
        border: 2px solid var(--mexico-green);
    }
    
    .promo-title {
        font-size: 2.8rem;
        margin-bottom: 20px;
        color: var(--dark);
        text-shadow: 2px 2px 4px rgba(255,255,255,0.7);
    }
    
    .promo-subtitle {
        font-size: 1.4rem;
        margin-bottom: 30px;
        color: var(--mexico-green);
        font-weight: 600;
    }
    
    .promo-highlight {
        background: rgba(255,255,255,0.8);
        border-radius: 15px;
        padding: 30px;
        margin: 30px 0;
        backdrop-filter: blur(5px);
        border: 2px solid var(--mexico-red);
        position: relative;
        overflow: hidden;
    }
    
    .promo-highlight::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100" opacity="0.03"><text x="50%" y="50%" font-size="12" text-anchor="middle" fill="%23CE1126">🇲🇽</text></svg>');
        z-index: 0;
    }
    
    .promo-price {
        font-size: 3.5rem;
        color: var(--mexico-red);
        font-weight: 800;
        margin-bottom: 10px;
        display: block;
        position: relative;
        z-index: 1;
    }
    
    .promo-price span {
        font-size: 1.8rem;
        color: var(--mexico-green);
        font-weight: 600;
    }
    
    .promo-details {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin: 30px 0;
    }
    
    .promo-detail {
        background: rgba(255,255,255,0.9);
        padding: 20px;
        border-radius: 10px;
        border-left: 4px solid var(--mexico-green);
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }
    
    .promo-detail:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
    }
    
    .promo-detail:nth-child(2) {
        border-left-color: var(--mexico-white);
    }
    
    .promo-detail:nth-child(3) {
        border-left-color: var(--mexico-red);
    }
    
    .promo-detail h4 {
        color: var(--mexico-green);
        margin-bottom: 10px;
        font-size: 1.2rem;
    }
    
    .promo-detail p {
        color: var(--dark);
        font-weight: 500;
    }
    
    .promo-note {
        font-size: 0.9rem;
        margin-top: 20px;
        opacity: 0.8;
        color: var(--dark);
    }
    
    .mexico-flag-theme {
        background: linear-gradient(to right, var(--mexico-green) 33.3%, var(--mexico-white) 33.3%, var(--mexico-white) 66.6%, var(--mexico-red) 66.6%);
        height: 10px;
        width: 100%;
        margin: 15px 0;
        border-radius: 5px;
    }
    
    /* WhatsApp Floating Button */
    .whatsapp-float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 25px;
        right: 25px;
        background-color: #25d366;
        color: white;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 0 4px 20px rgba(37, 211, 102, 0.5);
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s ease;
        animation: pulse-whatsapp 2s infinite;
    }
    
    .whatsapp-float:hover {
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 6px 25px rgba(37, 211, 102, 0.7);
    }
    
    .whatsapp-text {
        position: fixed;
        bottom: 95px;
        right: 25px;
        background: white;
        color: #075e54;
        padding: 8px 15px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 14px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        z-index: 1000;
        opacity: 0;
        transform: translateY(10px);
        transition: all 0.3s ease;
        pointer-events: none;
    }
    
    .whatsapp-float:hover + .whatsapp-text {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Patriotic Elements */
    .patriotic-border {
        border: 3px solid;
        border-image: linear-gradient(to right, var(--mexico-green), var(--mexico-white), var(--mexico-red)) 1;
        border-radius: 10px;
    }
    
    .mexican-flag-colors {
        background: linear-gradient(to right, var(--mexico-green) 33.3%, var(--mexico-white) 33.3%, var(--mexico-white) 66.6%, var(--mexico-red) 66.6%);
    }
    
    .mexican-pattern {
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="%23006847" opacity="0.1"/><path d="M0,0 L100,100 M100,0 L0,100" stroke="%23CE1126" stroke-width="1" opacity="0.1"/></svg>');
    }
    
    /* Countdown Timer */
    .countdown-container {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin: 30px 0;
    }
    
    .countdown-item {
        background: rgba(255,255,255,0.9);
        border-radius: 10px;
        padding: 15px;
        min-width: 80px;
        box-shadow: var(--shadow-sm);
        border: 2px solid var(--mexico-green);
    }
    
    .countdown-value {
        font-size: 2.2rem;
        font-weight: 800;
        color: var(--mexico-red);
        line-height: 1;
    }
    
    .countdown-label {
        font-size: 0.9rem;
        color: var(--mexico-green);
        font-weight: 600;
        text-transform: uppercase;
    }
    
    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes zoomEffect {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(1.05);
        }
    }
    
    @keyframes pulse {
        0% {
            transform: scale(1);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }
        50% {
            transform: scale(1.05);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.4);
        }
        100% {
            transform: scale(1);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }
    }
    
    @keyframes pulse-whatsapp {
        0% {
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.5);
        }
        50% {
            box-shadow: 0 6px 25px rgba(37, 211, 102, 0.8);
        }
        100% {
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.5);
        }
    }
    
    @keyframes float {
        0% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
        100% {
            transform: translateY(0);
        }
    }
    
    @keyframes wave {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
    
    .float-animation {
        animation: float 3s ease-in-out infinite;
    }
    
    .wave-animation {
        background: linear-gradient(270deg, var(--mexico-green), var(--mexico-white), var(--mexico-red));
        background-size: 600% 600%;
        animation: wave 4s ease infinite;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 1200px) {
        .hero h1 {
            font-size: 3rem;
        }
    }
    
    @media (max-width: 992px) {
        .section {
            padding: 60px 0;
        }
        
        .hero {
            height: 70vh;
            min-height: 500px;
        }
        
        .hero h1 {
            font-size: 2.5rem;
        }
        
        .map-container2 {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        .map-content2 {
            padding-right: 0;
            text-align: center;
        }
        
        .promo-title {
            font-size: 2.2rem;
        }
    }
    
    @media (max-width: 768px) {
        .section {
            padding: 50px 0;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .hero {
            height: 60vh;
            min-height: 450px;
        }
        
        .hero h1 {
            font-size: 2.2rem;
        }
        
        .hero p {
            font-size: 1.1rem;
        }
        
        .hero .price {
            font-size: 2rem;
        }
        
        .features-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .info-grid {
            grid-template-columns: 1fr 1fr;
        }
        
       
    }
    
    @media (max-width: 576px) {
        .section {
            padding: 40px 0;
        }
        
        .hero {
            height: 50vh;
            min-height: 400px;
        }
        
        .hero h1 {
            font-size: 1.8rem;
        }
        
        .hero p {
            font-size: 1rem;
        }
        
        .hero-buttons {
            flex-direction: column;
            gap: 10px;
        }
        
        .hero-buttons .btn {
            width: 100%;
            max-width: 250px;
            margin: 0 auto;
        }
        
        .info-grid {
            grid-template-columns: 1fr;
        }
        
        .features-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/5219581362522?text=Hola,%20me%20interesa%20saber%20más%20sobre%20Fraccionamiento%20Andrómeda" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>
<span class="whatsapp-text">¡Contáctanos por WhatsApp!</span>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
        <h1>RESIDENCIAL AQUA</h1>
        <span class="price">$230,000.00</span>
        <p>Terrenos sobre el camino a Playa Azul</p>
        <div class="hero-buttons">
            <a href="/asesores?zona=istmo" class="btn btn-secondary">Contactar asesor</a>
            <a href="#gallery" class="btn">Ver galería</a>
        </div>
    </div>
</section>

<!-- Info Grid -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Descubre Residencial Aqua</h2>
        <p class="text-center mb-30" style="max-width: 800px; margin-left: auto; margin-right: auto;">
            Residencial Aqua ofrece terrenos planos listos para construir con proyectos de energía eléctrica subterránea y agua potable, en una ubicación privilegiada cerca de las mejores playas de Santo Domingo Tehuantepec.
        </p>
        
        <div class="info-grid">
            <div class="info-card">
                <h3><i class="fas fa-file-signature"></i> Documentación</h3>
                <p>Certeza legal</p>
            </div>
            <div class="info-card">
                <h3><i class="fas fa-calendar-check"></i> Financiamiento</h3>
                <p>Hasta 36 meses</p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section features-section">
    <div class="container features-container">
        <h2 class="section-title">Características del Desarrollo</h2>
        
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3>Energía</h3>
                <p>Eléctrica subterránea</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-tint"></i>
                </div>
                <h3>Agua</h3>
                <p>Potable disponible</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <h3>Terrenos</h3>
                <p>Planos y nivelados</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-road"></i>
                </div>
                <h3>Acceso</h3>
                <p>2 min a autopista</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h3>Enganche</h3>
                <p>Desde 10%</p>
            </div>
        </div>
    </div>
</section>

<!-- Amenities Section -->
<section class="section">
    <div class="container">
        <div class="amenities-container">
            <h3 class="amenities-title">Ubicación Estratégica</h3>
            
            <div class="amenities-list">
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-umbrella-beach"></i>
                    </div>
                    <p>A 4 minutos de las Dunas de Playa Azul</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-umbrella-beach"></i>
                    </div>
                    <p>A 6 minutos de Playa Brasil</p>
                </div>
                <div class="amenity-item">
                    <div class="amenity-icon">
                        <i class="fas fa-highway"></i>
                    </div>
                    <p>A 2 minutos de la autopista Oaxaca-Istmo</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Plano del Fraccionamiento -->
<section class="section" style="background-color: #f8f9fa;">
    <div class="container">
        <h2 class="section-title">Plano del Fraccionamiento</h2>
        <div style="max-width: 480px; margin: auto; box-shadow: var(--shadow-lg); border-radius: 12px; overflow: hidden;">
            <img src="<?= base_url('images/Aqua/plano.webp') ?>" alt="Plano de Residencial Aqua" style="width: 100%; height: auto; display: block;">
        </div>
        <p class="text-center" style="margin-top: 20px; font-size: 1.1rem; color: var(--gray);">
            Diseño urbanístico con terrenos nivelados y servicios subterráneos, ideal para construcción inmediata.
        </p>
    </div>
</section>

<!-- Map Section -->
<section class="section map-section2" id="contact">
    <div class="container">
        <div class="map-container2">
            <div class="map-content2">
                <h2 class="section-title" style="color: white; text-align: left;">Conectividad Excepcional</h2>
                <p>Ubicado en Santo Domingo Tehuantepec, Residencial Aqua ofrece acceso rápido a la autopista Oaxaca-Istmo y a las playas más visitadas de la región, combinando la tranquilidad residencial con la conveniencia de ubicación.</p>
                <a href="/asesores?zona=istmo" class="btn btn-secondary">Solicitar información</a>
            </div>
            <div class="map-iframe-container2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1955.4470793364412!2d-95.28465823730815!3d16.133392998094052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e1!3m2!1ses-419!2smx!4v1754970205325!5m2!1ses-419!2smx" class="map-iframe2" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>


<!-- Gallery Section -->
<section class="section gallery-section" id="gallery">
    <div class="container">
        <h2 class="section-title">Galería del Proyecto</h2>
        
        <div class="gallery-container">
            <div class="gallery-item">
                <img src="<?= base_url('images/Aqua/aqua1.jpg') ?>" alt="Vista del Fraccionamiento">
                <div class="gallery-caption">Vista del fraccionamiento</div>
            </div>
            <div class="gallery-item">
                <img src="<?= base_url('images/Aqua/aqua2.jpg') ?>" alt="Vista del Fraccionamiento">
                <div class="gallery-caption">Vista Aérea</div>
            </div>
            <div class="gallery-item">
                <img src="<?= base_url('images/Aqua/aqua3.jpg') ?>" alt="Vista del Fraccionamiento">
                <div class="gallery-caption">Vista del fraccionamiento</div>
            </div>
            <div class="gallery-item">
                <img src="<?= base_url('images/Aqua/aqua4.jpg') ?>" alt="Vista del Fraccionamiento">
                <div class="gallery-caption">Vista Aérea</div>
            </div>

             <div class="gallery-item">
                <img src="<?= base_url('images/Aqua/aqua5.jpg') ?>" alt="Vista del Fraccionamiento">
                <div class="gallery-caption">Vista Aérea</div>
            </div>
            <div class="gallery-item">
                <img src="<?= base_url('images/Aqua/aqua6.jpg') ?>" alt="Vista del Fraccionamiento">
                <div class="gallery-caption">Vista Aérea</div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="contact-cta">
    <div class="container">
        <h2>¿Listo para ser parte de Residencial Aqua?</h2>
        <p>Aprovecha esta oportunidad y elige tu lote ideal con las mejores condiciones de financiamiento. Contáctanos hoy mismo para recibir información detallada.</p>
        <div class="hero-buttons">
            <a href="/asesores?zona=istmo" class="btn btn-secondary">Contactar Asesor</a>
            
        </div>
    </div>
</section>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

<?= view('templates/footer') ?>