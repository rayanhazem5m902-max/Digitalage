<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('phone_eg')->nullable()->after('phone');
            $table->string('phone_sd')->nullable()->after('phone_eg');
            $table->string('phone_uk')->nullable()->after('phone_sd');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn(['phone_eg', 'phone_sd', 'phone_uk']);
        });
    }
};
