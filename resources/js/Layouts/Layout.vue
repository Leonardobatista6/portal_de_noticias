<script setup>
import Topo from '@/Components/Topo.vue';
import Footer from '@/Components/Footer.vue';
</script>


<template>

    <topo></topo>
    <div class="sm:grid grid-cols-4 gap-2 sm:mx-8 sm:py-3bg-gray-50 sm:flex flex-wrap">

        <div class="col-span-3">

        </div>


    <!-- parte de anuncios -->
        <div class="justify-items-center pt-4 mx-auto sm:justify-center sm:grid-cols-1 sm:border-l-2 border-red-600">
            <div class="grid justify-items-center">
                <h3 class="text-center mx-auto ">Anuncios</h3>
                <img src="https://picsum.photos/300/600" class="mx-auto">
            </div>

            <div class="justify-center pl-4">   <!-- inicio Noticias mais lindas -->
                <H2 class="justify-center text-center pt-4 font-sans text-lg"> Mais Lidas</H2>
                <hr class="border-red-600 pr-10 pb-1">
                <ul class="list-decimal list-outside px-9 text-center">
                    <li class="py-2 text-red-600">
                        <a href="#">
                            <h3 class="hover:text-red-600">
                                <span class="list-marker text-gray-900 hover:text-red-600">scrambled it to make a type specimen book. It has</span>
                            </h3>
                        </a>
                    </li>

                    <li class="py-2 text-red-600">
                        <a href="#">
                            <h3 class="hover:text-red-600">
                                <span class="list-marker text-gray-900 hover:text-red-600">scrambled it to make a type specimen book. It has</span>
                            </h3>
                        </a>
                    </li>

                    <li class="py-2 text-red-600">
                        <a href="#">
                            <h3 class="hover:text-red-600">
                                <span class="list-marker text-gray-900 hover:text-red-600">scrambled it to make a type specimen book. It has</span>
                            </h3>
                        </a>
                    </li>

                    <li class="py-2 text-red-600">
                        <a href="#">
                            <h3 class="hover:text-red-600">
                                <span class="list-marker text-gray-900 hover:text-red-600">scrambled it to make a type specimen book. It has</span>
                            </h3>
                        </a>
                    </li>

                    <li class="py-2 text-red-600">
                        <a href="#">
                            <h3 class="hover:text-red-600">
                                <span class="list-marker text-gray-900 hover:text-red-600">scrambled it to make a type specimen book. It has</span>
                            </h3>
                        </a>
                    </li>

                    <li class="py-2 text-red-600">
                        <a href="#">
                            <h3 class="hover:text-red-600">
                                <span class="list-marker text-gray-900 hover:text-red-600">scrambled it to make a type specimen book. It has</span>
                            </h3>
                        </a>
                    </li>

                    <li class="py-2 text-red-600">
                        <a href="#">
                            <h3 class="hover:text-red-600">
                                <span class="list-marker text-gray-900 hover:text-red-600">scrambled it to make a type specimen book. It has</span>
                            </h3>
                        </a>
                    </li>

                </ul>

            </div> <!-- fim Noticias mais lindas -->
        </div>

    </div>

    <br>
    <Footer></Footer>


</template>

