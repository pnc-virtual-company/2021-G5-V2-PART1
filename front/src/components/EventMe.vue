<template>
<section>
  <!--========================|-NAVBAR SEARCH-|=======================-->
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Home</a>
      <form class="d-flex">
        <input
          class="form-control me-2"
          type="search"
          placeholder="Search"
          aria-label="Search"
        />
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <!--========================|-CARD STYLE-|=======================-->

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card-1">
        <img src="../assets/event_month_icon.png" class="card-img-top" alt="" />
        <div class="card-body">
          <h5 class="card-title">My Event</h5>
          <p class="card-text">Hello World.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card-2">
        <img src="../assets/event_month_icon.png" class="card-img-top" alt="" />
        <div class="card-body">
          <h5 class="card-title">All Event</h5>
          <p class="card-text">Hello World.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card-3">
        <img src="../assets/event_month_icon.png" class="card-img-top" alt="" />
        <div class="card-body">
          <h5 class="card-title">Categories</h5>
          <p class="card-text">Hello World.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card-4">
        <img src="../assets/event_month_icon.png" class="card-img-top" alt="" />
        <div class="card-body">
          <h5 class="card-title">User</h5>
          <p class="card-text">Hello World.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card-5">
        <img src="../assets/event_month_icon.png" class="card-img-top" alt="" />
        <div class="card-body">
          <h5 class="card-title">Members</h5>
          <p class="card-text">Hello World.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card-6">
        <img src="../assets/event_month_icon.png" class="card-img-top" alt="" />
        <div class="card-body">
          <h5 class="card-title">Action</h5>
          <p class="card-text">Hello World.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card-7">
        <img src="../assets/event_month_icon.png" class="card-img-top" alt="" />
        <div class="card-body">
          <h5 class="card-title">Images</h5>
          <p class="card-text">Hello World.</p>
        </div>
      </div>
    </div>
  </div>
</section>
  <!--========================|-STYLE CSS-|=======================-->
</template>


<script>
export default {
  // name: 'HelloWorld'
  // props: {
  //   msg: String
  // }
}
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
  font-family: 'Roboto Slab', serif;
}
.card-1 {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  margin-top: 15px;
  margin-left: 15px;
  margin-right: 15px;
  cursor: pointer;
  overflow: hidden;
  border-radius: 0px 15px 0px 15px;
  transition: all 1.2s ease;
  box-shadow: rgba(19, 16, 16, 0.25) 0px 50px 100px -20px,
    rgba(9, 10, 9, 0.3) 0px 30px 60px -30px;
}
.card-2 {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  margin-top: 15px;
  margin-left: 15px;
  margin-right: 15px;
  cursor: pointer;
  overflow: hidden;
  border-radius: 0px 15px 0px 15px;
  transition: all 1.2s ease;
  box-shadow: rgba(19, 16, 16, 0.25) 0px 50px 100px -20px,
    rgba(9, 10, 9, 0.3) 0px 30px 60px -30px;
}
.card-3 {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  margin-top: 15px;
  margin-left: 15px;
  margin-right: 15px;
  cursor: pointer;
  overflow: hidden;
  border-radius: 0px 15px 0px 15px;
  transition: all 1.2s ease;
  box-shadow: rgba(19, 16, 16, 0.25) 0px 50px 100px -20px,
    rgba(9, 10, 9, 0.3) 0px 30px 60px -30px;
}
.card-4 {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  margin-top: 15px;
  margin-left: 15px;
  margin-right: 15px;
  cursor: pointer;
  overflow: hidden;
  border-radius: 0px 15px 0px 15px;
  transition: all 1.2s ease;
  box-shadow: rgba(19, 16, 16, 0.25) 0px 50px 100px -20px,
    rgba(9, 10, 9, 0.3) 0px 30px 60px -30px;
}
.card-5 {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  margin-top: 15px;
  margin-left: 15px;
  margin-right: 15px;
  cursor: pointer;
  overflow: hidden;
  border-radius: 0px 15px 0px 15px;
  transition: all 1.2s ease;
  box-shadow: rgba(19, 16, 16, 0.25) 0px 50px 100px -20px,
    rgba(9, 10, 9, 0.3) 0px 30px 60px -30px;
}
.card-6 {
 background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  margin-top: 15px;
  margin-left: 15px;
  margin-right: 15px;
  cursor: pointer;
  overflow: hidden;
  border-radius: 0px 15px 0px 15px;
  transition: all 1.2s ease;
  box-shadow: rgba(19, 16, 16, 0.25) 0px 50px 100px -20px,
    rgba(9, 10, 9, 0.3) 0px 30px 60px -30px;
}
.card-7 {
 background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  margin-top: 15px;
  margin-left: 15px;
  margin-right: 15px;
  cursor: pointer;
  overflow: hidden;
  border-radius: 0px 15px 0px 15px;
  transition: all 1.2s ease;
  box-shadow: rgba(19, 16, 16, 0.25) 0px 50px 100px -20px,
    rgba(9, 10, 9, 0.3) 0px 30px 60px -30px;
}
.card-1:hover {
  transform: scale(1.1);
  background: #004f6c;
  color: aliceblue;
}
.card-2:hover {
  transform: scale(1.1);
  background: #004f6c;
  color: aliceblue;
}
.card-3:hover {
  transform: scale(1.1);
  background: #004f6c;
  color: aliceblue;
}
.card-4:hover {
  transform: scale(1.1);
  background: #004f6c;
  color: aliceblue;
}
.card-5:hover {
  transform: scale(1.1);
  background: #004f6c;
  color: aliceblue;
}
.card-6:hover {
  transform: scale(1.1);
  background: #004f6c;
  color: aliceblue;
}
.card-7:hover {
  transform: scale(1.1);
  background: #004f6c;
  color: aliceblue;
}
.col img {
  width: 10%;
  height: 10%;
}
.navbar-brand
{
  font-family: 'Roboto Slab', serif;
  font-weight: 800;
  background: rgba(37, 228, 12, 0.404);
  padding: 5px;
}
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-BG LINEAR GRADIENT-|-=-=-=-=-=-=-=-=-=-=-= |
*/
</style>