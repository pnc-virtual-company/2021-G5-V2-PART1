<template>
  <form class="form" @submit.prevent>
    <div class="img m-auto w-25">
      <img src="../../assets/logo-pnc.png" alt="" class="w-100" />
    </div>
    <div class="h6">
      <h6>PNC-VC2</h6>
      <h6>Event Me<i class="far fa-calendar-alt ms-1"></i></h6>
      <div
        class="alert-danger p-2 rounded-3"
        role="alert"
        v-show="show_txt_err"
      >
        <small>* {{txt_err}}</small>
      </div>
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
        required
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
        required
      />
    </div>
    <div>
      <p>
        Already have an account?
      <router-link to="" @click="signup()">Create now!</router-link>
      </p>
    </div>
    <div class="add">
      <input
        type="button"
        @click="singin()"
        class="btn login text-white"
        value="Login now!"
      />
    </div>
  </form>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      email: "",
      password: "",
      users: [],
      txt_err: null,
      show_txt_err: false,
    };
  },
  provide() {
    return { users: this.users };
  },
  emits: ["user", "singup"],
  methods: {
    signup(){
      this.$emit("singup");
    },
    singin() {
      let user = {
        email: this.email,
        password: this.password,
      };
      axios
        .post("http://127.0.0.1:8000/api/signin", user)
        .then((res) => {
          this.$emit("user", res.status);
          localStorage.setItem('login',JSON.stringify(res.data))
          this.$router.push('/home')
        })
        .catch((err) => {
          if(err.response.status === 401){
            this.txt_err = err.response.data.message;
            this.show_txt_err = true
          }
          else{
            this.show_txt_err = false
          }
        });
    },
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

