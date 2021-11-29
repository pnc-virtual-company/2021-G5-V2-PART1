import { createApp } from 'vue'
import App from './App.vue'

import SignUp from './components/Sign-Up/SignUp.vue'
import SignIn from "./components/Sign-Up/SignIn.vue"
import LoginFormed from "./components/LoginForm/login.vue";


const app = createApp(App);
app.component('sign-up', SignUp)
app.component('sign-in', SignIn)
app.component("login-form", LoginFormed);


app.mount('#app')


