<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\CypherAbility;
use App\Models\CypherAdvancement;
use App\Models\CypherDescriptor;
use App\Models\CypherFlavor;
use App\Models\CypherFocus;
use App\Models\CypherType;
use App\Models\SpecialAbility;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Psy\Util\Json;

class CharacterSpecialAbilityController extends Controller
{
    /**
     * @param Request $request
     * @param Character $character
     * @return JsonResponse
     */
    public function sync(Request $request, Character $character): JsonResponse
    {
        $specialAbilities = $request->validate([
            'special_abilities' => 'required|array',
            'special_abilities.*.id' => 'required|integer',
            'special_abilities.*.name' => 'nullable|string',
            'special_abilities.*.pool' => 'nullable|integer',
            'special_abilities.*.type' => 'nullable|string',
        ])['special_abilities'];


        collect($specialAbilities)->each(function ($skill) use ($character) {
            $character->specialAbilities()->updateOrCreate([
                'id' => $skill['id']
            ], [
                'name' => $skill['name'],
                'pool' => $skill['pool'],
                'type' => $skill['type'],
            ]);
        });

        return response()->json(['message' => 'Skills updated']);
    }

    public function store(Request $request, Character $character): JsonResponse
    {
        $cypherAbility = CypherAbility::find($request->input('cypher_ability_id'));
        if(!$cypherAbility) {
            // custom ability
            $specialAbility = SpecialAbility::create([
                'character_id' => $character->id,
            ]);

            return response()->json(['message' => 'Custom Special Ability Added', 'special_ability' => $specialAbility]);
        }

        $specialAbility = SpecialAbility::create([
            'cypher_ability_id' => $cypherAbility->id,
            'name' => $cypherAbility->name,
            'description' => trim($cypherAbility->getRawOriginal('description')),
            'character_id' => $character->id,
        ]);

        return response()->json(['message' => 'Special Ability Added', 'special_ability' => $specialAbility]);
    }

    public function destroy(Character $character, SpecialAbility $specialAbility): JsonResponse
    {
        $character->specialAbilities()->where('id', $specialAbility->id)->delete();

        return response()->json(['message' => 'Special Ability Deleted']);
    }
}
