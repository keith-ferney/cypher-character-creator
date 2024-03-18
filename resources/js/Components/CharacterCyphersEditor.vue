<template>
    <div class="order-12 row-span-3 bg-white w-full flex flex-col border-r-8 border-b-8 border-black">
        <table class="w-full">
            <thead>
            <tr>
                <th class="text-left text-2xl">
                    Cyphers
                </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="cypher in character.cyphers">
                <td>
                    <input @change="syncCyphers" v-model="cypher.name" type="text" class="w-full p-0"/>
                </td>
                <td>
                    <button class="w-full bg-red-600 hover:bg-red-700 text-white text-xl"
                            @click="removeCypher(cypher.id)">
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
    name: 'CharacterCyphersEditor',
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
            if (this.character.cyphers === undefined) {
                this.character.cyphers = []
            }

            axios.post('/characters/' + this.character.id + '/cyphers').then(response => {
                this.character.cyphers.push({
                    id: response.data.cypher.id,
                    name: response.data.cypher.name,
                });
            });

        },
        removeCypher(cypherId) {
            axios.delete('/characters/' + this.character.id + '/cyphers/' + cypherId).then(response => {
                this.character.cyphers = this.character.cyphers.filter(cypher => cypher.id !== cypherId);
            })
                .then(() => {
                    this.character.cyphers = this.character.cyphers.filter(cypher => cypher.id !== cypherId);
                });
        },
        syncCyphers() {
            axios.put('/characters/' + this.character.id + '/cyphers', {
                cyphers: this.character.cyphers
            });
        }

    },
};
</script>
