<template>
  <header>
    <div id="progressbar"></div>
    <div id="scrollPath"></div>
    <!--================|-MAIN CLASS-|=================-->
    <div class="wrapper">
      <!--================|-NAVBAR-LEFT-|================-->
      <div class="navbar-left">
        <div class="user-info">
          <!--================|-USER-PROFILE-|================-->
          <div class="profile">
            <img src="../../assets/man_icon.png" alt="" />
          </div>
          <!--================|-USERNAME-|================-->
          <div class="username">
            <h3>VC-1-G5</h3>
          </div>
        </div>
        <!--================|-BUTTON ADD-|================-->
        <div class="button-add">
          <button class="button-event">ADD EVENT +</button>
          <button class="button-category">ADD CATEGORY +</button>
        </div>
        <!--================|-MENU-|================-->
        <div class="links">
          <nav class="mt-2">
            <ul>
              <li>
                <router-link to="/menubars"
                  ><i class="fa fa-home" aria-hidden="true"></i> Dashboard
                </router-link>
              </li>
              <li>
                <router-link to="/events"
                  ><i class="fa fa-calendar" aria-hidden="true"></i> My Event
                </router-link>
              </li>
              <li>
                <router-link to="/all-events"
                  ><i class="fa fa-users" aria-hidden="true"></i> All
                  Event</router-link
                >
              </li>
              <li>
                <router-link to="/categories"
                  ><i class="fa fa-calendar-times" aria-hidden="true"></i>
                  Categories</router-link
                >
              </li>
              <li>
                <router-link to="/"
                  ><i class="fa fa-users" aria-hidden="true"></i>
                  Members</router-link
                >
              </li>
              <li>
                <router-link to="/users"
                  ><i class="fa fa-users" aria-hidden="true"></i>
                  Users</router-link
                >
              </li>
              <li>
                <router-link to="/"
                  ><i class="fa fa-address-book" aria-hidden="true"></i>
                  Actions
                </router-link>
              </li>
            </ul>
          </nav>
        </div>
        <!--===============|-BTN-SIGN IN & SIGN UP-|================-->
        <div class="main-sign-btn">
          <router-link to="/"
            ><button class="sign-up-btn">
              <i class="fas fa-user-plus"></i> Sign Up
            </button>
          </router-link>
          <router-link to="/"
            ><button class="sign-out-btn">
              <i class="fas fa-sign-out-alt"></i> Sign Out
            </button>
          </router-link>
        </div>
      </div>
      <!--===============|-NAVBAR-RIGHT-|================-->
      <div class="navbar-right">
        <div class="main-page mb-5" id="navbar">
          <div class="content-left">
            <img src="../../assets/menu.png" alt="" />
          </div>
          <div class="content-right">
            <input type="text" class="search ms-3" placeholder=" Search" />
            <button class="btn mb-1">
              <img src="../../assets/searching_icon.png" alt="" />
            </button>
          </div>
        </div>
        <!--================================|-BOOTSTRAP-CARD-|================================-->
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-5 ms-2 me-2 mb-3">
          <div class="col">
            <router-link to="/events">
              <div class="card h-100">
                <div class="card-body d-flex">
                  <img src="../../assets/event_month_icon.png" alt="">
                  <h5 class="card-title ms-3 mt-2">My Event</h5>
                  <!-- <p class="card-text">Hello</p> -->
                </div>
                <div class="card-footer">
                  <small>12-Nov-2021/23-Dec-2021</small>
                </div>
              </div>
            </router-link>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="card-body d-flex">
                 <img src="../../assets/event_month_icon.png" alt="">
                <router-link to="/all-events"
                  ><h5 class="card-title ms-3 mt-2">All Event</h5>
                </router-link>
                <!-- <p class="card-text">Hello</p> -->
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body d-flex">
                  <img src="../../assets/category_icon.png" alt="">
                <router-link to="/categories"
                  ><h5 class="card-title ms-3 mt-2">Categories</h5></router-link
                >
                <!-- <p class="card-text">Hello</p> -->
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body d-flex">
                  <img src="../../assets/members_team_icon.png" alt="">
                <router-link to="/members"
                  ><h5 class="card-title ms-3 mt-2">Members</h5></router-link
                >
                <!-- <p class="card-text">Hello</p> -->
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body d-flex">
                 <img src="../../assets/users_icon.png" alt="">
                <router-link to="/users"
                  ><h5 class="card-title ms-3 mt-2">Users</h5></router-link
                >
                <!-- <p class="card-text">Hello</p> -->
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body d-flex">
                <img src="../../assets/action_icon.png" alt="">
                <router-link to="/allevents"
                  ><h5 class="card-title ms-3 mt-2">Actions</h5></router-link
                >
                <!-- <p class="card-text">Hello</p> -->
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<!--=====================|-SCRIPT DEFAULT-|=====================-->

<script>
export default {
  data() {
    return {};
  },
};
</script>

<!--========================|-STYLE CSS-|=======================-->
<style scoped>
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-SCROLLBAR STYLE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
::-webkit-scrollbar {
  width: 0px;
}
#scrollPath {
  position: fixed;
  top: 0;
  right: 0;
  width: 10px;
  background: #f96233;
  border-radius: 30px;
}
#progressbar {
  position: fixed;
  top: 0;
  right: 0;
  width: 10px;
  background: linear-gradient(to top, #008aff, #00ffe7);
  animation: animate 5s linear infinite;
}
@keyframes animate {
  0%,
  100% {
    filter: hue-rotate(0deg);
  }
  50% {
    filter: hue-rotate(360deg);
  }
}
#progressbar::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to top, #008aff, #00ffe7);
  filter: blur(30px);
}
#progressbar::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to top, #008aff, #00ffe7);
  filter: blur(30px);
}

/* 
| -=-=-=-=-=-=-=-=-=-=-=|-MAIN CLASS-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.wrapper {
  display: flex;
  justify-content: space-between;
  width: 100%;
  box-sizing: border-box;
}
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-NAVBAR LEFT-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.navbar-left {
  width: 25%;
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  box-sizing: border-box;
  padding: 5px;

  overflow: scroll;
  position:fixed;
  transition: 0.4s;
  z-index: 100;
  height: 100%;
}
.navbar-right {
  display: block;
  width: 75%;
  height: 100%;
  background-image: url(../../assets/sunset.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  box-sizing: border-box;
  float: left;
  margin-left: 25%;
}
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-BG LINEAR GRADIENT-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.main-page {
  width: 100%;
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  padding: 10px;
  display: flex;

  overflow: hidden;
  position:fixed;
  transition: 0.4s;
  z-index: 100;
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
| -=-=-=-=-=-=-=-=-=-=-=|-USER INFO STYLE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.user-info {
  display: block;
  box-sizing: border-box;
  text-align: center;
}
.profile img {
  text-align: center;
  width: 110px;
  height: 110px;
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

/* 
| -=-=-=-=-=-=-=-=-=-=-=|-BUTTON ADD EVENT OR CATE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.button-add {
  display: block;
  text-align: center;
}
.button-add button {
  margin: 3px;
  font-family: "Roboto Slab", serif;
  font-weight: 600;
  font-size: 13px;
  cursor: pointer;
  box-shadow: rgba(93, 87, 50, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
  color: #c5ced8;
  border-radius: 0px 15px 0px 15px;
  border-bottom: 2px solid #f96233;
  border-top: 2px solid #f96233;
}
.button-event {
  background: #004f6c;
  border: none;
  width: 40vh;
  height: 7vh;
  box-sizing: border-box;
}
.button-category {
  background: #004f6c;
  border: none;
  width: 40vh;
  height: 7vh;
  box-sizing: border-box;
}
.button-event:hover {
  background: #f96233;
  border-bottom: 2px solid #004f6c;
  border-top: 2px solid #004f6c;
}
.button-category:hover {
  background: #f96233;
  border-bottom: 2px solid #004f6c;
  border-top: 2px solid #004f6c;
}
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-BUTTON SIGN IN & OUT-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.main-sign-btn {
  display: block;
  text-align: center;
}
.main-sign-btn button {
  margin: 3px;
  font-family: "Roboto Slab", serif;
  font-weight: 600;
  font-size: 15px;
  cursor: pointer;
  box-shadow: rgba(93, 87, 50, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
  color: #c5ced8;
  border-radius: 0px 15px 0px 15px;
  border-bottom: 2px solid #f96233;
  border-top: 2px solid #f96233;
}
.sign-up-btn,
.sign-out-btn {
  background: #004f6c;
  border: none;
  width: 20vh;
  height: 7vh;
  box-sizing: border-box;
}
.sign-up-btn:hover {
  background: #0000ff;
}
.sign-out-btn:hover {
  background: #ff0000;
}
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-MENU UL LI STYLE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.links {
  font-family: "Roboto Slab", serif;
  font-size: 18px;
  font-weight: 700;
}
.links nav {
  box-sizing: border-box;
}
.links ul {
  list-style: none;
  text-decoration: none;
}
.links ul li {
  margin-bottom: 10px;
}
ul li a {
  text-decoration: none;
  color: #2c2827;
}
a {
  text-decoration: none;
  color: #c5ced8;
}
.links ul li a:hover {
  color: #f96233;
  cursor: pointer;
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
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-SEARCH STYLE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.content-left {
  justify-content: flex-start;
}
.content-left img {
  width: 50px;
  height: 50px;
  cursor: pointer;
}
.content-right input {
  background: #004f6c;
  border-radius: 0px 15px 0px 15px;
  color: #b9c2ca;
  border: none;
  border-bottom: 2px solid #f96233;
  font-family: "Roboto Slab", serif;
}
.content-right {
  float: left;
}
.content-right .search {
  background: #02445c;
  width: 50vh;
  height: 49px;
  border: none;
  border-radius: 0px 0px 0px 15px;
  border-bottom: 2px solid #f96233;
}
.content-right .btn {
  background: #02445c;
  color: #c5ced8;
  height: 49px;
  border-radius: 0px 15px 0px 0px;
  border-bottom: 2px solid #f96233;
}
.content-right .btn:hover {
  background: #f96233;
}
::placeholder {
  color: #c5ced8;
  font-family: "Roboto Slab", serif;
}
/* =================|-BUTTON SEARCH-|=================*/
.btn {
  background: #004f6c;
  color: #c5ced8;
  border-radius: 0px 15px 0px 0px;
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
  /* background-image: url(../../assets/sunset.jpg); */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  box-sizing: border-box;
  margin-top: 20%;
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
.card-body img
{
  width: 50px;
  height: 50px;
}
.card:hover {
  transform: scale(1.1);
  background: #004f6c;
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
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-RESPONSIVE STYLE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
@media (max-width: 880px) 
{
  .wrapper 
  {
    display: block;
  }
  .navbar-left 
  {
    width: 100%;
    height: auto;
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;

    overflow: scroll;
    position:sticky;
    transition: 0.4s;
    z-index: 100;
    height: 100%;
  }
  .navbar-right 
  {
    width: 100%;
    height: auto;
    margin: auto;
  }
  .profile img 
  {
    text-align: center;
    width: 120px;
    height: 120px;
    overflow: hidden;
    transition: all 1.2s ease;
    cursor: pointer;
  }
  .profile img:hover 
  {
    transform: scale(1.1);
  }
  .button-add 
  {
    display: block;
    text-align: center;
  }

  .button-add button 
  {
    margin: 2px;
    font-weight: 700;
    font-size: 17px;
  }
  .button-event,
  .button-member,
  .button-category 
  {
    background: #004f6c;
    border: none;
    width: 70vh;
    height: 7vh;
    box-sizing: border-box;
  }
  .links 
  {
    font-family: "Roboto Slab", serif;
    font-size: 20px;
    color: #004f6c;
  }
  /* .links nav a.active
  {
    background: #0000ff;
  } */
  .links nav ul li a
  {
    box-sizing: border-box;
    color: #000;
  }

  /* .navbar-right .main-page 
  {
    border-radius: 10px;
  } */
}
</style>