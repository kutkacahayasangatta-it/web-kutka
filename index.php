<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Utama Tumbuh Kembang Anak Cahaya Sangatta</title>
    <meta name="description" content="Klinik Utama Tumbuh Kembang Anak Cahaya Sangatta">
    <meta name="keywords" content="klinik anak, tumbuh kembang anak, terapi wicara, dokter spesialis anak, sangatta">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        :root {
            --primary: #1e40af; --primary-dark: #1e3a8a; --primary-light: #dbeafe; --primary-lighter: #f0f4ff;
            --secondary: #f97316; --secondary-dark: #ea580c; --secondary-light: rgba(249, 115, 22, 0.1);
            --dark: #1e293b; --dark-gray: #374151; --gray: #6b7280; --light-gray: #9ca3af;
            --white: #ffffff; --off-white: #f9fafb; --light: #f8fafc;
            --shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.06);
            --shadow-md: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04);
            --radius: 8px; --radius-lg: 12px; --radius-xl: 16px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --transition-slow: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; height: 100%; }
        body { 
            font-family: 'Inter', sans-serif; 
            line-height: 1.6; 
            color: var(--dark); 
            background: var(--white); 
            overflow-x: hidden; 
            font-weight: 400; 
            -webkit-font-smoothing: antialiased; 
            -moz-osx-font-smoothing: grayscale; 
            font-size: 13px; 
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .container { max-width: 1280px; margin: 0 auto; padding: 0 32px; }
        
        /* ===== HEADER ===== */
        header { 
            background: rgba(255,255,255,0.98); 
            backdrop-filter: blur(20px); 
            position: fixed; 
            width: 100%; 
            top: 0; 
            z-index: 1000; 
            padding: 0.7rem 0; 
            transition: var(--transition-slow); 
            border-bottom: 1px solid rgba(0,0,0,0.1); 
            box-shadow: var(--shadow); 
        }
        
        .nav-container { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
        }
        
        .logo { 
            height: 40px; 
            display: flex; 
            align-items: center; 
            gap: 12px; 
            text-decoration: none; 
        }
        
        .logo img { 
            height: 100%; 
            width: auto; 
            max-width: 50px;
            object-fit: contain; 
        }
        
        .logo-content { 
            display: flex; 
            flex-direction: column; 
            justify-content: center;
        }
        
        .logo-text { 
            color: var(--primary);
            font-weight: 800; 
            font-size: 0.85rem; 
            line-height: 1.1; 
            white-space: nowrap;
        }
        
        .logo-subtitle { 
            font-size: 0.5rem; 
            color: var(--gray);
            font-weight: 500; 
            margin-top: 1px; 
            letter-spacing: 0.3px; 
            text-transform: uppercase;
            white-space: nowrap;
        }
        
        .nav-links { display: flex; gap: 1.8rem; list-style: none; align-items: center; }
        .nav-links > li { position: relative; }
        
        .nav-links a { 
            text-decoration: none; 
            color: var(--dark);
            font-weight: 500; 
            font-size: 0.8rem; 
            transition: var(--transition); 
            position: relative; 
            padding: 0.3rem 0; 
            display: flex; 
            align-items: center; 
            gap: 4px; 
        }
        
        .nav-links a::after { 
            content: ''; 
            position: absolute; 
            bottom: 0; 
            left: 0; 
            width: 0; 
            height: 1.5px; 
            background: linear-gradient(90deg, var(--secondary), var(--primary)); 
            transition: var(--transition); 
            border-radius: 2px; 
        }
        
        .nav-links a:hover::after { width: 100%; }
        .nav-links a.active { font-weight: 600; }
        .nav-links a.active::after { width: 100%; }
        
        /* Dropdown Menu */
        .dropdown { position: relative; }
        .dropdown-toggle { cursor: pointer; }
        .dropdown-toggle .material-icons { font-size: 0.9rem; transition: var(--transition); }
        
        .dropdown-menu { 
            position: absolute; 
            top: 100%; 
            left: -15px; 
            background: var(--white); 
            min-width: 180px; 
            border-radius: var(--radius-lg); 
            box-shadow: var(--shadow-xl); 
            opacity: 0; 
            visibility: hidden; 
            transform: translateY(8px); 
            transition: var(--transition-slow); 
            z-index: 100; 
            overflow: hidden; 
            border: 1px solid rgba(0,0,0,0.08); 
            padding: 0.5rem 0; 
        }
        
        .dropdown:hover .dropdown-menu { 
            opacity: 1; 
            visibility: visible; 
            transform: translateY(0); 
        }
        
        .dropdown:hover .dropdown-toggle .material-icons { transform: rotate(180deg); }
        
        .dropdown-item { 
            display: flex; 
            align-items: center; 
            gap: 8px; 
            padding: 0.6rem 1rem; 
            text-decoration: none; 
            color: var(--dark); 
            font-weight: 500; 
            font-size: 0.75rem; 
            transition: var(--transition); 
            border-left: 2px solid transparent; 
        }
        
        .dropdown-item:hover { 
            background: var(--primary-lighter); 
            color: var(--primary); 
            border-left-color: var(--secondary); 
            padding-left: 1.5rem; 
        }
        
        /* Mobile Menu Toggle */
        .menu-toggle { 
            display: none; 
            flex-direction: column; 
            justify-content: space-between; 
            width: 24px; 
            height: 18px; 
            background: transparent; 
            border: none; 
            cursor: pointer; 
            padding: 0; 
            position: relative; 
            z-index: 1001; 
        }
        
        .menu-toggle span { 
            display: block; 
            height: 1.5px; 
            width: 100%; 
            background-color: var(--dark); 
            border-radius: 1px; 
            transition: var(--transition); 
            transform-origin: center; 
        }
        
        .menu-toggle.active span:nth-child(1) { 
            transform: rotate(45deg) translate(5px, 5px); 
            background-color: var(--primary); 
        }
        
        .menu-toggle.active span:nth-child(2) { 
            opacity: 0; 
            transform: scale(0); 
        }
        
        .menu-toggle.active span:nth-child(3) { 
            transform: rotate(-45deg) translate(5px, -5px); 
            background-color: var(--primary); 
        }
        
        /* Mobile Navigation */
        .mobile-nav { 
            position: fixed; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100vh; 
            background: rgba(255,255,255,0.98); 
            backdrop-filter: blur(40px); 
            transform: translateX(-100%); 
            opacity: 0; 
            transition: var(--transition-slow); 
            z-index: 999; 
            visibility: hidden; 
            display: flex; 
            flex-direction: column; 
        }
        
        .mobile-nav.active { 
            transform: translateX(0); 
            opacity: 1; 
            visibility: visible; 
        }
        
        .mobile-nav-header { 
            padding: 1.2rem 1.2rem 0.8rem; 
            border-bottom: 1px solid rgba(0,0,0,0.1); 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
        }

        .mobile-nav-header .logo-content {
            display: flex !important;
            flex-direction: column;
            justify-content: center;
        }
        
        .mobile-nav-links { 
            list-style: none; 
            padding: 1.2rem; 
            flex: 1; 
            display: flex; 
            flex-direction: column; 
            gap: 0.3rem; 
        }
        
        .mobile-nav-links li { border-bottom: 1px solid rgba(0,0,0,0.05); }
        .mobile-nav-links li:last-child { border-bottom: none; }
        
        .mobile-nav-links a { 
            display: block; 
            padding: 0.8rem 0.6rem; 
            text-decoration: none; 
            color: var(--dark); 
            font-weight: 500; 
            font-size: 0.85rem; 
            transition: var(--transition); 
            border-radius: var(--radius); 
            position: relative; 
            overflow: hidden; 
        }
        
        .mobile-nav-links a:hover { 
            background: var(--primary-lighter); 
            color: var(--primary); 
            transform: translateX(5px); 
        }
        
        .mobile-dropdown { width: 100%; }
        .mobile-dropdown-toggle { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            width: 100%; 
        }
        
        .mobile-dropdown-menu { 
            max-height: 0; 
            overflow: hidden; 
            transition: max-height 0.3s ease; 
            padding-left: 0.6rem; 
        }
        
        .mobile-dropdown-menu.active { max-height: 200px; }
        
        .mobile-dropdown-item { 
            padding: 0.7rem 1rem; 
            text-decoration: none; 
            color: var(--dark-gray); 
            font-weight: 500; 
            font-size: 0.8rem; 
            display: flex; 
            align-items: center; 
            gap: 6px; 
            transition: var(--transition); 
            border-radius: var(--radius); 
        }
        
        .mobile-dropdown-item:hover { 
            background: var(--primary-lighter); 
            color: var(--primary); 
        }
        
        .mobile-nav-footer { 
            padding: 1.2rem; 
            background: var(--primary-lighter); 
            border-top: 1px solid rgba(0,0,0,0.05); 
        }
        
        /* ===== HERO SECTION ===== */
        .hero {
            position: relative;
            color: var(--white);
            padding: 140px 0 70px;
            margin-top: 0;
            min-height: 90vh;
            display: flex;
            align-items: center;
            overflow: hidden;
        }
        
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            background: url('images/background.png') center center no-repeat;
            background-size: cover;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 40%;
            height: 100%;
            background: linear-gradient(90deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.3) 70%, transparent 100%);
            z-index: 1;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: linear-gradient(transparent, var(--white));
            z-index: 1;
        }

        .hero-container {
            width: 100%;
            position: relative;
            z-index: 2;
        }

        .hero-content {
            max-width: 600px;
            text-align: left;
            padding-left: 5%;
            padding-right: 5%;
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.1;
            letter-spacing: -0.5px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.5);
        }

        .hero-subtitle {
            font-size: 1rem;
            margin-bottom: 2rem;
            line-height: 1.6;
            font-weight: 400;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.4);
            max-width: 500px;
        }

        /* ===== BUTTONS ===== */
        .hero-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn {
            padding: 14px 28px;
            border-radius: var(--radius);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: var(--transition);
            border: 2px solid transparent;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--secondary), var(--secondary-dark));
            color: var(--white);
            box-shadow: var(--shadow-lg);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-xl);
        }

        .btn-outline-white {
            background: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .btn-outline-white:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
        }

        /* ===== MAIN CONTENT WRAPPER ===== */
        .main-content {
            flex: 1 0 auto;
            width: 100%;
        }

        /* ===== SECTIONS ===== */
        section {
            padding: 80px 0;
            opacity: 0;
            transform: translateY(30px);
            transition: var(--transition-slow);
            scroll-margin-top: 60px;
        }

        section.show {
            opacity: 1;
            transform: translateY(0);
        }

        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-badge {
            display: inline-block;
            background: var(--secondary-light);
            color: var(--secondary-dark);
            padding: 5px 14px;
            border-radius: 50px;
            font-size: 0.7rem;
            font-weight: 600;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 1rem;
            color: var(--dark);
            line-height: 1.1;
        }

        .section-subtitle {
            font-size: 0.9rem;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.5;
        }

        .about-content {
            max-width: 900px;
            margin: 0 auto;
            font-size: 0.9rem;
            line-height: 1.7;
            color: var(--dark-gray);
        }

        .about-content p {
            margin-bottom: 1.2rem;
        }

        /* ===== CTA SECTION ===== */
        .cta-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--white);
            text-align: center;
            padding: 70px 0;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 20%, rgba(255,255,255,0.1) 0%, transparent 50%), 
                        radial-gradient(circle at 70% 80%, rgba(255,255,255,0.05) 0%, transparent 50%);
        }

        .cta-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .cta-title {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .cta-subtitle {
            font-size: 0.9rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            line-height: 1.5;
        }

        /* ===== FOOTER ===== */
        footer {
            background: var(--dark);
            color: var(--light-gray);
            padding: 3.5rem 0 1.2rem;
            position: relative;
            width: 100%;
            flex-shrink: 0;
            margin-top: auto;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 2.5rem;
            margin-bottom: 2.5rem;
        }

        .footer-info h3 {
            font-size: 1.3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            color: var(--white);
        }

        .footer-description {
            margin-bottom: 1.2rem;
            line-height: 1.6;
            font-size: 0.85rem;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            transition: var(--transition);
        }

        .contact-item:hover {
            transform: translateX(3px);
        }

        .contact-icon {
            color: var(--secondary);
            margin-top: 2px;
            flex-shrink: 0;
        }

        .contact-details h4 {
            color: var(--white);
            margin-bottom: 4px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .contact-details p {
            font-size: 0.8rem;
            line-height: 1.4;
        }

        .footer-logo {
            margin-bottom: 1.5rem;
        }

        .footer-logo img {
            height: 50px;
            width: auto;
        }

        .footer-copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: var(--light-gray);
            font-size: 0.75rem;
        }

        /* ===== MODAL STYLES ===== */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 15px;
        }

        .modal-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            backdrop-filter: blur(10px);
        }

        .modal-content {
            position: relative;
            background: var(--white);
            border-radius: var(--radius-xl);
            max-width: 900px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            z-index: 2001;
            box-shadow: var(--shadow-xl);
            animation: modalFadeIn 0.3s ease;
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-header {
            padding: 1.5rem 1.5rem 1rem;
            border-bottom: 1px solid rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--primary);
        }

        .modal-close {
            background: var(--primary-light);
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            color: var(--primary);
        }

        .modal-close:hover {
            background: var(--primary);
            color: var(--white);
            transform: rotate(90deg);
        }

        .modal-body {
            padding: 1.5rem;
        }

        /* ===== DOCTOR MODAL ===== */
        .doctor-modal-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }

        .doctor-image-modal {
            width: 100%;
            max-width: 500px;
            height: 420px;
            border-radius: var(--radius-xl);
            overflow: hidden;
            background: var(--primary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        .doctor-image-modal img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: bottom;
        }

        .doctor-name-container {
            text-align: center;
            margin-top: 1rem;
        }

        .doctor-name-modal {
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .doctor-position {
            color: var(--primary);
            font-weight: 600;
            font-size: 1.1rem;
        }

        /* ===== TERAPIST MODAL ===== */
        .therapist-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
            border-top: 3px solid var(--secondary);
            transition: var(--transition);
            overflow: hidden;
            height: 100%;
        }

        .therapist-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
        }

        .therapist-image-container {
            height: 240px;
            overflow: hidden;
        }

        .therapist-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: bottom;
        }

        .therapist-info {
            padding: 1.2rem;
        }

        .therapist-name {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 0.4rem;
            color: var(--dark);
        }

        .therapist-role {
            font-size: 0.8rem;
            color: var(--primary);
            margin-bottom: 0.4rem;
        }

        .therapists-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 1.2rem;
            margin-top: 1.5rem;
        }

        /* ===== GALLERY MODAL ===== */
        .gallery-category {
            margin-bottom: 2.5rem;
        }

        .gallery-category-title {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--primary);
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--primary-light);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.2rem;
        }

        .gallery-item {
            border-radius: var(--radius-lg);
            overflow: hidden;
            position: relative;
            height: 200px;
            background: var(--primary-light);
            transition: var(--transition);
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        /* ===== SERVICES MODAL ===== */
        .services-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.2rem;
            margin-top: 1.5rem;
        }

        .service-card {
            background: var(--white);
            padding: 1.5rem;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
            border-left: 3px solid var(--primary);
            transition: var(--transition);
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .service-icon-card {
            width: 50px;
            height: 50px;
            background: var(--primary-light);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .service-title-card {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0.6rem;
            color: var(--dark);
        }

        .service-desc-card {
            color: var(--gray);
            line-height: 1.5;
            font-size: 0.85rem;
        }

        /* ===== CONTACT MODAL ===== */
        .map-container {
            width: 100%;
            height: 300px;
            border-radius: var(--radius-lg);
            overflow: hidden;
            margin-top: 1.5rem;
            border: 1px solid rgba(0,0,0,0.1);
        }

        /* ===== RESPONSIVE STYLES ===== */
        @media (max-width: 1024px) {
            .logo-text {
                font-size: 0.75rem;
            }
            
            .logo-subtitle {
                font-size: 0.45rem;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .menu-toggle {
                display: flex;
            }

            .logo img {
                max-width: 120px;
            }

            .mobile-nav-header {
                padding: 1rem;
                justify-content: space-between;
            }

            .mobile-nav-header .logo {
                display: flex;
                align-items: center;
                gap: 12px;
            }

            .mobile-nav-header .logo-content {
                display: flex !important;
                flex-direction: column;
                justify-content: center;
            }

            .mobile-nav-header .logo-text {
                font-size: 0.7rem;
                line-height: 1.1;
            }

            .mobile-nav-header .logo-subtitle {
                font-size: 0.4rem;
            }

            .hero {
                padding: 100px 0 50px;
                min-height: 85vh;
            }

            /* FOTO UNTUK MOBILE */
            .hero-background {
                background: url('images/background.png') center top no-repeat;
                background-size: cover;
                background-position: top center;
            }

            .hero::before {
                width: 100%;
                height: 100%;
                background: linear-gradient(180deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.4) 30%, rgba(0,0,0,0.2) 60%, transparent 100%);
            }

            .hero-content {
                padding-left: 10%;
                padding-right: 10%;
                text-align: center;
                max-width: 100%;
            }

            .hero h1 {
                font-size: 1.8rem;
            }

            .hero-subtitle {
                font-size: 0.9rem;
            }

            /* Button Mobile */
            .btn {
                padding: 12px 24px;
                font-size: 0.85rem;
            }

            /* Section Mobile */
            .section-title {
                font-size: 1.5rem;
            }

            /* Doctor Modal Mobile */
            .doctor-image-modal {
                height: 350px;
                max-width: 100%;
            }

            .doctor-name-modal {
                font-size: 1.3rem;
            }

            /* Container Mobile */
            .container {
                padding: 0 20px;
            }

            /* Footer Mobile */
            footer {
                padding: 2.5rem 0 1rem;
            }
        }

        @media (max-width: 480px) {
            /* Logo Very Small */
            .logo img {
                max-width: 100px;
            }

            /* Mobile Logo Very Small */
            .mobile-nav-header .logo img {
                max-width: 80px;
            }

            .mobile-nav-header .logo-text {
                font-size: 0.6rem;
            }

            .mobile-nav-header .logo-subtitle {
                font-size: 0.35rem;
            }

            /* Hero Very Small */
            .hero {
                min-height: 80vh;
                padding: 80px 0 40px;
            }

            /* FOTO UNTUK MOBILE */
            .hero-background {
                background: url('images/background.png') top center no-repeat;
                background-size: cover;
            }

            .hero h1 {
                font-size: 1.5rem;
            }

            .hero-content {
                padding-left: 5%;
                padding-right: 5%;
            }

            /* Small Section */
            .section-title {
                font-size: 1.3rem;
            }

            /* Small Doctor Modal */
            .doctor-image-modal {
                height: 300px;
            }

            .doctor-name-modal {
                font-size: 1.2rem;
            }

            /* Small Container */
            .container {
                padding: 0 15px;
            }

            /* Small Footer */
            footer {
                padding: 2rem 0 0.8rem;
            }
            
            .footer-content {
                gap: 1.5rem;
            }
        }

        @media (max-width: 360px) {
            .hero h1 {
                font-size: 1.3rem;
            }
            
            .hero-subtitle {
                font-size: 0.8rem;
            }
            
            .btn {
                padding: 10px 20px;
                font-size: 0.8rem;
            }
            
            .logo img {
                max-width: 90px;
            }
            
            .doctor-image-modal {
                height: 250px;
            }
        }

        /* Landscape Mode */
        @media (max-height: 600px) and (orientation: landscape) {
            .hero {
                min-height: 100vh;
                padding: 80px 0 40px;
            }
            
            .hero-background {
                background: url('images/background.png') center center no-repeat;
            }
            
            .hero::before {
                background: linear-gradient(90deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.3) 50%, transparent 100%);
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#beranda" class="logo">
                <img src="images/Logo/logo.png" alt="Klinik Cahaya Sangatta">
                <div class="logo-content">
                    <div class="logo-text">KLINIK UTAMA TUMBUH KEMBANG ANAK CAHAYA SANGATTA</div>
                    <span class="logo-subtitle">Spesialis Tumbuh Kembang Anak</span>
                </div>
            </a>
            
            <nav class="desktop-nav">
                <ul class="nav-links">
                    <li><a href="#beranda" class="active">BERANDA</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">PROFIL<span class="material-icons">arrow_drop_down</span></a>
                        <div class="dropdown-menu">
                            <a href="javascript:void(0);" onclick="showDoctorModal()" class="dropdown-item"><span class="material-icons">medical_services</span>Dokter</a>
                            <a href="javascript:void(0);" onclick="showTherapistModal()" class="dropdown-item"><span class="material-icons">groups</span>Tim Terapis</a>
                        </div>
                    </li>
                    <li><a href="javascript:void(0);" onclick="showServicesModal()">LAYANAN</a></li>
                    <li><a href="javascript:void(0);" onclick="showGalleryModal()">GALERI</a></li>
                    <li><a href="javascript:void(0);" onclick="showContactModal()">KONTAK</a></li>
                </ul>
            </nav>

            <button class="menu-toggle" id="menuToggle"><span></span><span></span><span></span></button>
        </div>

        <nav class="mobile-nav" id="mobileNav">
            <div class="mobile-nav-header">
                <a href="#beranda" class="logo">
                    <img src="images/Logo/logo.png" alt="Klinik Cahaya Sangatta">
                    <div class="logo-content">
                        <div class="logo-text">KLINIK UTAMA TUMBUH KEMBANG ANAK CAHAYA SANGATTA</div>
                        <span class="logo-subtitle">Spesialis Tumbuh Kembang Anak</span>
                    </div>
                </a>
            </div>
            <ul class="mobile-nav-links">
                <li><a href="#beranda">BERANDA</a></li>
                <li class="mobile-dropdown">
                    <a href="#profil" class="mobile-dropdown-toggle" id="mobileDropdownToggle">PROFIL<span class="material-icons" id="mobileDropdownIcon">expand_more</span></a>
                    <div class="mobile-dropdown-menu" id="mobileDropdownMenu">
                        <a href="javascript:void(0);" onclick="showDoctorModal()" class="mobile-dropdown-item"><span class="material-icons">medical_services</span>Dokter</a>
                        <a href="javascript:void(0);" onclick="showTherapistModal()" class="mobile-dropdown-item"><span class="material-icons">groups</span>Tim Terapis</a>
                    </div>
                </li>
                <li><a href="javascript:void(0);" onclick="showServicesModal()">LAYANAN</a></li>
                <li><a href="javascript:void(0);" onclick="showGalleryModal()">GALERI</a></li>
                <li><a href="javascript:void(0);" onclick="showContactModal()">KONTAK</a></li>
            </ul>
            <div class="mobile-nav-footer">
                <a href="https://wa.me/6282150675787" class="mobile-appointment" target="_blank"><span class="material-icons">edit_calendar</span>PENDAFTARAN ONLINE</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Hero Section -->
        <section id="beranda" class="hero">
            <div class="hero-background"></div>
            
            <div class="hero-container">
                <div class="hero-content">
                    <h1>SELAMAT DATANG DI KLINIK UTAMA TUMBUH KEMBANG ANAK CAHAYA SANGATTA</h1>
                    <p class="hero-subtitle">Menyediakan layanan deteksi dini dan penanganan gangguan tumbuh kembang anak di Kutai Timur, dengan tim dokter spesialis dan terapis profesional, untuk mencegah gangguan perkembangan lebih lanjut.</p>
                    <div class="hero-buttons">
                        <a href="javascript:void(0);" onclick="showContactModal()" class="btn btn-outline-white"><span class="material-icons">contact_page</span>KONTAK KAMI</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="tentang-kami" class="section-light">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">TENTANG KAMI</h2>
                </div>
                <div class="about-content">
                    <p>Klinik Utama Tumbuh Kembang Anak Cahaya Sangatta didirikan dengan tujuan membantu keluarga dengan anak-anak yang memiliki hambatan pertumbuhan dan perkembangan untuk daerah kutai timur. Klinik Utama Tumbuh Kembang Anak Cahaya Sangatta ini bergerak di bidang deteksi dini terhadap keterlambatan dan gangguan tumbuh kembang anak secara terpadu yang melibatkan tim dokter spesialis anak, serta terapis yang professional dan berpengalaman.</p>
                    <p>Jika gangguan tumbuh kembang tidak dideteksi dan di tangani secara dini, maka akan mengganggu ke tahap pertumbuhan dan perkembangan selanjutnya. Dengan kepedulian dan kecintaan pada anak-anak serta keinginan yang kuat untuk meningkatkan kualitas hidup anak berkebutuhan khusus, maka dibentuklah sebuah team untuk mendirikan klinik utama tumbuh kembang anak cahaya sangatta.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2 class="cta-title">Mulai Perjalanan Tumbuh Kembang Optimal Anak Anda</h2>
                    <p class="cta-subtitle">Jangan biarkan keraguan menghalangi masa depan cerah anak Anda. Tim ahli kami siap memberikan solusi terbaik untuk mendukung setiap tahap perkembangan.</p>
                    <div class="hero-buttons">
                        <a href="https://wa.me/6282150675787" class="btn btn-primary" target="_blank"><span class="material-icons">edit_calendar</span>PENDAFTARAN ONLINE</a>
                        <a href="javascript:void(0);" onclick="showContactModal()" class="btn btn-outline-white"><span class="material-icons">call</span>HUBUNGI KAMI</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer id="kontak">
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <div class="footer-logo">
                        <img src="images/Logo/logo.png" alt="Klinik Cahaya Sangatta">
                    </div>
                    <h3>Klinik Utama Tumbuh Kembang Anak Cahaya Sangatta</h3>
                    <p class="footer-description">Pusat layanan tumbuh kembang anak profesional dengan tim dokter spesialis dan terapis berpengalaman di Sangatta. Komitmen kami adalah memberikan pelayanan terbaik untuk masa depan cerah setiap anak.</p>
                </div>
                <div class="contact-info">
                    <div class="contact-item"><span class="material-icons contact-icon">place</span><div class="contact-details"><h4>Alamat Klinik</h4><p>Jl. Yos Sudarso IV no. 006, RT.23/RW.08<br>Kel. Teluk Lingga, Kec. Sangatta Utara<br>Kab. Kutai Timur, Kalimantan Timur 75683</p></div></div>
                    <div class="contact-item"><span class="material-icons contact-icon">phone</span><div class="contact-details"><h4>Telepon & WhatsApp</h4><p>+62 821-5067-5787<br>Senin - Jumat: 08.00 - 16.00 WITA<br>Sabtu: 08.00 - 13.00 WITA</p></div></div>
                    <div class="contact-item"><span class="material-icons contact-icon">email</span><div class="contact-details"><h4>Email & Media Sosial</h4><p>kutka.cahayasangatta@gmail.com<br>Instagram: @kutkacahayasangatta<br>Facebook: Klinik Utama Tumbuh Kembang Anak Cahaya Sangatta</p></div></div>
                </div>
            </div>
            <div class="footer-copyright"><p>&copy; <script>document.write(new Date().getFullYear());</script> Klinik Utama Tumbuh Kembang Anak Cahaya Sangatta. Seluruh hak cipta dilindungi undang-undang.</p></div>
        </div>
    </footer>

    <!-- Modal Dokter -->
    <div id="doctorModal" class="modal">
        <div class="modal-overlay" onclick="closeModal('doctorModal')"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Dokter Spesialis</h2>
                <button class="modal-close" onclick="closeModal('doctorModal')"><span class="material-icons">close</span></button>
            </div>
            <div class="modal-body">
                <div class="doctor-modal-container">
                    <div class="doctor-image-modal">
                        <img src="images/Dokter/dr-meitha.png" 
                             alt="dr. Meitha P. E. Togas, SpA. Subsp. TKPS(K)., SAP-K"
                             loading="lazy"
                             width="500"
                             height="667">
                    </div>
                    
                    <div class="doctor-name-container">
                        <h3 class="doctor-name-modal">dr. Meitha P. E. Togas, SpA. Subsp. TKPS(K)., SAP-K</h3>
                        <p class="doctor-position">Dokter Spesialis Anak</p>
                        <p class="doctor-position">Konsultan Tumbuh Kembang Anak</p>
                        <p class="doctor-position">Supervisor Analis Perilaku Klinis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Terapis -->
    <div id="therapistModal" class="modal">
        <div class="modal-overlay" onclick="closeModal('therapistModal')"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Tim Terapis</h2>
                <button class="modal-close" onclick="closeModal('therapistModal')"><span class="material-icons">close</span></button>
            </div>
            <div class="modal-body">
                <p>Tim terapis profesional kami terdiri dari berbagai disiplin ilmu yang siap memberikan pelayanan terbaik untuk tumbuh kembang anak Anda.</p>
            
                <div class="therapists-grid">
                    <!-- Merlin Card -->
                    <div class="therapist-card">
                        <div class="therapist-image-container">
                            <img src="images/terapis/merlin.png" 
                                alt="Merlin Susi Buaton, A.MD.TW - Terapis Wicara"
                                class="therapist-image"
                                loading="lazy"
                                width="300"
                                height="400">
                        </div>
                        <div class="therapist-info">
                            <h4 class="therapist-name">Merlin Susi Buaton, A.MD.TW</h4>
                            <p class="therapist-role">Terapis Wicara</p>
                        </div>
                    </div>
                
                    <!-- Terapis 2 -->
                    <div class="therapist-card">
                        <div class="therapist-image-container">
                            <img src="images/terapis/latifah.png" 
                                 alt="Latifah Arum Purnamasari, A.MD.Kes - Terapis Wicara"
                                 class="therapist-image"
                                 loading="lazy"
                                 width="300"
                                 height="400">
                        </div>
                        <div class="therapist-info">
                            <h4 class="therapist-name">Latifah Arum Purnamasari, A.MD.Kes</h4>
                            <p class="therapist-role">Terapis Wicara</p>
                        </div>
                    </div>
                    
                    <!-- Terapis 3 -->
                    <div class="therapist-card">
                        <div class="therapist-image-container">
                            <img src="images/terapis/rini.png" 
                                 alt="Rini Natalia Tambunan, S.H., TPT - Terapis Perilaku"
                                 class="therapist-image"
                                 loading="lazy"
                                 width="300"
                                 height="400">
                        </div>
                        <div class="therapist-info">
                            <h4 class="therapist-name">Rini Natalia Tambunan, S.H., TPT</h4>
                            <p class="therapist-role">Terapis Perilaku</p>
                        </div>
                    </div>
                    
                    <!-- Terapis 4 -->
                    <div class="therapist-card">
                        <div class="therapist-image-container">
                            <img src="images/terapis/suci.png" 
                                 alt="Suci Ramdani Fitri, S.Pd, TPT - Terapis Perilaku"
                                 class="therapist-image"
                                 loading="lazy"
                                 width="300"
                                 height="400">
                        </div>
                        <div class="therapist-info">
                            <h4 class="therapist-name">Suci Ramdani Fitri, S.Pd, TPT</h4>
                            <p class="therapist-role">Terapis Perilaku</p>
                        </div>
                    </div>

                    <!-- Terapis 5 -->
                    <div class="therapist-card">
                        <div class="therapist-image-container">
                            <img src="images/terapis/yozi.png" 
                                 alt="Yozima Zefanya, S.Psi, TPT - Terapis Perilaku"
                                 class="therapist-image"
                                 loading="lazy"
                                 width="300"
                                 height="400">
                        </div>
                        <div class="therapist-info">
                            <h4 class="therapist-name">Yozima Zefanya, S.Psi, TPT</h4>
                            <p class="therapist-role">Terapis Perilaku</p>
                        </div>
                    </div>

                    <!-- Terapis 6 -->
                    <div class="therapist-card">
                        <div class="therapist-image-container">
                            <img src="images/terapis/rahel.png" 
                                 alt="Alispa Rahel, S.K.M, TPT - Terapis Perilaku"
                                 class="therapist-image"
                                 loading="lazy"
                                 width="300"
                                 height="400">
                        </div>
                        <div class="therapist-info">
                            <h4 class="therapist-name">Alispa Rahel, S.K.M, TPT</h4>
                            <p class="therapist-role">Terapis Perilaku</p>
                        </div>
                    </div>

                    <!-- Terapis 7 -->
                    <div class="therapist-card">
                        <div class="therapist-image-container">
                            <img src="images/terapis/alispa.png" 
                                 alt="Lingkan Marlouna Evangelista Mandolang, S.Kep - Terapis Perilaku"
                                 class="therapist-image"
                                 loading="lazy"
                                 width="300"
                                 height="400">
                        </div>
                        <div class="therapist-info">
                            <h4 class="therapist-name">Lingkan Marlouna Evangelista Mandolang, S.Kep</h4>
                            <p class="therapist-role">Terapis Perilaku</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Layanan -->
    <div id="servicesModal" class="modal">
        <div class="modal-overlay" onclick="closeModal('servicesModal')"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Layanan Kami</h2>
                <button class="modal-close" onclick="closeModal('servicesModal')"><span class="material-icons">close</span></button>
            </div>
            <div class="modal-body">
                <p>Kami menyediakan berbagai layanan komprehensif untuk mendukung setiap aspek tumbuh kembang anak dengan pendekatan holistik.</p>
                <div class="services-list">
                    <div class="service-card">
                        <div class="service-icon-card"><span class="material-icons">monitor_heart</span></div>
                        <h3 class="service-title-card">Skrining Tumbuh Kembang</h3>
                        <p class="service-desc-card">Skrining tumbuh kembang anak sangat penting untuk pemantauan pertumbuhan dan perkembangan anak. Deteksi dini diperlukan untuk mengatasi apabila ada hambatan pada pertumbuhan dan perkembangan. Karena apabila hambatan tersebut terus dibiarkan, maka akan berdampak pada tahap perkembangan selanjutnya. Skrining tumbuh kembang harus di lakukan oleh tenaga yang profesial yaitu dokter tumbuh kembang anak.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon-card"><span class="material-icons">record_voice_over</span></div>
                        <h3 class="service-title-card">Terapi Wicara</h3>
                        <p class="service-desc-card">Bertujuan untuk memulihkan dan meningkatkan kemampuan perilaku, komunikasi yang berhubungan dengan kemampuan bahasa, bicara, suara dan irama. Kelainan bicara yang diakibatkan oleh gangguan anatomis, fisiologis, psikologis dan sosiologis..</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon-card"><span class="material-icons">psychology</span></div>
                        <h3 class="service-title-card">Terapi Perilaku</h3>
                        <p class="service-desc-card">Bertujuan memperbaiki perilaku yang tidak/kurang baik pada anak yang menjadi perilaku yang lebih baik sesuai anak seusianya, memberikan pemahaman konsep dasar pada anak untuk digunakan dalam kehidupan sehari-hari.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon-card"><span class="material-icons">accessibility</span></div>
                        <h3 class="service-title-card">Fisioterapi</h3>
                        <p class="service-desc-card">Fisioterapi untuk anak berkebutuhan khusus adalah layanan terapi menyeluruh pada semua gangguan kasus pertumbuhan anak, contohnya anak dengan diagnosa cerebral palsy, down syndrome, global delay development, spina divida, dan yang lainnya.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon-card"><span class="material-icons">assignment</span></div>
                        <h3 class="service-title-card">Assessment</h3>
                        <p class="service-desc-card">Assessment terapi dilakukan setelah pemeriksaan dokter. Assessment terapi bertujuan untuk mengetahui kekurangan dari anak yang bersangkutan. Setelah assessment terapi diketahui hasilnya sebagai bahan acuan atau program terapi yang akan diberikan kepada anak.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon-card"><span class="material-icons">engineering</span></div>
                        <h3 class="service-title-card">Okupasi Terapi</h3>
                        <p class="service-desc-card">Bentuk layanan kesehatan kepada pasien yang mengalami gangguan fisik atau mental dengan menggunakan latihan/aktivitas mengerjakan sasaran yang terseleksi(okupasi) untuk meningkatkan kemandirian individu pada area aktivitas kehidupan sehari-hari, produktivitas dan pemanfaatan waktu luang dalam rangka meningkatkan derajat kesehatan masyarakat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Galeri dengan Kategori -->
    <div id="galleryModal" class="modal">
        <div class="modal-overlay" onclick="closeModal('galleryModal')"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Galeri Klinik</h2>
                <button class="modal-close" onclick="closeModal('galleryModal')"><span class="material-icons">close</span></button>
            </div>
            <div class="modal-body">
                <p>Lihat suasana dan fasilitas di Klinik Utama Tumbuh Kembang Anak Cahaya Sangatta.</p>
                
                <!-- Kategori 1: Fasilitas Klinik -->
                <div class="gallery-category">
                    <h3 class="gallery-category-title">Fasilitas Klinik</h3>
                    <div class="gallery-grid">
                        <div class="gallery-item">
                            <img src="images/gallery/fasilitas/ruang-tunggu.jpg" 
                                 alt="Ruang Tunggu Klinik"
                                 loading="lazy"
                                 width="400"
                                 height="300">
                        </div>
                        
                        <div class="gallery-item">
                            <img src="images/gallery/fasilitas/ruang-terapi.jpg" 
                                 alt="Ruang Terapi"
                                 loading="lazy"
                                 width="400"
                                 height="300">
                        </div>
                        
                        <div class="gallery-item">
                            <img src="images/gallery/fasilitas/ruang-konsultasi.jpg" 
                                 alt="Ruang Konsultasi"
                                 loading="lazy"
                                 width="400"
                                 height="300">
                        </div>
                        
                        <div class="gallery-item">
                            <img src="images/gallery/fasilitas/ruang-terapi-wicara.jpg" 
                                 alt="Ruang Terapi Wicara"
                                 loading="lazy"
                                 width="400"
                                 height="300">
                        </div>

                        <div class="gallery-item">
                            <img src="images/gallery/fasilitas/ruang-terapi-wicara.jpg" 
                                 alt="Ruang Terapi Wicara"
                                 loading="lazy"
                                 width="400"
                                 height="300">
                        </div>
                    </div>
                </div>

                 <!-- Kategori 1: Fasilitas Klinik -->
                <div class="gallery-category">
                    <h3 class="gallery-category-title">Hari Anak Nasional</h3>
                    <div class="gallery-grid">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kontak -->
    <div id="contactModal" class="modal">
        <div class="modal-overlay" onclick="closeModal('contactModal')"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Kontak Kami</h2>
                <button class="modal-close" onclick="closeModal('contactModal')"><span class="material-icons">close</span></button>
            </div>
            <div class="modal-body">
                <p>Hubungi kami untuk informasi lebih lanjut atau untuk membuat janji konsultasi.</p>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div style="background: var(--primary-lighter); padding: 1.5rem; border-radius: var(--radius-lg);">
                        <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 1rem; color: var(--primary); display: flex; align-items: center; gap: 0.5rem;">
                            <span class="material-icons">place</span> Alamat
                        </h3>
                        <p style="font-size: 0.9rem; line-height: 1.5; color: var(--dark-gray);">
                            Jl. Yos Sudarso IV no. 006, RT.23/RW.08<br>
                            Kel. Teluk Lingga, Kec. Sangatta Utara<br>
                            Kab. Kutai Timur, Kalimantan Timur 75683
                        </p>
                    </div>
                    
                    <div style="background: var(--secondary-light); padding: 1.5rem; border-radius: var(--radius-lg);">
                        <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 1rem; color: var(--secondary-dark); display: flex; align-items: center; gap: 0.5rem;">
                            <span class="material-icons">phone</span> Telepon & WhatsApp
                        </h3>
                        <p style="font-size: 0.9rem; line-height: 1.5; color: var(--dark-gray);">
                            <strong>+62 821-5067-5787</strong><br>
                            Senin - Jumat: 08.00 - 16.00 WITA<br>
                            Sabtu: 08.00 - 13.00 WITA
                        </p>
                    </div>
                    
                    <div style="background: var(--primary-lighter); padding: 1.5rem; border-radius: var(--radius-lg);">
                        <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 1rem; color: var(--primary); display: flex; align-items: center; gap: 0.5rem;">
                            <span class="material-icons">email</span> Email & Media Sosial
                        </h3>
                        <p style="font-size: 0.9rem; line-height: 1.5; color: var(--dark-gray);">
                            <strong>kutka.cahayasangatta@gmail.com</strong><br>
                            Instagram: @kutkacahayasangatta<br>
                            Facebook: Klinik Utama Tumbuh Kembang Anak Cahaya Sangatta
                        </p>
                    </div>
                </div>
                
                <!-- Google Maps Embed -->
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.524107847849!2d117.528937!3d0.499999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320df0514a5a5a5b%3A0x9f7b1c3e1f6b3c1e!2sGGFH%2BW3G%20Tlk.%20Lingga%2C%20Kabupaten%20Kutai%20Timur%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1690000000000!5m2!1sid!2sid" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                
                <div style="margin-top: 2rem; padding: 1.5rem; background: var(--light); border-radius: var(--radius-lg); border-left: 4px solid var(--primary);">
                    <h3 style="font-size: 1rem; font-weight: 700; margin-bottom: 0.8rem; color: var(--primary);">Pendaftaran Online</h3>
                    <p style="font-size: 0.85rem; line-height: 1.5; color: var(--dark-gray); margin-bottom: 1rem;">
                        Untuk kenyamanan Anda, kami menyediakan layanan pendaftaran online melalui WhatsApp. Klik tombol di bawah untuk menghubungi kami.
                    </p>
                    <a href="https://wa.me/6282150675787" 
                       style="display: inline-flex; align-items: center; gap: 0.5rem; background: linear-gradient(135deg, var(--primary), var(--primary-dark)); color: white; padding: 0.7rem 1.5rem; border-radius: var(--radius); text-decoration: none; font-weight: 600; font-size: 0.85rem; transition: var(--transition);"
                       target="_blank">
                       <span class="material-icons">edit_calendar</span> Pendaftaran Online via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const mobileNav = document.getElementById('mobileNav');
        menuToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            mobileNav.classList.toggle('active');
            document.body.style.overflow = mobileNav.classList.contains('active') ? 'hidden' : '';
        });

        // Mobile Dropdown Toggle
        const mobileDropdownToggle = document.getElementById('mobileDropdownToggle');
        const mobileDropdownMenu = document.getElementById('mobileDropdownMenu');
        const mobileDropdownIcon = document.getElementById('mobileDropdownIcon');
        if (mobileDropdownToggle) {
            mobileDropdownToggle.addEventListener('click', function(e) {
                e.preventDefault();
                mobileDropdownMenu.classList.toggle('active');
                mobileDropdownIcon.textContent = mobileDropdownMenu.classList.contains('active') ? 'expand_less' : 'expand_more';
            });
        }

        // Close mobile menu on link click
        document.querySelectorAll('.mobile-nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                if (!this.classList.contains('mobile-dropdown-toggle')) {
                    menuToggle.classList.remove('active');
                    mobileNav.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });

        // Active navigation
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-links > li > a, .mobile-nav-links > li > a');
        function updateActiveNav() {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 100)) current = section.getAttribute('id');
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#beranda' && current === 'beranda') link.classList.add('active');
                else if (link.getAttribute('href') === '#tentang-kami' && current === 'tentang-kami') link.classList.add('active');
            });
        }
        window.addEventListener('scroll', updateActiveNav);
        updateActiveNav();

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerHeight = document.getElementById('header').offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight - 15;
                    window.scrollTo({top: targetPosition, behavior: 'smooth'});
                }
            });
        });

        // Scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('show');
            });
        }, {threshold: 0.1, rootMargin: '0px 0px -50px 0px'});
        document.querySelectorAll('section').forEach(el => observer.observe(el));

        // Modal Functions
        function showDoctorModal() {
            document.getElementById('doctorModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
            if (window.history && window.history.pushState) {
                window.history.pushState({modal: 'doctor'}, '', '#dokter');
            }
            closeMobileMenu();
        }

        function showTherapistModal() {
            document.getElementById('therapistModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
            if (window.history && window.history.pushState) {
                window.history.pushState({modal: 'therapist'}, '', '#terapis');
            }
            closeMobileMenu();
        }

        function showServicesModal() {
            document.getElementById('servicesModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
            if (window.history && window.history.pushState) {
                window.history.pushState({modal: 'services'}, '', '#layanan');
            }
            closeMobileMenu();
        }

        function showGalleryModal() {
            document.getElementById('galleryModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
            if (window.history && window.history.pushState) {
                window.history.pushState({modal: 'gallery'}, '', '#galeri');
            }
            closeMobileMenu();
        }

        function showContactModal() {
            document.getElementById('contactModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
            if (window.history && window.history.pushState) {
                window.history.pushState({modal: 'contact'}, '', '#kontak');
            }
            closeMobileMenu();
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
            document.body.style.overflow = '';
            if (window.history && window.history.replaceState) {
                window.history.replaceState(null, '', window.location.pathname);
            }
        }

        function closeMobileMenu() {
            menuToggle.classList.remove('active');
            mobileNav.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Close modal on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal('doctorModal');
                closeModal('therapistModal');
                closeModal('servicesModal');
                closeModal('galleryModal');
                closeModal('contactModal');
            }
        });

        // Handle browser back button
        window.addEventListener('popstate', function() {
            closeModal('doctorModal');
            closeModal('therapistModal');
            closeModal('servicesModal');
            closeModal('galleryModal');
            closeModal('contactModal');
        });

        // Image loading dengan fallback
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                // Tambahkan error handler untuk gambar yang tidak ditemukan
                img.addEventListener('error', function() {
                    console.log('Gambar tidak ditemukan:', this.src);
                    // Ganti dengan placeholder jika gambar tidak ditemukan
                    if (this.src.includes('therapists/') || this.src.includes('Dokter/')) {
                        this.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAwIiBoZWlnaHQ9IjY2NyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjMWU0MGFmIi8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJJbnRlciIgZm9udC1zaXplPSIxNnB4IiBmaWxsPSJ3aGl0ZSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZHk9Ii4zZW0iPkZvdG8gRG9rdGVyPC90ZXh0Pjwvc3ZnPg==';
                        this.alt = 'Foto dokter tidak tersedia';
                    } else if (this.src.includes('gallery/')) {
                        this.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjMWU0MGFmIi8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJJbnRlciIgZm9udC1zaXplPSIxNnB4IiBmaWxsPSJ3aGl0ZSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZHk9Ii4zZW0iPkdhbGVyaTwvdGV4dD48L3N2Zz4=';
                        this.alt = 'Foto galeri tidak tersedia';
                    } else if (this.src.includes('Logo/')) {
                        this.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjQwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjMWU0MGFmIi8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJJbnRlciIgZm9udC1zaXplPSIxNnB4IiBmaWxsPSJ3aGl0ZSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZHk9Ii4zZW0iPkxvZ288L3RleHQ+PC9zdmc+';
                        this.alt = 'Logo tidak tersedia';
                    }
                });
                
                img.addEventListener('load', function() {
                    this.style.opacity = '1';
                });
                
                img.style.opacity = '0';
                img.style.transition = 'opacity 0.3s ease';
                setTimeout(() => { img.style.opacity = '1'; }, 1000);
            });
            
            // Detect device orientation changes
            window.addEventListener('orientationchange', function() {
                setTimeout(function() {
                    window.location.reload();
                }, 100);
            });
        });
    </script>
</body>
</html>