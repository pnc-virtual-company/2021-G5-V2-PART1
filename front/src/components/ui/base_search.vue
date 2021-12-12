<template>
   <section class="search p-4">
      <form class="d-flex w-50 m-auto" @submit.prevent>
        
        
        <slot></slot>
      </form>
   </section>
</template>

<style scoped>
.search {
  background: var(--sidebar-bg-color);
}
.search .search--btn {
  background: var(--sidebar-item-active);
}
</style>