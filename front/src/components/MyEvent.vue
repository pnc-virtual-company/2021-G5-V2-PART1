<template>
  <!--========================|-NAVBAR SEARCH-|=======================-->
  <section>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <!-- <a class="navbar-brand">My Event</a> -->
        <form class="d-flex">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-warning" type="button">
            <img src="../assets/search_searching_icon.png" />
          </button>
          <button
            class="btn btn-warning ms-2"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#create-myevent"
          >
            <img src="../assets/create_new_plus_icon.png" />
          </button>
        </form>
      </div>
    </nav>
    <!--========================|-CARD STYLE-|=======================-->
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <img src="@/assets/category_icon.png" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">My Event</h5>
            <p class="card-text">Hello World.</p>
          </div>
          <div class="card-footer">
            <small>12-Dec-2021/20-Nov-2021</small>
            <button
              class="btn-event-edit ms-5"
              type="button"
              data-bs-toggle="modal"
              data-bs-target="#edit-myevent"
            >
              Edit <i class="fa fa-edit" aria-hidden="true"></i>
            </button>
            <button
              class="btn-event-remove ms-2"
              type="button"
              data-bs-toggle="modal"
              data-bs-target="#remove-myevent"
            >
              Delete <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--========================|-MODAL-|=======================-->
    <!-- MODAL CREATE -->
    <div
      class="modal fade"
      id="create-myevent"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">
              Create New Event
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <input
              type="text"
              class="form-control"
              placeholder="Enter Hear..."
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
            <button type="button" class="btn btn-outline-warning">
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL POP UP EDIT -->
    <div
      class="modal fade"
      id="edit-myevent"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Update Event</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <input
              type="text"
              class="form-control"
              placeholder="Enter Hear..."
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
            <button type="button" class="btn btn-outline-warning">
              Update
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL POP UP REMOVE -->
    <div
      class="modal fade"
      id="remove-myevent"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Remove Event</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">You want to remove this event?</div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-outline-light"
              data-bs-dismiss="modal"
            >
              Cancel
            </button>
            <button type="button" class="btn btn-outline-warning">
              Remove
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>

// ~~~~~~~~~~~~~~~~~~~~~~|-IMPORT AXIOS-|~~~~~~~~~~~~~~~~~~~~~~ //
import axios from 'axios'
export default {
  data() {
    return {
      Event_URL: '',
      My_Events: []
    }
  },
  methods: {
    // **************|-GET EVENT-|************** //
    getMyEvent() {
       axios.post('Event_URL')
      .then(function (response) {
        this.Event_URL = response.data;
      })
      .catch(function (error) {
        alert(error);
      });
    }
  },
  mounted() {
    this.getMyEvent();
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
| -=-=-=-=-=-=-=-=-=-=-=|-CARD STYLE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.card-body .card-title {
  font-weight: 800;
}
.col {
  font-family: "Roboto Slab", serif;
}
.card {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  margin-top: 15px;
  margin-left: 15px;
  margin-right: 15px;
  cursor: pointer;
  box-shadow: rgba(19, 16, 16, 0.25) 0px 50px 100px -20px,
    rgba(9, 10, 9, 0.3) 0px 30px 60px -30px;
}
.card:hover {
  transition: all 1.2s ease;
  background: #004f6c;
  color: aliceblue;
}
.col img {
  width: 10%;
  height: 10%;
}
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-BG LINEAR GRADIENT-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.btn img {
  width: 30px;
  height: 30px;
}
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-MODAL STYLE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.modal-content {
  /* background: var(--sidebar-item-header); */
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  font-family: "Roboto Slab", serif;
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
  background: #23a6d5;
}
.btn-event-remove:hover {
  background: #ff0000;
}
</style>