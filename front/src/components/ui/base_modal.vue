<template>
    <!-- Create modal  -->
    <div class="modal fade" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <slot name="modal-title"></slot>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <slot name="modal-body"></slot>
          </div>
        </div>
      </div>
    </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {
   
  },
};
</script>
<style>
  /* 
| -=-=-=-=-=-=-=-=-=-=-=|-MODAL STYLE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.modal-content {
  /* background: var(--sidebar-item-header); */
  /* background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite; */
  font-family: "Roboto Slab", serif;
  border: 2px solid #004f6c;
}
</style>