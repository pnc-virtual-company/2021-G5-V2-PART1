<template>
  <div class="u">
        <Base-search>
      <input
        class="form-control me-2"
        type="search"
        placeholder="Search..."
        v-model="search_user"
      />
      <Base-btn class="btn search--btn text-white">Search</Base-btn>
    </Base-search>

    <div class="cate--card row row-cols-1 row-cols-md-1 g-3 m-3 w-75 m-auto">
    <section
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
            width="110"
            height="110"
            class="profile__picture"
          />
          <div class="user mt-5">
          <h3 class="text-white"><i class="fas fa-user mx-2 mb-3"></i> {{ user.first_name }} {{user.last_name}}</h3>
          <h3 class="text-white"><i class="fas fa-envelope mx-2 mb-3"></i> {{ user.email }}</h3>
          <h3 class="text-white"><i class="fas fa-birthday-cake mx-2"></i> {{ user.date_of_birth }}</h3>

          </div>
        </template>
        <template #card-footer>
          <Base-btn class="btn float-end bg-warning">More details</Base-btn>
        </template>
      </Base-card>
      
    </section>

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
  transform: translate(-20%, -60%);
  border-radius: 50%;
  border: 6px solid var(--sidebar-item-active);
  background: #fff;
}
.search--btn {
  background: var(--sidebar-item-active);
}
</style>