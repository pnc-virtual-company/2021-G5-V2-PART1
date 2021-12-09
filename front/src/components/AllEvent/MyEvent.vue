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
            <input type="text" placeholder="Enter title..." class="form-control" v-model="title"/>
          </div>
          <div class="modal-body">
            <select name="category" id="category" class="form-control">
              <option value="" selected disabled hidden>Category</option>
              <option value="1">Game</option>
              <option value="2">Meeting</option>
              <option value="3">Comunication</option>
              <option value="4">Education</option>
            </select>
          </div>
          <div class="modal-body">
            <!-- <div>
              <img v-show="imageUrl" :src="imageUrl" class="w-48 h-48 object-cover">
            </div> -->
            <input type="file" accept="image/*" class="form-control" @change="handleImageSelected"/>
          </div>
          <div class="dateTime">
            <div class="modal-body">
              <input type="datetime-local" placeholder="Start date..." class="form-control" v-model="start_date"/>
            </div>
          </div>
          <div class="dateTime">
            <div class="modal-body">
              <input type="datetime-local" placeholder="End date..." class="form-control" v-model="end_date"/>
            </div>
          </div>
          <div class="modal-body">
            <input type="alternate" placeholder="link join..." class="form-control" v-model="link_join"/>
          </div>
                
          <div class="modal-body">
            <div class="datalist-holder">
              <input list="country" name="country" class="datalist-input form-control" v-model="city" placeholder="Choose counrty..."/>
                  <datalist id="country">
                        <option value="Afghanistan" />
                        <option value="Albania" />
                        <option value="Algeria" />
                        <option value="American Samoa" />
                        <option value="Andorra" />
                        <option value="Zimbabwe" />
                  </datalist>
            </div>
                </div>
          <div class="modal-body">
            <input type="text" placeholder="Description..." class="form-control" v-model="body"/>
          </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-outline-light"
              data-bs-dismiss="modal"
            >
              Cancel
            </button>
            <button type="submit" class="btn btn-outline-warning" @click="handleSubmit">
              Submit
            </button>
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
      Event_URL: 'http://127.0.0.1:8000/api/events',
      My_Events: [],
      imageFile: null,
      user_id: 1,
      title: '',
      category_id: null,
      start_at: '',
      end_at: '',
      start_date: '',
      end_date: '',
      link_join: '',
      body: '',
      city: '',
    }
  },
  methods: {
    // **************|-GET EVENT-|************** //

    handleImageSelected(event){
      const image = event.target.files[0];
      let reader = new FileReader();
      reader.onloadend = e =>{
      this.previewProfile = e.target.result;
      }
      reader.readAsDataURL(image);
      this.imageFile = image;
      // console.log(this.imageFile);
            
        },
    handleSubmit(){
      let fileUpload = new FormData();
      fileUpload.append('image', this.imageFile);
      fileUpload.append('user_id', this.user_id);
      fileUpload.append('category_id', this.category_id);
      fileUpload.append('title', this.title);
      fileUpload.append('body', this.body);
      fileUpload.append('city', this.city);
      fileUpload.append('link_join', this.link_join);
      fileUpload.append('start_at', this.start_at);
      fileUpload.append('start_date', this.start_at);
      fileUpload.append('end_at', this.end_at);
      fileUpload.append('end_date', this.end_date);
      console.log(fileUpload);

      axios.post('http://127.0.0.1:8000/api/events', fileUpload)
      .then((response)=> {
        console.log(response);
        
      })
    }
  },
  mounted() {
    axios.get(this.Event_URL)
          .then((res)=>{
            this.My_Events = res.data
            console.log(res.data);
          })
          .catch((err)=>{
            console.log(err.response.data.message);
          })
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
.dateTime {
  display: flex;
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