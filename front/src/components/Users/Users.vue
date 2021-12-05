<template>
  <!--========================|-NAVBAR SEARCH-|=======================-->
  <div class="card">
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Users</a>
      <form class="d-flex">
        <input
          class="form-control me-2"
          type="search"
          placeholder="Search"
          aria-label="Search"
        />
        <button class="btn btn-warning" type="submit">
            <img src="../../assets/search_searching_icon.png"/>
        </button>
      </form>
    </div>
  </nav>

  <!--========================|-CARD STYLE-|=======================-->
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card-1">
        <img src="../../assets/man_icon.png" class="card-img-top mt-2" alt="" />
        <div class="card-body">
          <h5 class="card-title">Name: Chum</h5>
          <p class="card-text">Hello World.</p>
          <button class="btn-detail">More  <i class="fa fa-caret-square-down" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
  </div>

  <!--========================|-FOOTER STYLE-|=======================-->

  <!--========================|-STYLE CSS-|=======================-->
  </div>
  
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
.card-1 {
  background: #23a6d5;
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
.col img {
  width: 20%;
  height: 20%;
}
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-BG LINEAR GRADIENT-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.btn img
{
    width: 30px;
    height: 30px;
}
.navbar-brand 
{
  font-family: 'Roboto Slab', serif;
  font-weight: 800;
  background: rgba(37, 228, 12, 0.404);
  padding: 5px;
}
.btn-detail
{
    width: 30%;
    border: none;
}
</style>