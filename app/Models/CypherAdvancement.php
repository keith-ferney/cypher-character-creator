<?php

namespace App\Models;

use App\Models\Traits\HasRstDescription;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CypherAdvancement extends Model
{
    use SoftDeletes, HasFactory, HasRstDescription;

    protected $fillable = [
        'name',
        'description',
    ];
}
