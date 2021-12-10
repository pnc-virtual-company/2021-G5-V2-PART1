<template>
  <section>
    <!--================================|-NAVBAR SEARCH-|================================-->
    <nav class="navbar">
      <form class="d-flex">
        <input
          class="form-control ms-4"
          type="text"
          placeholder=" Search"
          aria-label="Search"
          v-model="name"
          v-on:keyup.prevent="searchName"
        />
        <button
          class="btn btn-warning ms-1"
          type="button"
          v-on:click.prevent="searchAllEvent"
        >
          <img src="@/assets/search_searching_icon.png" />
        </button>
        <button
          class="btn btn-warning ms-1"
          type="button"
          data-bs-toggle="modal"
          data-bs-target="#staticBackdrop"
        >
          <img src="@/assets/create_new_plus_icon.png" />
        </button>
      </form>
    </nav>
    <!--================================|-BOOTSTRAP-CARD-|================================-->
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-1 ms-2 me-2 mb-4">
      <category-card
        v-for="category of categories"
        :key="category.id"
        :category="category"
        @add-categories="createCategory"
        @delete-categories="deleteCagegories"
        @editCategory="UpdateCategory"
      ></category-card>
    </div>
  </section>
</template>
<!--~~~~~~~~~~~~~~~~~~~~~~~~|~SCRIPT~|~~~~~~~~~~~~~~~~~~~~~~~~-->
<script>
import axios from "axios";

import CategoriesCard from "./CategoriesCard.vue";
const url = "http://localhost:8000/api/categories";

export default {
  components: {
    "category-card": CategoriesCard,
  },
  data() {
    return {
      categories: [],
      name: "",
    };
  },
  methods: {
    getCategories() {
      axios.get(url).then((res) => {
        this.categories = res.data;
      });
    },

    createCategory(name) {
      const addCat = {
        name: name,
      };
      axios.post(url, addCat).then((response) => {
        this.categories.push(response.data.category);
      });
    },

    deleteCagegories(cagegoriesId) {
      console.log(cagegoriesId);
      axios.delete(url + "/" + cagegoriesId).then((res) => {
        console.log(res.data);
        this.getCategories();
      });
    },

    searchName() {
      if (this.name !== "") {
        axios.get(url + "/search/" + this.name).then((res) => {
          this.categories = res.data;
        });
      } else {
        this.getCategories();
      }
    },
    UpdateCategory(id, title) {
      axios.put(url + "/" + id, { name: title }).then((res) => {
        console.log(res.data);
        this.getCategories();
      });
    },
  },
  mounted() {
    this.getCategories();
  },
};
</script>

<!--~~~~~~~~~~~~~~~~~~~~~~~~|~STYLE~|~~~~~~~~~~~~~~~~~~~~~~~~-->
<style scoped>
.navbar {
  background: #004f6c;
}
img {
  width: 30px;
  height: 30px;
}
.row {
  font-family: "Roboto Slab", serif;
  font-weight: 800;
  font-size: 15px;
  text-align: start;
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