<template>
<div class="wrapper">
    <div class="logo">
       <div class="back">
           <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
       </div>
       <div class="img m-auto w-25">
       <img src="../../assets/pn-logo.png" alt="" class="w-100">
       </div>
        <h6>PNC-VC2</h6>
        <div class="cal">
            <h6>EVENT ME</h6>
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
    </div>
    <div class="all-form">
        <form  class="form">
            <div class="mb-3">
                <h6>Register Form</h6>
                <br>
                
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email or address..." aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password...">
            </div>
            <div class="add">
               <button type="submit" class="btn btn-primary">Sign in</button>    
            </div>
        </form>
    </div>
</div>
</template>
<script>
export default {
        data() {
            return {  
                FormLogin: true,
                FormSignin: false,               
            }
        },
        methods: {

         }
};
</script>
<style>
form {
  padding: 1rem;
  background-color: #006D95;
  color:white;
  border-radius: 0px 15px 15px 0px;
}
.logo {
    border-radius: 15px 0px 0px 15px;
    width: 30%;
    padding: 1rem;
    background-color: #004F6C;
    color:white;
    text-align: center;
}
.wrapper {
  display: flex;
  justify-content: center;
  width: 100%;
  margin-bottom: 10%;
}

.all-form{
    width: 30%;
   
}
img{
    width: 30%;
}

.add {
    display: flex;
    justify-content: flex-end;
}

.back{
    margin-left:-270px;
}
body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-size: cover;
}
h6{
    text-align: center;
}


</style>