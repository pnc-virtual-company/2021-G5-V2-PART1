<template>
  <EventMe msg="Welcome to Your Vue.js App" />
</template>

<script>
import EventMe from '@/components/EventMe.vue'

export default {
  name: 'Home',
  components: {
    EventMe,
    // MyEvent,
  },
  mounted() {
    console.log(this.$router.currentRoute._value.path);
  },

}
</script>

<style scoped>

</style>