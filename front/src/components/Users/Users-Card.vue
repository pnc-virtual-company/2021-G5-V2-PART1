<template>
  <div class="col">
    <div class="card-1">
      <img v-if="user.gender === 'M'" src="@/assets/man_icon.png" alt="male" class="card-img-top mt-2" />
       <img v-else src="@/assets/female_icon.png" alt="female" class="mt-2">
      <div class="card-body">
        <h5 class="card-title">{{ user.first_name }} {{ user.last_name }}</h5>
        <button class="btn-detail" @click="toggleDetails">
          {{ detailsAreVisible ? "Hide" : "Show" }} Details
          <i class="fa fa-caret-square-down" aria-hidden="true"></i>
        </button>
      </div>

      <!--*************************|-*USER DETAIL*-|*************************-->
      <div class="detail-user">
        <ul v-if="detailsAreVisible">
          <li><img src="@/assets/gender.png" alt=""> {{ user.gender }}</li>
          <li><img src="@/assets/email.png" alt=""> {{ user.date_of_birth }}</li>
          <li><img src="@/assets/dd.png" alt=""> {{ user.email }}</li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["user"],
  data() {
    return {
      detailsAreVisible: false,
    };
  },
  methods: {
    // ************************|-HIDE SHOW USER DETAIL-|************************ //
    toggleDetails() {
      this.detailsAreVisible = !this.detailsAreVisible;
    },
  },
};
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
  font-size: 20px;
  font-weight: 800;
}
.col {
  font-family: "Roboto Slab", serif;
}
.card-1 {
  background: #006d95;
  margin-top: 15px;
  margin-left: 15px;
  margin-right: 15px;
  cursor: pointer;
  overflow: hidden;
  border-radius: 0px 50px 0px 50px;
  transition: all 1.2s ease;
  box-shadow: rgba(19, 16, 16, 0.25) 0px 50px 100px -20px,
    rgba(9, 10, 9, 0.3) 0px 30px 60px -30px;
  color: yellow;
}
.card-1:hover {
  /* transform: scale(1.1); */
  color: #fff;
}
.col img {
  width: 20%;
  height: 20%;
}
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-BG LINEAR GRADIENT-|-=-=-=-=-=-=-=-=-=-=-= |
*/
.btn img {
  width: 30px;
  height: 30px;
}
.btn-detail {
  width: 70%;
  border: none;
  background: #2bc50ca1;
  border-radius: 5px;
  color: #fff;
  font-size: 18px;
}
.btn-detail:hover {
  color: #000;
  transition: calc(1.2s);
  background: #23a6d5;
}

.detail-user ul li {
  list-style: none;
  font-size: 13px;
  justify-content: start;
  text-align-last: left;
  font-weight: 800;
  transition: calc(1.5s);
}

ul li 
{
    margin: 10px;
}

.detail-user img 
{
    width: 25px;
    height: 25px;
}
</style>