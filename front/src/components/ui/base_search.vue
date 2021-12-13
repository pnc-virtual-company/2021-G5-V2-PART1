<template>
   <section class="search p-4">
      <form class="d-flex w-50 m-auto">
       <slot></slot>
        
      </form>
   </section>
</template>

<script>
export default {
}
</script>
<style scoped>
.search {
  background: var(--sidebar-bg-color);
}

</style>