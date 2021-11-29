<template>
    <login-form></login-form>
    <sign-up></sign-up>

</template>

<script>
import axios from 'axios';
export default {
  data() {
    return {
      API_URL: "http://127.0.0.1:8080/api/events",
      events: [],
    };
  },
 
  methods: {
    
  },
  mounted(){
    axios.get(this.API_URL).then((response) => {
      this.events = response.data.data;
      console.log(response.data)
    })
  }

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

