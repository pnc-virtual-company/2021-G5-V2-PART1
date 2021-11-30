import { createApp } from 'vue'
import { createRouter, createWebHistory } from "vue-router";
import App from './App.vue'
import Singup from './components/Sign-Up/Singup.vue'



const app = createApp(App);
app.component('sign-up', Singup)



const router = createRouter({
  history: createWebHistory(),
  routes: [
   
  ],
});
app.use(router)
app.mount('#app')
