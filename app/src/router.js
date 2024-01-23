import { createWebHistory, createRouter } from "vue-router"
import Home from '@/views/HomeView.vue'

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/login',
        name: 'login',
        component: () => import('@/views/LoginView.vue'),
    },
    {
        path: '/categories',
        name: 'categories',
        component: () => import('@/views/CategoryView.vue'),
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
})


export default router
