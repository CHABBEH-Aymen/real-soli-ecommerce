<script setup>
import { Button } from 'primevue';
import {ref} from 'vue';

const {icon , options} = defineProps(['options', 'icon']);
const isOpen = ref(false);
console.log(icon, options);
</script>
<template>
    <div class="relative">
        <Button @click="isOpen = !isOpen" :icon="icon" severity="contrast" variant="text" rounded/>
        <div v-if="isOpen" class="absolute flex flex-col w-max bg-white rounded-md -left-32">
            <Button v-for="(option, index) in options" :key="index" :label="option.label" severity="secondary" variant="text" class="w-max" :icon="option.icon" @click="option.onClick"/>
        </div>
    </div>
</template>
