<template>
    <ul>
      <li>
        <router-link to="/menubars"
          ><i class="fa fa-home" aria-hidden="true"></i> Dashboard
        </router-link>
      </li>
      <li>
        <router-link to="/events"
          ><i class="fa fa-calendar" aria-hidden="true"></i> My Event
        </router-link>
      </li>
      <li>
        <router-link to="/all-events"
          ><i class="fa fa-users" aria-hidden="true"></i> All Event</router-link
        >
      </li>
      <li>
        <router-link to="/categories"
          ><i class="fa fa-calendar-times" aria-hidden="true"></i>
          Categories</router-link
        >
      </li>
      <li>
        <router-link to="/"
          ><i class="fa fa-users" aria-hidden="true"></i> Members</router-link
        >
      </li>
      <li>
        <router-link to="/users"
          ><i class="fa fa-users" aria-hidden="true"></i> Users</router-link
        >
      </li>
      <li>
        <router-link to="/"
          ><i class="fa fa-address-book" aria-hidden="true"></i>
          Actions
        </router-link>
      </li>
    </ul>
</template>



<style scoped>
ul {
  width: 200px;
  background: rgb(61, 158, 110);
}
</style>