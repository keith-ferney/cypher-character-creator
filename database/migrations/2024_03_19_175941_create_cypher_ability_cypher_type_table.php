<?php

use App\Models\CypherAbility;
use App\Models\CypherType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {

        Schema::create('cypher_ability_cypher_type', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(CypherAbility::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(CypherType::class)->constrained()->cascadeOnDelete();

            $table->boolean('selected')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cypher_ability_cypher_type');
    }
};
