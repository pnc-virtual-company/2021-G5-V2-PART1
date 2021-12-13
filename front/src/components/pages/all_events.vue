<template>
  <div>
    <section>
      <Base-search></Base-search>
    </section>
    <section class="cate--card row row-cols-1 row-cols-md-2 g-3 m-2">
      <Base-card v-for="event of all_events" :key="event.id">
        <template #card-body>
           <span class="text-white text-uppercase position-absolute end-0 top-0 m-2"
            >Create by: <i class="fas fa-user"></i>
            {{ event.user.first_name }}</span
          >

          <h2 class="text-white ms-3 mt-3">{{ event.title }}</h2>
          <div class="detail  text-warning">
            <h6><i class="fas fa-map-marker-alt mx-3"></i>{{ event.city }}</h6>
            <div class="start d-flex">
              <h6 class="w-50">
                <i class="fal fa-clock mx-3"></i>{{ event.start_at }}
                <span class="ms-2">(start)</span>
              </h6>
              <h6>

                <i class="fas fa-calendar mx-3"></i>{{ event.start_date }}
                <span class="ms-2">(start)</span>
              </h6>
            </div>
            <div class="end d-flex">
              <h6 class="w-50">
                <i class="fal fa-clock mx-3"></i>{{ event.end_at }}
                <span class="ms-2">(end)</span>
              </h6>
              <h6>
                <i class="fas fa-calendar mx-3"></i>{{ event.end_date }}
                <span class="ms-2">(end)</span>
              </h6>
            </div>
          </div>
        </template>

        <template #card-footer>
          <Base-btn class="btn btn-warning btn-sm float-end">
            <i class="fas fa-hand-point-right me-1"></i>Join now</Base-btn
          >
            <h5 class="text-primary mb-2">6 Joined</h5>
          <span class="btn btn-primary btn-sm">
          Show </span>
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
      email: null,
      name: null,
      all_events: [],
       detailsAreVisible: false,
    };
  },
  methods: {
    
  },
  mounted() {
    let u = localStorage.getItem("signin");
    this.name = JSON.parse(u);
    this.email = this.name.user.email;
    axios.get("http://127.0.0.1:8000/api/events").then((res) => {
      res.data.forEach((element) => {
        if (element.user.email !== this.email) {
          this.all_events.push(element);
        }
      });
    });
  },
};
</script>

<style scoped>
</style>