<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cypher_types', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->longText('description');

            $table->integer('might_pool')->default(0);
            $table->integer('speed_pool')->default(0);
            $table->integer('intellect_pool')->default(0);

            $table->integer('might_edge')->default(0);
            $table->integer('speed_edge')->default(0);
            $table->integer('intellect_edge')->default(0);
            $table->integer('unassigned_edge')->default(0);

            $table->json('cyphers_limit')->default(0);


            $table->integer('allowed_ability_count')->default(0);

            $table->json('equipment')->default('[]');
            $table->json('skills')->default('[]');
            $table->json('intrusions')->default('[]');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cypher_types');
    }
};
