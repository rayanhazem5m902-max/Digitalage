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
        Schema::table('services', function (Blueprint $table) {
            $table->string('name_ar')->nullable()->after('name');
            $table->text('description_ar')->nullable()->after('description');
        });

        Schema::table('members', function (Blueprint $table) {
            $table->string('name_ar')->nullable()->after('name');
            $table->string('role_ar')->nullable()->after('role');
            $table->text('description_ar')->nullable()->after('description');
        });

        Schema::table('impacts', function (Blueprint $table) {
            $table->string('name_ar')->nullable()->after('name');
            $table->text('text_ar')->nullable()->after('text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['name_ar', 'description_ar']);
        });

        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn(['name_ar', 'role_ar', 'description_ar']);
        });

        Schema::table('impacts', function (Blueprint $table) {
            $table->dropColumn(['name_ar', 'text_ar']);
        });
    }
};
