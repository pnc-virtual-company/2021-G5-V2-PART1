<script>
import SidebarLink from "./SidebarLink";
import { collapsed, toggleSidebar, sidebarWidth } from "./state";

export default {
  setup() {
    return { collapsed, toggleSidebar, sidebarWidth };
  },
  data() {
    return {
      name: null
    }
  },
  props: {},
  emits: ["user_signout"],
  components: { SidebarLink },
  methods: {
    signout() {
      localStorage.removeItem("login");
      window.location.reload();
      window.location.href = "/login";
    },
  },
  mounted() {
    let u = localStorage.getItem('login');
      let us = JSON.parse(u)
     this.name = us.user.first_name;
  },
};
</script>

<template>
  <div class="sidebar" :style="{ width: sidebarWidth }">
    <h1>
      <span v-if="collapsed">
        <img src="@/assets/man_icon.png" alt="username" />
      </span>
      <span v-else>
        <h2>{{name}}</h2>
      </span>
    </h1>

    <SidebarLink to="/home" icon="fas fa-home">Home</SidebarLink>
    <SidebarLink to="/my-event" icon="fas fa-calendar">My Event</SidebarLink>
    <SidebarLink to="/all-event" icon="far fa-calendar-plus"
      >All Event</SidebarLink
    >
    <SidebarLink to="/categories" icon="fas fa-calendar-times">
      Categories
    </SidebarLink>
    <SidebarLink to="/users" icon="fas fa-user">Users</SidebarLink>
    <SidebarLink to="/members" icon="fas fa-users">Member</SidebarLink>
    <SidebarLink to="/actions" icon="fas fa-cogs">Action</SidebarLink>
    <SidebarLink to="/images" icon="fas fa-image">Images</SidebarLink>
    <SidebarLink to="/" icon="fas fa-sign-out-alt" @click="signout()"
      >Sign Out</SidebarLink
    >
    <span
      class="collapse-icon"
      :class="{ 'rotate-180': collapsed }"
      @click="toggleSidebar"
    >
      <i class="fas fa-angle-double-left" />
    </span>
  </div>
</template>

<style>
:root {
  --sidebar-bg-color: #004f6c;
  --sidebar-item-active: #006d95;
  --sidebar-item-hover: #005c7d;
  --sidebar-item-header: #20de20;
}
</style>

<style scoped>
.sidebar {
  color: white;
  background-color: var(--sidebar-bg-color);
  float: left;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  bottom: 0;
  padding: 0.5em;
  transition: 0.3s ease;
  display: flex;
  flex-direction: column;
  width: 25%;
  font-family: "Roboto Slab", serif;
}
.sidebar img {
  width: 70px;
  height: 70px;
}
.sidebar h1 {
  height: 2.5em;
  font-size: 30px;
  font-family: "Roboto Slab", serif;
  font-weight: 800;
}

.collapse-icon {
  position: absolute;
  bottom: 0;
  padding: 0.75em;
  color: rgba(255, 255, 255, 0.7);
  transition: 0.2s linear;
}

.rotate-180 {
  transform: rotate(180deg);
  transition: 0.2s linear;
}
</style>
