<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PowerShift extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'character_id',
        'cypher_power_shift_id',

        'value',
        'additional_text',
        'hearts_used',
    ];

    public function character(): BelongsTo
    {
        return $this->belongsTo(Character::class);
    }

    public function cypherPowerShift(): BelongsTo
    {
        return $this->belongsTo(CypherPowerShift::class);
    }
}
