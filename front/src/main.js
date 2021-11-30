import { createApp } from 'vue'
// import { createRouter, createWebHistory } from "vue-router";
import App from './App.vue'

import Signup from './components/Sign-Up/Singup.vue'


const app = createApp(App);
app.component('sign-up', Signup)


app.mount('#app')


