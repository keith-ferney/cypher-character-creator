<template>
    <div class="order-8 row-span-3 bg-white w-full flex flex-col border-r-8 border-b-8 border-black">
        <table class="w-full">
            <thead>
            <tr>
                <th class="text-left text-2xl">
                    Skills
                </th>
                <th class="text-left w-6" title="This signifies the pool that is drawn from when appling effort for this skill">Pool</th>
                <th class="text-left w-6" title="Power Shift">PS</th>
                <th class="text-left w-24" title="Skill Type">Type</th>
                <th class="text-left w-8" title="Actions"></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="skill in character.skills">
                <td>
                    <input @change="syncSkills" v-model="skill.name" type="text" class="w-full p-0"/>
                </td>
                <td>
                    <select @change="syncSkills" v-model="skill.pool" class="w-full bg-none p-0">
                        <option value="" selected>-</option>
                        <option value="might" title="Might">M</option>
                        <option value="speed" title="Speed">S</option>
                        <option value="intellect" title="Intellect">I</option>
                    </select>
                </td>
                <td>
                    <input @change="syncSkills" v-model="skill.power_shift" type="number" class="w-full p-0"/>
                </td>
                <td>
                    <select @change="syncSkills" v-model="skill.type" class="w-full p-0 bg-none">
                        <option value="" selected>- Type -</option>
                        <option value="trained">Trained</option>
                        <option value="specialized">Specialized</option>
                        <option value="inablility">Inability</option>
                    </select>
                </td>
                <td>
                    <button class="w-full bg-red-600 hover:bg-red-700 text-white text-xl"
                            @click="removeSkill(skill.id)">
                        🗑️
                    </button>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button class="w-full bg-green-600 hover:bg-green-700 text-white text-2xl"
                            @click="addSkill()">
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
    name: 'CharacterSkillsEditor',
    props: {
        character: {
            type: Object,
            required: true
        },
    },
    setup(props, {emit}) {
    },
    methods: {
        addSkill() {
            if (this.character.skills === undefined) {
                this.character.skills = []
            }

            axios.post('/characters/' + this.character.id + '/skills').then(response => {
                this.character.skills.push({
                    id: response.data.skill.id,
                    name: response.data.skill.name,
                    pool: response.data.skill.pool,
                    type: response.data.skill['type']
                });
            });

        },
        removeSkill(skillId) {
            axios.delete('/characters/' + this.character.id + '/skills/' + skillId).then(response => {
                this.character.skills = this.character.skills.filter(skill => skill.id !== skillId);
            })
                .then(() => {
                    this.character.skills = this.character.skills.filter(skill => skill.id !== skillId);
                });
        },
        syncSkills() {
            axios.put('/characters/' + this.character.id + '/skills', {
                skills: this.character.skills
            });
        }

    },
};
</script>
