<template>
  <div>
    <section v-if="alert_act === 'create'">
      <Base-alert v-if="alert_me" class="alert-success alert">
        <strong class="text-success">Your category create successfully!</strong>
      </Base-alert>
    </section>
    <section v-else-if="alert_act === 'deleted'">
      <Base-alert v-if="alert_me" class="alert-danger alert">
        <strong class="text-danger">Your category delete successfully!</strong>
      </Base-alert>
    </section>
    <section v-else-if="alert_act === 'exist'">
      <Base-alert v-if="alert_me" class="alert-danger alert">
        <strong class="text-danger">The category already exist can not create!</strong>
      </Base-alert>
    </section>

    <Base-search>
      <Base-btn
        class="btn btn-outline-primary float-end ms-5"
        data-bs-toggle="modal"
        data-bs-target="#create_modal"
        >Create</Base-btn
      >
    </Base-search>

    <section>
      <!-- Modal create category  -->
      <Base-modal id="create_modal">
        <template #modal-title>
          <h4>Categories</h4>
        </template>
        <template #modal-body>
          <form class="mb-5" autocomplete="off">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label"
                >Please input your category name:</label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Categories name..."
                id="recipient-name"
                v-model="name"
              />
            </div>
          </form>
        </template>
        <template #modal-footer>
          <Base-btn class="btn btn-danger" data-bs-dismiss="modal"
            >Cancel</Base-btn
          >
          <Base-btn
            class="btn btn-primary"
            @click="create()"
            data-bs-dismiss="modal"
            >+Add</Base-btn
          >
        </template>
      </Base-modal>
    </section>
    <section class="cate--card row row-cols-1 row-cols-md-2 g-3 m-2">
      <Base-card
        v-for="category of categories"
        :key="category.id"
        :category="category"
      >
        <template #card-body>
          <h2 class="mb-5 text-white ms-3">{{ category.name }}</h2>
        </template>
        <template #card-footer>
          <!-- Modal edit category  -->

          <Base-btn
            class="btn btn-sm btn-danger float-end"
            @click="delete_cate(category.id)"
            >Delete</Base-btn
          >
          <Base-btn
            class="btn btn-sm btn-primary float-end me-2"
            data-bs-dismiss="modal"
            data-bs-target="#create_modal"
            >Edit</Base-btn
          >
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
      name: "",
      categories: [],
      id: 0,
      counter: 0,
      alert_me: false,
      alert_act: "",
    };
  },
  methods: {
    create() {
      let cate_name = {
        name: this.name,
      };
      if (this.name !== "") {
        axios
          .post("http://127.0.0.1:8000/api/categories", cate_name)
          .then((res) => {
          
            if (res.data.message === "exist") {
              this.alert_act = "exist";
              console.log(res.data.message);
              
  
            } else {
              this.alert_act = "create";
              console.log(res.data.message);
              
            }
              setInterval(() => {
                if (this.counter < 5) {
                  this.counter++;
                  this.alert_me = true;
                } else {
                  this.alert_me = false;
                }
              }, 1000);
              this.categories = res.data.categories;
              this.counter = 0;
          })
          .catch((err) => {
            console.log(err.response.data.message);
          });
        this.name = "";
      }
    },
    delete_cate(id) {
      axios.delete("http://127.0.0.1:8000/api/categories/" + id).then((res) => {
        this.alert_act = "deleted";
        this.categories = res.data.categories;
        setInterval(() => {
          if (this.counter < 5) {
            this.counter++;
            this.alert_me = true;
          } else {
            this.alert_me = false;
          }
        }, 1000);
        this.counter = 0;
      });
    },
    
  },
  mounted() {
    axios.get("http://127.0.0.1:8000/api/categories").then((res) => {
      this.categories = res.data;
      
    });
  },
};
</script>

<style scoped>
</style>