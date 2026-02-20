<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول | لوحة تحكم Digital Age</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background: radial-gradient(circle at top left, #0f172a 0%, #1e293b 100%);
        }

        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .input-glass {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
        }

        .input-glass:focus {
            border-color: #00f0c8;
            box-shadow: 0 0 15px rgba(0, 240, 200, 0.2);
        }

        .btn-gradient {
            background: linear-gradient(135deg, #00f0c8 0%, #2f9181 100%);
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            box-shadow: 0 0 30px rgba(0, 240, 200, 0.4);
            transform: translateY(-2px);
        }

        .floating-shape {
            position: absolute;
            z-index: -1;
            filter: blur(80px);
            border-radius: 50%;
        }
    </style>
</head>

<body class="h-screen flex items-center justify-center p-6 relative overflow-hidden">

    <!-- Decorative Shapes -->
    <div class="floating-shape w-96 h-96 bg-[#00f0c8]/20 -top-48 -left-48"></div>
    <div class="floating-shape w-80 h-80 bg-[#bd147c]/20 -bottom-40 -right-40"></div>

    <div class="w-full max-w-md glass rounded-3xl p-10 shadow-2xl animate-fade-in">
        <div class="flex flex-col items-center mb-10">
            <div
                class="w-16 h-16 bg-gradient-to-br from-[#00f0c8] to-[#bd147c] rounded-2xl flex items-center justify-center text-white font-bold text-2xl mb-6 shadow-xl">
                DA
            </div>
            <h1 class="text-3xl font-bold text-white mb-2">لوحة التحكم</h1>
            <p class="text-gray-400 text-sm">مرحباً بك مجدداً، يرجى تسجيل الدخول</p>
        </div>

        <form action="{{ route('admin.login') }}" method="POST" class="space-y-6">
            @csrf
            <div class="space-y-2">
                <label class="text-sm font-semibold text-gray-300 mr-2">اسم المستخدم</label>
                <div class="relative">
                    <i data-lucide="user" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400" size="18"></i>
                    <input type="text" name="username" required
                        class="w-full pr-12 pl-4 py-4 rounded-xl input-glass outline-none transition-all"
                        placeholder="أدخل اسم المستخدم">
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-sm font-semibold text-gray-300 mr-2">كلمة المرور</label>
                <div class="relative">
                    <i data-lucide="lock" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400" size="18"></i>
                    <input type="password" name="password" required
                        class="w-full pr-12 pl-4 py-4 rounded-xl input-glass outline-none transition-all"
                        placeholder="••••••••">
                </div>
            </div>

            @if(session('error'))
                <div id="errorMsg"
                    class="bg-red-500/10 border border-red-500/20 text-red-500 text-xs p-4 rounded-xl text-center">
                    {{ session('error') }}
                </div>
            @endif

            <button type="submit"
                class="w-full py-4 text-[#0f172a] font-bold text-lg rounded-xl btn-gradient shadow-lg">
                تسجيل الدخول
            </button>
        </form>

        <div class="mt-8 pt-8 border-t border-white/5 flex justify-center">
            <a href="{{ route('home') }}"
                class="flex items-center gap-2 text-gray-500 hover:text-[#00f0c8] transition-colors text-sm">
                <i data-lucide="arrow-right" size="16"></i>
                العودة للرئيسية
            </a>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>