<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='/app/Modules/Management/ImageGallaryManagement/ImageGallaryCategory/Database/create_image_gallary_categories_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('image_gallary_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable();

            $table->bigInteger('creator')->unsigned()->nullable();
            $table->string('slug', 50)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_gallary_categories');
    }
};