<template>
  
    <login-form></login-form>
  
  
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

<style scoped>

</style>