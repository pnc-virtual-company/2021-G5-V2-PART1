<template>
  <header>
    <div id="progressbar"></div>
    <div id="scrollPath"></div>
    <div class="wrapper">
      <!--================|-NAVBAR-LEFT-|================-->
      <div class="navbar-left">
        <div class="user-info">
          <!--================|-USER-PROFILE-|================-->
          <div class="profile">
            <img src="../../assets/user_male_icon.png" alt="" />
          </div>
          <!--================|-USERNAME-|================-->
          <div class="username">
            <h3>VC-1-G5</h3>
          </div>
        </div>
        <!--================|-BUTTON ADD-|================-->
        <div class="button-add">
          <button class="button-event">ADD EVENT +</button>
          <!-- <button class="button-member">ADD MEMBER +</button> -->
          <button class="button-category">ADD CATEGORY +</button>
        </div>
        <!--================|-MENU-|================-->
        <div class="links">
          <nav class="mt-2">
            <ul>
              <li>
                <router-link to="/menubars"
                  ><i class="fa fa-home" aria-hidden="true"></i> Home
                </router-link>
              </li>
              <li>
                <router-link to="/events"
                  ><i class="fa fa-calendar" aria-hidden="true"></i> My Event
                </router-link>
              </li>
                <li>
                <router-link to="/all-events"
                  ><i class="fa fa-users" aria-hidden="true"></i>
                  All Event</router-link
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
                  Actions</router-link
                >
              </li>
              <li>
                <router-link to="/"
                  ><i class="fa fa-sign-in" aria-hidden="true"></i> Sign Up
                </router-link>
              </li>
              <li>
                <router-link to="/"
                  ><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out
                </router-link>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!--================================|-NAVBAR-RIGHT-|================================-->
      <div class="navbar-right">
        <div class="nav-search d-flex">
          <input
            type="text"
            class="search mt-2 ms-3 w-25"
            placeholder=" Search"
          />
          <button class="btn ms-1 h-50 mt-2">
            <img src="../../assets/searching_icon.png" alt="" />
          </button>
        </div>
        <!--================================|-BOOTSTRAP-CARD-|================================-->
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-1 ms-2 me-2">
          
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <router-link to="/events"><h5 class="card-title">My Event</h5></router-link>
                <p class="card-text">Hello</p>
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
              </div>
            </div>
          </div>
          <!-- <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <router-link to="/all-events"><h5 class="card-title">All Event</h5> </router-link>
                <p class="card-text">Hello</p>
              </div>
              <div class="card-footer">
              <small>12-Nov-2021/23-Dec-2021</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                 <router-link to="/categories"><h5 class="card-title">Categories</h5></router-link>
                <p class="card-text">Hello</p>
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                 <router-link to="/members"><h5 class="card-title">Members</h5></router-link>
                <p class="card-text">Hello</p>
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                 <router-link to="/users"><h5 class="card-title">Users</h5></router-link>
                <p class="card-text">Hello</p>
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                 <router-link to="/allevents"><h5 class="card-title">Actions</h5></router-link>
                <p class="card-text">Hello</p>
              </div>
              <div class="card-footer">
                <small>12-Nov-2021/23-Dec-2021</small>
              </div>
            </div>
          </div> -->
        
        </div>
      </div>
    </div>
  </header>
</template>

<!--================================|-SCRIPT-|================================-->
<script>
export default {
  data() {
    return {
      
    }
  },
};
</script>

<!--================================|-STYLE CSS-|================================-->
<style >
::-webkit-scrollbar
{
  width: 0px;
}
#scrollPath
{
  position: fixed;
  top: 0;
  right: 0;
  width: 10px;
  background: #f96233;
  border-radius: 30px;
}
#progressbar
{
  position: fixed;
  top: 0;
  right: 0;
  width: 10px;
  background: linear-gradient(to top, #008aff, #00ffe7);
  animation: animate 5s linear infinite;
}
@keyframes animate
{
  0%, 100%
  {
    filter: hue-rotate(0deg);
  }
  50%
  {
    filter: hue-rotate(360deg);
  }
}
#progressbar::before
{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to top, #008aff, #00ffe7);
  filter: blur(30px);
}
#progressbar::after
{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to top, #008aff, #00ffe7);
  filter: blur(30px);
}

.wrapper {
  display: flex;
  justify-content: space-between;
  width: 100%;
  box-sizing: border-box;
}
/* =================|-NAVBAR-LEFT-|=================*/
.navbar-left {
  width: 25%;
  background: #83878b;
  box-sizing: border-box;
  padding: 5px;
}
.navbar-right {
  display: block;
  width: 75%;
  background-image: url(../../assets/laptop.jpg);
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

/* =================|-BUTTON ADD-|=================*/
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
.button-member {
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
.button-member:hover {
  background: #f96233;
  border-bottom: 2px solid #004f6c;
  border-top: 2px solid #004f6c;
}
.button-category:hover {
  background: #f96233;
  border-bottom: 2px solid #004f6c;
  border-top: 2px solid #004f6c;
}

/* =================|-NAVBAR UL LI-|=================*/
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
a
{
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
  transform: scale(1.2);
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
  .button-add {
    display: block;
    text-align: center;
  }

  .button-add button {
    margin: 2px;
    font-weight: 200;
    font-size: 13px;
  }
  .button-event,
  .button-member,
  .button-category {
    background: #004f6c;
    border: none;
    width: 70vh;
    height: 5vh;
    box-sizing: border-box;
  }
  .links {
    font-family: "Roboto Slab", serif;
    font-size: 15px;
    /* font-weight: 200; */
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