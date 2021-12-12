<template>
    <div class="col">
        <div class="card">
            <div class="card-image">
                <slot name="card-header"></slot>
            </div>
            <div class="card-body">
                <slot name="card-body"></slot>
            </div>
            <div class="card-footer">
                <slot name="card-footer"
              
                ></slot>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style>
.col {
  font-family: "Roboto Slab", serif;
}
.card {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  margin-top: 15px;
  margin-left: 15px;
  margin-right: 15px;
  cursor: pointer;
  box-shadow: rgba(19, 16, 16, 0.25) 0px 50px 100px -20px,
    rgba(9, 10, 9, 0.3) 0px 30px 60px -30px;
}
.card:hover {
  transition: all 1.2s ease;
  background: #004f6c;
  color: aliceblue;
}
.col img {
  width: 10%;
  height: 10%;
}
</style>