import { createApp } from 'vue'
import App from './App.vue'
import router from './router' 

import pnc from '@/components/ui/pnc.vue'
import base_btn from '@/components/ui/base_btn.vue'
import warning from '@/components/ui/base_warning.vue'
import start_page from '@/components/pages/start_page.vue'
import signin from '@/components/pages/signin.vue'
import signup from '@/components/pages/signup.vue'
/* =-=-=-=-=-=-=-=-=-=-=-=|--|=-=-=-=-=-=-=-=-=-=-=-= */
const app = createApp(App)

app.component('base-pnc', pnc)
app.component('Base-warning', warning)
app.component('Base-btn', base_btn)
app.component('start-page', start_page)
app.component('signin-form', signin)
app.component('signup-form', signup)

app.use(router)
app.mount('#app')



