<template>
  <!--========================|-NAVBAR SEARCH-|=======================-->
  <section>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <form class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" v-model="eventName" v-on:keyup.prevent="searchEvent"/>
          <button class="btn btn-warning" type="button">
            <img src="@/assets/search_searching_icon.png" />
          </button>
          <button class="btn btn-warning ms-2" type="button" data-bs-toggle="modal" data-bs-target="#create-myevent" @click.prevent="getAction('create')" >
            <img src="@/assets/create_new_plus_icon.png" />
          </button>
        </form>
        <!--========================|-MODAL CREATE-|=======================-->
          <modal id="create-myevent">
            <template v-slot:modal-title>
              Create New Event
            </template>
            <template v-slot:modal-body>
              <form   >
                <event-dialog :action="action" @create-form="handleSubmit" >

                </event-dialog>
              </form>
            </template>
          </modal>
      </div>
    </nav>
    <!--========================|-CARD STYLE-|=======================-->
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <card v-for="event of My_Events" :key="event.id" >
          <template v-slot:card-header>
            <img src="@/assets/category_icon.png" class="card-img-top" alt="" />
          </template>
          <template v-slot:card-body>
            <h5 class="card-title">{{ event.title }}</h5>
            <p class="card-text">{{ event.body }}</p>
          </template>
          <template v-slot:card-footer>
            <small>{{ event.start_date }}/{{ event.end_date }}</small>
            <button class="btn-event-edit ms-5" type="button" data-bs-toggle="modal" data-bs-target="#edit-myevent" @click.prevent="getAction('edit')" @click="getEvent(event)">
                Edit <i class="fa fa-edit" aria-hidden="true"></i>
            </button>
            <button class="btn-event-remove ms-2" type="button" data-bs-toggle="modal" data-bs-target="#remove-myevent" @click.prevent="getId(event.id)">
                Delete <i class="fa fa-trash" aria-hidden="true" ></i>
            </button>
            <!--========================|-MODAL EDIT-|=======================-->
            <modal id="edit-myevent">
              <template v-slot:modal-title>
                Update Event
              </template>
              <template v-slot:modal-body>
                <!-- @submit.prevent="handleSubmit" -->
                <form >
                  <event-dialog  :event="event" :action="action" @edit-form="UpdateEvent">

                  </event-dialog>
                </form>
              </template>
            </modal>
            <!--========================|-MODAL DELETE-|=======================-->
            <modal id="remove-myevent">
              <template v-slot:modal-title>
                Remove Event
              </template>
              <template v-slot:modal-body>
                <form @submit.prevent="deleteEvent()">
                  <div class="mb-3 mt-3">You want to remove this event?</div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-outline-warning" data-bs-dismiss="modal">Remove</button>
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
const url = "http://localhost:8000/api/events";
import Modal from "./Modal/modal.vue";
import Card from "./Card/Card.vue";
import EventDialog from "./dialog/EventDialog.vue";

export default {
  components: {
    "modal": Modal,
    "card": Card,
    "event-dialog": EventDialog,
  },
  data() {
    return {
      My_Events: [],
      eventName: "",
      event: null,
      eventID: null,
      imageFile: null,
      action: null,
      
    };
  },
  methods: {
    // **************|-GET EVENT-|************** //
    getEvents(){
      axios.get(url).then((res) => {
        this.My_Events = res.data;
      })
      .catch((err) => {
        console.log(err.res.data.message);
      });
    },
    handleSubmit(value) {
      axios.post(url, value).then((response) => {
        console.log(response.data);
        this.getEvents();
      })
    },
    searchEvent() {
      if(this.eventName !== '') {
        axios.get(url + "/search/" + this.eventName).then(res => {
        this.My_Events = res.data;
        })
      }else {
        this.getEvents();
      }
      
    },
    getId(id){
      this.eventID = id;
    },
    getEvent(event){
      this.event = event;
      this.eventID = event.id;
      console.log(event);
      console.log(this.action);
    },
    deleteEvent(){
      axios.delete(url + "/" + this.eventID).then((res) => {
        console.log(res.data);
        this.getEvents();
      }) 
    },

    UpdateEvent(value){
      axios.put(url+"/" + this.eventID, value).then(res=>{
        console.log(res.data);
        this.clerForm();
        this.getEvents();
      })
      
    },
    getAction(action){
      this.action = action;
    }
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
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
}
@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

/* 
| -=-=-=-=-=-=-=-=-=-=-=|-BG LINEAR GRADIENT-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.btn img {
  width: 30px;
  height: 30px;
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
