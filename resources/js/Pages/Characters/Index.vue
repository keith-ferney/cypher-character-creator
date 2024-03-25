<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";

const props = defineProps(['characters']);
console.log(props.characters);
</script>

<template>
    <Head title="User Profile"/>

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Your Characters
                </h2>

                <ResponsiveNavLink class="!w-fit" :href="route('characters.create')" :active="route().current('characters.create')">
                    Create Character
                </ResponsiveNavLink>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- A list of all the Characters: name, descriptor, type, focus, flavor-->

                    <table
                        class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 flex lg:table"
                    >
                        <thead class="bg-gray-50 dark:bg-gray-800 hidden lg:table-header-group">
                        <tr>
                            <th
                                scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider"
                            >
                                Name
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider"
                            >
                                Descriptor
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider"
                            >
                                Type
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider"
                            >
                                Focus
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider"
                            >
                                Flavor
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider"
                            >
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700 flex flex-col lg:table-row-group">
                        <tr v-for="character in characters" class="flex flex-col">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900 dark:text-gray-200 flex flex-wrap">
                                    <span class="lg:hidden">Name: </span>
                                    {{ character.name }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    <span class="lg:hidden">Descriptor: </span>
                                    {{ character.cypher_descriptor?.name ?? 'None' }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    <span class="lg:hidden">Type: </span>
                                    {{ character.cypher_type?.name ?? 'None'}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    <span class="lg:hidden">Focus: </span>
                                    {{ character.cypher_focus?.name ?? 'None' }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    <span class="lg:hidden">Flavor: </span>
                                    {{ character.cypher_flavor?.name ?? 'None'}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <ResponsiveNavLink
                                    :href="route('characters.show', character.id)"
                                    :active="route().current('characters.show')"
                                >
                                    View
                                </ResponsiveNavLink>
                                <ResponsiveNavLink
                                    :href="route('characters.edit', character.id)"
                                    :active="route().current('characters.edit')"
                                >
                                    Edit
                                </ResponsiveNavLink>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
