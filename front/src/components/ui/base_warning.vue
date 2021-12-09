<template>
  <div>
    <section class="mt-3" v-if="action === 'noData'">
      <h1><i class="fas fa-exclamation"></i></h1>
      <h4>All input is required.</h4>
      <slot></slot>
      <Base-btn :btn_name="btn_name" class="float-end btn btn-warning mt-4 me-2" @click="$emit('noData', false)"></Base-btn>
    </section>
    <section class="mt-3" v-if="action === 'incorrect'">
      <h1><i class="far fa-times-circle"></i></h1>
      <slot></slot>
      <Base-btn
        :btn_name="btn_name"
        class="float-end btn btn-warning mt-4 me-2"
        @click="$emit('incorrect', false)"
      ></Base-btn>
    </section>
    <section v-if="action === 'created'">
      <h1><i class="far fa-check-circle mb-3"></i></h1>
      <slot></slot>
      <Base-btn
        :btn_name="btn_name"
        class="float-end btn btn-warning mt-4 me-2"
         @click="$emit('action', 'signin')"
      ></Base-btn>
    </section>
    <section v-if="action === 'exist'">
      <h1><i class="fas fa-exclamation"></i></h1>
      <slot></slot>
      <Base-btn
        :btn_name="btn_name"
        class="float-end btn btn-warning mt-4 me-2"
        @click="$emit('noData', false)"
      ></Base-btn>
    </section>
  </div>
</template>
<script>
export default {
  props: ["action"],
  emits: ["noData", "incorrect"],
  data() {
    return {};
  },
  computed: {
    btn_name() {
      return "OK";
    },
  },
};
</script>

<style scoped>
</style>



