<template>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ allevent.title }}</h5>
        <p class="card-text">
          <strong
            ><img src="@/assets/clock_icon.png" alt="" /> Start At:</strong
          >
          {{ allevent.start_at }}
        </p>
        <p class="card-text mt-3">
          <strong><img src="@/assets/clock_icon.png" alt="" /> End At:</strong>
          {{ allevent.end_at }}
        </p>
        <p class="card-text mt-3">
          <strong
            ><img src="@/assets/calendar_icon.png" alt="" /> Start Date:</strong
          >
          {{ allevent.start_date }}
        </p>
        <p class="card-text mt-3">
          <strong
            ><img src="@/assets/calendar_icon.png" alt="" /> End Date:</strong
          >
          {{ allevent.end_date }}
        </p>
        <p class="card-text mt-3">
          <strong
            ><img src="@/assets/location_icon.png" alt="" /> City:</strong
          >
          {{ allevent.city }}
        </p>
      </div>
      <div class="card-footer">
        <div class="btn-group" role="group" aria-label="Third group">
          <button type="button" class="btn btn-light">
            Quit <img src="@/assets/exit_icon.png" />
          </button>
        </div>
        <div class="btn-group ms-2" role="group" aria-label="Third group">
          <button type="button" class="btn btn-light">
            Join <img src="@/assets/correct_icon.png" />
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["allevent"],
};
</script>

<style scoped>
.card-body .card-title {
  font-weight: 800;
  font-size: 25px;
}
.card-text {
  font-size: 15px;
  justify-content: start;
  text-align: start;
}
/* .card-text strong img 
{
  width: 35px;
  height: 35px;
} */
.card-footer {
  justify-content: start;
  background: #01465f;
  text-align: start;
  font-size: 15px;
}
.col {
  font-family: "Roboto Slab", serif;
}
.card {
  background: #006d95;
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
  /* transform: scale(1.1); */
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
</style>