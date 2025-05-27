<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LocalBook - Location de Locaux</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #f59e0b;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --dark-color: #1f2937;
            --light-color: #f8fafc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: var(--dark-color);
            overflow-x: hidden;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            animation: slideInUp 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            animation: slideInUp 1s ease-out 0.2s both;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-custom {
            padding: 15px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary-custom {
            background: var(--accent-color);
            color: white;
            border: none;
        }

        .btn-primary-custom:hover {
            background: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(245, 158, 11, 0.3);
            color: white;
        }

        .btn-outline-custom {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-outline-custom:hover {
            background: white;
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        .categories-section {
            padding: 80px 0;
            background: var(--light-color);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 1rem;
        }

        .section-title p {
            font-size: 1.1rem;
            color: #6b7280;
            max-width: 600px;
            margin: 0 auto;
        }

        .category-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .category-card:hover::before {
            transform: scaleX(1);
        }

        .category-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            color: white;
            transition: all 0.3s ease;
        }

        .category-card:hover .category-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .category-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        .category-description {
            color: #6b7280;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .category-stats {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .stat-label {
            font-size: 0.875rem;
            color: #6b7280;
        }

        .features-section {
            padding: 80px 0;
            background: white;
        }

        .feature-item {
            text-align: center;
            padding: 30px 20px;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--success-color), #059669);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.5rem;
            color: white;
        }

        .feature-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        .cta-section {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--dark-color) 0%, #374151 100%);
            color: white;
            text-align: center;
        }

        .navbar-custom {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color) !important;
        }

        .nav-link {
            font-weight: 500;
            color: var(--dark-color) !important;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .qr-login-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .qr-login-btn:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            color: white;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .category-card {
                margin-bottom: 30px;
            }
        }

        .pulse-animation {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(37, 99, 235, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(37, 99, 235, 0);
            }
        }

        /* ===== STYLES POUR LE SCANNER QR ===== */
        .qr-scanner-container {
            text-align: center;
            position: relative;
        }

        .qr-preview {
            width: 320px;
            height: 320px;
            border: 3px dashed #e5e7eb;
            border-radius: 15px;
            margin: 20px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f9fafb;
            position: relative;
            overflow: hidden;
        }

        .qr-preview.scanning {
            border-color: var(--primary-color);
            background: rgba(37, 99, 235, 0.05);
        }

        .qr-preview video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        .scanner-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 200px;
            height: 200px;
            border: 2px solid var(--primary-color);
            border-radius: 15px;
            z-index: 10;
        }

        .scanner-overlay::before,
        .scanner-overlay::after {
            content: '';
            position: absolute;
            border: 3px solid var(--primary-color);
        }

        .scanner-overlay::before {
            top: -3px;
            left: -3px;
            width: 30px;
            height: 30px;
            border-right: none;
            border-bottom: none;
        }

        .scanner-overlay::after {
            bottom: -3px;
            right: -3px;
            width: 30px;
            height: 30px;
            border-left: none;
            border-top: none;
        }

        .scanning-line {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
            animation: scanning 2s linear infinite;
            z-index: 11;
        }

        @keyframes scanning {
            0% { transform: translateY(0); }
            100% { transform: translateY(200px); }
        }

        .status-indicator {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .status-success {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
        }

        .status-warning {
            background: rgba(245, 158, 11, 0.1);
            color: var(--warning-color);
        }

        .status-danger {
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger-color);
        }

        .camera-controls {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 20px;
        }

        .loader {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-building me-2"></i>LocalBook
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#categories">Catégories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Fonctionnalités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="ms-3">
                    <button class="btn qr-login-btn pulse-animation" >
                        <a href="{{ route('login') }}"><i class="fas fa-qrcode me-2"></i>Connexion QR</a>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title">Réservez votre espace idéal en quelques clics</h1>
                    <p class="hero-subtitle">
                        Trouvez et réservez facilement des terrains de sport, salles de conférences et espaces événementiels. Planning en temps réel, paiement sécurisé et confirmation instantanée.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#categories" class="btn btn-custom btn-primary-custom">
                            <i class="fas fa-search"></i>
                            Explorer les locaux
                        </a>
                        <a href="#features" class="btn btn-custom btn-outline-custom">
                            <i class="fas fa-play"></i>
                            Comment ça marche
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center mt-5 mt-lg-0">
                        <i class="fas fa-building" style="font-size: 15rem; opacity: 0.1;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="categories-section">
        <div class="container">
            <div class="section-title">
                <h2>Nos Catégories de Locaux</h2>
                <p>Découvrez notre sélection d'espaces adaptés à tous vos besoins, avec des équipements modernes et une disponibilité en temps réel.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-futbol"></i>
                        </div>
                        <h3 class="category-title">Terrains de Sport</h3>
                        <p class="category-description">
                            Terrains de football, basketball, tennis et plus encore. Équipements professionnels et vestiaires inclus.
                        </p>
                        <div class="category-stats">
                            <div class="stat-item">
                                <div class="stat-number">15</div>
                                <div class="stat-label">Terrains</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">25€</div>
                                <div class="stat-label">À partir de</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">2h</div>
                                <div class="stat-label">Durée min</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-presentation"></i>
                        </div>
                        <h3 class="category-title">Salles de Conférences</h3>
                        <p class="category-description">
                            Espaces professionnels équipés de projecteurs, systèmes audio et connexion haut débit.
                        </p>
                        <div class="category-stats">
                            <div class="stat-item">
                                <div class="stat-number">8</div>
                                <div class="stat-label">Salles</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">40€</div>
                                <div class="stat-label">À partir de</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">1h</div>
                                <div class="stat-label">Durée min</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-glass-cheers"></i>
                        </div>
                        <h3 class="category-title">Salles de Fêtes</h3>
                        <p class="category-description">
                            Espaces festifs pour mariages, anniversaires et événements privés. Capacité jusqu'à 200 personnes.
                        </p>
                        <div class="category-stats">
                            <div class="stat-item">
                                <div class="stat-number">5</div>
                                <div class="stat-label">Salles</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">80€</div>
                                <div class="stat-label">À partir de</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">4h</div>
                                <div class="stat-label">Durée min</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="section-title">
                <h2>Pourquoi Choisir LocalBook ?</h2>
                <p>Une plateforme moderne et intuitive pour simplifier vos réservations</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-qrcode"></i>
                        </div>
                        <h4 class="feature-title">Connexion QR</h4>
                        <p>Connectez-vous instantanément en scannant votre QR code personnel</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h4 class="feature-title">Planning Temps Réel</h4>
                        <p>Visualisez la disponibilité en direct avec notre planning interactif</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h4 class="feature-title">Paiement Sécurisé</h4>
                        <p>Réglez vos réservations en ligne avec Stripe et PayPal</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <h4 class="feature-title">Facturation Auto</h4>
                        <p>Recevez vos factures PDF automatiquement par email</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="mb-4">Prêt à réserver votre prochain local ?</h2>
                    <p class="mb-4 fs-5">Rejoignez des centaines d'utilisateurs qui font confiance à LocalBook pour leurs réservations</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <button class="btn btn-custom btn-primary-custom" onclick="openQRLogin()">
                            <i class="fas fa-qrcode"></i>
                            Commencer avec QR Code
                        </button>
                        <a href="#categories" class="btn btn-custom btn-outline-custom">
                            <i class="fas fa-eye"></i>
                            Voir les disponibilités
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QR SCANNER MODAL FONCTIONNEL -->
    <div class="modal fade" id="qrLoginModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-qrcode me-2"></i>Scanner QR Code
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="qr-scanner-container">
                        <div id="qr-status" class="text-center mb-3">
                            <span class="status-indicator status-warning">
                                <i class="fas fa-camera"></i>
                                Caméra non activée
                            </span>
                        </div>

                        <div id="qr-preview" class="qr-preview">
                            <div class="text-center text-muted">
                                <i class="fas fa-qrcode fa-3x mb-3"></i>
                                <p>Cliquez sur "Activer Caméra" pour commencer</p>
                            </div>
                            <video id="video" style="display: none;" autoplay playsinline></video>
                            <div id="scanner-overlay" class="scanner-overlay" style="display: none;">
                                <div class="scanning-line"></div>
                            </div>
                            <canvas id="canvas" style="display: none;"></canvas>
                        </div>

                        <div class="camera-controls">
                            <button id="start-camera" class="btn btn-primary">
                                <i class="fas fa-camera me-2"></i>
                                Activer Caméra
                            </button>
                            <button id="stop-camera" class="btn btn-outline-secondary" style="display: none;">
                                <i class="fas fa-stop me-2"></i>
                                Arrêter
                            </button>
                        </div>

                        <div id="qr-result" class="mt-4" style="display: none;">
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle me-2"></i>
                                <span id="qr-message">QR Code détecté avec succès!</span>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <p class="text-muted">
                                <i class="fas fa-info-circle me-2"></i>
                                Placez votre QR Code devant la caméra pour vous connecter automatiquement
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" onclick="showClassicLogin()">
                        <i class="fas fa-envelope me-2"></i>
                        Connexion Classique
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Messages d'alerte -->
    <div id="alert-container" style="position: fixed; top: 20px; right: 20px; z-index: 9999;"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qr-scanner/1.4.2/qr-scanner.umd.min.js"></script>
    
    <script>
        // Variables globales
        let qrScanner = null;
        let videoElement = null;
        let isScanning = false;

        // CSRF Token pour les requêtes AJAX
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Fonction pour ouvrir la modal de connexion QR
        function openQRLogin() {
            const modal = new bootstrap.Modal(document.getElementById('qrLoginModal'));
            modal.show();
            
            // Réinitialiser l'état du scanner
            resetScanner();
        }

        function showClassicLogin() {
            // Rediriger vers la page de connexion classique
            window.location.href = '{{ route("login") }}';
        }

        function resetScanner() {
            const preview = document.getElementById('qr-preview');
            const overlay = document.getElementById('scanner-overlay');
            const video = document.getElementById('video');
            const resultDiv = document.getElementById('qr-result');

            // Réinitialiser l'interface
            video.style.display = 'none';
            overlay.style.display = 'none';
            preview.classList.remove('scanning');
            preview.querySelector('.text-center').style.display = 'block';
            resultDiv.style.display = 'none';

            document.getElementById('start-camera').style.display = 'inline-block';
            document.getElementById('stop-camera').style.display = 'none';

            updateStatus('Caméra non activée', 'warning');
            isScanning = false;

            // Arrêter le scanner s'il est actif
            if (qrScanner) {
                qrScanner.stop();
                qrScanner.destroy();
                qrScanner = null;
            }
        }

        // Système de scanner QR
        class QRScannerSystem {
            constructor() {
                this.initializeEventListeners();
                this.checkCameraPermission();
            }

            initializeEventListeners() {
                document.getElementById('start-camera').addEventListener('click', () => this.startCamera());
                document.getElementById('stop-camera').addEventListener('click', () => this.stopCamera());
            }

            async checkCameraPermission() {
                try {
                    const hasCamera = await QrScanner.hasCamera();
                    if (!hasCamera) {
                        this.showAlert('Aucune caméra détectée sur cet appareil', 'warning');
                        document.getElementById('start-camera').disabled = true;
                    }
                } catch (error) {
                    console.error('Erreur vérification caméra:', error);
                }
            }

            async startCamera() {
                try {
                    updateStatus('Démarrage de la caméra...', 'warning');
                    
                    videoElement = document.getElementById('video');
                    const preview = document.getElementById('qr-preview');
                    const overlay = document.getElementById('scanner-overlay');
                    
                    // Configuration du scanner QR
                    qrScanner = new QrScanner(
                        videoElement,
                        (result) => this.handleQRDetection(result.data),
                        {
                            returnDetailedScanResult: true,
                            highlightScanRegion: true,
                            highlightCodeOutline: true,
                        }
                    );

                    await qrScanner.start();
                    
                    // Mise à jour de l'interface
                    videoElement.style.display = 'block';
                    overlay.style.display = 'block';
                    preview.classList.add('scanning');
                    preview.querySelector('.text-center').style.display = 'none';
                    
                    document.getElementById('start-camera').style.display = 'none';
                    document.getElementById('stop-camera').style.display = 'inline-block';
                    
                    updateStatus('Scanner actif - Positionnez votre QR Code', 'success');
                    isScanning = true;

                } catch (error) {
                    console.error('Erreur démarrage caméra:', error);
                    this.showAlert('Impossible d\'accéder à la caméra. Vérifiez les permissions.', 'danger');
                    updateStatus('Erreur caméra', 'danger');
                }
            }

            stopCamera() {
                if (qrScanner) {
                    qrScanner.stop();
                    qrScanner.destroy();
                    qrScanner = null;
                }

                const preview = document.getElementById('qr-preview');
                const overlay = document.getElementById('scanner-overlay');
                const video = document.getElementById('video');

                video.style.display = 'none';
                overlay.style.display = 'none';
                preview.classList.remove('scanning');
                preview.querySelector('.text-center').style.display = 'block';

                document.getElementById('start-camera').style.display = 'inline-block';
                document.getElementById('stop-camera').style.display = 'none';

                updateStatus('Caméra arrêtée', 'warning');
                isScanning = false;
            }

            async handleQRDetection(qrData) {
                try {
                    updateStatus('QR Code détecté - Vérification...', 'warning');
                    
                    // Appel API réel vers Laravel
                    const response = await fetch('/api/auth/qr-login', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({ qr_code: qrData })
                    });

                    const data = await response.json();
                    
                    if (data.success) {
                        updateStatus('Connexion réussie!', 'success');
                        document.getElementById('qr-result').style.display = 'block';
                        document.getElementById('qr-message').textContent = Bienvenue ${data.user.nom}!;
                        
                        // Sauvegarder le token d'authentification si nécessaire
                        if (data.token) {
                            localStorage.setItem('auth_token', data.token);
                        }
                        
                        this.showAlert(Connexion réussie! Bienvenue ${data.user.nom}, 'success');
                        
                        // Redirection après 2 secondes
                        setTimeout(() => {
                            window.location.href = data.redirect_url || '/dashboard';
                        }, 2000);
                        
                        this.stopCamera();
                    } else {
                        updateStatus('QR Code invalide', 'danger');
                        this.showAlert(data.message || 'QR Code non reconnu', 'danger');
                    }
                } catch (error) {
                    console.error('Erreur vérification QR:', error);
                    updateStatus('Erreur de connexion', 'danger');
                    this.showAlert('Erreur lors de la vérification du QR Code', 'danger');
                }
            }

            showAlert(message, type) {
                const alertContainer = document.getElementById('alert-container');
                const alertId = 'alert-' + Date.now();
                
                const alertHTML = `
                    <div id="${alertId}" class="alert alert-${type} alert-dismissible fade show" role="alert">
                        <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'warning' ? 'exclamation-triangle' : 'times-circle'} me-2"></i>
                        ${message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                `;
                
                alertContainer.insertAdjacentHTML('beforeend', alertHTML);
                
                // Auto-remove après 5 secondes
                setTimeout(() => {
                    const alert = document.getElementById(alertId);
                    if (alert) {
                        alert.remove();
                    }
                }, 5000);
            }
        }

        function updateStatus(message, type) {
            const statusElement = document.getElementById('qr-status');
            const icon = type === 'success' ? 'check-circle' : 
                        type === 'danger' ? 'exclamation-triangle' : 'camera';
            
            statusElement.innerHTML = `
                <span class="status-indicator status-${type}">
                    <i class="fas fa-${icon}"></i>
                    ${message}
                </span>
            `;
        }

        // Animation au scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Initialisation
        document.addEventListener('DOMContentLoaded', () => {
            // Initialiser le système de scanner QR
            new QRScannerSystem();

            // Observer les cartes de catégories
            const cards = document.querySelectorAll('.category-card, .feature-item');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s;
                observer.observe(card);
            });

            // Navbar scroll effect
            window.addEventListener('scroll', () => {
                const navbar = document.querySelector('.navbar-custom');
                if (window.scrollY > 50) {
                    navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                    navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
                } else {
                    navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                    navbar.style.boxShadow = 'none';
                }
            });
        });

        // Smooth scrolling pour les liens
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Nettoyage à la fermeture de la modal
        document.getElementById('qrLoginModal').addEventListener('hidden.bs.modal', function () {
            resetScanner();
        });

        // Nettoyage à la fermeture de la page
        window.addEventListener('beforeunload', () => {
            if (qrScanner) {
                qrScanner.stop();
                qrScanner.destroy();
            }
        });

        // Pour tester le scanner avec des QR codes factices en développement
        if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
            console.log('🧪 Mode développement détecté');
            console.log('📱 Pour tester le scanner, générez un QR Code contenant:');
            console.log('   - "USER_123_test" pour un utilisateur normal');
            console.log('   - "ADMIN_456_test" pour un administrateur');
            console.log('   - Tout autre texte pour tester l\'erreur');
        }
    </script>
</body>
</html>