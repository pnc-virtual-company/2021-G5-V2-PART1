import { createApp } from 'vue'
import App from './App.vue'
<<<<<<< HEAD
import SignUp from './components/Sign-Up/SignUp.vue'
import SignIn from "./components/Sign-Up/SignIn.vue"



const app = createApp(App);
app.component('sign-up', SignUp)
app.component('sign-in', SignIn)
=======
// import 'bootstrap/dist/css/bootstrap.min.css'
import LoginFormed from "./components/LoginForm/login.vue";

const app = createApp(App);

app.component("login-form", LoginFormed);
>>>>>>> 955ee8c69a89ec1b5ca4a591353860c2324308a0
app.mount('#app')
