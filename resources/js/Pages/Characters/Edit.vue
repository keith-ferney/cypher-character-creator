<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import Checkbox from "@/Components/Checkbox.vue";
import FancySelect from "@/Components/FancySelect.vue";
import CharacterSkillsEditor from "@/Components/CharacterSkillsEditor.vue";
import CharacterSpecialAbilitiesEditor from "@/Components/CharacterSpecialAbilitiesEditor.vue";
import CharacterCyphersEditor from "@/Components/CharacterCyphersEditor.vue";
import CharacterEquipmentEditor from "@/Components/CharacterEquipmentEditor.vue";
import CharacterAttacksEditor from "@/Components/CharacterAttacksEditor.vue";
import CharacterPowerShiftsEditor from "@/Components/CharacterPowerShiftsEditor.vue";

export default {
    name: 'EditCharacter',
    components: {
        CharacterAttacksEditor,
        AuthenticatedLayout,
        Head,
        FancySelect,
        TextInput,
        InputLabel,
        Checkbox,
        CharacterSkillsEditor,
        CharacterSpecialAbilitiesEditor,
        CharacterCyphersEditor,
        CharacterEquipmentEditor,
        CharacterPowerShiftsEditor
    },
    props: {
        character: Object,
        cypherDescriptors: Array,
        cypherTypes: Array,
        cypherFoci: Array,
        cypherFlavors: Array,
        cypherAdvancements: Array,
        cypherAbilities: Array,
        cypherPowerShifts: Array,
    },
    methods: {
        updateCharacter() {
            axios.put('/characters/' + this.character.id, this.character)
                .then(response => {
                    // update the character
                    this.character.skills = response.data.character.skills;
                    this.character.special_abilities = response.data.character.special_abilities;
                    this.character.cyphers = response.data.character.cyphers;
                    this.character.equipment = response.data.character.equipment;

                    console.log(response.data);
                })
                .catch(error => {
                        // console.log(error);
                    }
                );
        }
    },
    watch: {
        'character.name': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.cypher_descriptor_id': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.cypher_type_id': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.cypher_focus_id': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.cypher_flavor_id': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.tier': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.effort': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.experience': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.might': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.might_pool': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.might_edge': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.speed': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.speed_pool': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.speed_edge': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.intellect': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.intellect_pool': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.intellect_edge': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.recovery_modifier': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.background': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.notes': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.portrait': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.recovery_action_used': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.recovery_1_hour_used': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.recovery_10_mins_used': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.recovery_10_hours_used': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.impared': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.debilitated': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },
        'character.dead': function (newCharacter, oldCharacter) {
            this.updateCharacter();
        },

    }
};
</script>

<template>
    <Head title="User Profile"/>

    <AuthenticatedLayout>

        <div class="py-12">
            <div class="sm:px-6 lg:px-8">
                <div
                    style="
                        background-image: url('/CharacterSheetBackground.png');
                    "
                    class="bg-center bg-cover bg-no-repeat bg-slate-200 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg text-gray-900 dark:text-black p-6
                             flex flex-col gap-3 grid-flow-col
                             lg:grid lg:grid-cols-2 lg:grid-rows-[repeat(20,auto)]
                             grid-cols-1 xl:grid-cols-3
                             xl:grid-rows-12
                            ">
                    <!-- Name -->
                    <div class="order-1 w-full flex flex-col">
                        <input v-model="character.name" label="Name" type="text"
                               class="border-0 border-r-8 border-b-8 border-black"/>
                        <label class="bg-black text-white w-fit px-2 font-normal -mt-2 text-lg">Name</label>
                    </div>

                    <!-- Descriptor/Type -->
                    <div class="order-2 flex gap-3 flex-wrap xl:flex-nowrap">
                        <div class="flex flex-row items-center w-full">
                            <div class="bg-black px-2 pb-2 whitespace-nowrap font-extrabold text-white">IS A</div>
                            <div class="w-full flex flex-col">

                                <FancySelect class="border-0 border-r-8 border-b-8 border-black text-black w-full"
                                             :options="cypherDescriptors"
                                             label-key="name"
                                             value-key="id"
                                             description-key="description"
                                             placeholder="- Select A Descriptor -"
                                             v-model="character.cypher_descriptor_id"
                                >
                                </FancySelect>
                                <label
                                    class="bg-black text-white w-fit px-2 font-normal -mt-2 text-lg">Descriptor</label>
                            </div>
                        </div>
                        <div class="flex flex-row items-center w-full">
                            <div class="w-full flex flex-col">
                                <FancySelect :options="cypherTypes"
                                             label-key="name"
                                             value-key="id"
                                             description-key="description"
                                             placeholder="- Select A Type -"
                                             class="border-0 border-r-8 border-b-8 border-black text-black w-full"
                                             v-model="character.cypher_type_id"
                                >
                                </FancySelect>
                                <label
                                    class="bg-black text-white w-fit px-2 font-normal -mt-2 text-lg">Type</label>
                            </div>
                            <div class="bg-black px-2 pb-2 font-extrabold text-white">WHO</div>
                        </div>

                    </div>

                    <!-- Focus -->
                    <div class="order-3 w-full flex flex-col">
                        <FancySelect :options="cypherFoci"
                                     label-key="name"
                                     value-key="id"
                                     description-key="description"
                                     placeholder="- Select A Focus -"
                                     class="border-0 border-r-8 border-b-8 border-black text-black w-full"
                                     v-model="character.cypher_focus_id"
                        >
                        </FancySelect>
                        <label class="bg-black text-white w-fit px-2 font-normal -mt-2 text-lg">Focus</label>
                    </div>


                    <!-- Flavor -->
                    <div class="order-4 w-full flex flex-col">
                        <FancySelect :options="cypherFlavors"
                                     label-key="name"
                                     value-key="id"
                                     description-key="description"
                                     placeholder="- Select A Flavor -"
                                     class="border-0 border-r-8 border-b-8 border-black text-black w-full"
                                     v-model="character.cypher_flavor_id"
                        >
                        </FancySelect>
                        <label
                            class="bg-black text-white w-fit px-2 font-normal -mt-2 text-lg">Type/Flavor/Other</label>
                    </div>


                    <!-- Tier/Effor/XP -->
                    <div class="order-5 row-span-1 flex gap-1 justify-between">
                        <div
                            class="bg-white w-full text-black flex items-center flex-col border-r-8 border-b-8 border-black">
                            <input v-model="character.tier" label="Tier" type="number"
                                   class="text-center w-24 border-0"/>
                            <label class="text-center font-semibold text-xl">Tier</label>
                        </div>
                        <div
                            class="bg-white w-full text-black flex items-center flex-col border-r-8 border-b-8 border-black">
                            <input v-model="character.effort" label="Tier"
                                   type="number"
                                   class="text-center w-24 border-0"/>
                            <label class="text-center font-semibold text-xl">Effort</label>
                        </div>
                        <div
                            class="bg-white w-full text-black flex items-center flex-col border-r-8 border-b-8 border-black">
                            <input v-model="character.experience" label="Tier"
                                   type="number"
                                   class="text-center w-24 border-0"/>
                            <label class="text-center font-semibold text-xl">XP</label>
                        </div>
                    </div>


                    <!-- Might/Speed/Intellect -->
                    <div
                        class="order-6 row-span-2 flex bg-white w-full justify-between text-black border-r-8 border-b-8 border-black">
                        <div class="flex flex-grow flex-col border-x border-x-black px-1">
                            <label class="text-center font-semibold text-xl">Might</label>
                            <input v-model="character.might" label="Tier"
                                   type="number"
                                   class="text-center w-24 border-0"/>
                            <div class="grid grid-cols-2 border-t-2 border-t-black">
                                <div class="flex flex-col border-r border-r-black">
                                    <input v-model="character.might_pool" label="Tier"
                                           type="number"
                                           class="text-center border-0 w-14"/>
                                    <label class="text-center font-semibold">Pool</label>
                                </div>

                                <div class="flex flex-col border-l border-l-black">
                                    <input v-model="character.might_edge" label="Tier"
                                           type="number"
                                           class="text-center border-0 w-14"/>
                                    <label class="text-center font-semibold">Edge</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-grow flex-col border-x border-x-black px-1">
                            <label class="text-center font-semibold text-xl">Speed</label>
                            <input v-model="character.speed" label="Tier"
                                   type="number"
                                   class="text-center w-24 border-0"/>
                            <div class="grid grid-cols-2 border-t-2 border-t-black">
                                <div class="flex flex-col border-r border-r-black">
                                    <input v-model="character.speed_pool" label="Tier"
                                           type="number"
                                           class="text-center border-0 w-14"/>
                                    <label class="text-center font-semibold">Pool</label>
                                </div>

                                <div class="flex flex-col border-l border-l-black">
                                    <input v-model="character.speed_edge" label="Tier"
                                           type="number"
                                           class="text-center border-0 w-14"/>
                                    <label class="text-center font-semibold">Edge</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-grow flex-col border-x border-x-black px-1">
                            <label class="text-center font-semibold text-xl">Intellect</label>
                            <input v-model="character.intellect" label="Tier"
                                   type="number"
                                   class="text-center w-24 border-0"/>
                            <div class="grid grid-cols-2 border-t-2 border-t-black">
                                <div class="flex flex-col border-r border-r-black">
                                    <input v-model="character.intellect_pool" label="Tier"
                                           type="number"
                                           class="text-center border-0 w-14"/>
                                    <label class="text-center font-semibold">Pool</label>
                                </div>

                                <div class="flex flex-col border-l border-l-black">
                                    <input v-model="character.intellect_edge" label="Tier"
                                           type="number"
                                           class="text-center border-0 w-14"/>
                                    <label class="text-center font-semibold">Edge</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Damage Track -->
                    <div
                        class="order-7 row-span-2 flex bg-white w-full justify-between text-black border-r-8 border-b-8 border-black">
                        <div class="flex flex-grow flex-col border-x border-x-black px-1">
                            <div class="grid grid-cols-2 border-t-2 border-t-black">
                                <label class="font-semibold text-xl">Recovery</label>
                                <input v-model="character.recovery_modifier"
                                       type="number"
                                       class="text-center w-14 border-0"/>
                            </div>
                            <div class="grid grid-cols-2 border-t-2 border-t-black">
                                <div class="flex gap-1 items-center">
                                    <label class="font-semibold text-xl">
                                        <input v-model="character.recovery_action_used" type="checkbox"
                                               :checked="false"/>
                                        1 Action
                                    </label>
                                </div>

                                <div class="flex gap-1 items-center">
                                    <label class="font-semibold text-xl">
                                        <input v-model="character.recovery_1_hour_used" type="checkbox"
                                               :checked="false"/>
                                        1 Hour
                                    </label>
                                </div>

                                <div class="flex gap-1 items-center">
                                    <label class="font-semibold text-xl">
                                        <input v-model="character.recovery_10_mins_used" type="checkbox" :checked="false"/>
                                        10 Mins
                                    </label>
                                </div>

                                <div class="flex gap-1 items-center">
                                    <label class="font-semibold text-xl">
                                        <input v-model="character.recovery_10_hours_used" type="checkbox" :checked="false"/>
                                        10 Hours
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-grow flex-col border-x border-x-black px-1">
                            <div class="grid grid-cols-2 border-t-2 border-t-black">
                                <label class="font-semibold text-xl">Damage Track</label>
                            </div>
                            <div class="grid grid-cols-2 border-t-2 border-t-black">
                                <div class="flex flex-col gap-1 w-36">
                                    <label class="font-semibold text-xl">
                                        <input v-model="character.impared" type="checkbox" :checked="false"/>
                                        Impared
                                    </label>
                                    <small class="text-xs text-gray-600">
                                        +1 Effort per level
                                        Ignore minor and major effect results on rolls
                                        Combat roll of 17-20 deals only +1 damage
                                    </small>
                                </div>

                                <div class="flex flex-col gap-1 w-36">
                                    <label class="font-semibold text-xl">
                                        <input v-model="character.debilitated" type="checkbox" :checked="false"/>
                                        Debilitated
                                    </label>
                                    <small class="text-xs text-gray-600">
                                        Can move only an immediate distance
                                        Cannot move if Speed Pool is 0
                                    </small>
                                </div>

                                <div></div>

                                <div class="flex flex-col gap-1 w-36">
                                    <label class="font-semibold text-xl">
                                        <input v-model="character.dead" type="checkbox" :checked="false"/>
                                        Dead
                                    </label>
                                    <small class="text-xs text-gray-600">
                                        ...isn’t always dead
                                    </small>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- skills -->
                    <CharacterSkillsEditor :character="character"/>


                    <!-- Advancements -->
                    <div
                        class="order-9 row-span-2 bg-white w-full flex flex-col border-r-8 border-b-8 border-black px-3 py-2">
                        <label class="font-medium w-full text-lg underline-offset-8 mb-4 underline">Advancements</label>
                        <div class="flex flex-row">
                            <label v-for="cypherAdvancement in cypherAdvancements"
                                   class="text-black flex flex-col items-center text-center w-fit">
                                <input type="checkbox" :checked="false"/>
                                <span class="text-sm" v-text="cypherAdvancement.name"></span>
                                <small class="text-xs" v-html="cypherAdvancement.description">
                                </small>
                            </label>
                            <label class="text-black flex flex-col items-center text-center w-fit">
                                <input type="checkbox" :checked="false"/>
                                <span class="text-sm">Other</span>
                                <small class="text-xs">As specified in the rule book or something</small>
                            </label>
                        </div>
                    </div>


                    <!-- Special Abilities -->
                    <CharacterSpecialAbilitiesEditor :character="character" :cypher-abilities="cypherAbilities"/>

                    <!-- Attacks -->
                    <CharacterAttacksEditor :character="character"/>

                    <img src="/ClaimTheSky.png" alt="Character Sheet Background"
                         class="hidden xl:flex lg:order-9 xl:order-11 row-span-2 h-40 self-center place-self-center"
                    />


                    <!-- Cyphers -->
                    <CharacterCyphersEditor :character="character"/>

                    <!-- Power Shifts -->
                    <CharacterPowerShiftsEditor :character="character" :cypher-power-shifts="cypherPowerShifts"/>

                    <!-- Equipment -->
                    <CharacterEquipmentEditor :character="character"/>


                </div>

                <div
                    style=" background-image: url('/CharacterSheetBackground.png');"
                    class="bg-center bg-cover bg-no-repeat bg-slate-200 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg text-gray-900 dark:text-black p-6 grid grid-cols-3">
                    <div class="row-span-12 w-full flex flex-col">
                        <textarea v-model="character.background" type="text"
                                  class="h-[98vh] border-0 border-r-8 border-b-8 border-black"/>
                        <label class="bg-black text-white w-fit px-2 font-normal -mt-2 text-lg">Background</label>
                    </div>

                    <div class="row-span-12 w-full flex flex-col">
                        <textarea v-model="character.notes" type="text"
                                  class="h-[98vh] border-0 border-r-8 border-b-8 border-black"/>
                        <label class="bg-black text-white w-fit px-2 font-normal -mt-2 text-lg">Notes</label>
                    </div>

                    <div class="row-span-12 w-full flex flex-col">
                        <textarea v-model="character.portrait" type="text"
                                  class="h-[98vh] border-0 border-r-8 border-b-8 border-black"/>
                        <label class="bg-black text-white w-fit px-2 font-normal -mt-2 text-lg">Portrait</label>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
