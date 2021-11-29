<template>
  <header>
    <div class="wrapper">
      <!--================================|-NAVBAR-RIGHT-|================================-->
      <div class="navbar-right">
        <div class="nav-search d-flex">
          <input
            type="text"
            class="search mt-2 ms-3 w-25"
            placeholder=" Search Event"
          />
          <button class="btn ms-1 h-50 mt-2">
            <img src="../../assets/searching_icon.png"/>
          </button>
        </div>
        <!--================================|-BOOTSTRAP-CARD-|================================-->
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-1 ms-2 me-2 mb-4">
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">My Event</h5>
                <p class="card-text">Hello</p>
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
                 <button class="action-edit ms-4">
                  EDIT <i class="fa fa-edit"></i>
                </button>
                <button class="action-remove ms-2">
                  REMOVE <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">All Event</h5>
                <p class="card-text">Hello</p>
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
                 <button class="action-edit ms-4">
                  EDIT <i class="fa fa-edit"></i>
                </button>
                <button class="action-remove ms-2">
                  REMOVE <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Categories</h5>
                <p class="card-text">Hello</p>
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
                 <button class="action-edit ms-4">
                  EDIT <i class="fa fa-edit"></i>
                </button>
                <button class="action-remove ms-2">
                  REMOVE <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Members</h5>
                <p class="card-text">Hello</p>
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
                 <button class="action-edit ms-4">
                  EDIT <i class="fa fa-edit"></i>
                </button>
                <button class="action-remove ms-2">
                  REMOVE <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Users</h5>
                <p class="card-text">Hello</p>
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
                 <button class="action-edit ms-4">
                  EDIT <i class="fa fa-edit"></i>
                </button>
                <button class="action-remove ms-2">
                  REMOVE <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Actions</h5>
                <p class="card-text">Hello</p>
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
                 <button class="action-edit ms-4">
                  EDIT <i class="fa fa-edit"></i>
                </button>
                <button class="action-remove ms-2">
                  REMOVE <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
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
.navbar-right {
  display: block;
  width: 100%;
  background-image: url(../../assets/mountant.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  box-sizing: border-box;
}

/* =================|-USER PROFILE & NAME-|=================*/
.user-info {
  display: block;
  box-sizing: border-box;
  text-align: center;
}
.profile img {
  text-align: center;
  width: 80px;
  height: 80px;
  box-sizing: border-box;
}
.username h3 {
  color: #000;
  text-align: center;
  margin: 5px;
  font-family: "Roboto Slab", serif;
  font-weight: 800;
  font-size: 20px;
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
img {
  width: 30px;
  height: 30px;
}

span {
  padding: 10px;
  font-family: "Roboto Slab", serif;
  font-weight: 900;
  border-bottom: #f96233 3px solid;
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

small {
  color: #b9c2ca;
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

  .nav-search,
  .search input {
    width: 250%;
  }
}

header {
  margin: 0;
  padding: 0;
  font-family: "Ubuntu", sans-serif;
}
</style>