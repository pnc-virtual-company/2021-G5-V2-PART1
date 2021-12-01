<template>
  <header>
    <div class="wrapper">
      <!--================================|-NAVBAR-RIGHT-|================================-->
      <div class="navbar-right">
        <div class="nav-search d-flex">
          <input
            type="text"
            class="search mt-2 ms-4 w-25"
            placeholder=" Search"
          />
          <button class="btn ms-1 h-50 mt-2">
            <img src="../../assets/searching_icon.png" />
          </button>
          <button
            class="btn ms-1 h-50 mt-2"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#create-category"
          >
            Create Categories
            <img src="../../assets/add_circle_create_expand_icon.png" />
          </button>
        </div>
        <!--================================|-BOOTSTRAP-CARD-|================================-->
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-1 ms-2 me-2 mb-4">
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">My Event</h5>
                <p class="card-text">Virtual Company PART-2 Group-5</p>
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
                <button
                  class="action-edit ms-4"
                  type="button"
                  data-bs-toggle="modal"
                  data-bs-target="#update-category"
                >
                  <i class="fa fa-edit"></i>
                </button>
                <button class="action-remove ms-2">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>
          <!--================================|-MODAL CREATE CATEGORY-|================================-->
          <div
            class="modal fade"
            id="create-category"
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
                    Create New Categories
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <input type="text" placeholder="Enter hear..." />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn" data-bs-dismiss="modal">
                    Close
                  </button>
                  <button type="button" class="btn">Submit</button>
                </div>
              </div>
            </div>
          </div>
          <!--================================|-MODAL UPDATE CATEGORY-|================================-->
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
                    Create New Categories
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <input type="text" placeholder="Enter hear..." />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn" data-bs-dismiss="modal">
                    Close
                  </button>
                  <button type="button" class="btn">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {};
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
  /* background: #c5ced8; */
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