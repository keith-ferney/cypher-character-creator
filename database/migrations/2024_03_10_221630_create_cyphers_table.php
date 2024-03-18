<?php

use App\Models\Character;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cyphers', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Character::class);

            $table->string('name')->nullable();
            $table->longText('description')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cyphers');
    }
};
