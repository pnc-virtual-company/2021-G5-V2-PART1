import { createApp } from 'vue'
import { createRouter, createWebHistory } from "vue-router";
import App from './App.vue'

/* =================|-IMPORT USER PAGE-|=================*/
import Login from './components/LoginForm/Login.vue' 


import SignUp from './components/SignUp/SignUp.vue'


import MenuBar from './components/MenuBar/MenuBar.vue'


import Event from './components/Event-Page/My-Event-Page.vue'

import AllEvent from './components/Event-Page/All-Event.vue'

import CategoriesView from './components/Categories/CategoriesView.vue'




/* =-=-=-=-=-=-=-=-=-=-=-=|--|=-=-=-=-=-=-=-=-=-=-=-= */
const app = createApp(App)
app.component('signin', Login)

const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/', component: Login },
    { path: '/signup', component: SignUp},
    { path: '/menu-bar', component: MenuBar},
    { path: '/events', component: Event},
    { path: '/all-events', component: AllEvent},
    { path: '/categories', component: CategoriesView},
    
  ],
});
  
app.use(router)
app.mount('#app')



