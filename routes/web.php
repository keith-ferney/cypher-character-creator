<?php

use App\Http\Controllers\AddCharacterSkillController;
use App\Http\Controllers\CharacterAttacksController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CharacterCyphersController;
use App\Http\Controllers\CharacterEquipmentController;
use App\Http\Controllers\CharacterSkillsController;
use App\Http\Controllers\CharacterSpecialAbilityController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])
    ->name('dashboard');

Route:: middleware(['auth', 'verified'])
    ->group(function () {
        Route::resource('characters', CharacterController::class);
        Route::put('characters/{character}/skills', [CharacterSkillsController::class, 'sync'])
            ->name('characters.skills.sync');
        Route::post('characters/{character}/skills', [CharacterSkillsController::class, 'store'])
            ->name('characters.skills.store');
        Route::delete('characters/{character}/skills/{skill}', [CharacterSkillsController::class, 'destroy'])
            ->name('characters.skills.destroy');

        Route::put('characters/{character}/special-abilities', [CharacterSpecialAbilityController::class, 'sync'])
            ->name('characters.special-abilities.sync');
        Route::post('characters/{character}/special-abilities', [CharacterSpecialAbilityController::class, 'store'])
            ->name('characters.special-abilities.store');
        Route::delete('characters/{character}/special-abilities/{special_ability}', [CharacterSpecialAbilityController::class, 'destroy'])
            ->name('characters.special-abilities.destroy');

        Route::put('characters/{character}/cyphers', [CharacterCyphersController::class, 'sync'])
            ->name('characters.cyphers.sync');
        Route::post('characters/{character}/cyphers', [CharacterCyphersController::class, 'store'])
            ->name('characters.cyphers.store');
        Route::delete('characters/{character}/cyphers/{cypher}', [CharacterCyphersController::class, 'destroy'])
            ->name('characters.cyphers.destroy');

        Route::put('characters/{character}/equipment', [CharacterEquipmentController::class, 'sync'])
            ->name('characters.equipment.sync');
        Route::post('characters/{character}/equipment', [CharacterEquipmentController::class, 'store'])
            ->name('characters.equipment.store');
        Route::delete('characters/{character}/equipment/{equipment}', [CharacterEquipmentController::class, 'destroy'])
            ->name('characters.equipment.destroy');

        Route::put('characters/{character}/attacks', [CharacterAttacksController::class, 'sync'])
            ->name('characters.attacks.sync');
        Route::post('characters/{character}/attacks', [CharacterAttacksController::class, 'store'])
            ->name('characters.attacks.store');
        Route::delete('characters/{character}/attacks/{attack}', [CharacterAttacksController::class, 'destroy'])
            ->name('characters.attacks.destroy');

    })
;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
