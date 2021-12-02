<template>
  <form class="form" @submit.prevent>
    <div class="img m-auto w-25">
      <img src="../../assets/logo-pnc.png" alt="" class="w-100" />
    </div>
    <div class="h6">
      <h6>PNC-VC2</h6>
      <h6>Event Me<i class="far fa-calendar-alt ms-1"></i></h6>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input
        type="email"
        placeholder="Email"
        class="form-control"
        id="exampleInputEmail1"
        aria-describedby="emailHelp"
        v-model="email"
      />
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input
        type="password"
        placeholder="Password"
        class="form-control"
        id="exampleInputPassword1"
        v-model="password"
      />
    </div>
    <div>
      <p>
        Already have an account?
        <router-link to="/signup">Create Now</router-link>
      </p>
    </div>
    <div class="add">
      <input
        type="button"
        class="btn login text-white"
        value="Login now!"
        @click="login()"
      />
    </div>
  </form>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      API_USERS: "http://127.0.0.1:8000/api",
      email: "",
      password: "",
      users: [],
      messageError: null,
    };
  },
  methods: {
    login() {
      let user_login = {
        email: this.email,
        password: this.password,
      };
      console.log(user_login);
      axios.post(this.API_USERS+"/signin", user_login).then((res) => {
        console.log(res.data);
        this.$router.push('/events');
      })
      .catch(error => {
          let errorStatus = error.response.data.message;
          if(error.response) {
              this.messageError = errorStatus;
              console.log(this.messageError)
          }
      })
    },
  },
  mounted() {
    axios.get(this.API_USERS + "/users").then((res) => {
      console.log(res.data);
      this.users = res.data;
    });
  },
};
</script>

<style scoped>
form {
  margin: 2rem auto;
  max-width: 30rem;
  padding: 1rem;
  border-radius: 12px;
  box-shadow: 0 0 6px 3px#0cb1ec;
  background-color: #004f6c;
  color: white;
  font-family: "Roboto Slab", serif;
}
input {
  background-color: #006d95;
}
::placeholder {
  color: aliceblue;
}
.add {
  display: flex;
  justify-content: flex-end;
}
h6 {
  text-align: center;
}
</style>

