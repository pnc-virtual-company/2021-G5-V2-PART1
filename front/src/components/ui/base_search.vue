<template>
   <section class="search p-4">
      <form class="d-flex w-50 m-auto" @submit.prevent>
        <input
          class="form-control me-2"
          type="search"
          placeholder="Search"
          aria-label="Search"
        />
        <Base-btn class="btn search--btn text-white">Search</Base-btn>
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