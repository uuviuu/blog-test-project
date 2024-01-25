import {createWebHistory, createRouter} from "vue-router"

const routes = [
  {
    path: '/',
    name: 'home',
    meta: {layout: 'home'},
    component: () => import('@/views/HomeView'),
  },
  {
    path: '/register',
    name: 'register',
    meta: {layout: 'register'},
    component: () => import('@/views/RegisterView'),
  },
  {
    path: '/login',
    name: 'login',
    meta: {layout: 'login'},
    component: () => import('@/views/LoginView'),
  },
  {
    path: '/profile',
    name: 'profile',
    meta: {layout: 'profile'},
    component: () => import('@/views/ProfileView'),
  },
  {
    path: '/categories',
    name: 'categories',
    meta: {layout: 'categories'},
    component: () => import('@/views/CategoryView'),
  },
  {
    path: '/history',
    name: 'history',
    meta: {layout: 'history'},
    component: () => import('@/views/HistoryView'),
  },
  {
    path: '/planning',
    name: 'planning',
    meta: {layout: 'planning'},
    component: () => import('@/views/PlanningView'),
  },
  {
    path: '/record',
    name: 'record',
    meta: {layout: 'record'},
    component: () => import('@/views/RecordView'),
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes: routes,
})


export default router
