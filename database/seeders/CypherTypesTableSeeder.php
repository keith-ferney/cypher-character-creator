<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CypherAbility;
use App\Models\CypherFlavor;
use App\Models\CypherType;
use Illuminate\Database\Seeder;

class CypherTypesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $types = [
            [
                "name" => "Warrior",
                'might_pool' => 10,
                'speed_pool' => 10,
                'intellect_pool' => 8,
                'unassigned_edge' => 1,
                'equipment' => [
                    "2 weapons",
                    "1 expensive item",
                    "2 moderate-priced items",
                    "4 inexpensive items"
                ],
                'selected_abilities' => ["Practiced w/ all weapons"
                ],
                'abilities' => [
                    "Improved Edge",
                    "Bash",
                    "Trained w/o Armor",
                    "Practiced in armor",
                    "Overwatch",
                    "Physical Skills",
                    "Swipe",
                    "No Need Weapons",
                    "Control Field",
                    "Pierce",
                    "Quick Throw"
                ],
                'allowed_ability_count' => 4,
                'intrusions' => [
                    "Perfect Setup",
                    "Old Friend",
                    "Weapon Break"
                ],
                "description" => "
Fantasy/Fairy tale:
    Warrior, fighter, swordsman, knight, barbarian,
    soldier, myrmidon, valkyrie

Modern/Horror/Romance:
    police officer, soldier, watchman, detective,
    guard, brawler, tough, athlete

Science fiction:
    security officer, warrior, trooper, soldier, merc

Superhero/Post-Apocalyptic:
    hero, brick, bruiser

You’re a good ally to have in a fight. You know how to use weapons and
defend yourself. Depending on the genre and setting in question, this
might mean wielding a sword and shield in the gladiatorial arena, an
AK-47 and a bandolier of grenades in a savage firefight, or a blaster
rifle and powered armor when exploring an alien planet.

    Individual Role:
    Warriors are physical,
    action-oriented people. They’re more likely to overcome a challenge
    using force than by other means, and they often take the most
    straightforward path toward their goals.

    Group Role:
    Warriors usually take and deal the most punishment in a
    dangerous situation. Often it falls on them to protect the other group
    members from threats. This sometimes means that warriors take on
    leadership roles as well, at least in combat and other times of danger.

    Societal Role:
    Warriors aren’t always soldiers or mercenaries. Anyone
    who is ready for violence, or even potential violence, might be a
    Warrior in the general sense. This includes guards, watchmen, police
    officers, sailors, or people in other roles or professions who know how
    to defend themselves with skill.

    Advanced Warriors:
    As warriors advance, their skill in battle—whether
    defending themselves or dishing out damage—increases to impressive
    levels. At higher tiers, they can often take on groups of foes by
    themselves or stand toe to toe with anyone.

    Warrior Background Connection
    -----------------------------

Your type helps determine the connection you have to the setting. Roll a
d20 or choose from the following list to determine a specific fact about
your background that provides a connection to the rest of the world. You
can also create your own fact.

+-----+---------------------------------------------------------------+
| d20 | Background                                                    |
+=====+===============================================================+
| 1   | You were in the military and have friends who still serve.    |
|     | Your former commander remembers you well.                     |
+-----+---------------------------------------------------------------+
| 2   | You were the bodyguard of a wealthy woman who accused you of  |
|     | theft. You left her service in disgrace.                      |
+-----+---------------------------------------------------------------+
| 3   | You were the bouncer in a local bar for a while, and the      |
|     | patrons there remember you.                                   |
+-----+---------------------------------------------------------------+
| 4   | You trained with a highly respected mentor. They regard you   |
|     | well, but they have many enemies.                             |
+-----+---------------------------------------------------------------+
| 5   | You trained in an isolated monastery. The monks think of you  |
|     | as a brother, but you’re a stranger to all others.            |
+-----+---------------------------------------------------------------+
| 6   | You have no formal training. Your abilities come to you       |
|     | naturally (or unnaturally).                                   |
+-----+---------------------------------------------------------------+
| 7   | You spent time on the streets and were in prison for a while. |
+-----+---------------------------------------------------------------+
| 8   | You were conscripted into military service, but you deserted  |
|     | before long.                                                  |
+-----+---------------------------------------------------------------+
| 9   | You served as a bodyguard to a powerful criminal who now owes |
|     | you their life.                                               |
+-----+---------------------------------------------------------------+
| 10  | You worked as a police officer or constable of some kind.     |
|     | Everyone knows you, but their opinions of you vary.           |
+-----+---------------------------------------------------------------+
| 11  | Your older sibling is an infamous character who has been      |
|     | disgraced.                                                    |
+-----+---------------------------------------------------------------+
| 12  | You served as a guard for someone who traveled extensively.   |
|     | You know a smattering of people in many locations.            |
+-----+---------------------------------------------------------------+
| 13  | Your best friend is a teacher or scholar. They are a great    |
|     | source of knowledge.                                          |
+-----+---------------------------------------------------------------+
| 14  | You and a friend both smoke the same kind of rare, expensive  |
|     | tobacco. The two of you get together weekly to chat and       |
|     | smoke.                                                        |
+-----+---------------------------------------------------------------+
| 15  | Your uncle runs a theater in town. You know all the actors    |
|     | and watch all the shows for free.                             |
+-----+---------------------------------------------------------------+
| 16  | Your craftsman friend sometimes calls on you for help.        |
|     | However, they pay you well.                                   |
+-----+---------------------------------------------------------------+
| 17  | Your mentor wrote a book on martial arts. Sometimes people    |
|     | seek you out to ask about its stranger passages.              |
+-----+---------------------------------------------------------------+
| 18  | Someone you fought alongside in the military is now the mayor |
|     | of a nearby town.                                             |
+-----+---------------------------------------------------------------+
| 19  | You saved the lives of a family when their house burned down. |
|     | They’re indebted to you, and their neighbors regard you as a  |
|     | hero.                                                         |
+-----+---------------------------------------------------------------+
| 20  | Your old trainer still expects you to come back and clean up  |
|     | after their classes; when you do, they occasionally share     |
|     | interesting rumors.                                           |
+-----+---------------------------------------------------------------+

    Warrior Player Intrusions
    -------------------------

You can spend 1 XP to use one of the following player intrusions,
provided the situation is appropriate and the GM agrees.

    Perfect Setup:
    You’re fighting at least three foes and each one is
    standing in exactly the right spot for you to use a move you trained in
    long ago, allowing you to attack all three as a single action. Make a
    separate attack roll for each foe. You remain limited by the amount of
    Effort you can apply on one action.

    Old Friend:
    A comrade in arms from your past shows up unexpectedly and
    provides aid in whatever you’re doing. They are on a mission of their
    own and can’t stay longer than it takes to help out, chat for a while
    after, and perhaps share a quick meal.

    Weapon Break:
    Your foe’s weapon has a weak spot. In the course of the
    combat, it quickly becomes damaged and moves two steps down the object
    damage track.

    Warrior Stat Pools
    ------------------

========= ===================
Stat      Pool Starting Value
    ========= ===================
Might     10
Speed     10
Intellect 8
    ========= ===================

You get 6 additional points to divide among your stat Pools however you
wish.

First-Tier Warrior
    ------------------

    First-tier warriors have the following abilities:

Effort:
    Your Effort is 1.

Physical Nature:
    You have a Might Edge of 1 and a Speed Edge of 0, or
    you have a Might Edge of 0 and a Speed Edge of 1. Either way, you have
    an Intellect Edge of 0.

Cypher Use:
    You can bear two cyphers at a time.

    Weapons:
    You become practiced with light, medium, and heavy weapons and
    suffer no penalty when using any kind of weapon. Enabler.

    Starting Equipment:
    Appropriate clothing and two weapons of your choice,
    plus one expensive item, two moderately priced items, and up to four
    inexpensive items.

    Special Abilities:
    Choose four of the abilities listed below. You can’t
    choose the same ability more than once unless its description says
    otherwise. The full description for each listed ability can be found in
    Abilities, which also has descriptions for flavor and focus abilities in
    a single vast catalog.

    * :ref:`Bash <Bash>`
    * :ref:`Combat Prowess <Combat Prowess>`
    * :ref:`Control the Field <Control the Field>`
    * :ref:`Improved Edge <Improved Edge>`
    * :ref:`No Need for Weapons <No Need for Weapons>`
    * :ref:`Overwatch <Overwatch>`
    * :ref:`Physical Skills <Physical Skills>`
    * :ref:`Practiced in Armor <Practiced in Armor>`
    * :ref:`Quick Throw <Quick Throw>`
    * :ref:`Swipe <Swipe>`
    * :ref:`Trained Without Armor <Trained Without Armor>`

Second-Tier Warrior
    -------------------

Choose two of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Crushing Blow <Crushing Blow>`
    * :ref:`Hemorrhage <Hemorrhage>`
    * :ref:`Reload <Reload>`
    * :ref:`Skill With Attacks <Skill With Attacks>`
    * :ref:`Skill With Defense <Skill With Defense>`
    * :ref:`Successive Attack <Successive Attack>`

Third-Tier Warrior
    ------------------

    Choose three of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Deadly Aim <Deadly Aim>`
    * :ref:`Energy Resistance <Energy Resistance>`
    * :ref:`Experienced in Armor <Experienced in Armor>`
    * :ref:`Expert Cypher Use <Expert Cypher Use>`
    * :ref:`Fury <Fury>`
    * :ref:`Lunge <Lunge>`
    * :ref:`Reaction <Reaction>`
    * :ref:`Seize the Moment <Seize the Moment>`
    * :ref:`Slice <Slice>`
    * :ref:`Spray <Spray>`
    * :ref:`Trick Shot <Trick Shot>`
    * :ref:`Vigilance <Vigilance>`

Fourth-Tier Warrior
    -------------------

Choose two of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Amazing Effort <Amazing Effort>`
    * :ref:`Capable Warrior <Capable Warrior>`
    * :ref:`Experienced Defender <Experienced Defender>`
    * :ref:`Feint <Feint>`
    * :ref:`Increased Effects <Increased Effects>`
    * :ref:`Momentum <Momentum>`
    * :ref:`Pry Open <Pry Open>`
    * :ref:`Snipe <Snipe>`
    * :ref:`Tough as Nails <Tough as Nails>`

Fifth-Tier Warrior
    ------------------

    Choose three of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Adroit Cypher Use <Adroit Cypher Use>`
    * :ref:`Arc Spray <Arc Spray>`
    * :ref:`Improved Success <Improved Success>`
    * :ref:`Jump Attack <Jump Attack>`
    * :ref:`Mastery in Armor <Mastery in Armor>`
    * :ref:`Mastery With Attacks <Mastery With Attacks>`
    * :ref:`Mastery With Defense <Mastery With Defense>`
    * :ref:`Parry <Parry>`

(Remember that at higher tiers, you can choose special abilities from
lower tiers. This is sometimes the best way to ensure that you have
exactly the character you want. This is particularly true with abilities
that grant skills, which can usually be taken multiple times.)

Sixth-Tier Warrior
    ------------------

    Choose two of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Again and Again <Again and Again>`
    * :ref:`Finishing Blow <Finishing Blow>`
    * :ref:`Magnificent Moment <Magnificent Moment>`
    * :ref:`Murderer <Murderer>`
    * :ref:`Spin Attack <Spin Attack>`
    * :ref:`Weapon and Body <Weapon and Body>`

Warrior Example
    ---------------

Ray wants to create a Warrior character for a modern campaign. He
    decides that the character is an ex-military fellow who is fast and
    strong. He puts 3 of his additional points into his Might Pool and 3
into his Speed Pool; his stat Pools are now Might 13, Speed 13, and
Intellect 8. As a first-tier character, his Effort is 1, his Might Edge
is 1, and his Speed Edge and Intellect Edge are both 0. His character is
not particularly smart or charismatic.

    He wants to use a large combat knife (a medium weapon that inflicts 4
points of damage) and a .357 Magnum (a heavy pistol that inflicts 6
points of damage but requires the use of both hands). Ray decides not to
wear armor, as it’s not really appropriate to the setting, so for his
                                                                  first ability, he chooses :ref:`Trained Without Armor <Trained Without Armor>` so he eases Speed
defense actions. For his second ability, he chooses
    :ref:`Combat Prowess <Combat Prowess>` so he
can inflict extra damage with his big knife.

    Ray wants to be fast as well as tough, so he selects :ref:`Improved Edge <Improved Edge>`. This
gives him a Speed Edge of 1. He rounds out his character with
    :ref:`Physical Skills <Physical Skills>` and chooses swimming and running.

    The Warrior can bear two cyphers. The GM decides that Ray’s first cypher
is a pill that restores 6 points of Might when swallowed, and his second
is a small, easily concealed grenade that explodes like a firebomb when
thrown, inflicting 3 points of damage to all within immediate range.

    Ray still needs to choose a descriptor and a focus. Looking ahead to the
descriptor rules, Ray chooses :ref:`descriptor:Strong`, which increases his Might Pool to
17. He also becomes trained in jumping and breaking inanimate objects.
    (If he had chosen jumping as one of his physical skills, the Strong
descriptor would have made him specialized in jumping instead of
trained.) Being Strong also gives Ray an extra medium or heavy weapon.
    He chooses a baseball bat that he’ll use in a pinch. He keeps it in the
trunk of his car.

For his focus, Ray chooses :ref:`focus:Masters Weaponry`. This gives him yet another
weapon of high quality. He chooses another combat knife and asks the GM
if he could use it in his left hand—not to make attacks, but as a
shield. This will ease his Speed defense rolls if he has both knives out
    (the “shield” counts as an asset). The GM agrees. During the game, Ray’s
Warrior will be hard to hit—he is trained in Speed defense rolls, and
his extra knife eases his defense rolls by another step.

    Thanks to his focus, he also inflicts 1 additional point of damage with
his chosen weapon. Now he inflicts 6 points of damage with his blade.
    Ray’s character is a deadly combatant, likely starting the game with a
reputation as a knife fighter.

For his character arc, Ray chooses :ref:`experience-points:Defeat a Foe`.
    That foe, he decides,
is none other than someone in his company who was once a friend but went
rogue.

"
            ],
            [
                "name" => "Adept",
                'might_pool' => 7,
                'speed_pool' => 9,
                'intellect_pool' => 12,
                'intellect_edge' => 1,
                'cyphers_limit' => 3,
                'equipment' => [
                    "2 expensive items",
                    "2 moderate-priced items",
                    "4 inexpensive items"
                ],
                'abilities' => [
                    "Ward",
                    "Onslaught",
                    "Magic Training",
                    "Shatter",
                    "Reso. Field",
                    "Erase Memories",
                    "Distortion",
                    "Far Step",
                    "Hedge Magic",
                    "Push",
                    "Scan"
                ],
                'allowed_ability_count' => 4,
                'intrusions' => [
                    "Advantageous Malfunction",
                    "Convenient Idea",
                    "Inexplicably Unbroken"
                ],
                "description" => "
Fantasy/Fairy tale:
    wizard, mage, sorcerer, cleric, druid, seer,
    diabolist, fey-touched

Modern/Horror/Romance:
    psychic, occultist, witch, practitioner, medium,
    fringe scientist

Science fiction:
    psion, psionicist, telepath, seeker, master, scanner,
    ESPer, abomination

Superhero/Post-Apocalyptic:
    mage, sorcerer, power-wielder, master,
    psion, telepath

You master powers or abilities outside the experience, understanding,
and sometimes belief of others. They might be magic, psychic powers,
mutant abilities, or just a wide variety of intricate devices, depending
on the setting. (“Magic” here is a term used very loosely. It’s a
catch-all for the kinds of wondrous, possibly supernatural things that
your character can do that others cannot. It might actually be an
expression of technological devices, channeling spirits, mutations,
psionics, nanotechnology, or any number of other sources.)

Individual Role:
    Adepts are usually thoughtful, intelligent types. They
    often think carefully before acting and rely heavily on their
    supernatural abilities.

    Group Role:
    Adepts are not powerful in straightforward combat, although
    they often wield abilities that provide excellent combat support, both
    offensively and defensively. They sometimes possess abilities that
    facilitate overcoming challenges. For example, if the group must get
    through a locked door, an Adept might be able to destroy it or teleport
    everyone to the other side.

    Societal Role:
    In settings where the supernatural is rare, strange, or
    feared, Adepts are likely rare and feared as well. They remain hidden,
    shadowy figures. When this is not the case, Adepts are more likely to be
    common and forthright. They might even take leadership roles.

    Advanced Adepts:
    Even at low tiers, Adept powers are impressive.
    Higher-tier Adepts can accomplish amazing deeds that can reshape matter
    and the environment around them.

    (Adepts are almost always emblematic of the paranormal or superhuman in
some way—wizards, psychics, or something similar. If the game you’re
playing has none of that, an Adept could be a charlatan mimicking such
abilities with tricks and hidden devices, or a gadgeteer character with
a “utility belt” full of oddments. Or a game like that might not have
Adepts. That’s okay too.)

Adept Player Intrusions
    -----------------------

When playing an Adept, you can spend 1 XP to use one of the following
player intrusions, provided the situation is appropriate and the GM
agrees.

Advantageous Malfunction:
    A device being used against you malfunctions.
    It might harm the user or one of their allies for a round, or activate a
    dramatic and distracting side effect for a few rounds.

    Convenient Idea:
    A flash of insight provides you with a clear answer or
    suggests a course of action with regard to an urgent question, problem,
    or obstacle you’re facing.

    Inexplicably Unbroken:
    An inactive, ruined, or presumed-destroyed device
    temporarily activates and performs a useful function relevant to the
    situation. This is enough to buy you some time for a better solution,
                                                       alleviate a complication that was interfering with your abilities, or
    just get you one more use out of a depleted cypher or artifact.

    Adept Stat Pools
    ----------------

========= ===================
Stat      Pool Starting Value
    ========= ===================
Might     7
Speed     9
Intellect 12
    ========= ===================

You get 6 additional points to divide among your stat Pools however you
wish.

Adept Background Connection
    ---------------------------

Your type helps determine the connection you have to the setting. Roll a
d20 or choose from the following list to determine a specific fact about
your background that provides a connection to the rest of the world. You
can also create your own fact.

+-----+---------------------------------------------------------------+
| d20 | Background                                                    |
+=====+===============================================================+
| 1   | You served as an apprentice for an Adept respected and feared |
|     | by many people. Now you bear their mark.                      |
+-----+---------------------------------------------------------------+
| 2   | You studied in a school infamous for its dark, brooding       |
|     | instructors and graduates.                                    |
+-----+---------------------------------------------------------------+
| 3   | You learned your abilities in the temple of an obscure god.   |
|     | Its priests and worshippers, although small in number,        |
|     | respect and admire your talents and potential.                |
+-----+---------------------------------------------------------------+
| 4   | While traveling alone, you saved the life of a powerful       |
|     | person. They remain indebted to you.                          |
+-----+---------------------------------------------------------------+
| 5   | Your mother was a powerful Adept while she lived, helpful to  |
|     | many locals. They look upon you kindly, but they also expect  |
|     | much from you.                                                |
+-----+---------------------------------------------------------------+
| 6   | You owe money to a number of people and don’t have the funds  |
|     | to pay your debts.                                            |
+-----+---------------------------------------------------------------+
| 7   | You failed disgracefully at your initial studies with your    |
|     | teacher and now proceed on your own.                          |
+-----+---------------------------------------------------------------+
| 8   | You learned your skills faster than your teachers had ever    |
|     | seen before. The powers that be took notice and are paying    |
|     | close attention.                                              |
+-----+---------------------------------------------------------------+
| 9   | You killed a well-known criminal in self-defense, earning the |
|     | respect of many and the enmity of a dangerous few.            |
+-----+---------------------------------------------------------------+
| 10  | You trained as a Warrior, but your Adept predilections        |
|     | eventually led you down a different path. Your former         |
|     | comrades don’t understand you, but they respect you.          |
+-----+---------------------------------------------------------------+
| 11  | While studying to be an Adept, you worked as an assistant for |
|     | a bank, making friends with the owner and the clientele.      |
+-----+---------------------------------------------------------------+
| 12  | Your family owns a large vineyard nearby known to all for its |
|     | fine wine and fair business dealings.                         |
+-----+---------------------------------------------------------------+
| 13  | You trained for a time with a group of influential Adepts,    |
|     | and they still look upon you with fondness.                   |
+-----+---------------------------------------------------------------+
| 14  | You worked the gardens in the palace of an influential noble  |
|     | or person of wealth. They wouldn’t remember you, but you made |
|     | friends with their young daughter.                            |
+-----+---------------------------------------------------------------+
| 15  | An experiment you conducted in the past went horribly awry.   |
|     | The locals remember you as a dangerous and foolhardy          |
|     | individual.                                                   |
+-----+---------------------------------------------------------------+
| 16  | You hail from a distant place where you were well known and   |
|     | regarded, but people here treat you with suspicion.           |
+-----+---------------------------------------------------------------+
| 17  | People you meet seem put off by the strange birthmark on your |
|     | face.                                                         |
+-----+---------------------------------------------------------------+
| 18  | Your best friend is also an Adept. You and your friend share  |
|     | discoveries and secrets readily.                              |
+-----+---------------------------------------------------------------+
| 19  | You know a local merchant very well. Since you give them so   |
|     | much business, they offer you discounts and special           |
|     | treatment.                                                    |
+-----+---------------------------------------------------------------+
| 20  | You belong to a secretive social club that gathers monthly to |
|     | drink and talk.                                               |
+-----+---------------------------------------------------------------+

    First-Tier Adept
    ----------------

    First-tier Adepts have the following abilities:

Effort:
    Your Effort is 1.

Genius:
    You have an Intellect Edge of 1, a Might Edge of 0, and a Speed
    Edge of 0.

Expert Cypher Use:
    You can bear three cyphers at a time.

    Starting Equipment:
    Appropriate clothing, plus two expensive items, two
    moderately priced items, and up to four inexpensive items of your
    choice.

    Weapons:
    You can use light weapons without penalty. You have an
    inability with medium weapons and heavy weapons; your attacks with
    medium and heavy weapons are hindered.

    Special Abilities:
    Choose four of the abilities listed below. You can’t
    choose the same ability more than once unless its description says
    otherwise. The full description for each listed ability can be found in
    Abilities, which also has descriptions for flavor and focus abilities in
    a single vast catalog. (Adept abilities require at least one free hand
    unless the GM says otherwise.)

    * :ref:`Distortion <Distortion>`
    * :ref:`Erase Memories <Erase Memories>`
    * :ref:`Far Step <Far Step>`
    * :ref:`Hedge Magic <Hedge Magic>`
    * :ref:`Magic Training <Magic Training>`
    * :ref:`Onslaught <Onslaught>`
    * :ref:`Push <Push>`
    * :ref:`Resonance Field <Resonance Field>`
    * :ref:`Scan <Scan>`
    * :ref:`Shatter <Shatter>`
    * :ref:`Ward <Ward>`

Second-Tier Adept
    -----------------

Choose one of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Adaptation <Adaptation>`
    * :ref:`Cutting Light <Cutting Light>`
    * :ref:`Hover <Hover>`
    * :ref:`Mind Reading <Mind Reading>`
    * :ref:`Retrieve Memories <Retrieve Memories>`
    * :ref:`Reveal <Reveal>`
    * :ref:`Stasis <Stasis>`

    .. note::

    Adaptation is listed as a high-tier ability in
    :ref:`the Environment category<abilities:Environment>`,
   so its presence in the second tier might be an editing mistake.

    The Numenera version of Adaptation is significantly weaker,
   since it only lasts a day
    and requires intellect points to activate.

    Third-Tier Adept
    ----------------

    Choose two of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Adroit Cypher Use <Adroit Cypher Use>`
    * :ref:`Countermeasures <Countermeasures>`
    * :ref:`Energy Protection <Energy Protection>`
    * :ref:`Fire and Ice <Fire and Ice>`
    * :ref:`Force Field Barrier <Force Field Barrier>`
    * :ref:`Sensor <Sensor>`
    * :ref:`Targeting Eye <Targeting Eye>`

Fourth-Tier Adept
    -----------------

Choose one of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Death Touch <Death Touch>`
    * :ref:`Exile <Exile>`
    * :ref:`Invisibility <Invisibility>`
    * :ref:`Matter Cloud <Matter Cloud>`
    * :ref:`Mind Control <Mind Control>`
    * :ref:`Projection <Projection>`
    * :ref:`Rapid Processing <Rapid Processing>`
    * :ref:`Regeneration <Regeneration>`
    * :ref:`Reshape <Reshape>`
    * :ref:`Wormhole <Wormhole>`

Fifth-Tier Adept
    ----------------

    Choose two of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Absorb Energy <Absorb Energy>`
    * :ref:`Concussion <Concussion>`
    * :ref:`Conjuration <Conjuration>`
    * :ref:`Create <Create>`
    * :ref:`Dust to Dust <Dust to Dust>`
    * :ref:`Knowing the Unknown <Knowing the Unknown>`
    * :ref:`Master Cypher Use <Master Cypher Use>`
    * :ref:`Teleportation <Teleportation>`
    * :ref:`True Senses <True Senses>`

Sixth-Tier Adept
    ----------------

    Choose one of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Control Weather <Control Weather>`
    * :ref:`Earthquake <Earthquake>`
    * :ref:`Move Mountains <Move Mountains>`
    * :ref:`Traverse the Worlds <Traverse the Worlds>`
    * :ref:`Usurp Cypher <Usurp Cypher>`

Adept Example
    -------------

Jen wants to create an Adept—a sorcerer for a fantasy campaign. She
    decides to be somewhat well rounded, so she puts 2 of her additional
points into each stat Pool, giving her a Might Pool of 9, a Speed Pool
of 11, and an Intellect Pool of 14. Her Adept is smart and quick. She
has an Intellect Edge of 1, a Might Edge of 0, and a Speed Edge of 0. As
a first-tier character, her Effort is 1. As her initial abilities, she
chooses :ref:`Onslaught <Onslaught>` and :ref:`Ward <Ward>`, giving her a strong offense and defense. She
also chooses :ref:`Magic Training <Magic Training>` and rounds out her character with :ref:`Scan <Scan>`,
which she hopes will be useful in gaining insight and information. For
        this character, Onslaught, Ward, and Scan are all spells she has
mastered through years of training and study.

    She can bear three cyphers. The GM gives her a potion that acts as a
short-range teleporter, a small charm that restores 5 points to her
Intellect Pool, and a fluid-filled flask that explodes like a fiery
bomb. Jen’s sorcerer is skilled with light weapons, so she chooses a
dagger.

For her descriptor, Jen chooses :ref:`descriptor:Graceful`, which adds 2 points to her
Speed Pool, bringing it to 13. That descriptor means she is trained in
balancing and anything requiring careful movements, physical performing
arts, and Speed defense tasks. Perhaps she is a dancer. In fact, she
begins to develop a backstory that involves graceful, lithe movements
that she incorporates into her spells.

For her focus, she chooses :ref:`focus:Leads`. This gives her training in social
interactions, which again helps round her out—she’s good in all kinds of
situations. Moreover, she has the :ref:`Good Advice <Good Advice>` ability, which enables her
to be a focal point of her group.

    Her spells and focus abilities cost Intellect points to activate, so
she’s glad to have a lot of points in her Intellect Pool. In addition,
her Intellect Edge will help reduce those costs. If she uses her
    :ref:`Onslaught <Onslaught>` force blast without applying Effort, it costs 0 Intellect
points and deals 4 points of damage. Her Intellect Edge will allow her
to save points to devote toward applying Effort for other purposes,
                                                    perhaps to boost the accuracy of Onslaught.

For her character arc, Jen chooses :ref:`experience-points:Aid a Friend`. She decides that when
her sorcerer character was young, she had a magical mentor. That mentor
was later taken prisoner by a demon, so her character is always looking
for clues on how to find the demon and release her friend from bondage.

    (GMs are always free to pre-select a type’s special abilities at a given
tier to reinforce the setting. In the fantasy setting of Jen’s sorcerer,
the GM might have said that all sorcerers (Adepts) start with
    :ref:`Magic Training <Magic Training>`
as one of their tier 1 abilities. This doesn’t make the
character any less powerful or special, but it says something about her
role in the world and expectations in the game.)

"
            ],
            [
                "name" => "Explorer",
                'might_pool' => 10,
                'speed_pool' => 9,
                'intellect_pool' => 9,
                'might_edge' => 1,
                'cyphers_limit' => 2,
                'equipment' => [
                    "1 weapon",
                    "2 expensive items",
                    "2 moderate-priced items",
                    "4 inexpensive items"
                ],
                'selected_abilities' => ["Practiced w/ med. & light weapons"],
                'abilities' => [
                    "Block",
                    "Find the Way",
                    "2 Physical Skills",
                    "Practiced in Armor",
                    "Trained w/o Armor",
                    "Mus. of Iron",
                    "Decipher",
                    "Practiced w/ all weapons",
                    "Improved Edge",
                    "Danger Sense",
                    "Endurance",
                    "Fleet of Foot",
                    "No Need Weapons",
                    "Surging Conf",
                    "2 Knowledge Skills"
                ],
                'allowed_ability_count' => 4,
                'intrusions' => [
                    "Fort. Malfunction",
                    "Serend. Landmark",
                    "Weak Strain"
                ],
                "description" => "
========

Fantasy/Fairy tale:
    Explorer, adventurer, delver, mystery seeker

Modern/Horror/Romance:
    athlete, explorer, adventurer, drifter,
    detective, scholar, spelunker, trailblazer, investigative reporter

Science fiction:
    Explorer, adventurer, wanderer, planetary specialist,
    xenobiologist

Superhero/Post-Apocalyptic:
    adventurer, crimefighter

You are a person of action and physical ability, fearlessly facing the
unknown. You travel to strange, exotic, and dangerous places, and
discover new things. This means you’re physical but also probably
knowledgeable.

Individual Role:
    Although Explorers can be academics or well studied,
    they are first and foremost interested in action. They face grave
    dangers and terrible obstacles as a routine part of life.

    Group Role:
    Explorers sometimes work alone, but far more often they
    operate in teams with other characters. The Explorer frequently leads
    the way, blazing the trail. However, they’re also likely to stop and
    investigate anything intriguing they stumble upon.

    Societal Role:
    Not all Explorers are out traipsing through the
    wilderness or poking about an old ruin. Sometimes, an Explorer is a
    teacher, a scientist, a detective, or an investigative reporter. In any
    event, an Explorer bravely faces new challenges and gathers knowledge to
    share with others.

    Advanced Explorers:
    Higher-tier Explorers gain more skills, some combat
    abilities, and a number of abilities that allow them to deal with
    danger. In short, they become more and more well-rounded, able to deal
    with any challenge.

    Explorer Player Intrusions
    --------------------------

    When playing an Explorer, you can spend 1 XP to use one of the following
player intrusions, provided the situation is appropriate and the GM
agrees.

Fortuitous Malfunction:
    A trap or a dangerous device malfunctions before
    it can affect you.

    Serendipitous Landmark:
    Just when it seems like the path is lost (or you
    are), a trail marker, a landmark, or simply the way the terrain or
    corridor bends, rises, or falls away suggests to you the best path
    forward, at least from this point.

    Weak Strain:
    The poison or disease turns out not to be as debilitating
    or deadly as it first seemed, and inflicts only half the damage that it
    would have otherwise.

    Explorer Stat Pools
    -------------------

========= ===================
Stat      Pool Starting Value
    ========= ===================
Might     10
Speed     9
Intellect 9
    ========= ===================

You get 6 additional points to divide among your stat Pools however you
wish.

Explorer Background Connection
    ------------------------------

    Your type helps determine the connection you have to the setting. Roll a
d20 or choose from the following list to determine a specific fact about
your background that provides a connection to the rest of the world. You
can also create your own fact.

+-----+---------------------------------------------------------------+
| d20 | Background                                                    |
+=====+===============================================================+
| 1   | You were a star high school athlete. You’re still in great    |
|     | shape, but those were the glory days, man.                    |
+-----+---------------------------------------------------------------+
| 2   | Your brother is the lead singer in a really popular band.     |
+-----+---------------------------------------------------------------+
| 3   | You have made a number of discoveries in your explorations,   |
|     | but not all opportunities to capitalize on them have panned   |
|     | out yet.                                                      |
+-----+---------------------------------------------------------------+
| 4   | You were a cop, but you gave it up after encountering         |
|     | corruption on the force.                                      |
+-----+---------------------------------------------------------------+
| 5   | Your parents were missionaries, so you spent much of your     |
|     | young life traveling to exotic places.                        |
+-----+---------------------------------------------------------------+
| 6   | You served in the military with honor.                        |
+-----+---------------------------------------------------------------+
| 7   | You received assistance from a secretive organization, which  |
|     | paid for your schooling. Now they seem to want a lot more     |
|     | from you.                                                     |
+-----+---------------------------------------------------------------+
| 8   | You went to a prestigious university on an athletic           |
|     | scholarship, but you excelled in class as well as on the      |
|     | field.                                                        |
+-----+---------------------------------------------------------------+
| 9   | Your best friend from your youth is now an influential member |
|     | of the government.                                            |
+-----+---------------------------------------------------------------+
| 10  | You used to be a teacher. Your students remember you fondly.  |
+-----+---------------------------------------------------------------+
| 11  | You worked as a small-time criminal operative until you were  |
|     | caught and served some time in jail, after which you tried to |
|     | go straight.                                                  |
+-----+---------------------------------------------------------------+
| 12  | Your greatest discovery to date was stolen by your            |
|     | arch-rival.                                                   |
+-----+---------------------------------------------------------------+
| 13  | You belong to an exclusive organization of Explorers whose    |
|     | existence is not widely known.                                |
+-----+---------------------------------------------------------------+
| 14  | You were kidnapped as a small child under mysterious          |
|     | circumstances, although you were recovered safely. The case   |
|     | still has some notoriety.                                     |
+-----+---------------------------------------------------------------+
| 15  | When you were young, you were addicted to narcotics, and now  |
|     | you are a recovering addict.                                  |
+-----+---------------------------------------------------------------+
| 16  | While exploring a remote location, you saw something strange  |
|     | you’ve never been able to explain.                            |
+-----+---------------------------------------------------------------+
| 17  | You own a small bar or restaurant.                            |
+-----+---------------------------------------------------------------+
| 18  | You published a book about some of your exploits and          |
|     | discoveries, and it has achieved some acclaim.                |
+-----+---------------------------------------------------------------+
| 19  | Your sister owns a store and gives you a hefty discount.      |
+-----+---------------------------------------------------------------+
| 20  | Your father is a high-ranking officer in the military with    |
|     | many connections.                                             |
+-----+---------------------------------------------------------------+

    First-Tier Explorer
    -------------------

First-tier Explorers have the following abilities:

Effort:
    Your Effort is 1.

Physical Nature:
    You have a Might Edge of 1, a Speed Edge of 0, and an
    Intellect Edge of 0.

Cypher Use:
    You can bear two cyphers at a time.

    Starting Equipment:
    Appropriate clothing and a weapon of your choice,
    plus two expensive items, two moderately priced items, and up to four
    inexpensive items.

    Weapons:
    You can use light and medium weapons without penalty. You have
    an inability with heavy weapons; your attacks with heavy weapons are
    hindered.

    Special Abilities:
    Choose four of the abilities listed below. You can’t
    choose the same ability more than once unless its description says
    otherwise. The full description for each listed ability can be found in
    Abilities, which also has descriptions for flavor and focus abilities in
    a single vast catalog.

    * :ref:`Block <Block>`
    * :ref:`Danger Sense <Danger Sense>`
    * :ref:`Decipher <Decipher>`
    * :ref:`Endurance <Endurance>`
    * :ref:`Find the Way <Find the Way>`
    * :ref:`Fleet of Foot <Fleet of Foot>`
    * :ref:`Improved Edge <Improved Edge>`
    * :ref:`Knowledge Skills <Knowledge Skills>`
    * :ref:`Muscles of Iron <Muscles of Iron>`
    * :ref:`No Need for Weapons <No Need for Weapons>`
    * :ref:`Physical Skills <Physical Skills>`
    * :ref:`Practiced in Armor <Practiced in Armor>`
    * :ref:`Practiced With All Weapons <Practiced With All Weapons>`
    * :ref:`Surging Confidence <Surging Confidence>`
    * :ref:`Trained Without Armor <Trained Without Armor>`

Second-Tier Explorer
    --------------------

    Choose four of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Curious <Curious>`
    * :ref:`Danger Instinct <Danger Instinct>`
    * :ref:`Enable Others <Enable Others>`
    * :ref:`Escape <Escape>`
    * :ref:`Eye for Detail <Eye for Detail>`
    * :ref:`Foil Danger <Foil Danger>`
    * :ref:`Hand to Eye <Hand to Eye>`
    * :ref:`Investigative Skills <Investigative Skills>`
    * :ref:`Quick Recovery <Quick Recovery>`
    * :ref:`Range Increase <Range Increase>`
    * :ref:`Skill With Defense <Skill With Defense>`
    * :ref:`Stand Watch <Stand Watch>`
    * :ref:`Travel Skills <Travel Skills>`
    * :ref:`Wreck <Wreck>`

Third-Tier Explorer
    -------------------

Choose three of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Controlled Fall <Controlled Fall>`
    * :ref:`Experienced in Armor <Experienced in Armor>`
    * :ref:`Expert Cypher Use <Expert Cypher Use>`
    * :ref:`Ignore the Pain <Ignore the Pain>`
    * :ref:`Obstacle Running <Obstacle Running>`
    * :ref:`Resilience <Resilience>`
    * :ref:`Run and Fight <Run and Fight>`
    * :ref:`Seize the Moment <Seize the Moment>`
    * :ref:`Skill With Attacks <Skill With Attacks>`
    * :ref:`Stone Breaker <Stone Breaker>`
    * :ref:`Think Your Way Out <Think Your Way Out>`
    * :ref:`Trapfinder <Trapfinder>`
    * :ref:`Wrest From Chance <Wrest From Chance>`

Fourth-Tier Explorer
    --------------------

    Choose two of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Capable Warrior <Capable Warrior>`
    * :ref:`Expert Skill <Expert Skill>`
    * :ref:`Increased Effects <Increased Effects>`
    * :ref:`Read the Signs <Read the Signs>`
    * :ref:`Runner <Runner>`
    * :ref:`Subtle Steps <Subtle Steps>`
    * :ref:`Tough as Nails <Tough as Nails>`

Fifth-Tier Explorer
    -------------------

Choose three of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Adroit Cypher Use <Adroit Cypher Use>`
    * :ref:`Free to Move <Free to Move>`
    * :ref:`Group Friendship <Group Friendship>`
    * :ref:`Hard to Kill <Hard to Kill>`
    * :ref:`Jump Attack <Jump Attack>`
    * :ref:`Mastery With Defense <Mastery With Defense>`
    * :ref:`Parry <Parry>`
    * :ref:`Physically Gifted <Physically Gifted>`
    * :ref:`Take Command <Take Command>`
    * :ref:`Vigilant <Vigilant>`

Sixth-Tier Explorer
    -------------------

Choose three of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Again and Again <Again and Again>`
    * :ref:`Inspire Coordinated Actions <Inspire Coordinated Actions>`
    * :ref:`Mastery in Armor <Mastery in Armor>`
    * :ref:`Mastery With Attacks <Mastery With Attacks>`
    * :ref:`Negate Danger <Negate Danger>`
    * :ref:`Share Defense <Share Defense>`
    * :ref:`Spin Attack <Spin Attack>`
    * :ref:`Wild Vitality <Wild Vitality>`

Explorer Example
    ----------------

    Sam decides to create an Explorer character for a science fiction
    campaign. This character will be a hardy soul who explores alien worlds.
    They put 3 additional points into their Might Pool, 2 into their Speed
Pool, and 1 into their Intellect Pool; their stat Pools are now Might
13, Speed 11, and Intellect 10. As a first-tier character, their Effort
is 1, their Might Edge is 1, and their Speed Edge and Intellect Edge are
0. Their character is fairly well-rounded so far.

    Sam immediately leaps in and starts choosing abilities. They pick
    :ref:`Danger Sense <Danger Sense>` and :ref:`Surging Confidence <Surging Confidence>`, thinking those abilities will be generally
useful. They also choose :ref:`Practiced in Armor <Practiced in Armor>`,
reasoning that the
character wears high-tech medium armor when exploring. Last, they choose
    :ref:`Knowledge Skills <Knowledge Skills>` and select geology and biology to help during
interplanetary explorations.

    Sam’s Explorer can bear two cyphers, which in this setting involve
nanotechnology. The GM decides that one is a nanite injector that grants
a +1 bonus to Might Edge when used, and the other is a device that can
create one simple handheld object the user wishes.

    Sam’s Explorer is not really geared toward fighting, but sometimes the
universe is a dangerous place, so they note that they’re carrying a
medium blaster as well.

    Sam still needs a descriptor and a focus. Looking to the Descriptor
chapter, they choose :ref:`descriptor:Hardy`, which increases their Might Pool to 17. They
also heal more quickly and can operate better when injured. They’re
trained in Might defense but have an inability with initiative; however,
it’s effectively canceled out by their Danger Sense (and vice versa).
Sam could go back and select something else instead of Danger Sense, but
they like it and decide to keep it. Overall, the descriptor ends up
making the character tough but a little slow.

For their focus, Sam chooses :ref:`focus:Explores Dark Places`
(in this case, weird
ruins of alien civilizations). This gives the character a bunch of
additional skills: searching, listening, climbing, balancing, and
jumping. They’re quite the capable Explorer.

For their character arc, Sam chooses :ref:`experience-points:Enterprise`. Exploring alien places
sometimes turns up strange relics, and Sam figures they might be able to
set up a service to reliably transport these items to responsible third
parties, rather than allow them to fall into the hands of pirates and
    rich private collectors. For a small fee, of course.

"
            ],
            [
                "name" => "Speaker",
                'might_pool' => 8,
                'speed_pool' => 9,
                'intellect_pool' => 11,
                'intellect_edge' => 1,
                'equipment' => [
                    "1 weapon",
                    "2 expensive items",
                    "2 moderate-priced items",
                    "4 inexpensive items"
                ],
                'selected_abilities' => ["Practiced w/ light weapons"
                ],
                'abilities' => [
                    "Inspire Aggression",
                    "Enthrall",
                    "Erase Memories",
                    "Encouragement",
                    "Fast Talk",
                    "Practiced With Medium Weapons",
                    "2 Interac. Skills",
                    "Spin Identity",
                    "Terrifying Pres",
                    "Understanding",
                    "Babel",
                    "Demeanor of Command",
                    "Anecdote"
                ],
                'allowed_ability_count' => 4,
                'intrusions' => [
                    "Friendly NPC",
                    "Perfect Suggestion",
                    "Unexpected Gift"
                ],
                "description" => "

Fantasy/Fairy tale:
    bard, speaker, skald, emissary, priest, advocate

Modern/Horror/Romance:
    diplomat, charmer, face, spinner, manipulator,
    minister, mediator, lawyer

Science fiction:
    diplomat, empath, glam, consul, legate

Superhero/Post-Apocalyptic:
    charmer, mesmerist, puppet master

You’re good with words and good with people. You talk your way past
challenges and out of jams, and you get people to do what you want.

    Individual Role:
    Speakers are smart and charismatic. They like people
    and, more important, they understand them. This helps speakers get
    others to do what needs to be done.

    Group Role:
    The Speaker is often the face of the group, serving as the
    person who speaks for all and negotiates with others. Combat and action
    are not a Speaker’s strong suits, so other characters sometimes have to
    defend the Speaker in times of danger.

    Societal Role:
    Speakers are frequently political or religious leaders.
    Just as often, however, they are con artists or criminals.

    Advanced Speakers:
    Higher-tier speakers use their abilities to control
    and manipulate people as well as aid and nurture their friends. They can
    talk their way out of danger and even use their words as weapons.

    Speaker Player Intrusions
    -------------------------

When playing a Speaker, you can spend 1 XP to use one of the following
player intrusions, provided the situation is appropriate and the GM
agrees.

Friendly NPC:
    An NPC you don’t know, someone you don’t know that well,
    or someone you know but who hasn’t been particularly friendly in the
    past chooses to help you, though doesn’t necessarily explain why. Maybe
    they’ll ask you for a favor in return afterward, depending on how much
    trouble they go to.

    Perfect Suggestion:
    A follower or other already-friendly NPC suggests a
    course of action with regard to an urgent question, problem, or obstacle
    you’re facing.

    Unexpected Gift:
    An NPC hands you a physical gift you were not
    expecting, one that helps put the situation at ease if things seem
    strained, or provides you with a new insight for understanding the
                                                     context of the situation if there’s something you’re failing to
    understand or grasp.

    Speaker Stat Pools
    ------------------

========= ===================
Stat      Pool Starting Value
    ========= ===================
Might     8
Speed     9
Intellect 11
    ========= ===================

You get 6 additional points to divide among your stat Pools however you
wish.

Speaker Background Connection
    -----------------------------

Your type helps determine the connection you have to the setting. Roll a
d20 or choose from the following list to determine a specific fact about
your background that provides a connection to the rest of the world. You
can also create your own fact.

+-----+---------------------------------------------------------------+
| d20 | Background                                                    |
+=====+===============================================================+
| 1   | One of your parents was a famous entertainer in their early   |
|     | years and hoped you would excel in the same medium.           |
+-----+---------------------------------------------------------------+
| 2   | When you were a teenager, one of your siblings went missing   |
|     | and is presumed dead. The shock rent your family, and it’s    |
|     | something you’ve never gotten over.                           |
+-----+---------------------------------------------------------------+
| 3   | You were inducted into a secret society that claims to hold   |
|     | and protect esoteric knowledge opposing the forces of evil.   |
+-----+---------------------------------------------------------------+
| 4   | You lost one of your parents to alcoholism. They may still be |
|     | alive, but you’d be hard pressed to find forgiveness.         |
+-----+---------------------------------------------------------------+
| 5   | You have no memory of anything that happened to you before    |
|     | the age of 18.                                                |
+-----+---------------------------------------------------------------+
| 6   | Your grandparents raised you on a farm far from bustling      |
|     | urban centers. You like to think the instruction they gave    |
|     | you prepared you for anything.                                |
+-----+---------------------------------------------------------------+
| 7   | As an orphan, you had a difficult childhood, and your entry   |
|     | into adulthood was challenging.                               |
+-----+---------------------------------------------------------------+
| 8   | You grew up in extreme poverty, among criminals. You still    |
|     | have some connections with the old neighborhood.              |
+-----+---------------------------------------------------------------+
| 9   | You served as an envoy for a powerful and influential person  |
|     | in the past, and they still look upon you with favor.         |
+-----+---------------------------------------------------------------+
| 10  | You have an annoying rival who always seems to get in your    |
|     | way or foil your plans.                                       |
+-----+---------------------------------------------------------------+
| 11  | You’ve worked yourself into the position of spokesperson for  |
|     | an organization or company of some importance.                |
+-----+---------------------------------------------------------------+
| 12  | Your neighbors were murdered, and the mystery remains         |
|     | unsolved.                                                     |
+-----+---------------------------------------------------------------+
| 13  | You have traveled extensively, and during that time you       |
|     | accumulated quite a collection of strange souvenirs.          |
+-----+---------------------------------------------------------------+
| 14  | Your childhood sweetheart ended up with your best friend (now |
|     | your ex-best friend).                                         |
+-----+---------------------------------------------------------------+
| 15  | You are part of a maligned minority, but you work to bring    |
|     | the injustice of your status to public attention.             |
+-----+---------------------------------------------------------------+
| 16  | You’re part owner of a local bar, where you’re something of a |
|     | whiz in creating specialty cocktails.                         |
+-----+---------------------------------------------------------------+
| 17  | You once ran a con that cheated important people out of       |
|     | money, and they want revenge.                                 |
+-----+---------------------------------------------------------------+
| 18  | You used to act in a traveling theater, and they remember you |
|     | fondly (as do people in the places you visited).              |
+-----+---------------------------------------------------------------+
| 19  | You are in a close romantic relationship with someone in      |
|     | local politics.                                               |
+-----+---------------------------------------------------------------+
| 20  | Someone out there tries to pose as you, using your identity,  |
|     | often for nefarious ends. You’ve never met the culprit, but   |
|     | you’d certainly like to.                                      |
+-----+---------------------------------------------------------------+

    First-Tier Speaker
    ------------------

    First-tier speakers have the following abilities:

Effort:
    Your Effort is 1.

Genius:
    You have an Intellect Edge of 1, a Might Edge of 0, and a Speed
    Edge of 0.

Cypher Use:
    You can bear two cyphers at a time.

    Weapons:
    You can use light weapons without penalty. You have an
    inability with medium and heavy weapons; your attacks with medium and
    heavy weapons are hindered.

    Starting Equipment:
    Appropriate clothing and a light weapon of your
    choice, plus two expensive items, two moderately priced items, and up to
    four inexpensive items.

    Special Abilities:
    Choose four of the abilities listed below. You can’t
    choose the same ability more than once unless its description says
    otherwise. The full description for each listed ability can be found in
    Abilities, which also has descriptions for flavor and focus abilities in
    a single vast catalog. (Some Speaker abilities, like Mind Reading or
    True Senses, imply a supernatural element. If this is inappropriate to
    the character or the setting, these abilities can be replaced with
    something from the stealth flavor, or the GM can slightly modify them so
    they are based in extraordinary talents and insight rather than the
    supernatural.)

    * :ref:`Anecdote <Anecdote>`
    * :ref:`Babel <Babel>`
    * :ref:`Demeanor of Command <Demeanor of Command>`
    * :ref:`Encouragement <Encouragement>`
    * :ref:`Enthrall <Enthrall>`
    * :ref:`Erase Memories <Erase Memories>`
    * :ref:`Fast Talk <Fast Talk>`
    * :ref:`Inspire Aggression <Inspire Aggression>`
    * :ref:`Interaction Skills <Interaction Skills>`
    * :ref:`Practiced With Medium Weapons <Practiced With Medium Weapons>`
    * :ref:`Spin Identity <Spin Identity>`
    * :ref:`Terrifying Presence <Terrifying Presence>`
    * :ref:`Understanding <Understanding>`

Second-Tier Speaker
    -------------------

Choose two of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Basic Follower <Basic Follower>`
    * :ref:`Calm Stranger <Calm Stranger>`
    * :ref:`Disincentivize <Disincentivize>`
    * :ref:`Gather Intelligence <Gather Intelligence>`
    * :ref:`Impart Ideal <Impart Ideal>`
    * :ref:`Inspiring Ease <Inspiring Ease>`
    * :ref:`Interaction Skills <Interaction Skills>`
    * :ref:`Practiced in Armor <Practiced in Armor>`
    * :ref:`Skill With Defense <Skill With Defense>`
    * :ref:`Speedy Recovery <Speedy Recovery>`
    * :ref:`Unexpected Betrayal <Unexpected Betrayal>`

Third-Tier Speaker
    ------------------

    Choose three of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Accelerate <Accelerate>`
    * :ref:`Blend In <Blend In>`
    * :ref:`Discerning Mind <Discerning Mind>`
    * :ref:`Expert Cypher Use <Expert Cypher Use>`
    * :ref:`Expert Follower <Expert Follower>`
    * :ref:`Grand Deception <Grand Deception>`
    * :ref:`Lead by Inquiry <Lead by Inquiry>`
    * :ref:`Mind Reading <Mind Reading>`
    * :ref:`Oratory <Oratory>`
    * :ref:`Perfect Stranger <Perfect Stranger>`
    * :ref:`Quick Wits <Quick Wits>`
    * :ref:`Telling <Telling>`

Fourth-Tier Speaker
    -------------------

Choose two of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Anticipate Attack <Anticipate Attack>`
    * :ref:`Confounding Banter <Confounding Banter>`
    * :ref:`Feint <Feint>`
    * :ref:`Heightened Skills <Heightened Skills>`
    * :ref:`Psychosis <Psychosis>`
    * :ref:`Read the Signs <Read the Signs>`
    * :ref:`Spur Effort <Spur Effort>`
    * :ref:`Strategize <Strategize>`
    * :ref:`Suggestion <Suggestion>`

Fifth-Tier Speaker
    ------------------

    Choose three of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Adroit Cypher Use <Adroit Cypher Use>`
    * :ref:`Discipline of Watchfulness <Discipline of Watchfulness>`
    * :ref:`Experienced in Armor <Experienced in Armor>`
    * :ref:`Flee <Flee>`
    * :ref:`Foul Aura <Foul Aura>`
    * :ref:`Knowing the Unknown <Knowing the Unknown>`
    * :ref:`Regeneration <Regeneration>`
    * :ref:`Skill With Attacks <Skill With Attacks>`
    * :ref:`Stimulate <Stimulate>`

Sixth-Tier Speaker
    ------------------

    Choose two of the abilities listed below (or from a lower tier) to add
to your repertoire. In addition, you can replace one of your lower-tier
abilities with a different one from a lower tier.

* :ref:`Assume Control <Assume Control>`
    * :ref:`Battle Management <Battle Management>`
    * :ref:`Crowd Control <Crowd Control>`
    * :ref:`Inspiring Success <Inspiring Success>`
    * :ref:`Recruit Deputy <Recruit Deputy>`
    * :ref:`Shatter Mind <Shatter Mind>`
    * :ref:`True Senses <True Senses>`
    * :ref:`Word of Command <Word of Command>`

Speaker Example
    ---------------

Mary wants to create a Speaker for a Lovecraftian horror campaign. She
puts 3 of her additional stat points into her Intellect Pool and 3 into
her Speed Pool; her stat Pools are now Might 8, Speed 12, and Intellect
14. As a first-tier character, her Effort is 1, her Might Edge and Speed
Edge are 0, and her Intellect Edge is 1. She’s smart and charismatic but
not particularly tough.

    Mary chooses :ref:`Fast Talk <Fast Talk>` and :ref:`Spin Identity <Spin Identity>` to help get into places and
    learn things she wants to know. She’s a bit of a con artist. She’s good
to her friends, however, and chooses :ref:`Encouragement <Encouragement>` as well. Mary rounds
out her first-tier abilities with :ref:`Interaction Skills <Interaction Skills>` (deceiving and
        persuasion).

    A Speaker normally starts with two cyphers, but the GM rules that
characters in this campaign start with only one—something creepy
relating to their background. Mary’s cypher is an odd pocket watch given
to her by her grandfather. She doesn’t know how or why, but when
activated, the watch allows her to take twice as many actions for three
                                                                  rounds.

                                                                  Mary’s character carries a small knife hidden in her bag in case of
trouble. As a light weapon, it inflicts 2 points of damage, but attacks
with it are eased.

    Mary chooses :ref:`descriptor:Resilient` for her descriptor and decides that she can
probably learn the truth behind some of the strange things that she’s
heard about without feeling too much trauma if it’s horrible. Resilient
increases her Might Pool to 10 and her Intellect Pool to 16. She’s
trained in Might and Intellect defense actions and gains an extra
recovery roll each day. At first, Mary is sad that her descriptor gives
her an inability in knowledge and puzzle tasks, but then she realizes
that the flaw fits her character well—she’s better at getting people to
tell her what she needs to know than at figuring out the information
herself.

For her focus, Mary chooses :ref:`focus:Moves Like a Cat`, granting her a final Speed
    Pool of 18 and training in balance. In the end, she’s graceful and
    quick, charismatic, and hardier than she initially thought thanks to her
drive. She’s ready to investigate the weird.

For her character arc, Mary chooses :ref:`experience-points:Fall From Grace`. She decides she’s
had an obsession with a strange tome that’s been in her family for
        generations, and her character is drawn to its strange languages and
    rituals.
"
            ]
        ];

        foreach ($types as $type) {
            $abilities = $type['abilities'] ?? null;
            $selectedAbilities = $type['selected_abilities'] ?? null;
            unset($type['abilities'], $type['selected_abilities']);

            $cypherType = CypherType::create($type);

            if ($selectedAbilities) {
                $selectedAbilities = CypherAbility::whereRaw("name LIKE ANY (array['%".implode("%', '%", $selectedAbilities)."%'])")->get();

                foreach ($selectedAbilities as $ability) {
                    $cypherType->specialAbilities()->attach($ability->id, ['selected' => true]);
                }

                unset($selectedAbilities);
            }

            if ($abilities) {
                $abilities = CypherAbility::whereRaw("name LIKE ANY (array['%".implode("%', '%", $abilities)."%'])")->ray()->get();
                if ($abilities->isNotEmpty()) {
                    $cypherType->abilities()->syncWithoutDetaching($abilities->pluck('id')->toArray());
                }
                unset($abilities);
            }
        }
    }
}
