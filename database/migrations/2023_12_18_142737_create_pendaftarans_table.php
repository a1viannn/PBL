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
    Schema::create('pendaftarans', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nim');
        $table->string('prodi');
        $table->string('email');
        $table->string('no_telp');
        $table->string('cv');

        $table->unsignedBigInteger('divisi_1'); 
        $table->foreign('divisi_1')
            ->references('id')
            ->on('divisis')
            ->onUpdate('cascade')->onDelete('cascade');

        $table->unsignedBigInteger('divisi_2')->nullable(); 
        $table->foreign('divisi_2')
            ->references('id')
            ->on('divisis')
            ->onUpdate('cascade')->onDelete('cascade');

        $table->string('status');
        $table->string('jabatan');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
