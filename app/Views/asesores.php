<?= view('templates/navbar', ['title' => 'Asesores - Nelva Bienes Raíces']) ?>

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
    
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #f5f7fa;
        color: var(--dark);
        line-height: 1.6;
        margin: 0;
        padding: 0;
    }
    
    .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 2rem;
    }
    
    /* Header compacto */
    .header {
        text-align: center;
        margin-bottom: 2.5rem;
    }
    
    .header h1 {
        font-size: 2.2rem;
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 0.5rem;
    }
    
    .header p {
        font-size: 1.1rem;
        color: var(--gray);
        max-width: 700px;
        margin: 0 auto;
    }
    
    /* Filtros optimizados */
    .filters-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        gap: 1.5rem;
        flex-wrap: wrap;
        background: white;
        padding: 1.2rem 1.5rem;
        border-radius: 10px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.05);
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
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        font-size: 0.95rem;
        background-color: white;
        transition: all 0.3s;
    }
    
    .search-box input:focus {
        outline: none;
        border-color: var(--primary-light);
        box-shadow: 0 0 0 3px rgba(58, 123, 213, 0.1);
    }
    
    .search-box i {
        position: absolute;
        left: 1.2rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--gray);
        font-size: 1rem;
    }
    
    .filter-buttons {
        display: flex;
        gap: 0.8rem;
        flex-wrap: wrap;
    }
    
    .filter-btn {
        padding: 0.7rem 1.3rem;
        background-color: white;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        cursor: pointer;
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--dark);
        transition: all 0.3s;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .filter-btn:hover {
        border-color: var(--primary-light);
    }
    
    .filter-btn.active {
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        color: white;
        border-color: transparent;
    }
    
    /* Grid de asesores rediseñado */
    .asesores-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 2rem;
    }
    
    /* Tarjeta de asesor rediseñada */
    .asesor-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
        border: none;
    }
    
    .asesor-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    }
    
    .asesor-img-container {
        width: 100%;
        height: 220px;
        position: relative;
        overflow: hidden;
        background-color: #f0f2f5;
    }

    .asesor-img {
        width: 100%;
        height: 100%;
        object-fit: contain; /* Cambiado de 'cover' a 'contain' para mostrar la imagen completa */
        /* Eliminamos la transición ya que no queremos efectos */
    }

    /* Eliminamos o modificamos el hover effect */
    .asesor-card:hover .asesor-img {
        transform: none; /* Eliminamos la transformación */
    }

    .avatar-fallback {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, var(--primary), var(--accent));
        color: white;
        font-size: 4rem;
        font-weight: bold;
    }
    .asesor-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 0.4rem 1rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 700;
        color: white;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
    
    .istmo {
        background: linear-gradient(135deg, var(--secondary), #ffd166);
        color: var(--dark);
    }
    
    .costa {
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
    }
    
    .asesor-content {
        padding: 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .asesor-name {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: var(--dark);
    }
    
    .asesor-contact {
        margin: 1rem 0;
    }
    
    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 0.8rem;
        font-size: 1rem;
    }
    
    .contact-item i {
        margin-right: 0.8rem;
        color: var(--primary);
        width: 20px;
        text-align: center;
        font-size: 1.1rem;
    }
    
    .contact-buttons {
        display: flex;
        gap: 1rem;
        margin-top: auto;
    }
    
    .whatsapp-btn, .facebook-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.7rem 1rem;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        font-size: 0.9rem;
        transition: all 0.3s;
        flex: 1;
    }
    
    .whatsapp-btn {
        background: linear-gradient(135deg, #25D366, #128C7E);
        color: white;
    }
    
    .facebook-btn {
        background: linear-gradient(135deg, #3b5998, #1877f2);
        color: white;
    }
    
    .whatsapp-btn:hover, .facebook-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    /* No results */
    .no-results {
        grid-column: 1 / -1;
        text-align: center;
        padding: 3rem;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .no-results i {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        color: var(--gray);
    }
    
    .no-results h3 {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        color: var(--dark);
    }
    
    /* Responsive optimizado */
    @media (max-width: 992px) {
        .container {
            padding: 1.5rem;
        }
        
        .asesores-grid {
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        }
    }
    
    @media (max-width: 768px) {
        .header h1 {
            font-size: 2rem;
        }
        
        .filters-container {
            flex-direction: column;
            gap: 1rem;
            padding: 1rem;
        }
        
        .search-box {
            width: 100%;
        }
        
        .filter-buttons {
            width: 100%;
            justify-content: center;
        }
        
        .asesor-img-container {
            height: 200px;
        }
    }
    
    @media (max-width: 480px) {
        .asesores-grid {
            grid-template-columns: 1fr;
        }
        
        .contact-buttons {
            flex-direction: column;
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
        <p>Conecta con nuestros expertos en bienes raíces disponibles para brindarte atención personalizada</p>
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
        <!-- Los asesores se cargarán dinámicamente aquí -->
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const searchInput = document.getElementById('searchInput');
        const asesoresContainer = document.getElementById('asesoresContainer');
        
        // Función para cargar los datos del CSV
        async function loadAsesoresData() {
            try {
                const response = await fetch('/files/asesores.csv');
                const csvData = await response.text();
                const asesores = parseCSV(csvData);
                renderAsesores(asesores);
                setupFiltering(asesores);
            } catch (error) {
                console.error('Error al cargar los datos de los asesores:', error);
                asesoresContainer.innerHTML = `
                    <div class="no-results">
                        <i class="fas fa-exclamation-triangle"></i>
                        <h3>Error al cargar los datos</h3>
                        <p>No se pudieron cargar los datos de los asesores. Por favor intenta más tarde.</p>
                    </div>
                `;
            }
        }
        
        // Función para parsear el CSV
        function parseCSV(csv) {
            const lines = csv.split('\n');
            const headers = lines[0].split(',').map(h => h.trim());
            const result = [];
            
            for (let i = 1; i < lines.length; i++) {
                if (!lines[i]) continue;
                
                const obj = {};
                const currentline = lines[i].split(',');
                
                for (let j = 0; j < headers.length; j++) {
                    obj[headers[j]] = currentline[j] ? currentline[j].trim() : '';
                }
                
                result.push(obj);
            }
            
            return result;
        }
        
        // Función para renderizar los asesores
        function renderAsesores(asesores) {
            if (asesores.length === 0) {
                asesoresContainer.innerHTML = `
                    <div class="no-results">
                        <i class="fas fa-user-slash"></i>
                        <h3>No hay asesores disponibles</h3>
                        <p>Próximamente tendremos más asesores para atenderte</p>
                    </div>
                `;
                return;
            }
            
            let html = '';
            
            asesores.forEach(asesor => {
                const nombreCompleto = `${asesor.nombre} ${asesor.apellido_paterno} ${asesor.apellido_materno}`;
                const zona = asesor.zona.toLowerCase();
                const iniciales = `${asesor.nombre.charAt(0)}${asesor.apellido_paterno.charAt(0)}`;
                
                // Formatear teléfono para WhatsApp
                const telefonoFormateado = asesor.telefono.startsWith('52') ? 
                    asesor.telefono : `52${asesor.telefono}`;
                
                html += `
                    <div class="asesor-card" data-ubicacion="${zona}" data-nombre="${nombreCompleto.toLowerCase()}">
                        <div class="asesor-img-container">
                            ${asesor.foto_url ? 
                                `<img src="${asesor.foto_url}" alt="${nombreCompleto}" class="asesor-img">` : 
                                `<div class="avatar-fallback">${iniciales}</div>`
                            }
                            <span class="asesor-badge ${zona}">${asesor.zona}</span>
                        </div>
                        <div class="asesor-content">
                            <h2 class="asesor-name">${nombreCompleto}</h2>
                            
                            <div class="asesor-contact">
                                <div class="contact-item">
                                    <i class="fas fa-phone-alt"></i>
                                    <span>${formatPhoneNumber(asesor.telefono)}</span>
                                </div>
                            </div>
                            
                            <div class="contact-buttons">
                                ${asesor.facebook_url ? 
                                    `<a href="${asesor.facebook_url}" class="facebook-btn" target="_blank">
                                        <i class="fab fa-facebook-f"></i> Facebook
                                    </a>` : ''
                                }
                                <a href="https://wa.me/${telefonoFormateado}" class="whatsapp-btn" target="_blank">
                                    <i class="fab fa-whatsapp"></i> WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                `;
            });
            
            asesoresContainer.innerHTML = html;
        }
        
        // Función para formatear número de teléfono
        function formatPhoneNumber(phone) {
            if (phone.startsWith('52')) {
                phone = phone.substring(2);
            }
            
            // Formato para México: XXX-XXX-XXXX
            return phone.replace(/(\d{3})(\d{3})(\d{4})/, '$1-$2-$3');
        }
        
        // Función para configurar el filtrado
        function setupFiltering(asesores) {
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
            
            // Inicializar
            filterAsesores();
        }
        
        // Cargar los datos al iniciar
        loadAsesoresData();
    });
</script>

<?= view('templates/footer') ?>