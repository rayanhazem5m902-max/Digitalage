<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول | Digital Age</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }

        .bg-pattern {
            background-color: #f8fafc;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%2300f0c8' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>

<body class="bg-pattern min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-md">
        <!-- Logo/Header -->
        <div class="text-center mb-10">
            <div
                class="w-20 h-20 bg-gradient-to-br from-[#00f0c8] to-[#bd147c] rounded-2xl flex items-center justify-center text-white text-3xl font-black shadow-2xl mx-auto mb-6 transform -rotate-6">
                DA
            </div>
            <h1 class="text-3xl font-black text-gray-800 mb-2">مرحباً بك مجدداً</h1>
            <p class="text-gray-500 font-medium">لوحة تحكم Digital Age</p>
        </div>

        <!-- Login Card -->
        <div
            class="bg-white/80 backdrop-blur-xl rounded-[2.5rem] shadow-2xl border border-white p-10 relative overflow-hidden">
            <!-- Decorative Glow -->
            <div class="absolute -top-24 -right-24 w-48 h-48 bg-[#00f0c8]/20 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-[#bd147c]/10 rounded-full blur-3xl"></div>

            @if(session('error'))
                <div
                    class="mb-6 p-4 bg-red-50 border-r-4 border-red-500 text-red-700 text-sm font-bold rounded-xl flex items-center gap-3">
                    <i data-lucide="alert-circle" size="18"></i>
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('admin.login') }}" method="POST" class="space-y-6 relative z-10">
                @csrf
                <div class="space-y-2">
                    <label class="text-sm font-bold text-gray-700 mr-2">اسم المستخدم</label>
                    <div class="relative">
                        <i data-lucide="user" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"
                            size="20"></i>
                        <input type="text" name="username" required
                            class="w-full pr-12 pl-4 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 focus:bg-white focus:border-[#00f0c8] focus:ring-4 focus:ring-[#00f0c8]/10 outline-none transition-all font-bold"
                            placeholder="username">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-gray-700 mr-2">كلمة المرور</label>
                    <div class="relative">
                        <i data-lucide="lock" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"
                            size="20"></i>
                        <input type="password" name="password" required
                            class="w-full pr-12 pl-4 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 focus:bg-white focus:border-[#00f0c8] focus:ring-4 focus:ring-[#00f0c8]/10 outline-none transition-all font-bold"
                            placeholder="••••••••">
                    </div>
                </div>

                <button type="submit"
                    class="w-full py-4 bg-gradient-to-r from-[#00f0c8] to-[#2f9181] text-[#0f172a] font-black text-lg rounded-2xl shadow-xl hover:shadow-[#00f0c8]/40 hover:-translate-y-1 transition-all active:scale-95 flex items-center justify-center gap-3 mt-8">
                    <span>دخول إلى النظام</span>
                    <i data-lucide="chevron-left" size="20"></i>
                </button>
            </form>
        </div>

        <!-- Footer -->
        <p class="text-center mt-10 text-gray-400 text-sm font-medium">
            &copy; {{ date('Y') }} Digital Age. جميع الحقوق محفوظة.
        </p>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>