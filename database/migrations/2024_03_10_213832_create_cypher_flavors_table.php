<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cypher_flavors', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->longText('description');
            $table->json('additional_benefits')->default('[]');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cypher_flavors');
    }
};
