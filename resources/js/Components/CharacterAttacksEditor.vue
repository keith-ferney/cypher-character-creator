<template>
    <div class="order-10 row-span-3 bg-white w-full flex flex-col border-r-8 border-b-8 border-black">
        <table class="w-full">
            <thead>
            <tr>
                <th class="text-left text-2xl">
                    Attacks
                </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="attack in character.attacks">
                <td>
                    <input @change="syncAttacks" v-model="attack.name" type="text" class="w-full p-0"/>
                </td>
                <td>
                    <button class="w-full bg-red-600 hover:bg-red-700 text-white text-xl"
                            @click="removeAttack(attack.id)">
                        🗑️
                    </button>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button class="w-full bg-green-600 hover:bg-green-700 text-white text-2xl"
                            @click="addAttack()">
                        +
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

export default {
    name: 'CharacterAttacksEditor',
    props: {
        character: {
            type: Object,
            required: true
        },
    },
    setup(props, {emit}) {
    },
    methods: {
        addAttack() {
            if (this.character.attacks === undefined) {
                this.character.attacks = []
            }

            axios.post('/characters/' + this.character.id + '/attacks').then(response => {
                this.character.attacks.push({
                    id: response.data.attack.id,
                    name: response.data.attack.name,
                });
            });

        },
        removeAttack(attackId) {
            axios.delete('/characters/' + this.character.id + '/attacks/' + attackId).then(response => {
                this.character.attacks = this.character.attacks.filter(attack => attack.id !== attackId);
            })
                .then(() => {
                    this.character.attacks = this.character.attacks.filter(attack => attack.id !== attackId);
                });
        },
        syncAttacks() {
            axios.put('/characters/' + this.character.id + '/attacks', {
                attacks: this.character.attacks
            });
        }

    },
};
</script>
