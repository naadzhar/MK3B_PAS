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
        Schema::create('list_apps', function (Blueprint $table) {
            $table->id();
            $table->string('application'); // Mengubah 'Aplication' menjadi 'application'
            $table->text('description'); // Mengubah 'Description' menjadi 'description' dan tipe menjadi text
            $table->decimal('price', 10, 2); // Mengubah 'Price' menjadi 'price' dan tipe menjadi decimal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_apps');
    }
};