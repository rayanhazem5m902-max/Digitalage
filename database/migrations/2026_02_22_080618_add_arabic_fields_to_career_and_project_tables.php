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
        Schema::table('careers', function (Blueprint $table) {
            $table->string('title_ar')->nullable()->after('title');
            $table->string('category_ar')->nullable()->after('category');
            $table->string('duration_ar')->nullable()->after('duration');
            $table->text('description_ar')->nullable()->after('description');
            $table->longText('html_content_ar')->nullable()->after('html_content');
        });

        Schema::table('portfolio_projects', function (Blueprint $table) {
            $table->string('name_ar')->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('careers', function (Blueprint $table) {
            $table->dropColumn(['title_ar', 'category_ar', 'duration_ar', 'description_ar', 'html_content_ar']);
        });

        Schema::table('portfolio_projects', function (Blueprint $table) {
            $table->dropColumn(['name_ar']);
        });
    }
};
