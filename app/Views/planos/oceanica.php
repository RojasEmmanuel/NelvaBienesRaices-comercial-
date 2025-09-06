<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Oceanica - Mapa de Lotes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://api.mapbox.com/mapbox-gl-js/v3.3.0/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v3.3.0/mapbox-gl.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #2563eb;
      --primary-dark: #1d4ed8;
      --secondary-color: #64748b;
      --success-color: #16a34a;
      --danger-color: #dc2626;
      --warning-color: #ea580c;
      --light-color: #f8fafc;
      --dark-color: #0f172a;
      --border-radius: 12px;
      --shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
      --transition: all 0.3s ease;
    }
    
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    body {
      font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #334155;
      overflow: hidden;
      background-color: #f1f5f9;
    }
    
    #map {
      position: absolute;
      top: 0;
      bottom: 0;
      width: 100%;
      height: 100%;
    }
    
    /* Header y logo */
    .header {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      padding: 15px 25px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 100%);
      pointer-events: none;
    }
    
    .header * {
      pointer-events: auto;
    }
    
    #logo {
      height: 40px;
      filter: drop-shadow(0px 2px 4px rgba(0,0,0,0.5));
    }
    
    .map-title {
      color: white;
      font-size: 18px;
      font-weight: 600;
      text-shadow: 0 1px 3px rgba(0,0,0,0.5);
      margin-left: 15px;
    }
    
    .header-controls {
      display: flex;
      gap: 12px;
      align-items: center;
    }
    
    /* Panel de controles */
    .control-panel {
      position: absolute;
      top: 80px;
      left: 25px;
      z-index: 10;
      background: rgba(255, 255, 255, 0.98);
      border-radius: var(--border-radius);
      padding: 20px;
      box-shadow: var(--shadow);
      backdrop-filter: blur(10px);
      width: 300px;
      border: 1px solid rgba(255, 255, 255, 0.5);
      transition: var(--transition);
      max-height: calc(100vh - 100px);
      overflow-y: auto;
    }
    
    .control-panel.collapsed {
      width: 50px;
      height: 50px;
      padding: 12px;
      overflow: hidden;
    }
    
    .control-panel.collapsed .control-section {
      display: none;
    }
    
    .panel-toggle {
      position: absolute;
      top: 15px;
      right: 15px;
      background: none;
      border: none;
      font-size: 16px;
      color: var(--secondary-color);
      cursor: pointer;
      transition: var(--transition);
    }
    
    .panel-toggle:hover {
      color: var(--primary-color);
    }
    
    .control-section {
      margin-bottom: 20px;
    }
    
    .control-section:last-child {
      margin-bottom: 0;
    }
    
    .control-title {
      font-weight: 600;
      margin-bottom: 12px;
      color: var(--dark-color);
      font-size: 15px;
      display: flex;
      align-items: center;
    }
    
    .control-title i {
      margin-right: 10px;
      color: var(--primary-color);
      width: 20px;
      text-align: center;
    }
    
    .style-buttons {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
    }
    
    .style-btn {
      border: none;
      background: #f8fafc;
      border-radius: 8px;
      padding: 10px 12px;
      font-size: 13px;
      cursor: pointer;
      transition: var(--transition);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      color: #475569;
      border: 1px solid #e2e8f0;
      font-weight: 500;
    }
    
    .style-btn:hover {
      background: #f1f5f9;
      transform: translateY(-2px);
    }
    
    .style-btn.active {
      background: var(--primary-color);
      color: white;
      border-color: var(--primary-color);
      box-shadow: 0 4px 6px -1px rgba(37, 99, 235, 0.2);
    }
    
    .filter-buttons {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    
    .filter-btn {
      display: flex;
      align-items: center;
      padding: 10px 14px;
      border-radius: 8px;
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      cursor: pointer;
      transition: var(--transition);
      font-size: 14px;
      font-weight: 500;
    }
    
    .filter-btn:hover {
      background: #f1f5f9;
      transform: translateY(-2px);
    }
    
    .filter-btn.active {
      background: var(--primary-color);
      color: white;
      border-color: var(--primary-color);
      box-shadow: 0 4px 6px -1px rgba(37, 99, 235, 0.2);
    }
    
    .color-indicator {
      width: 14px;
      height: 14px;
      border-radius: 50%;
      margin-right: 10px;
      flex-shrink: 0;
    }
    
    .disponible-indicator {
      background-color: #16a34a;
    }
    
    .vendido-indicator {
      background-color: #dc2626;
    }
    
    .apartado-indicator {
      background-color: #ea580c;
    }
    
    /* Panel de información */
    .info-panel {
      position: absolute;
      top: 80px;
      right: 25px;
      z-index: 10;
      background: rgba(255, 255, 255, 0.98);
      border-radius: var(--border-radius);
      padding: 20px;
      box-shadow: var(--shadow);
      backdrop-filter: blur(10px);
      width: 300px;
      max-height: calc(100% - 180px);
      overflow-y: auto;
      border: 1px solid rgba(255, 255, 255, 0.5);
      transition: var(--transition);
    }
    
    .info-panel.hidden {
      transform: translateX(350px);
      opacity: 0;
      pointer-events: none;
    }
    
    .info-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      padding-bottom: 15px;
      border-bottom: 1px solid #e2e8f0;
    }
    
    .info-title {
      font-weight: 700;
      font-size: 18px;
      color: var(--dark-color);
    }
    
    .info-close {
      background: none;
      border: none;
      font-size: 18px;
      color: var(--secondary-color);
      cursor: pointer;
      transition: var(--transition);
    }
    
    .info-close:hover {
      color: var(--danger-color);
    }
    
    .stats-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px;
      margin-bottom: 20px;
    }
    
    .stat-card {
      background: #f8fafc;
      border-radius: 10px;
      padding: 15px;
      text-align: center;
      border: 1px solid #e2e8f0;
    }
    
    .stat-value {
      font-size: 24px;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 5px;
    }
    
    .stat-label {
      font-size: 12px;
      color: var(--secondary-color);
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    
    .info-list {
      list-style: none;
    }
    
    .info-item {
      padding: 12px 0;
      border-bottom: 1px solid #f1f5f9;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .info-item:last-child {
      border-bottom: none;
    }
    
    .info-item-title {
      font-weight: 500;
      color: var(--dark-color);
    }
    
    .info-item-value {
      font-weight: 600;
      color: var(--primary-color);
    }
    
    /* Controles de mapa */
    .map-controls {
      position: absolute;
      bottom: 130px;
      right: 25px;
      z-index: 10;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 15px;
    }
    
    .compass {
      width: 70px;
      height: 70px;
      background: rgba(255, 255, 255, 0.98);
      border-radius: 50%;
      box-shadow: var(--shadow);
      display: flex;
      align-items: center;
      justify-content: center;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.5);
    }
    
    .compass-inner {
      width: 50px;
      height: 50px;
      background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 18px;
      position: relative;
      transition: transform 0.5s ease;
    }
    
    .compass-n {
      position: absolute;
      top: 5px;
      left: 50%;
      transform: translateX(-50%);
      font-weight: bold;
      font-size: 12px;
      color: #ef4444;
    }
    
    .compass-arrow {
      width: 2px;
      height: 20px;
      background: #ef4444;
      position: absolute;
      top: 8px;
      left: 50%;
      transform: translateX(-50%);
    }
    
    .control-btn {
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.98);
      border-radius: 50%;
      box-shadow: var(--shadow);
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      color: var(--dark-color);
      font-size: 18px;
      transition: var(--transition);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.5);
    }
    
    .control-btn:hover {
      background: white;
      transform: scale(1.05) translateY(-2px);
      color: var(--primary-color);
    }
    
    /* Search box */
    .search-box {
      position: absolute;
      top: 25px;
      left: 50%;
      transform: translateX(-50%);
      z-index: 10;
      width: 400px;
      max-width: 60%;
    }
    
    .search-container {
      position: relative;
    }
    
    .search-input {
      width: 100%;
      padding: 14px 20px 14px 45px;
      border: none;
      border-radius: 50px;
      background: rgba(255, 255, 255, 0.95);
      box-shadow: var(--shadow);
      font-size: 15px;
      color: var(--dark-color);
      transition: var(--transition);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.5);
    }
    
    .search-input:focus {
      outline: none;
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
    }
    
    .search-icon {
      position: absolute;
      left: 18px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--secondary-color);
      font-size: 18px;
    }
    
    /* Loading indicator */
    .loading-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(255, 255, 255, 0.9);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      z-index: 1000;
      transition: opacity 0.3s ease;
    }
    
    .loading-spinner {
      width: 50px;
      height: 50px;
      border: 5px solid #f1f5f9;
      border-top: 5px solid var(--primary-color);
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin-bottom: 20px;
    }
    
    .loading-text {
      font-size: 16px;
      color: var(--dark-color);
      font-weight: 500;
    }
    
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    
    /* Toast notifications */
    .toast-container {
      position: fixed;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      z-index: 1000;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    
    .toast {
      padding: 15px 20px;
      border-radius: 10px;
      background: white;
      box-shadow: var(--shadow);
      display: flex;
      align-items: center;
      gap: 12px;
      animation: toast-in 0.3s ease;
      max-width: 400px;
    }
    
    .toast.success {
      border-left: 4px solid var(--success-color);
    }
    
    .toast.error {
      border-left: 4px solid var(--danger-color);
    }
    
    .toast.warning {
      border-left: 4px solid var(--warning-color);
    }
    
    .toast-icon {
      font-size: 20px;
    }
    
    .toast.success .toast-icon {
      color: var(--success-color);
    }
    
    .toast.error .toast-icon {
      color: var(--danger-color);
    }
    
    .toast.warning .toast-icon {
      color: var(--warning-color);
    }
    
    .toast-message {
      flex: 1;
      font-size: 14px;
      font-weight: 500;
    }
    
    .toast-close {
      background: none;
      border: none;
      font-size: 16px;
      color: var(--secondary-color);
      cursor: pointer;
      transition: var(--transition);
    }
    
    .toast-close:hover {
      color: var(--dark-color);
    }
    
    @keyframes toast-in {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    /* Popup mejorado */
    .mapboxgl-popup-content {
      border-radius: var(--border-radius);
      padding: 20px;
      background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
      box-shadow: var(--shadow);
      max-width: 320px;
    }
    
    .mapboxgl-popup-close-button {
      font-size: 18px;
      padding: 6px 10px;
      color: var(--secondary-color);
      transition: var(--transition);
    }
    
    .mapboxgl-popup-close-button:hover {
      color: var(--danger-color);
      background: none;
    }
    
    .lote-info {
      text-align: center;
    }
    
    .lote-numero {
      font-size: 22px;
      font-weight: 700;
      color: var(--dark-color);
      margin-bottom: 8px;
    }
    
    .lote-area {
      font-size: 16px;
      color: var(--primary-color);
      background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%);
      padding: 10px 15px;
      border-radius: 8px;
      margin: 12px 0;
      font-weight: 600;
    }
    
    .lote-details {
      margin-top: 15px;
      border-top: 1px solid #e2e8f0;
      padding-top: 15px;
    }
    
    .lote-detail-row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
      font-size: 14px;
    }
    
    .lote-detail-label {
      color: #64748b;
      font-weight: 500;
    }
    
    .lote-detail-value {
      color: var(--dark-color);
      font-weight: 600;
    }
    
    .estatus-badge {
      display: inline-block;
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 600;
      margin-top: 8px;
      color: white;
    }
    
    .disponible {
      background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
    }
    
    .vendido {
      background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
    }
    
    .apartado {
      background: linear-gradient(135deg, #ea580c 0%, #c2410c 100%);
    }
    
    /* Badge de número de lote */
    .lote-badge {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 28px;
      height: 28px;
      border-radius: 50%;
      font-weight: bold;
      font-size: 13px;
      color: white;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.2);
      transition: var(--transition);
    }
    
    .badge-disponible {
      background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
    }
    
    .badge-vendido {
      background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
    }
    
    .badge-apartado {
      background: linear-gradient(135deg, #ea580c 0%, #c2410c 100%);
    }
    
    /* Mobile menu */
    .mobile-menu-btn {
      display: none;
      background: none;
      border: none;
      color: white;
      font-size: 24px;
      cursor: pointer;
      margin-left: 15px;
    }
    
    /* Bottom sheet para móviles */
    .mobile-bottom-sheet {
      display: none;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background: white;
      border-radius: 20px 20px 0 0;
      z-index: 1000;
      box-shadow: 0 -5px 25px -5px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      transform: translateY(100%);
      max-height: 85vh;
      overflow-y: auto;
    }
    
    .mobile-bottom-sheet.open {
      transform: translateY(0);
    }
    
    .sheet-handle {
      width: 40px;
      height: 5px;
      background: #e2e8f0;
      border-radius: 3px;
      margin: 15px auto;
    }
    
    .sheet-content {
      padding: 0 20px 30px;
    }
    
    .sheet-tabs {
      display: flex;
      border-bottom: 1px solid #e2e8f0;
      margin-bottom: 20px;
    }
    
    .sheet-tab {
      flex: 1;
      text-align: center;
      padding: 15px;
      font-weight: 600;
      color: var(--secondary-color);
      border-bottom: 3px solid transparent;
    }
    
    .sheet-tab.active {
      color: var(--primary-color);
      border-bottom-color: var(--primary-color);
    }
    
    /* Floating Action Button para móviles */
    .mobile-fab {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: var(--primary-color);
      color: white;
      box-shadow: var(--shadow);
      z-index: 900;
      align-items: center;
      justify-content: center;
      font-size: 24px;
    }
    
    /* Responsive */
    @media (max-width: 1024px) {
      .control-panel, .info-panel {
        width: 280px;
      }
      
      .search-box {
        width: 350px;
      }
    }
    
    @media (max-width: 768px) {
      .header {
        padding: 12px 15px;
      }
      
      .map-title {
        font-size: 16px;
      }
      
      /* Ocultar paneles tradicionales en móviles */
      .control-panel, .info-panel {
        display: none;
      }
      
      /* Mostrar elementos móviles */
      .mobile-bottom-sheet,
      .mobile-fab {
        display: block;
      }
      
      .map-controls {
        bottom: 100px;
        right: 15px;
      }
      
      .search-box {
        top: 70px;
        width: calc(100% - 30px);
        max-width: none;
      }
      
      .stats-grid {
        grid-template-columns: 1fr 1fr;
      }
      
      .style-buttons {
        grid-template-columns: 1fr 1fr;
      }
      
      .header-controls .control-btn:not(#mobile-menu-btn) {
        display: none;
      }
      
      .mobile-menu-btn {
        display: block;
      }
      
      .compass {
        width: 60px;
        height: 60px;
      }
      
      .compass-inner {
        width: 40px;
        height: 40px;
        font-size: 16px;
      }
      
      .control-btn {
        width: 45px;
        height: 45px;
        font-size: 16px;
      }
      
      /* Ajustar el header para móviles */
      .header {
        padding: 10px 15px;
      }
      
      #logo {
        height: 35px;
      }
      
      .map-title {
        font-size: 14px;
        margin-left: 10px;
      }
      
      /* Mejorar el buscador para móviles */
      .search-input {
        padding: 12px 16px 12px 40px;
        font-size: 16px; /* Tamaño más grande para evitar zoom en iOS */
      }
      
      /* Ajustar controles de mapa para móviles */
      .map-controls {
        bottom: 90px;
        gap: 12px;
      }
    }
    
    @media (max-width: 480px) {
      .header {
        padding: 10px 12px;
      }
      
      #logo {
        height: 32px;
      }
      
      .map-title {
        font-size: 14px;
        margin-left: 8px;
      }
      
      .search-box {
        top: 65px;
      }
      
      .map-controls {
        bottom: 80px;
        right: 12px;
      }
      
      .compass {
        width: 50px;
        height: 50px;
      }
      
      .compass-inner {
        width: 35px;
        height: 35px;
        font-size: 14px;
      }
      
      .control-btn {
        width: 40px;
        height: 40px;
        font-size: 14px;
      }
      
      /* Ajustar bottom sheet */
      .sheet-content {
        padding: 0 15px 25px;
      }
      
      .stats-grid {
        grid-template-columns: 1fr;
        gap: 10px;
      }
      
      .stat-card {
        padding: 12px;
      }
      
      .stat-value {
        font-size: 20px;
      }
      
      .style-buttons {
        grid-template-columns: 1fr;
      }
      
      .filter-btn {
        padding: 12px;
      }
      
      /* Mejorar el FAB para móviles pequeños */
      .mobile-fab {
        width: 56px;
        height: 56px;
        bottom: 16px;
        right: 16px;
      }
    }
  </style>
</head>
<body>
<div class="header">
  <div style="display: flex; align-items: center;">
    <img id="logo" src="/images/inicio/OCEANICA.png" alt="Logo Oceanica">
    <div class="map-title">Mapa de Lotes</div>
  </div>
  
  <div class="header-controls">
    <div class="control-btn" id="info-toggle">
      <i class="fas fa-info-circle"></i>
    </div>
    <div class="control-btn" id="fullscreen-toggle">
      <i class="fas fa-expand"></i>
    </div>
    <button class="mobile-menu-btn" id="mobile-menu-btn">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</div>

<div id="map"></div>

<!-- Panel de controles -->
<div class="control-panel">
  <button class="panel-toggle" id="panel-toggle">
    <i class="fas fa-chevron-left"></i>
  </button>
  
  <div class="control-section">
    <div class="control-title"><i class="fas fa-layer-group"></i> Estilo del Mapa</div>
    <div class="style-buttons">
      <button class="style-btn active" data-style="satellite-streets">
        <i class="fas fa-satellite"></i> Satélite
      </button>
      <button class="style-btn" data-style="outdoors">
        <i class="fas fa-mountain"></i> Relieve
      </button>
      <button class="style-btn" data-style="streets">
        <i class="fas fa-road"></i> Calles
      </button>
      <button class="style-btn" data-style="light">
        <i class="fas fa-map"></i> Light
      </button>
    </div>
  </div>
  
  <div class="control-section">
    <div class="control-title"><i class="fas fa-filter"></i> Filtros</div>
    <div class="filter-buttons">
      <button class="filter-btn active" data-filter="all">
        <div class="color-indicator" style="background: conic-gradient(#16a34a 0% 33%, #dc2626 33% 66%, #ea580c 66% 100%);"></div>
        Todos los lotes
      </button>
      <button class="filter-btn" data-filter="disponible">
        <div class="color-indicator disponible-indicator"></div>
        Disponibles
      </button>
      <button class="filter-btn" data-filter="vendido">
        <div class="color-indicator vendido-indicator"></div>
        Vendidos
      </button>
      <button class="filter-btn" data-filter="apartado">
        <div class="color-indicator apartado-indicator"></div>
        Apartados
      </button>
    </div>
  </div>
  
  <div class="control-section">
    <div class="control-title"><i class="fas fa-sliders-h"></i> Opciones</div>
    <div class="filter-buttons">
      <button class="filter-btn" id="toggle-labels">
        <i class="fas fa-tag"></i>
        <span>Alternar etiquetas</span>
      </button>
      <button class="filter-btn" id="toggle-3d">
        <i class="fas fa-cube"></i>
        <span>Vista 3D</span>
      </button>
    </div>
  </div>
</div>

<!-- Panel de información -->
<div class="info-panel hidden">
  <div class="info-header">
    <div class="info-title">Resumen del Fraccionamiento</div>
    <button class="info-close" id="info-close">
      <i class="fas fa-times"></i>
    </button>
  </div>
  
  <div class="stats-grid">
    <div class="stat-card">
      <div class="stat-value" id="total-lotes">0</div>
      <div class="stat-label">Total Lotes</div>
    </div>
    <div class="stat-card">
      <div class="stat-value" id="disponible-lotes">0</div>
      <div class="stat-label">Disponibles</div>
    </div>
    <div class="stat-card">
      <div class="stat-value" id="vendido-lotes">0</div>
      <div class="stat-label">Vendidos</div>
    </div>
    <div class="stat-card">
      <div class="stat-value" id="apartado-lotes">0</div>
      <div class="stat-label">Apartados</div>
    </div>
  </div>
  
  
  <div class="control-title"><i class="fas fa-info-circle"></i> Información General</div>
  <ul class="info-list">
    <li class="info-item">
      <span class="info-item-title">Área total:</span>
      <span class="info-item-value" id="total-area">0 m²</span>
    </li>
    <li class="info-item">
      <span class="info-item-title">Manzanas:</span>
      <span class="info-item-value" id="total-manzanas">0</span>
    </li>
    <li class="info-item">
      <span class="info-item-title">Última actualización:</span>
      <span class="info-item-value" id="last-update">-</span>
    </li>
  </ul>
</div>

<!-- Bottom Sheet para móviles -->
<div class="mobile-bottom-sheet" id="mobile-sheet">
  <div class="sheet-handle"></div>
  <div class="sheet-tabs">
    <div class="sheet-tab active" data-tab="controls">Controles</div>
    <div class="sheet-tab" data-tab="info">Información</div>
  </div>
  <div class="sheet-content">
    <!-- Contenido de controles -->
    <div class="tab-content" id="controls-content">
      <div class="control-section">
        <div class="control-title"><i class="fas fa-layer-group"></i> Estilo del Mapa</div>
        <div class="style-buttons">
          <button class="style-btn active" data-style="satellite-streets">
            <i class="fas fa-satellite"></i> Satélite
          </button>
          <button class="style-btn" data-style="outdoors">
            <i class="fas fa-mountain"></i> Relieve
          </button>
          <button class="style-btn" data-style="streets">
            <i class="fas fa-road"></i> Calles
          </button>
          <button class="style-btn" data-style="light">
            <i class="fas fa-map"></i> Light
          </button>
        </div>
      </div>
      
      <div class="control-section">
        <div class="control-title"><i class="fas fa-filter"></i> Filtros</div>
        <div class="filter-buttons">
          <button class="filter-btn active" data-filter="all">
            <div class="color-indicator" style="background: conic-gradient(#16a34a 0% 33%, #dc2626 33% 66%, #ea580c 66% 100%);"></div>
            Todos los lotes
          </button>
          <button class="filter-btn" data-filter="disponible">
            <div class="color-indicator disponible-indicator"></div>
            Disponibles
          </button>
          <button class="filter-btn" data-filter="vendido">
            <div class="color-indicator vendido-indicator"></div>
            Vendidos
          </button>
          <button class="filter-btn" data-filter="apartado">
            <div class="color-indicator apartado-indicator"></div>
            Apartados
          </button>
        </div>
      </div>
      
      <div class="control-section">
        <div class="control-title"><i class="fas fa-sliders-h"></i> Opciones</div>
        <div class="filter-buttons">
          <button class="filter-btn" id="mobile-toggle-labels">
            <i class="fas fa-tag"></i>
            <span>Alternar etiquetas</span>
          </button>
          <button class="filter-btn" id="mobile-toggle-3d">
            <i class="fas fa-cube"></i>
            <span>Vista 3D</span>
          </button>
        </div>
      </div>
    </div>
    
    <!-- Contenido de información -->
    <div class="tab-content" id="info-content" style="display: none;">
      <div class="info-header">
        <div class="info-title">Resumen del Fraccionamiento</div>
      </div>
      
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-value" id="mobile-total-lotes">0</div>
          <div class="stat-label">Total Lotes</div>
        </div>
        <div class="stat-card">
          <div class="stat-value" id="mobile-disponible-lotes">0</div>
          <div class="stat-label">Disponibles</div>
        </div>
        <div class="stat-card">
          <div class="stat-value" id="mobile-vendido-lotes">0</div>
          <div class="stat-label">Vendidos</div>
        </div>
        <div class="stat-card">
          <div class="stat-value" id="mobile-apartado-lotes">0</div>
          <div class="stat-label">Apartados</div>
        </div>
      </div>
      
      <div class="control-title"><i class="fas fa-info-circle"></i> Información General</div>
      <ul class="info-list">
        <li class="info-item">
          <span class="info-item-title">Área total:</span>
          <span class="info-item-value" id="mobile-total-area">0 m²</span>
        </li>
        <li class="info-item">
          <span class="info-item-title">Manzanas:</span>
          <span class="info-item-value" id="mobile-total-manzanas">0</span>
        </li>
        <li class="info-item">
          <span class="info-item-title">Última actualización:</span>
          <span class="info-item-value" id="mobile-last-update">-</span>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- FAB para móviles -->
<div class="mobile-fab" id="mobile-fab">
  <i class="fas fa-layer-group"></i>
</div>

<!-- Buscador -->
<div class="search-box">
  <div class="search-container">
    <i class="fas fa-search search-icon"></i>
    <input type="text" class="search-input" placeholder="Buscar lote por número..." id="search-input">
  </div>
</div>

<!-- Controles de mapa -->
<div class="map-controls">
  <div class="compass">
    <div class="compass-inner">
      <div class="compass-n">N</div>
      <div class="compass-arrow"></div>
      <i class="fas fa-diamond" style="font-size: 10px;"></i>
    </div>
  </div>
  
  <div class="control-btn reset-bearing">
    <i class="fas fa-compass"></i>
  </div>
  
  <div class="control-btn zoom-in">
    <i class="fas fa-plus"></i>
  </div>
  
  <div class="control-btn zoom-out">
    <i class="fas fa-minus"></i>
  </div>
  
  <div class="control-btn" id="current-location">
    <i class="fas fa-location-arrow"></i>
  </div>
</div>

<!-- Loading overlay -->
<div class="loading-overlay">
  <div class="loading-spinner"></div>
  <div class="loading-text">Cargando mapa...</div>
</div>

<!-- Toast container -->
<div class="toast-container" id="toast-container"></div>

<script>
  // Token de Mapbox
  mapboxgl.accessToken = 'pk.eyJ1Ijoicm9qYXNkZXYiLCJhIjoiY21leDF4N2JtMTI0NTJrcHlsdjBiN2Y3YiJ9.RB87H34djrYH3WrRa-12Pg';

  // Estilos de mapa disponibles
  const mapStyles = {
    'satellite-streets': 'mapbox://styles/mapbox/satellite-streets-v12',
    'outdoors': 'mapbox://styles/mapbox/outdoors-v12',
    'streets': 'mapbox://styles/mapbox/streets-v12',
    'light': 'mapbox://styles/mapbox/light-v11'
  };

  // Inicializar el mapa
  const map = new mapboxgl.Map({
    container: 'map',
    style: mapStyles['satellite-streets'],
    center: [-96.5, 15.7],
    zoom: 14,
    pitch: 45,
    bearing: -17,
    antialias: true
  });

  // Variables globales
  let currentFilter = 'all';
  let lotesSource = null;
  let fraccionamientoPolygon = null;
  let markers = [];
  let is3DView = false;
  let isPanelCollapsed = false;
  let isMobileView = window.innerWidth <= 768;
  let mobileSheetOpen = false;

  // Inicializar el mapa
  map.on('load', () => {
    initCompass();
    initControls();
    loadLotesData();
    setupTerrain();
    
    // Ocultar loading después de un breve delay
    setTimeout(() => {
      document.querySelector('.loading-overlay').style.opacity = '0';
      setTimeout(() => {
        document.querySelector('.loading-overlay').style.display = 'none';
      }, 300);
    }, 1000);
  });

  // Inicializar la rosa de los vientos
  function initCompass() {
    function updateCompass() {
      const bearing = map.getBearing();
      document.querySelector('.compass-inner').style.transform = `rotate(${-bearing}deg)`;
    }

    map.on('rotate', updateCompass);
    updateCompass();
  }

  // Configurar controles de la interfaz
  function initControls() {
    // Botón para resetear la orientación norte
    document.querySelector('.reset-bearing').addEventListener('click', () => {
      map.easeTo({
        bearing: 0,
        pitch: is3DView ? 45 : 0,
        duration: 1000
      });
    });

    // Botones de zoom
    document.querySelector('.zoom-in').addEventListener('click', () => {
      map.zoomIn();
    });

    document.querySelector('.zoom-out').addEventListener('click', () => {
      map.zoomOut();
    });

    // Selector de estilos de mapa
    document.querySelectorAll('.style-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.style-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        
        const style = this.getAttribute('data-style');
        showToast('Cambiando estilo de mapa...', 'info');
        
        map.setStyle(mapStyles[style]);
        
        // Cuando cambia el estilo, necesitamos volver a cargar las capas
        map.once('style.load', () => {
          setupTerrain();
          addFraccionamientoPolygon();
          if (lotesSource) {
            addLotesToMap(lotesSource);
          }
          showToast('Estilo de mapa cambiado', 'success');
        });
      });
    });

    // Filtros de estatus
    document.querySelectorAll('.filter-btn').forEach(btn => {
      if (btn.id) return; // Skip buttons with IDs (they're not filters)
      
      btn.addEventListener('click', function() {
        document.querySelectorAll('.filter-btn').forEach(b => {
          if (!b.id) b.classList.remove('active');
        });
        this.classList.add('active');
        
        currentFilter = this.getAttribute('data-filter');
        filterLotesByStatus(currentFilter);
        
        // Mostrar mensaje según el filtro
        let message = 'Mostrando todos los lotes';
        if (currentFilter === 'disponible') message = 'Filtrando lotes disponibles';
        if (currentFilter === 'vendido') message = 'Filtrando lotes vendidos';
        if (currentFilter === 'apartado') message = 'Filtrando lotes apartados';
        
        showToast(message, 'success');
      });
    });

    // Toggle panel
    document.getElementById('panel-toggle').addEventListener('click', () => {
      const panel = document.querySelector('.control-panel');
      const icon = document.getElementById('panel-toggle').querySelector('i');
      
      isPanelCollapsed = !isPanelCollapsed;
      panel.classList.toggle('collapsed');
      
      if (isPanelCollapsed) {
        icon.classList.remove('fa-chevron-left');
        icon.classList.add('fa-chevron-right');
      } else {
        icon.classList.remove('fa-chevron-right');
        icon.classList.add('fa-chevron-left');
      }
    });

    // Toggle info panel
    document.getElementById('info-toggle').addEventListener('click', () => {
      document.querySelector('.info-panel').classList.toggle('hidden');
    });

    document.getElementById('info-close').addEventListener('click', () => {
      document.querySelector('.info-panel').classList.add('hidden');
    });

    // Toggle 3D view
    document.getElementById('toggle-3d').addEventListener('click', () => {
      is3DView = !is3DView;
      
      map.easeTo({
        pitch: is3DView ? 45 : 0,
        duration: 1000
      });
      
      showToast(is3DView ? 'Vista 3D activada' : 'Vista 2D activada', 'success');
    });

    // Toggle labels
    document.getElementById('toggle-labels').addEventListener('click', () => {
      const markers = document.querySelectorAll('.lote-marker');
      const isVisible = markers[0].style.display !== 'none';
      
      markers.forEach(marker => {
        marker.style.display = isVisible ? 'none' : 'block';
      });
      
      showToast(isVisible ? 'Etiquetas ocultas' : 'Etiquetas visibles', 'success');
    });

    // Current location
    document.getElementById('current-location').addEventListener('click', () => {
      if (!navigator.geolocation) {
        showToast('Geolocalización no es soportada por tu navegador', 'error');
        return;
      }
      
      showToast('Obteniendo ubicación...', 'info');
      
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const { longitude, latitude } = position.coords;
          
          map.flyTo({
            center: [longitude, latitude],
            zoom: 15,
            duration: 2000
          });
          
          showToast('Ubicación actual encontrada', 'success');
        },
        (error) => {
          showToast('No se pudo obtener la ubicación', 'error');
          console.error('Error getting location:', error);
        }
      );
    });

    // Fullscreen toggle
    document.getElementById('fullscreen-toggle').addEventListener('click', toggleFullscreen);

    // Search functionality
    document.getElementById('search-input').addEventListener('keyup', (e) => {
      if (e.key === 'Enter') {
        searchLote(e.target.value);
      }
    });

    // Mobile menu toggle
    document.getElementById('mobile-menu-btn').addEventListener('click', () => {
      document.querySelector('.control-panel').classList.toggle('collapsed');
    });

    // Controles para móviles
    if (isMobileView) {
      // FAB para abrir/cerrar bottom sheet
      document.getElementById('mobile-fab').addEventListener('click', toggleMobileSheet);
      
      // Tabs en bottom sheet
      document.querySelectorAll('.sheet-tab').forEach(tab => {
        tab.addEventListener('click', function() {
          document.querySelectorAll('.sheet-tab').forEach(t => t.classList.remove('active'));
          this.classList.add('active');
          
          const tabName = this.getAttribute('data-tab');
          document.querySelectorAll('.tab-content').forEach(content => {
            content.style.display = 'none';
          });
          document.getElementById(`${tabName}-content`).style.display = 'block';
        });
      });
      
      // Delegación de eventos para botones en el bottom sheet
      document.getElementById('controls-content').addEventListener('click', function(e) {
        // Estilos de mapa
        if (e.target.closest('.style-btn')) {
          const btn = e.target.closest('.style-btn');
          document.querySelectorAll('.style-btn').forEach(b => b.classList.remove('active'));
          btn.classList.add('active');
          
          const style = btn.getAttribute('data-style');
          showToast('Cambiando estilo de mapa...', 'info');
          
          map.setStyle(mapStyles[style]);
          
          map.once('style.load', () => {
            setupTerrain();
            addFraccionamientoPolygon();
            if (lotesSource) {
              addLotesToMap(lotesSource);
            }
            showToast('Estilo de mapa cambiado', 'success');
          });
        }
        
        // Filtros
        if (e.target.closest('.filter-btn') && !e.target.closest('.filter-btn').id) {
          const btn = e.target.closest('.filter-btn');
          document.querySelectorAll('.filter-btn').forEach(b => {
            if (!b.id) b.classList.remove('active');
          });
          btn.classList.add('active');
          
          currentFilter = btn.getAttribute('data-filter');
          filterLotesByStatus(currentFilter);
          
          let message = 'Mostrando todos los lotes';
          if (currentFilter === 'disponible') message = 'Filtrando lotes disponibles';
          if (currentFilter === 'vendido') message = 'Filtrando lotes vendidos';
          if (currentFilter === 'apartado') message = 'Filtrando lotes apartados';
          
          showToast(message, 'success');
        }
        
        // Toggle 3D
        if (e.target.closest('#mobile-toggle-3d')) {
          is3DView = !is3DView;
          
          map.easeTo({
            pitch: is3DView ? 45 : 0,
            duration: 1000
          });
          
          showToast(is3DView ? 'Vista 3D activada' : 'Vista 2D activada', 'success');
        }
        
        // Toggle labels
        if (e.target.closest('#mobile-toggle-labels')) {
          const markers = document.querySelectorAll('.lote-marker');
          const isVisible = markers[0].style.display !== 'none';
          
          markers.forEach(marker => {
            marker.style.display = isVisible ? 'none' : 'block';
          });
          
          showToast(isVisible ? 'Etiquetas ocultas' : 'Etiquetas visibles', 'success');
        }
      });
      
      // Cerrar bottom sheet al hacer clic fuera
      document.getElementById('mobile-sheet').addEventListener('click', function(e) {
        if (e.target === this) {
          toggleMobileSheet();
        }
      });
    }

    // Ajustar para vista móvil
    window.addEventListener('resize', () => {
      const mobileView = window.innerWidth <= 768;
      if (mobileView !== isMobileView) {
        isMobileView = mobileView;
        if (isMobileView) {
          // En móvil, colapsar el panel por defecto
          document.querySelector('.control-panel').classList.add('collapsed');
        }
      }
    });
  }

  // Función para abrir/cerrar el bottom sheet en móviles
  function toggleMobileSheet() {
    const sheet = document.getElementById('mobile-sheet');
    mobileSheetOpen = !mobileSheetOpen;
    
    if (mobileSheetOpen) {
      sheet.classList.add('open');
      document.getElementById('mobile-fab').innerHTML = '<i class="fas fa-times"></i>';
    } else {
      sheet.classList.remove('open');
      document.getElementById('mobile-fab').innerHTML = '<i class="fas fa-layer-group"></i>';
    }
  }

  // Función para buscar lote
  function searchLote(loteNumber) {
    if (!lotesSource) return;
    
    const feature = lotesSource.features.find(f => 
      f.properties.lote && f.properties.lote.toString() === loteNumber.toString()
    );
    
    if (feature) {
      const coordinates = getCentroid(feature.geometry.coordinates[0]);
      
      map.flyTo({
        center: coordinates,
        zoom: 18,
        duration: 2000
      });
      
      // Cerrar bottom sheet si está abierto en móviles
      if (isMobileView && mobileSheetOpen) {
        toggleMobileSheet();
      }
      
      // Abrir popup con información del lote
      setTimeout(() => {
        const popup = new mapboxgl.Popup()
          .setLngLat(coordinates)
          .setHTML(createPopupContent(feature.properties))
          .addTo(map);
      }, 2100);
      
      showToast(`Lote ${loteNumber} encontrado`, 'success');
    } else {
      showToast(`Lote ${loteNumber} no encontrado`, 'error');
    }
  }

  // Configurar el terreno
  function setupTerrain() {
    // Solo añadir terreno si existe el estilo y no está ya añadido
    if (map.getSource('mapbox-dem')) return;
    
    map.addSource('mapbox-dem', {
      type: 'raster-dem',
      url: 'mapbox://mapbox.mapbox-terrain-dem-v1',
      tileSize: 512,
      maxzoom: 14
    });
    
    map.setTerrain({ source: 'mapbox-dem', exaggeration: 2.5 });
  }

  // Cargar datos de lotes desde el archivo GeoJSON
  function loadLotesData() {
    showToast('Cargando datos de lotes...', 'info');
    
    fetch('/planos/oceanica.geojson')
      .then(response => {
        if (!response.ok) {
          throw new Error('No se pudo cargar el archivo GeoJSON');
        }
        return response.json();
      })
      .then(data => {
        processLotesData(data);
        showToast('Datos de lotes cargados correctamente', 'success');
      })
      .catch(error => {
        console.error('Error cargando oceanica.geojson:', error);
        showToast('Error cargando datos. Usando datos de ejemplo.', 'error');
        // Usar datos de ejemplo como fallback
        processLotesData(sampleData);
      });
  }

  // Procesar datos de lotes
  function processLotesData(data) {
    // Separar el polígono del fraccionamiento
    fraccionamientoPolygon = data.features.find(feature => 
      feature.properties.estatus === "Fraccionamiento"
    );

    // Filtrar elementos que no tienen número de lote (excluyendo el fraccionamiento)
    const filteredData = {
      ...data,
      features: data.features.filter(feature => 
        feature.properties.lote && feature.properties.lote.trim() !== "" &&
        feature.properties.estatus !== "Fraccionamiento"
      )
    };

    // Añadir el polígono del fraccionamiento
    addFraccionamientoPolygon();

    // Guardar los datos de lotes y añadirlos al mapa
    lotesSource = filteredData;
    addLotesToMap(filteredData);

    // Actualizar panel de información
    updateInfoPanel(filteredData);

    // Ajustar la vista a los límites de los datos
    const bounds = new mapboxgl.LngLatBounds();
    data.features.forEach(feature => {
      if (feature.geometry && feature.geometry.coordinates && feature.geometry.coordinates[0]) {
        feature.geometry.coordinates[0].forEach(coord => bounds.extend(coord));
      }
    });
    
    if (!bounds.isEmpty()) {
      map.fitBounds(bounds, { padding: 50, duration: 0 });
    }
  }

  // Añadir polígono del fraccionamiento
  function addFraccionamientoPolygon() {
    // Eliminar capas existentes si las hay
    if (map.getSource('fraccionamiento')) {
      map.removeLayer('fraccionamiento-fill');
      map.removeLayer('fraccionamiento-border');
      map.removeSource('fraccionamiento');
    }

    if (!fraccionamientoPolygon) return;

    // Añadir fuente de datos
    map.addSource('fraccionamiento', {
      type: 'geojson',
      data: {
        type: 'FeatureCollection',
        features: [fraccionamientoPolygon]
      }
    });

    // Capa de relleno
    map.addLayer({
      id: 'fraccionamiento-fill',
      type: 'fill',
      source: 'fraccionamiento',
      paint: {
        'fill-color': '#e0f2fe',
        'fill-opacity': 0.25
      }
    });

    // Capa de bordes
    map.addLayer({
      id: 'fraccionamiento-border',
      type: 'line',
      source: 'fraccionamiento',
      paint: {
        'line-color': '#0ea5e9',
        'line-width': 2,
        'line-opacity': 0.8
      }
    });
  }

  // Añadir lotes al mapa
  function addLotesToMap(data) {
    // Eliminar capas existentes si las hay
    if (map.getSource('lotes')) {
      map.removeLayer('lotes-fill');
      map.removeLayer('lotes-borders');
      map.removeSource('lotes');
    }

    // Eliminar marcadores existentes
    markers.forEach(marker => marker.remove());
    markers = [];

    // Añadir fuente de datos
    map.addSource('lotes', {
      type: 'geojson',
      data: data
    });

    // Capa de relleno
    map.addLayer({
      id: 'lotes-fill',
      type: 'fill',
      source: 'lotes',
      paint: {
        'fill-color': [
          'match',
          ['get', 'estatus'],
          'disponible', 'rgba(22, 163, 74, 0.5)',
          'vendido', 'rgba(220, 38, 38, 0.5)',
          'apartado', 'rgba(234, 88, 12, 0.5)',
          'rgba(37, 99, 235, 0.5)'
        ],
        'fill-opacity': 0.6
      }
    });

    // Capa de bordes
    map.addLayer({
      id: 'lotes-borders',
      type: 'line',
      source: 'lotes',
      paint: {
        'line-color': [
          'match',
          ['get', 'estatus'],
          'disponible', '#15803d',
          'vendido', '#b91c1c',
          'apartado', '#c2410c',
          '#0ea5e9'
        ],
        'line-width': 2,
        'line-opacity': 0.9
      }
    });

    // Añadir marcadores para cada lote
    data.features.forEach(function(feature) {
      const properties = feature.properties;
      const coordinates = getCentroid(feature.geometry.coordinates[0]);
      
      const el = document.createElement('div');
      el.className = 'lote-marker';
      
      let badgeClass = '';
      switch(properties.estatus) {
        case 'disponible':
          badgeClass = 'badge-disponible';
          break;
        case 'vendido':
          badgeClass = 'badge-vendido';
          break;
        case 'apartado':
          badgeClass = 'badge-apartado';
          break;
      }
      
      el.innerHTML = `<div class="lote-badge ${badgeClass}">${properties.lote}</div>`;
      
      const marker = new mapboxgl.Marker(el)
        .setLngLat(coordinates)
        .addTo(map);
      
      markers.push(marker);
    });

    // Configurar interacciones
    setupMapInteractions();
  }

  // Filtrar lotes por estatus
  function filterLotesByStatus(status) {
    if (!lotesSource) return;
    
    if (status === 'all') {
      // Mostrar todos los lotes
      map.setFilter('lotes-fill', null);
      map.setFilter('lotes-borders', null);
    } else {
      // Filtrar por estatus
      map.setFilter('lotes-fill', ['==', ['get', 'estatus'], status]);
      map.setFilter('lotes-borders', ['==', ['get', 'estatus'], status]);
    }
    
    // También ocultar/mostrar marcadores
    markers.forEach(marker => {
      if (status === 'all') {
        marker.getElement().style.display = 'block';
      } else {
        const loteNum = marker.getElement().querySelector('.lote-badge').textContent;
        const feature = lotesSource.features.find(f => f.properties.lote === loteNum);
        if (feature && feature.properties.estatus === status) {
          marker.getElement().style.display = 'block';
        } else {
          marker.getElement().style.display = 'none';
        }
      }
    });
  }

  // Configurar interacciones del mapa
  function setupMapInteractions() {
    // Popup al hacer clic
    map.on('click', 'lotes-fill', (e) => {
      const props = e.features[0].properties;
      
      new mapboxgl.Popup()
        .setLngLat(e.lngLat)
        .setHTML(createPopupContent(props))
        .addTo(map);
    });

    // Cambiar cursor al pasar sobre un lote
    map.on('mouseenter', 'lotes-fill', () => { 
      map.getCanvas().style.cursor = 'pointer'; 
    });
    
    map.on('mouseleave', 'lotes-fill', () => { 
      map.getCanvas().style.cursor = ''; 
    });
  }

  // Crear contenido para el popup
  function createPopupContent(props) {
    let statusClass = '';
    switch(props.estatus) {
      case 'disponible':
        statusClass = 'disponible';
        break;
      case 'vendido':
        statusClass = 'vendido';
        break;
      case 'apartado':
        statusClass = 'apartado';
        break;
    }
    
    return `
      <div class="lote-info">
        <div class="lote-numero">Lote ${props.lote}</div>
        <div class="lote-area">${props["Area (m²)"]} m²</div>
        <span class="estatus-badge ${statusClass}">${props.estatus.toUpperCase()}</span>
        
        <div class="lote-details">
          <div class="lote-detail-row">
            <span class="lote-detail-label">Manzana:</span>
            <span class="lote-detail-value">${props.manzana}</span>
          </div>
          <div class="lote-detail-row">
            <span class="lote-detail-label">Norte:</span>
            <span class="lote-detail-value">${props["Norte:"]} m</span>
          </div>
          <div class="lote-detail-row">
            <span class="lote-detail-label">Sur:</span>
            <span class="lote-detail-value">${props["Sur:"]} m</span>
          </div>
          <div class="lote-detail-row">
            <span class="lote-detail-label">Oriente:</span>
            <span class="lote-detail-value">${props["Oriente:"]} m</span>
          </div>
          <div class="lote-detail-row">
            <span class="lote-detail-label">Poniente:</span>
            <span class="lote-detail-value">${props["Poniente:"]} m</span>
          </div>
        </div>
      </div>
    `;
  }

  // Actualizar panel de información
  function updateInfoPanel(data) {
    // Contar lotes por estatus
    const total = data.features.length;
    const disponibles = data.features.filter(f => f.properties.estatus === 'disponible').length;
    const vendidos = data.features.filter(f => f.properties.estatus === 'vendido').length;
    const apartados = data.features.filter(f => f.properties.estatus === 'apartado').length;
    
    // Actualizar estadísticas
    document.getElementById('total-lotes').textContent = total;
    document.getElementById('disponible-lotes').textContent = disponibles;
    document.getElementById('vendido-lotes').textContent = vendidos;
    document.getElementById('apartado-lotes').textContent = apartados;
    
    // Actualizar también para móviles
    if (isMobileView) {
      document.getElementById('mobile-total-lotes').textContent = total;
      document.getElementById('mobile-disponible-lotes').textContent = disponibles;
      document.getElementById('mobile-vendido-lotes').textContent = vendidos;
      document.getElementById('mobile-apartado-lotes').textContent = apartados;
    }
    
    // Calcular área total
    let areaTotal = 0;
    data.features.forEach(feature => {
      const area = parseFloat(feature.properties["Area (m²)"]) || 0;
      areaTotal += area;
    });
    document.getElementById('total-area').textContent = `${areaTotal.toLocaleString()} m²`;
    
    if (isMobileView) {
      document.getElementById('mobile-total-area').textContent = `${areaTotal.toLocaleString()} m²`;
    }
    
    // Contar manzanas únicas
    const manzanas = new Set(data.features.map(f => f.properties.manzana));
    document.getElementById('total-manzanas').textContent = manzanas.size;
    
    if (isMobileView) {
      document.getElementById('mobile-total-manzanas').textContent = manzanas.size;
    }
    
    // Actualizar fecha
    const fecha = new Date().toLocaleDateString();
    document.getElementById('last-update').textContent = fecha;
    
    if (isMobileView) {
      document.getElementById('mobile-last-update').textContent = fecha;
    }
  }

  // Función para mostrar notificaciones toast
  function showToast(message, type = 'success') {
    const toastContainer = document.getElementById('toast-container');
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    
    let icon = 'check-circle';
    if (type === 'error') icon = 'exclamation-circle';
    if (type === 'warning') icon = 'exclamation-triangle';
    
    toast.innerHTML = `
      <i class="fas fa-${icon} toast-icon"></i>
      <div class="toast-message">${message}</div>
      <button class="toast-close"><i class="fas fa-times"></i></button>
    `;
    
    toastContainer.appendChild(toast);
    
    // Configurar evento de cierre
    toast.querySelector('.toast-close').addEventListener('click', () => {
      toast.style.animation = 'toast-in 0.3s ease reverse';
      setTimeout(() => {
        toast.remove();
      }, 300);
    });
    
    // Auto-remove después de 5 segundos
    setTimeout(() => {
      if (toast.parentNode) {
        toast.style.animation = 'toast-in 0.3s ease reverse';
        setTimeout(() => {
          if (toast.parentNode) {
            toast.remove();
          }
        }, 300);
      }
    }, 5000);
  }

  // Función para modo pantalla completa
  function toggleFullscreen() {
    if (!document.fullscreenElement) {
      document.documentElement.requestFullscreen().catch(err => {
        showToast('Error al activar pantalla completa: ' + err.message, 'error');
      });
    } else {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      }
    }
  }

  // Calcular el centroide de un polígono
  function getCentroid(coords) {
    let x = 0, y = 0;
    for (let i = 0; i < coords.length - 1; i++) {
      x += coords[i][0];
      y += coords[i][1];
    }
    return [x / (coords.length - 1), y / (coords.length - 1)];
  }

</script>
</body>
</html>