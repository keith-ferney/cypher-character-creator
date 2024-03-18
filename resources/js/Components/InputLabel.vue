<script setup>
import {ref} from "vue";

defineProps({
    value: {
        type: String,
    },
});

const label = ref(null);
</script>

<template>
    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300"
           ref="label"
    >
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
