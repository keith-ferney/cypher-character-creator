<?php

use App\Models\Character;
use App\Models\CypherAdvancement;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('advancements', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Character::class);
            $table->foreignIdFor(CypherAdvancement::class);

            $table->string('name');
            $table->longText('description');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advancements');
    }
};
