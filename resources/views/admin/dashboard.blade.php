<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم | Digital Age</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f8fafc;
        }

        .sidebar-active {
            background: linear-gradient(90deg, #00f0c8 0%, #2f9181 100%);
            color: white;
        }

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-white border-l border-gray-200 flex flex-col z-20 shadow-xl">
        <div class="p-6 flex items-center gap-3 border-b border-gray-100">
            <div
                class="w-10 h-10 bg-gradient-to-br from-[#00f0c8] to-[#bd147c] rounded-lg flex items-center justify-center text-white font-bold shadow-lg">
                DA</div>
            <span
                class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-gray-800 to-gray-600">المدير</span>
        </div>

        <nav class="flex-1 p-4 space-y-2 mt-4">
            <button onclick="switchTab('projects')" id="btn-projects"
                class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-50 transition-all sidebar-active">
                <i data-lucide="layout-grid"></i>
                <span class="font-semibold">إدارة البورتفوليو</span>
            </button>
            <button onclick="switchTab('members')" id="btn-members"
                class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-50 transition-all">
                <i data-lucide="users"></i>
                <span class="font-semibold">إدارة الأعضاء</span>
            </button>
            <button onclick="switchTab('services')" id="btn-services"
                class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-50 transition-all">
                <i data-lucide="briefcase"></i>
                <span class="font-semibold">إدارة الخدمات</span>
            </button>
            <button onclick="switchTab('contacts')" id="btn-contacts"
                class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-50 transition-all">
                <i data-lucide="contact"></i>
                <span class="font-semibold">بيانات التواصل</span>
            </button>
            <button onclick="switchTab('impacts')" id="btn-impacts"
                class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-50 transition-all">
                <i data-lucide="swatchbook"></i>
                <span class="font-semibold">تأثيرنا (Testimonials)</span>
            </button>
            <div class="pt-4 mt-4 border-t border-gray-100">
                <a href="{{ route('home') }}" target="_blank"
                    class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-blue-600 hover:bg-blue-50 transition-all">
                    <i data-lucide="external-link"></i>
                    <span class="font-semibold">عرض الموقع</span>
                </a>
            </div>
        </nav>

        <div class="p-4 border-t border-gray-100">
            <form action="{{ route('admin.login') }}" method="GET">
                <button type="submit"
                    class="w-full flex items-center gap-3 px-4 py-3 text-red-500 hover:bg-red-50 rounded-xl transition-all">
                    <i data-lucide="log-out"></i>
                    <span class="font-semibold">تسجيل الخروج</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col overflow-hidden bg-[#f1f5f9]">

        <!-- Header -->
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-8 shadow-sm z-10">
            <h2 id="page-title" class="text-xl font-bold text-gray-800">إدارة البورتفوليو</h2>
            <div class="flex items-center gap-4">
                <div class="text-left">
                    <p class="text-sm font-bold text-gray-800">أدمن ديجيتال</p>
                    <p class="text-xs text-gray-500">متصل الآن</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-gray-200 border-2 border-[#00f0c8] overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=00f0c8&color=fff" alt="Avatar">
                </div>
            </div>
        </header>

        <!-- Scrollable Content -->
        <div class="flex-1 overflow-y-auto p-8">

            <!-- UNIFIED PROJECT MANAGER -->
            <section id="projects-tab" class="tab-content active space-y-8">
                <!-- Main Form Card -->
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">
                    <h3 class="text-xl font-bold mb-8 flex items-center gap-3">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-[#00f0c8] to-[#2f9181] rounded-xl flex items-center justify-center text-white shadow-lg">
                            <i data-lucide="plus-circle" size="24"></i>
                        </div>
                        <span id="project-form-header">إضافة عمل جديد للبورتفوليو</span>
                    </h3>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                        <!-- Left Column: Details -->
                        <div class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 mr-2">اسم العمل</label>
                                    <input type="text" id="proj-name" placeholder="مثلاً: تطبيق بنكي ذكي"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-[#00f0c8] focus:ring-4 focus:ring-[#00f0c8]/10 outline-none transition-all bg-gray-50/50">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 mr-2">التصنيف</label>
                                    <select id="proj-category"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-[#00f0c8] focus:ring-4 focus:ring-[#00f0c8]/10 outline-none transition-all bg-gray-50/50">
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">وصف التفاصيل</label>
                                <textarea id="proj-desc" rows="3" placeholder="اكتب وصفاً جذاباً لهذا العمل..."
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-[#00f0c8] focus:ring-4 focus:ring-[#00f0c8]/10 outline-none transition-all bg-gray-50/50"></textarea>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">صورة العمل</label>
                                <div class="relative group">
                                    <input type="file" id="proj-image"
                                        class="absolute inset-0 opacity-0 cursor-pointer z-10"
                                        onchange="handleImage(event)">
                                    <div id="image-placeholder"
                                        class="w-full h-32 border-2 border-dashed border-gray-200 rounded-2xl flex flex-col items-center justify-center gap-2 text-gray-400 group-hover:border-[#00f0c8] group-hover:text-[#00f0c8] transition-all bg-gray-50/50">
                                        <i data-lucide="image-plus" size="32"></i>
                                        <span class="text-sm font-semibold">اسحب الصورة أو اضغط هنا</span>
                                    </div>
                                    <div id="image-preview-container"
                                        class="hidden absolute inset-0 bg-white rounded-2xl flex items-center justify-between px-6 border border-[#00f0c8] shadow-inner">
                                        <div class="flex items-center gap-4">
                                            <img id="temp-img" src="" class="w-16 h-16 rounded-lg object-cover">
                                            <span class="text-sm font-bold text-gray-700 truncate max-w-[120px]"
                                                id="file-name">filename.jpg</span>
                                        </div>
                                        <button onclick="removeImage()"
                                            class="w-10 h-10 flex items-center justify-center bg-red-50 text-red-500 hover:bg-red-500 hover:text-white rounded-xl transition-all">
                                            <i data-lucide="trash-2" size="20"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: HTML Editor with Live Display Area -->
                        <div class="flex flex-col space-y-2 h-full">
                            <label class="text-sm font-bold text-gray-700 mr-2 flex items-center gap-2">
                                <i data-lucide="monitor-play" size="18" class="text-[#bd147c]"></i>
                                معاينة الصفحة والبرمجة (Live Editor)
                            </label>
                            <div
                                class="flex-1 min-h-[450px] bg-[#1e293b] rounded-3xl overflow-hidden shadow-2xl border border-gray-700 flex flex-col">
                                <div
                                    class="bg-[#0f172a] px-6 py-3 flex items-center justify-between border-b border-gray-700">
                                    <div class="flex gap-1.5">
                                        <div class="w-3 h-3 rounded-full bg-red-500/50"></div>
                                        <div class="w-3 h-3 rounded-full bg-yellow-500/50"></div>
                                        <div class="w-3 h-3 rounded-full bg-green-500/50"></div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <span class="text-[10px] text-gray-500 font-mono tracking-widest uppercase">Live
                                            Workspace</span>
                                        <div class="h-4 w-[1px] bg-gray-700"></div>
                                        <i data-lucide="zap" size="14" class="text-[#00f0c8] animate-pulse"></i>
                                    </div>
                                </div>

                                <div class="flex-1 flex flex-col xl:flex-row overflow-hidden h-full">
                                    <!-- Code Editor -->
                                    <div
                                        class="flex-1 relative border-b xl:border-b-0 xl:border-l border-gray-700 h-1/2 xl:h-full">
                                        <div
                                            class="absolute top-2 left-4 text-[9px] text-gray-500 font-bold uppercase z-10">
                                            Editor</div>
                                        <textarea id="proj-html" dir="ltr" spellcheck="false"
                                            class="w-full h-full bg-transparent text-[#00f0c8] p-8 pt-10 font-mono text-[13px] resize-none outline-none leading-relaxed"
                                            placeholder="<h1>مرحباً بك في صفحة المشروع</h1>..."
                                            oninput="updateFormPreview()"></textarea>
                                    </div>
                                    <!-- Live Display Area -->
                                    <div class="flex-1 bg-white h-1/2 xl:h-full relative overflow-hidden">
                                        <div
                                            class="absolute top-2 left-4 text-[9px] text-gray-400 font-bold uppercase z-10">
                                            Display Area</div>
                                        <iframe id="form-live-preview" class="w-full h-full border-none"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="editing-project-id" value="">

                    <div class="mt-10 flex justify-end gap-3">
                        <button id="cancel-project-edit" onclick="resetProjectForm()"
                            class="hidden px-8 py-4 bg-gray-100 text-gray-600 font-bold rounded-2xl hover:bg-gray-200 transition-all">إلغاء</button>
                        <button onclick="saveProject()"
                            class="px-12 py-4 bg-gradient-to-r from-[#00f0c8] to-[#2f9181] text-[#0f172a] font-black text-lg rounded-2xl shadow-xl hover:shadow-[#00f0c8]/40 hover:-translate-y-1 transition-all active:scale-95 flex items-center gap-3">
                            <span id="save-project-btn-text">حفظ العمل في البورتفوليو</span>
                            <i data-lucide="check-circle" size="24"></i>
                        </button>
                    </div>
                </div>

                <!-- Projects List -->
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div
                        class="p-8 border-b border-gray-50 flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <h3 class="text-xl font-bold text-gray-800">قائمة المشاريع</h3>
                            <button onclick="resetProjectForm(); window.scrollTo({top:0, behavior:'smooth'})"
                                class="px-4 py-2 bg-gradient-to-r from-[#00f0c8] to-[#2f9181] text-[#0f172a] text-xs font-bold rounded-xl flex items-center gap-2 hover:scale-105 transition-all">
                                <i data-lucide="plus" size="14"></i>
                                إضافة مشروع جديد
                            </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-right">
                            <thead class="bg-gray-50 text-gray-500 text-[11px] font-bold uppercase tracking-widest">
                                <tr>
                                    <th class="px-8 py-5">العمل</th>
                                    <th class="px-8 py-5">التفاصيل</th>
                                    <th class="px-8 py-5">التصنيف</th>
                                    <th class="px-8 py-5">العمليات</th>
                                </tr>
                            </thead>
                            <tbody id="projects-list" class="divide-y divide-gray-100">
                                @foreach($projects as $project)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-8 py-6 flex items-center gap-4">
                                            <img src="{{ asset($project->image) }}"
                                                class="w-12 h-12 rounded-lg object-cover">
                                            <p class="font-bold">{{ $project->name }}</p>
                                        </td>
                                        <td class="px-8 py-6 text-sm text-gray-600 line-clamp-1">{{ $project->description }}
                                        </td>
                                        <td class="px-8 py-6"><span
                                                class="px-3 py-1 bg-gray-100 rounded-lg text-xs font-bold">{{ $project->service->name }}</span>
                                        </td>
                                        <td class="px-8 py-6">
                                            <button onclick="deleteProject({{ $project->id }})"
                                                class="text-red-500 hover:text-red-700">
                                                <i data-lucide="trash-2"></i>
                                            </button>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- MEMBERS MANAGEMENT -->
            <section id="members-tab" class="tab-content hidden space-y-8">
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">
                    <h3 class="text-xl font-bold mb-8 flex items-center gap-3">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                            <i data-lucide="user-plus" size="24"></i>
                        </div>
                        <span id="member-form-title">إضافة عضو فريق جديد</span>
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">اسم العضو</label>
                                <input type="text" id="member-name" placeholder="مثلاً: د. أحمد محمد"
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-gray-50/50">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">الدور / المسمى الوظيفي</label>
                                <input type="text" id="member-role" placeholder="مثلاً: مدير المشروع"
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-gray-50/50">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">وصف أو كلمة (اختياري)</label>
                                <textarea id="member-desc" rows="3" placeholder="اكتب وصفاً مختصراً للعضو..."
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-gray-50/50"></textarea>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">صورة العضو</label>
                                <div class="relative group h-[256px]">
                                    <input type="file" id="member-image-input"
                                        class="absolute inset-0 opacity-0 cursor-pointer z-10"
                                        onchange="handleMemberImage(event)">
                                    <div id="member-image-placeholder"
                                        class="w-full h-full border-2 border-dashed border-gray-200 rounded-2xl flex flex-col items-center justify-center gap-2 text-gray-400 group-hover:border-blue-500 group-hover:text-blue-500 transition-all bg-gray-50/50">
                                        <i data-lucide="image-plus" size="48"></i>
                                        <span class="text-sm font-semibold">اضغط لرفع صورة العضو</span>
                                    </div>
                                    <div id="member-image-preview-container"
                                        class="hidden absolute inset-0 bg-white rounded-2xl overflow-hidden border border-blue-500 shadow-inner">
                                        <img id="member-temp-img" src="" class="w-full h-full object-cover">
                                        <button onclick="removeMemberImage()"
                                            class="absolute top-4 right-4 w-10 h-10 flex items-center justify-center bg-red-500 text-white rounded-xl shadow-lg hover:scale-110 transition-all">
                                            <i data-lucide="trash-2" size="20"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="editing-member-id" value="">

                    <div class="mt-8 flex justify-end gap-3">
                        <button id="cancel-member-edit" onclick="resetMemberForm()"
                            class="hidden px-8 py-4 bg-gray-100 text-gray-600 font-bold rounded-2xl hover:bg-gray-200 transition-all">إلغاء</button>
                        <button onclick="saveMember()"
                            class="px-12 py-4 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-black text-lg rounded-2xl shadow-xl hover:shadow-blue-500/40 hover:-translate-y-1 transition-all flex items-center gap-3">
                            <span id="save-member-btn-text">حفظ العضو</span>
                            <i data-lucide="user-check" size="24"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-8 border-b border-gray-50 flex items-center justify-between">
                        <h3 class="text-xl font-bold text-gray-800">قائمة أعضاء الفريق</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-right">
                            <thead class="bg-gray-50 text-gray-500 text-[11px] font-bold uppercase tracking-widest">
                                <tr>
                                    <th class="px-8 py-5">العضو</th>
                                    <th class="px-8 py-5">الدور</th>
                                    <th class="px-8 py-5">الوصف</th>
                                    <th class="px-8 py-5">العمليات</th>
                                </tr>
                            </thead>
                            <tbody id="members-list" class="divide-y divide-gray-100">
                                @foreach($members as $member)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-8 py-6 flex items-center gap-4">
                                            <img src="{{ asset($member->image) }}"
                                                class="w-12 h-12 rounded-full object-cover">
                                            <p class="font-bold">{{ $member->name }}</p>
                                        </td>
                                        <td class="px-8 py-6 text-sm">{{ $member->role }}</td>
                                        <td class="px-8 py-6 text-sm text-gray-600 line-clamp-1">{{ $member->description }}
                                        </td>
                                        <td class="px-8 py-6">
                                            <button class="text-red-500 hover:text-red-700"><i
                                                    data-lucide="trash-2"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- CONTACT INFO MANAGEMENT -->
            <section id="contacts-tab" class="tab-content hidden space-y-8">
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">
                    <h3 class="text-xl font-bold mb-8 flex items-center gap-3">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-pink-500 to-rose-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                            <i data-lucide="contact" size="24"></i>
                        </div>
                        <span>إدارة بيانات التواصل والإحصائيات</span>
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <!-- Social Media -->
                        <div class="space-y-6">
                            <h4 class="text-lg font-bold text-gray-800 border-r-4 border-pink-500 pr-4">منصات التواصل
                                الاجتماعي</h4>

                            <div class="space-y-4">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 block">واتساب (WhatsApp)</label>
                                    <input type="text" id="contact-whatsapp" placeholder="مثلاً: 201275018291"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                </div>

                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 block">فيسبوك (Facebook)</label>
                                    <input type="text" id="contact-facebook" placeholder="رابط الصفحة الكامل"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                </div>

                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 block">إنستجرام (Instagram)</label>
                                    <input type="text" id="contact-instagram" placeholder="رابط الملف الشخصي"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                </div>
                            </div>
                        </div>

                        <!-- Contact Details -->
                        <div class="space-y-6">
                            <h4 class="text-lg font-bold text-gray-800 border-r-4 border-blue-500 pr-4">بيانات الاتصال
                                والعنوان</h4>

                            <div class="space-y-4">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 block">رقم الهاتف الأساسي</label>
                                    <input type="text" id="contact-phone" placeholder="مثلاً: 256789383140+"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                </div>

                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 block">البريد الإلكتروني</label>
                                    <input type="email" id="contact-email" placeholder="info@digitalage.com"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                </div>

                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 block">الموقع / العنوان</label>
                                    <textarea id="contact-address" rows="3" placeholder="العنوان بالتفصيل..."
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 flex justify-end">
                        <button onclick="saveContacts()"
                            class="px-16 py-5 bg-gradient-to-r from-pink-500 to-blue-600 text-white font-black text-xl rounded-2xl shadow-2xl hover:shadow-pink-500/40 hover:-translate-y-1 transition-all active:scale-95 flex items-center gap-4">
                            <span>حفظ كافة البيانات</span>
                            <i data-lucide="save" size="28"></i>
                        </button>
                    </div>
                </div>
            </section>

            <!-- SERVICES MANAGEMENT -->
            <section id="services-tab" class="tab-content hidden space-y-8">
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">
                    <h3 class="text-xl font-bold mb-8 flex items-center gap-3">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-lime-500 to-green-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                            <i data-lucide="briefcase" size="24"></i>
                        </div>
                        <span id="service-form-title">إضافة خدمة جديدة</span>
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">اسم الخدمة</label>
                                <input type="text" id="service-name" placeholder="مثلاً: تطوير تطبيقات الويب"
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-lime-500 focus:ring-4 focus:ring-lime-500/10 outline-none transition-all bg-gray-50/50">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">أيقونة الخدمة (Lucide)</label>
                                <input type="text" id="service-icon" placeholder="مثلاً: monitor, code, globe"
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-lime-500 focus:ring-4 focus:ring-lime-500/10 outline-none transition-all bg-gray-50/50">
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">وصف الخدمة</label>
                                <textarea id="service-desc" rows="5" placeholder="اكتب وصفاً مفصلاً للخدمة..."
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-lime-500 focus:ring-4 focus:ring-lime-500/10 outline-none transition-all bg-gray-50/50"></textarea>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="editing-service-id" value="">

                    <div class="mt-8 flex justify-end gap-3">
                        <button id="cancel-service-edit" onclick="resetServiceForm()"
                            class="hidden px-8 py-4 bg-gray-100 text-gray-600 font-bold rounded-2xl hover:bg-gray-200 transition-all">إلغاء</button>
                        <button onclick="saveService()"
                            class="px-12 py-4 bg-gradient-to-r from-lime-500 to-green-600 text-white font-black text-lg rounded-2xl shadow-xl hover:shadow-lime-500/40 hover:-translate-y-1 transition-all flex items-center gap-3">
                            <span id="save-service-btn-text">حفظ الخدمة</span>
                            <i data-lucide="check-circle" size="24"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-8 border-b border-gray-50">
                        <h3 class="text-xl font-bold text-gray-800">قائمة الخدمات</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-right">
                            <thead class="bg-gray-50 text-gray-500 text-[11px] font-bold uppercase tracking-widest">
                                <tr>
                                    <th class="px-8 py-5">الأيقونة والخدمة</th>
                                    <th class="px-8 py-5">الوصف</th>
                                    <th class="px-8 py-5">العمليات</th>
                                </tr>
                            </thead>
                            <tbody id="services-list" class="divide-y divide-gray-100">
                                @foreach($services as $service)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-8 py-6 flex items-center gap-4">
                                            <i data-lucide="{{ $service->icon }}" class="text-lime-600"></i>
                                            <p class="font-bold">{{ $service->name }}</p>
                                        </td>
                                        <td class="px-8 py-6 text-sm text-gray-600 line-clamp-1">{{ $service->description }}
                                        </td>
                                        <td class="px-8 py-6">
                                            <button class="text-red-500 hover:text-red-700"><i
                                                    data-lucide="trash-2"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

        <!-- IMPACTS/TESTIMONIALS MANAGEMENT -->
            <section id="impacts-tab" class="tab-content hidden space-y-8">
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">
                    <h3 class="text-xl font-bold mb-8 flex items-center gap-3">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-orange-400 to-red-500 rounded-xl flex items-center justify-center text-white shadow-lg">
                            <i data-lucide="message-square-quote" size="24"></i>
                        </div>
                        <span id="impact-form-title">إضافة رأي جديد (Impact)</span>
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">الاسم</label>
                                <input type="text" id="impact-name" placeholder="مثلاً: أميرة حسن"
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-500/10 outline-none transition-all bg-gray-50/50">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">الأيقونة (Lucide)</label>
                                <input type="text" id="impact-icon" value="user-round" placeholder="مثلاً: user, star, leaf"
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-500/10 outline-none transition-all bg-gray-50/50">
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">التفاصيل / النص</label>
                                <textarea id="impact-text" rows="5" placeholder="اكتب رأي الجمهور أو العميل هنا..."
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-500/10 outline-none transition-all bg-gray-50/50"></textarea>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="editing-impact-id" value="">

                    <div class="mt-8 flex justify-end gap-3">
                        <button id="cancel-impact-edit" onclick="resetImpactForm()"
                            class="hidden px-8 py-4 bg-gray-100 text-gray-600 font-bold rounded-2xl hover:bg-gray-200 transition-all">إلغاء</button>
                        <button onclick="saveImpact()"
                            class="px-12 py-4 bg-gradient-to-r from-orange-400 to-red-500 text-white font-black text-lg rounded-2xl shadow-xl hover:shadow-orange-500/40 hover:-translate-y-1 transition-all flex items-center gap-3">
                            <span id="save-impact-btn-text">حفظ التأثير</span>
                            <i data-lucide="check-circle" size="24"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-8 border-b border-gray-50">
                        <h3 class="text-xl font-bold text-gray-800">قائمة الآراء (Impacts)</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-right">
                            <thead class="bg-gray-50 text-gray-500 text-[11px] font-bold uppercase tracking-widest">
                                <tr>
                                    <th class="px-8 py-5">الاسم والأيقونة</th>
                                    <th class="px-8 py-5">النص</th>
                                    <th class="px-8 py-5">العمليات</th>
                                </tr>
                            </thead>
                            <tbody id="impacts-list" class="divide-y divide-gray-100">
                                @foreach($impacts as $impact)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-8 py-6 flex items-center gap-4">
                                            <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center">
                                                <i data-lucide="{{ $impact->icon }}" class="text-orange-500"></i>
                                            </div>
                                            <p class="font-bold">{{ $impact->name }}</p>
                                        </td>
                                        <td class="px-8 py-6 text-sm text-gray-600 max-w-md truncate">{{ $impact->text }}</td>
                                        <td class="px-8 py-6 flex gap-2">
                                            <button onclick='editImpact({!! json_encode($impact) !!})' class="text-blue-500 hover:text-blue-700">
                                                <i data-lucide="edit-3"></i>
                                            </button>
                                            <button onclick="deleteImpact({{ $impact->id }})" class="text-red-500 hover:text-red-700">
                                                <i data-lucide="trash-2"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <script>
        // Initialize Lucide
        lucide.createIcons();

        // Setup AJAX headers
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Navigation Logic
        function switchTab(tab) {
            document.querySelectorAll('.tab-content').forEach(c => {
                c.classList.add('hidden');
                c.classList.remove('active');
            });
            document.getElementById(tab + '-tab').classList.remove('hidden');
            document.getElementById(tab + '-tab').classList.add('active');

            document.querySelectorAll('nav button').forEach(b => b.classList.remove('sidebar-active'));
            document.getElementById('btn-' + tab).classList.add('sidebar-active');

            const titles = {
                'projects': 'إدارة البورتفوليو',
                'members': 'إدارة أعضاء الفريق',
                'services': 'إدارة الخدمات',
                'contacts': 'بيانات التواصل',
                'impacts': 'إدارة تأثيرنا (Testimonials)'
            };
            document.getElementById('page-title').innerText = titles[tab];
        }

        // --- Image Handling ---

        function handleImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('temp-img').src = e.target.result;
                    document.getElementById('file-name').innerText = file.name;
                    document.getElementById('image-placeholder').classList.add('hidden');
                    document.getElementById('image-preview-container').classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            }
        }

        function removeImage() {
            document.getElementById('proj-image').value = '';
            document.getElementById('image-placeholder').classList.remove('hidden');
            document.getElementById('image-preview-container').classList.add('hidden');
        }

        function handleMemberImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('member-temp-img').src = e.target.result;
                    document.getElementById('member-image-placeholder').classList.add('hidden');
                    document.getElementById('member-image-preview-container').classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            }
        }

        function removeMemberImage() {
            document.getElementById('member-image-input').value = '';
            document.getElementById('member-image-placeholder').classList.remove('hidden');
            document.getElementById('member-image-preview-container').classList.add('hidden');
        }

        // --- Live Preview ---
        function updateFormPreview() {
            const html = document.getElementById('proj-html').value;
            const iframe = document.getElementById('form-live-preview');
            const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
            iframeDoc.open();
            iframeDoc.write(html || '<div style="padding:20px; color:#999; font-family:sans-serif;">لا يوجد محتوى للعرض...</div>');
            iframeDoc.close();
        }

        // --- Project Logic ---

        async function saveProject() {
            const formData = new FormData();
            formData.append('id', document.getElementById('editing-project-id').value);
            formData.append('name', document.getElementById('proj-name').value);
            formData.append('service_id', document.getElementById('proj-category').value);
            formData.append('description', document.getElementById('proj-desc').value);
            formData.append('html_content', document.getElementById('proj-html').value);

            const imageFile = document.getElementById('proj-image').files[0];
            if (imageFile) {
                formData.append('image', imageFile);
            }

            try {
                const response = await fetch('{{ route("admin.projects.save") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: formData
                });
                const result = await response.json();
                if (result.success) {
                    alert('تم حفظ المشروع بنجاح');
                    location.reload();
                }
            } catch (error) {
                console.error('Error saving project:', error);
                alert('حدث خطأ أثناء الحفظ');
            }
        }

        async function deleteProject(id) {
            if (!confirm('هل أنت متأكد من حذف هذا المشروع؟')) return;
            try {
                const response = await fetch(`/admin/projects/delete/${id}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
                const result = await response.json();
                if (result.success) {
                    location.reload();
                }
            } catch (error) {
                console.error('Error deleting project:', error);
            }
        }

        function resetProjectForm() {
            document.getElementById('editing-project-id').value = '';
            document.getElementById('proj-name').value = '';
            document.getElementById('proj-desc').value = '';
            document.getElementById('proj-html').value = '';
            removeImage();
            document.getElementById('save-project-btn-text').innerText = 'حفظ العمل في البورتفوليو';
            document.getElementById('cancel-project-edit').classList.add('hidden');
        }

        // --- Member Logic ---

        async function saveMember() {
            const formData = new FormData();
            formData.append('id', document.getElementById('editing-member-id').value);
            formData.append('name', document.getElementById('member-name').value);
            formData.append('role', document.getElementById('member-role').value);
            formData.append('description', document.getElementById('member-desc').value);

            const imageFile = document.getElementById('member-image-input').files[0];
            if (imageFile) {
                formData.append('image', imageFile);
            }

            try {
                const response = await fetch('{{ route("admin.members.save") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: formData
                });
                const result = await response.json();
                if (result.success) {
                    alert('تم حفظ العضو بنجاح');
                    location.reload();
                }
            } catch (error) {
                console.error('Error saving member:', error);
                alert('حدث خطأ أثناء الحفظ');
            }
        }

        async function deleteMember(id) {
            if (!confirm('هل أنت متأكد من حذف هذا العضو؟')) return;
            try {
                const response = await fetch(`/admin/members/delete/${id}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
                const result = await response.json();
                if (result.success) {
                    location.reload();
                }
            } catch (error) {
                console.error('Error deleting member:', error);
            }
        }

        // --- Service Logic ---
        async function saveService() {
            const data = {
                id: document.getElementById('editing-service-id').value,
                name: document.getElementById('service-name').value,
                icon: document.getElementById('service-icon').value,
                description: document.getElementById('service-desc').value
            };

            try {
                const response = await fetch('{{ route("admin.services.save") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify(data)
                });
                const result = await response.json();
                if (result.success) {
                    alert('تم حفظ الخدمة بنجاح');
                    location.reload();
                }
            } catch (error) {
                console.error('Error saving service:', error);
            }
        }

        async function deleteService(id) {
            if (!confirm('هل أنت متأكد من حذف هذه الخدمة؟')) return;
            try {
                const response = await fetch(`/admin/services/delete/${id}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
                const result = await response.json();
                if (result.success) {
                    location.reload();
                }
            } catch (error) {
                console.error('Error deleting service:', error);
            }
        }

        // --- Contact Logic ---
        async function saveContacts() {
            const data = {
                whatsapp: document.getElementById('contact-whatsapp').value,
                facebook: document.getElementById('contact-facebook').value,
                instagram: document.getElementById('contact-instagram').value,
                phone: document.getElementById('contact-phone').value,
                email: document.getElementById('contact-email').value,
                address: document.getElementById('contact-address').value
            };

            try {
                const response = await fetch('{{ route("admin.contact.save") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify(data)
                });
                const result = await response.json();
                if (result.success) {
                    alert('تم حفظ بيانات التواصل بنجاح');
                }
            } catch (error) {
                console.error('Error saving contacts:', error);
            }
        }

        // --- Impact Logic ---
        async function saveImpact() {
            const data = {
                id: document.getElementById('editing-impact-id').value,
                name: document.getElementById('impact-name').value,
                icon: document.getElementById('impact-icon').value,
                text: document.getElementById('impact-text').value
            };

            if (!data.name || !data.text) {
                alert('يرجى ملء الاسم والنص');
                return;
            }

            try {
                const response = await fetch('{{ route("admin.impact.save") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify(data)
                });
                const result = await response.json();
                if (result.success) {
                    alert('تم حفظ التأثير بنجاح');
                    location.reload();
                }
            } catch (error) {
                console.error('Error saving impact:', error);
            }
        }

        async function deleteImpact(id) {
            if (!confirm('هل أنت متأكد من حذف هذا الرأي؟')) return;
            try {
                const response = await fetch(`/admin/impact/delete/${id}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
                const result = await response.json();
                if (result.success) {
                    location.reload();
                }
            } catch (error) {
                console.error('Error deleting impact:', error);
            }
        }

        function editImpact(impact) {
            document.getElementById('editing-impact-id').value = impact.id;
            document.getElementById('impact-name').value = impact.name;
            document.getElementById('impact-icon').value = impact.icon;
            document.getElementById('impact-text').value = impact.text;
            
            document.getElementById('impact-form-title').innerText = 'تعديل الرأي: ' + impact.name;
            document.getElementById('save-impact-btn-text').innerText = 'تحديث التأثير';
            document.getElementById('cancel-impact-edit').classList.remove('hidden');
            
            window.scrollTo({top: 0, behavior: 'smooth'});
        }

        function resetImpactForm() {
            document.getElementById('editing-impact-id').value = '';
            document.getElementById('impact-name').value = '';
            document.getElementById('impact-icon').value = 'user-round';
            document.getElementById('impact-text').value = '';
            
            document.getElementById('impact-form-title').innerText = 'إضافة رأي جديد (Impact)';
            document.getElementById('save-impact-btn-text').innerText = 'حفظ التأثير';
            document.getElementById('cancel-impact-edit').classList.add('hidden');
        }

        // Initial preview
        updateFormPreview();
    </script>

</body>

</html>