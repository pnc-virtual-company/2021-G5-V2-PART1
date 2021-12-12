<template>
  <!--*************************|-*USER DETAIL*-|*************************-->
  <div class="container" v-if="user.first_name !==username_local">
    <div class="card">
      <div class="content">
        <div class="avatar">
          <img
            v-if="user.gender === 'M'"
            src="@/assets/sandsom-boy.jpg"
            alt="male"
          />
          <img v-else src="@/assets/beautiful-girl.jpg" alt="female" />
        </div>
        <div class="details">
          <div>
            <h3>{{ user.first_name }} {{ user.last_name }}</h3>
          </div>
          <div>
            <ion-icon name="calendar-outline"></ion-icon>
            <span>{{ user.date_of_birth }}</span>
          </div>
          <div>
            <ion-icon name="mail-outline"></ion-icon>
            <span>{{ user.email }}</span>
          </div>
        </div>
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
      username_local: null,
      name: null
    };
  },
  methods: {
    // ************************|-HIDE SHOW USER DETAIL-|************************ //
    toggleDetails() {
      this.detailsAreVisible = !this.detailsAreVisible;
    },
  },
  mounted() {
    let u = localStorage.getItem("signin")
    this.name = JSON.parse(u)
    this.username_local = this.name.user.first_name
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
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

.container {
  background: #fff;
  width: 100%;
  min-height: 50vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.card {
  position: relative;
  width: 85%;
  height: 250px;
  background: #8db8e29a;
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-radius: 25px;
  box-shadow: 0 25px 25px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: 1s;
  display: flex;
  justify-content: center;
  align-items: center;
  border-left: 5px solid #004f6c;
  border-right: 5px solid #004f6c;
}

.card:hover {
  /* transform: scale(1.1); */
  width: 500px;
  background: #8db8e29a;
}

.card::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 80px;
  background: rgba(255, 255, 255, 0.25);
}

.card .content {
  position: relative;
  display: flex;
  align-items: center;
  margin-top: -80px;
  gap: 25px;
}

.card .content .avatar {
  position: relative;
  width: 120px;
  height: 120px;
  overflow: hidden;
  border-radius: 50%;
}

.card .content .avatar img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.card .content .details {
  display: flex;
  flex-direction: column;
  gap: 10px;
  color: #111;
}

.card .content .details div {
  display: flex;
  align-items: center;
  gap: 10px;
}

.card .content .details h3 {
  font-weight: 600;
}

.card .content .details ion-icon {
  font-size: 1.5em;
}
</style>