<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attack extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'mod',
        'damage',
        'character_id',
    ];

    public function character(): BelongsTo
    {
        return $this->belongsTo(Character::class);
    }
}
