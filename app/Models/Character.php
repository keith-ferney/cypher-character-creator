<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'user_id',
        'cypher_descriptor_id',
        'cypher_type_id',
        'cypher_focus_id',
        'cypher_flavor_id',

        'name',
        'background',
        'notes',
        'portrait',
        'tier',
        'effort',
        'experience',
        'might',
        'might_pool',
        'might_edge',
        'speed',
        'speed_pool',
        'speed_edge',
        'intellect',
        'intellect_pool',
        'intellect_edge',
        'recovery_modifier',
        'recovery_action_used',
        'recovery_10_mins_used',
        'recovery_1_hour_used',
        'recovery_10_hours_used',
        'damage_track',
        'armor',
        'money',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function cypherDescriptor(): BelongsTo
    {
        return $this->belongsTo(CypherDescriptor::class);
    }

    public function cypherType(): BelongsTo
    {
        return $this->belongsTo(CypherType::class);
    }

    public function cypherFocus(): BelongsTo
    {
        return $this->belongsTo(CypherFocus::class);
    }

    public function cypherFlavor(): BelongsTo
    {
        return $this->belongsTo(CypherFlavor::class);
    }

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }

    public function attacks():HasMany
    {
        return $this->hasMany(Attack::class);
    }

    public function specialAbilities():HasMany
    {
        return $this->hasMany(SpecialAbility::class);
    }

    public function cyphers():HasMany
    {
        return $this->hasMany(Cypher::class);
    }

    public function equipment(): HasMany
    {
        return $this->hasMany(Equipment::class);
    }

    public function advancements(): BelongsToMany
    {
        return $this->belongsToMany(Advancement::class);
    }


}
