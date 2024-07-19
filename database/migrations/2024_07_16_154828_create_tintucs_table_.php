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
        Schema::create('tintucs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->unique();
            $table->string('anh');
            $table->mediumText('motangan');
            $table->text('noidung');
            $table->unsignedBigInteger('id_dm');
            $table->foreign('id_dm')->references('id')->on('danhmucs');
            $table->boolean('tinhot');
            $table->boolean('tinmoi');
            $table->unsignedBigInteger('luotxem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tintucs_table_');
    }
};
