<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\CypherAbility;
use App\Models\CypherAdvancement;
use App\Models\CypherDescriptor;
use App\Models\CypherFlavor;
use App\Models\CypherFocus;
use App\Models\CypherType;
use App\Models\Equipment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Psy\Util\Json;

class CharacterEquipmentController extends Controller
{
    public function sync(Request $request, Character $character): JsonResponse
    {
        $equipment = $request->validate([
            'equipment' => 'required|array',
            'equipment.*.id' => 'required|integer',
            'equipment.*.name' => 'nullable|string',
        ])['equipment'];


        collect($equipment)->each(function ($item) use ($character) {
            $character->equipment()->updateOrCreate([
                'id' => $item['id']
            ], [
                'name' => $item['name'] ?? null,
            ]);
        });

        return response()->json(['message' => 'Cyphers updated']);
    }

    public function store(Request $request, Character $character): JsonResponse
    {
        $item = Equipment::create([
            'character_id' => $character->id,
        ]);

        return response()->json(['message' => 'Equipment Added', 'equipment' => $item]);
    }

    public function destroy(Character $character, Equipment $item): JsonResponse
    {
        $character->equipment()->where('id', $item->id)->delete();

        return response()->json(['message' => 'Equipment Deleted']);
    }
}
