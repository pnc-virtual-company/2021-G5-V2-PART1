import { createApp } from 'vue'
import { createRouter, createWebHistory } from "vue-router";
import App from './App.vue'
import login from './components/LoginForm/login.vue'
const app = createApp(App);
app.component('login', login);
const router = createRouter({
  history: createWebHistory(),
  routes: [
    {path: '/', component:login},
  ],
});

app.use(router)
app.mount("#app")

