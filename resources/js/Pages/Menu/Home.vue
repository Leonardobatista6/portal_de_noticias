<script setup>
import Topo from '@/Components/Topo.vue';
import Footer from '@/Components/Footer.vue';
import Dropdown from '@/Components/Dropdown.vue';

</script>
<template>
    <Dropdown></Dropdown>
    <topo></topo>

    <div class="grid sm:grid-cols-4 gap-2 sm:mx-8 sm:py-3bg-gray-50 flex flex-wrap">   <!--inicio das noticias-->

        <div class="col-span-3 px-auto">
            <div class="flex justify-center">
                <h1 class=" sm:text-5xl sm:py-3 hover:text-red-600">Ultimas Notícias</h1>
            </div>

            <div class="grid sm:grid-cols-3 gap-6 pt-4">
                    <div class=""> <!-- anuncios 1 coluna -->
                        <ul class="">
                            <li class="mx-auto drop-shadow-xl hover:bg-gray-50">
                                <a href="#">
                                    <div class="pt-2">
                                        <img src="https://picsum.photos/280/157" class="mx-auto">
                                        <time datetime="2022-10-10" class="block text-xs pl-8 py-2">
                                            10th Oct 2022
                                        </time>
                                    </div>
                                    <h3 class="font-Sans text-left text-gray-900 px-8 hover:text-red-600">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has bee
                                    </h3>
                                </a>
                            </li>

                            <li class="mx-auto drop-shadow-xl hover:bg-gray-50">
                                <a href="--">
                                    <div class="pt-2">
                                        <img src="https://picsum.photos/280/157" class="mx-auto">
                                        <time datetime="2022-10-10" class="block text-xs pl-8 py-2">
                                            10th Oct 2022
                                        </time>
                                    </div>
                                    <h3 class="text-left px-8 hover:text-red-600">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has bee
                                    </h3>
                                </a>
                            </li>

                            <li class="mx-auto drop-shadow-xl hover:bg-gray-50">
                                <a href="--">
                                    <div class="pt-2">
                                        <img src="https://picsum.photos/280/157" class="mx-auto">
                                        <time datetime="2022-10-10" class="block text-xs pl-8 py-2">
                                            10th Oct 2022
                                        </time>
                                    </div>
                                    <h3 class="text-left px-8 hover:text-red-600">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has bee
                                    </h3>
                                </a>
                            </li>
                        </ul>
                    </div> <!--fim da 1 coluna-->
                    <div class=""> <!-- anuncios 2 coluna -->
                        <ul class="">
                            <li class="mx-auto drop-shadow-xl hover:bg-gray-50">
                                <a href="--">
                                    <div class="pt-2">
                                        <img src="https://picsum.photos/id/237/280/157" class="mx-auto">
                                        <time datetime="2022-10-10" class="block text-xs pl-8 py-2">
                                            10th Oct 2022
                                        </time>
                                    </div>
                                    <h3 class="text-left px-8 hover:text-red-600">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has bee
                                    </h3>
                                </a>
                            </li>

                            <li class="mx-auto drop-shadow-xl hover:bg-gray-50">
                                <a href="--">
                                    <div class="pt-2">
                                        <img src="https://picsum.photos/280/157" class="mx-auto">
                                        <time datetime="2022-10-10" class="block text-xs pl-8 py-2">
                                            10th Oct 2022
                                        </time>
                                    </div>
                                    <h3 class="text-left px-8 hover:text-red-600">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has bee
                                    </h3>
                                </a>
                            </li>

                            <li class="mx-auto drop-shadow-xl hover:bg-gray-50">
                                <a href="--">
                                    <div class="pt-2">
                                        <img src="https://picsum.photos/280/157" class="mx-auto">
                                        <time datetime="2022-10-10" class="block text-xs pl-8 py-2">
                                            10th Oct 2022
                                        </time>
                                    </div>
                                    <h3 class="text-left px-8 hover:text-red-600">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has bee
                                    </h3>
                                </a>
                            </li>
                        </ul>
                    </div> <!--fim da 2 coluna-->
                    <div class=""> <!-- inicio anuncios 3 coluna -->
                        <ul>
                            <li class="mx-auto drop-shadow-xl hover:bg-gray-50">
                                <a href="--">
                                    <div class="pt-2">
                                        <img src="https://picsum.photos/seed/picsum/280/157" class="mx-auto">
                                        <time datetime="2022-10-10" class="block text-xs pl-8 py-2">
                                            10th Oct 2022
                                        </time>
                                    </div>
                                    <h3 class="text-left px-8 hover:text-red-600">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has bee
                                    </h3>
                                </a>
                            </li>

                            <li class="mx-auto drop-shadow-xl hover:bg-gray-50">
                                <a href="--">
                                    <div class="pt-2">
                                        <img src="https://picsum.photos/280/157" class="mx-auto">
                                        <time datetime="2022-10-10" class="block text-xs pl-8 py-2">
                                            10th Oct 2022
                                        </time>
                                    </div>
                                    <h3 class="text-left px-8 hover:text-red-600">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has bee
                                    </h3>
                                </a>
                            </li>

                            <li class="mx-auto drop-shadow-xl hover:bg-gray-50">
                                <a href="--">
                                    <div class="pt-2">
                                        <img src="https://picsum.photos/280/157" class="mx-auto">
                                        <time datetime="2022-10-10" class="block text-xs pl-8 py-2">
                                            10th Oct 2022
                                        </time>
                                    </div>
                                    <h3 class="text-left px-8 hover:text-red-600">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has bee
                                    </h3>
                                </a>
                            </li>
                        </ul>
                    </div> <!--fim da 3 coluna-->
            </div>    <!-- parte de noticias -->

        </div>  <!--fim das noticias-->

        <!-- parte de anuncios -->
        <div class="justify-items-center mx-auto sm:justify-center sm:grid-cols-1 sm:border-l-2 border-red-600">

            <h3 class="text-center">Anuncios</h3>
            <img src="https://picsum.photos/300/600" class="mx-auto sm:mx-auto">

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


<style scoped>

</style>
