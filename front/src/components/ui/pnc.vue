<template>
  <section class="pnc w-50 d-flex justify-content-center m-auto mt-5">
    <header>
      <div class="img m-auto w-50 mt-5">
        <img src="@/assets/pn-logo.png" alt="" class="w-100" />
      </div>
      <div class="m-2 text-center">
        <h4>PNC-VC2</h4>
        <h6>Event Me<i class="far fa-calendar-alt ms-1 mb-4"></i></h6>
      </div>
    </header>
    <section class="w-100 slot p-3 text-white">
      <slot></slot>
    </section>
  </section>
</template>

<script>
export default {};
</script>

<style scoped>
header {
  width: 50%;
  background: #004f6c;
  color: #fff;
  border-radius: 10px 0px 0px 10px;
}

.slot {
  border-radius: 0px 10px 10px 0px;
  background: #006d95;
}
</style>