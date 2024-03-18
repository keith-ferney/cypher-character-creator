<?php

namespace App\Models;

use App\Models\Traits\HasRstDescription;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CypherPowerShift extends Model
{
    use SoftDeletes, HasFactory, HasRstDescription;

    protected $fillable = [
        'name',
        'description',
        'value',
        'is_per_round',
        'has_healing_checkboxes',
        'allows_additional_text',
    ];
}
