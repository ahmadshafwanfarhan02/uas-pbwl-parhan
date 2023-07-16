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
        Schema::create('tb_obat', function (Blueprint $table) {
            $table->increments('obat_id');
            $table->string('obat_id_jenisobat');
            $table->string('obat_nama');
            $table->string('obat_harga');
            $table->string('obat_stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_obat');
    }
};
