<script setup>
import NavLink from '@/Components/NavLink.vue'
import {ref} from "vue";

</script>
<template>


    <div class="py-3.5 px-6 shadow md:flex justify-between items-center">
        <div class="flex items-center">
            <span class="md:hidden block h-10"> <ion-icon name="menu-outline"></ion-icon>
            logo
            </span>
        </div>
        <nav class="bg-gray-100 border-b px-6 shadow md:flex md:items-center h-20">
            <!-- Primary Navigation Menu -->

            <!-- Navigation Links -->
            <div class="bg-indigo-100 z-[-1] md:static absolute w-full">
                <NavLink :href="route('home')" :active="route().current('home')">
                    <h2 class="Font-Sans text-base"> Inicio</h2>
                </NavLink>
                <NavLink :href="route('esportes')" :active="route().current('esportes')">
                    <h2 class="Font-Sans text-base"> Esportes</h2>
                </NavLink>
                <NavLink :href="route('economia')" :active="route().current('economia')">
                    <h2 class="Font-Sans text-base"> Economia</h2>
                </NavLink>
                <NavLink :href="route('cultura')" :active="route().current('cultura')">
                    <h2 class="Font-Sans text-base"> Cultura</h2>
                </NavLink>
                <NavLink :href="route('nacionais')" :active="route().current('nacionais')">
                    <h2 class="Font-Sans text-base"> Noticias Nacionais</h2>
                </NavLink>
            </div>

        </nav>

    </div>

</template>
