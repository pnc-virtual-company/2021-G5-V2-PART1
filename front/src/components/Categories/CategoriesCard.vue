<template>
  <header>
    <form action="#">
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">{{ category.name }}</h5>
         
        </div>
        <div class="card-footer">
          
          <button
            class="action-edit ms-4"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#update-category" @click="editAction(category.id, category.name)"
          >
          <i class="fa fa-edit"></i>
          </button>
          <button
            class="action-remove ms-2"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#remove-category"
          >
            <i class="fa fa-trash" aria-hidden="true"></i>
          </button>
        </div>
      </div>
    </div>

    <!--================================|-MODAL-CREATE-|================================-->
    <div
      class="modal fade"
      id="staticBackdrop"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <h5 class="modal-title" id="staticBackdropLabel" >
             here is  Create New Categories
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <input type="text" v-model="name" placeholder="Enter hear..." />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn" data-bs-dismiss="modal" @click="addCategory">
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>

    <!--================================|-MODAL-REMOVE-|================================-->
    <div
      class="modal fade"
      id="remove-category"
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
              Remove Categories
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            Are you sure that you want to remove category?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">
              Cancel
            </button>
            <button type="button" class="btn" data-bs-dismiss="modal" @click="$emit('delete-categories', category.id)">Remove</button>
          </div>
        </div>

        <!--================================|-MODAL-UPDATE-|================================-->
      </div>
    </div>

     <!--================================|-MODAL-UPDATE-|================================-->
    <div
      class="modal fade"
      id="update-category"
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
              Update Categories
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
              <input type="text" v-model="name" placeholder="Enter hear..." />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">
              Cancel
            </button>
            <button type="button" class="btn" data-bs-dismiss="modal" @click="editCategory(category.id,name)">Update</button>

          </div>
        </div>
      </div>
    </div>
    </form>
  </header>
</template>

<script>
export default {
  props: ["category"],
  emits: ["add-categories", "delete-categories","editCategory"],
  data() {
    return {
      name: "",
      id_update: 0,
      id_delete: 0
    };
  },
  methods: {
    
    addCategory() {
      this.$emit("add-categories", this.name);
      this.name = "";
    },
    
    editAction(id, title){
      this.id_update = id;
      this.name = title;
      console.log(this.id_update);
      console.log(this.name);
    },

    editCategory(id,name){
      this.$emit("editCategory",id,name);
      console.log(id);
      this.name = "";
    },
    
   
    
    
  },
};
</script>
<style scoped>
.wrapper {
  display: flex;
  justify-content: space-between;
  width: 100%;
  box-sizing: border-box;
}
/* =================|-NAVBAR-LEFT-|=================*/

.navbar-right {
  display: block;
  width: 100%;
  background-image: url(../../assets/category.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  box-sizing: border-box;
}
img {
  width: 30px;
  height: 30px;
}
/* =================|-INUT SEARCH-|=================*/
.nav-search {
  box-sizing: border-box;
  position: relative;
}
::placeholder {
  color: #c5ced8;
}
.nav-search input {
  background: #004f6c;
  border-radius: 0px 15px 0px 15px;
  color: #f96233;
  border: none;
  border-bottom: 2px solid #f96233;
}
/* =================|-BUTTON SEARCH-|=================*/
.btn {
  background: #004f6c;
  color: #c5ced8;
  border-radius: 0px 15px 0px 15px;
  border-bottom: 2px solid #f96233;
}
.btn:hover {
  background: #f96233;
}
/* =================|-ROW CARD BOOTSTRAP-|=================*/
.row {
  font-family: "Roboto Slab", serif;
  font-weight: 800;
  font-size: 15px;
}
.card {
  background: #004f6c;
  border-radius: 0px 15px 0px 15px;
  color: #c5ced8;
  overflow: hidden;
  transition: all 1.2s ease;
  box-shadow: rgba(19, 16, 16, 0.25) 0px 50px 100px -20px,
    rgba(9, 10, 9, 0.3) 0px 30px 60px -30px;
  cursor: pointer;
  border-bottom: 2px solid #f96233;
}
.card:hover {
  transform: scale(1.1);
}

.card-title {
  font-family: "Roboto Slab", serif;
  font-weight: 900;
  font-size: 20px;
}

.card-footer {
  background: #02445c;
}

/* =================|-BUTTON EDIT & DELETE-|=================*/
.action-edit {
  background: #c5ced8;
  border: none;
  font-size: 15px;
  font-weight: 800;
  border-radius: 5px;
}
.action-edit:hover {
  background: orange;
}
.action-remove {
  background: #c5ced8;
  border: none;
  font-size: 15px;
  font-weight: 800;
  border-radius: 5px;
}
.action-remove:hover {
  background: red;
}

small {
  color: #b9c2ca;
}
/* =================|-MODAL-|=================*/
.modal-dialog {
  background: #004f6c;
}
.modal-header h5 {
  font-size: 20px;
  font-weight: 900;
}
.modal-body input {
  width: 100%;
  border: none;
  border-bottom: solid #f96233 2px;
  font-size: 20px;
  font-weight: 800;
  color: #004f6c;
}
.modal-body ::placeholder {
  color: #004f6c;
}

@media (max-width: 880px) {
  .wrapper {
    display: block;
  }
  .navbar-left {
    width: 100%;
    height: auto;
  }
  .navbar-right {
    width: 100%;
    height: auto;
  }
  .profile img {
    text-align: center;
    width: 70px;
    height: 70px;
  }
  .links {
    font-family: "Roboto Slab", serif;
    font-size: 15px;
    color: #004f6c;
  }
  .links nav {
    box-sizing: border-box;
  }

  .nav-search {
    width: 150%;
    display: block;
  }
}
</style>