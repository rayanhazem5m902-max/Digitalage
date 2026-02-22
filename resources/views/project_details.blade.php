<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->name }} | Digital Age</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .back-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            background: rgba(0, 240, 200, 0.9);
            color: #000;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s;
        }

        .back-btn:hover {
            background: #00f0c8;
            transform: translateY(-2px);
        }

        .lang-switch {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 9999;
            background: white;
            padding: 10px 20px;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            font-weight: 600;
        }
    </style>
</head>

<body class="bg-white">
    <button onclick="toggleLanguage()" class="lang-switch">
        <span id="lang-flag">🇺🇸</span>
        <span id="lang-text">English</span>
    </button>

    <a href="{{ route('home') }}#Portfolio" class="back-btn" data-i18n="backHome">Back to Site</a>

    @if($project->html_content)
        <div class="dynamic-text" data-en-html="true" data-en='{!! addslashes($project->html_content) !!}'
            data-ar='{!! addslashes($project->html_content_ar ?? $project->html_content) !!}' id="content-container">
            {!! $project->html_content !!}
        </div>
    @else
        <div class="max-w-4xl mx-auto px-4 py-20">
            <h1 class="text-4xl font-black mb-6 dynamic-text" data-en="{{ $project->name }}"
                data-ar="{{ $project->name_ar ?? $project->name }}">{{ $project->name }}</h1>
            <div class="flex items-center gap-2 mb-8">
                <span class="text-gray-500" data-i18n="category">Category:</span>
                <span class="text-lime font-bold dynamic-text" data-en="{{ $project->service->name }}"
                    data-ar="{{ $project->service->name_ar ?? $project->service->name }}">{{ $project->service->name }}</span>
            </div>
            @if($project->image)
                <img src="{{ asset($project->image) }}" alt="{{ $project->name }}" class="w-full rounded-2xl shadow-xl mb-10">
            @endif
            <div class="text-gray-700 text-lg leading-relaxed dynamic-text" data-en="{{ $project->description }}"
                data-ar="{{ $project->description_ar ?? $project->description }}">
                {{ $project->description }}
            </div>
        </div>
    @endif

    <script>
        const translations = {
            en: {
                backHome: "Back to Site",
                category: "Category:",
            },
            ar: {
                backHome: "رجوع للموقع",
                category: "الفئة:",
            }
        };

        let currentLang = localStorage.getItem('digitalage_lang') || 'en';

        function toggleLanguage() {
            currentLang = currentLang === 'en' ? 'ar' : 'en';
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

            document.querySelectorAll('.dynamic-text').forEach(element => {
                if (element.hasAttribute('data-en-html')) {
                    element.innerHTML = element.getAttribute('data-' + currentLang);
                } else if (element.hasAttribute('data-' + currentLang)) {
                    element.textContent = element.getAttribute('data-' + currentLang);
                }
            });
        }

        document.addEventListener('DOMContentLoaded', updateUI);
    </script>
</body>

</html>