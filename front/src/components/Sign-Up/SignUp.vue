<template>
  <div class="wrapper d-flex w-50 mt-4 m-auto d-flex justify-content-between">
    <div class="logo w-50 rounded-start">
      <img src="../../assets/pn-logo.png" alt="" width="100">
      <h5>PNC-VC2</h5>
      <div class="cal">
        <h6>EVENT ME</h6>
        <i class="far fa-calendar-alt ms-1"></i>
      </div>
    </div>

    <form class="form w-50 p-4 rounded-end">
      <h3 class="text-center text-white mb-5">REGISTER FORM</h3>

      <div class="mb-3">
        <input
          type="text"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="firstlHelp"
          placeholder="FirstName.."
        />
      </div>
      <div class="mb-3">
        <input
          type="text"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="lastHelp"
          placeholder="LastName.."
        />
      </div>
      <div class="mb-3">
        <input type="date" class="form-control" id="exampleInputPassword1" />
      </div>
      <div class="mb-3">
        <div class="put">
          <label for="exampleInputEmail1" class="form-label">Gender</label>
          <input
            type="radio"
            id="exampleInputEmail1"
            aria-describedby="lastHelp"
          />
          <label class="form-label">Male</label>
          <input
            type="radio"
            id="exampleInputEmail1"
            aria-describedby="lastHelp"
          />
          <label class="form-label">Female</label>
        </div>
      </div>
      <div class="mb-3">
        <input
          type="file"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="imgHelp"
        />
      </div>
      <div class="add">
        <input type="button" class="btn login text-white" value="Next" />
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "Signup",
  data() {
    return {
      input: {
        firstname: "",
        lastname: "",
        dateOfBirth: "",
        image: "",
      },
    };
  },
  methods: {
    SignUp() {
      if (
        this.input.firstname != "" &&
        this.input.lastname != "" &&
        this.input.dateOfBirth != "" &&
        this.input.image
      ) {
        this.$emit("authenticated", true);
        this.$router.replace({ name: "secure" });
      } else {
        console.log("Please enter your ");
      }
    },
  },
};
</script>
<style scoped>
.form {
    background: #005C7D;
}
.logo {
    background: #004F6C;
}
input {
  background-color: #006D95;
}
::placeholder {
    color: #fff;
}
</style>