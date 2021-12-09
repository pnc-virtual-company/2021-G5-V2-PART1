<template>
  <!--~~~~~~~~~~~~~~~~~~~~~~~|=HTML=|~~~~~~~~~~~~~~~~~~~~~~~-->
  <div class="box-container">
    <div class="box">
      <div class="box-content">
        <div class="profile-box">
          <img
            src="https://images.pexels.com/photos/2387873/pexels-photo-2387873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt=""
          />
          <div class="profile-name">
            <span class="name">
              {{ allevent.title }} (<strong>{{ allevent.category.name }}</strong
              >)
            </span>
            <small class="location"
              ><i class="fa fa-map-marker"></i> {{ allevent.city }}
            </small>
            <small class="time"
              ><i class="fas fa-clock"></i> {{ allevent.start_at }} -
              {{ allevent.end_at }}
            </small>
            <small class="time"
              ><i class="fal fa-table"></i> {{ allevent.start_date }} -
              {{ allevent.end_date }}
            </small>
          </div>
        </div>
        <div class="profile-btns">
          <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~|-BUTTON JOIN OR QUIT-|~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <button class="btn fill" @click="Join">
            {{ ifJoin ? "QUIT" : "JOIN" }}
            <i v-if="ifJoin" class="far fa-times-circle text-danger"></i>
            <i v-else class="far fa-check-circle text-success"></i>
          </button>

          <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~|-BUTTON FOLLOW OR UNFOLLOW-|~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <button class="btn fills" @click="Follow">
            {{ ifFollow ? "UNFOLLOW" : "FOLLOW" }}
            <i v-if="ifFollow" class="fas fa-minus-circle text-danger"></i>
            <i v-else class="far fa-plus-circle text-success"></i>
          </button>
        </div>
      </div>

      <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~|-BORDER-|~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
      <hr class="o" />

      <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~|-FOOTER CARD-|~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
      <div class="box-action">
        <span
          ><i class="fas fa-users"></i> <strong>12</strong>Joiner you know</span
        >
        <div class="avatars">
          <img
            src="https://images.pexels.com/photos/4075524/pexels-photo-4075524.png?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt=""
          />
          <img
            src="https://images.pexels.com/photos/4764224/pexels-photo-4764224.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt=""
          />
          <img
            src="https://images.pexels.com/photos/2531356/pexels-photo-2531356.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt=""
          />
          <img
            src="https://images.pexels.com/photos/4045599/pexels-photo-4045599.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt=""
          />
          <img
            src="https://images.pexels.com/photos/995978/pexels-photo-995978.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt=""
          />
          <img
            src="https://images.pexels.com/photos/5804257/pexels-photo-5804257.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt=""
          />
        </div>
      </div>
    </div>
  </div>
</template>

<!--~~~~~~~~~~~~~~~~~~~~~~~|=SCRIPT=|~~~~~~~~~~~~~~~~~~~~~~~-->
<script>
export default {
  props: ["allevent"],
  data() {
    return {
      ifJoin: false,
      ifFollow: false,
    };
  },
  methods: {
    Join() {
      this.ifJoin = !this.ifJoin;
    },
    Follow() {
      this.ifFollow = !this.ifFollow;
    },
  },
};
</script>

<!--~~~~~~~~~~~~~~~~~~~~~~~|=CSS=|~~~~~~~~~~~~~~~~~~~~~~~-->
<style>
:root {
  --radius: 10px;
}
.box-container {
  display: flex;
  justify-content: center;
  gap: 2rem;
  align-items: center;
  width: 100%;
  font-family: "Roboto Slab", serif;
}
.box {
  width: 90%;
  height: auto;
  background: #8db8e29a;
  overflow: hidden;
  border-radius: var(--radius);
  /* box-shadow: 12px 3px 8px 3px rgba(0, 0, 0, 0.3); */
  transition: 0.3s ease-in-out;
}
.box:hover {
  /* box-shadow: 12px 3px 6px 4px rgba(0, 0, 0, 0.1); */
  transform: scale(1.01);
}

.img-box {
  height: 25vh;
  background: #171711;
  border-top-left-radius: var(--radius);
  border-top-right-radius: var(--radius);
}
.img-box img {
  width: 100%;
  height: 100%;
}

.box-content {
  padding-left: 1rem;
  padding-right: 1rem;
  padding-top: 0rem !important;
  padding-bottom: 1rem;
}

.profile-box {
  display: flex;
  align-items: center;
  gap: 1rem;
}
.profile-box img {
  width: 80px;
  height: 80px;
  transform: scale(0.8);
  border-radius: 50%;
}

.profile-btns {
  display: flex;
  margin-top: 1rem;
  gap: 0.5rem;
  justify-content: space-evenly;
}
.profile-btns .btn {
  width: 100%;
  padding: 0.5rem;
  border-radius: 30px;
  border: none;
  font-weight: bold;
  cursor: pointer;
  transition: 0.2s ease-in;
}
.profile-btns .btn:hover {
  box-shadow: 7px 2px 8px 1px rgba(0, 0, 0, 0.2);
}
.fill {
  background: #06e43d;
  color: #fff;
}
.fills {
  background: #0497b1;
  color: #fff;
}
.outline {
  border: 1px solid rgba(0, 0, 0, 0.3);
  background: transparent;
}
.o {
  border: 5px;
  height: 2px;
  background: linear-gradient(
    to right,
    rgba(238, 9, 9, 0),
    #ff0000,
    rgba(0, 0, 0, 0)
  );
}
.profile-name {
  display: flex;
  text-align: start;
  flex-direction: column;
}
.profile-name .name {
  font-size: 1.2rem;
  font-weight: bold;
}
.profile-name strong {
  font-size: 1rem;
  font-weight: 500;
}
.profile-name .location {
  font-weight: 600;
  opacity: 0.7;
}
.profile-name .time {
  font-weight: 200;
  font-size: 15px;
  font-weight: normal;
  opacity: 0.5;
}
.box-action {
  padding: 1rem;
}
.box-action span {
  padding-right: 54.5em;
  font-size: 0.8rem;
}

.box-action .avatars {
  display: flex;
  gap: 0.3rem;
  margin-top: 0.5rem;
}
.box-action .avatars img {
  width: 35px;
  height: 35px;
  object-fit: cover;
  border-radius: 50%;
  background: red;
}
</style>