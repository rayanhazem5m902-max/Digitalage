<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Age - Technology Solutions</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="st5.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<style>
    /* خط تحت اللينك عند الهوفر */
    .custom-nav .nav-link::after {
        content: "";
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -6px;
        left: 0;
        background-color: #f97316;
        transition: width 0.3s ease;
    }

    .custom-nav .nav-link:hover {
        color: #f97316;
    }

    .custom-nav .nav-link:hover::after {
        width: 100%;
    }

    /* أيقونة اللغة */
    .lang-icon {
        font-size: 20px;
        color: #ffffff;
        cursor: pointer;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .lang-icon:hover {
        color: #f97316;
        transform: rotate(20deg);
    }

    /* زر تسجيل الدخول */
    .btn-login {
        border: 1px solid #ffffff;
        color: #ffffff;
        padding: 6px 18px;
        border-radius: 30px;
        background: transparent;
        transition: all 0.3s ease;
    }

    .btn-login:hover {
        background-color: #f97316;
        border-color: #f97316;
        color: #fff;
    }

    .section-bg {
        background-color: #fef9f5;
        padding: 80px 0;
        min-height: 100vh;
    }

    .program-card {
        background-color: #ffffff;
        border-radius: 30px;
        border: none;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
        padding: 25px;
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .program-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
    }

    .card-header-area {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .icon-circle {
        /* If the icon needs a background, uncomment below. The reference usually implies a simple icon or icon in shape. 
               I will keep it simple as requested: "An icon at the top left" */
        font-size: 24px;
        color: #333;
        margin-right: 15px;
        width: 40px;
        text-align: center;
    }

    .card-title {
        font-weight: 700;
        font-size: 1.5rem;
        margin: 0;
        color: #212529;
    }

    .card-img-wrapper {
        margin-bottom: 20px;
        border-radius: 15px;
        overflow: hidden;
        height: 220px;
    }

    .card-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .program-card:hover .card-img-wrapper img {
        transform: scale(1.05);
    }

    .progress-wrapper {
        margin-bottom: 25px;
        position: relative;
    }

    .custom-progress {
        height: 16px;
        background-color: #ffe4e6;
        /* Light pink background */
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .progress-label {
        font-size: 12px;
        font-weight: 700;
        color: #555;
        z-index: 2;
    }

    .card-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: auto;
        /* Pushes footer to bottom if content varies */
    }

    .read-more {
        color: #0d6efd;
        /* Blue */
        text-decoration: none;
        font-weight: 500;
        font-size: 0.95rem;
    }

    .read-more:hover {
        text-decoration: underline;
    }

    .btn-donate {
        background-color: #ff9800;
        /* Orange */
        color: #000;
        /* Dark text */
        border: none;
        border-radius: 20px;
        padding: 8px 24px;
        font-weight: 600;
        font-size: 0.95rem;
        transition: background-color 0.2s ease;
    }

    .btn-donate:hover {
        background-color: #e68900;
    }

    /* Specific alignment tweaks */
    .header-title-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }





    /* الحاوية الأم تستخدم flex لدفع النص لليمين */

    .container1 {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: flex-end;
        /* تفعيل Flexbox */
        align-items: flex-end;

        /* المحاذاة لأقصى اليمين */
        padding: 0 1rem;
        margin-left: 10%;
        /* مسافة من الجوانب إذا أحببتي */
    }

    /* النص نفسه */
    #rightDiv {
        max-width: 600px;
        /* أقصى عرض للنص */
        font-family: 'Inknut Antiqua', serif;
        color: #f97316;
        /* اللون البرتقالي */
        line-height: 1.6;
        text-align: left;
        /* النص يمين داخل الحاوية */
        font-size: 1rem;
    }

    /* Responsive حجم الخط */
    @media (min-width: 640px) {
        #rightDiv {
            font-size: 1.125rem;
        }

        .container {
            margin-left: 10%
        }
    }

    /* sm */
    @media (min-width: 768px) {
        #rightDiv {
            font-size: 1.25rem;
        }

        .container {
            margin-left: 10%
        }
    }

    /* md */
    @media (min-width: 1024px) {
        #rightDiv {
            font-size: 1.5rem;
        }

        .container {
            margin-left: 10%
        }
    }

    /* lg */

    /* تمييز السطر الأخير */
    .highlight {
        font-weight: 600;
        display: block;
        margin-top: 0.5rem;
    }

    .about-section-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .section-eyebrow {
        letter-spacing: 0.1em;
        font-size: 30px;
        font-weight: bold;
        color: rgb(0, 0, 0);
    }

    .section-title {
        font-family: var(--heading-font);
        font-weight: 600;
        font-size: clamp(1.9rem, 2.4vw, 2.3rem);
        letter-spacing: 0.03em;
    }

    .section-subtitle {
        font-size: 0.98rem;
        color: var(--text-muted-soft);
        max-width: 520px;
    }

    .about-card {
        border-radius: var(--card-radius);
        background-color: #ffffff;
        border: none;
        box-shadow: 0 18px 45px rgba(0, 0, 0, 0.04);
        padding: 1.75rem 1.7rem 1.7rem;
        height: 100%;
        display: flex;
        flex-direction: column;
        min-height: 560px;

    }

    .about-card-title {
        font-family: var(--heading-font);
        font-size: 1.2rem;
        margin-bottom: 0.75rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: rgb(0, 0, 0);
    }

    .im img {
        background: radial-gradient(circle at top left, #fdf2e3 0, #f3d3a7 32%, #f5e2c5 55%, #ffffff 100%);
        border-radius: 15px;
        width: 100%;
        height: 220px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.1rem;
        object-fit: cover;
    }

    .ima img {
        background: radial-gradient(circle at top left, #fdf2e3 0, #f3d3a7 32%, #f5e2c5 55%, #ffffff 100%);
        border-radius: 15px;
        width: 100%;
        height: 220px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.1rem;
        object-fit: cover;
    }

    .about-text {
        font-size: 0.9rem;
        line-height: 1.7;
        color: rgb(0, 0, 0);
    }

    .value-item {
        display: flex;
        align-items: flex-start;
        gap: 0.8rem;
        font-size: 0.9rem;
        color: #4f453a;
    }

    .value-item-icon {
        width: 40px;
        height: 40px;
        border-radius: 999px;
        background-color: #fdf2e3;
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgb(0, 0, 0);
        flex-shrink: 0;
    }

    .value-item+.value-item {
        margin-top: 0.7rem;
    }

    .value-label {
        font-weight: 600;
        margin-bottom: 0.05rem;
        color: rgb(0, 0, 0);
    }

    .muted-caption {
        font-size: 0.78rem;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        color: #9c8d7d;
    }

    .history-placeholder {
        flex: 1;
        display: flex;
        border-radius: 10px;
        border: 1px dashed rgba(176, 153, 128, 0.5);
        color: rgb(0, 0, 0);
        font-size: 0.85rem;
        padding: 1.5rem 1rem;
    }

    @media (max-width: 991.98px) {
        .about-section-wrapper {
            padding-top: 2.5rem;
        }

        .about-card {
            padding: 1.5rem 1.4rem 1.4rem;
        }
    }

    @media (max-width: 575.98px) {
        .about-card {
            border-radius: 20px;
        }


    }

    .news-header {
        display: inline-block;
        background: var(--accent);
        color: #fff;
        padding: 14px 26px;
        font-weight: 800;
        letter-spacing: .2px;
        font-size: clamp(1.2rem, 2.2vw, 1.8rem);
        line-height: 1;
        clip-path: polygon(0% 0%, 94% 0%, 100% 50%, 94% 100%, 0% 100%, 4% 50%);
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
    }

    /* Slider layout */
    .news-slider {
        position: relative;
        padding: 18px 54px;
        /* space for arrow buttons */
    }

    .news-viewport {
        overflow: hidden;
        border-radius: 28px;
    }

    .news-track {
        display: flex;
        gap: 20px;
        will-change: transform;
        transition: transform 400ms cubic-bezier(.2, .8, .2, 1);
        padding: 10px;
    }

    .news-card {
        flex: 0 0 calc(33.333% - 20px);
        /* Show 3 cards on desktop */
        background: var(--card-bg);
        border-radius: 24px;
        padding: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, .05);
        min-height: auto;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease;
    }

    .news-card:hover {
        transform: translateY(-5px);
    }

    .news-img {
        width: 100%;
        aspect-ratio: 4/3;
        /* Changed from 1/1 to 4/3 for better shape */
        object-fit: cover;
        border-radius: 16px;
        background: #ddd;
        margin-bottom: 12px;
    }

    .news-title {
        margin: 14px 6px 6px;
        font-weight: 800;
        font-size: 1.05rem;
        color: #111827;
    }

    .news-text {
        margin: 0 6px;
        color: #4b5563;
        font-size: .95rem;
        line-height: 1.4;
        flex: 1;
    }

    .read-more {
        margin: 10px 6px 2px;
        color: var(--link);
        font-weight: 800;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .read-more:hover {
        text-decoration: underline;
    }

    /* Arrow buttons */
    .arrow-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 46px;
        height: 46px;
        border-radius: 999px;
        border: none;
        background: var(--arrow-bg);
        color: var(--arrow-fg);
        display: grid;
        place-items: center;
        box-shadow: 0 12px 25px rgba(0, 0, 0, .12);
        cursor: pointer;
        transition: transform 150ms ease, background 150ms ease;
        z-index: 5;
    }

    .arrow-btn:hover {
        background: #d1d5db;
    }

    .arrow-btn:active {
        transform: translateY(-50%) scale(.96);
    }

    .arrow-left {
        left: 10px;
    }

    .arrow-right {
        right: 10px;
    }

    .arrow-btn[disabled] {
        opacity: .45;
        cursor: not-allowed;
        box-shadow: none;
    }

    /* Tablet/Small Laptop: 2 cards */
    @media (max-width: 1024px) {
        .news-card {
            flex-basis: calc(50% - 10px);
        }
    }

    /* Mobile: 1 card */
    @media (max-width: 767.98px) {
        .news-slider {
            padding: 14px 44px;
        }

        .news-card {
            flex-basis: 100%;
        }

        .news-img {
            height: auto;
            aspect-ratio: 16/9;
        }
    }

    /* Reduce motion */
    @media (prefers-reduced-motion: reduce) {
        .news-track {
            transition: none;
        }
    }

    .custom-navbar {
        background-color: transparent;
        transition: background-color 0.4s ease;
    }

    .custom-navbar .nav-link {
        color: #ffffff !important;
        /* أبيض عشان تبان فوق الهيرو */
        font-weight: 500;
        position: relative;
    }

    .custom-navbar .nav-link:hover {
        color: #f97316 !important;
    }

    .contact-form-section {
        background-color: #ffffff !important;
    }

    .contact-info-section {
        background-color: #f15a24 !important;
        color: white !important;
    }

    .contact-info-section h5,
    .contact-info-section p,
    .contact-info-section a {
        color: white !important;
    }

    .contact-info-section .social-icons a {
        color: white !important;
        opacity: 0.8;
        transition: opacity 0.3s;
    }

    .contact-info-section .social-icons a:hover {
        opacity: 1;
    }

    /* Form input styling */
    .form-control,
    .form-select {
        background-color: #f8f9fa !important;
        border: 1px solid #dee2e6 !important;
        padding: 0.75rem 1rem;
    }

    .form-control:focus,
    .form-select:focus {
        background-color: #f8f9fa !important;
        border-color: #86b7fe !important;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25) !important;
    }

    /* Green button styling */
    .btn-green {
        background-color: #10b981 !important;
        border-color: #10b981 !important;
        color: white !important;
        border-radius: 0.5rem !important;
        padding: 0.75rem 1.5rem;
        transition: background-color 0.3s;
    }

    .btn-green:hover {
        background-color: #4a6b60 !important;
        border-color: #0ea572 !important;
        color: white !important;
    }

    /* Card shadow */
    .contact-card {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
    }

    /* Responsive adjustments */
    @media (max-width: 767.98px) {
        .contact-card {
            border-radius: 1rem !important;
        }
    }
</style>


<body class="bg-white overflow-x-hidden">
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 glass">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <img id="dig" src="Images/Untitled (1).png" alt="digitalagelogo" class="logo">
                    <a href="#" class="flex items-center gap-0 text-3xl font-bold tracking-tight">
                        <span class="text-lime" data-i18n="brandDigital">Digital</span>
                        <span class="text-blue" data-i18n="brandAge">Age</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="#home" class="nav-link text-gray-700 hover:text-lime font-medium" data-i18n="home">Home</a>
                    <a href="#services" class="nav-link text-gray-700 hover:text-blue font-medium"
                        data-i18n="services">Services</a>
                    <a href="#about" class="nav-link text-gray-700 hover:text-lime font-medium"
                        data-i18n="about">About</a>
                    <a href="#Portfolio" class="nav-link text-gray-700 hover:text-blue font-medium"
                        data-i18n="portfolio">Portfolio</a>
                    <a href="#contact" class="nav-link text-gray-700 hover:text-lime font-medium"
                        data-i18n="contact">Contact</a>
                    <a href="#impact" class="nav-link text-gray-700 hover:text-lime font-medium"
                        data-i18n="impact">Impact</a>
                    <a href="{{ route('careers') }}" class="nav-link text-gray-700 hover:text-blue font-medium"
                        data-i18n="jobs">Jobs</a>
                    <a href="#members" class="nav-link text-gray-700 hover:text-blue font-medium"
                        data-i18n="Members">Members</a>
                </div>

                <!-- Right Side: CTA + Language Switcher -->
                <div class="flex items-center gap-4">
                    <button onclick="toggleLanguage()"
                        class="lang-switch px-4 py-2 rounded-full text-sm font-semibold flex items-center gap-2">
                        <span id="lang-flag">🇺🇸</span>
                        <span id="lang-text">English</span>
                    </button>

                    <!-- Mobile menu button -->
                    <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <div class="flex flex-col gap-3">
                    <a href="#home" class="nav-link text-gray-700 hover:text-lime font-medium py-2"
                        data-i18n="home">Home</a>
                    <a href="#services" class="nav-link text-gray-700 hover:text-blue font-medium py-2"
                        data-i18n="services">Services</a>
                    <a href="#about" class="nav-link text-gray-700 hover:text-lime font-medium py-2"
                        data-i18n="about">About</a>
                    <a href="#Portfolio" class="nav-link text-gray-700 hover:text-blue font-medium py-2"
                        data-i18n="portfolio">Portfolio</a>


                    <a href="#contact" class="nav-link text-gray-700 hover:text-lime font-medium py-2"
                        data-i18n="contact">Contact</a>
                    <a href="{{ route('careers') }}" class="nav-link text-gray-700 hover:text-blue font-medium py-2"
                        data-i18n="jobs">Jobs</a>
                    <a href="#members" class="nav-link text-gray-700 hover:text-blue font-medium"
                        data-i18n="Members">Members</a>

                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
        <!-- Geometric Pattern Background -->
        <div class="geometric-pattern absolute inset-0"></div>

        <!-- Floating Shapes -->
        <div class="float-shape top-1/4 left-10 w-20 h-20 bg-lime/10 rounded-full blur-xl"></div>
        <div class="float-shape top-1/3 right-20 w-32 h-32 bg-blue/10 rounded-full blur-xl"
            style="animation-delay: 1s;"></div>
        <div class="float-shape bottom-1/4 left-1/4 w-24 h-24 bg-lime/10 rounded-full blur-xl"
            style="animation-delay: 2s;"></div>
        <div class="float-shape bottom-1/3 right-1/3 w-16 h-16 bg-blue/10 rounded-full blur-xl"
            style="animation-delay: 0.5s;"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full gradient-border mb-8">
                <span class="w-2 h-2 bg-lime rounded-full animate-pulse"></span>
                <span class="text-sm font-medium text-gray-600" data-i18n="innovatingFuture">Innovating the
                    Future</span>
            </div>

            <!-- Main Headline -->
            <h1 class="text-4xl sm:text-4xl lg:text-4xl font-extrabold text-gray-900 leading-tight mb-6">
                <span id="typing" data-i18n="transformDigital">Transform Your Digital Vision into Reality</span><br>

            </h1>

            <!-- Subheadline -->
            <p class="text-xl sm:text-2xl text-gray-600 max-w-3xl mx-auto mb-10 leading-relaxed"
                data-i18n="heroSubtitle">
                We Craft Cutting-Edge Software Solutions that Drive Business Growth. From Web Applications to Digital
                Marketing, we Power Your Success in the Digital Age.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
                <button
                    class="btn-primary px-8 py-4 rounded-full text-white font-semibold text-lg pulse-glow flex items-center gap-2"
                    data-i18n="startProject" id="Start">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <span data-i18n="startProjectBtn">Start Your Project</span>
                </button>

                <button id="view-intro-btn"
                    class="btn-secondary px-8 py-4 rounded-full font-semibold text-lg flex items-center gap-2"
                    data-i18n="viewPortfolio">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span data-i18n="viewPortfolioBtn">View Intro</span>
                </button>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                <div class="text-center">
                    <div class="text-4xl font-bold text-lime mb-2" id="stat-projects-display">
                        {{ $contact->statProjects }}
                    </div>
                    <div class="text-gray-600 font-medium" data-i18n="projectsCompleted">Projects Completed</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue mb-2" id="stat-clients-display">{{ $contact->statClients }}
                    </div>
                    <div class="text-gray-600 font-medium" data-i18n="happyClients">Happy Clients</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-lime mb-2" id="stat-team-display">{{ $contact->statTeam }}</div>
                    <div class="text-gray-600 font-medium" data-i18n="teamMembers">Team Members</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue mb-2" id="stat-years-display">{{ $contact->statYears }}
                    </div>
                    <div class="text-gray-600 font-medium" data-i18n="yearsExperience">Years Experience</div>
                </div>
            </div>
        </div>


        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>





    <section class="py-5 " id="members">
        <div class="container py-5">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold mb-3" data-i18n="membersSection.title"> Our Team Members</h2>
                    <p class="text-muted" data-i18n="membersSection.desc">Dedicated organizers and team members of
                        Digital
                        Age,
                    </p>
                </div>
            </div>

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="members-container">
                    @foreach($members as $index => $member)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="d-flex justify-content-center">
                                <div
                                    class="testimonial-card text-center p-5 shadow-xl rounded-4 bg-white border border-gray-100">
                                    <div class="relative w-32 h-32 mx-auto mb-6">
                                        <div class="absolute inset-0 bg-lime/20 rounded-2xl animate-pulse"></div>
                                        <div
                                            class="relative w-full h-full bg-white rounded-2xl shadow-lg border-2 border-lime flex items-center justify-center overflow-hidden">
                                            @if($member->image)
                                                <img src="{{ asset($member->image) }}" class="w-full h-full object-cover">
                                            @else
                                                <i data-lucide="user-round" class="w-16 h-16 text-lime"></i>
                                            @endif
                                        </div>
                                    </div>
                                    <h6 class="fw-bold mb-1 text-xl dynamic-text" data-en="{{ $member->name }}"
                                        data-ar="{{ $member->name_ar ?? $member->name }}">{{ $member->name }}</h6>
                                    <p class="text-lime fw-bold mb-3 dynamic-text" data-en="{{ $member->role }}"
                                        data-ar="{{ $member->role_ar ?? $member->role }}">{{ $member->role }}</p>
                                    <p class="lead fst-italic text-gray-700 mb-0 px-4 dynamic-text"
                                        data-en='"{{ $member->description }}"'
                                        data-ar='"{{ $member->description_ar ?? $member->description }}"'>
                                        "{{ $member->description }}"</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle p-3 shadow-lg"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle p-3 shadow-lg"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        </div>

    </section>
    <section id="impact" class="py-5 bg-white">
        <div class="container py-5">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold mb-3" data-i18n="testimonials.title"> Voices from our audience </h2>
                    <p class="text-muted" data-i18n="testimonials.desc">"Voices from our audience serve as a vital
                        bridge, connecting program creators with authentic insights that redefine their impact."</p>
                </div>
            </div>

            <div id="impactCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner">

                    @forelse($impacts as $index => $impact)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="d-flex justify-content-center">
                                <div
                                    class="testimonial-card text-center p-5 shadow-xl rounded-4 bg-white border border-gray-100">
                                    <div class="relative w-32 h-32 mx-auto mb-6">
                                        <div class="absolute inset-0 bg-lime/20 rounded-2xl animate-pulse"></div>
                                        <div
                                            class="relative w-full h-full bg-white rounded-2xl shadow-lg border-2 border-lime flex items-center justify-center overflow-hidden">
                                            @if($impact->image)
                                                <img src="{{ asset($impact->image) }}" class="w-full h-full object-cover">
                                            @else
                                                <i data-lucide="{{ $impact->icon ?? 'user-round' }}"
                                                    class="w-16 h-16 text-lime"></i>
                                            @endif
                                        </div>
                                    </div>
                                    <h6 class="fw-bold mb-2 text-xl dynamic-text" data-en="{{ $impact->name }}"
                                        data-ar="{{ $impact->name_ar ?? $impact->name }}">{{ $impact->name }}</h6>
                                    <p class="lead fst-italic text-gray-700 mb-0 px-4 dynamic-text"
                                        data-en="{{ $impact->text }}" data-ar="{{ $impact->text_ar ?? $impact->text }}">
                                        {{ $impact->text }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <!-- Fallback Testimonial 1 -->
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center">
                                <div
                                    class="testimonial-card text-center p-5 shadow-xl rounded-4 bg-white border border-gray-100">
                                    <div class="relative w-32 h-32 mx-auto mb-6">
                                        <div class="absolute inset-0 bg-lime/20 rounded-2xl animate-pulse"></div>
                                        <div
                                            class="relative w-full h-full bg-white rounded-2xl shadow-lg border-2 border-lime flex items-center justify-center">
                                            <i data-lucide="user-round" class="w-16 h-16 text-lime"></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bold mb-2 text-xl" data-i18n="testimonial1.name">Amira Hassan</h6>
                                    <p class="lead fst-italic text-gray-700 mb-0 px-4" data-i18n="testimonial1.text">
                                        "Digital Age changed our village. The new well means our children no longer have to
                                        walk miles for water. We are forever grateful."</p>
                                </div>
                            </div>
                        </div>
                    @endforelse

                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#impactCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle p-3 shadow-lg"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#impactCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle p-3 shadow-lg"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>







    </section>
    <!-- Services Section -->
    <section id="services" class="py-24 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 rounded-full bg-lime/10 text-lime font-semibold text-sm mb-4"
                    data-i18n="ourServices">Our Services</span>
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-6" data-i18n="servicesTitle">
                    Comprehensive
                    Tech Solutions</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-i18n="servicesSubtitle">
                    From concept to deployment, we deliver end-to-end technology solutions tailored to your business
                    needs.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="max-w-7xl mx-auto px-6 py-20">
                <div class="grid  grid-cols-1  sm:grid-cols-2  lg:grid-cols-3  gap-8" id="services-container">
                    @foreach($services as $service)
                        <div class="service-card rounded-3xl p-8 gradient-border" id="{{ $service->slug }}">
                            <div class="icon-container mb-6">
                                <div
                                    class="w-28 h-28 mx-auto bg-gradient-to-br from-lime/20 to-lime/5 rounded-3xl flex items-center justify-center">
                                    <!-- Default icon if not dynamic enough yet -->
                                    <i data-lucide="{{ $service->icon ?? 'code' }}" class="w-16 h-16 text-lime"></i>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 text-center dynamic-text"
                                data-en="{{ $service->name }}" data-ar="{{ $service->name_ar ?? $service->name }}">
                                {{ $service->name }}
                            </h3>
                            <p class="text-gray-600 text-center text-sm dynamic-text" data-en="{{ $service->description }}"
                                data-ar="{{ $service->description_ar ?? $service->description }}">
                                {{ $service->description }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="text-center mb-16" id="Portfolio">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-6" data-i18n="portfolioHeader">
                Our Portfolio
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto dynamic-text" data-i18n="portfolioSubtitle">
                These are our projects that we are working on and that have been finished.
            </p>
        </div>

        <div class="mt-4 news-slider">
            <button class="arrow-btn arrow-left" id="prevBtn" aria-label="Previous">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>

            <div class="news-viewport" aria-roledescription="carousel" aria-label="Latest news">
                <div class="news-track" id="track">
                    @foreach($projects as $project)
                        <article class="news-card">
                            <img class="news-img" src="{{ $project->image }}" alt="{{ $project->name }}" />
                            <h3 class="news-title dynamic-text" data-en="{{ $project->name }}"
                                data-ar="{{ $project->name_ar ?? $project->name }}">{{ $project->name }}</h3>
                            <p class="text-sm text-lime mb-2 dynamic-text" data-en="{{ $project->service->name }}"
                                data-ar="{{ $project->service->name_ar ?? $project->service->name }}">
                                {{ $project->service->name }}
                            </p>
                            <a class="read-more mt-auto" href="{{ route('project.show', $project->id) }}"
                                data-i18n="learnMoreBtn">Read More</a>
                        </article>
                    @endforeach
                </div>
            </div>

            <button class="arrow-btn arrow-right" id="nextBtn" aria-label="Next">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path d="M9 6L15 12L9 18" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </section>


    </main>

    </section>
    <!-- About Section -->
    <section id="about" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left: Image/Graphic -->
                <div class="relative">
                    <div class="relative z-10 bg-gradient-to-br from-lime/10 to-blue/10 rounded-3xl p-8">
                        <div class="grid grid-cols-2 gap-3">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <svg class="w-10 h-10 text-lime mb-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                                <h4 class="font-bold text-gray-900" data-i18n="innovation">Innovation</h4>
                                <p class="text-sm text-gray-600 mt-1" data-i18n="innovationDesc">Cutting-edge solutions
                                </p>
                            </div>
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <svg class="w-10 h-10 text-lime mb-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" style="color: rgba(189, 20, 124, 0.897);">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                </svg>
                                <h4 class="font-bold text-gray-900" data-i18n="Integrity">Integrity</h4>
                                <p class="text-sm text-gray-600 mt-1" data-i18n="Highsecurity">High security</p>
                            </div>
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <svg class="w-10 h-10 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    style="color: rgba(189, 20, 124, 0.897);">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.25 15L17.5 17.625l-2.625.75 2.625.75.75 2.625L19 19.125l2.625-.75-2.625-.75L18.25 15zM12.447 3.89l-.247.86a1.5 1.5 0 001.03 1.03l.86.247-.86.247a1.5 1.5 0 00-1.03 1.03l-.247.86-.247-.86a1.5 1.5 0 00-1.03-1.03l-.86-.247.86-.247a1.5 1.5 0 001.03-1.03l.247-.86z" />
                                </svg>
                                <h4 class="font-bold text-gray-900" data-i18n="Passion">Passion</h4>
                                <p class="text-sm text-gray-600 mt-1" data-i18n="forreaching"> for reaching the goal</p>
                            </div>

                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <svg class="w-10 h-10 text-blue mb-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" style="color:#00f0c8;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <h4 class="font-bold text-gray-900" data-i18n="teamwork">Teamwork</h4>
                                <p class="text-sm text-gray-600 mt-1" data-i18n="teamworkDesc">Collaborative approach
                                </p>
                            </div>
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <svg class="w-10 h-10 text-blue mb-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" style="color:#00f0c8;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <h4 class="font-bold text-gray-900" data-i18n="quality">Quality</h4>
                                <p class="text-sm text-gray-600 mt-1" data-i18n="qualityDesc">Premium deliverables</p>
                            </div>
                            <div class="bg-white rounded-2xl p-6 shadow-lg ">
                                <svg class="w-10 h-10 text-lime mb-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" style="color: rgba(189, 20, 124, 0.897);">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                                <h4 class="font-bold text-gray-900" data-i18n="speed">Speed</h4>
                                <p class="text-sm text-gray-600 mt-1" data-i18n="speedDesc">Fast turnaround</p>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative elements -->
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-lime/20 rounded-full blur-xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-blue/20 rounded-full blur-xl"></div>
                </div>

                <!-- Right: Content -->
                <div>
                    <span class="inline-block px-4 py-2 rounded-full bg-blue/10 text-blue font-semibold text-sm mb-4"
                        data-i18n="aboutUs">About Us</span>
                    <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-6" data-i18n="aboutTitle">Pioneering
                        Digital Transformation</h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed" data-i18n="aboutDesc">
                        Digital Age is a premier technology solutions provider dedicated to helping businesses thrive in
                        the digital landscape. With over 7 years of experience, our team of expert developers,
                        designers, and marketers deliver innovative solutions that drive real results.
                    </p>

                    <div class="space-y-4 mb-8">
                        <!-- Our Vision Section -->
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center"
                                style="background-color: rgba(189, 20, 124, 0.897);">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    style="color: white;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="about-box">
                                <h2 data-i18n="OurVision" class="font-bold text-gray-900"><b>Our Vision</b></h2>
                                <p data-i18n="Tobealeader">
                                    To be a leader in building intelligent digital solutions.
                                </p>

                            </div>
                        </div>

                        <!-- Our Mission Section -->
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center"
                                style="background-color: rgba(189, 20, 124, 0.897);">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    style="color: white;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="about-box">
                                <h2 data-i18n="OurMission" class="font-bold text-gray-900"><b>Our Mission</b></h2>
                                <p data-i18n="Wedeliver">
                                    We deliver integrated digital solutions.
                                </p>
                            </div>
                        </div>

                        <!-- Our Services Section -->
                        <div class="services-section">
                            <li class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full flex items-center justify-center"
                                    style="background-color: rgba(189, 20, 124, 0.897);">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        style="color: white;">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="about">
                                    <h2 data-i18n="OurServices" class="font-bold text-900">Our Services</h2>

                                    <p data-i18n="Integrated">
                                        Integrated digital solutions.
                                    </p>
                            </li>
                        </div>
                    </div>

    </section>

    <section id="contact" class="py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="color1">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 rounded-full bg-lime/10 text-lime font-semibold text-sm mb-4"
                    data-i18n="contactUs">Contact Us</span>
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-6" data-i18n="contactTitle">Let's Build
                    Something Amazing</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-i18n="contactSubtitle">
                    Ready to transform your digital presence? Get in touch with our team and let's discuss your project.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 max-w-5xl mx-auto" id="startProjectaction">
                <div class="bg-white rounded-3xl shadow-xl p-8">
                    <form class="space-y-6" action="send.php" method="post">

                        <div class="grid sm:grid-cols-2 gap-6">

                            <!-- Name -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2"
                                    data-i18n="formName">Name</label>
                                <input type="text" name="username" placeholder="Enter Your Name" required
                                    data-i18n="formNamePlaceholder"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200">
                            </div>

                            <!-- Email -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2"
                                    data-i18n="formEmail">Email</label>
                                <input type="email" name="email" placeholder="john@example.com" required
                                    data-i18n="formEmailPlaceholder"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200">
                            </div>

                            <!-- Phone -->
                            <div class="flex gap-2 items-center">
                                <label class="block text-sm font-medium text-gray-700 mb-2"
                                    data-i18n="formPhone">Phone</label>

                                <select name="country_code" class="w-25 px-3 py-3 rounded-lg border">
                                    <option value="+20">🇪🇬 +20</option>
                                    <option value="+966">🇸🇦 +966</option>
                                    <option value="+971">🇦🇪 +971</option>
                                    <option value="+965">🇰🇼 +965</option>
                                    <option value="+1">🇺🇸 +1</option>
                                </select>

                                <input type="tel" name="user_phone" placeholder="01478529763"
                                    class="w-32 px-2 py-3 rounded-lg border">
                            </div>

                        </div>

                        <!-- Service Type -->
                        <div class="flex gap-2 items-center">
                            <label class="block text-sm font-medium text-gray-700 mb-2" data-i18n="formService">Type of
                                Service</label>

                            <select name="service_type" id="contact-service-select"
                                class="w-45 px-3 py-3 rounded-lg border">
                                @foreach($services as $service)
                                    <option value="{{ $service->slug }}" class="dynamic-text" data-en="{{ $service->name }}"
                                        data-ar="{{ $service->name_ar ?? $service->name }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Subject -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2"
                                data-i18n="formSubject">Subject</label>
                            <input type="text" name="subject" placeholder="Project Inquiry"
                                data-i18n="formSubjectPlaceholder" class="w-full px-4 py-3 rounded-xl border">
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2"
                                data-i18n="formMessage">Message</label>
                            <textarea name="message" rows="4" placeholder="Tell us about your project..."
                                data-i18n="formMessagePlaceholder"
                                class="w-full px-4 py-3 rounded-xl border resize-none"></textarea>
                        </div>

                        <button type="submit" data-i18n="formSend"
                            class="btn-primary w-full py-4 rounded-xl text-white font-semibold text-lg">
                            Send Message
                        </button>

                    </form>
                </div>

                <!-- Contact Info -->
                <div class="space-y-6">
                    <div class="bg-gradient-to-br from-lime/10 to-blue/10 rounded-3xl p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6" data-i18n="getInTouch" id="typing1">Get in
                            Touch</h3>

                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-sm">
                                    <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900" data-i18n="emailUs">Email Us</h4>
                                    <p class="text-gray-600" id="display-email">{{ $contact->email }}</p>

                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-sm">
                                    <svg class="w-6 h-6 text-blue" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900" data-i18n="callUs">Call Us</h4>
                                    <p class="text-gray-600" id="display-phone1">{{ $contact->phone }}</p>
                                    @if($contact->whatsapp)
                                        <p class="text-gray-600" id="display-phone2">+{{ $contact->whatsapp }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-sm">
                                    <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900" data-i18n="visitUs">Visit Us</h4>
                                    <p class="text-gray-600 dynamic-text" id="display-address"
                                        data-en="{{ $contact->address }}"
                                        data-ar="{{ $contact->address_ar ?? $contact->address }}">
                                        {{ $contact->address }}
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="flex flex-wrap gap-4" id="social-icons-container">
                        <!-- LinkedIn -->
                        <a href="{{ $contact->linkedin ?? 'https://linkedin.com/in/yourprofile' }}" target="_blank"
                            id="link-linkedin"
                            class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-sm hover:bg-[#0077B5] hover:text-white transition-all duration-300 group">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>

                        <!-- Instagram -->
                        <a href="{{ $contact->instagram ?? 'https://instagram.com/yourprofile' }}" target="_blank"
                            id="link-instagram"
                            class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-sm hover:bg-gradient-to-tr hover:from-[#f9ce34] hover:via-[#ee2a7b] hover:to-[#6228d7] hover:text-white transition-all duration-300 group">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>

                        <!-- WhatsApp -->
                        <div class="relative" id="WhatsApp">
                            <button onclick="toggleWA()" id="link-whatsapp" class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-sm 
                               hover:bg-[#25D366] hover:text-white transition-all duration-300 group">
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 32 32">
                                    <path
                                        d="M16 2.4C8.5 2.4 2.4 8.5 2.4 16c0 2.7.8 5.2 2.3 7.4L2 30l6.8-1.8  c2 1.1 4.3 1.7 6.6 1.7 7.5 0 13.6-6.1 13.6-13.6S23.5 2.4 16 2.4zm0 23.3 c-2.1 0-4.1-.6-5.9-1.7l-.4-.2-4.1 1.1 1.1-4-.3-.4 c-1.3-1.9-2-4.2-2-6.6 0-6.4 5.2-11.6 11.6-11.6 S27.6 9.4 27.6 15.8 22.4 27.7 16 27.7zm6.2-8.6 c-.3-.2-1.9-.9-2.2-1-.3-.1-.5-.2-.7.2s-.8 1-.9 1.2  -.3.2-.6.1c-.3-.2-1.3-.5-2.5-1.6-.9-.8-1.6-1.9-1.8-2.2 -.2-.3 0-.5.1-.6.1-.1.3-.3.4-.4.1-.1.2-.3.3-.5 .1-.2 0-.3-.1-.5-.1-.2-.7-1.8-1-2.4  -.3-.6-.6-.5-.9-.5h-.7c-.2 0-.5.1-.7.3-.2.2-1 1-1 2.30 1.3 1 2.7 1.2 2.9.2.2 1.9 3 4.6 4.2  1.6.7 2.3.9 3.1.7.5-.1 1.9-.8 2.2-1.5  .3-.8.3-1.4.2-1.5-.1-.1-.3-.2-.6-.3z" />
                                </svg>
                            </button>
                            <div id="waMenu"
                                class="hidden absolute top-14 left-0 bg-white rounded-xl shadow-lg overflow-hidden w-40 z-50">
                                <a href="https://wa.me/201275018291" target="_blank"
                                    class="block px-4 py-2 hover:bg-gray-100" data-i18n="No1">
                                    📱+20 12 75018291
                                </a>
                                <a href="https://wa.me/201012345678" target="_blank"
                                    class="block px-4 py-2 hover:bg-gray-100" data-i18n="No2">
                                    📱+256 789 383140
                                </a>
                            </div>
                        </div>

                        <!-- Facebook -->
                        <a href="{{ $contact->facebook ?? 'https://facebook.com/yourprofile' }}" target="_blank"
                            id="link-facebook"
                            class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-sm hover:bg-[#1877F2] hover:text-white transition-all duration-300 group">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>

                        <!-- TikTok -->
                        <a href="{{ $contact->tiktok ?? 'https://www.tiktok.com/@yourpage' }}" target="_blank"
                            id="link-tiktok"
                            class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-sm hover:bg-black hover:text-white transition-all duration-300 group">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12.7 2h2.1c.3 2 1.5 3.7 3.4 4.3v2.2  c-1.7-.1-3.2-.7-4.5-1.8v7.6 c0 3-2.5 5.5-5.5 5.5S2.7 17.3 2.7 14.3  s2.5-5.5 5.5-5.5c.4 0 .7 0 1.1.1v2.5  c-.3-.1-.7-.1-1.1-.1-1.7 0-3 1.3-3 3 s1.3 3 3 3 3-1.3 3-3V2z" />
                            </svg>
                        </a>

                        <!-- YouTube -->
                        <a href="{{ $contact->youtube ?? 'https://www.youtube.com/@yourchannel' }}" target="_blank"
                            id="link-youtube"
                            class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-sm hover:bg-red-600 hover:text-white transition-all duration-300 group">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M23.5 6.2s-.2-1.7-.9-2.4c-.9-.9-1.9-.9-2.4-1  C16.9 2.5 12 2.5 12 2.5h0s-4.9 0-8.2.3  c-.5.1-1.5.1-2.4 1C.7 4.5.5 6.2.5 6.2S.2 8.1.2 10v1.9c0 1.9.3 3.8.3 3.8 s.2 1.7.9 2.4c.9.9 2.1.9 2.6 1 1.9.2 8 .3 8 .3s4.9 0 8.2-.3  c.5-.1 1.5-.1 2.4-1 .7-.7.9-2.4.9-2.4  s.3-1.9.3-3.8V10c0-1.9-.3-3.8-.3-3.8zM9.7 14.5V7.5l6.3 3.5-6.3 3.5z" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <!-- Brand -->
                <div class="md:col-span-1">
                    <a href="#" class="flex items-center gap-0 text-3xl font-bold tracking-tight mb-4">
                        <img src="Images/Untitled (1).png" alt="digitalagelogo" class="logo">
                        <span class="text-lime" data-i18n="brandDigital">Digital</span>
                        <span class="text-blue" data-i18n="brandAge">Age</span>
                    </a>
                    <p class="text-gray-400" data-i18n="footerDesc">Transforming businesses through innovative
                        technology solutions.</p>
                </div>
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4" data-i18n="quickLinks">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-gray-400 hover:text-lime transition" data-i18n="home">Home</a>
                        </li>
                        <li><a href="#services" class="text-gray-400 hover:text-blue transition"
                                data-i18n="services">Services</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-lime transition" data-i18n="about">About
                                Us</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-blue transition"
                                data-i18n="contact">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4" data-i18n="footerServices">Services</h4>
                    <ul class="space-y-3" id="footer-services-list">
                        @foreach($services as $service)
                            <li><a href="#{{ $service->slug }}"
                                    class="text-gray-400 hover:text-lime transition dynamic-text"
                                    data-en="{{ $service->name }}"
                                    data-ar="{{ $service->name_ar ?? $service->name }}">{{ $service->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <p data-i18n="copyright" class="text-gray-400 text-sm-center">© 2025 Digital Age. All rights reserved.</p>
            <div class="flex gap-6">
                <a href="privacy.html" class="text-gray-400 hover:text-lime text-sm transition"
                    data-i18n="privacy">Privacy Policy</a>
                <a href="teme.html" class="text-gray-400 hover:text-blue text-sm transition" data-i18n="terms">Terms of
                    Service</a>
            </div>
        </div>
        </div>
    </footer>

    <!-- Cinematic Intro Transition Overlay -->
    <div id="intro-transition" class="fixed inset-0 z-[100] bg-[#0f172a] hidden flex-col items-center justify-center">
        <div class="relative w-24 h-24 mb-6">
            <div class="absolute inset-0 border-4 border-[#00f0c8]/20 rounded-full"></div>
            <div class="absolute inset-0 border-4 border-t-[#00f0c8] rounded-full animate-spin"></div>
            <div class="absolute inset-0 flex items-center justify-center text-[#00f0c8] font-bold text-xl">DA</div>
        </div>
        <div class="text-white text-center space-y-2">
            <h3 class="text-2xl font-bold tracking-widest uppercase" data-i18n="preparingIntro">Preparing Digital
                Experience</h3>
            <div class="flex justify-center gap-1">
                <span class="w-1.5 h-1.5 bg-[#00f0c8] rounded-full animate-bounce [animation-delay:-0.3s]"></span>
                <span class="w-1.5 h-1.5 bg-[#00f0c8] rounded-full animate-bounce [animation-delay:-0.15s]"></span>
                <span class="w-1.5 h-1.5 bg-[#00f0c8] rounded-full animate-bounce"></span>
            </div>
        </div>
    </div>

    <script>
        // Intro Video Logic
        const introBtn = document.getElementById('view-intro-btn');
        const transitionOverlay = document.getElementById('intro-transition');

        if (introBtn && transitionOverlay) {
            introBtn.addEventListener('click', () => {
                const videoUrl = '{{ asset("Images/j.mp4") }}';

                // Show transition overlay first
                transitionOverlay.classList.remove('hidden');
                transitionOverlay.classList.add('flex');

                setTimeout(() => {
                    // Check if overlay video player already exists, if not create one
                    let videoOverlay = document.getElementById('video-overlay');
                    if (!videoOverlay) {
                        videoOverlay = document.createElement('div');
                        videoOverlay.id = 'video-overlay';
                        videoOverlay.className = 'fixed inset-0 z-[200] bg-black/95 flex items-center justify-center p-4 backdrop-blur-md transition-all duration-500 opacity-0 overflow-y-auto';
                        videoOverlay.innerHTML = `
                            <div class="relative w-full max-w-5xl bg-white rounded-[2rem] overflow-hidden shadow-2xl border border-gray-200 flex flex-col my-auto">
                                <!-- Modal Header -->
                                <div class="flex items-center justify-between p-6 sm:px-10 sm:py-6 bg-gradient-to-r from-gray-50 to-white border-b border-gray-100">
                                    <button onclick="const vo = document.getElementById('video-overlay'); vo.classList.add('opacity-0'); setTimeout(() => vo.remove(), 500);" 
                                        class="flex items-center gap-3 text-gray-600 hover:text-[#bd147c] transition-all group z-10 w-1/3">
                                        <div class="w-12 h-12 rounded-full bg-white shadow-sm border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:border-[#bd147c]/30 group-hover:shadow-md transition-all">
                                            <svg id="back-arrow-svg" class="w-6 h-6 ${currentLang === 'ar' ? 'rotate-180' : ''}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                            </svg>
                                        </div>
                                        <span class="font-bold text-lg pointer-events-none" data-i18n="back">${translations[currentLang].back}</span>
                                    </button>

                                    <!-- Language Toggle Button -->
                                    <div class="flex justify-center w-1/3">
                                       <button onclick="toggleLanguage(); document.getElementById('video-lang-text').innerText = currentLang === 'en' ? 'العربية' : 'English'; const svg = document.getElementById('back-arrow-svg'); if(svg) { currentLang === 'ar' ? svg.classList.add('rotate-180') : svg.classList.remove('rotate-180'); }" class="px-5 py-2.5 bg-white hover:bg-gray-50 text-gray-700 shadow-sm rounded-full font-bold text-sm transition-all flex items-center gap-2 border border-gray-200 hover:border-[#00f0c8]">
                                           <svg class="w-4 h-4 text-[#bd147c]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                                           <span id="video-lang-text">${currentLang === 'en' ? 'العربية' : 'English'}</span>
                                       </button>
                                    </div>

                                    <div class="text-[end] z-10 w-1/3">
                                        <h2 data-i18n="introHeading" class="text-sm sm:text-base font-black tracking-tight mb-1 text-[#bd147c]">
                                            ${translations[currentLang].introHeading}
                                        </h2>
                                        <p class="text-sm font-bold text-gray-400 uppercase tracking-widest">Digital Age</p>
                                    </div>
                                </div>

                                <div class="p-6 sm:p-10 flex flex-col items-center justify-center bg-gray-50/50 relative">
                                    <!-- Decorative Elements -->
                                    <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-bl from-[#00f0c8]/10 to-transparent rounded-bl-full pointer-events-none"></div>
                                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-gradient-to-tr from-[#bd147c]/10 to-transparent rounded-tr-full pointer-events-none"></div>

                                    <!-- Video Container with brand styling -->
                                    <div class="relative w-full max-w-4xl aspect-video rounded-3xl overflow-hidden bg-black shadow-[0_20px_50px_rgba(0,0,0,0.1)] border-4 border-white z-10">
                                        <video controls autoplay class="w-full h-full object-cover">
                                            <source src="${videoUrl}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <div class="absolute top-6 left-6 pointer-events-none">
                                            <span class="px-4 py-2 rounded-xl bg-gradient-to-r from-[#bd147c] to-[#00f0c8] text-white text-xs font-black uppercase tracking-widest shadow-lg">Intro</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        document.body.appendChild(videoOverlay);

                        // Fade in video overlay and hide transition
                        setTimeout(() => {
                            videoOverlay.classList.remove('opacity-0');
                            videoOverlay.classList.add('opacity-100');
                            transitionOverlay.classList.add('hidden');
                            transitionOverlay.classList.remove('flex');
                        }, 100);
                    }
                }, 1500); // Wait for transition animation
            });
        }

        // Translations
        const translations = {
            en: {
                webDev1: "web application",
                digitalM: "Digital Marketing",
                SystemsP: "Systems Programming",
                softwareDev1: "Software Development",
                mobileapp: "mobile application",
                graphicDesign1: "graphicDesign",

                portfolioSubtitle: "These are our projects that we are working on and that have been finished.",

                mobileSolution: "mobile application",
                phone: "phone",
                home: "Home",
                tproject: "type of service",
                mobileSolutionsDesc: "Smart apps and effective communication via phone to boost your busines.",
                Highsecurity: "High security",
                OurVision: "Our Vision",
                Wedeliver: " We deliver integrated digital solutions.",
                Integrated: " Integrated digital solutions.",
                Tobealeader: " To be a leader in building intelligent digital solutions.",
                forreaching: "for reaching the goal",
                services: "Services",
                Passion: "Passion",
                Integrity: "Integrity",
                about: "About",
                portfolio: "Portfolio",
                contact: "Contact",
                getStarted: "Get Started",
                innovatingFuture: "✦ Innovating the Future",
                transformDigital: "Transform Your Digital Vision into Reality",

                heroSubtitle: "We craft cutting-edge software solutions that drive business growth. From web applications to digital marketing, we power your success in the digital age.",
                startProject: "Start Your Project",
                startProjectBtn: "Start Your Project",
                viewPortfolio: "View Intro",
                viewPortfolioBtn: "View Intro",
                projectsCompleted: "Projects Completed",
                projectsPreview: "Latest Projects & Works",
                happyClients: "Happy Clients",
                teamMembers: "Team Members",
                yearsExperience: "Years Experience",
                ourServices: "✦ Our Services",
                servicesTitle: "Digital Age: For Small and Large Works",
                servicesSubtitle: "From concept to deployment, we deliver comprehensive technology solutions tailored to your business needs.",
                softwareDev: "Software Development",
                softwareDevDesc: "Custom software solutions built with modern frameworks and best practices.",
                webDev: "Web Applications",
                webDevDesc: "Responsive, fast, and scalable web applications for your business.",
                systemsProg: "Systems Programming",
                systemsProgDesc: "High-performance systems programming and optimization solutions.",
                graphicDesign: "Graphic Design",
                graphicDesignDesc: "Creative designs that elevate your brand identity and visual presence.",
                digitalMarketing: "Digital Marketing",
                digitalMarketingDesc: "Data-driven marketing strategies to grow your online presence.",
                aboutUs: "✦ About Us",
                aboutTitle: "Pioneering Digital Transformation",
                aboutDesc: "Digital Age is a premier technology solutions provider dedicated to helping businesses thrive in the digital landscape. With over 15 years of experience, our team of expert developers, designers, and marketers deliver innovative solutions that drive real results.",
                innovation: "Innovation",
                innovationDesc: "Cutting-edge solutions",
                teamwork: "Teamwork",
                teamworkDesc: "Collaborative approach",
                quality: "Quality",
                qualityDesc: "Premium deliverables",
                speed: "Speed",
                speedDesc: "Fast turnaround",
                aboutFeature1: "Expert team with diverse technical backgrounds",
                aboutFeature2: "Agile development methodology",
                aboutFeature3: "24/7 dedicated support",
                mobileSolutions: "mobileSolutions",
                learnMore: "Learn More",
                learnMoreBtn: "Learn More",
                contactUs: "✦ Contact Us",
                contactTitle: "Let's Build Something Amazing",
                contactSubtitle: "Ready to transform your digital presence? Get in touch with our team and let's discuss your project.",
                formName: "Name",
                OurServices: "Our Services",
                OurMission: "Our Mission",
                formEmail: "Email",
                formSubject: "Subject",
                formMessage: "Message",
                sendMessage: "Send Message",
                getInTouch: "Get in Touch",
                emailUs: "Email Us",
                callUs: "Call Us",
                visitUs: "Visit Us",
                footerDesc: "Transforming businesses through innovative technology solutions .",
                quickLinks: "Quick Links",
                footerServices: "Services",
                newsletter: "Newsletter",
                newsletterDesc: "Stay updated with our latest news and offers.",
                copyright: "©2025 Digital Age. All rights reserved.",
                privacy: "Privacy Policy",
                impact: "Impact",
                "membersSection.title": "Our Team Members",
                "membersSection.desc": '"Digital Age boasts a well-integrated team, efficiently handling all roles and responsibilities to deliver outstanding results"',
                "testimonials.title": "Voices from our audience",
                "testimonials.desc": '"Voices from our audience serve as a vital bridge, connecting program creators with authentic insights that redefine their impact."',
                "testimonial1.name": "Amira Hassan",
                "testimonial1.text": '"Digital Age changed our village. The new well means our children no longer have to walk miles for water. We are forever grateful."',
                "testimonial2.name": "David Miller",
                "testimonial2.text": '"I\'ve donated to many NGOs, but the transparency and regular updates from Digital Age make me confident that my money is truly helping."',
                "testimonial3.name": "Dr. Fatima Ali",
                "testimonial3.text": '"Working with Digital Age has been an honor. The team on the ground is dedicated and truly cares about the people they serve."',
                No1: "📱+20 12 75018291",
                No2: "📱+256 789 383140",
                terms: "Terms of Service",
                portfolioHeader: "Our Best Projects",
                introHeading: "Digital Age for Small and Large Works",
                back: "Back",
                preparingIntro: "Preparing Digital Experience",
                jobs: "Jobs",
                Members: "Members",
                careersTitle: "Career Opportunities",
                careersDesc: "Join our team of experts and researchers to build the future of digital solutions.",
                applyNow: "Apply Now",
                noJobs: "No open positions at the moment. Keep checking!",
                brandDigital: "Digital",
                brandAge: "Age",
                formName: "Name",
                formNamePlaceholder: "Enter Your Name",
                formEmail: "Email",
                formEmailPlaceholder: "john@example.com",
                formPhone: "Phone",
                formService: "Type of Service",
                formSubject: "Subject",
                formSubjectPlaceholder: "Project Inquiry",
                formMessage: "Message",
                formMessagePlaceholder: "Tell us about your project...",
                formSend: "Send Message",
            },
            ar: {
                home: "الرئيسية",
                services: "خدماتنا",
                about: "من نحن",
                portfolio: "أعمالنا",
                contact: "اتصل بنا",
                phone: "تلفون",
                webDev1: "تطبيقات الويب",
                digitalM: "تسويق الاكنروني",
                SystemsP: "برمجة الأنظمة",
                softwareDev1: "تطوير البرمجيات",
                mobileapp: "تطبيق الهاتف",
                tproject: "نوع الخدمه",
                graphicDesign1: "التصميم الجرافيكي",
                portfolioSubtitle: "هذه هي مشاريعنا التي نعمل عليها والتي تم الانتهاء منها.",
                Wedeliver: "نقدّم حلولًا رقمية متكاملة تساعد الشركات على النمو",
                Integrity: "النزاهه",
                Highsecurity: " امان عالي",
                Integrated: "حلول رقمية متكاملة.",
                Passion: "الشغف",
                OurVision: "رؤيتنا",
                Tobealeader: "أن نكون روادًا في بناء الحلول الرقمية الذكية.",
                OurMission: "رسالتنا",
                forreaching: " للوصول للهدف",

                OurServices: "خدماتنا",
                OurMission: "رسالتنا",
                home: "الرئيسية",
                services: "خدماتنا",
                about: "من نحن",
                portfolio: "أعمالنا",
                contact: "اتصل بنا",
                getStarted: "ابدأ الآن",
                innovatingFuture: "✦ نصنع المستقبل",
                transformDigital: "حول رؤيتك الرقمية الي حقيقة ملموسة",

                heroSubtitle: "نصنع حلولاً برمجية متطورة تدفع نمو الأعمال. من تطبيقات الويب إلى التسويق الرقمي، نحن قوة نجاحك في العصر الرقمي.",
                startProject: "ابدأ مشروعك",
                startProjectBtn: "ابدأ مشروعك",
                viewPortfolio: "معاينة المقدمة",
                viewPortfolioBtn: "معاينة المقدمة",
                projectsCompleted: "مشروع مكتمل",
                projectsPreview: "أحدث المشاريع والأعمال",
                happyClients: "عميل سعيد",
                teamMembers: "فريق العمل",
                yearsExperience: "سنوات الخبرة",
                ourServices: "✦ خدماتنا",
                servicesTitle: "ديجيتال آيدج للأعمال الكبيرة والصغيرة",
                servicesSubtitle: "من التصميم إلى الإطلاق، نقدم حلول تقنية متكاملة مصممة خصيصاً لاحتياجات عملك.",
                softwareDev: "تطوير البرمجيات",
                softwareDevDesc: "حلول برمجية مخصصة مبنية على أطر عمل حديثة وأفضل الممارسات.",
                webDev: "تطبيقات الويب",
                webDevDesc: "تطبيقات ويب سريعة وقابلة للتطوير تناسب عملك.",
                systemsProg: "برمجة الأنظمة",
                systemsProgDesc: "حلول برمجة وتحسين الأنظمة عالية الأداء.",
                graphicDesign: "التصميم الجرافيكي",
                graphicDesignDesc: "تصاميم إبداعية ترتقي بهوية علامتك التجارية.",
                digitalMarketing: "التسويق الرقمي",
                digitalMarketingDesc: "استراتيجيات تسويق مبنية على البيانات لتنمية حضورك الرقمي.",
                mobileSolutions: " تطبيق الهاتف",
                aboutUs: "✦ من نحن",
                aboutTitle: "رائدة التحول الرقمي",
                aboutDesc: "  عصر الرقمي هي مزود حلول تقنية متميز مكرس لمساعدة الشركات على الازدهار في المشهد الرقمي. مع أكثر من 7 عاماً من الخبرة، يقدم فريقنا من المطورين والمصممين والمسوقين المبتكرين حلولاً مبتكرة تحقق نتائج ملموسة.",
                innovation: "الابتكار",
                innovationDesc: "حلول متطورة",
                teamwork: "العمل الجماعي",
                teamworkDesc: "نهج تعاوني",
                quality: "الجودة",
                qualityDesc: "نتائج متميزة",
                speed: "السرعة",
                speedDesc: "تسليم سريع",
                aboutFeature1: "فريق خبراء من خلفيات تقنية متنوعة",
                aboutFeature2: "منهجية تطوير رشيقة",
                aboutFeature3: "دعم على مدار الساعة",
                learnMore: "اعرف المزيد",
                learnMoreBtn: "اعرف المزيد",
                contactUs: "✦ اتصل بنا",
                contactTitle: "لنبني شيئاً مذهلاً معاً",
                contactSubtitle: "مستعد لتحويل حضورك الرقمي؟ تواصل مع فريقنا لنتحدث عن مشروعك.",
                formName: "الاسم",
                formEmail: "البريد الإلكتروني",
                formSubject: "الموضوع",
                formMessage: "الرسالة",
                sendMessage: "إرسال الرسالة",
                getInTouch: "تواصل معنا",
                emailUs: "راسلنا",
                callUs: "اتصل بنا",
                visitUs: "زرنا",
                footerDesc: "نحوّل الشركات من خلال حلول تقنية مبتكرة  ",
                quickLinks: "روابط سريعة",
                footerServices: "الخدمات",
                newsletter: "النشرة الإخبارية",
                newsletterDesc: "تابع آخر أخبارنا وعروضنا.",
                copyright: "© ٢٠٢٥ Digital Age. جميع الحقوق محفوظة.",
                mobileSolutionsDesc: "عمل تطبيقات ذكية وتواصل فعال عبر الهاتف لتعزيز أعمالك",
                privacy: "سياسة الخصوصية",
                impact: "تأثيرنا",
                "membersSection.title": "فريق العمل",
                "membersSection.desc": '"تفتخر ديجيتال آيدج بفريق عمل متكامل، يدير كافة الأدوار والمسؤوليات بكفاءة عالية لتقديم نتائج متميزة"',
                "testimonials.title": "أصوات من جمهورنا",
                "testimonials.desc": '"أصوات جمهورنا تعمل كجسر حيوي، يربط مبتكري البرامج برؤى أصيلة تعيد تعريف تأثيرهم."',
                "testimonial1.name": "أميرة حسن",
                "testimonial1.text": '"لقد غيرت ديجيتال آيدج قريتنا. البئر الجديد يعني أن أطفالنا لم يعودوا بحاجة للمشي أميالاً للحصول على الماء. نحن ممتنون دائماً."',
                "testimonial2.name": "ديفيد ميلر",
                "testimonial2.text": '"لقد تبرعت للعديد من المنظمات غير الحكومية، لكن الشفافية والتحديثات المنتظمة من ديجيتال آيدج تجعلني واثقاً من أن أموالي تساعد حقاً."',
                "testimonial3.name": "د. فاطمة علي",
                "testimonial3.text": '"العمل مع ديجيتال آيدج كان شرفاً لنا. الفريق على أرض الواقع مكرس ويهتم حقاً بالأشخاص الذين يخدمونهم."',
                No1: "📱+20 12 75018291",
                No2: "📱+256 789 383140",
                terms: "شروط الخدمة",
                portfolioHeader: "أفضل مشاريعنا",
                introHeading: "ديجيتال آيدج للأعمال الكبيرة والصغيرة",
                back: "رجوع",
                preparingIntro: "جاري تحضير التجربة الرقمية",
                jobs: "الوظائف",
                Members: "فريقنا",
                careersTitle: "فرص العمل المتاحة",
                careersDesc: "انضم إلى فريق الخبراء والباحثين لدينا لبناء مستقبل الحلول الرقمية.",
                applyNow: "قدم الآن",
                noJobs: "لا توجد وظائف شاغرة حالياً. تابعنا للمزيد!",
                brandDigital: "العصر",
                brandAge: "الرقمي",
                formName: "الاسم",
                formNamePlaceholder: "أدخل اسمك",
                formEmail: "البريد الإلكتروني",
                formEmailPlaceholder: "البريد الإلكتروني",
                formPhone: "الهاتف",
                formService: "نوع الخدمة",
                formSubject: "الموضوع",
                formSubjectPlaceholder: "استفسار عن مشروع",
                formMessage: "الرسالة",
                formMessagePlaceholder: "أخبرنا عن مشروعك...",
                formSend: "إرسال الرسالة",
            }
        };
        //button start
        const start = document.getElementById('start');

        let currentLang = 'en';

        // Language Toggle
        function toggleLanguage(lang) {
            if (lang) {
                currentLang = lang;
            } else {
                currentLang = currentLang === 'en' ? 'ar' : 'en';
            }

            // Save preference
            localStorage.setItem('digitalage_lang', currentLang);

            // Update direction
            document.documentElement.dir = currentLang === 'ar' ? 'rtl' : 'ltr';
            document.documentElement.lang = currentLang;

            // Update language switcher
            document.getElementById('lang-text').textContent = currentLang === 'en' ? 'English' : 'العربية';
            document.getElementById('lang-flag').textContent = currentLang === 'en' ? '🇺🇸' : '🇸🇦';

            // Update all translatable elements
            document.querySelectorAll('[data-i18n]').forEach(element => {
                const key = element.getAttribute('data-i18n');
                if (translations[currentLang][key]) {
                    // Handle placeholder for inputs
                    if (element.tagName === 'INPUT' || element.tagName === 'TEXTAREA') {
                        element.placeholder = translations[currentLang][key];
                    } else {
                        element.textContent = translations[currentLang][key];
                    }
                }
            });

            // Update dynamic components with data-en / data-ar attributes
            document.querySelectorAll('.dynamic-text').forEach(element => {
                if (element.hasAttribute('data-' + currentLang)) {
                    element.innerText = element.getAttribute('data-' + currentLang);
                }
            });

            // Dynamic Date Handling
            document.querySelectorAll('.dynamic-date').forEach(element => {
                const dateStr = element.getAttribute('data-date');
                if (dateStr) {
                    const date = new Date(dateStr);
                    const formatted = date.toLocaleDateString(currentLang === 'ar' ? 'ar-EG' : 'en-US', {
                        month: 'short',
                        day: 'numeric',
                        year: 'numeric'
                    });
                    element.textContent = formatted;
                }
            });

            // Adjust typing animation for different text lengths
            const typingSpan = document.getElementById('typing');
            if (typingSpan) {
                const text = translations[currentLang][typingSpan.getAttribute('data-i18n')];
                const charCount = text ? text.length : 31;
                typingSpan.style.width = charCount + 'ch';
                typingSpan.style.animation = `typing 5s steps(${charCount}) forwards`; // Remove infinite for better UX
            }

            if (typeof updateSlider === 'function') updateSlider();
        }

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Newsletter Subscribe
        function subscribeNewsletter() {
            const email = document.getElementById('newsletter-email').value;
            if (email) {
                alert(currentLang === 'en' ? 'Thank you for subscribing!' : 'شكراً لاشتراكك!');
                document.getElementById('newsletter-email').value = '';
            }
        }

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.service-card').forEach(card => {
            card.classList.add('transition', 'duration-700', 'opacity-0', 'translate-y-10');
            observer.observe(card);
        });

        Start.addEventListener("click", function (e) {

            startProjectaction.style.border = "2px solid rgba(189, 20, 124, 0.897)";
            window.location.href = "#startProjectaction";
        });

        // Portfolio Slider Logic
        const track = document.getElementById('track');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');

        let currentIndex = 0;
        let autoSlideInterval;

        function updateSlider() {
            const cards = document.querySelectorAll('.news-card');
            if (!track || !cards.length) return;

            const gap = 20; // Matches CSS gap
            const cardWidth = cards[0].offsetWidth;
            const offset = currentIndex * (cardWidth + gap);

            track.style.transform = currentLang === 'ar'
                ? `translateX(${offset}px)`
                : `translateX(-${offset}px)`;

            prevBtn.style.opacity = currentIndex === 0 ? "0.3" : "1";
            prevBtn.style.pointerEvents = currentIndex === 0 ? "none" : "auto";

            nextBtn.style.opacity = currentIndex === cards.length - 1 ? "0.3" : "1";
            nextBtn.style.pointerEvents = currentIndex === cards.length - 1 ? "none" : "auto";
        }

        function startAutoSlide() {
            stopAutoSlide();
            autoSlideInterval = setInterval(() => {
                const cards = document.querySelectorAll('.news-card');
                if (currentIndex < cards.length - 1) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                updateSlider();
            }, 4000); // More dynamic 4-second interval
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        nextBtn.addEventListener('click', () => {
            stopAutoSlide();
            const cards = document.querySelectorAll('.news-card');
            if (currentIndex < cards.length - 1) {
                currentIndex++;
                updateSlider();
            }
            startAutoSlide();
        });

        prevBtn.addEventListener('click', () => {
            stopAutoSlide();
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
            startAutoSlide();
        });

        if (track) {
            track.addEventListener('mouseenter', stopAutoSlide);
            track.addEventListener('mouseleave', startAutoSlide);
        }

        window.addEventListener('resize', updateSlider);

        // Language Initialization
        const savedLang = localStorage.getItem('digitalage_lang') || 'en';
        toggleLanguage(savedLang);

        document.addEventListener('DOMContentLoaded', () => {
            updateSlider();
            startAutoSlide();
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });

        function toggleWA() {
            document.getElementById("waMenu").classList.toggle("hidden");
        }

        document.addEventListener("click", function (e) {
            if (!e.target.closest(".relative")) {
                document.getElementById("waMenu").classList.add("hidden");
            }
        });

    </script>

    </script>
</body>

</html>