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

<body class="bg-[#f1f5f9] min-h-screen">

    <!-- Sidebar -->
    <aside class="fixed top-0 right-0 w-64 h-full bg-white border-l border-gray-200 flex flex-col z-20 shadow-xl">
        <div class="p-6 flex items-center gap-3 border-b border-gray-100">
            <div
                class="w-10 h-10 bg-gradient-to-br from-[#00f0c8] to-[#bd147c] rounded-lg flex items-center justify-center text-white font-bold shadow-lg">
                DA</div>
            <span
                class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-gray-800 to-gray-600">المدير</span>
        </div>

        <nav class="flex-1 p-4 space-y-2 mt-4 overflow-y-auto">
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

            <button onclick="switchTab('careers')" id="btn-careers"
                class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-50 transition-all">
                <i data-lucide="scroll-text"></i>
                <span class="font-semibold">إدارة الوظائف</span>
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
    <main class="mr-64 min-h-screen flex flex-col bg-[#f1f5f9]">

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

        <!-- Content Area -->
        <div class="p-8 pb-12">

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
                                    <label class="text-sm font-bold text-gray-700 mr-2">اسم العمل (English)</label>
                                    <input type="text" id="proj-name" placeholder="Name in English"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-[#00f0c8] focus:ring-4 focus:ring-[#00f0c8]/10 outline-none transition-all bg-gray-50/50">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 mr-2">اسم العمل (العربية)</label>
                                    <input type="text" id="proj-name-ar" dir="rtl" placeholder="الاسم بالعربية"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-[#00f0c8] focus:ring-4 focus:ring-[#00f0c8]/10 outline-none transition-all bg-gray-50/50">
                                </div>
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

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 mr-2">وصف التفاصيل (English)</label>
                                    <textarea id="proj-desc" rows="3" placeholder="Description in English..."
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-[#00f0c8] focus:ring-4 focus:ring-[#00f0c8]/10 outline-none transition-all bg-gray-50/50"></textarea>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 mr-2">الوصف (العربية)</label>
                                    <textarea id="proj-desc-ar" rows="3" dir="rtl" placeholder="الوصف بالعربية..."
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-[#00f0c8] focus:ring-4 focus:ring-[#00f0c8]/10 outline-none transition-all bg-gray-50/50"></textarea>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">صورة العمل</label>
                                <div class="relative group h-32">
                                    <input type="file" id="proj-image"
                                        class="absolute inset-0 opacity-0 cursor-pointer z-10"
                                        onchange="handleImage(event)">
                                    <div id="image-placeholder"
                                        class="w-full h-32 border-2 border-dashed border-gray-200 rounded-2xl flex flex-col items-center justify-center gap-2 text-gray-400 group-hover:border-[#00f0c8] group-hover:text-[#00f0c8] transition-all bg-gray-50/50">
                                        <i data-lucide="image-plus" size="32"></i>
                                        <span class="text-sm font-semibold">اسحب الصورة أو اضغط هنا</span>
                                    </div>
                                    <div id="image-preview-container"
                                        class="hidden absolute inset-0 bg-white rounded-2xl overflow-hidden border border-[#00f0c8] shadow-inner z-20">
                                        <img id="temp-img" src="" class="w-full h-full object-cover">
                                        <button type="button" onclick="removeImage()"
                                            class="absolute top-2 right-2 w-8 h-8 flex items-center justify-center bg-red-500 text-white rounded-lg shadow-lg hover:scale-110 transition-all z-30">
                                            <i data-lucide="x" size="16"></i>
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
                    <div class="overflow-x-auto overflow-y-auto max-h-[400px]">
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
                                        <td class="px-8 py-6">
                                            <div class="flex items-center gap-4">
                                                <div
                                                    class="relative w-14 h-14 rounded-xl overflow-hidden border-2 border-gray-100 shadow-sm flex-shrink-0">
                                                    <img src="{{ asset($project->image) }}"
                                                        class="w-full h-full object-cover">
                                                </div>
                                                <div>
                                                    <p class="font-bold text-gray-900">{{ $project->name }}</p>
                                                    <p
                                                        class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">
                                                        Project ID: #{{ $project->id }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-8 py-6">
                                            <div class="flex flex-col gap-1 max-w-xs">
                                                <p class="text-sm text-gray-600 leading-relaxed line-clamp-2">
                                                    {{ $project->description }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-8 py-6">
                                            <span
                                                class="px-3 py-1.5 bg-[#00f0c8]/10 text-[#2f9181] rounded-lg text-xs font-bold border border-[#00f0c8]/20">
                                                {{ $project->service->name }}
                                            </span>
                                        </td>
                                        <td class="px-8 py-6">
                                            <div class="flex items-center gap-3">
                                                <button onclick='editProject({!! json_encode($project) !!})'
                                                    class="w-10 h-10 flex items-center justify-center rounded-xl bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-all shadow-sm">
                                                    <i data-lucide="edit-3" size="18"></i>
                                                </button>
                                                <button onclick="deleteProject({{ $project->id }})"
                                                    class="w-10 h-10 flex items-center justify-center rounded-xl bg-red-50 text-red-600 hover:bg-red-600 hover:text-white transition-all shadow-sm">
                                                    <i data-lucide="trash-2" size="18"></i>
                                                </button>
                                            </div>
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
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 mr-2">اسم العضو (English)</label>
                                    <input type="text" id="member-name" placeholder="Name in English"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-gray-50/50">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 mr-2">الاسم (العربية)</label>
                                    <input type="text" id="member-name-ar" dir="rtl" placeholder="الاسم بالعربية"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-gray-50/50">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 mr-2">الدور (English)</label>
                                    <input type="text" id="member-role" placeholder="Role in English"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-gray-50/50">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 mr-2">الدور (العربية)</label>
                                    <input type="text" id="member-role-ar" dir="rtl" placeholder="الدور بالعربية"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-gray-50/50">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 mr-2">وصف مختصر (English)</label>
                                    <textarea id="member-desc" rows="3" placeholder="Bio in English..."
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-gray-50/50"></textarea>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 mr-2">الوصف (العربية)</label>
                                    <textarea id="member-desc-ar" rows="3" dir="rtl" placeholder="الوصف بالعربية..."
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-gray-50/50"></textarea>
                                </div>
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
                                        class="hidden absolute inset-0 bg-white rounded-2xl overflow-hidden border border-blue-500 shadow-inner z-20">
                                        <img id="member-temp-img" src="" class="w-full h-full object-cover">
                                        <button type="button" onclick="removeMemberImage()"
                                            class="absolute top-4 right-4 w-10 h-10 flex items-center justify-center bg-red-500 text-white rounded-xl shadow-lg hover:scale-110 transition-all z-30">
                                            <i data-lucide="trash-2" size="20"></i>
                                        </button>
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
                        <div class="overflow-x-auto overflow-y-auto max-h-[400px]">
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
                                            <td class="px-8 py-6">
                                                <div class="flex items-center gap-4">
                                                    <img src="{{ asset($member->image) }}"
                                                        class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
                                                    <p class="font-bold text-gray-900">{{ $member->name }}</p>
                                                </div>
                                            </td>
                                            <td class="px-8 py-6">
                                                <span
                                                    class="px-3 py-1 bg-blue-50 text-blue-600 rounded-lg text-xs font-bold">{{ $member->role }}</span>
                                            </td>
                                            <td class="px-8 py-6 text-sm text-gray-600 max-w-xs truncate">
                                                {{ $member->description }}
                                            </td>
                                            <td class="px-8 py-6">
                                                <div class="flex items-center gap-2">
                                                    <button onclick='editMember({!! json_encode($member) !!})'
                                                        class="w-9 h-9 flex items-center justify-center rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-all">
                                                        <i data-lucide="edit-3" size="16"></i>
                                                    </button>
                                                    <button onclick="deleteMember({{ $member->id }})"
                                                        class="w-9 h-9 flex items-center justify-center rounded-lg bg-red-50 text-red-600 hover:bg-red-600 hover:text-white transition-all">
                                                        <i data-lucide="trash-2" size="16"></i>
                                                    </button>
                                                </div>
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
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="space-y-2">
                                        <label class="text-sm font-bold text-gray-700 block">واتساب 1 (WhatsApp)</label>
                                        <input type="text" id="contact-whatsapp" value="{{ $contact->whatsapp }}"
                                            placeholder="مثلاً: 256789383140"
                                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="text-sm font-bold text-gray-700 block">واتساب 2 (WhatsApp)</label>
                                        <input type="text" id="contact-whatsapp2" value="{{ $contact->whatsapp2 }}"
                                            placeholder="مثلاً: 01275018291"
                                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="space-y-2">
                                        <label class="text-sm font-bold text-gray-700 block">فيسبوك (Facebook)</label>
                                        <input type="text" id="contact-facebook" value="{{ $contact->facebook }}"
                                            placeholder="رابط الصفحة الكامل"
                                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="text-sm font-bold text-gray-700 block">إنستجرام
                                            (Instagram)</label>
                                        <input type="text" id="contact-instagram" value="{{ $contact->instagram }}"
                                            placeholder="رابط الملف الشخصي"
                                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="space-y-2">
                                        <label class="text-sm font-bold text-gray-700 block">تيك توك (TikTok)</label>
                                        <input type="text" id="contact-tiktok" value="{{ $contact->tiktok }}"
                                            placeholder="رابط التيك توك"
                                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="text-sm font-bold text-gray-700 block">لينكد إن (LinkedIn)</label>
                                        <input type="text" id="contact-linkedin" value="{{ $contact->linkedin }}"
                                            placeholder="رابط لينكد إن"
                                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 block">يوتيوب (YouTube)</label>
                                    <input type="text" id="contact-youtube" value="{{ $contact->youtube }}"
                                        placeholder="رابط قناة اليوتيوب"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                </div>
                            </div>
                        </div>

                        <!-- Contact Details -->
                        <div class="space-y-6">
                            <h4 class="text-lg font-bold text-gray-800 border-r-4 border-blue-500 pr-4">بيانات الاتصال
                                والعنوان</h4>

                            <div class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="space-y-2">
                                        <label class="text-sm font-bold text-gray-700 block">رقم مصر (Egypt)</label>
                                        <input type="text" id="contact-phone-eg" value="{{ $contact->phone_eg }}"
                                            placeholder="+20..."
                                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="text-sm font-bold text-gray-700 block">رقم السودان (Sudan)</label>
                                        <input type="text" id="contact-phone-sd" value="{{ $contact->phone_sd }}"
                                            placeholder="+249..."
                                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="space-y-2">
                                        <label class="text-sm font-bold text-gray-700 block">رقم بريطانيا (UK)</label>
                                        <input type="text" id="contact-phone-uk" value="{{ $contact->phone_uk }}"
                                            placeholder="+44..."
                                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="text-sm font-bold text-gray-700 block">رقم عُمان (Oman)</label>
                                        <input type="text" id="contact-phone-om" value="{{ $contact->phone_om }}"
                                            placeholder="+968..."
                                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-700 block">البريد الإلكتروني</label>
                                    <input type="email" id="contact-email" value="{{ $contact->email }}"
                                        placeholder="info@digitalage.com"
                                        class="w-full px-5 py-4 rounded-2xl border border-gray-200 outline-none bg-gray-50/50">
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="space-y-2">
                                        <label class="text-sm font-bold text-gray-700 block text-right">الموقع / العنوان
                                            (English)</label>
                                        <textarea id="contact-address" rows="3" placeholder="Sudan, Khartoum..."
                                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-gray-50/50 text-right">{{ $contact->address }}</textarea>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="text-sm font-bold text-gray-700 block text-right">الموقع / العنوان
                                            (العربية)</label>
                                        <textarea id="contact-address-ar" dir="rtl" rows="3"
                                            placeholder="السودان، الخرطوم..."
                                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-gray-50/50 text-right">{{ $contact->address_ar }}</textarea>
                                    </div>
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

                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">اسم الخدمة (English)</label>
                                <input type="text" id="service-name" placeholder="Service Name in English"
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-lime-500 focus:ring-4 focus:ring-lime-500/10 outline-none transition-all bg-gray-50/50">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">الاسم (العربية)</label>
                                <input type="text" id="service-name-ar" dir="rtl" placeholder="اسم الخدمة بالعربية"
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-lime-500 focus:ring-4 focus:ring-lime-500/10 outline-none transition-all bg-gray-50/50">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 mr-2">أيقونة الخدمة (Lucide)</label>
                            <input type="text" id="service-icon" placeholder="مثلاً: monitor, code, globe"
                                class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-lime-500 focus:ring-4 focus:ring-lime-500/10 outline-none transition-all bg-gray-50/50">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">وصف الخدمة (English)</label>
                                <textarea id="service-desc" rows="5" placeholder="Description in English..."
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-lime-500 focus:ring-4 focus:ring-lime-500/10 outline-none transition-all bg-gray-50/50"></textarea>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">الوصف (العربية)</label>
                                <textarea id="service-desc-ar" rows="5" dir="rtl" placeholder="وصف الخدمة بالعربية..."
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-lime-500 focus:ring-4 focus:ring-lime-500/10 outline-none transition-all bg-gray-50/50"></textarea>
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
                </div>

                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-8 border-b border-gray-50">
                        <h3 class="text-xl font-bold text-gray-800">قائمة الخدمات</h3>
                    </div>
                    <div class="overflow-x-auto overflow-y-auto max-h-[400px]">
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
                                        <td class="px-8 py-6">
                                            <div class="flex items-center gap-4">
                                                <div
                                                    class="w-10 h-10 bg-lime-50 rounded-lg flex items-center justify-center text-lime-600">
                                                    <i data-lucide="{{ $service->icon }}" size="20"></i>
                                                </div>
                                                <p class="font-bold text-gray-900">{{ $service->name }}</p>
                                            </div>
                                        </td>
                                        <td class="px-8 py-6 text-sm text-gray-600 max-w-md truncate">
                                            {{ $service->description }}
                                        </td>
                                        <td class="px-8 py-6">
                                            <div class="flex items-center gap-2">
                                                <button onclick='editService({!! json_encode($service) !!})'
                                                    class="w-9 h-9 flex items-center justify-center rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-all">
                                                    <i data-lucide="edit-3" size="16"></i>
                                                </button>
                                                <button onclick="deleteService({{ $service->id }})"
                                                    class="w-9 h-9 flex items-center justify-center rounded-lg bg-red-50 text-red-600 hover:bg-red-600 hover:text-white transition-all">
                                                    <i data-lucide="trash-2" size="16"></i>
                                                </button>
                                            </div>
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

                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">الاسم (English)</label>
                                <input type="text" id="impact-name" placeholder="Name in English"
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-500/10 outline-none transition-all bg-gray-50/50">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">الاسم (العربية)</label>
                                <input type="text" id="impact-name-ar" dir="rtl" placeholder="الاسم بالعربية"
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-500/10 outline-none transition-all bg-gray-50/50">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 mr-2">الأيقونة (Lucide)</label>
                            <input type="text" id="impact-icon" value="user-round" placeholder="مثلاً: user, star, leaf"
                                class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-500/10 outline-none transition-all bg-gray-50/50">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">النص (English)</label>
                                <textarea id="impact-text" rows="4" placeholder="Text in English..."
                                    class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-500/10 outline-none transition-all bg-gray-50/50"></textarea>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 mr-2">النص (العربية)</label>
                                <textarea id="impact-text-ar" rows="4" dir="rtl" placeholder="النص بالعربية..."
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
                    <div class="overflow-x-auto overflow-y-auto max-h-[400px]">
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
                                        <td class="px-8 py-6">
                                            <div class="flex items-center gap-4">
                                                <div
                                                    class="w-12 h-12 bg-orange-50 rounded-xl flex items-center justify-center text-orange-500 shadow-sm border border-orange-100">
                                                    <i data-lucide="{{ $impact->icon }}" size="20"></i>
                                                </div>
                                                <p class="font-bold text-gray-900">{{ $impact->name }}</p>
                                            </div>
                                        </td>
                                        <td class="px-8 py-6 text-sm text-gray-600 max-w-md">
                                            <p class="truncate">{{ $impact->text }}</p>
                                        </td>
                                        <td class="px-8 py-6">
                                            <div class="flex items-center gap-2">
                                                <button onclick='editImpact({!! json_encode($impact) !!})'
                                                    class="w-9 h-9 flex items-center justify-center rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-all">
                                                    <i data-lucide="edit-3" size="16"></i>
                                                </button>
                                                <button onclick="deleteImpact({{ $impact->id }})"
                                                    class="w-9 h-9 flex items-center justify-center rounded-lg bg-red-50 text-red-600 hover:bg-red-600 hover:text-white transition-all">
                                                    <i data-lucide="trash-2" size="16"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- CAREERS MANAGEMENT -->
            <section id="careers-tab" class="tab-content hidden space-y-8">
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">
                    <h3 class="text-xl font-bold mb-8 flex items-center gap-3">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                            <i data-lucide="scroll-text" size="24"></i>
                        </div>
                        <span id="career-form-title">إضافة وظيفة جديدة</span>
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 mr-2">مسمى الوظيفة (English)</label>
                            <input type="text" id="career-title" placeholder="Job Title in English"
                                class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-500/10 outline-none transition-all bg-gray-50/50">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 mr-2">مسمى الوظيفة (العربية)</label>
                            <input type="text" id="career-title-ar" dir="rtl" placeholder="المسمى الوظيفي بالعربية"
                                class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-500/10 outline-none transition-all bg-gray-50/50">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 mr-2">القسم / التصنيف</label>
                            <select id="career-category"
                                class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-500/10 outline-none transition-all bg-gray-50/50">
                                <option value="">-- اختر القسم --</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 mr-2">المدة (English)</label>
                            <input type="text" id="career-duration" placeholder="e.g. Full-time"
                                class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-500/10 outline-none transition-all bg-gray-50/50">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 mr-2">المدة (العربية)</label>
                            <input type="text" id="career-duration-ar" dir="rtl" placeholder="مثلاً: دوام كامل"
                                class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-500/10 outline-none transition-all bg-gray-50/50">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 mr-2">الموعد النهائي</label>
                            <input type="date" id="career-deadline"
                                class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-500/10 outline-none transition-all bg-gray-50/50">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 mr-2">وصف مختصر (English)</label>
                            <textarea id="career-desc" rows="3" placeholder="Job description in English..."
                                class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-500/10 outline-none transition-all bg-gray-50/50"></textarea>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 mr-2">وصف مختصر (العربية)</label>
                            <textarea id="career-desc-ar" rows="3" dir="rtl" placeholder="وصف الوظيفة بالعربية..."
                                class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-500/10 outline-none transition-all bg-gray-50/50"></textarea>
                        </div>
                    </div>

                </div>

                <!-- HTML Editor for Careers -->
                <div class="flex flex-col space-y-2 h-full">
                    <label class="text-sm font-bold text-gray-700 mr-2 flex items-center gap-2">
                        <i data-lucide="code-2" size="18" class="text-purple-600"></i>
                        برمجة صفحة الوظيفة (HTML Custom Page)
                    </label>
                    <div
                        class="flex-1 min-h-[400px] bg-[#1e293b] rounded-3xl overflow-hidden shadow-2xl border border-gray-700 flex flex-col">
                        <div class="flex-1 flex flex-col xl:flex-row overflow-hidden h-full">
                            <div
                                class="flex-1 relative border-b xl:border-b-0 xl:border-l border-gray-700 h-1/2 xl:h-full">
                                <textarea id="career-html" dir="ltr" spellcheck="false"
                                    class="w-full h-full bg-transparent text-[#e879f9] p-6 font-mono text-[13px] resize-none outline-none leading-relaxed"
                                    placeholder="<h1>تفاصيل الوظيفة...</h1>" oninput="updateCareerPreview()"></textarea>
                            </div>
                            <div class="flex-1 bg-white h-1/2 xl:h-full relative overflow-hidden">
                                <iframe id="career-live-preview" class="w-full h-full border-none"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="editing-career-id" value="">
                <div class="mt-8 flex justify-end gap-3">
                    <button id="cancel-career-edit" onclick="resetCareerForm()"
                        class="hidden px-8 py-4 bg-gray-100 text-gray-600 font-bold rounded-2xl hover:bg-gray-200 transition-all">إلغاء</button>
                    <button onclick="saveCareer()"
                        class="px-12 py-4 bg-gradient-to-r from-purple-500 to-indigo-600 text-white font-black text-lg rounded-2xl shadow-xl hover:shadow-purple-500/40 hover:-translate-y-1 transition-all flex items-center gap-3">
                        <span id="save-career-btn-text">حفظ الوظيفة</span>
                        <i data-lucide="check-circle" size="24"></i>
                    </button>
                </div>

                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-8 border-b border-gray-50">
                        <h3 class="text-xl font-bold text-gray-800">قائمة الوظائف المتاحة</h3>
                    </div>
                    <div class="overflow-x-auto overflow-y-auto max-h-[400px]">
                        <table class="w-full text-right">
                            <thead class="bg-gray-50 text-gray-500 text-[11px] font-bold uppercase tracking-widest">
                                <tr>
                                    <th class="px-8 py-5">الوظيفة والمدة</th>
                                    <th class="px-8 py-5">القسم / التصنيف</th>
                                    <th class="px-8 py-5">التاريخ / الموعد</th>
                                    <th class="px-8 py-5">الوصف</th>
                                    <th class="px-8 py-5">العمليات</th>
                                </tr>
                            </thead>
                            <tbody id="careers-list" class="divide-y divide-gray-100">
                                @foreach($careers as $career)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-8 py-6">
                                            <div>
                                                <p class="font-bold text-gray-900">{{ $career->title }}</p>
                                                <p class="text-[10px] text-purple-500 font-bold uppercase tracking-wider">
                                                    {{ $career->duration }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-8 py-6">
                                            <span
                                                class="px-3 py-1.5 bg-purple-50 text-purple-600 rounded-lg text-xs font-black border border-purple-100 uppercase">
                                                {{ $career->category }}
                                            </span>
                                        </td>

                                        <td class="px-8 py-6">
                                            <p class="text-sm font-semibold text-gray-700">
                                                {{ $career->created_at->format('Y-m-d') }}
                                            </p>
                                            @if($career->deadline)
                                                <p class="text-[10px] text-red-500 font-bold">ينتهي: {{ $career->deadline }}</p>
                                            @endif
                                        </td>
                                        <td class="px-8 py-6 text-sm text-gray-600 max-w-xs truncate">
                                            {{ $career->description }}
                                        </td>
                                        <td class="px-8 py-6">
                                            <div class="flex items-center gap-2">
                                                <button onclick='editCareer({!! json_encode($career) !!})'
                                                    class="w-10 h-10 flex items-center justify-center rounded-xl bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-all shadow-sm">
                                                    <i data-lucide="edit-3" size="18"></i>
                                                </button>
                                                <button onclick="deleteCareer({{ $career->id }})"
                                                    class="w-10 h-10 flex items-center justify-center rounded-xl bg-red-50 text-red-600 hover:bg-red-600 hover:text-white transition-all shadow-sm">
                                                    <i data-lucide="trash-2" size="18"></i>
                                                </button>
                                            </div>
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
                'contacts': 'بيانات التواصل والإحصائيات',
                'impacts': 'إدارة تأثيرنا (Testimonials)',
                'careers': 'إدارة الوظائف والمهن'
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
            formData.append('name_ar', document.getElementById('proj-name-ar').value);
            formData.append('service_id', document.getElementById('proj-category').value);
            formData.append('description', document.getElementById('proj-desc').value);
            formData.append('description_ar', document.getElementById('proj-desc-ar').value);
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

        function editProject(project) {
            document.getElementById('editing-project-id').value = project.id;
            document.getElementById('proj-name').value = project.name;
            document.getElementById('proj-name-ar').value = project.name_ar || '';
            document.getElementById('proj-category').value = project.service_id;
            document.getElementById('proj-desc').value = project.description;
            document.getElementById('proj-desc-ar').value = project.description_ar || '';
            document.getElementById('proj-html').value = project.html_content || '';

            if (project.image) {
                document.getElementById('temp-img').src = '/' + project.image;
                document.getElementById('image-placeholder').classList.add('hidden');
                document.getElementById('image-preview-container').classList.remove('hidden');
            } else {
                removeImage();
            }

            document.getElementById('project-form-header').innerText = 'تعديل العمل: ' + project.name;
            document.getElementById('save-project-btn-text').innerText = 'تحديث العمل في البورتفوليو';
            document.getElementById('cancel-project-edit').classList.remove('hidden');

            updateFormPreview();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function resetProjectForm() {
            document.getElementById('editing-project-id').value = '';
            document.getElementById('proj-name').value = '';
            document.getElementById('proj-name-ar').value = '';
            document.getElementById('proj-desc').value = '';
            document.getElementById('proj-desc-ar').value = '';
            document.getElementById('proj-html').value = '';
            removeImage();
            document.getElementById('project-form-header').innerText = 'إضافة عمل جديد للبورتفوليو';
            document.getElementById('save-project-btn-text').innerText = 'حفظ العمل في البورتفوليو';
            document.getElementById('cancel-project-edit').classList.add('hidden');
            updateFormPreview();
        }



        function resetMemberForm() {
            document.getElementById('editing-member-id').value = '';
            document.getElementById('member-name').value = '';
            document.getElementById('member-name-ar').value = '';
            document.getElementById('member-role').value = '';
            document.getElementById('member-role-ar').value = '';
            document.getElementById('member-desc').value = '';
            document.getElementById('member-desc-ar').value = '';
            removeMemberImage();
            document.getElementById('member-form-title').innerText = 'إضافة عضو فريق جديد';
            document.getElementById('save-member-btn-text').innerText = 'حفظ العضو';
            document.getElementById('cancel-member-edit').classList.add('hidden');
        }



        function resetServiceForm() {
            document.getElementById('editing-service-id').value = '';
            document.getElementById('service-name').value = '';
            document.getElementById('service-name-ar').value = '';
            document.getElementById('service-icon').value = '';
            document.getElementById('service-desc').value = '';
            document.getElementById('service-desc-ar').value = '';
            document.getElementById('service-form-title').innerText = 'إضافة خدمة جديدة';
            document.getElementById('save-service-btn-text').innerText = 'حفظ الخدمة';
            document.getElementById('cancel-service-edit').classList.add('hidden');
        }



        // --- Member Logic ---

        async function saveMember() {
            const formData = new FormData();
            formData.append('id', document.getElementById('editing-member-id').value);
            formData.append('name', document.getElementById('member-name').value);
            formData.append('name_ar', document.getElementById('member-name-ar').value);
            formData.append('role', document.getElementById('member-role').value);
            formData.append('role_ar', document.getElementById('member-role-ar').value);
            formData.append('description', document.getElementById('member-desc').value);
            formData.append('description_ar', document.getElementById('member-desc-ar').value);

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

        function editMember(member) {
            document.getElementById('editing-member-id').value = member.id;
            document.getElementById('member-name').value = member.name;
            document.getElementById('member-name-ar').value = member.name_ar || '';
            document.getElementById('member-role').value = member.role;
            document.getElementById('member-role-ar').value = member.role_ar || '';
            document.getElementById('member-desc').value = member.description;
            document.getElementById('member-desc-ar').value = member.description_ar || '';

            if (member.image) {
                document.getElementById('member-temp-img').src = '/' + member.image;
                document.getElementById('member-image-placeholder').classList.add('hidden');
                document.getElementById('member-image-preview-container').classList.remove('hidden');
            } else {
                removeMemberImage();
            }

            document.getElementById('member-form-title').innerText = 'تعديل العضو: ' + member.name;
            document.getElementById('save-member-btn-text').innerText = 'تحديث العضو';
            document.getElementById('cancel-member-edit').classList.remove('hidden');

            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // --- Service Logic ---
        async function saveService() {
            const data = {
                id: document.getElementById('editing-service-id').value,
                name: document.getElementById('service-name').value,
                name_ar: document.getElementById('service-name-ar').value,
                icon: document.getElementById('service-icon').value,
                description: document.getElementById('service-desc').value,
                description_ar: document.getElementById('service-desc-ar').value,
            };

            if (!data.name || !data.icon) {
                alert('يرجى إدخال اسم الخدمة والأيقونة على الأقل');
                return;
            }

            try {
                const response = await fetch('{{ route("admin.services.save") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify(data)
                });

                if (!response.ok) {
                    const errorInfo = await response.json();
                    console.error('Server error:', errorInfo);
                    alert('حدث خطأ في الخادم أثناء حفظ الخدمة. يرجى التأكد من البيانات.');
                    return;
                }

                const result = await response.json();
                if (result.success) {
                    alert('تم حفظ الخدمة بنجاح');
                    location.reload();
                }
            } catch (error) {
                console.error('Error saving service:', error);
                alert('حدث خطأ أثناء الاتصال بالخادم.');
            }
        }

        function editService(service) {
            document.getElementById('editing-service-id').value = service.id;
            document.getElementById('service-name').value = service.name;
            document.getElementById('service-name-ar').value = service.name_ar || '';
            document.getElementById('service-icon').value = service.icon;
            document.getElementById('service-desc').value = service.description;
            document.getElementById('service-desc-ar').value = service.description_ar || '';

            document.getElementById('service-form-title').innerText = 'تعديل الخدمة: ' + service.name;
            document.getElementById('save-service-btn-text').innerText = 'تحديث الخدمة';
            document.getElementById('cancel-service-edit').classList.remove('hidden');

            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function resetServiceForm() {
            document.getElementById('editing-service-id').value = '';
            document.getElementById('service-name').value = '';
            document.getElementById('service-name-ar').value = '';
            document.getElementById('service-icon').value = '';
            document.getElementById('service-desc').value = '';
            document.getElementById('service-desc-ar').value = '';
            document.getElementById('service-form-title').innerText = 'إضافة خدمة جديدة';
            document.getElementById('save-service-btn-text').innerText = 'حفظ الخدمة';
            document.getElementById('cancel-service-edit').classList.add('hidden');
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

        function editService(service) {
            document.getElementById('editing-service-id').value = service.id;
            document.getElementById('service-name').value = service.name;
            document.getElementById('service-icon').value = service.icon;
            document.getElementById('service-desc').value = service.description;

            document.getElementById('service-form-title').innerText = 'تعديل الخدمة: ' + service.name;
            document.getElementById('save-service-btn-text').innerText = 'تحديث الخدمة';
            document.getElementById('cancel-service-edit').classList.remove('hidden');

            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // --- Contact Logic ---
        async function saveContacts() {
            const data = {
                whatsapp: document.getElementById('contact-whatsapp').value,
                whatsapp2: document.getElementById('contact-whatsapp2').value,
                facebook: document.getElementById('contact-facebook').value,
                instagram: document.getElementById('contact-instagram').value,
                tiktok: document.getElementById('contact-tiktok').value,
                linkedin: document.getElementById('contact-linkedin').value,
                youtube: document.getElementById('contact-youtube').value,
                phone_eg: document.getElementById('contact-phone-eg').value,
                phone_sd: document.getElementById('contact-phone-sd').value,
                phone_uk: document.getElementById('contact-phone-uk').value,
                phone_om: document.getElementById('contact-phone-om').value,
                email: document.getElementById('contact-email').value,
                address: document.getElementById('contact-address').value,
                address_ar: document.getElementById('contact-address-ar').value
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
            const formData = new FormData();
            formData.append('id', document.getElementById('editing-impact-id').value);
            formData.append('name', document.getElementById('impact-name').value);
            formData.append('name_ar', document.getElementById('impact-name-ar').value);
            formData.append('icon', document.getElementById('impact-icon').value);
            formData.append('text', document.getElementById('impact-text').value);
            formData.append('text_ar', document.getElementById('impact-text-ar').value);

            if (!document.getElementById('impact-name').value || !document.getElementById('impact-text').value) {
                alert('يرجى ملء الاسم والنص');
                return;
            }

            try {
                const response = await fetch('{{ route("admin.impact.save") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: formData
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
                    alert('تم الحذف بنجاح');
                    location.reload();
                }
            } catch (error) {
                console.error('Error deleting impact:', error);
            }
        }

        function editImpact(impact) {
            document.getElementById('editing-impact-id').value = impact.id;
            document.getElementById('impact-name').value = impact.name;
            document.getElementById('impact-name-ar').value = impact.name_ar || '';
            document.getElementById('impact-icon').value = impact.icon;
            document.getElementById('impact-text').value = impact.text;
            document.getElementById('impact-text-ar').value = impact.text_ar || '';



            document.getElementById('impact-form-title').innerText = 'تعديل الرأي: ' + impact.name;
            document.getElementById('save-impact-btn-text').innerText = 'تحديث التأثير';
            document.getElementById('cancel-impact-edit').classList.remove('hidden');

            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function resetImpactForm() {
            document.getElementById('editing-impact-id').value = '';
            document.getElementById('impact-name').value = '';
            document.getElementById('impact-name-ar').value = '';
            document.getElementById('impact-icon').value = 'user-round';
            document.getElementById('impact-text').value = '';
            document.getElementById('impact-text-ar').value = '';

            document.getElementById('impact-form-title').innerText = 'إضافة رأي جديد (Impact)';
            document.getElementById('save-impact-btn-text').innerText = 'حفظ التأثير';
            document.getElementById('cancel-impact-edit').classList.add('hidden');
        }

        async function saveCareer() {
            const catSelect = document.getElementById('career-category');
            const data = {
                id: document.getElementById('editing-career-id').value,
                title: document.getElementById('career-title').value,
                title_ar: document.getElementById('career-title-ar').value,
                category: catSelect.value ? catSelect.options[catSelect.selectedIndex].text : '',
                duration: document.getElementById('career-duration').value,
                duration_ar: document.getElementById('career-duration-ar').value,
                deadline: document.getElementById('career-deadline').value,
                service_id: catSelect.value,
                description: document.getElementById('career-desc').value,
                description_ar: document.getElementById('career-desc-ar').value,
                html_content: document.getElementById('career-html').value
            };

            if (!data.title || !data.duration) {
                alert('يرجى إدخال المسمى والمدة على الأقل');
                return;
            }

            try {
                const response = await fetch('{{ route("admin.careers.save") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify(data)
                });
                const result = await response.json();
                if (result.success) {
                    alert('تم حفظ الوظيفة بنجاح');
                    location.reload();
                }
            } catch (error) {
                console.error('Error saving career:', error);
            }
        }

        async function deleteCareer(id) {
            if (!confirm('هل أنت متأكد من حذف هذه الوظيفة؟')) return;
            try {
                const response = await fetch(`/admin/careers/delete/${id}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
                const result = await response.json();
                if (result.success) {
                    alert('تم الحذف بنجاح');
                    location.reload();
                }
            } catch (error) {
                console.error('Error deleting career:', error);
            }
        }

        function editCareer(career) {
            document.getElementById('editing-career-id').value = career.id;
            document.getElementById('career-title').value = career.title;
            document.getElementById('career-title-ar').value = career.title_ar || '';
            document.getElementById('career-category').value = career.service_id || '';
            document.getElementById('career-duration').value = career.duration;
            document.getElementById('career-duration-ar').value = career.duration_ar || '';
            document.getElementById('career-deadline').value = career.deadline || '';
            document.getElementById('career-desc').value = career.description;
            document.getElementById('career-desc-ar').value = career.description_ar || '';
            document.getElementById('career-html').value = career.html_content || '';

            document.getElementById('career-form-title').innerText = 'تعديل الوظيفة: ' + career.title;
            document.getElementById('save-career-btn-text').innerText = 'تحديث الوظيفة';
            document.getElementById('cancel-career-edit').classList.remove('hidden');

            updateCareerPreview();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function resetCareerForm() {
            document.getElementById('editing-career-id').value = '';
            document.getElementById('career-title').value = '';
            document.getElementById('career-title-ar').value = '';
            document.getElementById('career-duration').value = '';
            document.getElementById('career-duration-ar').value = '';
            document.getElementById('career-deadline').value = '';
            document.getElementById('career-category').value = '';
            document.getElementById('career-desc').value = '';
            document.getElementById('career-desc-ar').value = '';
            document.getElementById('career-html').value = '';
            document.getElementById('career-form-title').innerText = 'إضافة وظيفة جديدة';
            document.getElementById('save-career-btn-text').innerText = 'حفظ الوظيفة';
            document.getElementById('cancel-career-edit').classList.add('hidden');
            updateCareerPreview();
        }

        async function translateText(text) {
            if (!text) return '';
            try {
                const response = await fetch('{{ route("admin.translate") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({ text: text })
                });
                const result = await response.json();
                return result.translated || '';
            } catch (error) {
                console.error('Translation error:', error);
                return '';
            }
        }



        function updateCareerPreview() {
            const html = document.getElementById('career-html').value;
            const iframe = document.getElementById('career-live-preview');
            const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
            iframeDoc.open();
            iframeDoc.write(html || '<div style="padding:20px; color:#999; font-family:sans-serif;">لا يوجد محتوى للعرض...</div>');
            iframeDoc.close();
        }

        // Initial previews
        updateFormPreview();
        updateCareerPreview();
    </script>

</body>

</html>