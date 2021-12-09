<template>
  <section>
    <!--========================|-NAVBAR SEARCH-|=======================-->
    <nav class="navbar navbar-light bg-light mb-4">
      <div class="container-fluid">
        <form class="d-flex">
          <input
            class="form-control me-2"
            type="text"
            placeholder="Search"
            aria-label="Search"
            v-model="all_Event"
            v-on:keyup.prevent="searchAllEvent"
          />
          <button
            class="btn btn-warning"
            type="button"
            v-on:click.prevent="searchAllEvent"
          >
            <img src="@/assets/search_searching_icon.png" />
          </button>
          <!--========================|-SORT BY-|=======================-->
          <select class="form-select ms-2 w-55" aria-label="Default select example">
            <option selected>SORT BY:</option>
            <option value="1">ID</option>
            <option value="2">TITLE</option>
            <option value="3">DESCRIPTION</option>
          </select>
        </form>
      </div>
    </nav>
    <!--========================|-LOOP DATA CARD-|=======================-->
  
      <all-event-card
        v-for="allevent of All_Events"
        :key="allevent.id"
        :allevent="allevent"
      ></all-event-card>

  </section>
</template>

<script>
// ~~~~~~~~~~~~~~~~~~~~~|-IMPORT AXIOS-|~~~~~~~~~~~~~~~~~~~~~ //
import axios from "axios";

// ~~~~~~~~~~~~~~~~~~~~~|-IMPORT ALL EVENT CARD-|~~~~~~~~~~~~~~~~~~~~~ //
import AllEventView from "./AllEvent-Card.vue";

// ~~~~~~~~~~~~~~~~~~~~~|-ALL EVENT URL-|~~~~~~~~~~~~~~~~~~~~~ //
const All_Event_URL = "http://127.0.0.1:8000/api/events";

export default {
  components: {
    "all-event-card": AllEventView,
  },
  data() {
    return {
      All_Events: [],
      all_Event: "",
    };
  },
  methods: {
    // *************|-GET ALL EVENT-|************* //
    getAllEvent() {
      axios.get(All_Event_URL).then((res) => {
        this.All_Events = res.data;
      });
    },
    // *************|-SEARCH ALL EVENT-|************* //
    searchAllEvent() {
      if (this.all_Event !== "") {
        axios.get(All_Event_URL + "/search/" + this.all_Event).then((res) => {
          this.All_Events = res.data;
        });
      } else {
        this.getAllEvent();
      }
    },
  },
  mounted() {
    this.getAllEvent();
    this.searchAllEvent();
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
.btn img {
  width: 30px;
  height: 30px;
} 
.form-select
{
  font-size: 15px;
}
</style>