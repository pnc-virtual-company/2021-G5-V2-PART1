<template>
  <div class="container">
    <div class="card">
      <img
        v-if="user.gender === 'Male'"
        src="@/assets/sandsom-boy.jpg"
        alt="profile picture"
        class="profile__picture"
      />
      <img
        v-else
        src="@/assets/beautiful-girl.jpg"
        alt="profile picture"
        class="profile__picture"
      />
      <div class="text">
        <h3>{{ user.first_name }} {{ user.last_name }}</h3>
      </div>
      <div class="contact">
        <hr />
        <button @click="showDetail()">
          {{ detailsAreVisible ? "Hide" : "Show" }} Details
        </button>
        <div class="user-detail">
          <ul v-if="detailsAreVisible">
            <li><strong>First Name:</strong> {{ user.first_name }}</li>
            <li><strong>Last Name:</strong> {{ user.last_name }}</li>
            <li><strong>Gender:</strong> {{ user.gender }}</li>
            <li><strong>Date of Birth:</strong> {{ user.date_of_birth }}</li>
            <li><strong>Email:</strong> {{ user.email }}</li>
          </ul>
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
    };
  },
  methods: {
    showDetail() {
      this.detailsAreVisible = !this.detailsAreVisible;
    },
  },
};
</script>

<style scoped>
.container {
  text-align: center;
}
.card {
  background: #eee;
  width: 50%;
  text-align: center;
  margin-left: 25%;
  margin-top: 70px;
  position: relative;
  padding: 0 0 0.5em 0;
  -webkit-box-shadow: 0 0 8px 6px rgba(0, 0, 0, 0.19);
  box-shadow: 0 0 8px 6px rgba(0, 0, 0, 0.19);
  margin-bottom: 65px;
}

.card .profile__picture {
  position: absolute;
  height: 100px;
  width: 100px;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  border-radius: 50%;
  border: 3px solid #20de20;
  -webkit-box-shadow: 0 -10px 10px 0 rgba(0, 0, 0, 0.19);
  box-shadow: 0 -10px 10px 0 rgba(0, 0, 0, 0.19);
}

.text {
  padding: 3.7em 0 0;
}

.text h3 {
  margin: 0 0 0 0;
  font-size: 1.4rem;
  font-weight: 500;
  font-family: "Roboto Slab", serif;
  font-weight: 800;
}
h4 {
  font-size: 0.9rem;
}
.text h5 {
  margin: 0 0 0 0;
  color: #212336;
  font-weight: 300;
  font-size: 0.9rem;
}
.text p {
  margin: 14px 0 0 0;
  color: #000;
}
hr {
  border: 0;
  height: 2px;
  color: #20de20;
}

.contact button {
  border: none;
  padding: 5px;
  background: rgb(179, 177, 177);
  color: #000;
  font-family: "Roboto Slab", serif;
}

@media (max-width: 880px) {
  .card {
    width: 70%;
  }
  .card .profile__picture {
    height: 70px;
    width: 70px;
  }
  .text h3 {
    font-size: 1.2rem;
  }
}

.user-detail {
  padding: 10px;
  font-family: "Roboto Slab", serif;
  justify-content: flex-start;
  text-align: start;
}
.user-detail ul li {
  list-style: none;
}
</style>