<template>
  <EventMe msg="Welcome to Your Vue.js App" />
</template>

<script>
import EventMe from "@/components/EventMe.vue";
// import MyEvent from '@/components/MyEvent.vue'

export default {
  name: "Home",
  components: {
    EventMe,
    // MyEvent,
  },
};
</script>

<style scoped>
</style>