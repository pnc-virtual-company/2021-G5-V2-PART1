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
              <input type="date" placeholder="Start date..." class="form-control" v-model="start_date"/>
            </div>
            <div class="modal-body">
              <input type="time" placeholder="At..." class="form-control" v-model="start_at"/>
            </div>
          </div>
          <div class="dateTime">
            <div class="modal-body">
              <input type="date" placeholder="End date..." class="form-control" v-model="end_date"/>
            </div>
            <div class="modal-body">
              <input type="time" placeholder="At..." class="form-control" v-model="end_at"/>
            </div>
          </div>
          <div class="modal-body">
            <input type="text" placeholder="link join..." class="form-control" v-model="link_join"/>
          </div>
                
          <div class="modal-body">
            <div class="datalist-holder">
              <input list="country" name="country" class="datalist-input form-control" v-model="city"/>
                  <datalist id="country">
                        <option value="Afghanistan" />
                        <option value="Albania" />
                        <option value="Algeria" />
                        <option value="American Samoa" />
                        <option value="Andorra" />
                        <option value="Angola" />
                        <option value="Anguilla" />
                        <option value="Antarctica" />
                        <option value="Antigua and Barbuda" />
                        <option value="Argentina" />
                        <option value="Armenia" />
                        <option value="Aruba" />
                        <option value="Australia" />
                        <option value="Austria" />
                        <option value="Azerbaijan" />
                        <option value="Bahamas" />
                        <option value="Bahrain" />
                        <option value="Bangladesh" />
                        <option value="Barbados" />
                        <option value="Belarus" />
                        <option value="Belgium" />
                        <option value="Belize" />
                        <option value="Benin" />
                        <option value="Bermuda" />
                        <option value="Bhutan" />
                        <option value="Bolivia" />
                        <option value="Bosnia and Herzegovina" />
                        <option value="Botswana" />
                        <option value="Bouvet Island" />
                        <option value="Brazil" />
                        <option value="British Indian Ocean Territory" />
                        <option value="Brunei Darussalam" />
                        <option value="Bulgaria" />
                        <option value="Burkina Faso" />
                        <option value="Burundi" />
                        <option value="Cambodia" />
                        <option value="Cameroon" />
                        <option value="Canada" />
                        <option value="Cape Verde" />
                        <option value="Cayman Islands" />
                        <option value="Central African Republic" />
                        <option value="Chad" />
                        <option value="Chile" />
                        <option value="China" />
                        <option value="Christmas Island" />
                        <option value="Cocos (Keeling) Islands" />
                        <option value="Colombia" />
                        <option value="Comoros" />
                        <option value="Congo" />
                        <option value="Congo, The Democratic Republic of The" />
                        <option value="Cook Islands" />
                        <option value="Costa Rica" />
                        <option value="Cote D'ivoire" />
                        <option value="Croatia" />
                        <option value="Cuba" />
                        <option value="Cyprus" />
                        <option value="Czech Republic" />
                        <option value="Denmark" />
                        <option value="Djibouti" />
                        <option value="Dominica" />
                        <option value="Dominican Republic" />
                        <option value="Ecuador" />
                        <option value="Egypt" />
                        <option value="El Salvador" />
                        <option value="Equatorial Guinea" />
                        <option value="Eritrea" />
                        <option value="Estonia" />
                        <option value="Ethiopia" />
                        <option value="Falkland Islands (Malvinas)" />
                        <option value="Faroe Islands" />
                        <option value="Fiji" />
                        <option value="Finland" />
                        <option value="France" />
                        <option value="French Guiana" />
                        <option value="French Polynesia" />
                        <option value="French Southern Territories" />
                        <option value="Gabon" />
                        <option value="Gambia" />
                        <option value="Georgia" />
                        <option value="Germany" />
                        <option value="Ghana" />
                        <option value="Gibraltar" />
                        <option value="Greece" />
                        <option value="Greenland" />
                        <option value="Grenada" />
                        <option value="Guadeloupe" />
                        <option value="Guam" />
                        <option value="Guatemala" />
                        <option value="Guinea" />
                        <option value="Guinea-bissau" />
                        <option value="Guyana" />
                        <option value="Haiti" />
                        <option value="Heard Island and Mcdonald Islands" />
                        <option value="Holy See (Vatican City State)" />
                        <option value="Honduras" />
                        <option value="Hong Kong" />
                        <option value="Hungary" />
                        <option value="Iceland" />
                        <option value="India" />
                        <option value="Indonesia" />
                        <option value="Iran, Islamic Republic of" />
                        <option value="Iraq" />
                        <option value="Ireland" />
                        <option value="Israel" />
                        <option value="Italy" />
                        <option value="Jamaica" />
                        <option value="Japan" />
                        <option value="Jordan" />
                        <option value="Kazakhstan" />
                        <option value="Kenya" />
                        <option value="Kiribati" />
                        <option value="Korea, Democratic People's Republic of" />
                        <option value="Korea, Republic of" />
                        <option value="Kuwait" />
                        <option value="Kyrgyzstan" />
                        <option value="Lao People's Democratic Republic" />
                        <option value="Latvia" />
                        <option value="Lebanon" />
                        <option value="Lesotho" />
                        <option value="Liberia" />
                        <option value="Libyan Arab Jamahiriya" />
                        <option value="Liechtenstein" />
                        <option value="Lithuania" />
                        <option value="Luxembourg" />
                        <option value="Macao" />
                        <option value="Macedonia, The Former Yugoslav Republic of" />
                        <option value="Madagascar" />
                        <option value="Malawi" />
                        <option value="Malaysia" />
                        <option value="Maldives" />
                        <option value="Mali" />
                        <option value="Malta" />
                        <option value="Marshall Islands" />
                        <option value="Martinique" />
                        <option value="Mauritania" />
                        <option value="Mauritius" />
                        <option value="Mayotte" />
                        <option value="Mexico" />
                        <option value="Micronesia, Federated States of" />
                        <option value="Moldova, Republic of" />
                        <option value="Monaco" />
                        <option value="Mongolia" />
                        <option value="Montserrat" />
                        <option value="Morocco" />
                        <option value="Mozambique" />
                        <option value="Myanmar" />
                        <option value="Namibia" />
                        <option value="Nauru" />
                        <option value="Nepal" />
                        <option value="Netherlands" />
                        <option value="Netherlands Antilles" />
                        <option value="New Caledonia" />
                        <option value="New Zealand" />
                        <option value="Nicaragua" />
                        <option value="Niger" />
                        <option value="Nigeria" />
                        <option value="Niue" />
                        <option value="Norfolk Island" />
                        <option value="Northern Mariana Islands" />
                        <option value="Norway" />
                        <option value="Oman" />
                        <option value="Pakistan" />
                        <option value="Palau" />
                        <option value="Palestinian Territory, Occupied" />
                        <option value="Panama" />
                        <option value="Papua New Guinea" />
                        <option value="Paraguay" />
                        <option value="Peru" />
                        <option value="Philippines" />
                        <option value="Pitcairn" />
                        <option value="Poland" />
                        <option value="Portugal" />
                        <option value="Puerto Rico" />
                        <option value="Qatar" />
                        <option value="Reunion" />
                        <option value="Romania" />
                        <option value="Russian Federation" />
                        <option value="Rwanda" />
                        <option value="Saint Helena" />
                        <option value="Saint Kitts and Nevis" />
                        <option value="Saint Lucia" />
                        <option value="Saint Pierre and Miquelon" />
                        <option value="Saint Vincent and The Grenadines" />
                        <option value="Samoa" />
                        <option value="San Marino" />
                        <option value="Sao Tome and Principe" />
                        <option value="Saudi Arabia" />
                        <option value="Senegal" />
                        <option value="Serbia and Montenegro" />
                        <option value="Seychelles" />
                        <option value="Sierra Leone" />
                        <option value="Singapore" />
                        <option value="Slovakia" />
                        <option value="Slovenia" />
                        <option value="Solomon Islands" />
                        <option value="Somalia" />
                        <option value="South Africa" />
                        <option value="South Georgia and The South Sandwich Islands" />
                        <option value="Spain" />
                        <option value="Sri Lanka" />
                        <option value="Sudan" />
                        <option value="Suriname" />
                        <option value="Svalbard and Jan Mayen" />
                        <option value="Swaziland" />
                        <option value="Sweden" />
                        <option value="Switzerland" />
                        <option value="Syrian Arab Republic" />
                        <option value="Taiwan, Province of China" />
                        <option value="Tajikistan" />
                        <option value="Tanzania, United Republic of" />
                        <option value="Thailand" />
                        <option value="Timor-leste" />
                        <option value="Togo" />
                        <option value="Tokelau" />
                        <option value="Tonga" />
                        <option value="Trinidad and Tobago" />
                        <option value="Tunisia" />
                        <option value="Turkey" />
                        <option value="Turkmenistan" />
                        <option value="Turks and Caicos Islands" />
                        <option value="Tuvalu" />
                        <option value="Uganda" />
                        <option value="Ukraine" />
                        <option value="United Arab Emirates" />
                        <option value="United Kingdom" />
                        <option value="United States" />
                        <option value="United States Minor Outlying Islands" />
                        <option value="Uruguay" />
                        <option value="Uzbekistan" />
                        <option value="Vanuatu" />
                        <option value="Venezuela" />
                        <option value="Viet Nam" />
                        <option value="Virgin Islands, British" />
                        <option value="Virgin Islands, U.S" />
                        <option value="Wallis and Futuna" />
                        <option value="Western Sahara" />
                        <option value="Yemen" />
                        <option value="Zambia" />
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
<<<<<<< HEAD:front/src/components/AllEvent/MyEvent.vue
// import axios from 'axios'
// export default {
//   data() {
//     return {
//       Event_URL: '',
//       My_Events: []
//     }
//   },
//   methods: {
//     // **************|-GET EVENT-|************** //
//     getMyEvent() {
//        axios.post('Event_URL')
//       .then(function (response) {
//         this.Event_URL = response.data;
//       })
//       .catch(function (error) {
//         alert(error);
//       });
//     }
//   },
//   mounted() {
//     this.getMyEvent();
//   },
// };


// import Dialog from './Dialog.vue'
  import axios from 'axios';
  const API_URL = 'http://127.0.0.1:8000/api/events';

  export default {
    // components: { Dialog},
    data () {
      return {
        title: "",
        city: "",
        startdate: "",
        enddate: "",
        description: "",
        photo: null,
        // showDialog: false,
        eventLists: []
      }
    },
    methods: {
      
      Addevent() {
        let newEvent = {
          title: this.title,
          city: this.city,
          startdate: this.startdate,
          enddate: this.enddate,
          description: this.description,
          photo: this.photo,
        }
        axios.post(API_URL, newEvent).then(res => {
          this.eventLists.push(res.data.event);
          console.log("created")
        })

      },

      cancel() {
        console.log('cancel')
        // this.showDialog = false
      },
      confirm() {
        console.log('confirm')
        // this.showDialog = false
      },
      deleteEvent(id)
 {
        axios.delete(API_URL + "/" + id).then(res => {
          console.log(res.data);
          console.log("Deleted");
        })
      }
    },

    mounted() {
      axios.get(API_URL).then(res => {
        this.eventLists = res.data;
        console.log(res.data);
      })
    },
  }


=======
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
>>>>>>> 17d860d58fff5f1020846048f2e219b996c08a86:front/src/components/MyEvent.vue
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