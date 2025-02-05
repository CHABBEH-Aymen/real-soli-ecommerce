import {createRouter, createWebHistory} from "vue-router"

const routes = [{
    path:'/',
    component: ()=> import("./Pages/welcome.vue")
}];

export default createRouter({
    history: createWebHistory(),
    routes,
})