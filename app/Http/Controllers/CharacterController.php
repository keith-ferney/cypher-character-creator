<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\CypherAbility;
use App\Models\CypherAdvancement;
use App\Models\CypherDescriptor;
use App\Models\CypherFlavor;
use App\Models\CypherFocus;
use App\Models\CypherPowerShift;
use App\Models\CypherType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class CharacterController extends Controller
{
    public function index(): Response
    {
        $user = auth()->user();
        return Inertia::render('Characters/Index', [
            'characters' => Character::where('user_id', $user->id)
                ->with([
                    'cypherDescriptor',
                    'cypherType',
                    'cypherFocus',
                    'cypherFlavor',
                ])
                ->get(),
        ]);
    }

    public function create(): RedirectResponse
    {
        $user = auth()->user();

        // create a new character, then redirect to the edit page
        $character = new Character();
        $character->fill([
            'name' => '',
            'user_id' => $user->id,
        ]);
        $character->save();

        return redirect()->route('characters.edit', $character);
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        return Inertia::render('Characters/Show', [
            'character' => Character::find($id),
        ]);
    }

    public function edit($id)
    {
        $user = auth()->user();

        $character = Character::with(array(
            'cypherDescriptor' => fn($query) => $query->orderBy('id'),
            'cypherType' => fn($query) => $query->orderBy('id'),
            'cypherFocus' => fn($query) => $query->orderBy('id'),
            'cypherFlavor' => fn($query) => $query->orderBy('id'),
            'skills' => fn($query) => $query->orderBy('id'),
            'specialAbilities' => fn($query) => $query->orderBy('id'),
            'cyphers' => fn($query) => $query->orderBy('id'),
            'equipment' => fn($query) => $query->orderBy('id'),
            'attacks' => fn($query) => $query->orderBy('id'),
            'powerShifts' => fn($query) => $query->orderBy('id')->with('cypherPowerShift'),
        ))
            ->where('user_id', $user->id)
            ->findOrFail($id);

        $cypherDescriptors = CypherDescriptor::all();
        $cypherTypes = CypherType::all();
        $cypherFoci = CypherFocus::all();
        $cypherFlavors = CypherFlavor::all();
        $cypherAdvancements = CypherAdvancement::all();
        $cypherAbilities = CypherAbility::all();
        $cypherPowerShifts = CypherPowerShift::all();

        return Inertia::render('Characters/Edit', compact(
            'character',
            'cypherDescriptors',
            'cypherTypes',
            'cypherFoci',
            'cypherFlavors',
            'cypherAdvancements',
            'cypherAbilities',
            'cypherPowerShifts'

        ));
    }

    public function update(Request $request, Character $character): JsonResponse
    {
        if ($character->user_id !== auth()->user()->id) {
            return \response()->json([
                'message' => 'Unauthorized',
                'status' => 'error',
            ], 401);
        }

        $character->fill($request->all());
        // if the cypher_focus_id, cypher_type_id, cypher_descriptor_id, or cypher_flavor_id are dirty, then we need to update the might_pool, speed_pool, and intellect_pool
        if ($character->isDirty(['cypher_focus_id', 'cypher_type_id', 'cypher_descriptor_id', 'cypher_flavor_id'])) {
            $character->might_pool = optional($character->cypherFocus)->might_pool ?? 0
                + optional($character->cypherType)->might_pool ?? 0
                + optional($character->cypherDescriptor)->might_pool ?? 0
                + optional($character->cypherFlavor)->might_pool ?? 0;
            $character->speed_pool = optional($character->cypherFocus)->speed_pool
                + optional($character->cypherType)->speed_pool ?? 0
                + optional($character->cypherDescriptor)->speed_pool ?? 0
                + optional($character->cypherFlavor)->speed_pool ?? 0;
            $character->intellect_pool = optional($character->cypherFocus)->intellect_pool ?? 0
                + optional($character->cypherType)->intellect_pool ?? 0
                + optional($character->cypherDescriptor)->intellect_pool ?? 0
                + optional($character->cypherFlavor)->intellect_pool ?? 0;

            $character->might_edge = optional($character->cypherFocus)->might_edge ?? 0
                + optional($character->cypherType)->might_edge ?? 0
                + optional($character->cypherDescriptor)->might_edge ?? 0
                + optional($character->cypherFlavor)->might_edge ?? 0;
            $character->speed_edge = optional($character->cypherFocus)->speed_edge ?? 0
                + optional($character->cypherType)->speed_edge ?? 0
                + optional($character->cypherDescriptor)->speed_edge ?? 0
                + optional($character->cypherFlavor)->speed_edge ?? 0;
            $character->intellect_edge = optional($character->cypherFocus)->intellect_edge ?? 0
                + optional($character->cypherType)->intellect_edge ?? 0
                + optional($character->cypherDescriptor)->intellect_edge ?? 0
                + optional($character->cypherFlavor)->intellect_edge ?? 0;

            $skills = array_merge($character->cypherFocus->skills ?? [], $character->cypherType->skills ?? [], $character->cypherDescriptor->skills ?? []);
            $character->skills()->delete();

            foreach ($skills as $skill) {
                $character->skills()->create([
                    'name' => $skill,
                ]);
            }

            $equipment = array_merge($character->cypherFocus->equipment ?? [], $character->cypherType->equipment ?? [], $character->cypherDescriptor->equipment ?? []);
            $character->equipment()->delete();

            foreach ($equipment as $item) {
                $character->equipment()->create([
                    'name' => $item,
                ]);
            }


            $specialAbilities = collect()
                ->merge(optional($character->cypherFocus)->abilities)
                ->merge(optional($character->cypherType)->abilities)
                ->merge(optional($character->cypherDescriptor)->abilities)
                ->merge(optional($character->cypherFlavor)->abilities);
            $character->specialAbilities()->delete();

            foreach ($specialAbilities as $ability) {
                $character->specialAbilities()->create([
                    'cypher_ability_id' => $ability->id,
                    'name' => $ability->name,
                    'description' => $ability->description,
                ]);
            }

        }

        $character->save();
        $character->load([
            'cypherDescriptor' => fn($query) => $query->orderBy('id'),
            'cypherType' => fn($query) => $query->orderBy('id'),
            'cypherFocus' => fn($query) => $query->orderBy('id'),
            'cypherFlavor' => fn($query) => $query->orderBy('id'),
            'skills' => fn($query) => $query->orderBy('id'),
            'specialAbilities' => fn($query) => $query->orderBy('id'),
            'cyphers' => fn($query) => $query->orderBy('id'),
            'equipment' => fn($query) => $query->orderBy('id'),
            'attacks' => fn($query) => $query->orderBy('id'),
            'powerShifts' => fn($query) => $query->orderBy('id')->with('cypherPowerShift'),
        ]);

        return \response()->json([
            'message' => 'Character updated',
            'status' => 'success',
            'character' => $character->toArray(),
        ]);
    }

    public function destroy($id)
    {
    }
}
