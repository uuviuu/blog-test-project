import { createWebHistory, createRouter } from "vue-router"
import Home from '@/views/HomeView.vue'

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/register',
        name: 'register',
        component: () => import('@/views/RegisterView.vue'),
    },
    {
        path: '/login',
        name: 'login',
        component: () => import('@/views/LoginView.vue'),
    },
    {
        path: '/profile',
        name: 'profile',
        component: () => import('@/views/ProfileView.vue'),
    },
    {
        path: '/categories',
        name: 'categories',
        component: () => import('@/views/CategoryView.vue'),
    },
    {
        path: '/history',
        name: 'history',
        component: () => import('@/views/HistoryView.vue'),
    },
    {
        path: '/planning',
        name: 'planning',
        component: () => import('@/views/PlanningView.vue'),
    },
    {
        path: '/record',
        name: 'record',
        component: () => import('@/views/RecordView.vue'),
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
})


export default router
