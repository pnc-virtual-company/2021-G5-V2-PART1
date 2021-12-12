<template>
  <section v-if="warning === false">
    <form class="form w-100 p-3 text-white" @submit.prevent>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input
          type="email"
          placeholder="Email"
          class="form-control"
          id="email"
          aria-describedby="emailHelp"
          v-model="email"
          required
        />
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label">Password</label>
        <input
          type="password"
          placeholder="Password"
          class="form-control"
          id="pwd"
          v-model="password"
          required
        />
      </div>
      <div>
        <p>
          Already have an account?
          <a href="#" @click="$emit('action', 'signup')">Create Now</a>
        </p>
      </div>
      <div class="add">
          <a href="#" class="text-center btn fs-5 float-end">
            <Base-btn :btn_name="btn_name" @click="user_signin()"></Base-btn>
          </a>
      </div>
    </form>
  </section>
  <section class="text-center text-warning" v-else-if="warning === 'noData'">
    <Base-warning :action="warning" @noData="signin_warning">
      <h5>please input your email and password</h5>
    </Base-warning>
  </section>
  <section class="text-center text-warning" v-else-if="warning === 'incorrect'">
    <Base-warning :action="warning" @incorrect="signin_warning">
      <h4>Your email or password incorrect</h4>
      <h5>Please try again!</h5>
    </Base-warning>
  </section>
</template>

<script>
import axios from "axios";
export default {
  emits: ["action"],
  computed: {
    btn_name(){
      return "Login"
    } 
  },
  data() {
    return {
      email: "",
      password: "",
      warning: false,
    };
  },
  methods: {
    signin_warning(warning) {
      this.warning = warning;
    },

    user_signin() {
      let user = {
        email: this.email,
        password: this.password,
      };
     
      if (this.email === "" || this.password === "") {
        this.signin_warning("noData");
      } else {
        axios
          .post("http://127.0.0.1:8000/api/signin", user)
          .then((res) => {
         
            this.$router.push('/home')
            localStorage.setItem('signin', JSON.stringify(res.data))
            this.$emit("action","myView")
          })
          .catch((err) => {
            console.log(err.response.data.message);
            this.signin_warning("incorrect");
          });
      }
    },
  },
};
</script>

<style scoped>
.add a {
  background: #004f6c;
}
.add a:hover {
  background: #023a50;
}
</style>