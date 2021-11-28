import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from "vue-router";

/* =================|-IMPORT MENUBAR PAGE-|=================*/
import MenuBar  from './components/Menu_bar/MenuBar.vue'

/* =================|-IMPORT FOOTER PAGE-|=================*/
import Footer from './components/Footers/Footers.vue'

/* =================|-IMPORT EVENT PAGE-|=================*/
import Event from './components/Event-Page/My-Event-Page.vue'

/* =================|-IMPORT ALL EVENT PAGE-|=================*/
import Allevent from './components/Event-Page/All-Event.vue'

/* =================|-IMPORT USER PAGE-|=================*/
import Users from './components/Users/User-View.vue'

/* =================|-IMPORT CATEGORY PAGE-|=================*/
import Categories from './components/Categories/Categories.vue'

/* =================|-IMPORT USER PAGE-|=================*/
// import Users from './components/Users/User-View.vue'

/* =-=-=-=-=-=-=-=-=-=-=-=|--|=-=-=-=-=-=-=-=-=-=-=-= */
const router = createRouter({
    history: createWebHistory(),
    routes: [
      { path: '/menubars', component: MenuBar },
      { path: '/events', component: Event },
      { path: '/all-events', component: Allevent },
      { path: '/categories', component: Categories },
      { path: '/users', component: Users },
    ],
  });

const app = createApp(App)
app.component("menu-bar", MenuBar)
app.component("footer-bar", Footer)
app.component("event-bar", Event)
app.component("all-event-bar", Allevent)
app.component("categories-bar", Categories)
app.component("users-bar", Users)

app.use(router)
app.mount('#app')
