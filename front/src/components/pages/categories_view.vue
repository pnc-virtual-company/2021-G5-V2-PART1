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
    <section></section>

    <section class="cate--card row row-cols-1 row-cols-md-2 g-3 m-2">
      <Base-card
        v-for="category of categories"
        :key="category.id"
        :category="category"
      >
        <template #card-body>
          <h4 class="mb-5">{{ category.name }}</h4>
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
            @click="editCategory(category)"
            >Edit</Base-btn
          >
        </template>
      </Base-card>
      <dialog-edit-category v-if="isShowdialog"
        :data = "categoryInfo"
        @cancel = "cancel" 
        @update = "updateCategory"
      />
    </section>
  </div>
</template>

<script>

import axios from "axios";
import DialogEditCategory from './DialogEditCategory.vue';
export default {
  components: {DialogEditCategory},
  data() {
    return {
      categoryInfo: "",
      name: "",
      alert_act: "",
      categories: [],
      alert_me: false,
      isShowdialog: false,
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
            this.alert_act = "created";
            console.log(res.data);
            this.getCategory();
            setInterval(() => {
              if (this.counter < 3) {
                this.counter++;
                this.alert_me = true;
              } else {
                this.alert_me = false;
              }
            }, 1000);
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
          if (this.counter < 3) {
            this.counter++;
            this.alert_me = true;
          } else {
            this.alert_me = false;
          }
        }, 1000);
        this.counter = 0;
      });
    },
    editCategory(categoryInfo) {
      this.isShowdialog = true;
      this.categoryInfo = categoryInfo
    },
    cancel(){
      this.isShowdialog = false;
    },

    updateCategory(id,category,hideForm){
      console.log(category + " | " + id + " | " + hideForm);
      axios.put("http://127.0.0.1:8000/api/categories/" + id , category).then(res => {
        console.log(res.data);
        this.getCategory();
        this.isShowdialog = hideForm;
      })

    },
    getCategory(){
      axios.get("http://127.0.0.1:8000/api/categories").then((res) => {
        this.categories = res.data;
      });
    },
  },
  mounted() {
    this.getCategory();
  },
};
</script>

<style scoped>
.search {
  background: var(--sidebar-bg-color);
}
.search .search--btn {
  background: var(--sidebar-item-active);
}
</style>