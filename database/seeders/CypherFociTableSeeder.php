<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CypherAbility;
use App\Models\CypherFocus;
use Illuminate\Database\Seeder;

class CypherFociTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $foci = [
            ['name' => 'Abides in Stone', 'description' => '
 ---------------

Your flesh is made of hard mineral, making you a hulking,
difficult-to-harm humanoid.

Tier 1:
    :ref:`Golem Body <Golem Body>`

Tier 1:
    :ref:`Golem Healing <Golem Healing>`

Tier 2:
    :ref:`Golem Grip <Golem Grip>`

Tier 3:
    :ref:`Trained Basher <Trained Basher>`

Tier 3:
    :ref:`Golem Stomp <Golem Stomp>` or :ref:`Weaponization <Weaponization>`

Tier 4:
    :ref:`Deep Reserves <Deep Reserves>`

Tier 5:
    :ref:`Specialized Basher <Specialized Basher>`

Tier 5:
    :ref:`Still As a Statue <Still As a Statue>`

Tier 6:
    :ref:`Ultra Enhancement <Ultra Enhancement>` or :ref:`Mind Surge <Mind Surge>`

GM Intrusions:
    Creatures of stone sometimes forget their own strength or
    weight. A walking statue can terrify common folk.

'],['name' => 'Absorbs Energy','description' => '
 --------------

You can harness kinetic energy and transform it into other kinds of
energy.

Tier 1:
    :ref:`Absorb Kinetic Energy <Absorb Kinetic Energy>`

Tier 1:
    :ref:`Release Energy <Release Energy>`

Tier 2:
    :ref:`Energize Object <Energize Object>`

Tier 3:
    :ref:`Absorb Pure Energy <Absorb Pure Energy>` or :ref:`Improved Absorb Kinetic Energy <Improved Absorb Kinetic Energy>`

Tier 4:
    :ref:`Overcharge Energy <Overcharge Energy>`

Tier 5:
    :ref:`Energize Creature <Energize Creature>`

Tier 6:
    :ref:`Energize Crowd <Energize Crowd>` or :ref:`Overcharge Device <Overcharge Device>`

GM Intrusions:
    Energy goes to ground in a destructive way. Some
    predators feed directly on energy. An unintended item is drained of
    energy.

'],['name' => 'Awakens Dreams','description' => '
 --------------

You can pull images from dreams and bring them to life in the waking
world.

Tier 1:
    :ref:`Dreamcraft <Dreamcraft>`

Tier 1:
    :ref:`Oneirochemy <Oneirochemy>`

Tier 2:
    :ref:`Dream Thief <Dream Thief>`

Tier 3:
    :ref:`Dream Becomes Reality <Dream Becomes Reality>` or :ref:`Enhanced Intellect <Enhanced Intellect>`

Tier 4:
    :ref:`Daydream <Daydream>`

Tier 5:
    :ref:`Nightmare <Nightmare>`

Tier 6:
    :ref:`Chamber of Dreams <Chamber of Dreams>` or :ref:`Reactive Field <Reactive Field>`

GM Intrusions:
    An unexpected sleepwalking episode puts the character
    into a dangerous situation. A nightmare breaks free of a dream.

'],['name' => 'Battles Robots','description' => '
 --------------

You excel in battling robots, automatons, and machine entities.

Tier 1:
    :ref:`Machine Vulnerabilities <Machine Vulnerabilities>`

Tier 1:
    :ref:`Tech Skills <Tech Skills>`

Tier 2:
    :ref:`Defense Against Robots <Defense Against Robots>`

Tier 2:
    :ref:`Machine Hunting <Machine Hunting>`

Tier 3:
    :ref:`Disable Mechanisms <Disable Mechanisms>` or :ref:`Surprise Attack <Surprise Attack>`

Tier 4:
    :ref:`Robot Fighter <Robot Fighter>`

Tier 5:
    :ref:`Drain Power <Drain Power>`

Tier 6:
    :ref:`Deactivate Mechanisms <Deactivate Mechanisms>` or :ref:`Lethal Damage <Lethal Damage>`

GM Intrusions:
    The robot explodes upon defeat. Other robots come after
    the character for revenge.

'],['name' => 'Bears a Halo of Fire','description' => '
 --------------------

You can sheath your body in flames, which protects you and harms your
foes.

Tier 1:
    :ref:`Shroud of Flame <Shroud of Flame>`

Tier 2:
    :ref:`Hurl Flame <Hurl Flame>`

Tier 3:
    :ref:`Wings of Fire <Wings of Fire>` or :ref:`Fiery Hand of Doom <Fiery Hand of Doom>`

Tier 4:
    :ref:`Flameblade <Flameblade>`

Tier 5:
    :ref:`Fire Tendrils <Fire Tendrils>`

Tier 6:
    :ref:`Fire Servant <Fire Servant>` or :ref:`Inferno Trail <Inferno Trail>`

GM Intrusions:
    Fire burns flammable material. Fire spreads out of
    control. Primitive creatures fear fire and often attack what they fear.

'],['name' => 'Blazes With Radiance','description' => '
 --------------------

You can create light, sculpt it, bend it away from you, or gather it to
use as a weapon.

Tier 1:
    :ref:`Enlightened <Enlightened>`

Tier 1:
    :ref:`Illuminating Touch <Illuminating Touch>`

Tier 2:
    :ref:`Dazzling Sunburst <Dazzling Sunburst>`

Tier 3:
    :ref:`Burning Light <Burning Light>` or :ref:`Skill With Defense <Skill With Defense>`

Tier 4:
    :ref:`Sunlight <Sunlight>`

Tier 5:
    :ref:`Disappear <Disappear>`

Tier 6:
    :ref:`Living Light <Living Light>` or :ref:`Defensive Field <Defensive Field>`

GM Intrusions:
    Allies are accidentally dazzled or blinded. Bright
    flashes draw guards.

'],['name' => 'Brandishes an Exotic Shield','description' => '
 ---------------------------

You deploy an amazing shield of pure force that provides protection and
some offensive options.

Tier 1:
    :ref:`Force Field Shield <Force Field Shield>`

Tier 1:
    :ref:`Force Bash <Force Bash>`

Tier 2:
    :ref:`Enveloping Shield <Enveloping Shield>`

Tier 3:
    :ref:`Healing Pulse <Healing Pulse>` or :ref:`Throw Force Shield <Throw Force Shield>`

Tier 4:
    :ref:`Energized Shield <Energized Shield>`

Tier 5:
    :ref:`Force Wall <Force Wall>`

Tier 6:
    :ref:`Bouncing Shield <Bouncing Shield>` or :ref:`Shield Burst <Shield Burst>`

GM Intrusions:
    The shield is temporarily lost. A foe temporarily ends up
    with the shield.

'],['name' => 'Builds Robots','description' => '
 -------------

Your robotic creations do as they are commanded.

(The word “robot” is used in this focus, though the robot you create
might look very different from one created by someone else, depending on
the genre. Steampunk robots, organic robots, or even magical golems are
all feasible “robots.”)

Tier 1:
    :ref:`Robot Assistant <Robot Assistant>`

Tier 1:
    :ref:`Robot Builder <Robot Builder>`

Tier 2:
    :ref:`Robot Control <Robot Control>`

Tier 3:
    :ref:`Expert Follower <Expert Follower>` or :ref:`Skill With Defense <Skill With Defense>`

Tier 4:
    :ref:`Robot Upgrade <Robot Upgrade>`

Tier 5:
    :ref:`Robot Fleet <Robot Fleet>`

Tier 6:
    :ref:`Robot Evolution <Robot Evolution>` or :ref:`Robot Upgrade <Robot Upgrade>`

GM Intrusions:
    The robot is hacked, gains a mind of its own, or
    unexpectedly detonates.

'],['name' => 'Calculates the Incalculable','description' => '
 ---------------------------

Awesome mathematical ability allows you to model the world in real time,
giving you an edge over everyone.

Tier 1:
    :ref:`Predictive Equation <Predictive Equation>`

Tier 1:
    :ref:`Higher Mathematics <Higher Mathematics>`

Tier 2:
    :ref:`Predictive Model <Predictive Model>`

Tier 3:
    :ref:`Subconscious Defense <Subconscious Defense>` or :ref:`Enhanced Intellect <Enhanced Intellect>`

Tier 4:
    :ref:`Cognizant Offense <Cognizant Offense>`

Tier 5:
    :ref:`Greater Enhanced Intellect <Greater Enhanced Intellect>`

Tier 5:
    :ref:`Further Mathematics <Further Mathematics>`

Tier 6:
    :ref:`Knowing the Unknown <Knowing the Unknown>` or :ref:`Greater Enhanced Intellect <Greater Enhanced Intellect>`

GM Intrusions:
    Too many predicted results threaten to overwhelm and stun
    the character. A result points to imminent disaster.

'],['name' => 'Channels Divine Blessings','description' => '
 -------------------------

A devout follower of a divine being, you channel some of your deity’s
power to achieve wonders.

Tier 1:
    :ref:`Blessing of the Gods <Blessing of the Gods>`

Tier 2:
    :ref:`Enhanced Intellect <Enhanced Intellect>`

Tier 3:
    :ref:`Divine Radiance <Divine Radiance>` or :ref:`Fire Bloom <Fire Bloom>`

Tier 4:
    :ref:`Overawe <Overawe>`

Tier 5:
    :ref:`Divine Intervention <Divine Intervention>`

Tier 6:
    :ref:`Divine Symbol <Divine Symbol>` or :ref:`Summon Demon <Summon Demon>`

GM Intrusions:
    A demon investigates divine magic use. A rival cult has
    issues with the character’s teachings.

'],['name' => 'Commands Mental Powers','description' => '
 ----------------------

You can pull images from dreams and bring them to life in the waking
world.

Tier 1:
    :ref:`Telepathic <Telepathic>`

Tier 2:
    :ref:`Mind Reading <Mind Reading>`

Tier 3:
    :ref:`Psychic Burst <Psychic Burst>` or :ref:`Psychic Suggestion <Psychic Suggestion>`

Tier 4:
    :ref:`Use Senses of Others <Use Senses of Others>`

Tier 5:
    :ref:`Precognition <Precognition>`

Tier 6:
    :ref:`Mind Control <Mind Control>` or :ref:`Telepathic Network <Telepathic Network>`

GM Intrusions:
    Something glimpsed in the target’s mind is horrifying. A
    feedback loop allows the target to read the character’s mind.

'],['name' => 'Conducts Weird Science','description' => '
 ----------------------

Your preternatural insight and ability make you a scientist capable of
amazing feats.

Tier 1:
    :ref:`Lab Analysis <Lab Analysis>`

Tier 1:
    :ref:`Knowledge Skills <Knowledge Skills>`

Tier 2:
    :ref:`Modify Device <Modify Device>`

Tier 3:
    :ref:`Better Living Through Chemistry <Better Living Through Chemistry>` or :ref:`Incredible Health <Incredible Health>`

Tier 4:
    :ref:`Knowledge Skills <Knowledge Skills>`

Tier 4:
    :ref:`Just a Bit Mad <Just a Bit Mad>`

Tier 5:
    :ref:`Weird Science Breakthrough <Weird Science Breakthrough>`

Tier 6:
    :ref:`Incredible Feat of Science <Incredible Feat of Science>`

Tier 6:
    :ref:`Inventor <Inventor>` or :ref:`Defensive Field <Defensive Field>`

GM Intrusions:
    Creations get out of control. Side effects cannot always
    be predicted. Weird science terrifies people and can draw the media.
    When a device created or modified by weird science is depleted, it
    detonates.

'],['name' => 'Consorts With the Dead','description' => '
 ----------------------

The dead answer your questions, and their reanimated corpses serve you.

Tier 1:
    :ref:`Speaker for the Dead <Speaker for the Dead>`

Tier 2:
    :ref:`Necromancy <Necromancy>`

Tier 3:
    :ref:`Reading the Room <Reading the Room>` or :ref:`Repair Flesh <Repair Flesh>`

Tier 4:
    :ref:`Greater Necromancy <Greater Necromancy>`

Tier 5:
    :ref:`Terrifying Gaze <Terrifying Gaze>`

Tier 6:
    :ref:`True Necromancy <True Necromancy>` or :ref:`Word of Death <Word of Death>`

GM Intrusions:
    The character’s necromantic reputation precedes them. A
    corpse seeks revenge for being reanimated.

'],['name' => 'Controls Beasts','description' => '
 ---------------

Your ability to communicate and lead beasts is uncanny.

Tier 1:
    :ref:`Beast Companion <Beast Companion>`

Tier 2:
    :ref:`Soothe the Savage <Soothe the Savage>`

Tier 2:
    :ref:`Communication <Communication>`

Tier 3:
    :ref:`Mount <Mount>` or :ref:`Stronger Together <Stronger Together>`

Tier 4:
    :ref:`Beast Eyes <Beast Eyes>`

Tier 4:
    :ref:`Improved Companion <Improved Companion>`

Tier 5:
    :ref:`Beast Call <Beast Call>`

Tier 6:
    :ref:`As If One Creature <As If One Creature>` or :ref:`Control the Savage <Control the Savage>`

GM Intrusions:
    The community is reluctant to welcome dangerous animals.
    Out-of-control beasts become a real hazard.

'],['name' => 'Controls Gravity','description' => '
 ----------------

You can sway the attraction of gravity itself.

Type Swap Option: Weighty

Tier 1:
    :ref:`Hover <Hover>`

Tier 2:
    :ref:`Enhanced Speed Edge <Enhanced Speed Edge>`

Tier 3:
    :ref:`Define Down <Define Down>` or :ref:`Gravity Cleave <Gravity Cleave>`

Tier 4:
    :ref:`Field of Gravity <Field of Gravity>`

Tier 5:
    :ref:`Flight <Flight>`

Tier 6:
    :ref:`Improved Gravity Cleave <Improved Gravity Cleave>` or :ref:`Weight of the World <Weight of the World>`

GM Intrusions:
    Onlookers react with unreasoning fear. A weird
    interaction sends an ally or object careening into the sky.

'],['name' => 'Crafts Illusions','description' => '
 ----------------

You fashion images from light that are so perfect they seem real.

Tier 1:
    :ref:`Minor Illusion <Minor Illusion>`

Tier 2:
    :ref:`Illusory Disguise <Illusory Disguise>`

Tier 3:
    :ref:`Cast Illusion <Cast Illusion>` or :ref:`Major Illusion <Major Illusion>`

Tier 4:
    :ref:`Illusory Selves <Illusory Selves>`

Tier 5:
    :ref:`Terrifying Image <Terrifying Image>`

Tier 6:
    :ref:`Grandiose Illusion <Grandiose Illusion>` or :ref:`Permanent Illusion <Permanent Illusion>`

GM Intrusions:
    The illusion isn’t believable. The illusion is pierced at
    just the wrong moment.

'],['name' => 'Crafts Unique Objects','description' => '
 ---------------------

You’re an inventor of strange and useful objects.

Tier 1:
    :ref:`Crafter <Crafter>`

Tier 1:
    :ref:`Master Identifier <Master Identifier>`

Tier 2:
    :ref:`Artifact Tinkerer <Artifact Tinkerer>`

Tier 2:
    :ref:`Quick Work <Quick Work>`

Tier 3:
    :ref:`Master Crafter <Master Crafter>` or :ref:`Built-In Weaponry <Built-In Weaponry>`

Tier 4:
    :ref:`Cyphersmith <Cyphersmith>`

Tier 5:
    :ref:`Innovator <Innovator>`

Tier 6:
    :ref:`Inventor <Inventor>` or :ref:`Fusion Armor <Fusion Armor>`

GM Intrusions:
    The object malfunctions, breaks, or suffers catastrophic
    or unexpected failure.

(Cyphersmith works only in a setting where the cyphers are physical
objects. If this isn’t the case, this ability should probably be
replaced with something akin to :ref:`Weird Science Breakthrough <Weird Science Breakthrough>` from the
:ref:`Conducts Weird Science <focus:Conducts Weird Science>` focus.)

'],['name' => 'Dances With Dark Matter','description' => '
 -----------------------

You can manipulate shadow and “dark” matter.

Tier 1:
    :ref:`Ribbons of Dark Matter <Ribbons of Dark Matter>`

Tier 2:
    :ref:`Void Wings <Void Wings>`

Tier 3:
    :ref:`Dark Matter Shroud <Dark Matter Shroud>` or :ref:`Dark Matter Strike <Dark Matter Strike>`

Tier 4:
    :ref:`Dark Matter Shell <Dark Matter Shell>`

Tier 5:
    :ref:`Windwracked Traveler <Windwracked Traveler>`

Tier 6:
    :ref:`Dark Matter Structure <Dark Matter Structure>` or :ref:`Embrace the Night <Embrace the Night>`

GM Intrusions:
    Dark matter skulks away as if possessed by a mind of its
    own.

'],['name' => 'Defends the Gate','description' => '
 ----------------

Everyone wants you on their side when it comes to a fight because
nothing gets by you.

Tier 1:
    :ref:`Fortified Position <Fortified Position>`

Tier 1:
    :ref:`Rally to Me <Rally to Me>`

Tier 2:
    :ref:`Mind for Might <Mind for Might>`

Tier 3:
    :ref:`Fortification Builder <Fortification Builder>` or :ref:`Divert Attacks <Divert Attacks>`

Tier 4:
    :ref:`Greater Enhanced Might <Greater Enhanced Might>`

Tier 5:
    :ref:`Reinforcing Field <Reinforcing Field>`

Tier 6:
    :ref:`Generate Force Field <Generate Force Field>` or :ref:`Stun Attack <Stun Attack>`

GM Intrusions:
    A strategically important structure collapses. The enemy
    attacks from an unexpected direction.

'],['name' => 'Defends the Weak','description' => '
 ----------------

You stand up for the helpless, the weak, and the unprotected.

Tier 1:
    :ref:`Courageous <Courageous>`

Tier 1:
    :ref:`Warding Shield <Warding Shield>`

Tier 2:
    :ref:`Devoted Defender <Devoted Defender>`

Tier 2:
    :ref:`Insight <Insight>`

Tier 3:
    :ref:`Dual Wards <Dual Wards>` or :ref:`True Guardian <True Guardian>`

Tier 4:
    :ref:`Combat Challenge <Combat Challenge>`

Tier 5:
    :ref:`Willing Sacrifice <Willing Sacrifice>`

Tier 6:
    :ref:`Resuscitate <Resuscitate>` or :ref:`True Defender <True Defender>`

GM Intrusions:
    A character focused on protecting others may periodically
    leave themselves vulnerable to attacks.

'],['name' => 'Descends From Nobility','description' => '
 ----------------------

A descendent of wealth and power, you carry a noble title and the
abilities granted by a privileged upbringing.

Type Swap Option: Retinue

Tier 1:
    :ref:`Privileged Nobility <Privileged Nobility>`

Tier 2:
    :ref:`Trained Interlocutor <Trained Interlocutor>`

Tier 3:
    :ref:`Advanced Command <Advanced Command>` or :ref:`Noble’s Courage <Noble’s Courage>`

Tier 4:
    :ref:`Expert Follower <Expert Follower>`

Tier 5:
    :ref:`Asserting Your Privilege <Asserting Your Privilege>`

Tier 6:
    :ref:`Able Assistance <Able Assistance>` or :ref:`Mind of a Leader <Mind of a Leader>`

GM Intrusions:
    Debts incurred by a family are owed by the character. A
    long-lost sibling seeks to disinherit rivals. An assassin finds the
    character.

'],['name' => 'Doesn’t Do Much','description' => '
 ---------------

You’re a slacker, but you know a little about a lot of things.

Tier 1:
    :ref:`Life Lessons <Life Lessons>`

Tier 2:
    :ref:`Totally Chill <Totally Chill>`

Tier 3:
    :ref:`Skill With Attacks <Skill With Attacks>` or :ref:`Improvise <Improvise>`

Tier 4:
    :ref:`Life Lessons <Life Lessons>`

Tier 4:
    :ref:`Greater Skill With Defense <Greater Skill With Defense>`

Tier 5:
    :ref:`Greater Enhanced Potential <Greater Enhanced Potential>`

Tier 6 Drawing on Life’s Experiences or Quick Wits

GM Intrusions:
    New situations are confounding and stressful. Past
    actions (or inactions) come back to haunt the character.

'],['name' => 'Drives Like a Maniac','description' => '
 --------------------

Whether balancing on two wheels, jumping another vehicle, or driving
head-on toward an oncoming enemy car, you don’t think about the risks
when you’re behind the wheel.

(Someone who Drives Like a Maniac needs access to a vehicle.)

Tier 1:
    :ref:`Driver <Driver>`

Tier 1:
    :ref:`Driving on the Edge <Driving on the Edge>`

Tier 2:
    :ref:`Car Surfer <Car Surfer>`

Tier 2:
    :ref:`Stare Them Down <Stare Them Down>`

Tier 3:
    :ref:`Expert Driver <Expert Driver>` or :ref:`Enhanced Speed Edge <Enhanced Speed Edge>`

Tier 4:
    :ref:`Sharp-Eyed <Sharp-Eyed>`

Tier 4:
    :ref:`Enhanced Speed <Enhanced Speed>`

Tier 5:
    :ref:`Something in the Road <Something in the Road>`

Tier 6:
    :ref:`Trick Driver <Trick Driver>` or :ref:`Lethal Damage <Lethal Damage>`

GM Intrusions:
    The engine develops a knock. The bridge on the road ahead
    is out. The windshield shatters. Someone unexpectedly runs in front of
    the vehicle.

'],['name' => 'Emerged From the Obelisk','description' => '
 ------------------------

Your body, hard as crystal, gives you a suite of unique abilities,
gained after an interaction with a floating crystalline obelisk.

Tier 1:
    :ref:`Crystalline Body <Crystalline Body>`

Tier 2:
    :ref:`Hover <Hover>`

Tier 3:
    :ref:`Inhabit Crystal <Inhabit Crystal>` or :ref:`Immovable <Immovable>`

Tier 4:
    :ref:`Crystal Lens <Crystal Lens>`

Tier 5:
    :ref:`Resonant Frequency <Resonant Frequency>`

Tier 6:
    :ref:`Resonant Quake <Resonant Quake>` or :ref:`Return to the Obelisk <Return to the Obelisk>`

GM Intrusions:
    Cyphers and artifacts react unexpectedly in the
    character’s hands.

'],['name' => 'Employs Magnetism','description' => '
 -----------------

You command metal and the power of magnetism.

Tier 1:
    :ref:`Move Metal <Move Metal>`

Tier 2:
    :ref:`Repel Metal <Repel Metal>`

Tier 3:
    :ref:`Destroy Metal <Destroy Metal>` or :ref:`Guide Bolt <Guide Bolt>`

Tier 4:
    :ref:`Magnetic Field <Magnetic Field>`

Tier 5:
    :ref:`Command Metal <Command Metal>`

Tier 6:
    :ref:`Diamagnetism <Diamagnetism>` or :ref:`Iron Punch <Iron Punch>`

GM Intrusions:
    The metal twists, bends, or produces shrapnel. A lapse in
    concentration might cause something to slip or drop at just the wrong
    time.

'],['name' => 'Entertains','description' => '
 ----------

You perform, mostly for the benefit of others.

Tier 1:
    :ref:`Levity <Levity>`

Tier 2:
    :ref:`Inspiration <Inspiration>`

Tier 3:
    :ref:`Knowledge Skills <Knowledge Skills>` or :ref:`Greater Enhanced Potential <Greater Enhanced Potential>`

Tier 4:
    :ref:`Calm <Calm>`

Tier 5:
    :ref:`Able Assistance <Able Assistance>`

Tier 6:
    :ref:`Master Entertainer <Master Entertainer>` or :ref:`Vindictive Performance <Vindictive Performance>`

GM Intrusions:
    The audience is annoyed or offended. Musical instruments
    break. Paints dry in their pots. The words to a poem or song are
    forgotten.

'],['name' => 'Exists in Two Places at Once','description' => '
 ----------------------------

You exist in two places at once.

Tier 1:
    :ref:`Duplicate <Duplicate>`

Tier 2:
    :ref:`Share Senses <Share Senses>`

Tier 3:
    :ref:`Superior Duplicate <Superior Duplicate>` or :ref:`Resilient Duplicate <Resilient Duplicate>`

Tier 4:
    :ref:`Damage Transference <Damage Transference>`

Tier 5:
    :ref:`Coordinated Effort <Coordinated Effort>`

Tier 6:
    :ref:`Multiplicity <Multiplicity>` or :ref:`Resilient Duplicate <Resilient Duplicate>`

GM Intrusions:
    Perceiving the world from two different places disorients
    the character, causing momentary vertigo, nausea, or confusion.

'],['name' => 'Exists Partially Out of Phase','description' => '
 -----------------------------

A bit translucent, you’re slightly out of phase and can move through
solid objects.

Tier 1:
    :ref:`Walk Through Walls <Walk Through Walls>`

Tier 2:
    :ref:`Defensive Phasing <Defensive Phasing>`

Tier 3:
    :ref:`Phased Attack <Phased Attack>` or :ref:`Phase Door <Phase Door>`

Tier 4:
    :ref:`Ghost <Ghost>`

Tier 5:
    :ref:`Untouchable <Untouchable>`

Tier 6:
    :ref:`Enhanced Phased Attack <Enhanced Phased Attack>` or :ref:`Phase Foe <Phase Foe>`

GM Intrusions:
    The character is sent phasing into an unexpected
    dimension. The character becomes lost in a large solid.

'],['name' => 'Explores Dark Places','description' => '
 --------------------

You’re the archetypal treasure hunter, scavenger, and finder of lost
things.

Tier 1:
    :ref:`Superb Explorer <Superb Explorer>`

Tier 2:
    :ref:`Superb Infiltrator <Superb Infiltrator>`

Tier 2:
    :ref:`Eyes Adjusted <Eyes Adjusted>`

Tier 3:
    :ref:`Nightstrike <Nightstrike>` or :ref:`Slippery Customer <Slippery Customer>`

Tier 4:
    :ref:`Hard-Won Resilience <Hard-Won Resilience>`

Tier 5:
    :ref:`Dark Explorer <Dark Explorer>`

Tier 6:
    :ref:`Blinding Attack <Blinding Attack>` or :ref:`Embraced by Darkness <Embraced by Darkness>`

GM Intrusions:
    Possessions fall out of pockets or bags in the dark; maps
    get lost; information gained fails to include an important detail.

'],['name' => 'Fights Dirty','description' => '
 ------------

You’ll do anything to win a fight: bite, scratch, kick, trick, and
worse.

Tier 1:
    :ref:`Tracker <Tracker>`

Tier 1:
    :ref:`Stalker <Stalker>`

Tier 2:
    :ref:`Sneak <Sneak>`

Tier 2:
    :ref:`Quarry <Quarry>`

Tier 3:
    :ref:`Betrayal <Betrayal>` or :ref:`Surprise Attack <Surprise Attack>`

Tier 4:
    :ref:`Mind Games <Mind Games>`

Tier 4:
    :ref:`Capable Warrior <Capable Warrior>`

Tier 5:
    :ref:`Using the Environment <Using the Environment>`

Tier 6:
    :ref:`Twisting the Knife <Twisting the Knife>` or :ref:`Murderer <Murderer>`

GM Intrusions:
    People look poorly upon those who cheat or fight without
    honor. Sometimes a dirty trick backfires.

'],['name' => 'Fights With Panache','description' => '
 -------------------

You’re a swashbuckling daredevil who fights with flamboyant style that’s
entertaining to watch.

Tier 1:
    :ref:`Attack Flourish <Attack Flourish>`

Tier 2:
    :ref:`Quick Block <Quick Block>`

Tier 3:
    :ref:`Acrobatic Attack <Acrobatic Attack>` or :ref:`Flamboyant Boast <Flamboyant Boast>`

Tier 4:
    :ref:`Block for Another <Block for Another>`

Tier 4:
    :ref:`Fast Kill <Fast Kill>`

Tier 5:
    :ref:`Using the Environment <Using the Environment>`

Tier 6:
    :ref:`Agile Wit <Agile Wit>` or :ref:`Return to Sender <Return to Sender>`

GM Intrusions:
    The display comes off looking silly, clumsy, or
    unattractive.

'],['name' => 'Flies Faster Than a Bullet','description' => '
 --------------------------

You can fly, and you’re superstrong, hard to hurt, and fast too. Is
there anything you can’t do?

Tier 1:
    :ref:`Hover <Hover>`

Tier 2:
    :ref:`Greater Enhanced Potential <Greater Enhanced Potential>`

Tier 3:
    :ref:`Hidden Reserves <Hidden Reserves>` or :ref:`See Through Matter <See Through Matter>`

Tier 4:
    :ref:`Blink of an Eye <Blink of an Eye>`

Tier 4:
    :ref:`Up to Speed <Up to Speed>`

Tier 5:
    :ref:`Not Dead Yet <Not Dead Yet>`

Tier 6:
    :ref:`Burning Light <Burning Light>` or :ref:`Ignore Affliction <Ignore Affliction>`

GM Intrusions:
    A nemesis finds the character. A strange material is
    found to nullify the character’s abilities.

'],['name' => 'Focuses Mind Over Matter','description' => '
 ------------------------

You can telekinetically move objects with your mind without physically
touching them.

Tier 1:
    :ref:`Divert Attacks <Divert Attacks>`

Tier 2:
    :ref:`Telekinesis <Telekinesis>`

Tier 3:
    :ref:`Cloak of Opportunity <Cloak of Opportunity>` or :ref:`Enhance Strength <Enhance Strength>`

Tier 4:
    :ref:`Apportation <Apportation>`

Tier 5:
    :ref:`Psychokinetic Attack <Psychokinetic Attack>`

Tier 6:
    :ref:`Improved Apportation <Improved Apportation>` or :ref:`Reshape <Reshape>`

GM Intrusions:
    One mental slip, and moving objects drop or fragile
    objects break. Sometimes the wrong item moves, falls, or breaks.

'],['name' => 'Fuses Flesh and Steel','description' => '
 ---------------------

Your body is part machine.

Tier 1:
    :ref:`Enhanced Body <Enhanced Body>`

Tier 2:
    :ref:`Interface <Interface>`

Tier 3:
    :ref:`Sensing Package <Sensing Package>` or :ref:`Weaponization <Weaponization>`

Tier 4:
    :ref:`Fusion <Fusion>`

Tier 5:
    :ref:`Deep Reserves <Deep Reserves>`

Tier 6:
    :ref:`Mind Surge <Mind Surge>` or :ref:`Ultra Enhancement <Ultra Enhancement>`

GM Intrusions:
    People in most societies are afraid of someone who is
    revealed to have mechanical parts.

'],['name' => 'Fuses Mind and Machine','description' => '
 ----------------------

Electronic aids implanted in your brain make you a mental powerhouse.

Tier 1:
    :ref:`Enhanced Intellect <Enhanced Intellect>`

Tier 1:
    :ref:`Knowledge Skills <Knowledge Skills>`

Tier 2:
    :ref:`Network Tap <Network Tap>`

Tier 3:
    :ref:`Action Processor <Action Processor>` or :ref:`Machine Telepathy <Machine Telepathy>`

Tier 4:
    :ref:`Greater Enhanced Intellect <Greater Enhanced Intellect>`

Tier 4:
    :ref:`Knowledge Skills <Knowledge Skills>`

Tier 5:
    :ref:`See the Future <See the Future>`

Tier 6:
    :ref:`Machine Enhancement <Machine Enhancement>` or :ref:`Mind Surge <Mind Surge>`

GM Intrusions:
    Machines malfunction and shut down. Powerful machine
    intelligences can take control of lesser thinking machines. Some people
    don’t trust a person who isn’t fully organic.

'],['name' => 'Grows to Towering Heights','description' => '
 -------------------------

For brief periods, you can grow larger and, with enough experience, to
towering heights.

Tier 1:
    :ref:`Enlarge <Enlarge>`

Tier 1:
    :ref:`Freakishly Large <Freakishly Large>`

Tier 2:
    :ref:`Bigger <Bigger>`

Tier 2:
    :ref:`Advantages of Being Big <Advantages of Being Big>`

Tier 3:
    :ref:`Huge <Huge>` or :ref:`Throw <Throw>`

Tier 4:
    :ref:`Grab <Grab>`

Tier 5:
    :ref:`Gargantuan <Gargantuan>`

Tier 6:
    :ref:`Colossal <Colossal>` or :ref:`Lethal Damage <Lethal Damage>`

GM Intrusions:
    Rapid growth knocks over furnishings or smashes through
    ceilings or hanging lights. An enlarged character breaks through the
    floor.

'],['name' => 'Helps Their Friends','description' => '
 -------------------

You love your friends and help them out of any difficulty, no matter
what.

Type Swap Option: Advice From a Friend

Tier 1:
    :ref:`Friendly Help <Friendly Help>`

Tier 1:
    :ref:`Courageous <Courageous>`

Tier 2:
    :ref:`Weather the Vicissitudes <Weather the Vicissitudes>`

Tier 3:
    :ref:`Buddy System <Buddy System>` or :ref:`Skill With Attacks <Skill With Attacks>`

Tier 4:
    :ref:`In Harm’s Way <In Harm’s Way>`

Tier 4:
    :ref:`Enhanced Physique <Enhanced Physique>`

Tier 5:
    :ref:`Inspire Action <Inspire Action>`

Tier 6:
    :ref:`Deep Consideration <Deep Consideration>` or :ref:`Skill With Defense <Skill With Defense>`

GM Intrusions:
    Others sometimes have ulterior motives. The law takes an
    undue interest. Even when everything goes right, repercussions follow.

'],['name' => 'Howls at the Moon','description' => '
 -----------------

For brief periods, you become a fearsome and powerful creature with
control issues.

Tier 1:
    :ref:`Beast Form <Beast Form>`

Tier 2:
    :ref:`Controlled Change <Controlled Change>`

Tier 3:
    :ref:`Bigger Beast Form <Bigger Beast Form>` or :ref:`Greater Beast Form <Greater Beast Form>`

Tier 4:
    :ref:`Greater Controlled Change <Greater Controlled Change>`

Tier 5:
    :ref:`Enhanced Beast Form <Enhanced Beast Form>`

Tier 6:
    :ref:`Lethal Damage <Lethal Damage>` or :ref:`Perfect Control <Perfect Control>`

GM Intrusions:
    The change happens in an uncontrolled fashion. People are
    terrified of monsters.

'],['name' => 'Hunts','description' => '
 -----

You are a stalking hunter who excels at bringing down your selected
quarry.

Tier 1:
    :ref:`Attack Flourish <Attack Flourish>`

Tier 1:
    :ref:`Tracker <Tracker>`

Tier 2:
    :ref:`Quarry <Quarry>`

Tier 2:
    :ref:`Sneak <Sneak>`

Tier 3:
    :ref:`Horde Fighting <Horde Fighting>` or :ref:`Sprint and Grab <Sprint and Grab>`

Tier 4:
    :ref:`Surprise Attack <Surprise Attack>`

Tier 5:
    :ref:`Hunter’s Drive <Hunter’s Drive>`

Tier 6:
    :ref:`Greater Skill With Attacks <Greater Skill With Attacks>` or :ref:`Multiple Quarry <Multiple Quarry>`

GM Intrusions:
    The quarry notices the character. The quarry isn’t as
    vulnerable as it seemed.

'],['name' => 'Infiltrates','description' => '
 -----------

Subtlety, guile, and stealth allow you to get in where others can’t.

Tier 1:
    :ref:`Stealth Skills <Stealth Skills>`

Tier 1:
    :ref:`Sense Attitudes <Sense Attitudes>`

Tier 2:
    :ref:`Impersonate <Impersonate>`

Tier 2:
    :ref:`Flight Not Fight <Flight Not Fight>`

Tier 3:
    :ref:`Awareness <Awareness>` or :ref:`Skill With Attacks <Skill With Attacks>`

Tier 4:
    :ref:`Invisibility <Invisibility>`

Tier 5:
    :ref:`Evasion <Evasion>`

Tier 6:
    :ref:`Brainwashing <Brainwashing>` or :ref:`Spring Away <Spring Away>`

GM Intrusions:
    Spies are treated harshly when caught. Allies disavow
    infiltrators who get caught. Some secrets are better left unknown.

'],['name' => 'Interprets the Law','description' => '
 ------------------

You excel at winning others over to your views.

Tier 1:
    :ref:`Opening Statement <Opening Statement>`

Tier 1:
    :ref:`Knowledge of the Law <Knowledge of the Law>`

Tier 2:
    :ref:`Debate <Debate>`

Tier 3:
    :ref:`Able Assistance <Able Assistance>` or :ref:`Enhanced Intellect Edge <Enhanced Intellect Edge>`

Tier 4:
    :ref:`Castigate <Castigate>`

Tier 5:
    :ref:`No One Knows Better <No One Knows Better>`

Tier 6:
    :ref:`Greater Enhanced Potential <Greater Enhanced Potential>` or :ref:`Legal Intern <Legal Intern>`

GM Intrusions:
    Onlookers react badly to a know-it-all. A distraction or
    interruption throws the character’s argument off the rails.

'],['name' => 'Is Idolized by Millions','description' => '
 -----------------------

You’re a celebrity and most people adore you.

Tier 1:
    :ref:`Entourage <Entourage>`

Tier 1:
    :ref:`Celebrity Talent <Celebrity Talent>`

Tier 2:
    :ref:`Perks of Stardom <Perks of Stardom>`

Tier 3:
    :ref:`Incredible Health <Incredible Health>` or :ref:`Skill With Attacks <Skill With Attacks>`

Tier 4:
    :ref:`Captivate With Starshine <Captivate With Starshine>`

Tier 4:
    :ref:`Expert Follower <Expert Follower>`

Tier 5:
    :ref:`Do You Know Who I Am? <Do You Know Who I Am?>`

Tier 6:
    :ref:`Transcend the Script <Transcend the Script>` or :ref:`Improved Companion <Improved Companion>`

GM Intrusions:
    Fans are endangered or hurt on your behalf. Someone in
    your entourage betrays you. Your show, tour, contract, or other event is
    canceled. The media posts photos of you in an embarrassing situation.

'],['name' => 'Is Licensed to Carry', 'description' => '
 --------------------

You carry a gun and you know how to use it in a fight.

(Although Is Licensed to Carry is designed with modern firearms in mind,
it could apply to flintlock weapons, futuristic laser blasters, or other
ranged weapons.)

Tier 1:
    :ref:`Gunner <Gunner>`

Tier 1:
    :ref:`Practiced With Guns <Practiced With Guns>`

Tier 2:
    :ref:`Careful Shot <Careful Shot>`

Tier 3:
    :ref:`Trained Gunner <Trained Gunner>` or :ref:`Damage Dealer <Damage Dealer>`

Tier 4:
    :ref:`Snap Shot <Snap Shot>`

Tier 5:
    :ref:`Arc Spray <Arc Spray>`

Tier 6:
    :ref:`Special Shot <Special Shot>` or :ref:`Lethal Damage <Lethal Damage>`

GM Intrusions:
    Misfire or jam! The attack fails and the action is lost,
    plus an additional action is needed to fix the problem.

'],['name' => 'Is Wanted by the Law', 'description' => '
 --------------------

“WANTED, DEAD OR ALIVE” posters (or their equivalent) have appeared
featuring your face. It’s up to you whether it’s a mistake that
snowballed out of control or you actually would kill someone just for
looking at you.

Tier 1:
    :ref:`Enhanced Speed <Enhanced Speed>`

Tier 1:
    :ref:`Danger Sense <Danger Sense>`

Tier 2:
    :ref:`Surprise Attack <Surprise Attack>`

Tier 3:
    :ref:`Outlaw Reputation <Outlaw Reputation>` or :ref:`Successive Attack <Successive Attack>`

Tier 4:
    :ref:`Fast Kill <Fast Kill>`

Tier 5:
    :ref:`Band of Desperados <Band of Desperados>`

Tier 6:
    :ref:`Not Dead Yet <Not Dead Yet>` or :ref:`Lethal Damage <Lethal Damage>`

GM Intrusions:
    Most people do not take well to discovering a wanted
    outlaw in their midst.

'],['name' => 'Keeps a Magic Ally','description' => '
 ------------------

An allied magic creature bound to an object (such as a minor djinn in a
lamp, or a ghost in a pipe) is your friend, protector, and weapon.

Tier 1:
    :ref:`Bound Magic Creature <Bound Magic Creature>`

Tier 2:
    :ref:`Object Bond <Object Bond>`

Tier 2:
    :ref:`Hidden Closet <Hidden Closet>`

Tier 3:
    :ref:`Minor Wish <Minor Wish>` or :ref:`Mount <Mount>`

Tier 4:
    :ref:`Improved Object Bond <Improved Object Bond>`

Tier 5:
    :ref:`Moderate Wish <Moderate Wish>`

Tier 6:
    :ref:`Object Bond Mastery <Object Bond Mastery>` or :ref:`Trust to Luck <Trust to Luck>`

GM Intrusions:
    The creature unexpectedly disappears into its bound
    object. The bound object cracks. The creature disagrees and doesn’t do
    as asked. The creature says it’s leaving unless a task is performed for
    it.

'],['name' => 'Leads' ,'description'=> '
 -----

Your natural leadership capability allows you to command others,
including a loyal band of followers.

Tier 1:
    :ref:`Natural Charisma <Natural Charisma>`

Tier 1:
    :ref:`Good Advice <Good Advice>`

Tier 2:
    :ref:`Enhanced Potential <Enhanced Potential>`

Tier 2:
    :ref:`Basic Follower <Basic Follower>`

Tier 3:
    :ref:`Advanced Command <Advanced Command>` or :ref:`Expert Follower <Expert Follower>`

Tier 4:
    :ref:`Captivate or Inspire <Captivate or Inspire>`

Tier 5:
    :ref:`Greater Enhanced Potential <Greater Enhanced Potential>`

Tier 6:
    :ref:`Band of Followers <Band of Followers>` or :ref:`Mind of a Leader <Mind of a Leader>`

GM Intrusions:
    Followers fail, betray, lie, become corrupted, get
    kidnapped, or die.

'],['name' => 'Learns Quickly' ,'description'=> '
 --------------

You deal with bad situations as they arise, learning new lessons each
time.

Tier 1:
    :ref:`Enhanced Intellect <Enhanced Intellect>`

Tier 1:
    :ref:`There’s Your Problem <There’s Your Problem>`

Tier 2:
    :ref:`Quick Study <Quick Study>`

Tier 3:
    :ref:`Hard to Distract <Hard to Distract>`

Tier 3:
    :ref:`Enhanced Intellect Edge <Enhanced Intellect Edge>` or :ref:`Flex Skill <Flex Skill>`

Tier 4:
    :ref:`Pay It Forward <Pay It Forward>`

Tier 5:
    :ref:`Enhanced Intellect <Enhanced Intellect>`

Tier 5:
    :ref:`Learned a Few Things <Learned a Few Things>`

Tier 6:
    :ref:`Two Things at Once <Two Things at Once>` or :ref:`Skill With Defense <Skill With Defense>`

GM Intrusions:
    Accidents and mistakes are great teachers.

'],['name' => 'Lives in the Wilderness' ,'description'=> '
 -----------------------

You can survive in badlands where others perish.

Tier 1:
    :ref:`Wilderness Life <Wilderness Life>`

Tier 1:
    :ref:`Enhanced Might <Enhanced Might>`

Tier 2:
    :ref:`Living Off the Land <Living Off the Land>`

Tier 2:
    :ref:`Wilderness Explorer <Wilderness Explorer>`

Tier 3:
    :ref:`Animal Senses and Sensibilities <Animal Senses and Sensibilities>` or :ref:`Wilderness Encouragement <Wilderness Encouragement>`

Tier 4:
    :ref:`Wilderness Awareness <Wilderness Awareness>`

Tier 5:
    :ref:`The Wild Is on Your Side <The Wild Is on Your Side>`

Tier 6:
    :ref:`One With the Wild <One With the Wild>` or :ref:`Wild Camouflage <Wild Camouflage>`

GM Intrusions:
    People in cities and towns sometimes disparage those who
    look (and smell) like they live in the wilds, as if they were ignorant
    or barbaric.

'],['name' => 'Looks for Trouble' ,'description'=> '
 -----------------

You’re a scrapper and love a good fight.

Tier 1:
    :ref:`Fists of Fury <Fists of Fury>`

Tier 1:
    :ref:`Wound Tender <Wound Tender>`

Tier 2:
    :ref:`Protector <Protector>`

Tier 2:
    :ref:`Straightforward <Straightforward>`

Tier 3:
    :ref:`Skill With Attacks <Skill With Attacks>` or :ref:`Greater Enhanced Potential <Greater Enhanced Potential>`

Tier 4:
    :ref:`Knock Out <Knock Out>`

Tier 5:
    :ref:`Mastery With Attacks <Mastery With Attacks>`

Tier 6:
    :ref:`Greater Enhanced Might <Greater Enhanced Might>` or :ref:`Lethal Damage <Lethal Damage>`

GM Intrusions:
    Weapons break or fly from even the strongest grip.
    Brawlers trip and fall. Even the battlefield can work against you with
    things falling or collapsing.

'],['name' => 'Loves the Void' ,'description'=> '
 --------------

When it’s just you, your spacesuit, and the panorama of stars wheeling
out forever and always, you are at peace.

Type Swap Option: Have Spacesuit, Will Travel

Tier 1:
    :ref:`Vacuum Skilled <Vacuum Skilled>`

Tier 1:
    :ref:`Microgravity Adept <Microgravity Adept>`

Tier 2:
    :ref:`Enhanced Speed Edge <Enhanced Speed Edge>`

Tier 2:
    :ref:`Enhanced Physique <Enhanced Physique>`

Tier 3:
    :ref:`Space Fighting <Space Fighting>` or :ref:`Fusion Armor <Fusion Armor>`

Tier 4:
    :ref:`Silent as Space <Silent as Space>`

Tier 4:
    :ref:`Push Off and Throw <Push Off and Throw>`

Tier 5:
    :ref:`Microgravity Avoidance <Microgravity Avoidance>`

Tier 6:
    :ref:`Weightless Shot <Weightless Shot>` or :ref:`Reactive Field <Reactive Field>`

GM Intrusions:
    Spacesuits develop glitches. Air refill cartridges
    sometimes misreport capacity. Micrometeorites are common in space.

'],['name' => 'Masters Defense' ,'description'=> '
 ---------------

You use protective equipment and practiced techniques to avoid becoming
hurt in a fight.

Tier 1:
    :ref:`Shield Master <Shield Master>`

Tier 2:
    :ref:`Sturdy <Sturdy>`

Tier 2:
    :ref:`Practiced in Armor <Practiced in Armor>`

Tier 3:
    :ref:`Dodge and Resist <Dodge and Resist>` or :ref:`Dodge and Respond <Dodge and Respond>`

Tier 4:
    :ref:`Tower of Will <Tower of Will>`

Tier 4:
    :ref:`Experienced in Armor <Experienced in Armor>`

Tier 5:
    :ref:`Nothing but Defend <Nothing but Defend>`

Tier 6:
    :ref:`Defense Master <Defense Master>` or :ref:`Wear It Well <Wear It Well>`

GM Intrusions:
    Shields break when hit, as do weapons used to parry.
    Armor straps break.

'],['name' => 'Masters Spells' ,'description'=> '
 --------------

By specializing in spellcasting and keeping a spellbook, you can quickly
cast spells of arcing lightning, rolling fire, creeping shadow, and
summoning.

Tier 1:
    :ref:`Arcane Flare <Arcane Flare>`

Tier 2:
    :ref:`Ray of Confusion <Ray of Confusion>`

Tier 3:
    :ref:`Fire Bloom <Fire Bloom>` or :ref:`Summon Giant Spider <Summon Giant Spider>`

Tier 4:
    :ref:`Soul Interrogation <Soul Interrogation>`

Tier 5:
    :ref:`Granite Wall <Granite Wall>`

Tier 6:
    :ref:`Summon Demon <Summon Demon>` or :ref:`Word of Death <Word of Death>`

GM Intrusions:
    The spell goes wrong. The summoned creature turns on the
    caster. A rival spellcaster is drawn to the magic use.

'],['name' => 'Masters the Swarm' ,'description'=> '
 -----------------

Insects. Rats. Bats. Even birds. You master one type of small creature
that obeys you.

Tier 1:
    :ref:`Influence Swarm <Influence Swarm>`

Tier 2:
    :ref:`Control Swarm <Control Swarm>`

Tier 3:
    :ref:`Living Armor <Living Armor>` or :ref:`Skill With Attacks <Skill With Attacks>`

Tier 4:
    :ref:`Call Swarm <Call Swarm>`

Tier 5:
    :ref:`Gain Unusual Companion <Gain Unusual Companion>`

Tier 6:
    :ref:`Deadly Swarm <Deadly Swarm>` or :ref:`Skill With Defense <Skill With Defense>`

GM Intrusions:
    A command is misunderstood. Control is erratic or is
    lost. Bites and stings are not uncommon for masters of the swarm.

'],['name' => 'Masters Weaponry' ,'description'=> '
 ----------------

You are a master user of a particular type of weapon, be it a sword,
whip, dagger, gun, or something else.

(Someone who Masters Weaponry might have additional equipment, including
a high- quality weapon.)

Tier 1:
    :ref:`Weapon Master <Weapon Master>`

Tier 1:
    :ref:`Weapon Crafter <Weapon Crafter>`

Tier 2:
    :ref:`Weapon Defense <Weapon Defense>`

Tier 3:
    :ref:`Rapid Attack <Rapid Attack>` or :ref:`Disarming Strike <Disarming Strike>`

Tier 4:
    :ref:`Never Fumble <Never Fumble>`

Tier 5:
    :ref:`Extreme Mastery <Extreme Mastery>`

Tier 6:
    :ref:`Murderer <Murderer>` or :ref:`Deadly Strike <Deadly Strike>`

GM Intrusions:
    Weapons break. Weapons can be stolen. Weapons can be
    dropped or forced out of your hand.

'],['name' => 'Metes Out Justice' ,'description'=> '
 -----------------

You right wrongs, protect the innocent, and punish the guilty.

Tier 1:
    :ref:`Make Judgment <Make Judgment>`

Tier 1:
    :ref:`Designation <Designation>`

Tier 2:
    :ref:`Defend the Innocent <Defend the Innocent>`

Tier 2:
    :ref:`Improved Designation <Improved Designation>`

Tier 3:
    :ref:`Defend All the Innocent <Defend All the Innocent>` or :ref:`Punish the Guilty <Punish the Guilty>`

Tier 4:
    :ref:`Find the Guilty <Find the Guilty>`

Tier 4:
    :ref:`Greater Designation <Greater Designation>`

Tier 5:
    :ref:`Punish All the Guilty <Punish All the Guilty>`

Tier 6:
    :ref:`Damn the Guilty <Damn the Guilty>` or :ref:`Inspire the Innocent <Inspire the Innocent>`

GM Intrusions:
    Guilt or innocence can be complicated. Some people resent
    the presumption of a self-appointed judge. Passing judgment makes
    enemies.

'],['name' => 'Moves Like a Cat','description' => '
 ----------------

Lithe, flexible, and graceful, you move quickly and smoothly, and never
seem to be where danger is.

Tier 1:
    :ref:`Greater Enhanced Speed <Greater Enhanced Speed>`

Tier 1:
    :ref:`Balance <Balance>`

Tier 2:
    :ref:`Movement Skills <Movement Skills>`

Tier 2:
    :ref:`Safe Fall <Safe Fall>`

Tier 3:
    :ref:`Hard to Hit <Hard to Hit>`

Tier 3:
    :ref:`Enhanced Speed Edge <Enhanced Speed Edge>` or :ref:`Greater Enhanced Speed <Greater Enhanced Speed>`

Tier 4:
    :ref:`Quick Strike <Quick Strike>`

Tier 5:
    :ref:`Slippery <Slippery>`

Tier 6:
    :ref:`Perfect Speed Burst <Perfect Speed Burst>` or :ref:`Greater Enhanced Speed <Greater Enhanced Speed>`

GM Intrusions:
    Even a cat can be clumsy. A jump isn’t quite as easy as
    it looks. An escape move is so overzealous that it sends the character
    right into harm’s way.

'],['name' => 'Moves Like the Wind','description' => '
 -------------------

You can move so fast that you become a blur.

Tier 1:
    :ref:`Greater Enhanced Speed <Greater Enhanced Speed>`

Tier 1:
    :ref:`Fleet of Foot <Fleet of Foot>`

Tier 2:
    :ref:`Hard to Hit <Hard to Hit>`

Tier 3:
    :ref:`Speed Burst <Speed Burst>` or :ref:`Greater Enhanced Speed <Greater Enhanced Speed>`

Tier 4:
    :ref:`Blink of an Eye <Blink of an Eye>`

Tier 5:
    :ref:`Hard to See <Hard to See>`

Tier 6:
    :ref:`Perfect Speed Burst <Perfect Speed Burst>` or :ref:`Incredible Running Speed <Incredible Running Speed>`

GM Intrusions:
    Surfaces can be slick or offer hidden obstacles. The
    movement of other creatures can be unpredictable, and the character
    might run into them.

'],['name' => 'Murders' ,'description'=> '
 -------

You’re an assassin, whether by trade, by inclination, or because it was
that or be killed yourself. (Someone who Murders might have additional
equipment, including three doses of a level 2 blade poison that inflicts
5 points of damage.)

Tier 1:
    :ref:`Surprise Attack <Surprise Attack>`

Tier 1:
    :ref:`Assassin Skills <Assassin Skills>`

Tier 2:
    :ref:`Quick Death <Quick Death>`

Tier 2:
    :ref:`Infiltrator <Infiltrator>`

Tier 3:
    :ref:`Awareness <Awareness>` or :ref:`Poison Crafter <Poison Crafter>`

Tier 4:
    :ref:`Better Surprise Attack <Better Surprise Attack>`

Tier 5:
    :ref:`Damage Dealer <Damage Dealer>`

Tier 6:
    :ref:`Escape Plan <Escape Plan>` or :ref:`Murderer <Murderer>`

GM Intrusions:
    Most people do not react well to a professional killer.

'],['name' => 'Needs No Weapon' ,'description'=> '
 ---------------

Powerful punches, kicks, elbows, knees, and full body movements are all
the weapons you need.

Tier 1:
    :ref:`Fists of Fury <Fists of Fury>`

Tier 1:
    :ref:`Flesh of Stone <Flesh of Stone>`

Tier 2:
    :ref:`Advantage to Disadvantage <Advantage to Disadvantage>`

Tier 2:
    :ref:`Unarmed Fighting Style <Unarmed Fighting Style>`

Tier 3:
    :ref:`Moving Like Water <Moving Like Water>` or :ref:`Greater Enhanced Potential <Greater Enhanced Potential>`

Tier 4:
    :ref:`Divert Attacks <Divert Attacks>`

Tier 5:
    :ref:`Stun Attack <Stun Attack>`

Tier 6:
    :ref:`Master of Unarmed Fighting Style <Master of Unarmed Fighting Style>` or :ref:`Lethal Damage <Lethal Damage>`

GM Intrusions:
    Striking certain foes hurts you as much as it hurts them.
    Opponents with weapons have greater reach. Complicated martial arts
    moves can knock you off balance.

'],['name' => 'Never Says Die' ,'description'=> '
 --------------

You never quit, can shrug off a beating, and always come back for more.

Tier 1:
    :ref:`Improved Recovery <Improved Recovery>`

Tier 1:
    :ref:`Push on Through <Push on Through>`

Tier 2:
    :ref:`Ignore the Pain <Ignore the Pain>`

Tier 3:
    :ref:`Blood Fever <Blood Fever>` or :ref:`Hidden Reserves <Hidden Reserves>`

Tier 4:
    :ref:`Increasing Determination <Increasing Determination>` or :ref:`Outlast the Foe <Outlast the Foe>`

Tier 5:
    :ref:`Not Dead Yet <Not Dead Yet>`

Tier 6:
    :ref:`Final Defiance <Final Defiance>` or :ref:`Ignore Affliction <Ignore Affliction>`

GM Intrusions:
    Sometimes, it’s equipment or weapons that give out.

'],['name' => 'Operates Undercover' ,'description'=> '
 -------------------

Under the guise of someone else, you seek to find answers the powerful
do not want divulged.

(Someone who Operates Undercover might have additional equipment that
includes a disguise kit.)

Tier 1:
    :ref:`Investigate <Investigate>`

Tier 2:
    :ref:`Disguise <Disguise>`

Tier 3:
    :ref:`Agent Provocateur <Agent Provocateur>` or :ref:`Run and Fight <Run and Fight>`

Tier 4:
    :ref:`Pull a Fast One <Pull a Fast One>`

Tier 5:
    :ref:`Using What’s Available <Using What’s Available>`

Tier 6:
    :ref:`Trust to Luck <Trust to Luck>` or :ref:`Deadly Strike <Deadly Strike>`

GM Intrusions:
    Bad luck can ruin the best plans. Disguises fail. Allies
    are revealed to be agents, too.

'],['name' => 'Performs Feats of Strength' ,'description'=> '
 --------------------------

A muscled prodigy, you can haul incredible weight, hurl your body
through the air, and punch through doors.

Tier 1:
    :ref:`Athlete <Athlete>`

Tier 1:
    :ref:`Enhanced Might Edge <Enhanced Might Edge>`

Tier 2:
    :ref:`Feat of Strength <Feat of Strength>`

Tier 3:
    :ref:`Iron Fist <Iron Fist>` or :ref:`Throw <Throw>`

Tier 4:
    :ref:`Greater Enhanced Might <Greater Enhanced Might>`

Tier 5:
    :ref:`Brute Strike <Brute Strike>`

Tier 6:
    :ref:`Greater Enhanced Might <Greater Enhanced Might>` or :ref:`Jump Attack <Jump Attack>`

GM Intrusions:
    It’s easy to break delicate things or hurt someone
    accidentally.

'],['name' => 'Pilots Starcraft' ,'description'=> '
 ----------------

You’re a crack starship pilot.

Tier 1:
    :ref:`Pilot <Pilot>`

Tier 1:
    :ref:`Flex Lore <Flex Lore>`

Tier 2:
    :ref:`Salvage and Comfort <Salvage and Comfort>`

Tier 2:
    :ref:`Mentally Tough <Mentally Tough>`

Tier 3:
    :ref:`Expert Pilot <Expert Pilot>`

Tier 3:
    :ref:`Ship Footing <Ship Footing>` or :ref:`Machine Companion <Machine Companion>`

Tier 4:
    :ref:`Sensor Array <Sensor Array>`

Tier 4:
    :ref:`Enhanced Speed <Enhanced Speed>`

Tier 5:
    :ref:`Like the Back of Your Hand <Like the Back of Your Hand>`

Tier 6:
    :ref:`Incomparable Pilot <Incomparable Pilot>`

Tier 6:
    :ref:`Remote Control <Remote Control>` or :ref:`Skill With Attacks <Skill With Attacks>`

GM Intrusions:
    Starcraft get lost, break down, and are attacked in
    space. An alien stowaway is found.

'],['name' => 'Plays Too Many Games' ,'description'=> '
 --------------------

Lessons, reflexes, and strategies you’ve learned by playing too many
games have applications in the real world, where people who don’t play
enough toil and live their dreary lives.

Tier 1:
    :ref:`Game Lessons <Game Lessons>`

Tier 1:
    :ref:`Gamer <Gamer>`

Tier 2:
    :ref:`Zero Dark Eyes <Zero Dark Eyes>`

Tier 2:
    :ref:`Resist Tricks <Resist Tricks>`

Tier 3:
    :ref:`Sniper’s Aim <Sniper’s Aim>` or :ref:`Enhanced Speed Edge <Enhanced Speed Edge>`

Tier 4:
    :ref:`Mind Games <Mind Games>`

Tier 4:
    :ref:`Enhanced Intellect <Enhanced Intellect>`

Tier 5:
    :ref:`Gamer’s Fortitude <Gamer’s Fortitude>`

Tier 6:
    :ref:`Mind Surge <Mind Surge>` or :ref:`Gaming God <Gaming God>`

GM Intrusions:
    Missed attacks strike the wrong target. Equipment breaks.
    Sometimes people react negatively to someone who has lived most of their
    life in imaginary game worlds.

'],['name' => 'Rages' ,'description'=> '
 -----

When you go berserk, everyone fears you.

Tier 1:
    :ref:`Frenzy <Frenzy>`

Tier 2:
    :ref:`Greater Enhanced Might <Greater Enhanced Might>`

Tier 2:
    :ref:`Movement Skills <Movement Skills>`

Tier 3:
    :ref:`Power Strike <Power Strike>` or :ref:`Unarmored Fighter <Unarmored Fighter>`

Tier 4:
    :ref:`Greater Frenzy <Greater Frenzy>`

Tier 5:
    :ref:`Attack and Attack Again <Attack and Attack Again>`

Tier 6:
    :ref:`Greater Enhanced Potential <Greater Enhanced Potential>` or :ref:`Lethal Damage <Lethal Damage>`

GM Intrusions:
    It’s easy for a berserker to lose control and attack
    friend as well as foe.

'],['name' => 'Rides the Lightning','description' => '
 -------------------

You create and discharge electrical power.

Tier 1:
    :ref:`Shock <Shock>`

Tier 1:
    :ref:`Charge <Charge>`

Tier 2:
    :ref:`Bolt Rider <Bolt Rider>`

Tier 3:
    :ref:`Electric Armor <Electric Armor>` or :ref:`Drain Charge <Drain Charge>`

Tier 4:
    :ref:`Bolts of Power <Bolts of Power>`

Tier 5:
    :ref:`Electrical Flight <Electrical Flight>`

Tier 6:
    :ref:`Flash Across the Miles <Flash Across the Miles>` or :ref:`Wall of Lightning <Wall of Lightning>`

GM Intrusions:
    Targets other than those intended are shocked. Objects
    explode.

'],['name' => 'Runs Away' ,'description'=> '
 ---------

Your first instinct is to run from danger, and you’ve gotten very good
at it.

Tier 1:
    :ref:`Go Defensive <Go Defensive>`

Tier 2:
    :ref:`Enhanced Speed <Enhanced Speed>`

Tier 2:
    :ref:`Quick to Flee <Quick to Flee>`

Tier 3:
    :ref:`Incredible Running Speed <Incredible Running Speed>` or :ref:`Greater Enhanced Speed <Greater Enhanced Speed>`

Tier 4:
    :ref:`Increasing Determination <Increasing Determination>`

Tier 4:
    :ref:`Quick Wits <Quick Wits>`

Tier 5:
    :ref:`Go to Ground <Go to Ground>`

Tier 6:
    :ref:`Burst of Escape <Burst of Escape>` or :ref:`Skill With Defense <Skill With Defense>`

GM Intrusions:
    Quick movements sometimes lead to dropped items, slipping
    on uneven ground, or going the wrong way by accident.

'],['name' => 'Sailed Beneath the Jolly Roger' ,'description'=> '
 ------------------------------

You sailed with a crew of dread pirates, but you’ve decided to end your
days as a pirate and join some other cause. The question is, will your
past let you go so easily?

Tier 1:
    :ref:`Ignore the Pain <Ignore the Pain>`

Tier 1:
    :ref:`Sailor <Sailor>`

Tier 2:
    :ref:`Taking Advantage <Taking Advantage>`

Tier 2:
    :ref:`Fearsome Reputation <Fearsome Reputation>`

Tier 3:
    :ref:`Skill With Attacks <Skill With Attacks>` or :ref:`Skill With Defense <Skill With Defense>`

Tier 4:
    :ref:`Sea Legs <Sea Legs>`

Tier 4:
    :ref:`Movement Skills <Movement Skills>`

Tier 5:
    :ref:`Lost in the Chaos <Lost in the Chaos>`

Tier 6:
    :ref:`Duel to the Death <Duel to the Death>` or :ref:`Successive Attack <Successive Attack>`

GM Intrusions:
    The dangers of the high seas are many, including severe
    storms and disease. Other pirates sometimes get ahead through betrayal.
    A pirate tracks down former sailing mates to find hidden treasure.

'],['name' => 'Scavenges' ,'description'=> '
 ---------

When not running and hiding, you sift the ruins of civilization for
useful remnants to ensure your survival.

Tier 1:
    :ref:`Post-Apocalyptic Survivor <Post-Apocalyptic Survivor>`

Tier 1:
    :ref:`Ruin Lore <Ruin Lore>`

Tier 2:
    :ref:`Junkmonger <Junkmonger>`

Tier 3:
    :ref:`Taking Advantage <Taking Advantage>` or :ref:`Incredible Health <Incredible Health>`

Tier 4:
    :ref:`Know Where to Look <Know Where to Look>`

Tier 5:
    :ref:`Recycled Cyphers <Recycled Cyphers>`

Tier 6:
    :ref:`Artifact Scavenger <Artifact Scavenger>` or :ref:`Reactive Field <Reactive Field>`

GM Intrusions:
    An item made with recycled junk breaks. Someone shows up
    claiming that the useful item or piece of junk scavenged belongs to
    them. A recycled cypher explodes.

'],['name' => 'Sees Beyond' ,'description'=> '
 -----------

You have a psychic sense that allows you to see what others cannot.

Tier 1:
    :ref:`See the Unseen <See the Unseen>`

Tier 2:
    :ref:`See Through Matter <See Through Matter>`

Tier 3:
    :ref:`Find the Hidden <Find the Hidden>` or :ref:`Sensor <Sensor>`

Tier 4:
    :ref:`Remote Viewing <Remote Viewing>`

Tier 5:
    :ref:`See Through Time <See Through Time>`

Tier 6:
    :ref:`Mental Projection <Mental Projection>` or :ref:`Total Awareness <Total Awareness>`

GM Intrusions:
    Some secrets are too terrible to know.

'],['name' => 'Separates Mind From Body' ,'description'=> '
 ------------------------

You can project your mind out of your body to see faraway places and
learn secrets that would otherwise remain hidden.

Tier 1:
    :ref:`Third Eye <Third Eye>`

Tier 2:
    :ref:`Open Mind <Open Mind>`

Tier 2:
    :ref:`Sharp Senses <Sharp Senses>`

Tier 3:
    :ref:`Roaming Third Eye <Roaming Third Eye>` or :ref:`Find the Hidden <Find the Hidden>`

Tier 4:
    :ref:`Sensor <Sensor>`

Tier 5:
    :ref:`Psychic Passenger <Psychic Passenger>`

Tier 6:
    :ref:`Mental Projection <Mental Projection>` or :ref:`Improved Sensor <Improved Sensor>`

GM Intrusions:
    Reuniting mind and body can sometimes be disorienting and
    require a character to spend a few moments to get their bearings.

'],['name' => 'Shepherds the Community' ,'description'=> '
 -----------------------

You keep the place where you live safe from all danger.

Tier 1:
    :ref:`Community Knowledge <Community Knowledge>`

Tier 1:
    :ref:`Community Activist <Community Activist>`

Tier 2:
    :ref:`Skill With Attacks <Skill With Attacks>`

Tier 3:
    :ref:`Shepherd’s Fury <Shepherd’s Fury>` or :ref:`Skill With Defense <Skill With Defense>`

Tier 4:
    :ref:`Greater Enhanced Potential <Greater Enhanced Potential>`

Tier 5:
    :ref:`Evasion <Evasion>`

Tier 6:
    :ref:`Greater Skill With Attacks <Greater Skill With Attacks>` or :ref:`Protective Wall <Protective Wall>`

GM Intrusions:
    People in the community misunderstand the character’s
    motives. Rivals try to oust the character.

'],['name' => 'Shepherds Spirits' ,'description'=> '
 -----------------

Wandering souls, nature spirits, and elemental beings aid and support
you.

(In some settings, the Shepherds Spirits focus applies to only one kind
of spirit, such as spirits of the deceased, nature spirits, and so on.)

Tier 1:
    :ref:`Question the Spirits <Question the Spirits>`

Tier 2:
    :ref:`Spirit Accomplice <Spirit Accomplice>`

Tier 3:
    :ref:`Command Spirit <Command Spirit>` or :ref:`Preternatural Senses <Preternatural Senses>`

Tier 4:
    :ref:`Wraith Cloak <Wraith Cloak>`

Tier 5:
    :ref:`Call Dead Spirit <Call Dead Spirit>`

Tier 6:
    :ref:`Call Otherworldly Spirit <Call Otherworldly Spirit>` or :ref:`Infuse Spirit <Infuse Spirit>`

GM Intrusions:
    Some people don’t trust those who deal with spirits. The
    dead sometimes don’t want shepherding.

'],['name' => 'Shreds the Walls of the World' ,'description'=> '
 -----------------------------

Speed plus phasing gives you a unique ability to evade danger and
simultaneously inflict damage.

Tier 1:
    :ref:`Phase Sprint <Phase Sprint>`

Tier 1:
    :ref:`Disrupting Touch <Disrupting Touch>`

Tier 2:
    :ref:`Scratch Existence <Scratch Existence>`

Tier 3:
    :ref:`Invisible Phasing <Invisible Phasing>` or :ref:`Walk Through Walls <Walk Through Walls>`

Tier 4:
    :ref:`Phase Detonation <Phase Detonation>`

Tier 5:
    :ref:`Very Long Sprinting <Very Long Sprinting>`

Tier 6:
    :ref:`Shred Existence <Shred Existence>` or :ref:`Untouchable While Moving <Untouchable While Moving>`

GM Intrusions:
    Moving so quickly while sprinting sometimes leads to
    stumbles on unexpected, exotic obstacles.

'],['name' => 'Siphons Power' ,'description'=> '
 -------------

You suck power out of machines and creatures alike in order to empower
yourself.

(Robots and other living machines should be treated as creatures, not
machines, for the purposes of siphoning power from them.)

Tier 1:
    :ref:`Drain Machine <Drain Machine>`

Tier 2:
    :ref:`Drain Creature <Drain Creature>`

Tier 3:
    :ref:`Drain at a Distance <Drain at a Distance>` or :ref:`Unraveling Consumption <Unraveling Consumption>`

Tier 4:
    :ref:`Store Energy <Store Energy>`

Tier 5:
    :ref:`Share the Power <Share the Power>`

Tier 6:
    :ref:`Explosive Release <Explosive Release>` or :ref:`Sun Siphon <Sun Siphon>`

GM Intrusions:
    Drained power also transmits something
    unwanted—compulsions, afflictions, or alien thoughts. Siphoned power can
    overload the character, causing feedback.

'],['name' => 'Slays Monsters' ,'description'=> '
 --------------

You kill monsters.

(Although wielding a sword in a setting where people usually do not
carry such weapons is fine, you can change the Slays Monsters
sword-related abilities to use a different weapon, such as a gun with
silver bullets.)

Tier 1:
    :ref:`Practiced With Swords <Practiced With Swords>`

Tier 1:
    :ref:`Monster Bane <Monster Bane>`

Tier 1:
    :ref:`Monster Lore <Monster Lore>`

Tier 2:
    :ref:`Will of Legend <Will of Legend>`

Tier 3:
    :ref:`Trained Slayer <Trained Slayer>`

Tier 3:
    :ref:`Improved Monster Bane <Improved Monster Bane>` or :ref:`Misdirect <Misdirect>`

Tier 4:
    :ref:`Fight On <Fight On>`

Tier 5:
    :ref:`Greater Skill With Attacks <Greater Skill With Attacks>` (swords)

Tier 6:
    :ref:`Murderer <Murderer>` or :ref:`Heroic Monster Bane <Heroic Monster Bane>`

GM Intrusions:
    The monster laid a trap or set an ambush. The monster has
    previously undisclosed abilities. The monster’s mother vows revenge.

'],['name' => 'Solves Mysteries' ,'description'=> '
 ----------------

You’re a master of deduction, using evidence to find the answer.

Tier 1:
    :ref:`Investigator <Investigator>`

Tier 1:
    :ref:`Sleuth <Sleuth>`

Tier 2:
    :ref:`Out of Harm’s Way <Out of Harm’s Way>`

Tier 3:
    :ref:`You Studied <You Studied>` or :ref:`Skill With Attacks <Skill With Attacks>`

Tier 4:
    :ref:`Draw Conclusion <Draw Conclusion>`

Tier 5:
    :ref:`Defuse Situation <Defuse Situation>`

Tier 6:
    :ref:`Seize the Initiative <Seize the Initiative>` or :ref:`Greater Skill With Defense <Greater Skill With Defense>`

GM Intrusions:
    Evidence disappears, red herrings confuse, and witnesses
    lie. Initial research can be faulty.

'],['name' => 'Speaks for the Land' ,'description'=> '
 -------------------

Your spiritual connection to nature and the environment grants you
mystical abilities.

Tier 1:
    :ref:`Seeds of Fury <Seeds of Fury>`

Tier 1:
    :ref:`Wilderness Lore <Wilderness Lore>`

Tier 2:
    :ref:`Grasping Foliage <Grasping Foliage>`

Tier 3:
    :ref:`Soothe the Savage <Soothe the Savage>` or :ref:`Communication <Communication>`

Tier 4:
    :ref:`Moon Shape <Moon Shape>`

Tier 5:
    :ref:`Insect Eruption <Insect Eruption>`

Tier 6:
    :ref:`Call the Storm <Call the Storm>` or :ref:`Earthquake <Earthquake>`

GM Intrusions:
    An injured natural (but dangerous) creature is
    discovered. Someone’s poaching wildlife for their skins, leaving the
    carcasses to rot. A tree falls in the forest, one of the last elder
    trees.

'],['name' => 'Stands Like a Bastion' ,'description'=> '
 ---------------------

Your armor, along with your size, strength, incredible training, or
machine enhancement, makes you difficult to move or hurt.

(Some characters who Stand Like a Bastion might already be experts in
armor. They can choose a different tier 1 ability instead of Practiced
in Armor.)

Tier 1:
    :ref:`Practiced in Armor <Practiced in Armor>`

Tier 1:
    :ref:`Experienced Defender <Experienced Defender>`

Tier 2:
    :ref:`Resist the Elements <Resist the Elements>`

Tier 3:
    :ref:`Unmovable <Unmovable>`

Tier 3:
    :ref:`Greater Enhanced Might <Greater Enhanced Might>` or :ref:`Practiced With All Weapons <Practiced With All Weapons>`

Tier 4:
    :ref:`Living Wall <Living Wall>`

Tier 5:
    :ref:`Hardiness <Hardiness>`

Tier 5:
    :ref:`Mastery in Armor <Mastery in Armor>`

Tier 6:
    :ref:`Lethal Damage <Lethal Damage>` or :ref:`Shield Training <Shield Training>`

GM Intrusions:
    Armor is damaged. Small foes conspire in ingenious ways.

'],['name' => 'Talks to Machines' ,'description'=> '
 -----------------

You use your organic brain like a computer, interfacing “wirelessly”
with any electronic device. You can control and influence them in ways
that others can’t.

Tier 1:
    :ref:`Machine Affinity <Machine Affinity>`

Tier 1:
    :ref:`Distant Interface <Distant Interface>`

Tier 2:
    :ref:`Coaxing Power <Coaxing Power>`

Tier 2:
    :ref:`Charm Machine <Charm Machine>`

Tier 3:
    :ref:`Intelligent Interface <Intelligent Interface>` or :ref:`Command Machine <Command Machine>`

Tier 4:
    :ref:`Machine Companion <Machine Companion>`

Tier 4:
    :ref:`Robot Fighter <Robot Fighter>`

Tier 5:
    :ref:`Information Gathering <Information Gathering>`

Tier 6:
    :ref:`Control Machine <Control Machine>` or :ref:`Improved Machine Companion <Improved Machine Companion>`

GM Intrusions:
    The machine malfunctions or acts unpredictably.

'],['name' => 'Throws With Deadly Accuracy' ,'description'=> '
 ---------------------------

Everything that leaves your hand goes exactly where you’d like it to go
and at the range and speed to make the perfect impact.

Tier 1:
    :ref:`Precision <Precision>`

Tier 2:
    :ref:`Careful Aim <Careful Aim>`

Tier 3:
    :ref:`Quick Throw <Quick Throw>` or :ref:`Skill With Defense <Skill With Defense>`

Tier 4:
    :ref:`Everything Is a Weapon <Everything Is a Weapon>`

Tier 4:
    :ref:`Specialized Throwing <Specialized Throwing>`

Tier 5:
    :ref:`Whirlwind of Throws <Whirlwind of Throws>`

Tier 6:
    :ref:`Lethal Damage <Lethal Damage>` or :ref:`Mastery With Defense <Mastery With Defense>`

GM Intrusions:
    Missed attacks strike the wrong target. Ricochets can be
    dangerous. Improvised weapons break.

'],['name' => 'Thunders' ,'description'=> '
 --------

You emit destructive sound and manipulate soundscapes.

Tier 1:
    :ref:`Thunder Beam <Thunder Beam>`

Tier 2:
    :ref:`Sound Conversion Barrier <Sound Conversion Barrier>`

Tier 3:
    :ref:`Nullify Sound <Nullify Sound>` or :ref:`Echolocation <Echolocation>`

Tier 4:
    :ref:`Shattering Shout <Shattering Shout>`

Tier 5:
    :ref:`Subsonic Rumble <Subsonic Rumble>`

Tier 5:
    :ref:`Amplify Sounds <Amplify Sounds>`

Tier 6:
    :ref:`Earthquake <Earthquake>` or :ref:`Lethal Vibration <Lethal Vibration>`

GM Intrusions:
    Loud noises attract attention.

'],['name' => 'Travels Through Time' ,'description'=> '
 --------------------

You can see through time, try to reach through it, and eventually even
travel through it.

(Although all character choices are subject to GM approval, Travels
Through Time is a focus that the GM and player should probably have a
long conversation about ahead of time, so the player knows the rules of
time travel (if any) that exist in the GM’s setting. A character with
this focus can drastically alter a setting, if the rules of time travel
allow it.)

Tier 1:
    :ref:`Anticipation <Anticipation>`

Tier 2:
    :ref:`See History <See History>`

Tier 3:
    :ref:`Temporal Acceleration <Temporal Acceleration>` or :ref:`Time Loop <Time Loop>`

Tier 4:
    :ref:`Temporal Dislocation <Temporal Dislocation>`

Tier 5:
    :ref:`Time Doppelganger <Time Doppelganger>`

Tier 6:
    :ref:`Call Through Time <Call Through Time>` or :ref:`Time Travel <Time Travel>`

GM Intrusions:
    Paradoxes are created. Others remember past events
    differently.

'],['name' => 'Was Foretold' ,'description'=> '
 ------------

You are the “chosen one,” and prophecy, prediction, prognostication, or
some other method of determination expects great things of you one day.

Tier 1:
    :ref:`Interaction Skills <Interaction Skills>`

Tier 1:
    :ref:`Knowing <Knowing>`

Tier 2:
    :ref:`Destined for Greatness <Destined for Greatness>`

Tier 3:
    :ref:`Overcome All Obstacles <Overcome All Obstacles>` or :ref:`Hard-Won Resilience <Hard-Won Resilience>`

Tier 4:
    :ref:`Center of Attention <Center of Attention>`

Tier 5:
    :ref:`Show Them the Way <Show Them the Way>`

Tier 6:
    :ref:`As Foretold in Prophecy <As Foretold in Prophecy>` or :ref:`Greater Enhanced Potential <Greater Enhanced Potential>`

GM Intrusions:
    An enemy described in prophecy appears. Unbelievers
    threaten to ruin the moment. The character gains a reputation in outside
    circles as a fraud.

'],['name' => 'Wears a Sheen of Ice' ,'description'=> '
 --------------------

You command the wintery power of cold and ice.

Tier 1:
    :ref:`Ice Armor <Ice Armor>`

Tier 2:
    :ref:`Frost Touch <Frost Touch>`

Tier 3:
    :ref:`Freezing Touch <Freezing Touch>` or :ref:`Ice Creation <Ice Creation>`

Tier 4:
    :ref:`Resilient Ice Armor <Resilient Ice Armor>`

Tier 5:
    :ref:`Cold Burst <Cold Burst>`

Tier 6:
    :ref:`Ice Storm <Ice Storm>` or :ref:`Winter Gauntlets <Winter Gauntlets>`

GM Intrusions:
    Ice makes surfaces slippery. Extreme cold causes objects
    to crack and break.

'],['name' => 'Wears Power Armor' ,'description'=> '
 -----------------

Tier 1:
    :ref:`Powered Armor <Powered Armor>`

Tier 1:
    :ref:`Enhanced Might <Enhanced Might>`

Tier 2:
    :ref:`Heads-Up Display <Heads-Up Display>`

Tier 3:
    :ref:`Fusion Armor <Fusion Armor>` or :ref:`Incredible Health <Incredible Health>`

Tier 4:
    :ref:`Force Blast <Force Blast>`

Tier 5:
    :ref:`Field-Reinforced Armor <Field-Reinforced Armor>`

Tier 6:
    :ref:`Masterful Armor Modification <Masterful Armor Modification>` (Jet Assisted Flight)
    or :ref:`Masterful Armor Modification <Masterful Armor Modification>` (Cypher Pod)

GM Intrusions:
    The armor won’t come off. The armor acts under its own
    power. The armor suffers a momentary power loss. NPCs are scared by the
    power armor.

'],['name' => 'Wields Two Weapons at Once' ,'description'=> '
 --------------------------

You bear steel with both hands, ready to take on any foe.

Tier 1:
    :ref:`Dual Light Wield <Dual Light Wield>`

Tier 2:
    :ref:`Double Strike <Double Strike>`

Tier 2:
    :ref:`Infiltrator <Infiltrator>`

Tier 3:
    :ref:`Dual Medium Wield <Dual Medium Wield>` or :ref:`Precise Cut <Precise Cut>`

Tier 4:
    :ref:`Dual Defense <Dual Defense>`

Tier 5:
    :ref:`Dual Distraction <Dual Distraction>`

Tier 6:
    :ref:`Disarming Attack <Disarming Attack>` or :ref:`Spin Attack <Spin Attack>`

GM Intrusions:
    A blade snaps in two or a weapon flies loose from its
    bearer’s grip.

'],['name' => 'Works for a Living' ,'description'=> '
 ------------------

You take great satisfaction in a job well done, whether it’s coding,
building houses, or mining asteroids.

Tier 1:
    :ref:`Handy <Handy>`

Tier 2:
    :ref:`Muscles of Iron <Muscles of Iron>`

Tier 3:
    :ref:`Eye for Detail <Eye for Detail>` or :ref:`Improvise <Improvise>`

Tier 4:
    :ref:`Enhanced Might <Enhanced Might>`

Tier 4:
    :ref:`Tough It Out <Tough It Out>`

Tier 5:
    :ref:`Expert Skill <Expert Skill>`

Tier 6:
    :ref:`Greater Enhanced Potential <Greater Enhanced Potential>` or :ref:`Hard-Won Resilience <Hard-Won Resilience>`

GM Intrusions:
    Repairs sometimes fail. Wiring can be tricky to decipher
    and still carry an electrical charge. Some people are rude to those who
    work for a living.

'],['name' => 'Works Miracles' ,'description'=> '
 --------------

You can heal others with a touch, alter time to help others, and are
generally beloved by everyone.

Tier 1:
    :ref:`Healing Touch <Healing Touch>`

Tier 2:
    :ref:`Alleviate <Alleviate>`

Tier 3:
    :ref:`Font of Healing <Font of Healing>` or :ref:`Miraculous Health <Miraculous Health>`

Tier 4:
    :ref:`Inspire Action <Inspire Action>`

Tier 5:
    :ref:`Undo <Undo>`

Tier 6:
    :ref:`Greater Healing Touch <Greater Healing Touch>` or :ref:`Restore Life <Restore Life>`

GM Intrusions:
    Attempts to heal might cause harm instead. A community or
    individual needs a healer so desperately that they hold one against
    their will.

'],['name' => 'Works the Back Alleys' ,'description'=> '
 ---------------------

You make your way unseen, stealing from the wealthy to achieve your
ends.

Tier 1:
    :ref:`Stealth Skills <Stealth Skills>`

Tier 2:
    :ref:`Underworld Contacts <Underworld Contacts>`

Tier 3:
    :ref:`Pull a Fast One <Pull a Fast One>` or :ref:`Guild Training <Guild Training>`

Tier 4:
    :ref:`Master Thief <Master Thief>`

Tier 5:
    :ref:`Dirty Fighter <Dirty Fighter>`

Tier 6:
    :ref:`Alley Rat <Alley Rat>` or :ref:`All-Out Con <All-Out Con>`

GM Intrusions:
    Thieves are thrown in jail. Powerful enemies are made.

'],['name' => 'Works the System' ,'description'=> '
 ----------------

You can exploit flaws in artificial systems, including but not limited
to computer code.

Tier 1:
    :ref:`Hack the Impossible <Hack the Impossible>`

Tier 1:
    :ref:`Computer Programming <Computer Programming>`

Tier 2:
    :ref:`Connected <Connected>`

Tier 3:
    :ref:`Confidence Artist <Confidence Artist>` or :ref:`Skill With Attacks <Skill With Attacks>`

Tier 4:
    :ref:`Confuse Enemy <Confuse Enemy>`

Tier 5:
    :ref:`Work the Friendship <Work the Friendship>`

Tier 6:
    :ref:`Call in Favor <Call in Favor>` or :ref:`Greater Enhanced Potential <Greater Enhanced Potential>`

GM Intrusions:
    Contacts sometimes have ulterior motives. Devices
    sometimes have failsafes or even traps.

'],['name' => 'Would Rather Be Reading' ,'description'=> '
 -----------------------

Books are your friends. What’s more important than knowledge? Nothing.

Tier 1:
    :ref:`Knowledge Is Power <Knowledge Is Power>`

Tier 2:
    :ref:`Greater Enhanced Intellect <Greater Enhanced Intellect>`

Tier 3:
    :ref:`Applying Your Knowledge <Applying Your Knowledge>` or :ref:`Flex Skill <Flex Skill>`

Tier 4:
    :ref:`Knowledge Is Power <Knowledge Is Power>`

Tier 4:
    :ref:`Knowing the Unknown <Knowing the Unknown>`

Tier 5:
    :ref:`Greater Enhanced Intellect <Greater Enhanced Intellect>`

Tier 6:
    :ref:`Knowledge Is Power <Knowledge Is Power>`

Tier 6:
    :ref:`Tower of Intellect <Tower of Intellect>` or :ref:`Read the Signs <Read the Signs>`

GM Intrusions:
    Books burn, get wet, or get lost. Computers break or lose
    power. Glasses break.
'],
        ];

        foreach ($foci as $focus) {
            CypherFocus::create($focus);
        }

    }
}
