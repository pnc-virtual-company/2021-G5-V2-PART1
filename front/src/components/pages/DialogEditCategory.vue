<template> 
    <div class="overlay">
      <div class="dialog">
        <div class="dialog__content">
          <p style="text-align:center;">Do you want to update?</p>
          <input type="text" v-model="categoryName">
        </div><hr />

        <div class="dialog__footer">
          <button @click="cancel" class="dialog__cancel">Cancel</button>
          <button @click="update" class="dialog__confirm">update</button>
        </div>
      </div>
  </div>
</template>

<script>
export default {
    props: ['data'],
    emits:['update', 'cancel'],
    data(){
      return{
        categoryName: "",
      }
    },
    methods:{
      update(){
        let updateCategory = {
          name: this.categoryName
        }
        this.$emit('update',this.data.id,updateCategory, false);

      },
      cancel(){
        this.$emit('cancel', false);
      }
    },
    mounted() {
      this.categoryName = this.data.name;
    }
}
</script>

<style scoped>
  .dialog {
      background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
      border-radius: 0.75rem;
      margin-left: auto;
      margin-right: auto;
  
  }
  .overlay {
      position: fixed;
      background: #fff;
      box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
      top: 5px;
      right: 0px;
      left: 35%;
      width: 30%;
      z-index: 10;
      border-radius: 10px;
  }
  hr{
    margin: 0;
    padding: 0;
  }
  .dialog__content {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
  .dialog__footer {
    display: flex;
    justify-content: flex-end;
    padding: 5px;
  }
  .dialog__cancel,
  .dialog__confirm{
    border: none;
    outline: none;
    padding: 3px 10px;
    color: #fff;
    border-radius: 20px;
    cursor: pointer;
  }
  .dialog__cancel {
    margin-right: 3%;
    background: rgba(0, 0, 255, 0.719);
  } 
  .dialog__confirm {
    background: rgba(252, 0, 0, 0.671);
  } 
 
</style>