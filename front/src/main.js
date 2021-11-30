import { createApp } from 'vue'
import { createRouter, createWebHistory } from "vue-router";
import App from './App.vue'

/* =================|-IMPORT USER PAGE-|=================*/
import Login from './components/LoginForm/Login.vue' 
import SignUp from './components/SignUp/SignUp.vue'
import MenuBar from './components/MenuBar/MenuBar.vue'

/* =-=-=-=-=-=-=-=-=-=-=-=|--|=-=-=-=-=-=-=-=-=-=-=-= */
const app = createApp(App)
app.component('signin', Login)

const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/', component: Login },
    { path: '/signup', component: SignUp},
    { path: '/menu-bar', component: MenuBar},
  ],
});
  
app.use(router)
app.mount('#app')


