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
        // Create Table Permohonan
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id();
            $table->string('id_skpd');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nip');
            $table->string('jabatan')->nullable();
            $table->unsignedBigInteger('jenis_layanan');
            $table->foreign('jenis_layanan')->references('id')->on('jenis_layanan')->onUpdate('cascade')->onDelete('restrict');
            $table->unsignedBigInteger('id_permohonan');
            $table->string('_active')->default(1);
            $table->string('sk_id');
            $table->string('sm_id');
            $table->string('status');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonan');
    }
};
