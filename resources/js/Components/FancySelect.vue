<template>
    <div class="w-full">
        <div class="mt-1 relative w-full">
            <div
                class="border rounded py-2 px-4 bg-white whitespace-nowrap cursor-pointer w-full flex justify-between items-center"
                :class="[showSelect ? 'rounded-b-none' : 'rounded-b']"
                @click="showSelect = !showSelect; focusSearch()"
                @keydown.space.prevent="showSelect = !showSelect; focusSearch()"
                tabindex="0"
            >
                {{ selected ? selected[labelKey] : placeholder }}

                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                     :class="{ 'transform -rotate-90': showSelect }">
                    <path fill-rule="evenodd"
                          d="M10 12.586l-4.293-4.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0l5-5a1 1 0 10-1.414-1.414L10 12.586z"
                          clip-rule="evenodd"></path>
                </svg>
            </div>

            <div class="absolute w-full cursor-pointer border rounded-b bg-white overflow-y-scroll h-96 z-50"
                 v-show="showSelect">
                <!-- New search input field -->
                <div>
                    <input type="text" class="form-control w-full"
                           v-model="searchTerm"
                           @keydown.up.prevent="onArrowUp"
                           @keydown.down.prevent="onArrowDown"
                           @keydown.enter.prevent="onEnter"
                           placeholder="Search..."
                           ref="searchInput">
                </div>

                <div v-for="(option, index) in filteredOptions" :key="index" class="p-2 hover:bg-blue-100"
                     @click="selected = option; showSelect = false"
                     @keydown.up.prevent="onArrowUp"
                     @keydown.down.prevent="onArrowDown"
                     @keydown.enter.prevent="selected = hoveredOption; showSelect = false"
                     :class="{ 'bg-gray-200': option === hoveredOption }"
                     :data-hovered="hoveredOption === option"
                     @mouseover="hoveredOption = option"
                     v-tippy="{ content: '<div style=\'max-height: 90vh; overflow-y: scroll;\'>'+option[descriptionKey]+'</div>', theme: 'light-border', arrow: true, placement: 'right', maxWidth: 500, interactive: true , appendTo: this.$el }"
                >
                    {{ option[labelKey] }}
                </div>
            </div>

            <!-- Hidden form input -->
            <select v-model="selected[valueKey]" name="selectedValue" hidden>
                <option v-for="(option, index) in options" :key="index" :value="option[valueKey]">
                    {{ option[labelKey] }}
                </option>
            </select>
        </div>
    </div>
</template>

<script>
import {ref, computed, watch} from 'vue';
import {tippy} from "vue-tippy";

export default {
    name: 'FancySelect',
    props: {
        options: {
            type: Array,
            required: true
        },
        modelValue: {
            type: [String, Number],
            default: ''
        },
        valueKey: {
            type: String,
            default: 'value'
        },
        labelKey: {
            type: String,
            default: 'label'
        },
        placeholder: {
            type: String,
            default: '- Select -'
        },
        descriptionKey: {
            type: String,
            default: 'description'
        },
    },
    setup(props, {emit}) {
        const selected = ref(props.modelValue ? props.options.find(option => option[props.valueKey] === props.modelValue) : '');
        const showSelect = ref(false);
        const searchTerm = ref('');
        const hoveredOption = ref(null);

        watch(() => props.modelValue, (newValue) => {
            selected.value = props.options.find(option => option[props.valueKey] === newValue);
        });


        return {selected, showSelect, searchTerm, hoveredOption};
    },
    computed: {
        filteredOptions() {
            if (!Array.isArray(this.options)) {
                return [];
            }
            return this.options.filter(option => option[this.labelKey].toLowerCase().includes(this.searchTerm.toLowerCase()));
        }
    },
    methods: {
        focusSearch() {
            setTimeout(() => {
                this.$refs.searchInput.focus();
            });
        },

        onArrowUp() {
            if (!this.hoveredOption) {
                this.hoveredOption = this.filteredOptions[0];
            }

            const i = this.filteredOptions.indexOf(this.hoveredOption);
            if (i > 0) {
                this.hoveredOption = this.filteredOptions[i - 1];

                this.$nextTick(() => {
                    const hoveredElement = this.$el.querySelector(`[data-hovered="true"]`);
                    if (hoveredElement) {
                        hoveredElement.scrollIntoView({block: "end", behavior: "smooth"});
                        hoveredElement._tippy.show();
                        hoveredElement.focus();
                    }

                    const otherElements = this.$el.querySelectorAll(`[data-hovered="false"]`);
                    otherElements.forEach(element => {
                        element._tippy.hide();
                    });
                });
            }
        },

        onArrowDown() {
            let isInitial = false;
            if (!this.hoveredOption) {
                this.hoveredOption = this.filteredOptions[0];
                isInitial = true;

            }
            const i = this.filteredOptions.indexOf(this.hoveredOption);
            if (i < this.filteredOptions.length - 1) {
                this.hoveredOption = this.filteredOptions[i + (isInitial ? 0 : 1)];


                this.$nextTick(() => {
                    const hoveredElement = this.$el.querySelector(`[data-hovered="true"]`);
                    if (hoveredElement) {
                        hoveredElement.scrollIntoView({block: "end", behavior: "smooth"});
                        hoveredElement._tippy.show();
                        hoveredElement.focus();
                    }

                    const otherElements = this.$el.querySelectorAll(`[data-hovered="false"]`);
                    otherElements.forEach(element => {
                        element._tippy.hide();
                    });
                });
            }
        },
        onEnter() {
            const hoveredElement = this.$el.querySelector(`[data-hovered="true"]`);

            if (hoveredElement) {
                hoveredElement._tippy.hide();
            }

            this.selected = this.hoveredOption;
            this.showSelect = false;
        }
    },
    watch: {
        selected(newVal) {
            console.log(newVal, this.valueKey, newVal[this.valueKey]);
            this.$emit('update:modelValue', newVal[this.valueKey]);
        },
        searchTerm() {
            this.hoveredOption = this.filteredOptions[0];
        }
    }
};
</script>
