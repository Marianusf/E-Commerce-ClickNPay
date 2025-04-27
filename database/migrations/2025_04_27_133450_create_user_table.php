<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone', 20);
            $table->text('address')->nullable();
            $table->enum('role', ['buyer', 'seller', 'admin'])->default('buyer');
            $table->string('profile_photo')->nullable();
            $table->string('store_name')->nullable();
            $table->string('store_logo')->nullable();
            $table->text('store_address')->nullable();
            $table->string('store_phone', 20)->nullable();
            $table->enum('status', ['active', 'suspended', 'pending'])->default('active');
            $table->timestamp('last_login_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
