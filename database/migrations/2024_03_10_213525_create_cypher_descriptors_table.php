<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cypher_descriptors', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->longText('description');

            $table->integer('might_pool')->default(0);
            $table->integer('speed_pool')->default(0);
            $table->integer('intellect_pool')->default(0);
            $table->integer('additional_pool')->default(0);

            $table->json('skills')->default('[]');
            $table->json('inabilities')->default('[]');
            $table->json('equipment')->default('[]');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cypher_descriptors');
    }
};
