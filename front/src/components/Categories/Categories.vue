<template>
<section>
  <!--========================|-NAVBAR SEARCH-|=======================-->
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <!-- <a class="navbar-brand">Categories</a> -->
      <form class="d-flex">
        <input
          class="form-control me-2"
          type="search"
          placeholder="Search"
          aria-label="Search"
        />
        <button class="btn btn-warning" type="submit">
          <img src="../../assets/search_searching_icon.png" />
        </button>
        <button class="btn btn-warning ms-2" type="submit">
          <img src="../../assets/create_new_plus_icon.png" />
        </button>
      </form>
    </div>
  </nav>
  <!--========================|-CARD STYLE-|=======================-->
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="../../assets/category_icon.png" class="card-img-top" alt="" />
        <div class="card-body">
          <h5 class="card-title">My Event</h5>
          <p class="card-text">Hello World.</p>
          <button class="btn-details ms-2" type="button">
            <img src="../../assets/details_icon.png" />
          </button>
           <button class="btn-update ms-2" type="button">
            <img src="../../assets/pen_edit_pencil_icon.png" />
          </button>
           <button class="btn-delete ms-2" type="button">
            <img src="../../assets/trash_basket_multimedia_icon.png" />
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
</template>

<script>
export default {
  //   name: 'HelloWorld'
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
.card {
  background: #e73c7e;
  color: #fff;
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
.card:hover {
  transform: scale(1.1);
  background: #004f6c;
  color: aliceblue;
}
.col img {
  width: 10%;
  height: 10%;
}
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-BG LINEAR GRADIENT-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.btn img {
  width: 30px;
  height: 30px;
}
.navbar-brand {
  font-family: 'Roboto Slab', serif;
  font-weight: 800;
  background: rgba(37, 228, 12, 0.404);
  padding: 5px;
}

/* 
| -=-=-=-=-=-=-=-=-=-=-=|-BTN DETAIL EDIT DELETE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.btn-details, .btn-update, .btn-delete
{
  width: 30%;
  border: none;
}

.btn-details img
{
  width: 30px;
  height: 30px;
}
.btn-update img
{
  width: 30px;
  height: 30px;
}
.btn-delete img
{
  width: 30px;
  height: 30px;
}


/* 
| -=-=-=-=-=-=-=-=-=-=-=|-RESPONSIVE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
@media (max-width: 880px) {
  .navbar .container-fluid
  {
    display: block;
  }
}

</style>