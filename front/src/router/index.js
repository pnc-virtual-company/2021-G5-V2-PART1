import { createRouter, createWebHistory } from 'vue-router'
import Login from '@/components/LoginForm/login'


const routes = [
  {
    path: '/',
    name: 'Login',
    component: Login
  },
  {
    path: '/home',
    name: 'Home',
    component: ()=>import('@/views/Home.vue')
  },

  {
    path: '/my-event',
    name: 'MyEvent',
    component: () => import('../components/MyEvent.vue')
  },
  {
    path: '/all-event',
    name: 'AllEvent',
    component: () => import('../components/AllEvent/AllEvent.vue')
  },
  {
    path: '/categories',
    name: 'Categories',
    component: () => import('../components/Categories/CategoriesView.vue')
  },
  {
    path: '/users',
    name: 'Users',
    component: () => import('../components/Users/Users.vue')
  },
  {
    path: '/members',
    name: 'Members',
    component: () => import('../components/Members/Member.vue')
  },
  {
    path: '/actions',
    name: 'Actions',
    component: () => import('../components/Actions/Actions.vue')
  },
  {
    path: '/images',
    name: 'Images',
    component: () => import('../components/Images/Images.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
