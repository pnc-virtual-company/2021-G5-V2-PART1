<template>
  <div>
    <section v-if="warning === false">
      <div class="back position-relative" @click="$emit('action', 'signin')">
        <i
          class="
            fas
            fa-times
            position-absolute
            top-0
            mt-2
            end-0
            translate-middle
            btn
            bg-white
            text-danger
          "
        ></i>
      </div>
      <form
        method="POST"
        enctype="multipart/form-data"
        class="form p-3 text-white"
        @submit.prevent
      >
        <h2 class="my-4 m-0 text-center">Register form</h2>
        <div class="mb-3">
          <input
            type="text"
            class="form-control"
            id="fname"
            aria-describedby="firstlHelp"
            placeholder="FirstName..."
            v-model="first_name"
          />
        </div>
        <div class="mb-3">
          <input
            type="text"
            class="form-control"
            id="lname"
            aria-describedby="lastHelp"
            placeholder="LastName..."
            v-model="last_name"
          />
        </div>
        <div class="mb-3">
          <input
            type="date"
            class="form-control"
            id="date"
            v-model="date_of_birth"
          />
          <div class="mb-3 text-start d-flex mt-2">
            <label for="">Gender: </label>
            <div class="form-check mx-3">
              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                id="m"
                value="Male"
                v-model="gender"
              />
              <label class="form-check-label" for="m"> Male </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                id="f"
                value="Female"
                v-model="gender"
              />
              <label class="form-check-label" for="f"> Female </label>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <input
            type="email"
            class="form-control"
            id="email"
            aria-describedby="firstlHelp"
            placeholder="Email..."
            v-model="email"
          />
        </div>
        <div class="mb-3">
          <input
            type="password"
            class="form-control"
            id="password"
            aria-describedby="firstlHelp"
            placeholder="Password..."
            v-model="password"
          />
        </div>
        <div class="add">
          <a href="#" class="login text-center btn fs-5 float-end">
            <Base-btn :btn_name="btn_name" @click="user_signup()"></Base-btn>
          </a>
        </div>
      </form>
    </section>
    <section class="text-center text-warning" v-else-if="warning === 'noData'">
      <Base-warning :action="warning" @noData="signup_warning">
        <h5>please input your email and password</h5>
      </Base-warning>
    </section>
    <section class="text-center text-warning" v-else-if="warning === 'exist'">
      <Base-warning :action="warning" @noData="signup_warning">
        <h3>Can not create an account.</h3>
        <h5 class="text mt-4">Email: {{ email }} aleady exist!</h5>
      </Base-warning>
    </section>
    <section class="text-warning text-center" v-else-if="warning === 'created'">
      <Base-warning :action="warning" @signin="signin">
        <h3 class="text-center">Your account was created!</h3>
        <div class="txt d-flex">
          <h5 class="text-start">Username</h5>
          <span>: {{ first_name }} {{ last_name }}</span>
        </div>
        <div class="txt d-flex">
          <h5 class="text-start">Email</h5>
          <span>: {{ email }}</span>
        </div>
      </Base-warning>
    </section>
  </div>
</template>
<script>
import axios from "axios";
export default {
  emits: ["signup_form", "action"],
  data() {
    return {
      first_name: "",
      last_name: "",
      date_of_birth: "",
      gender: "",
      email: "",
      password: "",
      warning: false,
    };
  },
  computed: {
    btn_name() {
      return "Login";
    },
  },
  methods: {
    signup_warning(warn) {
      this.warning = warn;
    },
    signin(signin){
      this.$emit("action", signin)
    },
    user_signup() {
      if (
        this.first_name === "" ||
        this.last_name === "" ||
        this.date_of_birth === "" ||
        this.gender === "" ||
        this.email === "" ||
        this.password === ""
      ) {
        this.signup_warning("noData");
      } else {
        let user = {
          first_name: this.first_name,
          last_name: this.last_name,
          date_of_birth: this.date_of_birth,
          gender: this.gender,
          email: this.email,
          password: this.password,
        };
        axios
          .post("http://127.0.0.1:8000/api/signup", user)
          .then((res) => {
            if (
              res.data.message === "This mali chum@gmail.com is already exist!"
            ) {
              this.signup_warning("exist");
            } else {
              this.signup_warning("created");
            }
          })
          .catch((err) => {
            console.log(err.response.status);
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
.back {
  margin-right: -20px;
}
.txt h5 {
  width: 100px;
}
</style>