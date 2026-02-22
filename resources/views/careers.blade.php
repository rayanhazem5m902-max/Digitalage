<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Digital Age</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('st5.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        :root {
            --lime: #00f0c8;
            --blue: rgba(189, 20, 124, 0.897);
            --dark: #0f172a;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }

        .career-card {
            background: white;
            border-radius: 24px;
            padding: 2rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        }

        .career-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            border-color: var(--lime);
        }

        .badge-category {
            background: rgba(0, 240, 200, 0.1);
            color: #2f9181;
            padding: 0.5rem 1rem;
            border-radius: 99px;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .badge-duration {
            background: rgba(189, 20, 124, 0.1);
            color: var(--blue);
            padding: 0.5rem 1rem;
            border-radius: 99px;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .btn-apply {
            background: var(--dark);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
            text-align: center;
        }

        .btn-apply:hover {
            background: var(--lime);
            color: var(--dark);
            transform: scale(1.02);
        }

        .hero-section {
            background: radial-gradient(circle at 10% 20%, rgba(0, 240, 200, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 90% 80%, rgba(189, 20, 124, 0.05) 0%, transparent 50%);
            position: relative;
            overflow: hidden;
        }

        /* Override some st5.css if needed to match jobs theme */
        .text-lime {
            color: var(--lime) !important;
        }

        .text-blue {
            color: var(--blue) !important;
        }
    </style>
</head>

<body class="bg-slate-50 overflow-x-hidden">
    <!-- Header (Exactly like welcome.blade.php) -->
    <header class="fixed top-0 left-0 right-0 z-50 glass">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <img id="dig" src="{{ asset('Images/Untitled (1).png') }}" alt="digitalagelogo" class="logo">
                    <a href="{{ route('home') }}" class="flex items-center gap-0 text-3xl font-bold tracking-tight">
                        <span class="text-lime">Digital</span>
                        <span class="text-blue">Age</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('home') }}#home" class="nav-link text-gray-700 font-medium"
                        data-i18n="home">Home</a>
                    <a href="{{ route('home') }}#services" class="nav-link text-gray-700 font-medium"
                        data-i18n="services">Services</a>
                    <a href="{{ route('home') }}#about" class="nav-link text-gray-700 font-medium"
                        data-i18n="about">About</a>
                    <a href="{{ route('home') }}#Portfolio" class="nav-link text-gray-700 font-medium"
                        data-i18n="portfolio">Portfolio</a>
                    <a href="{{ route('home') }}#contact" class="nav-link text-gray-700 font-medium"
                        data-i18n="contact">Contact</a>
                    <a href="{{ route('home') }}#impact" class="nav-link text-gray-700 font-medium"
                        data-i18n="impact">Impact</a>
                    <a href="{{ route('careers') }}" class="nav-link text-blue font-bold" data-i18n="jobs">Jobs</a>
                    <a href="{{ route('home') }}#members" class="nav-link text-gray-700 font-medium"
                        data-i18n="Members">Members</a>
                </div>

                <!-- Right Side -->
                <div class="flex items-center gap-4">
                    <button onclick="toggleLanguage()"
                        class="lang-switch px-4 py-2 rounded-full text-sm font-semibold flex items-center gap-2">
                        <span id="lang-flag">🇺🇸</span>
                        <span id="lang-text">English</span>
                    </button>

                    <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <div class="flex flex-col gap-3">
                    <a href="{{ route('home') }}#home" class="nav-link text-gray-700 font-medium py-2"
                        data-i18n="home">Home</a>
                    <a href="{{ route('home') }}#services" class="nav-link text-gray-700 font-medium py-2"
                        data-i18n="services">Services</a>
                    <a href="{{ route('home') }}#about" class="nav-link text-gray-700 font-medium py-2"
                        data-i18n="about">About</a>
                    <a href="{{ route('home') }}#Portfolio" class="nav-link text-gray-700 font-medium py-2"
                        data-i18n="portfolio">Portfolio</a>
                    <a href="{{ route('home') }}#contact" class="nav-link text-gray-700 font-medium py-2"
                        data-i18n="contact">Contact</a>
                    <a href="{{ route('home') }}#impact" class="nav-link text-gray-700 font-medium py-2"
                        data-i18n="impact">Impact</a>
                    <a href="{{ route('careers') }}" class="nav-link text-blue font-bold py-2" data-i18n="jobs">Jobs</a>
                    <a href="{{ route('home') }}#members" class="nav-link text-gray-700 font-medium py-2"
                        data-i18n="Members">Members</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero-section pt-40 pb-20 px-4">
        <!-- Floating Shapes -->
        <div class="float-shape top-1/4 left-10 w-20 h-20 bg-lime/10 rounded-full blur-xl"></div>
        <div class="float-shape top-1/3 right-20 w-32 h-32 bg-blue/10 rounded-full blur-xl"
            style="animation-delay: 1s;"></div>

        <div class="max-w-7xl mx-auto text-center relative z-10">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full gradient-border mb-8">
                <span class="w-2 h-2 bg-lime rounded-full animate-pulse"></span>
                <span class="text-sm font-medium text-gray-600" data-i18n="careersTitle">Career Opportunities</span>
            </div>

            <h1 class="text-5xl md:text-6xl font-black mb-6" style="color: var(--dark)">
                <span data-i18n="careersTitle">Career Opportunities</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed" data-i18n="careersDesc">
                Join our team of experts and researchers to build the future of digital solutions.
            </p>
        </div>
    </section>

    <!-- Jobs Grid -->
    <section class="pb-20 px-4">
        <div class="max-w-7xl mx-auto">
            @if($careers->isEmpty())
                <div class="text-center py-20 bg-white rounded-3xl border border-dashed border-gray-300">
                    <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="briefcase" class="w-10 h-10 text-gray-300"></i>
                    </div>
                    <p class="text-gray-500 text-lg" data-i18n="noJobs">No open positions at the moment. Keep checking!</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($careers as $job)
                        <div class="career-card" data-aos="fade-up">
                            <div class="flex justify-between items-start mb-6">
                                <span
                                    class="px-3 py-1.5 bg-purple-50 text-purple-600 rounded-lg text-xs font-black border border-purple-100 uppercase dynamic-text"
                                    data-en="{{ $job->category }}"
                                    data-ar="{{ $job->category_ar ?? $job->category }}">{{ $job->category }}</span>
                                <span class="badge-duration dynamic-text" data-en="{{ $job->duration }}"
                                    data-ar="{{ $job->duration_ar ?? $job->duration }}">
                                    <i data-lucide="clock" class="w-4 h-4 inline-block mr-1"></i>
                                    {{ $job->duration }}
                                </span>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-2 dynamic-text" data-en="{{ $job->title }}"
                                data-ar="{{ $job->title_ar ?? $job->title }}">{{ $job->title }}</h3>

                            @if($job->service)
                                <div class="flex items-center gap-2 text-gray-600 text-sm font-bold mb-4">
                                    <i data-lucide="briefcase" class="w-4 h-4 text-purple-500"></i>
                                    <span class="text-gray-500" data-i18n="service">Service</span>:
                                    <span class="text-purple-600 dynamic-text" data-en="{{ $job->service->name }}"
                                        data-ar="{{ $job->service->name_ar ?? $job->service->name }}">{{ $job->service->name  }}</span>
                                </div>
                            @endif

                            <div class="flex items-center gap-2 text-gray-400 text-xs font-bold">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                <span data-i18n="posted">Posted</span>: <span class="dynamic-date"
                                    data-date="{{ $job->created_at->toIso8601String() }}">{{ $job->created_at->format('M d, Y') }}</span>
                            </div>
                            @if($job->deadline)
                                <div class="flex items-center gap-2 text-red-500 text-xs font-bold">
                                    <i data-lucide="calendar-x" class="w-4 h-4"></i>
                                    <span data-i18n="deadline">Deadline</span>:
                                    <span class="dynamic-date"
                                        data-date="{{ $job->deadline }}">{{ \Carbon\Carbon::parse($job->deadline)->format('M d, Y') }}</span>
                                </div>
                            @endif
                            <div class="text-gray-600 mb-8 whitespace-pre-line dynamic-text" data-en="{{ $job->description }}"
                                data-ar="{{ $job->description_ar ?? $job->description }}">
                                {!! nl2br(e($job->description ?? 'No description provided.')) !!}
                            </div>
                            <a href="{{ route('career.show', $job->id) }}"
                                class="btn-primary px-8 py-3 rounded-xl text-white font-semibold text-center block text-decoration-none"
                                data-i18n="applyNow">Apply Now</a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#0f172a] text-white py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex items-center justify-center mb-8">
                <img src="{{ asset('Images/Untitled (1).png') }}" alt="logo" class="h-12 w-auto mr-2">
                <a href="{{ route('home') }}" class="flex items-center gap-0 text-3xl font-bold tracking-tight">
                    <span class="text-lime">Digital</span>
                    <span class="text-blue">Age</span>
                </a>
            </div>
            <p class="text-gray-400 mb-8 max-w-md mx-auto" data-i18n="footerDesc">Transforming businesses through
                innovative technology solutions.</p>
            <div class="border-t border-gray-800 pt-8">
                <p class="text-gray-500" data-i18n="copyright">© 2025 Digital Age. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        const translations = {
            en: {
                home: "Home",
                services: "Services",
                about: "About",
                portfolio: "Portfolio",
                contact: "Contact",
                impact: "Impact",
                jobs: "Jobs",
                Members: "Members",
                careersTitle: "Career Opportunities",
                careersDesc: "Join our team of experts and researchers to build the future of digital solutions.",
                applyNow: "Apply Now",
                noJobs: "No open positions at the moment. Keep checking!",
                service: "Service",
                posted: "Posted",
                deadline: "Deadline",
                footerDesc: "Transforming businesses through innovative technology solutions.",
                copyright: "© 2025 Digital Age. All rights reserved.",
            },
            ar: {
                home: "الرئيسية",
                services: "خدماتنا",
                about: "من نحن",
                portfolio: "أعمالنا",
                contact: "اتصل بنا",
                impact: "تأثيرنا",
                jobs: "الوظائف",
                Members: "فريقنا",
                careersTitle: "فرص العمل المتاحة",
                careersDesc: "انضم إلى فريق الخبراء والباحثين لدينا لبناء مستقبل الحلول الرقمية.",
                applyNow: "قدم الآن",
                noJobs: "لا توجد وظائف شاغرة حالياً. تابعنا للمزيد!",
                service: "الخدمة",
                posted: "نُشر في",
                deadline: "الموعد النهائي",
                footerDesc: "نحوّل الشركات من خلال حلول تقنية مبتكرة.",
                copyright: "© ٢٠٢٥ Digital Age. جميع الحقوق محفوظة.",
            }
        };

        let currentLang = localStorage.getItem('digitalage_lang') || 'en';

        function toggleLanguage(lang) {
            if (lang) {
                currentLang = lang;
            } else {
                currentLang = currentLang === 'en' ? 'ar' : 'en';
            }

            localStorage.setItem('digitalage_lang', currentLang);
            updateUI();
        }

        function updateUI() {
            document.documentElement.dir = currentLang === 'ar' ? 'rtl' : 'ltr';
            document.documentElement.lang = currentLang;

            document.getElementById('lang-text').textContent = currentLang === 'en' ? 'English' : 'العربية';
            document.getElementById('lang-flag').textContent = currentLang === 'en' ? '🇺🇸' : '🇸🇦';

            document.querySelectorAll('[data-i18n]').forEach(element => {
                const key = element.getAttribute('data-i18n');
                if (translations[currentLang][key]) {
                    element.textContent = translations[currentLang][key];
                }
            });

            // Dynamic Text Handling
            document.querySelectorAll('.dynamic-text').forEach(element => {
                const enText = element.getAttribute('data-en');
                const arText = element.getAttribute('data-ar');
                if (currentLang === 'ar' && arText) {
                    element.innerText = arText;
                } else if (enText) {
                    element.innerText = enText;
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
        }

        // Mobile Menu
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            updateUI();
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    easing: 'ease-in-out',
                    once: true
                });
            }
        });
    </script>
</body>

</html>