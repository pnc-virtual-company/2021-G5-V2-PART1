<template>
  <div>
    <Base-search>
      <input
        class="form-control me-2"
        type="search"
        placeholder="Search..."
        v-model="search_all_event"
      />
      <Base-btn class="btn search--btn text-white">Search</Base-btn>
    </Base-search>
    <div class="cate--card row row-cols-1 row-cols-md-1 g-3 m-3 w-75 m-auto">
      <section v-for="(event, id) in all_events" :key="id">
        <Base-card v-if="event.user.email !== email">
          <template #card-body>
            <span
              class="
                text-white text-uppercase
                position-absolute
                end-0
                top-0
                m-3
              "
              >Create by: <i class="fas fa-user ms-2"></i>
              {{ event.user.first_name }}</span
            >
            <h2 class="text-white ms-3 mt-3 text-white text-uppercase">{{ event.title }}</h2>
            <div class="detail text-warning m-auto w-75">
              <h6>
                <i class="fas fa-map-marker-alt mx-3"></i>{{ event.city }}
              </h6>
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
            <Base-btn
              class="btn btn-warning float-end"
              @click="Join(user_log_id,event.id)"
            >
              {{ detailsAreVisible ? "Unjoin" : "Join now" }}
            </Base-btn>
            <h5 class="text-primary mb-2">{{nb_join}} Joined</h5>
          </template>
        </Base-card>
      </section>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      email: null,
      name: null,
      user_log_id:null,
      all_events: [],
      joined_id:[],
      nb_join:0,
      detailsAreVisible: false,
    };
  },
  methods: {
    search(title) {
      if (title !== "") {
        axios
          .get("http://127.0.0.1:8000/api/events/search/" + title)
          .then((res) => {
            
            res.data.forEach((element) => {
              if (element.email !== this.email) {
                this.all_events.push(element);
              }
            });
          })
          
      }
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
    Join(user_id, event_id){

      let join_event = {
          user_id: user_id,
          events_id: event_id
           }
      axios.post("http://127.0.0.1:8000/api/joined", join_event)
            .then(res=>{
              res.data[0].forEach(element => {
                this.joined_id.push(element.id);
                this.nb_join = res.data[0].length
              });
            })
      
    }
  },
  mounted() {
    let u = localStorage.getItem("signin");
    this.name = JSON.parse(u);
    this.email = this.name.user.email;
    this.user_log_id = this.name.user.id;
    this.get_all_event();
  },
};
</script>

<style scoped>
.search--btn {
  background: var(--sidebar-item-active);
}
</style>