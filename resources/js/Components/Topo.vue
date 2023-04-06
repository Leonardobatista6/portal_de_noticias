<script setup>
import NavLink from '@/Components/NavLink.vue'
import {ref} from "vue";

</script>
<template>
    <header aria-label="Site Header" class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="md:flex md:items-center md:gap-12">
                    <a class="block text-teal-600" href="/home">
                        <span class="sr-only">Home</span>
                       logo
                    </a>
                </div>

                <div class="hidden md:block">
                    <nav aria-label="Site Nav">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a
                                    class="fonte-sans sm:text-xl text-slate-600 transition hover:border-2 border-b-red-500"
                                    href="/"
                                >
                                    Inicio
                                </a>
                            </li>

                            <li>
                                <a
                                    class="fonte-sans sm:text-xl text-slate-600 transition hover:border-2 border-b-red-500"
                                    href="/economia"
                                >
                                    Economia
                                </a>
                            </li>

                            <li>
                                <a
                                    class="fonte-sans sm:text-xl text-slate-600 transition hover:border-2 border-b-red-500"
                                    href="/cultura"
                                >
                                    Cultura
                                </a>
                            </li>

                            <li>
                                <a
                                    class="fonte-sans sm:text-xl text-slate-600 transition hover:border-2 border-b-red-500"
                                    href="/nacionais"
                                >
                                    Noticias Nacionais
                                </a>
                            </li>

                            <li>
                                <a
                                    class="fonte-sans sm:text-xl text-slate-600 transition hover:border-2 border-b-red-500"
                                    href="/nacionais"
                                >
                                    Blogueiros
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>

                <div class="flex items-center gap-4">

                    <div class="block md:hidden">
                        <button
                            class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 6h16M4 12h16M4 18h16"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

</template>
