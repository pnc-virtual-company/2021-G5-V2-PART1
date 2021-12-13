<template>
  <div class="u">
    <Base-search></Base-search>
    <div class="position-relative">

  <div class="position-absolute top-0 start-50 translate-middle-x w-50">
    <section
      class="cate--card row row-cols-1 row-cols-md-2 g-3 m-3"
      v-for="(user, id) in users"
      :key="id"
    > 
      <Base-card v-if="user.email !== email" 
      class="w-100 mt-5"
      >
        <template #card-body class="mt-5">
          <img
            :src="user.image"
            alt=""
            width="90"
            height="90"
            class="profile__picture"
          />
          <h2 class="mb-5 text-white mt-5">{{ user.first_name }}</h2>
        </template>
        <template #card-footer>
          <Base-btn class="btn float-end user--bg">More details</Base-btn>
        </template>
      </Base-card>
    </section>
  </div>
</div>
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
    axios.get("http://127.0.0.1:8000/api/users").then((res) => {
      this.users = res.data;
      console.log(res.data);
    });
    let u = localStorage.getItem("signin");
    this.name = JSON.parse(u);
    this.email = this.name.user.email;
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
.btn {
  background: var(--sidebar-bg-color);
}
.u {
  width: 100%;
  height: 100vh;
}
</style>