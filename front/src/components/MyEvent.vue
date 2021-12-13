<template>
  <!--========================|-NAVBAR SEARCH-|=======================-->
  <section>
    <nav class="navbar">
      <div class="container-fluid">
        <form class="d-flex">
          <input
            class="form-control me-2"
            type="text"
            placeholder="Search"
            aria-label="Search"
            v-model="eventName"
            v-on:keyup.prevent="searchEvent"
          />
          <button class="btn btn-warning" type="button">
            <img src="@/assets/search_searching_icon.png" />
          </button>
          <button
            class="btn btn-warning ms-2"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#create-myevent"
          >
            <img src="@/assets/create_new_plus_icon.png" />
          </button>
        </form>
        <!--========================|-MODAL CREATE-|=======================-->
        <modal id="create-myevent">
          <template v-slot:modal-title> Create New Event </template>
          <template v-slot:modal-body>
            <form @submit.prevent="handleSubmit">
              <div class="mb-3 mt-3">
                <input
                  type="text"
                  placeholder="Enter title..."
                  class="form-control"
                  v-model="title"
                />
              </div>
              <div class="mb-3 mt-3">
                <select
                  name="category"
                  id="category"
                  class="form-control"
                  v-model="category_id"
                >
                  <option value="" selected disabled hidden>Category</option>
                  <option value="1">Game</option>
                  <option value="2">Meeting</option>
                  <option value="3">Comunication</option>
                  <option value="4">Education</option>
                </select>
              </div>
              <div class="mb-3 mt-3">
                <input
                  type="file"
                  accept="image/*"
                  class="form-control"
                  @change="handleImageSelected"
                />
              </div>
              <div class="dateTime mb-3 mt-3">
                <input
                  type="date"
                  placeholder="Start date..."
                  class="form-control"
                  v-model="start_date"
                />
                <input
                  type="time"
                  placeholder="At..."
                  class="form-control"
                  v-model="start_at"
                />
              </div>
              <div class="dateTime" mb-3 mt-3>
                <input
                  type="date"
                  placeholder="End date..."
                  class="form-control"
                  v-model="end_date"
                />
                <input
                  type="time"
                  placeholder="At..."
                  class="form-control"
                  v-model="end_at"
                />
              </div>
              <div class="mb-3 mt-3">
                <input
                  type="text"
                  placeholder="link join..."
                  class="form-control"
                  v-model="link_join"
                />
              </div>
              <div class="mb-3 mt-3">
                <div class="datalist-holder">
                  <input
                    list="country"
                    name="country"
                    class="datalist-input form-control"
                    v-model="city"
                  />
                  <datalist id="country">
                    <option value="Yemen" />
                    <option value="Zambia" />
                    <option value="Zimbabwe" />
                  </datalist>
                </div>
              </div>
              <div class="mb-3 mt-3">
                <input
                  type="text"
                  placeholder="Description..."
                  class="form-control"
                  v-model="body"
                />
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-outline-light"
                  data-bs-dismiss="modal"
                >
                  Cancel
                </button>
                <button
                  type="submit"
                  class="btn btn-outline-warning"
                  data-bs-dismiss="modal"
                >
                  Submit
                </button>
              </div>
            </form>
          </template>
        </modal>
      </div>
    </nav>
    <!--========================|-CARD STYLE-|=======================-->
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <card v-for="event of My_Events" :key="event.id">
        <template v-slot:card-header>
          <img
            :src="url_image_upload + event.image"
            class="card-img-top"
            alt=""
          />
        </template>
        <template v-slot:card-body>
          <h5 class="card-title">{{ event.title }}</h5>
          <p class="card-text">{{ event.body }}</p>
        </template>
        <template v-slot:card-footer>
          <input type="hidden" v-model="eventID" />
          <small>{{ event.start_date }}/{{ event.end_date }}</small>
          <button
            class="btn-event-edit ms-5"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#edit-myevent"
            @click="getID(event.id)"
          >
            Edit <i class="fa fa-edit" aria-hidden="true"></i>
          </button>
          <button
            class="btn-event-remove ms-2"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#remove-myevent"
            @click="getID(event.id)"
          >
            Delete <i class="fa fa-trash" aria-hidden="true"></i>
          </button>
          <!--========================|-MODAL EDIT-|=======================-->
          <modal id="edit-myevent">
            <template v-slot:modal-title> Update Event </template>
            <template v-slot:modal-body>
              <form @submit.prevent="UpdateEvent">
                <div class="mb-3 mt-3">
                  <input
                    type="text"
                    placeholder="Enter title..."
                    class="form-control"
                    v-model="title_edit"
                  />
                </div>
                <div class="mb-3 mt-3">
                  <select
                    name="category_edit"
                    id="category_edit"
                    class="form-control"
                    v-model="category_id_edit"
                  >
                    <option value="" selected disabled hidden>Category</option>
                    <option value="1">Game</option>
                    <option value="2">Meeting</option>
                    <option value="3">Comunication</option>
                    <option value="4">Education</option>
                  </select>
                </div>
                <div class="mb-3 mt-3">
                  <input
                    type="file"
                    accept="image/*"
                    class="form-control"
                    @change="handleImageSelected"
                  />
                </div>
                <div class="dateTime mb-3 mt-3">
                  <input
                    type="date"
                    placeholder="Start date..."
                    class="form-control"
                    v-model="start_date_edit"
                  />
                  <input
                    type="time"
                    placeholder="At..."
                    class="form-control"
                    v-model="start_at"
                  />
                </div>
                <div class="dateTime" mb-3 mt-3>
                  <input
                    type="date"
                    placeholder="End date..."
                    class="form-control"
                    v-model="end_date_edit"
                  />
                  <input
                    type="time"
                    placeholder="At..."
                    class="form-control"
                    v-model="end_at_edit"
                  />
                </div>
                <div class="mb-3 mt-3">
                  <input
                    type="text"
                    placeholder="link join..."
                    class="form-control"
                    v-model="link_join_edit"
                  />
                </div>
                <div class="mb-3 mt-3">
                  <select
                    name="city_edit"
                    id="city_edit"
                    class="form-control"
                    v-model="city_edit"
                  >
                    <option value="" selected disabled hidden>City</option>
                    <option value="phnom penh">Phnom Penh</option>
                    <option value="jakata">Jakata</option>
                    <option value="seoul">Seoul</option>
                    <option value="paris">Paris</option>
                  </select>
                </div>
                <div class="mb-3 mt-3">
                  <input
                    type="text"
                    placeholder="Description..."
                    class="form-control"
                    v-model="body_edit"
                  />
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-outline-light"
                    data-bs-dismiss="modal"
                  >
                    Cancel
                  </button>
                  <button
                    type="submit"
                    class="btn btn-outline-warning"
                    data-bs-dismiss="modal"
                  >
                    Submit
                  </button>
                </div>
              </form>
            </template>
          </modal>
          <!--========================|-MODAL DELETE-|=======================-->
          <modal id="remove-myevent">
            <template v-slot:modal-title> Remove Event </template>
            <template v-slot:modal-body>
              <form @submit.prevent="deleteEvent()">
                <div class="mb-3 mt-3">You want to remove this event?</div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-outline-light"
                    data-bs-dismiss="modal"
                  >
                    Cancel
                  </button>
                  <button
                    type="submit"
                    class="btn btn-outline-warning"
                    data-bs-dismiss="modal"
                  >
                    Remove
                  </button>
                </div>
              </form>
            </template>
          </modal>
        </template>
      </card>
    </div>
  </section>
</template>
<script>
// ~~~~~~~~~~~~~~~~~~~~~~|-IMPORT AXIOS-|~~~~~~~~~~~~~~~~~~~~~~ //
import axios from "axios";
import Modal from "./Modal/modal.vue";
// import Card from "./Card/Card.vue";
const url = "http://127.0.0.1:8000/api/events";
export default {
  components: {
    modal: Modal,
    // card: Card,
  },
  data() {
    return {
      My_Events: [],
      eventName: "",
      eventID: null,
      imageFile: null,

      user_id: 1,
      title: "",
      category_id: null,
      start_at: "",
      end_at: "",
      start_date: "",
      end_date: "",
      link_join: "",
      body: "",
      city: "",

      user_id_edit: 1,
      title_edit: "",
      category_id_edit: null,
      start_at_edit: "",
      end_at_edit: "",
      start_date_edit: "",
      end_date_edit: "",
      link_join_edit: "",
      body_edit: "",
      city_edit: "",

      url_image_upload: "http://localhost:8000/storage/image/",
    };
  },
  methods: {
    // **************|-GET EVENT-|************** //
    getEvents() {
      axios
        .get(url)
        .then((res) => {
          this.My_Events = res.data;
        })
        .catch((err) => {
          console.log(err.response.data.message);
        });
    },
    getID(id) {
      this.eventID = id;
      console.log(id);
    },
    handleImageSelected(event) {
      const image = event.target.files[0];
      let reader = new FileReader();
      reader.onloadend = (e) => {
        this.previewProfile = e.target.result;
      };
      reader.readAsDataURL(image);
      this.imageFile = image;
    },
    handleSubmit() {
      let fileUpload = new FormData();
      fileUpload.append("image", this.imageFile);
      fileUpload.append("user_id", this.user_id);
      fileUpload.append("category_id", this.category_id);
      fileUpload.append("title", this.title);
      fileUpload.append("body", this.body);
      fileUpload.append("city", this.city);
      fileUpload.append("link_join", this.link_join);
      fileUpload.append("start_at", this.start_at);
      fileUpload.append("start_date", this.start_at);
      fileUpload.append("end_at", this.end_at);
      fileUpload.append("end_date", this.end_date);
      console.log(fileUpload);

      axios.post(url, fileUpload).then((response) => {
        console.log(response.data);
        this.getEvents();
      });
    },
    searchEvent() {
      if (this.eventName !== "") {
        axios.get(url + "/search/" + this.eventName).then((res) => {
          this.My_Events = res.data;
        });
      } else {
        this.getEvents();
      }
    },
    deleteEvent() {
      axios.delete(url + "/" + this.eventID).then((res) => {
        console.log(res.data);
        this.getEvents();
      });
    },
    UpdateEvent() {
      let fileUpload = new FormData();
      fileUpload.append("image", this.imageFile);
      fileUpload.append("user_id", this.user_id_edit);
      fileUpload.append("category_id", this.category_id_edit);
      fileUpload.append("title", this.title_edit);
      fileUpload.append("body", this.body_edit);
      fileUpload.append("city", this.city_edit);
      fileUpload.append("link_join", this.link_join_edit);
      fileUpload.append("start_at", this.start_at_edit);
      fileUpload.append("start_date", this.start_at_edit);
      fileUpload.append("end_at", this.end_at_edit);
      fileUpload.append("end_date", this.end_date_edit);
      console.log(fileUpload);
      axios.put(url + "/" + this.eventID, fileUpload).then((res) => {
        console.log(res.data);
        this.getEvents();
      });
    },
  },
  mounted() {
    this.getEvents();
  },
};
</script>

<!--========================|-STYLE CSS-|=======================-->
<style scoped>
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-NAVBAR BAR SEARCH STYLE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.navbar {
  background: #066588;
}

.row img {
  width: 100%;
  height: 300px;
}
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-BG LINEAR GRADIENT-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.btn img {
  width: 30px;
  height: 30px;
}

.dateTime {
  display: flex;
}
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-CARD STYLE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.card-body .card-title {
  font-weight: 800;
}

/* 
| -=-=-=-=-=-=-=-=-=-=-=|-BUTTON STYLE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.btn-event-edit,
.btn-event-remove {
  border: none;
  font-weight: 700;
}
.card-footer img {
  width: 30px;
  height: 30px;
}
.btn-event-edit:hover {
  background: #066588;
}
.btn-event-remove:hover {
  background: #ff0000;
}
</style>
