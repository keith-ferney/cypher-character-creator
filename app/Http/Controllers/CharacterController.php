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
        return Inertia::render('Characters/Index', [
            'characters' => Character::with([
                'cypherDescriptor',
                'cypherType',
                'cypherFocus',
                'cypherFlavor',
            ])->get(),
        ]);
    }

    public function create(): RedirectResponse
    {
        // create a new character, then redirect to the edit page
        $character = new Character();
        $character->fill([
            'name' => '',
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
        $character = Character::with([
            'cypherDescriptor',
            'cypherType',
            'cypherFocus',
            'cypherFlavor',
            'skills',
            'specialAbilities',
            'cyphers',
            'equipment',
            'attacks',
//            'cypherAdvancements',
//            'cypherAbilities',
        ])->find($id);
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
        $character->update($request->all());

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
