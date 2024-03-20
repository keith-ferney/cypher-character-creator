<template>
    <div class="order-12 row-span-4 bg-white w-full flex flex-col border-r-8 border-b-8 border-black px-3 py-2">
        <label class="font-medium w-full text-lg underline-offset-8 mb-4 underline">Power Shifts</label>
        <div class="flex flex-col">
            <label class="text-black flex flex-row gap-1 items-center text-center w-fit px-2 py-1"
                   v-for="powerShift in character.power_shifts"
            >
                <input @change="syncPowerShifts" v-model="powerShift.value" type="number" class="w-5 p-0 text-xs"/>
                <span v-tippy="powerShift.cypher_power_shift.description" class="text-sm">{{ powerShift.cypher_power_shift.name }}</span>
                <div v-if="powerShift.cypher_power_shift.has_healing_checkboxes" class="flex gap-1">
                    <input @change="updateHeartsUsed(powerShift.id,powerShift.heart_1)" v-model="powerShift.heart_1" type="checkbox" />
                    <input @change="updateHeartsUsed(powerShift.id,powerShift.heart_2)" v-model="powerShift.heart_2" type="checkbox" />
                    <input @change="updateHeartsUsed(powerShift.id,powerShift.heart_3)" v-model="powerShift.heart_3" type="checkbox" />
                    <input @change="updateHeartsUsed(powerShift.id,powerShift.heart_4)" v-model="powerShift.heart_4" type="checkbox" />
                    <input @change="updateHeartsUsed(powerShift.id,powerShift.heart_5)" v-model="powerShift.heart_5" type="checkbox" />
                </div>
                <input @change="syncPowerShifts" v-if="powerShift.cypher_power_shift.allows_additional_text" v-model="powerShift.additional_text" type="text" class="w-32 p-0 text-xs"/>
                <span v-if="powerShift.cypher_power_shift.is_per_round">Per Round</span>
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
        props.character.power_shifts.map(powerShift => {
            if(powerShift.hearts_used >= 1) {
                powerShift.heart_1 = true;
            }
            if(powerShift.hearts_used >= 2) {
                powerShift.heart_2 = true;
            }
            if(powerShift.hearts_used >= 3) {
                powerShift.heart_3 = true;
            }
            if(powerShift.hearts_used >= 4) {
                powerShift.heart_4 = true;
            }
            if(powerShift.hearts_used >= 5) {
                powerShift.heart_5 = true;
            }

            return powerShift;
        });
        console.log(props.character.power_shifts);
        return {
            props
        }
    },
    methods: {
        syncPowerShifts() {
            axios.put('/characters/' + this.character.id + '/power-shifts', {
                powerShifts: this.character.power_shifts
            });
        },
        updateHeartsUsed(powerShiftId, value) {
            let powerShift = this.character.power_shifts.find(powerShift => powerShift.id === powerShiftId);

            this.character.power_shifts = this.character.power_shifts.map(powerShift => {
                if(powerShift.id === powerShiftId) {
                    if(value) {
                        powerShift.hearts_used += 1;
                    } else {
                        powerShift.hearts_used -= 1;
                    }

                    if(powerShift.hearts_used >= 1) {
                        powerShift.heart_1 = true;
                    }
                    if(powerShift.hearts_used >= 2) {
                        powerShift.heart_2 = true;
                    }
                    if(powerShift.hearts_used >= 3) {
                        powerShift.heart_3 = true;
                    }
                    if(powerShift.hearts_used >= 4) {
                        powerShift.heart_4 = true;
                    }
                    if(powerShift.hearts_used >= 5) {
                        powerShift.heart_5 = true;
                    }

                }

                return powerShift;
            });



            this.syncPowerShifts();
        }

    },
};
</script>
