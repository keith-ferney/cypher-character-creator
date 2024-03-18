<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cypher_power_shifts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('value')->nullable();
            $table->boolean('is_per_round')->default(false);
            $table->boolean('allows_additional_text')->default(false);
            $table->boolean('has_healing_checkboxes')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cypher_power_shifts');
    }
};
