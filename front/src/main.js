import { createApp } from 'vue'
import App from './App.vue'
// import 'bootstrap/dist/css/bootstrap.min.css'
import LoginFormed from "./components/LoginForm/login.vue";



const app = createApp(App);

app.component("login-form", LoginFormed);


app.mount('#app')
