<template>
 <sign-in></sign-in>
  <sign-up> </sign-up>
  <!-- <router-view>
  </router-view> -->
</template>


<script>
import SignUp from './components/SignUp/SignUp.vue'
export default {
  components:{
    'sign-up':SignUp
  },
  mounted() {
   
  
  },
};
</script>




<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

