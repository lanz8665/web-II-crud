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
        Schema::create('detail_buku', function (Blueprint $table) {
            $table->id();

            $table->foreignId('buku_id')
                ->unique()
                ->constrained('buku')
                ->onDelete('cascade');

            $table->string('isbn');
            $table->integer('jumlah_halaman');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_buku');
    }
};
