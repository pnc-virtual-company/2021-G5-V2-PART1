<template>
  <div class="wrapper d-flex">
    <div class="logo">
      <div class="back">
        <button class="btn btn-info" onclick="window.history.back();">
          &#8592; Back
        </button>
      </div>
      <div class="img m-auto w-25">
        <img src="../../assets/pn-logo.png" alt="" class="w-100" />
      </div>
      <h6>PNC-VC2</h6>
      <div class="cal">
        <h6>EVENT ME</h6>
        <i class="far fa-calendar-alt ms-1"></i>
      </div>
    </div>

    <form class="form">
      <div class="mb-3">
        <h6>Register Form</h6>
        <br />

        <input
          type="email"
          class="form-control"
          id="exampleInputEmail1"
          placeholder="Email or address..."
          aria-describedby="emailHelp"
        />
      </div>
      <div class="mb-3">
        <input
          type="password"
          class="form-control"
          id="exampleInputPassword1"
          placeholder="Password..."
        />
      </div>
      <div class="add">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </form>
  </div>
</template>
<script>
export default {
  data() {
    return {
      FormLogin: true,
      FormSignin: false,
    };
  },
  methods: {},
};
</script>

<style scoped>
</style>