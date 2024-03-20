<?php

namespace App\Models;

use App\Models\Traits\HasRstDescription;
use Gregwar\RST\Parser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CypherFocus extends Model
{
    use SoftDeletes, HasFactory, HasRstDescription;

    protected $fillable = [
        'name',
        'description',
        'might_pool',
        'speed_pool',
        'intellect_pool',
        'might_edge',
        'speed_edge',
        'intellect_edge',
        'skills',
        'equipment',
    ];

    protected $casts = [
        'skills' => 'array',
        'equipment' => 'array',
    ];

    public function abilities(): BelongsToMany
    {
        return $this->belongsToMany(CypherAbility::class);
    }
}
