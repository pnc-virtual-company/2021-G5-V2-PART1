<template>
  <div>
    <section v-for="(event, id) in all_events" :key="id">
      <Base-card 
      v-if="event.user.first_name !== username"
      >
        <template #card-body>
          <h4 class="mb-5">{{ }}</h4>
        </template>
        <template #card-footer>
          <!-- Modal edit category  -->

          <Base-btn
            class="btn btn-sm btn-danger float-end"
            @click="delete_cate(event.id)"
            >Delete</Base-btn
          >
          <Base-btn
            class="btn btn-sm btn-primary float-end me-2"
            data-bs-dismiss="modal"
            data-bs-target="#create_modal"
            >Edit</Base-btn
          >
        </template>
      </Base-card>
    </section>
  </div>
</template>

<script>

import axios from "axios";
export default {

  data() {
    return {
      username: null,
      name: null,
      all_events: [],
    };
  },
  methods: {},
  mounted() {
    let u = localStorage.getItem("signin");
    this.name = JSON.parse(u);
    this.username = this.name.user.first_name;
    axios.get("http://127.0.0.1:8000/api/events").then((res) => {
      this.all_events = res.data;
    });
  },
};
</script>

<style scoped>
</style>