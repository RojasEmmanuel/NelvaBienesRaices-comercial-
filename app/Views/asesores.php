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
    
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #f5f7fa;
        color: var(--dark);
        line-height: 1.6;
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
    
    /* Grid de asesores - tarjetas más grandes */
    .asesores-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 2rem;
    }
    
    /* Tarjeta de asesor más grande */
    .asesor-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        padding: 1.8rem;
        height: 100%;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .asesor-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.12);
    }
    
    .asesor-img-container {
        width: 110px;
        height: 110px;
        margin: 0 auto 1.5rem;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .asesor-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .asesor-badge {
        display: inline-block;
        padding: 0.3rem 0.9rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 700;
        color: white;
        margin-bottom: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .istmo {
        background: linear-gradient(135deg, var(--secondary), #ffd166);
        color: var(--dark);
    }
    
    .costa {
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
    }
    
    .asesor-content {
        text-align: center;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .asesor-name {
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: var(--dark);
    }
    
    .asesor-contact {
        margin: 1rem 0;
        text-align: center;
    }
    
    .contact-item2 {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0.6rem;
        font-size: 0.95rem;
    }
    
    .contact-item2 i {
        margin-right: 0.5rem;
        color: var(--primary);
        font-size: 1rem;
    }
    
    .whatsapp-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.7rem 1rem;
        border-radius: 8px;
        background: linear-gradient(135deg, #25D366, #128C7E);
        color: white;
        font-weight: 600;
        text-decoration: none;
        font-size: 0.95rem;
        transition: all 0.3s;
        width: 100%;
        margin-bottom: 0.8rem;
    }
    
    .facebook-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.7rem 1rem;
        border-radius: 8px;
        background: linear-gradient(135deg, #3b5998, #4267B2);
        color: white;
        font-weight: 600;
        text-decoration: none;
        font-size: 0.95rem;
        transition: all 0.3s;
        width: 100%;
    }
    
    .whatsapp-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
    }
    
    .facebook-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(59, 89, 152, 0.3);
    }
    
    /* No results */
    .no-results {
        grid-column: 1 / -1;
        text-align: center;
        padding: 3rem;
        background: white;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    }
    
    .no-results i {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        color: var(--gray);
    }
    
    .no-results h3 {
        font-size: 1.5rem;
        margin-bottom: 0.8rem;
        color: var(--dark);
    }
    
    /* Responsive optimizado */
    @media (max-width: 992px) {
        .container {
            padding: 1.8rem;
        }
        
        .asesores-grid {
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.8rem;
        }
    }
    
    @media (max-width: 768px) {
        .header h1 {
            font-size: 2rem;
        }
        
        .filters-container {
            flex-direction: column;
            gap: 1rem;
            padding: 1.2rem;
        }
        
        .asesor-card {
            padding: 1.5rem;
        }
        
        .asesor-img-container {
            width: 100px;
            height: 100px;
            margin-bottom: 1.2rem;
        }
    }
    
    @media (max-width: 480px) {
        .asesores-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .asesor-img-container {
            width: 90px;
            height: 90px;
        }
        
        .asesor-name {
            font-size: 1.2rem;
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
        <?php
        // Ruta al archivo CSV
        $csvFile = 'files/asesores.csv';
        
        // Verificar si el archivo existe
        if (file_exists($csvFile)) {
            // Abrir el archivo CSV con manejo de codificación
            $fileContent = file_get_contents($csvFile);
            $fileContent = mb_convert_encoding($fileContent, 'UTF-8', mb_detect_encoding($fileContent));
            $tempFile = tmpfile();
            fwrite($tempFile, $fileContent);
            rewind($tempFile);
            
            // Saltar la primera línea (encabezados)
            fgetcsv($tempFile);
            
            // Leer cada línea del CSV
            while (($line = fgetcsv($tempFile)) !== false) {
                // Procesar cada línea con corrección de caracteres
                $nombre = $line[0] ?? '';
                $apellidoPaterno = $line[1] ?? '';
                $apellidoMaterno = $line[2] ?? '';
                $zona = strtolower($line[3] ?? '');
                $telefono = $line[4] ?? '';
                $facebookUrl = $line[5] ?? '';
                $fotoUrl = $line[6] ?? '';
                
                // Si no hay foto URL, usar avatar generado
                $imagenSrc = !empty($fotoUrl) ? 
                    htmlspecialchars($fotoUrl, ENT_QUOTES, 'UTF-8') : 
                    "https://ui-avatars.com/api/?name=".urlencode("$nombre $apellidoPaterno")."&background=random&size=200&rounded=true&color=fff";
                
                // Corregir posibles caracteres mal codificados
                $nombre = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
                $apellidoPaterno = htmlspecialchars($apellidoPaterno, ENT_QUOTES, 'UTF-8');
                $apellidoMaterno = htmlspecialchars($apellidoMaterno, ENT_QUOTES, 'UTF-8');
                
                // Generar nombre completo para búsqueda
                $nombreCompletoBusqueda = mb_strtolower("$nombre $apellidoPaterno $apellidoMaterno");
                $nombreCompletoBusqueda = iconv('UTF-8', 'ASCII//TRANSLIT', $nombreCompletoBusqueda);
                
                // Determinar la clase CSS para la zona
                $zonaClass = $zona === 'istmo' ? 'istmo' : 'costa';
                $zonaDisplay = $zona === 'istmo' ? 'Istmo' : 'Costa';
                
                // Generar URL de WhatsApp
                $telefonoLimpio = preg_replace('/[^0-9]/', '', $telefono);
                $whatsappUrl = "https://wa.me/52$telefonoLimpio";
                
                // Mostrar la tarjeta del asesor
                echo <<<HTML
                <div class="asesor-card" data-ubicacion="$zona" data-nombre="$nombreCompletoBusqueda">
                    <div class="asesor-img-container">
                        <img src="$imagenSrc" alt="$nombre $apellidoPaterno" class="asesor-img" onerror="this.src='https://ui-avatars.com/api/?name={$nombre[0]}+{$apellidoPaterno[0]}&background=random&size=200&rounded=true&color=fff'">
                    </div>
                    <div class="asesor-content">
                        <span class="asesor-badge $zonaClass">$zonaDisplay</span>
                        <h2 class="asesor-name">$nombre $apellidoPaterno $apellidoMaterno</h2>
                        
                        <div class="asesor-contact">
                            <div class="contact-item2">
                                <i class="fas fa-phone-alt"></i>
                                <span>+52 $telefono</span>
                            </div>
                        </div>
                        
                        <a href="$whatsappUrl" class="whatsapp-btn" target="_blank">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                        
                        <a href="$facebookUrl" class="facebook-btn" target="_blank">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </a>
                    </div>
                </div>
    HTML;
            }
            
            // Cerrar el archivo temporal
            fclose($tempFile);
        } else {
            // Mostrar mensaje si el archivo no existe
            echo <<<HTML
            <div class="no-results">
                <i class="fas fa-exclamation-circle"></i>
                <h3>No se encontraron asesores</h3>
                <p>El archivo de datos no está disponible</p>
            </div>
    HTML;
        }
        ?>
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
        
        // Efecto de aparición al cargar
        setTimeout(() => {
            document.querySelectorAll('.asesor-card').forEach(card => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            });
        }, 100);
        
        // Inicializar
        filterAsesores();
    });
</script>

<?= view('templates/footer') ?>