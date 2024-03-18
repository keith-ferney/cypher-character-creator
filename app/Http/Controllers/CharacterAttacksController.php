<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\CypherAbility;
use App\Models\CypherAdvancement;
use App\Models\CypherDescriptor;
use App\Models\CypherFlavor;
use App\Models\CypherFocus;
use App\Models\CypherType;
use App\Models\Attack;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Psy\Util\Json;

class CharacterAttacksController extends Controller
{
    public function sync(Request $request, Character $character): JsonResponse
    {
        $attacks = $request->validate([
            'attacks' => 'required|array',
            'attacks.*.id' => 'required|integer',
            'attacks.*.name' => 'nullable|string',
        ])['attacks'];


        collect($attacks)->each(function ($attack) use ($character) {
            $character->attacks()->updateOrCreate([
                'id' => $attack['id']
            ], [
                'name' => $attack['name'] ?? null,
            ]);
        });

        return response()->json(['message' => 'Attacks updated']);
    }

    public function store(Request $request, Character $character): JsonResponse
    {
        $attack = Attack::create([
            'character_id' => $character->id,
        ]);

        return response()->json(['message' => 'Attack Added', 'attack' => $attack]);
    }

    public function destroy(Character $character, Attack $attack): JsonResponse
    {
        $character->attacks()->where('id', $attack->id)->delete();

        return response()->json(['message' => 'Attack Deleted']);
    }
}
