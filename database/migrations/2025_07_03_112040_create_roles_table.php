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
        Schema::create('roles', function (Blueprint $table) {
                $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
        $table->string('name')->nullable(); // name VARCHAR(255) NULL
        $table->string('slug')->nullable(); // slug VARCHAR(255) NULL
        $table->timestamp('created_at')->useCurrent(); // default CURRENT_TIMESTAMP
        $table->timestamp('updated_at')->useCurrent(); // default CURRENT_TIMESTAMP
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
