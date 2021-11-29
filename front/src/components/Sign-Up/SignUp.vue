<template>

<div class="wrapper">
    
    <div class="logo">
       <img src="../../assets/pn-logo.png" alt="">
        <h5>PNC-VC2</h5>
        <div class="cal">
            <h6>EVENT ME</h6>
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
    </div>
    <div class="all-form">
        
        <form  class="form">
            <h3>REGISTER FORM</h3>
       
        <div class="mb-3">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="firstlHelp" placeholder="FirstName..">
        
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="lastHelp" placeholder="LastName..">
        
        </div>
        <div class="mb-3">
            
            <input type="date" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            
            <div class="put">
                <label for="exampleInputEmail1" class="form-label">Gender</label>
                <input type="radio" id="exampleInputEmail1" aria-describedby="lastHelp" >
                <label class="form-label">Male</label>
                <input type="radio" id="exampleInputEmail1" aria-describedby="lastHelp" >
                <label class="form-label">Female</label>
            </div>
            
        
        </div>
        <div class="mb-3">
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="imgHelp">
        
        </div>
        <div class="add">
            <button type="submit" class="btn btn-warning">Next</button>
      
        </div>
    </form>
    </div>
    
</div>

  
</template>

<script>
export default {
  name: 'Signup',
        data() {
            return {
                input: {
                    firstname: "",
                    lastname: "",
                    dateOfBirth: "",
                    image: ""
                    
                }
            }
        },
        methods: {
            SignUp() {
                if(this.input.firstname != "" && this.input.lastname != "" 
                && this.input.dateOfBirth != "" && this.input.image) {
                    this.$emit("authenticated", true);
                    this.$router.replace({ name: "secure" });
                    
                } else {
                    console.log("Please enter your ");
                }
            }
        }
};
</script>

<style>

body{
    background: grey;
}

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
    
    

}
input {
  background-color: #006D95;
}
.wrapper {
  display: flex;
  justify-content: center;
  width: 100%;

  

}

.all-form{
    width: 30%;
}


.put{
    display: flex;
    justify-content: space-around;
}

.add {
    display: flex;
    justify-content: flex-end;
}

.cal{
    display: flex;
    justify-content: center;
    
}

img{
    margin-top: 10%;
}

.cal h6, .fa{
    margin-right: 7px;
    
}

h6{
    color: rgb(15, 133, 230);
}

h5{
    color: white;
}

h3{
    margin-bottom: 20px;
}




</style>