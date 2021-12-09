import { createRouter, createWebHistory } from 'vue-router'

// **********************|-ROUTE LINK-|********************** //
const routes = [
  {
    path: '/',
    name: 'Home',
    component: ()=>import('@/views/Home.vue')
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
    component: () => import('../components/AllEvent/AllEvent-View.vue')
  },
  {
    path: '/categories',
    name: 'Categories',
    component: () => import('../components/Categories/CategoriesView.vue')
  },
  {
    path: '/users',
    name: 'Users',
    component: () => import('../components/Users/Users-View.vue')
  },
  {
    path: '/images',
    name: 'Images',
    component: () => import('../components/Images/Images.vue')
  },
  {
    path: '/:catchAll(.*)*',
    name: "PageNotFound",
    component: ()=>import('@/components/pages/404page.vue'),
  },
]

// **********************|-CREATE ROUTE LINK-|********************** //
const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})
export default router
