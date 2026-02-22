<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $career->title }} | Digital Age</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
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

<body class="bg-slate-50">
    <button onclick="toggleLanguage()" class="lang-switch">
        <span id="lang-flag">🇺🇸</span>
        <span id="lang-text">English</span>
    </button>

    <a href="{{ route('careers') }}" class="back-btn" data-i18n="backCareers">Back to Careers</a>

    <div class="max-w-4xl mx-auto px-4 py-24">
        <div class="bg-white rounded-[2.5rem] p-8 md:p-12 shadow-xl shadow-slate-200/50 border border-slate-100">
            <div class="flex flex-wrap gap-3 mb-6">
                <span
                    class="px-4 py-2 bg-purple-50 text-purple-600 rounded-full text-sm font-black uppercase dynamic-text"
                    data-en="{{ $career->category }}"
                    data-ar="{{ $career->category_ar ?? $career->category }}">{{ $career->category }}</span>
                <span class="px-4 py-2 bg-blue-50 text-blue-600 rounded-full text-sm font-black dynamic-text"
                    data-en="{{ $career->duration }}{{ $career->working_hours ? ' (' . $career->working_hours . ')' : '' }}"
                    data-ar="{{ $career->duration_ar ?? $career->duration }}{{ $career->working_hours_ar ? ' (' . $career->working_hours_ar . ')' : '' }}">
                    {{ $career->duration }}{{ $career->working_hours ? ' (' . $career->working_hours . ')' : '' }}
                </span>
            </div>

            <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-8 dynamic-text" data-en="{{ $career->title }}"
                data-ar="{{ $career->title_ar ?? $career->title }}">{{ $career->title }}</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl">
                    <div
                        class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-purple-600 shadow-sm">
                        <i data-lucide="calendar"></i>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1" data-i18n="posted">
                            Posted On</p>
                        <p class="font-bold text-slate-700">
                            {{ $career->published_at ? \Carbon\Carbon::parse($career->published_at)->format('M d, Y') : $career->created_at->format('M d, Y') }}
                        </p>
                    </div>
                </div>

                @if($career->deadline)
                    <div class="flex items-center gap-4 p-4 bg-red-50/50 rounded-2xl">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-red-500 shadow-sm">
                            <i data-lucide="calendar-x"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-red-400 uppercase tracking-widest mb-1" data-i18n="deadline">
                                Deadline</p>
                            <p class="font-bold text-slate-700">
                                {{ \Carbon\Carbon::parse($career->deadline)->format('M d, Y') }}
                            </p>
                        </div>
                    </div>
                @endif
            </div>

            <div class="prose max-w-none text-slate-600 leading-relaxed text-lg dynamic-text"
                data-en="{{ $career->description }}" data-ar="{{ $career->description_ar ?? $career->description }}">
                {!! nl2br(e($career->description)) !!}
            </div>

            <hr class="my-12 border-slate-100">

            <div class="text-center">
                <a href="{{ $career->apply_link ?? 'javascript:void(0)' }}" {{ $career->apply_link ? 'target="_blank"' : '' }}
                    class="bg-slate-900 text-white px-12 py-4 rounded-2xl font-black text-lg hover:bg-lime hover:text-slate-900 transition-all transform hover:-translate-y-1 shadow-xl shadow-slate-200 inline-block"
                    data-i18n="applyNow">
                    Apply For This Position
                </a>
            </div>
        </div>
    </div>

    <script>
        const translations = {
            en: {
                backCareers: "Back to Careers",
                posted: "Posted On",
                deadline: "Deadline",
                applyNow: "Apply For This Position",
            },
            ar: {
                backCareers: "رجوع للوظائف",
                posted: "نُشر في",
                deadline: "الموعد النهائي",
                applyNow: "قدم لهذه الوظيفة",
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

            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateUI();
        });
    </script>
</body>

</html>