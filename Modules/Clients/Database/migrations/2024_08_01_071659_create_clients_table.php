<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->enum('type', ['individual', 'corporate', 'organization']);

            $table->string('name');

            $table->string('identity_number')->unique()->nullable();

            $table->string('tax_number')->unique()->nullable();

            $table->string('phone');

            $table->string('email')->nullable();

            $table->string('address')->nullable();

            $table->longText('notes')->nullable();

            $table->softDeletes();

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
