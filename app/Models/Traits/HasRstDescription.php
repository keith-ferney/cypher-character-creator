<?php

namespace App\Models\Traits;

use Gregwar\RST\Parser;
use Illuminate\Support\Str;

trait HasRstDescription
{
    public $example = '
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
    ';

    public function getDescriptionAttribute($value): string
    {

        $parser = new Parser();
        $html = (string)$parser->parse($value);
        $html = preg_replace('/([A-z0-9 \-()\/]*):\s*/', '<b>$1:</b>', $html);
        $html = preg_replace('/\n/', '</br>', $html);
        // make the table have borders
        $html = preg_replace('/<table>/', '<table class="fancy-table">', $html);

        return $html;
    }
}
