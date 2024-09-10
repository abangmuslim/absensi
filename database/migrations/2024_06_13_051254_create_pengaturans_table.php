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
        Schema::create('pengaturans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instansi');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('jam_masuk');
            $table->string('jam_pulang');
            $table->string('jam_maksimal_masuk');
            $table->string('jam_maksimal_pulang');
            $table->double('jarak_maksimal');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaturans');
    }
};
