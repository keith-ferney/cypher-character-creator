<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpecialAbility extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'character_id',
        'description',
        'cypher_ability_id',
    ];

    public function character(): BelongsTo
    {
        return $this->belongsTo(Character::class);
    }

    public function cypherAbility(): BelongsTo
    {
        return $this->belongsTo(CypherAbility::class);
    }
}
