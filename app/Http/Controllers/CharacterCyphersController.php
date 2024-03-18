<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\CypherAbility;
use App\Models\CypherAdvancement;
use App\Models\CypherDescriptor;
use App\Models\CypherFlavor;
use App\Models\CypherFocus;
use App\Models\CypherType;
use App\Models\Cypher;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Psy\Util\Json;

class CharacterCyphersController extends Controller
{
    /**
     * @param Character $character
     * @param Cypher[] $cyphers
     * @return JsonResponse
     */
    public function sync(Request $request, Character $character): JsonResponse
    {
        $cyphers = $request->validate([
            'cyphers' => 'required|array',
            'cyphers.*.id' => 'required|integer',
            'cyphers.*.name' => 'nullable|string',
        ])['cyphers'];


        collect($cyphers)->each(function ($cypher) use ($character) {
            $character->cyphers()->updateOrCreate([
                'id' => $cypher['id']
            ], [
                'name' => $cypher['name'] ?? '',
            ]);
        });

        return response()->json(['message' => 'Cyphers updated']);
    }

    public function store(Request $request, Character $character): JsonResponse
    {
        $cypher = Cypher::create([
            'character_id' => $character->id,
        ]);

        return response()->json(['message' => 'Cypher Added', 'cypher' => $cypher]);
    }

    public function destroy(Character $character, Cypher $cypher): JsonResponse
    {
        $character->cyphers()->where('id', $cypher->id)->delete();

        return response()->json(['message' => 'Cypher Deleted']);
    }
}
