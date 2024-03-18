<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'character_id',
        'type',
        'power_shift',
        'pool',
    ];

    public function character(): BelongsTo
    {
        return $this->belongsTo(Character::class);
    }
}
