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
        Schema::create('sajas', function (Blueprint $table) {
            $table->string('name', 40);
            $table->string('email')->unique();
            $table->string('phone_no', 15);
            $table->string('order', 50);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sajas');
    }
};
