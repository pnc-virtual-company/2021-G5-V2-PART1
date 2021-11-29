<template>
   <form  class="form">
       <div class="img m-auto w-25">
       <img src="../../assets/logo-pnc.png" alt="" class="w-100">
       </div>
       <div class="h6">
           <h6>PNC-VC2</h6>
           <h6>Event Me</h6>
       </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div>
            <p>Already have an account? <a href="#">create now</a></p>
        </div>
        <div class="add">
            <button type="submit" class="btn btn-primary">Login now</button>
      
        </div>
    </form>

</template>

<script>
export default {
  emits: [],
  data() {
    return {};
  },
  methods: {},
};
</script>


<style scoped>
 form {
  margin: 2rem auto;
  max-width: 30rem;
  padding: 1rem;
  border-radius: 12px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  border-left: 3px solid #0E2EE1;
  background-color: #004F6C;
  color:white;

}
input {
  background-color: #006D95;
}
.add {
  display: flex;
  justify-content: flex-end;
}
h6{
    text-align: center;
}


 
</style>

