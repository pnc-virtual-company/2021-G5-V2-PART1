<template>
  <div>
    <Base-search></Base-search>
    <section class="cate--card row row-cols-1 row-cols-md-2 g-3 m-2">
      <Base-card
        v-for="user of users" :key="user.id"
        class="mt-5"
      >
        <template #card-body class="mt-5">
          <img alt="user" :src="user.image" width="90" height="90" class="profile__picture" />
          <h2 class="mb-5 text-white mt-5">{{user.first_name}}</h2>
        </template>

        <template #card-footer>
          <Base-btn class="btn btn-warning float-end user--bg">More details</Base-btn>
        </template>
      </Base-card>
    </section>
  </div>
</template>



<script>
import axios from "axios";
export default {
  data() {
    return {
      users: [],
      name: null,
      email: null,
    };
  },
  mounted() {
    let u = localStorage.getItem("signin");
    this.name = JSON.parse(u);
    this.email = this.name.user.email;
    axios.get("http://127.0.0.1:8000/api/users").then((res) => {
      res.data.forEach(element => {
        if(element.email !== this.email){
          this.users.push(element)
        }
      });
    });
  },
};
</script>

<style scoped>
.card .profile__picture {
  position: absolute;
  left: 50%;
  transform: translate(-50%, -60%);
  border-radius: 50%;
  border: 6px solid var(--sidebar-item-active);
  background: #fff;
}
</style>