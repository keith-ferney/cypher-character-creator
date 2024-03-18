<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\CypherAbility;
use App\Models\CypherAdvancement;
use App\Models\CypherDescriptor;
use App\Models\CypherFlavor;
use App\Models\CypherFocus;
use App\Models\CypherType;
use App\Models\Skill;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Psy\Util\Json;

class CharacterSkillsController extends Controller
{
    /**
     * @param Character $character
     * @param Skill[] $skills
     * @return JsonResponse
     */
    public function sync(Request $request, Character $character): JsonResponse
    {
        $skills = $request->validate([
            'skills' => 'required|array',
            'skills.*.id' => 'required|integer',
            'skills.*.name' => 'nullable|string',
            'skills.*.pool' => 'nullable|integer',
            'skills.*.type' => 'nullable|string',
        ])['skills'];


        collect($skills)->each(function ($skill) use ($character) {
            $character->skills()->updateOrCreate([
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
        $skill = Skill::create([
            'character_id' => $character->id,
        ]);

        return response()->json(['message' => 'Skill Added', 'skill' => $skill]);
    }

    public function destroy(Character $character, Skill $skill): JsonResponse
    {
        $character->skills()->where('id', $skill->id)->delete();

        return response()->json(['message' => 'Skill Deleted']);
    }
}
