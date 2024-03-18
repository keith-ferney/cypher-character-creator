<?php

use App\Models\Character;
use App\Models\CypherAbility;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('special_abilities', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Character::class)->nullable();
            $table->foreignIdFor(CypherAbility::class)->nullable();


            $table->string('name')->nullable();
            $table->longText('description')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('special_abilities');
    }
};
