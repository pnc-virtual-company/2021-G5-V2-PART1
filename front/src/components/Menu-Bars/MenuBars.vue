<template>
  <header>
    <!-- ==================|-LINK FONT AWESOME ICON-|================== -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap"
      rel="stylesheet"
    />
    <!--================|-NAVBAR-LEFT-|================-->
    <div class="container">
      <div class="navbar-left">
        <div class="user-info">
          <div class="profile">
            <img src="../../assets/user_male_icon.png" alt="" />
          </div>
          <div class="username">
            <h3>PHEARAK ENG</h3>
          </div>
        </div>
        <div class="button-add">
          <button class="button-event">ADD EVENT +</button>
          <button class="button-member">ADD MEMBER +</button>
          <button class="button-category">ADD CATEGORY +</button>
        </div>
        <div class="links">
          <nav>
            <ul>
              <li>
                <router-link to="/"
                  >Home <i class="fa fa-home" aria-hidden="true"></i
                ></router-link>
              </li>
              <li>
                <router-link to="/"
                  >My Event <i class="fa fa-calendar" aria-hidden="true"></i
                ></router-link>
              </li>
              <li>
                <router-link to="/"
                  >Members <i class="fa fa-users" aria-hidden="true"></i
                ></router-link>
              </li>
              <li>
                <router-link to="/"
                  >Categories
                  <i class="fa fa-calendar-times" aria-hidden="true"></i
                ></router-link>
              </li>
              <li>
                <router-link to="/"
                  >Create New Account
                  <i class="fa fa-user-plus" aria-hidden="true"></i
                ></router-link>
              </li>
              <li>
                <router-link to="/"
                  >Sign Up <i class="fa fa-sign-in" aria-hidden="true"></i
                ></router-link>
              </li>
               <li>
                <router-link to="/"
                  >Sign Out <i class="fa fa-sign-out" aria-hidden="true"></i
                ></router-link>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!--================================|-NAVBAR-RIGHT-|================================-->
      <div class="navbar-right">
        <!--================================|-CARD-|================================-->
        <div class="home-top">
          <span>Home <i class="fa fa-home" aria-hidden="true"></i></span>
          <input type="text" placeholder="Search" />
          <button class="search">SEARCH</button>
          <hr/>
        </div>
        <div class="card">
          <!--================================|-1-|================================-->
          <div class="card-one">
            <div class="img-1">
              <img src="../../assets/event_icon.png" alt="" />
            </div>
            <div class="card-1">
              <div class="card-title">My Event</div>
              <div class="card-body">
                <small>12-Nov-2021 / 12-Dec-2021</small>
                <hr />
              </div>
              <div class="card-footer">
                <small>7 Events</small>
              </div>
            </div>
          </div>
          <!--================================|-2-|================================-->
          <div class="card-two">
            <div class="img-2">
              <img src="../../assets/event_icon.png" alt="" />
            </div>
            <div class="card-2">
              <div class="card-title">All Event</div>
              <div class="card-body">
                <small>12-Nov-2021 / 12-Dec-2021</small>
                <hr />
              </div>
              <div class="card-footer">
                <small>78 Events</small>
              </div>
            </div>
          </div>
          <!--================================|-2-|================================-->
          <div class="card-three">
            <div class="img-3">
              <img src="../../assets/categoriesicon.png" alt="" />
            </div>
            <div class="card-3">
              <div class="card-title">Categories</div>
              <div class="card-body">
                <small>12-Nov-2021 / 12-Dec-2021</small>
                <hr />
              </div>
              <div class="card-footer">
                <small>18 Categories</small>
              </div>
            </div>
          </div>
        </div>
        <!--================================|-CARD ROW 2-|================================-->
        <div class="Card-2">
          <div class="card-four">
            <div class="img-4">
              <img src="../../assets/peoples_team_icon.png" alt="" />
            </div>
            <div class="card-4">
              <div class="card-title">Members</div>
              <div class="card-body">
                <small>12-Nov-2021 / 12-Dec-2021</small>
                <hr />
              </div>
              <div class="card-footer">
                <small>180 Members</small>
              </div>
            </div>
          </div>
          <div class="card-five">
            <div class="img-5">
              <img src="../../assets/user_male_icon.png" alt="" />
            </div>
            <div class="card-5">
              <div class="card-title">User</div>
              <div class="card-body">
                <small>12-Nov-2021 / 12-Dec-2021</small>
                <hr />
              </div>
              <div class="card-footer">
                <small>200 Users</small>
              </div>
            </div>
          </div>
          <div class="card-six">
            <div class="img-6">
              <img src="../../assets/action__icon.png" alt="" />
            </div>
            <div class="card-6">
              <div class="card-title">Action</div>
              <div class="card-body">
                <small>12-Nov-2021 / 12-Dec-2021</small>
                <hr />
              </div>
              <div class="card-footer">
                <small>18 Actions</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<style scoped>
.container {
  display: flex;
  justify-content: space-between;
  width: 100%;
  box-sizing: border-box;
}
/* =================|-NAVBAR-LEFT-|=================*/
.navbar-left {
  width: 25%;
  background: #d1d4d1;
  box-sizing: border-box;
  margin: auto;
  padding: 5px;
}

.navbar-right {
  width: 75%;
  background: #dcdddc;
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
}

/* =================|-BUTTON ADD-|=================*/
.button-add {
  display: block;
  text-align: center;
}
.button-add button {
  margin: 5px;
  font-family: "Roboto Slab", serif;
  font-weight: 600;
  font-size: 13px;
  cursor: pointer;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}
.button-event {
  background: #0ce23b;
  border: none;
  width: 36vh;
  height: 5vh;
  box-sizing: border-box;
}
.button-member {
  background: #0ce23b;
  border: none;
  width: 36vh;
  height: 5vh;
  box-sizing: border-box;
}
.button-category {
  background: #0ce23b;
  border: none;
  width: 36vh;
  height: 5vh;
  box-sizing: border-box;
}
.button-event:hover {
  background: #f96233;
}
.button-member:hover {
  background: #f96233;
}
.button-category:hover {
  background: #f96233;
}

/* =================|-NAVBAR UL LI-|=================*/
.home-top {
  padding: 10px;
  background: #d1d4d1;
}

.home-top input {
  border: none;
  width: 30%;
  height: 35px;
  margin: 10px;
  border-radius: 5px;
}
.search
{
  border: none;
  width: 10%;
  height: 35px;
  border-radius: 10px;
  font-size: 15px;
  font-weight: 600;
  background: #f96233;
  color: #fff;
  cursor: pointer;
}
.links {
  font-family: "Roboto Slab", serif;
  font-size: 15px;
  font-weight: 700;
}
.links nav {
  box-sizing: border-box;
  margin-right: 0;
}
.links ul {
  list-style: none;
}
.links ul li {
  margin: 10px;
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

/* =================|-CARD-1-|=================*/
.card {
  display: flex;
  justify-content: space-between;
  padding: 15px;
  font-family: "Roboto Slab", serif;
  font-size: 15px;
  font-weight: 900;
  cursor: pointer;
}

.Card-2 {
  display: flex;
  justify-content: space-between;
  padding: 15px;
  font-family: "Roboto Slab", serif;
  font-size: 15px;
  font-weight: 900;
  cursor: pointer;
}
.card-one {
  padding: 10px;
  display: flex;
  width: 30%;
  background: #bdd42b;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}
.img-1 {
  padding: 25px;
}
.card-footer {
  color: #fff;
  font-size: 15px;
}
/* =================|-CARD-2-|=================*/
.card-two {
  padding: 10px;
  display: flex;
  width: 30%;
  background: #f96233;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}
.img-2 {
  padding: 25px;
}
.card-footer {
  color: #fff;
  font-size: 15px;
}

/* =================|-CARD-3-|=================*/
.card-three {
  padding: 10px;
  display: flex;
  width: 30%;
  background: #43d42b;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}
.img-3 {
  padding: 25px;
}
.card-footer {
  color: #fff;
  font-size: 15px;
}

/* =================|-CARD-ROW-2-|=================*/
.card-four {
  padding: 10px;
  display: flex;
  width: 30%;
  background: #d42bb9;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}
.img-4 {
  padding: 25px;
}
.card-footer {
  color: #fff;
  font-size: 15px;
}
.card-five {
  padding: 10px;
  display: flex;
  width: 30%;
  background: #622bd4;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}
.img-5 {
  padding: 25px;
}
.card-footer {
  color: #fff;
  font-size: 15px;
}
.card-six {
  padding: 10px;
  display: flex;
  width: 30%;
  background: #33c9f9;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}
.img-6 {
  padding: 25px;
}
.card-footer {
  color: #fff;
  font-size: 15px;
}

header {
  margin: 0;
  padding: 0;
  font-family: "Ubuntu", sans-serif;
}
</style>