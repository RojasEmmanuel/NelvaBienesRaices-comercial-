<?= view('templates/navbar', ['title' => 'Atractivos - Nelva Bienes Raíces']) ?>

<style>
    :root {
        --primary: #1a4b8c;
        --primary-light: #3a7bd5;
        --secondary: #FEB818;
        --accent: #2a9d8f;
        --dark: #14213d;
        --light: #f8f9fa;
        --gray: #8d99ae;
        --card-bg: #ffffff;
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, sans-serif;
        background-color: #f5f5f5;
        color: var(--dark);
        line-height: 1.6;
        padding: 2rem;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
    }
    
    /* Header */
    .header {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    .header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 1rem;
    }
    
    .header p {
        font-size: 1.1rem;
        color: var(--gray);
        max-width: 600px;
        margin: 0 auto;
    }
    
    /* Filtros */
    .filters-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        gap: 1.5rem;
        flex-wrap: wrap;
    }
    
    .search-box {
        flex: 1;
        min-width: 250px;
        position: relative;
    }
    
    .search-box input {
        width: 100%;
        padding: 0.8rem 1.5rem;
        padding-left: 3rem;
        border: 2px solid #e2e8f0;
        border-radius: 30px;
        font-size: 1rem;
        background-color: white;
        transition: all 0.3s;
    }
    
    .search-box input:focus {
        outline: none;
        border-color: var(--primary-light);
        box-shadow: 0 0 0 3px rgba(58, 123, 213, 0.2);
    }
    
    .search-box i {
        position: absolute;
        left: 1.2rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--gray);
    }
    
    .filter-buttons {
        display: flex;
        gap: 0.8rem;
        flex-wrap: wrap;
    }
    
    .filter-btn {
        padding: 0.7rem 1.5rem;
        background-color: white;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--dark);
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: all 0.3s;
    }
    
    .filter-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }
    
    .filter-btn.active {
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        color: white;
    }
    
    /* Grid de asesores */
    .asesores-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 1.5rem;
    }
    
    /* Tarjeta de asesor - Diseño compacto */
    .asesor-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        transition: all 0.3s;
        display: flex;
        padding: 1.5rem;
        gap: 1.5rem;
        align-items: center;
        height: 100%;
    }
    
    .asesor-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }
    
    .asesor-img-container {
        width: 100px;
        height: 100px;
        min-width: 100px;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid white;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    
    .asesor-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .asesor-badge {
        display: inline-block;
        padding: 0.3rem 0.8rem;
        border-radius: 15px;
        font-size: 0.7rem;
        font-weight: 700;
        color: white;
        margin-bottom: 0.5rem;
    }
    
    .istmo {
        background: linear-gradient(135deg, var(--secondary), #ffd166);
        color: var(--dark);
    }
    
    .costa {
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
    }
    
    .asesor-content {
        flex: 1;
    }
    
    .asesor-name {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 0.3rem;
        color: var(--dark);
    }
    
    .asesor-contact {
        margin: 0.8rem 0;
    }
    
    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }
    
    .contact-item i {
        margin-right: 0.5rem;
        color: var(--primary);
        width: 18px;
        text-align: center;
    }
    
    .whatsapp-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.6rem 1rem;
        border-radius: 8px;
        background: linear-gradient(135deg, var(--secondary), #ffd166);
        color: var(--dark);
        font-weight: 600;
        text-decoration: none;
        font-size: 0.9rem;
        transition: all 0.3s;
        margin-top: 0.5rem;
    }
    
    .whatsapp-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(254, 184, 24, 0.3);
    }
    
    .whatsapp-btn i {
        font-size: 1rem;
    }
    
    /* No results */
    .no-results {
        grid-column: 1 / -1;
        text-align: center;
        padding: 3rem;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .no-results i {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: var(--gray);
    }
    
    .no-results h3 {
        font-size: 1.3rem;
        margin-bottom: 0.5rem;
        color: var(--dark);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        body {
            padding: 1.5rem;
        }
        
        .filters-container {
            flex-direction: column;
        }
        
        .asesor-card {
            flex-direction: column;
            text-align: center;
            padding: 1.5rem;
        }
        
        .asesor-img-container {
            margin-bottom: 1rem;
        }
        
        .contact-item {
            justify-content: center;
        }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Nuestros Asesores</h1>
        <p>Conecta con nuestros expertos en bienes raíces disponibles 24/7</p>
    </div>
    
    <div class="filters-container">
        <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" id="searchInput" placeholder="Buscar asesor..." aria-label="Buscar asesor">
        </div>
        
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">
                <i class="fas fa-users"></i> Todos
            </button>
            <button class="filter-btn" data-filter="istmo">
                <i class="fas fa-mountain"></i> Istmo
            </button>
            <button class="filter-btn" data-filter="costa">
                <i class="fas fa-umbrella-beach"></i> Costa
            </button>
        </div>
    </div>
    
    <div class="asesores-grid" id="asesoresContainer">
        <!-- Asesor 1 -->
        <div class="asesor-card" data-ubicacion="istmo" data-nombre="maria gonzalez">
            <div class="asesor-img-container">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="María González" class="asesor-img">
            </div>
            <div class="asesor-content">
                <span class="asesor-badge istmo">Istmo</span>
                <h2 class="asesor-name">María González</h2>
                
                <div class="asesor-contact">
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>+52 123 456 7890</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>maria@inmobiliaria.com</span>
                    </div>
                </div>
                
                <a href="https://wa.me/521234567890" class="whatsapp-btn" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
        
        <!-- Asesor 2 -->
        <div class="asesor-card" data-ubicacion="costa" data-nombre="carlos mendoza">
            <div class="asesor-img-container">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Carlos Mendoza" class="asesor-img">
            </div>
            <div class="asesor-content">
                <span class="asesor-badge costa">Costa</span>
                <h2 class="asesor-name">Carlos Mendoza</h2>
                
                <div class="asesor-contact">
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>+52 987 654 3210</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>carlos@inmobiliaria.com</span>
                    </div>
                </div>
                
                <a href="https://wa.me/529876543210" class="whatsapp-btn" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
        
        <!-- Asesor 3 -->
        <div class="asesor-card" data-ubicacion="istmo" data-nombre="laura jimenez">
            <div class="asesor-img-container">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Laura Jiménez" class="asesor-img">
            </div>
            <div class="asesor-content">
                <span class="asesor-badge istmo">Istmo</span>
                <h2 class="asesor-name">Laura Jiménez</h2>
                
                <div class="asesor-contact">
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>+52 555 123 4567</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>laura@inmobiliaria.com</span>
                    </div>
                </div>
                
                <a href="https://wa.me/525551234567" class="whatsapp-btn" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
        
        <!-- Asesor 4 -->
        <div class="asesor-card" data-ubicacion="costa" data-nombre="javier ruiz">
            <div class="asesor-img-container">
                <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Javier Ruiz" class="asesor-img">
            </div>
            <div class="asesor-content">
                <span class="asesor-badge costa">Costa</span>
                <h2 class="asesor-name">Javier Ruiz</h2>
                
                <div class="asesor-contact">
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>+52 333 987 6543</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>javier@inmobiliaria.com</span>
                    </div>
                </div>
                
                <a href="https://wa.me/523339876543" class="whatsapp-btn" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const searchInput = document.getElementById('searchInput');
        const asesoresContainer = document.getElementById('asesoresContainer');
        const asesorCards = document.querySelectorAll('.asesor-card');
        
        function filterAsesores() {
            const searchTerm = searchInput.value.toLowerCase();
            const activeFilter = document.querySelector('.filter-btn.active').dataset.filter;
            
            let hasResults = false;
            
            asesorCards.forEach(card => {
                const nombre = card.dataset.nombre;
                const ubicacion = card.dataset.ubicacion;
                
                const matchesSearch = nombre.includes(searchTerm);
                const matchesFilter = activeFilter === 'all' || ubicacion === activeFilter;
                
                if (matchesSearch && matchesFilter) {
                    card.style.display = 'flex';
                    hasResults = true;
                } else {
                    card.style.display = 'none';
                }
            });
            
            const noResultsElement = document.querySelector('.no-results');
            if (!hasResults) {
                if (!noResultsElement) {
                    const noResults = document.createElement('div');
                    noResults.className = 'no-results';
                    noResults.innerHTML = `
                        <i class="fas fa-search"></i>
                        <h3>No se encontraron asesores</h3>
                        <p>Intenta con otros términos de búsqueda</p>
                    `;
                    asesoresContainer.appendChild(noResults);
                }
            } else if (noResultsElement) {
                noResultsElement.remove();
            }
        }
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                filterAsesores();
            });
        });
        
        searchInput.addEventListener('input', filterAsesores);
        
        filterAsesores();
    });
</script>

<?= view('templates/footer') ?>