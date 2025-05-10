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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id')->unique();
            $table->string('first_name');
            $table->string('surname');
            $table->string('company_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('profession')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('address')->nullable();
            $table->string('status')->default('active');
            $table->text('notes')->nullable();
            $table->timestamp('registered_at')->nullable();
            $table->string('referred_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
