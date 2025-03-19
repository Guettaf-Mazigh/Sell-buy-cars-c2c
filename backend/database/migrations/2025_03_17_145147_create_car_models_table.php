<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->string('modelName');
            $table->integer('year');
            $table->float('motor');
            $table->integer('kilometrage');
            $table->enum('box',['automatic','manual','semi_automatic']);
            $table->enum('energie',['gasoline','diesel','GPL','electricity','hybrid']);
            $table->integer('seats');
            $table->decimal('price',10,2);
            $table->string('color');
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_models');
    }
};
