<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CypherAbility;
use App\Models\CypherFlavor;
use Illuminate\Database\Seeder;

class CypherFlavorsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $flavors = [
            [
                'name' => 'Stealth Flavor',
                'abilities' => [
                    "Danger Sense",
                    "Goad",
                    "Legerdemain",
                    "Opportunist"
                ],
                'additional_benefits' => [
                    "Choose 2 stealthy skills"
                ],
                'description' => '
Characters with the stealth flavor are good at sneaking around, infiltrating places they don’t belong, and deceiving others. They use these abilities in a variety of ways, including combat. An Explorer with stealth flavor might be a thief, while a Warrior with stealth flavor might be an assassin. An Explorer with stealth flavor in a superhero setting might be a crimefighter who stalks the streets at night.

First-Tier Stealth Abilities
Danger Sense

Goad

Legerdemain

Opportunist

Stealth Skills

Second-Tier Stealth Abilities
Contortionist

Find an Opening

Get Away

Sense Ambush

Surprise Attack

Third-Tier Stealth Abilities
Evanesce

From the Shadows

Gambler

Inner Defense

Misdirect

Run and Fight

Seize the Moment

Fourth-Tier Stealth Abilities
Ambusher

Debilitating Strike

Outwit

Preternatural Senses

Tumbling Moves

Fifth-Tier Stealth Abilities
Assassin Strike

Mask

Return to Sender

Uncanny Luck

Sixth-Tier Stealth Abilities
Exploit Advantage

Spring Away

Thief’s Luck

Twist of Fate

'],
            [
                'name' => 'Technology Flavor',
                'abilities' => [
                    "Datajack",
                    "Hacker",
                    "Machine Interf.",
                    "Scramble Machine",
                    "Tinker"
                ],
                'additional_benefits' => [
                    "Choose 2 techy skills"
                ],
                'description' => '
Characters with a flavor of technology typically are from science fiction or at least modern-day settings (although anything is possible). They excel at using, dealing with, and building machines. An Explorer with technology flavor might be a starship pilot, and a Speaker flavored with technology could be a techno-priest.

Some of the less computer-oriented abilities might be appropriate for a steampunk character, while a modern-day character could use some of the abilities that don’t involve starships or ultratech.

First-Tier Technology Abilities
Datajack

Hacker

Machine Interface

Scramble Machine

Tech Skills

Tinker

Second-Tier Technology Abilities
Distant Interface

Machine Efficiency

Overload Machine

Serv-0

Serv-0 Defender

Serv-0 Repair

Tool Mastery

Third-Tier Technology Abilities
Mechanical Telepathy

Serv-0 Scanner

Ship Footing

Shipspeak

Spray

Fourth-Tier Technology Abilities
Machine Bond

Robot Fighter

Serv-0 Aim

Serv-0 Brawler

Serv-0 Spy

Fifth-Tier Technology Abilities
Control Machine

Jury-Rig

Machine Companion

Sixth-Tier Technology Abilities
Information Gathering

Master Machine

'
            ],
            [
                'name' => 'Magic Flavor',
                'abilities' => [
                    "Closed Mind",
                    "Entang. Force",
                    "Hedge Magic",
                    "Magic Training",
                    "Mental Link",
                    "Premonition",
                    "Blessing OTG"
                ],
                'description' => '
You know a little about magic. You might not be a wizard, but you know the basics—how it works, and how to accomplish a few wondrous things. Of course, in your setting, “magic” might actually mean psychic powers, mutant abilities, weird alien tech, or anything else that produces interesting and useful effects.

An Explorer flavored with magic might be a wizard-hunter, and a Speaker with magical flavor might be a sorcerer-bard. Although an Adept flavored with magic is still an Adept, you might find that swapping some of the type’s basic abilities with those given here tailors the character in desirable ways.

First-Tier Magic Abilities
Blessing of the Gods

Closed Mind

Entangling Force

Hedge Magic

Magic Training

Mental Link

Premonition

Second-Tier Magic Abilities
Concussive Blast

Fetch

Force Field

Lock

Repair Flesh

Third-Tier Magic Abilities
Distance Viewing

Fire Bloom

Fling

Force at Distance

Summon Giant Spider

Fourth-Tier Magic Abilities
Elemental Protection

Ignition

Pry Open

Fifth-Tier Magic Abilities
Create

Divine Intervention

Dragon’s Maw

Fast Travel

True Senses

Sixth-Tier Magic Abilities
Relocate

Summon Demon

Traverse the Worlds

Word of Death

'
            ],
            [
                'name' => 'Combat Flavor',
                'abilities' => [
                    "Danger Sense",
                    "Practiced in armor",
                    "Practiced w/ med. & light weapons"
                ],
                'description' => '
Combat flavor makes a character more martial. A Speaker with combat flavor in a fantasy setting would be a battle bard. An Explorer with combat flavor in a historical game might be a pirate. An Adept flavored with combat in a science fiction setting could be a veteran of a thousand psychic wars.

First-Tier Combat Abilities
Danger Sense

Practiced in Armor

Practiced With Medium Weapons

Second-Tier Combat Abilities
Bloodlust

Combat Prowess

Trained Without Armor

Third-Tier Combat Abilities
Practiced With All Weapons

Skill With Attacks

Skill With Defense

Successive Attack

Fourth-Tier Combat Abilities
Capable Warrior

Deadly Aim

Fury

Misdirect

Spray

Fifth-Tier Combat Abilities
Experienced Defender

Hard Target

Parry

Sixth-Tier Combat Abilities
Greater Skill With Attacks

Mastery in Armor

Mastery With Defense

'
            ],
            [
                'name' => 'Skills and Knowledge Flavor',
                'additional_benefits' => [
                    "Choose 2 interaction skills",
                    "Choose 2 investigative skills",
                    "Choose 2 knowledge skills",
                    "Choose 2 physical skills",
                    "Choose 2 travel skills"
                ],
                'description' => '
This flavor is for characters in roles that call for more knowledge and more real-world application of talent. It’s less flashy and dramatic than supernatural powers or the ability to hack apart multiple foes, but sometimes expertise or know-how is the real solution to a problem.

A Warrior flavored with skills and knowledge might be a military engineer. An Explorer flavored with skills and knowledge could be a field scientist. A Speaker with this flavor might be a teacher.

First-Tier Skills and Knowledge Abilities
Interaction Skills

Investigative Skills

Knowledge Skills

Physical Skills

Travel Skills

Second-Tier Skills and Knowledge Abilities
Extra Skill

Tool Mastery

Understanding

Third-Tier Skills and Knowledge Abilities
Flex Skill

Improvise

Fourth-Tier Skills and Knowledge Abilities
Multiple Skills

Quick Wits

Task Specialization

Fifth-Tier Skills and Knowledge Abilities
Practiced With Medium Weapons

Read the Signs

Sixth-Tier Skills and Knowledge Abilities
Skill With Attacks

Skill With Defense'
            ],
        ];

        foreach ($flavors as $flavor) {
            $abilities = $flavor['abilities'] ?? null;
            unset($flavor['abilities']);

            $cypherFlavor = CypherFlavor::create($flavor);

            if ($abilities) {
                $abilities = CypherAbility::whereRaw("name LIKE ANY (array['%".implode("%', '%", $abilities)."%'])")->get();
                if ($abilities->isNotEmpty()) {
                    $cypherFlavor->abilities()->syncWithoutDetaching($abilities->pluck('id')->toArray());
                }
                unset($abilities);
            }
        }

    }
}
