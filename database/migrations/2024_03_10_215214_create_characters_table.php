<?php

use App\Models\CypherDescriptor;
use App\Models\CypherFlavor;
use App\Models\CypherFocus;
use App\Models\CypherType;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)->nullable();
            $table->foreignIdFor(CypherDescriptor::class)->nullable();
            $table->foreignIdFor(CypherType::class)->nullable();
            $table->foreignIdFor(CypherFocus::class)->nullable();
            $table->foreignIdFor(CypherFlavor::class)->nullable();

            $table->string('name')->nullable();
            $table->longText('background')->nullable();
            $table->longText('notes')->nullable();
            $table->longText('portrait')->nullable();
            $table->integer('tier')->nullable();
            $table->integer('effort')->nullable();
            $table->integer('experience')->nullable();
            $table->integer('might')->nullable();
            $table->integer('might_pool')->nullable();
            $table->integer('might_edge')->nullable();
            $table->integer('speed')->nullable();
            $table->integer('speed_pool')->nullable();
            $table->integer('speed_edge')->nullable();
            $table->integer('intellect')->nullable();
            $table->integer('intellect_pool')->nullable();
            $table->integer('intellect_edge')->nullable();
            $table->integer('recovery_modifier')->nullable();
            $table->boolean('recovery_action_used')->default('false');
            $table->boolean('recovery_10_mins_used')->default(false);
            $table->boolean('recovery_1_hour_used')->default(false);
            $table->boolean('recovery_10_hours_used')->default(false);
            $table->string('damage_track')->nullable();
            $table->integer('armor')->nullable();
            $table->float('money')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
