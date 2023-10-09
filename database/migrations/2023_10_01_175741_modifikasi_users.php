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
        Schema::table('users', function (Blueprint $table) {
            // 6706223009 - Muhammad Raihan Fahrifi

            // menambahkan kolom baru
            $table->string('username', 100)->unique();
            $table->string('address', 1000);
            $table->string('phoneNumber', 20);
            $table->date('birthdate')->nullable();
            $table->string('agama', 20);
            $table->unsignedTinyInteger('jenisKelamin')->length(4)->nullable();


            // modifikasi kolom
            $table->renameColumn('name', 'fullname');
            $table->string('email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
