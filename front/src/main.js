import { createApp } from 'vue'
import { createRouter, createWebHistory } from "vue-router";
import App from './App.vue'
import Login from './components/LoginForm/Login.vue' 




const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/SignUp', component: SignUp},  
  ],
});


const app = createApp(App);
app.component('sign-in', Login)
app.use(router)

app.mount('#app')


