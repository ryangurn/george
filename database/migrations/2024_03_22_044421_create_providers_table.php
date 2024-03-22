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
        Schema::create('ref_providers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('website')
                ->nullable();
            $table->text('api_url')
                ->nullable();
            $table->string('api_version', 15)
                ->nullable();
            $table->boolean('active')
                ->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_providers');
    }
};
