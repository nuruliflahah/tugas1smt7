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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string(column:'nama');
            $table->foreignId('id_pelajaran')->constrained('pelajarans');
            $table->enum('jabatan', ['guru_tetap', 'guru_pengganti', 'wali kelas'])->default('guru_tetap');
            $table->Time(column:'waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};