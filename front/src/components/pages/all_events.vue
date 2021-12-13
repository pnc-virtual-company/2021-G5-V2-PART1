<template>
  <div>
    <section>
      <Base-search @search="search">
      </Base-search>
    </section>
    <section class="cate--card row row-cols-1 row-cols-md-2 g-3 m-2">
      <Base-card v-for="event of all_events" :key="event.id">
        <template #card-body>
          <span
            v-if="email === null"
            class="text-white text-uppercase position-absolute end-0 top-0 m-2"
            >Create by: <i class="fas fa-user"></i>
            {{ event.user.first_name }}</span
          >
          <span
            v-else
            class="text-white text-uppercase position-absolute end-0 top-0 m-2"
            >Create by: <i class="fas fa-user"></i> {{ event.first_name }}</span
          >

          <div class="d-flex mb-3 ms-3">
            <img
              :src="event.image"
              width="100"
              height="100"
              class="rounded"
              alt=""
            />
            <h2 class="text-white ms-3 mt-5">{{ event.title }}</h2>
          </div>
          <div class="detail text-warning">
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
          <small>{{ event.id }}</small>
        </template>

        <template #card-footer>
          <Base-btn
            class="btn btn-warning btn-sm float-end"
            :id="event.user.first_name"
            @click="join(event.id)"
          >
            {{ detailsAreVisible ? "Unjoin" : "Join now" }}
          </Base-btn>
          <h5 class="text-primary mb-2">6 Joined</h5>
          <span class="btn btn-primary btn-sm"> Show </span>
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
    search(title) {
      if (title !== "") {
        axios
          .get("http://127.0.0.1:8000/api/events/search/" + title)
          .then((res) => {
            console.log(res.data);
            res.data.forEach((element) => {
              if (element.email !== this.email) {
                this.all_events.push(element);
              }
            });
          })
          .catch((err) => {
            console.log(err.response);
          });
      }
    },
    join(id) {
      this.all_events.forEach((element) => {
        console.log(element, id);
      });
    },
    get_all_event() {
      axios.get("http://127.0.0.1:8000/api/events").then((res) => {
        res.data.forEach((element) => {
          if (element.user.email !== this.email) {
            this.all_events.push(element);
          }
        });
      });
    },
  },
  mounted() {
    let u = localStorage.getItem("signin");
    this.name = JSON.parse(u);
    this.email = this.name.user.email;
    this.get_all_event()
  },
};
</script>

<style scoped>
</style>