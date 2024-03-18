<template>
    <div class="order-10 px-2 py-1 row-span-7 bg-white w-full flex flex-col border-r-8 border-b-8 border-black">
        <h2>Special Abilities</h2>
        <div class="flex gap-2">
            <FancySelect
                v-model="new_ability"
                class="w-full text-sm"
                :options="cypherAbilities"
                label-key="name"
                value-key="id"
                description-key="description"
                placeholder="- Add Special Ability -"
            ></FancySelect>
            <button class="bg-green-600 hover:bg-green-700 text-white text-2xl w-12 rounded m-1"
                    @click="addSpecialAbility">
                +
            </button>
        </div>
        <div class="flex flex-col gap-1">
            <div v-for="special_ability in character.special_abilities" class="bg-white flex flex-col">
                <div class="flex gap-1">
                    <button class="align-middle p-0 flex-shrink text-center text-xs bg-purple-600 hover:bg-purple-700 text-white w-4 h-4 m-1"
                            @click="toggleDescription(special_ability.id)">
                        V
                    </button>
                    <input @change="syncSpecialAbilities" v-model="special_ability.name" type="text"
                           class="w-full text-sm flex-grow px-1 py-0.5 h-5"
                           placeholder="Special Ablity Name"/>
                    <button class="align-middle p-0 flex-shrink text-center text-xs bg-red-600 hover:bg-red-700 text-white w-4 h-4 m-1"
                            @click="removeSkill(special_ability.id)">
                        X
                    </button>
                </div>
                <textarea v-show="special_ability.showDescription" @change="syncSpecialAbilities" v-model="special_ability.description"
                          placeholder="Special Ability Description"
                          class="w-full text-xs h-10 px-1 py-0.5"></textarea>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import FancySelect from '@/Components/FancySelect.vue';

export default {
    name: 'CharacterSpecialAbilitiesEditor',
    components: { FancySelect },
    props: {
        character: { type: Object, required: true },
        cypherAbilities: { type: Array, required: true }
    },
    data() {
        return {
            new_ability: null
        }
    },
    methods: {
        toggleDescription(id) {
            let ability = this.character.special_abilities.find(ability => ability.id === id);
            if (ability !== undefined) {
                ability.showDescription = !ability.showDescription;
            }
        },
        addSpecialAbility() {
            if (this.character.special_abilities === undefined) {
                this.character.special_abilities = [];
            }

            axios.post('/characters/' + this.character.id + '/special-abilities', {
                cypher_ability_id: this.new_ability
            })
                .then(response => {
                    this.character.special_abilities.push({
                        id: response.data.special_ability.id,
                        name: response.data.special_ability.name,
                        description: response.data.special_ability.description,
                        showDescription: false
                    });
                });

        },
        removeSkill(skillId) {
            axios.delete('/characters/' + this.character.id + '/special-abilities/' + skillId)
                .then(() => {
                    this.character.special_abilities = this.character.special_abilities.filter(special_ability => special_ability.id !== skillId);
                });
        },
        syncSpecialAbilities() {
            axios.put('/characters/' + this.character.id + '/special-abilities', {
                special_abilities: this.character.special_abilities
            });
        }
    },
}
</script>
