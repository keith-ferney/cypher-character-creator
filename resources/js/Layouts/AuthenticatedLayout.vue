<script setup>
import {ref} from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import {Link} from '@inertiajs/vue3';
import theme from "tailwindcss/defaultTheme.js";


function setThemeMode(mode) {
    console.log(mode);
    themeMode = mode;
    localStorage.setItem('themeMode', mode);

    if (mode === 'dark') {
        document.documentElement.classList.add('dark');
    } else if (mode === 'light') {
        document.documentElement.classList.remove('dark');
    } else {
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    }

}

const showingNavigationDropdown = ref(false);
let themeMode = localStorage.getItem('themeMode') || 'system';

if (themeMode === 'system') {
    themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
}

setThemeMode(themeMode);
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 ">
            <nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                    <ApplicationLogo
                                        class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"
                                    />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
<!--                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">-->
<!--                                    Dashboard-->
<!--                                </NavLink>-->
                                <NavLink :href="route('characters.index')" :active="route().current('characters.index')">
                                   Characters
                                </NavLink>
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <!-- Settings Dropdown -->
                            <div class="ms-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                                            >
                                                {{ $page.props.auth.user.name }}

                                                <svg
                                                    class="ms-2 -me-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('profile.edit')"></DropdownLink>
                                        <DropdownLink :href="route('profile.edit')"> Profile</DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>

                            <div class="ms-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                    id="headlessui-listbox-button-:R19kcr6:"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-headlessui-state=""
                                                    aria-labelledby="headlessui-listbox-label-:Rpkcr6: headlessui-listbox-button-:R19kcr6:">
                                                <span
                                                    class="dark:hidden">
                                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round" class="w-6 h-6">
                                            <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                                  class="stroke-slate-400 dark:stroke-slate-500">
                                            </path>
                                            <path
                                                d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836"
                                                class="stroke-slate-400 dark:stroke-slate-500">
                                            </path>
                                            </svg>
                                            </span>
                                            <span class="hidden dark:inline">
                                            <svg
                                                viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M17.715 15.15A6.5 6.5 0 0 1 9 6.035C6.106 6.922 4 9.645 4 12.867c0 3.94 3.153 7.136 7.042 7.136 3.101 0 5.734-2.032 6.673-4.853Z"
                                                  class="fill-transparent">
                                            </path>
                                            <path
                                                d="m17.715 15.15.95.316a1 1 0 0 0-1.445-1.185l.495.869ZM9 6.035l.846.534a1 1 0 0 0-1.14-1.49L9 6.035Zm8.221 8.246a5.47 5.47 0 0 1-2.72.718v2a7.47 7.47 0 0 0 3.71-.98l-.99-1.738Zm-2.72.718A5.5 5.5 0 0 1 9 9.5H7a7.5 7.5 0 0 0 7.5 7.5v-2ZM9 9.5c0-1.079.31-2.082.845-2.93L8.153 5.5A7.47 7.47 0 0 0 7 9.5h2Zm-4 3.368C5 10.089 6.815 7.75 9.292 6.99L8.706 5.08C5.397 6.094 3 9.201 3 12.867h2Zm6.042 6.136C7.718 19.003 5 16.268 5 12.867H3c0 4.48 3.588 8.136 8.042 8.136v-2Zm5.725-4.17c-.81 2.433-3.074 4.17-5.725 4.17v2c3.552 0 6.553-2.327 7.622-5.537l-1.897-.632Z"
                                                class="fill-slate-400 dark:fill-slate-500">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M17 3a1 1 0 0 1 1 1 2 2 0 0 0 2 2 1 1 0 1 1 0 2 2 2 0 0 0-2 2 1 1 0 1 1-2 0 2 2 0 0 0-2-2 1 1 0 1 1 0-2 2 2 0 0 0 2-2 1 1 0 0 1 1-1Z"
                                                  class="fill-slate-400 dark:fill-slate-500">
                                            </path>
                                            </svg>
                                            </span>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content class="bg-white rounded-lg ring-1 ring-slate-900/10 shadow-lg overflow-hidden  dark:bg-slate-800 w-36 py-1 mt-8">
                                        <ul class="text-sm text-slate-700 font-semibold dark:ring-0 dark:highlight-white/5 dark:text-slate-300"
                                            aria-labelledby="headlessui-listbox-label-:Rpkcr6:"
                                            aria-orientation="vertical"
                                            id="headlessui-listbox-options-:R1pkcr6:"
                                            role="listbox"
                                            tabindex="0"
                                            data-headlessui-state="open">
                                            <li class="py-1 px-2 flex items-center cursor-pointer"
                                                id="headlessui-listbox-option-:r9:" role="option" tabindex="-1"
                                                aria-selected="false" data-headlessui-state=""
                                                @click="setThemeMode('light')"
                                            >
                                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     class="w-6 h-6 mr-2">
                                                    <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                                          class="stroke-slate-400 dark:stroke-slate-500"></path>
                                                    <path
                                                        d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836"
                                                        class="stroke-slate-400 dark:stroke-slate-500"></path>
                                                </svg>
                                                Light
                                            </li>
                                            <li class="py-1 px-2 flex items-center cursor-pointer"
                                                id="headlessui-listbox-option-:ra:" role="option" tabindex="-1"
                                                aria-selected="false" data-headlessui-state=""
                                                @click="setThemeMode('dark')"
                                            >
                                                <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6 mr-2">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M17.715 15.15A6.5 6.5 0 0 1 9 6.035C6.106 6.922 4 9.645 4 12.867c0 3.94 3.153 7.136 7.042 7.136 3.101 0 5.734-2.032 6.673-4.853Z"
                                                          class="fill-transparent">
                                                    </path>
                                                    <path
                                                        d="m17.715 15.15.95.316a1 1 0 0 0-1.445-1.185l.495.869ZM9 6.035l.846.534a1 1 0 0 0-1.14-1.49L9 6.035Zm8.221 8.246a5.47 5.47 0 0 1-2.72.718v2a7.47 7.47 0 0 0 3.71-.98l-.99-1.738Zm-2.72.718A5.5 5.5 0 0 1 9 9.5H7a7.5 7.5 0 0 0 7.5 7.5v-2ZM9 9.5c0-1.079.31-2.082.845-2.93L8.153 5.5A7.47 7.47 0 0 0 7 9.5h2Zm-4 3.368C5 10.089 6.815 7.75 9.292 6.99L8.706 5.08C5.397 6.094 3 9.201 3 12.867h2Zm6.042 6.136C7.718 19.003 5 16.268 5 12.867H3c0 4.48 3.588 8.136 8.042 8.136v-2Zm5.725-4.17c-.81 2.433-3.074 4.17-5.725 4.17v2c3.552 0 6.553-2.327 7.622-5.537l-1.897-.632Z"
                                                        class="fill-slate-400 dark:fill-slate-500">
                                                    </path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M17 3a1 1 0 0 1 1 1 2 2 0 0 0 2 2 1 1 0 1 1 0 2 2 2 0 0 0-2 2 1 1 0 1 1-2 0 2 2 0 0 0-2-2 1 1 0 1 1 0-2 2 2 0 0 0 2-2 1 1 0 0 1 1-1Z"
                                                          class="fill-slate-400 dark:fill-slate-500">
                                                    </path>
                                                </svg>
                                                Dark
                                            </li>
                                            <li class="py-1 px-2 flex items-center cursor-pointer text-sky-500"
                                                id="headlessui-listbox-option-:rb:" role="option" tabindex="-1"
                                                aria-selected="true" data-headlessui-state="selected"
                                                @click="setThemeMode('system')"
                                            >
                                                <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6 mr-2">
                                                    <path
                                                        d="M4 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6Z"
                                                        stroke-width="2" stroke-linejoin="round"
                                                        class="stroke-sky-500 fill-sky-400/20">
                                                    </path>
                                                    <path d="M14 15c0 3 2 5 2 5H8s2-2 2-5" stroke-width="2"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          class="stroke-sky-500">
                                                    </path>
                                                </svg>
                                                System
                                            </li>
                                        </ul>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center sm:hidden">
                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out"
                            >
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="sm:hidden"
                >
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('characters.index')" :active="route().current('characters.index')">
                           Characters
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800 dark:text-gray-200">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="font-medium text-sm text-gray-500">{{ $page.props.auth.user.email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('profile.edit')"> Profile</ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white dark:bg-gray-800 shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header"/>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot/>
            </main>
        </div>
    </div>
</template>
