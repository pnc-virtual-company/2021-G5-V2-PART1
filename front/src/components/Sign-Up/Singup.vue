<template>
  <div class="wrapper d-flex w-50 m-auto">
    <div class="logo w-50 text-white">
      <div class="pn-logo">
        <img src="../../assets/pn-logo.png" alt="" width="100" />
        <h5>PNC-VC2</h5>
        <div class="cal">
          <h6>Event Me<i class="far fa-calendar-alt ms-1"></i></h6>
        </div>
      </div>
    </div>
    <form class="form w-50 p-4 text-white" @submit.prevent>
      <h3 class="mb-5">Register form</h3>
      <div class="mb-3">
        <input
          type="text"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="firstlHelp"
          placeholder="FirstName..."
          v-model="first_name"
        />
      </div>
      <div class="mb-3">
        <input
          type="text"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="lastHelp"
          placeholder="LastName..."
          v-model="last_name"
        />
      </div>
      <div class="mb-3">
        <input
          type="date"
          class="form-control"
          id="exampleInputPassword1"
          v-model="date_of_birth"
        />
        <div class="mb-3 text-start d-flex mt-2">
          <label for="">Gender: </label>
          <div class="form-check mx-3">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              id="flexRadioDefault1"
              value="Male"
              v-model="gender"
            />
            <label class="form-check-label" for="flexRadioDefault1">
              Male
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              id="flexRadioDefault2"
              value="Female"
              v-model="gender"
            />
            <label class="form-check-label" for="flexRadioDefault2">
              Female
            </label>
          </div>
        </div>
      </div>
      <!-- <div class="mb-3">
        <input type="file" class="form-control" id="exampleInputEmail1" name="image" />
      </div> -->
      <div class="mb-3">
        <input
          type="email"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="firstlHelp"
          placeholder="Email..."
          v-model="email"
        />
      </div>
      <div class="mb-3">
        <input
          type="password"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="firstlHelp"
          placeholder="Password..."
          v-model="password"
        />
      </div>
      <div class="add">
          <input
            type="submit"
            @click="Signup"
            class="btn text-white float-end"
            value="Login now !"
          />
      </div>
    </form>
  </div>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      API: "http://127.0.0.1:8000/api",
      first_name: "",
      last_name: "",
      gender: "",
      date_of_birth: "",
      image: "",
      email: "",
      password: "",
    };
  },
  methods: {
    Signup() {
      let user = {
        first_name: this.first_name,
        last_name: this.last_name,
        gender: this.gender,
        date_of_birth: this.date_of_birth,
        image: this.image,
        email: this.email,
        password: this.password,
      };
      console.log(File)

      axios.post(this.API + "/signup", user).then((res) => {
        console.log(res.data);
      });
    },
  },
  mounted() {
    axios.get(this.API + "/users").then((res) => {
      console.log(res.data);
    });
  },
};
</script>

<style scoped>
.logo {
  display: flex;
  justify-content: center;
  align-items: center;
  background: #004f6c;
  border-radius: 10px 0 0 10px;
}
input {
  background: #006d95;
}
.form {
  border-radius: 0 10px 10px 0;
  background: #005c7d;
}
::placeholder {
  color: #fff;
}
</style>