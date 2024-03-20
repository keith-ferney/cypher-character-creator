<?php

use App\Models\Character;
use App\Models\CypherPowerShift;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('power_shifts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Character::class)->nullable();
            $table->foreignIdFor(CypherPowerShift::class)->nullable();

            $table->integer('value')->nullable();
            $table->string('additional_text')->nullable();
            $table->integer('hearts_used')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('power_shifts');
    }
};
