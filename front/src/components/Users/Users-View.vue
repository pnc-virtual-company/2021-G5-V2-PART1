<template>
  <section>
    <!--========================|-NAVBAR SEARCH-|=======================-->
    <nav class="navbar">
      <div class="container-fluid">
        <form class="d-flex">
          <input
            class="form-control me-2"
            type="text"
            placeholder="Search"
            aria-label="Search"
            v-model="user_name"
            v-on:keyup.prevent="userName"
          />
          <button
            class="btn btn-warning"
            type="button"
            v-on:click.prevent="userName"
          >
            <img src="@/assets/search_searching_icon.png" />
          </button>
        </form>
      </div>
    </nav>

    <!--========================|-CARD STYLE-|=======================-->
    <users-card v-for="user of Users" :key="user.id" :user="user"></users-card>
  </section>
</template>

<script>
// ~~~~~~~~~~~~~~~~~~~~~~|-IMPORT AXIOS-|~~~~~~~~~~~~~~~~~~~~~~ //
import axios from "axios";

// ~~~~~~~~~~~~~~~~~~~~~~|-IMPORT USER CARD-|~~~~~~~~~~~~~~~~~~~~~~ //
import UsersCard from "./Users-Card.vue";

// ~~~~~~~~~~~~~~~~~~~~~~|-USERS URL-|~~~~~~~~~~~~~~~~~~~~~~ //
const Users_URL = "http://127.0.0.1:8000/api/users";

export default {
  components: {
    "users-card": UsersCard,
  },
  data() {
    return {
      Users: [],
      user_name: "",
    };
  },
  methods: {
    // **************|-GET USERS-|************** //
    getUsers() {
      axios.get(Users_URL).then((res) => {
        this.Users = res.data;
      });
    },

    // **************|-SEARCH USER-|************** //
    userName() {
      if (this.user_name !== "") {
        axios.get(Users_URL + "/search/" + this.user_name).then((res) => {
          this.Users = res.data;
          console.log(res.data);
        });
      } else {
        this.getUsers();
      }
    },
  },
  // **************|-MOUNTED-|************** //
  mounted() {
    this.getUsers();
    this.userName();
  },
};
</script>
<!--========================|-STYLE CSS-|=======================-->
<style scoped>
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-NAVBAR BAR SEARCH STYLE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.navbar {
  background: #066588;
}
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-BG LINEAR GRADIENT-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.btn img {
  width: 30px;
  height: 30px;
}
</style>