import './bootstrap';
import { createApp } from 'vue';
import router from './router';
import Main from './Main.vue';
import PrimeVue from 'primevue/config';
import Aura from '@primevue/themes/aura';
import ToastService from 'primevue/toastservice';

createApp(Main).use(router).use(PrimeVue, {
    theme: {
        preset: Aura
    }
}).use(ToastService).mount('#app')
