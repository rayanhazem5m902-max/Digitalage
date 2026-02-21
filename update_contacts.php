<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Contact;

$c = Contact::first() ?? new Contact;
$c->tiktok = 'https://www.tiktok.com/@.digital.age?_r=1&_t=ZM-92yxvBNE8ue';
$c->instagram = 'https://www.instagram.com/digital_age2026?igsh=N3Npenk2bXJlMzZ6';
$c->linkedin = 'https://www.linkedin.com/company/digital-age-%D8%AF%D9%8A%D8%AC%D8%AA%D8%A7%D9%84-%D8%A3%D9%8A%D8%AC/';
$c->youtube = 'https://youtube.com/@-digitalage8489?si=t1MajpiiPU6R3epv';
$c->whatsapp = '+256789383140';
$c->whatsapp2 = '01275018291';
$c->save();

echo "Contacts updated successfully\n";
