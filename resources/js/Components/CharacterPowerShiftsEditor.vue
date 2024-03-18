<template>
    <div class="order-12 row-span-4 bg-white w-full flex flex-col border-r-8 border-b-8 border-black px-3 py-2">
        <label class="font-medium w-full text-lg underline-offset-8 mb-4 underline">Power Shifts</label>
        <div class="flex flex-col">
            <label class="text-black flex flex-row gap-1 items-center text-center w-fit px-2 py-1"
                   v-for="cypherPowerShift in cypherPowerShifts"
            >
                <input v-model="cypherPowerShift.value" type="number" class="w-5 p-0 text-xs"/>
                <span v-tippy="cypherPowerShift.description" class="text-sm">{{ cypherPowerShift.name }}</span>
                <div v-if="cypherPowerShift.has_healing_checkboxes" class="flex gap-1">
                    <input type="checkbox" />
                    <input type="checkbox" />
                    <input type="checkbox" />
                    <input type="checkbox" />
                    <input type="checkbox" />
                </div>
                <input v-if="cypherPowerShift.allows_additional_text" type="text" class="w-32 p-0 text-xs"/>
                <span v-if="cypherPowerShift.is_per_round">Per Round</span>
            </label>

        </div>
    </div>
</template>

<script>

export default {
    name: 'CharacterPowerShiftsEditor',
    props: {
        character: {
            type: Object,
            required: true
        },
        cypherPowerShifts: {
            type: Array,
            required: true
        }
    },
    setup(props, {emit}) {
    },
    methods: {
        syncPowerShifts() {
            axios.put('/characters/' + this.character.id + '/power-shifts', {
                powerShifts: this.character.powerShifts
            });
        }
    },
};
</script>
