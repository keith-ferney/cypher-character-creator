<template>
    <div class="order-[13] row-span-3 bg-white w-full flex flex-col border-r-8 border-b-8 border-black">
        <table class="w-full">
            <thead>
            <tr>
                <th class="text-left text-2xl">
                    Equipment
                </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in character.equipment">
                <td>
                    <input @change="syncEquipment" v-model="item.name" type="text" class="w-full p-0"/>
                </td>
                <td>
                    <button class="w-full bg-red-600 hover:bg-red-700 text-white text-xl"
                            @click="removeCypher(item.id)">
                        🗑️
                    </button>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button class="w-full bg-green-600 hover:bg-green-700 text-white text-2xl"
                            @click="addCypher()">
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
    name: 'CharacterEquipmentEditor',
    props: {
        character: {
            type: Object,
            required: true
        },
    },
    setup(props, {emit}) {
    },
    methods: {
        addCypher() {
            if (this.character.equipment === undefined) {
                this.character.equipment = []
            }

            axios.post('/characters/' + this.character.id + '/equipment').then(response => {
                this.character.equipment.push({
                    id: response.data.equipment.id,
                    name: response.data.equipment.name,
                });
            });

        },
        removeCypher(itemId) {
            axios.delete('/characters/' + this.character.id + '/equipment/' + itemId).then(response => {
                this.character.equipment = this.character.equipment.filter(item => item.id !== itemId);
            })
                .then(() => {
                    this.character.equipment = this.character.equipment.filter(item => item.id !== itemId);
                });
        },
        syncEquipment() {
            axios.put('/characters/' + this.character.id + '/equipment', {
                equipment: this.character.equipment
            });
        }

    },
};
</script>
