import {createRouter, createWebHistory} from "vue-router"


const routes = [
    {
    path:'/',
    component: ()=> import("./Pages/Welcome.vue")},
    {
        path:'/basket',
        component: () => import("./Pages/Basket.vue"),
    }

];

export default createRouter({
    history: createWebHistory(),
    routes,
})
