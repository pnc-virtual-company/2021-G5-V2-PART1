<template>
  <section class="start--page p-3">
    <div class="txt text-center">
      <h1>Welcome!</h1>
      <p>
        Thank you for using and trust our serivce, we are trying to explore and
        bring something new for you.
      </p>
    </div>
    <div>
      <p>
        Do have an account?
        <a href="#" @click="$emit('action', 'signup')">Create account</a>
      </p>
      <a href="#" class="login text-center btn fs-4 w-100">
        <Base-btn
          :btn_name="btn_name"
          @click="$emit('action', 'signin')"
        ></Base-btn>
      </a>
    </div>
  </section>
</template>

<script>
export default {
  emits: ["action"],
  computed: {
    btn_name() {
      return "Login";
    },
  },
};
</script>
<style scoped>
.login {
  background: #004f6c;
}
</style>