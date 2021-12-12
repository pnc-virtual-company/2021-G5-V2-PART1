<template>
  <div>
    <Base-search></Base-search>
    <section
      class="cate--card row row-cols-1 row-cols-md-2 g-3 m-2"
      v-for="(event, id) in all_events"
      :key="id"
    >
      <Base-card v-if="event.user.email !== email">
        <template #card-body>
          <h4 class="mb-5">{{}}</h4>
        </template>
        <template #card-footer></template>
      </Base-card>
    </section>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      email: null,
      name: null,
      all_events: [],
    };
  },
  methods: {},
  mounted() {
    let u = localStorage.getItem("signin");
    this.name = JSON.parse(u);
    this.email = this.name.user.email;
    axios.get("http://127.0.0.1:8000/api/events").then((res) => {
      this.all_events = res.data;
    });
  },
};
</script>

<style scoped>
</style>