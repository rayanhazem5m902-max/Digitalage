<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Service;
use App\Models\Member;
use App\Models\Impact;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateExistingData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:translate-existing-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Translate existing data in the DB to Arabic using Google Translate';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tr = new GoogleTranslate('ar'); // Translate to Arabic

        $this->info("Translating Services...");
        foreach (Service::all() as $service) {
            if (!$service->name_ar) {
                $service->name_ar = $tr->translate($service->name);
            }
            if (!$service->description_ar && $service->description) {
                $service->description_ar = $tr->translate($service->description);
            }
            $service->save();
            $this->info("Translated service: " . $service->name);
        }

        $this->info("Translating Members...");
        foreach (Member::all() as $member) {
            if (!$member->name_ar) {
                $member->name_ar = $tr->translate($member->name);
            }
            if (!$member->role_ar) {
                $member->role_ar = $tr->translate($member->role);
            }
            if (!$member->description_ar && $member->description) {
                $member->description_ar = $tr->translate($member->description);
            }
            $member->save();
            $this->info("Translated member: " . $member->name);
        }

        $this->info("Translating Impacts...");
        foreach (Impact::all() as $impact) {
            if (!$impact->name_ar) {
                $impact->name_ar = $tr->translate($impact->name);
            }
            if (!$impact->text_ar && $impact->text) {
                $impact->text_ar = $tr->translate($impact->text);
            }
            $impact->save();
            $this->info("Translated impact: " . $impact->name);
        }

        $this->info("Done translating everything!");
    }
}
