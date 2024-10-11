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
        // Tabel Bidang
        Schema::create('bidang', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('_active')->default(1);
            $table->timestamps();
        });

        // Tabel Urusan
        Schema::create('urusan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_bidang');
            $table->foreign('id_bidang')->references('id')->on('bidang')->onUpdate('cascade')->onDelete('restrict');
            $table->string('name');
            $table->integer('_active')->default(1);
            $table->timestamps();
        });

        // Tabel Jenis Layanan
        Schema::create('jenis_layanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_urusan');
            $table->foreign('id_urusan')->references('id')->on('urusan')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nama');
            $table->string('deskripsi');
            $table->string('template');
            $table->text('variable');
            $table->text('table');
            $table->text('form_visible');
            $table->integer('_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_layanan');
        Schema::dropIfExists('urusan');
        Schema::dropIfExists('bidang');
    }
};
