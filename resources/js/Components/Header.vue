<template>
<header>
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="text-yellow-600 text-2xl">INTIME</span>
            </a>
        </div>
        <div class="lg:flex lg:gap-x-12">
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Man</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Woman</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Categories</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Offers</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">About Us</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Contact</a>
        </div>
        <div class="flex flex-1 justify-end items-center gap-2">
            <Button icon="pi pi-heart" severity="contrast" variant="text" rounded aria-label="Favorite" />
            <Button icon="pi pi-shopping-cart" severity="contrast" variant="text" rounded aria-label="Favorite" />
            <Button v-if="isLoged" icon="pi pi-user" severity="contrast" variant="text" rounded aria-label="Favorite" />
            <a v-if="!isLoged" href="#" class="text-sm/6 font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
        </div>
    </nav>
</header>
</template>
<script setup>
import { Button } from 'primevue';
import { ref } from 'vue';

const isLoged = ref(false);
const user = document.querySelector('head meta[name=data]').getAttribute('value');
if (user != "" || user != null) isLoged.value = true;
</script>
