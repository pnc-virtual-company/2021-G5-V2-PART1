<template>
  <!-- The Modal -->
  <div
    class="modal fade"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">
            <slot name="modal-title"></slot>
          </h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <slot name="modal-body"></slot>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-MODAL STYLE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.modal-content {
  /* background: var(--sidebar-item-header); */
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  font-family: "Roboto Slab", serif;
}
</style>