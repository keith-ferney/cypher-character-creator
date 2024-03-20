<?php

namespace App\Models;

use App\Models\Traits\HasRstDescription;
use Gregwar\RST\Parser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CypherFlavor extends Model
{
    use SoftDeletes, HasFactory, HasRstDescription;

    protected $fillable = [
        'name',
        'description',
        'additional_benefits',
    ];

    protected $casts = [
        'additional_benefits' => 'array',
    ];

    public function abilities(): BelongsToMany
    {
        return $this->belongsToMany(CypherAbility::class);
    }
}
