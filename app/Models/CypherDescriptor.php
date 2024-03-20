<?php

namespace App\Models;

use App\Models\Traits\HasRstDescription;
use Gregwar\RST\Parser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CypherDescriptor extends Model
{
    use SoftDeletes, HasFactory, HasRstDescription;

    protected $fillable = [
        'name',
        'description',
        'might_pool',
        'speed_pool',
        'intellect_pool',
        'additional_pool',
        'skills',
        'inabilities',
        'equipment',
    ];

    protected $casts = [
        'skills' => 'array',
        'inabilities' => 'array',
        'equipment' => 'array',
    ];

    public function abilities(): BelongsToMany
    {
        return $this->belongsToMany(CypherAbility::class);
    }
}
