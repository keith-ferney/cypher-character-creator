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

class CharacterPowerShiftsController extends Controller
{
    public function sync(Request $request, Character $character): JsonResponse
    {
        $powerShifts = $request->json('powerShifts');

        collect($powerShifts)->each(function ($power_shift) use ($character) {
            $character->powerShifts()->updateOrCreate([
                'id' => $power_shift['id']
            ], [
                'value' => $power_shift['value'] ?? null,
                'additional_text' => $power_shift['additional_text'] ?? '',
                'hearts_used' => $power_shift['hearts_used'] ?? null,
            ]);
        });

        $character->loadMissing('powerShifts');
        return response()->json(['message' => 'Power Shifts updated', 'powerShifts' => $character->power_shifts]);
    }
}
