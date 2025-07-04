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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Address')->nullable();
            $table->string('ContactNumber')->nullable();
            $table->string('UserName')->nullable();
            $table->string('password')->nullable(); // already correct
            $table->string('DateofJoin')->nullable();
            $table->string('DocName')->nullable();
            $table->string('forgot_code')->nullable();
            $table->string('DocRegNo')->nullable();
            $table->string('Qualification')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('role_id')->default(2);
            $table->string('created_at');
            $table->string('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
