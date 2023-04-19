<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';

import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css'

</script>

<template>
    <AppLayout title="Dashboard">

        <div class="flex flex-col ">
            <div class="justify-center mx-auto mt-6">
                <quill-editor theme="snow" toolbar="full"></quill-editor>
                <a
                    class="inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                    href="/download"
                >
                    Publicar
                </a>
            </div>
        </div>

    </AppLayout>
</template>

<script>

</script>
