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
    path: '/my-events',
    name: 'MyEvent',
    component: () => import('@/components/MyEvent.vue')
  },
  {
    path: '/all-events',
    name: 'AllEvent',
    component:() =>import('@/components/pages/all_events.vue')
  },
  {
    path: '/categories',
    name: 'Categories',
    component: () => import('@/components/pages/categories_view.vue')
  },
  {
    path: '/users',
    name: 'Users',
    component: () => import('@/components/pages/users.vue')
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
