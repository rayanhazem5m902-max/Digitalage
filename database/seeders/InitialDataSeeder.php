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
        Service::truncate();
        Member::truncate();
        Contact::truncate();
        PortfolioProject::truncate();
        Impact::truncate();

        // 1. Services
        $s1 = Service::create(['name' => 'Software Development', 'slug' => 'software-development', 'icon' => 'code', 'description' => 'Custom software solutions built with modern frameworks.']);
        $s2 = Service::create(['name' => 'Web Application', 'slug' => 'web-application', 'icon' => 'globe', 'description' => 'Responsive, fast, and scalable web applications.']);
        $s3 = Service::create(['name' => 'Systems Programming', 'slug' => 'systems-programming', 'icon' => 'cpu', 'description' => 'High-performance systems programming solutions.']);
        $s4 = Service::create(['name' => 'Graphic Design', 'slug' => 'graphic-design', 'icon' => 'palette', 'description' => 'Creative designs that elevate your brand identity.']);
        $s5 = Service::create(['name' => 'Digital Marketing', 'slug' => 'digital-marketing', 'icon' => 'trending-up', 'description' => 'Data-driven marketing strategies to grow your online presence.']);
        $s6 = Service::create(['name' => 'Mobile Application', 'slug' => 'mobile-application', 'icon' => 'smartphone', 'description' => 'Smart apps and effective communication.']);

        // 2. Members
        Member::create(['name' => 'Amira Hassan', 'role' => 'Project Manager', 'description' => 'Dedicated organizer with over 5 years of experience.', 'image' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80']);
        Member::create(['name' => 'David Miller', 'role' => 'Senior Developer', 'description' => 'Expert in backend systems and cloud architecture.', 'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80']);
        Member::create(['name' => 'Dr. Fatima Ali', 'role' => 'Lead Designer', 'description' => 'Passionate about creating user-centered designs.', 'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80']);

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
            'statProjects' => '500+',
            'statClients' => '200+',
            'statTeam' => '50+',
            'statYears' => '7+'
        ]);

        // 4. Portfolio Projects
        PortfolioProject::create([
            'name' => 'Women Empowerment',
            'service_id' => $s1->id,
            'category_name' => 'Social Impact',
            'description' => 'A project focused on digitizing women empowerment initiatives.',
            'image' => 'Images/last1.jpeg'
        ]);
        PortfolioProject::create([
            'name' => 'Education Portal',
            'service_id' => $s2->id,
            'category_name' => 'Education',
            'description' => 'A comprehensive platform for online learning.',
            'image' => 'Images/last2.jpeg'
        ]);

        // 5. Impacts
        Impact::create([
            'name' => 'Amira Hassan',
            'icon' => 'user-round',
            'text' => '"Digital Age changed our village. The new well means our children no longer have to walk miles for water. We are forever grateful."'
        ]);
        Impact::create([
            'name' => 'David Miller',
            'icon' => 'user-round',
            'text' => '"I\'ve donated to many NGOs, but the transparency and regular updates from Digital Age make me confident that my money is truly helping."'
        ]);
        Impact::create([
            'name' => 'Dr. Fatima Ali',
            'icon' => 'user-round',
            'text' => '"Working with Digital Age has been an honor. The team on the ground is dedicated and truly cares about the people they serve."'
        ]);
    }
}
