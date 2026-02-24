<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Service;
use App\Models\Member;
use App\Models\Contact;
use App\Models\Impact;
use App\Models\PortfolioProject;

class InitialDataSeeder extends Seeder
{
    public function run(): void
    {
        Service::query()->delete();
        Member::query()->delete();
        Contact::query()->delete();
        PortfolioProject::query()->delete();
        Impact::query()->delete();
        \App\Models\Career::query()->delete();

        // 1. Services
        $s1 = Service::create([
            'name' => 'Software Development',
            'name_ar' => 'تطوير البرمجيات',
            'slug' => 'software-development',
            'icon' => 'code',
            'description' => 'Custom software solutions built with modern frameworks.',
            'description_ar' => 'حلول برمجية مخصصة مبنية بأحدث أطر العمل.'
        ]);
        $s2 = Service::create([
            'name' => 'Web Application',
            'name_ar' => 'تطبيقات الويب',
            'slug' => 'web-application',
            'icon' => 'globe',
            'description' => 'Responsive, fast, and scalable web applications.',
            'description_ar' => 'تطبيقات ويب سريعة وقابلة للتوسع ومتوافقة مع جميع الأجهزة.'
        ]);
        $s3 = Service::create([
            'name' => 'Systems Programming',
            'name_ar' => 'برمجة الأنظمة',
            'slug' => 'systems-programming',
            'icon' => 'cpu',
            'description' => 'High-performance systems programming solutions.',
            'description_ar' => 'حلول برمجة أنظمة عالية الأداء.'
        ]);
        $s4 = Service::create([
            'name' => 'Graphic Design',
            'name_ar' => 'التصميم الجرافيكي',
            'slug' => 'graphic-design',
            'icon' => 'palette',
            'description' => 'Creative designs that elevate your brand identity.',
            'description_ar' => 'تصاميم إبداعية ترفع من هوية علامتك التجارية.'
        ]);
        $s5 = Service::create([
            'name' => 'Digital Marketing',
            'name_ar' => 'التسويق الرقمي',
            'slug' => 'digital-marketing',
            'icon' => 'trending-up',
            'description' => 'Data-driven marketing strategies to grow your online presence.',
            'description_ar' => 'استراتيجيات تسويق قائمة على البيانات لتنمية تواجدك عبر الإنترنت.'
        ]);
        $s6 = Service::create([
            'name' => 'Mobile Application',
            'name_ar' => 'تطبيقات الهاتف',
            'slug' => 'mobile-application',
            'icon' => 'smartphone',
            'description' => 'Smart apps and effective communication.',
            'description_ar' => 'تطبيقات ذكية وتواصل فعال.'
        ]);

        // 2. Members
        Member::create([
            'name' => 'Amira Hassan',
            'name_ar' => 'أميرة حسن',
            'role' => 'Project Manager',
            'role_ar' => 'مدير مشروع',
            'description' => 'Dedicated organizer with over 5 years of experience.',
            'description_ar' => 'منظمة متفانية بخبرة تزيد عن 5 سنوات.',
            'image' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80'
        ]);
        Member::create([
            'name' => 'David Miller',
            'name_ar' => 'ديفيد ميلر',
            'role' => 'Senior Developer',
            'role_ar' => 'مطور أول',
            'description' => 'Expert in backend systems and cloud architecture.',
            'description_ar' => 'خبير في أنظمة الخلفية ومعمارية السحاب.',
            'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80'
        ]);
        Member::create([
            'name' => 'Dr. Fatima Ali',
            'name_ar' => 'د. فاطمة علي',
            'role' => 'Lead Designer',
            'role_ar' => 'مصمم رئيسي',
            'description' => 'Passionate about creating user-centered designs.',
            'description_ar' => 'شغوفة بإنشاء تصاميم تركز على المستخدم.',
            'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80'
        ]);

        // 3. Contacts
        Contact::create([
            'email' => 'info@digitalage.com',
            'phone' => '+1234567890',
            'whatsapp' => '201275018291',
            'facebook' => 'https://facebook.com/yourprofile',
            'tiktok' => 'https://www.tiktok.com/@yourpage',
            'youtube' => 'https://www.youtube.com/@yourchannel',
            'instagram' => 'https://instagram.com/yourprofile',
            'linkedin' => 'https://linkedin.com/in/yourprofile',
            'address' => 'Sudan, Khartoum',
            'address_ar' => 'السودان، الخرطوم',
            'statProjects' => '500+',
            'statClients' => '200+',
            'statTeam' => '50+',
            'statYears' => '7+'
        ]);

        // 4. Portfolio Projects
        PortfolioProject::create([
            'name' => 'Women Empowerment',
            'name_ar' => 'تمكين المرأة',
            'service_id' => $s1->id,
            'category_name' => 'Social Impact',
            'description' => 'A project focused on digitizing women empowerment initiatives.',
            'image' => 'Images/last1.jpeg'
        ]);
        PortfolioProject::create([
            'name' => 'Education Portal',
            'name_ar' => 'بوابة التعليم',
            'service_id' => $s2->id,
            'category_name' => 'Education',
            'description' => 'A comprehensive platform for online learning.',
            'image' => 'Images/last2.jpeg'
        ]);

        // 5. Impacts
        Impact::create([
            'name' => 'Amira Hassan',
            'name_ar' => 'أميرة حسن',
            'icon' => 'user-round',
            'text' => '"Digital Age changed our village. The new well means our children no longer have to walk miles for water. We are forever grateful."',
            'text_ar' => '"جعلت ديجيتال أيج التغيير ممكناً في قريتنا. البئر الجديد يعني أن أطفالنا لم يعودوا بحاجة للمشي أميالاً للحصول على الماء. نحن ممتنون للأبد."'
        ]);
        Impact::create([
            'name' => 'David Miller',
            'name_ar' => 'ديفيد ميلر',
            'icon' => 'user-round',
            'text' => '"I\'ve donated to many NGOs, but the transparency and regular updates from Digital Age make me confident that my money is truly helping."',
            'text_ar' => '"لقد تبرعت للعديد من المنظمات غير الحكومية، لكن الشفافية والتحديثات المنتظمة من ديجيتال أيج تجعلني واثقاً من أن أموالي تساعد حقاً."'
        ]);
        Impact::create([
            'name' => 'Dr. Fatima Ali',
            'name_ar' => 'د. فاطمة علي',
            'icon' => 'user-round',
            'text' => '"Working with Digital Age has been an honor. The team on the ground is dedicated and truly cares about the people they serve."',
            'text_ar' => '"العمل مع ديجيتال أيج كان شرفاً لي. الفريق الميداني متفانٍ ويهتم حقاً بالأشخاص الذين يخدمهم."'
        ]);

        // 6. Careers
        \App\Models\Career::create([
            'title' => 'Software Engineer',
            'title_ar' => 'مهندس برمجيات',
            'category' => 'Engineering',
            'category_ar' => 'الهندسة',
            'service_id' => $s1->id,
            'duration' => 'Permanent',
            'duration_ar' => 'دائم',
            'working_hours' => 'Full-time',
            'working_hours_ar' => 'دوام كامل',
            'deadline' => now()->addMonths(2)->format('Y-m-d'),
            'description' => 'We are looking for a skilled software engineer to join our dynamic team and build innovative solutions.',
            'description_ar' => 'نحن نبحث عن مهندس برمجيات ماهر للانضمام إلى فريقنا الديناميكي وبناء حلول مبتكرة.'
        ]);
        \App\Models\Career::create([
            'title' => 'Graphic Designer',
            'title_ar' => 'مصمم جرافيك',
            'category' => 'Design',
            'category_ar' => 'التصميم',
            'service_id' => $s4->id,
            'duration' => 'Contract - 6 Months',
            'duration_ar' => 'عقد - 6 أشهر',
            'working_hours' => 'Part-time',
            'working_hours_ar' => 'دوام جزئي',
            'deadline' => now()->addMonth()->format('Y-m-d'),
            'description' => 'Creative graphic designer needed to elevate our brand identity and create stunning visual content.',
            'description_ar' => 'مطلوب مصمم جرافيك مبدع لرفع هوية علامتك التجارية وإنشاء محتوى بصري مذهل.'
        ]);
        \App\Models\Career::create([
            'title' => 'Digital Marketer',
            'title_ar' => 'مسوق رقمي',
            'category' => 'Marketing',
            'category_ar' => 'التسوق',
            'service_id' => $s5->id,
            'duration' => 'Permanent',
            'duration_ar' => 'دائم',
            'working_hours' => 'Remote',
            'working_hours_ar' => 'عن بعد',
            'deadline' => now()->addDays(15)->format('Y-m-d'),
            'description' => 'Join our marketing team to develop data-driven strategies and grow our online presence.',
            'description_ar' => 'انضم إلى فريق التسويق لدينا لتطوير استراتيجيات قائمة على البيانات وتنمية تواجدنا عبر الإنترنت.'
        ]);
    }
}
