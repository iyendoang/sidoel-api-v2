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
        Schema::create('schools', function (Blueprint $table) {
            $table->ulid("id")->primary();
            $table->string('nsm')->unique();
            $table->string('npsn')->unique();
            $table->string('level');
            $table->string('name');
            $table->text('address');
            $table->string('logo');
            $table->string('token')->unique();
            $table->boolean("status")->default(1);
            $table->date("start_date")->nullable();
            $table->date("end_date")->nullable();
            $table->date("expiration_time")->nullable();
            $table->dateTime("last_login")->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
