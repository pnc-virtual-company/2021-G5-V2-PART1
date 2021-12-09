import { createApp } from 'vue'
import App from './App.vue'
import router from './router' 
import login from '@/components/LoginForm/login.vue'
import singup from '@/components/SignUp/SignUp.vue'
/* =-=-=-=-=-=-=-=-=-=-=-=|--|=-=-=-=-=-=-=-=-=-=-=-= */
const app = createApp(App)
app.component('signin-form', login)
app.component('signup-form', singup)
app.use(router)
app.mount('#app')



