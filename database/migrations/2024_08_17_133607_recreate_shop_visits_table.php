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

        // สร้างตารางใหม่
        Schema::create('shop_visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id');
            $table->string('visit_date');
            $table->foreignId('employee_id');
            $table->text('notes')->nullable();
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_visits');
    }
};
