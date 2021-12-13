<template>
  <div>
    <section v-if="alert_act === 'created'">
      <Base-alert v-if="alert_me" class="alert-success alert">
        <strong class="text-success">Your category create successfully!</strong>
      </Base-alert>
    </section>
    <section v-else-if="alert_act === 'deleted'">
      <Base-alert v-if="alert_me" class="alert-danger alert">
        <strong class="text-danger">Your category delete successfully!</strong>
      </Base-alert>
    </section>
    <section v-else-if="alert_act === 'noData'">
      <Base-alert v-if="alert_me" class="alert-danger alert">
        <strong class="text-danger"
          >All input are required, please fills</strong
        >
      </Base-alert>
    </section>

    <Base-search>
      <input
        class="form-control me-2"
        type="search"
        placeholder="Search..."
        v-model="search_cate"
        @keyup.prevent="search"
      />
      <Base-btn class="btn search--btn text-white" @click="search">Search</Base-btn>

      <Base-btn
        class="btn btn-outline-primary float-end ms-5"
        data-bs-toggle="modal"
        data-bs-target="#create_event"
        >Create</Base-btn
      >
    </Base-search>

    <Base-modal id="create_event">
      <template #modal-title>
        <h4>Categories</h4>
      </template>
      <template #modal-body>
        <form class="" autocomplete="off">
          <label for="title" class="form-label">Event name</label>
          <input
            type="text"
            class="form-control mb-2"
            id="start_date"
            placeholder="Name..."
            v-model="title"
          />
          <div class="d-flex">
            <div class="sart w-100">
              <label for="start_date" class="form-label">Start date</label>
              <input
                type="date"
                class="form-control mb-2"
                id="start_date"
                v-model="start_date"
              />
              <label for="end_date" class="form-label">End date</label>
              <input
                type="date"
                class="form-control"
                id="end_date"
                v-model="end_date"
              />
            </div>
            <div class="end">
              <label for="start_at" class="form-label ms-2">Start at</label>
              <input
                type="time"
                class="form-control mb-2 ms-2"
                id="start_at"
                v-model="start_at"
              />

              <label for="end_at" class="form-label ms-2">End at</label>
              <input
                type="time"
                class="form-control ms-2"
                id="end_at"
                v-model="end_at"
              />
            </div>
          </div>
          <div class="d-flex">
            <div class="cate w-50">
              <div id="v-model-select">
                <label for="select_cate" class="form-label mt-2"
                  >Select category</label
                >
                <select
                  v-model="categories_id"
                  class="form-select"
                  id="select_cate"
                >
                  <option disabled value="">Please select one</option>
                  <option  v-for="(cate, index) in get_category" :key="index">
                  <option>{{cate.name}}</option>
                  </option>
                </select>
              </div>
            </div>
            <div class="country w-50">
              <div id="v-model-select">
                <label for="select_coun" class="form-label ms-2 mt-2"
                  >Select country</label
                >
                <select
                  v-model="city"
                  class="form-select ms-2"
                  id="select_coun"
                >
                  <option disabled value="">Please select one</option>
                  <option>Cambodia</option>
                  <option>France</option>
                  <option>Vietnam</option>
                  <option>Philippines</option>
                </select>
              </div>
            </div>
          </div>
          <label for="link" class="form-label mt-2">Event link</label>
          <input
            type="text"
            class="form-control"
            id="link"
            placeholder="Link..."
            v-model="link_join"
          />
          <div class="form-floating">
            <textarea
              class="form-control mt-4"
              placeholder="Leave a comment here"
              id="floatingTextarea2"
              style="height: 100px"
              v-model="body"
            ></textarea>
            <label for="floatingTextarea2">Description...</label>
          </div>
        </form>
      </template>
      <template #modal-footer>
        <Base-btn class="btn btn-danger" data-bs-dismiss="modal"
          >Cancel</Base-btn
        >
        <Base-btn
          class="btn btn-primary"
          @click="create_my_events()"
          data-bs-dismiss="modal"
          >+Add</Base-btn
        >
      </template>
    </Base-modal>
<span class="text-danger ms-3 mt-2" v-if="search_err"
        >Categories name not found!</span
      >
    <div class="row row-cols-1 row-cols-md-2 g-4 m-2">
      <section v-for="event of My_Events" :key="event.id">
        <Base-card id="">
          <template #card-body>
            <h2 class="text-white ms-3 mt-3">{{ event.title }}</h2>
            <div class="detail text-warning">
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
              class="btn btn-danger btn-sm float-end"
              @click="delete_my_event(event.id)"
            >
              Delete
            </Base-btn>
            <Base-btn class="btn btn-warning btn-sm float-end me-2">
              Edit
            </Base-btn>
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
      alert_act: "",
      alert_me: false,
      search_err: false,
      search_cate: "",
      user_id: null,
      categories_id: null,
      title: "",
      body: "",
      city: "",
      link_join: "",
      start_at: "",
      start_date: "",
      end_at: "",
      end_date: "",
      name: null,
      email: null,

      My_Events: [],
      get_category: [],
    };
  },
  methods: {
    search() {
      if (this.search_cate !== "") {
        axios
          .get(
            "http://127.0.0.1:8000/api/categories/search/" + this.search_cate
          )
          .then(() => {
            this.get_my_events();
            this.search_err = false;
          })
          .catch((err) => {
            if (err.response.status === 404) {
              this.search_err = true;
              this.My_Events = [];
            }
          });
      } else {
        this.search_err = false;
        this.get_my_events();
      }
    },

    create_my_events() {
      if (
        this.user_id === null ||
        this.categories_id === null ||
        this.title === "" ||
        this.body === "" ||
        this.city === "" ||
        this.link_join === "" ||
        this.start_at === "" ||
        this.start_date === "" ||
        this.end_at === "" ||
        this.end_date === ""
      ) {
        this.alert_act = "noData";
        setInterval(() => {
          if (this.counter < 4) {
            this.counter++;
            this.alert_me = true;
          } else {
            this.alert_me = false;
          }
        }, 1000);
        this.counter = 0;
      } else {
        this.get_category.forEach((element) => {
          if (element.name === this.categories_id) {
            this.categories_id = element.id;
            let my_events = {
              user_id: this.user_id,
              categories_id: this.categories_id,
              title: this.title,
              body: this.body,
              city: this.city,
              link_join: this.link_join,
              start_at: this.start_at,
              start_date: this.start_date,
              end_at: this.end_at,
              end_date: this.end_date,
            };
            axios
              .post("http://127.0.0.1:8000/api/events", my_events)
              .then((res) => {
                if (res.status === 201) {
                  this.alert_act = "created";
                }
                setInterval(() => {
                  if (this.counter < 4) {
                    this.counter++;
                    this.alert_me = true;
                  } else {
                    this.alert_me = false;
                  }
                }, 1000);
                this.get_my_events();
                this.counter = 0;
              });
          }
        });
      }
    },
    delete_my_event(id) {
      axios.delete("http://127.0.0.1:8000/api/events/" + id).then(() => {
        this.alert_act = "deleted";
        setInterval(() => {
          if (this.counter < 4) {
            this.counter++;
            this.alert_me = true;
          } else {
            this.alert_me = false;
          }
        }, 1000);
        this.get_my_events();
        this.counter = 0;
      });
    },
    get_my_events() {
      axios.get("http://127.0.0.1:8000/api/events/").then((res) => {
        this.My_Events = [];
        res.data.forEach((element) => {
          if (element.user.email === this.email) {
            this.My_Events.push(element);
          }
        });
      });
    },
    get_categories() {
      axios.get("http://127.0.0.1:8000/api/categories").then((res) => {
        this.get_category = res.data;
      });
    },
  },
  mounted() {
    let u = localStorage.getItem("signin");
    this.name = JSON.parse(u);
    this.email = this.name.user.email;
    this.user_id = this.name.user.id;
    this.get_my_events();
    this.get_categories();
  },
};
</script>

<style scoped>
.search--btn {
  background: var(--sidebar-item-active);
}
</style>