<template>
  <section>
    <!--========================|-CARD STYLE-|=======================-->
    <div class="page-container">
      <h1>OUR SERVICE</h1>
      <div class="hr"></div>
      <div class="page">
        <div class="card-container" onclick="moveF()">
          <div class="card" id="card1">
            <ion-icon name="code-slash-outline"></ion-icon>
            <h6>My Event</h6>
            <p>lorem iosum hight intelgent the laugh today</p>
            <button class="more">More</button>
          </div>
          <div class="card" id="card2">
            <ion-icon name="color-palette-outline"></ion-icon>
            <h6>All Event</h6>
            <p>lorem iosum hight intelgent the laugh today</p>
            <button class="more">More</button>
          </div>
          <div class="card" id="card3">
            <ion-icon name="speedometer-outline"></ion-icon>
            <h6>Categories</h6>
            <p>lorem iosum hight intelgent the laugh today</p>
            <button class="more">More</button>
          </div>
          <div class="card" id="card4">
            <ion-icon name="phone-landscape-outline"></ion-icon>
            <h6>Users</h6>
            <p>lorem iosum hight intelgent the laugh today</p>
            <button class="more">More</button>
          </div>
        </div>
      </div>
      <div class="hrs"></div>
      <button onclick="moveB()" id="btn">Cancel</button>
    </div>
  </section>
</template>
<script>
export default {};
</script>

<!--========================|-STYLE CSS-|=======================-->
<style scoped>
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-STYLE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.hr {
  border: 30px;
  width: 50%;
  height: 2px;
  background: linear-gradient(
    to right,
    rgba(255, 255, 255, 0.5),
    #fff,
    rgba(255, 255, 255, 0.5)
  );
}
.hrs {
  border: 30px;
  width: 80%;
  height: 2px;
  background: linear-gradient(
    to right,
    rgba(255, 255, 255, 0.219),
    #fff,
    rgba(255, 255, 255, 0.219)
  );
}
.page-container {
  width: 100%;
  height: 100vh;
  max-width: 100vw;
  max-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url(https://cdn.pixabay.com/photo/2020/05/03/07/43/green-5124174_960_720.jpg)
      center;
  background-size: cover;
}
.page-container .page {
  width: 100%;
  height: 400px;
  display: grid;
  align-items: center;
  justify-content: center;
}
.page-container .page .card-container {
  height: 350px;
  position: relative;
}
.card-container .card {
  width: 18vw;
  height: 40vh;
  position: absolute;
  top: 50%;
  left: 50%;
  transition: all 0.8s ease-in-out;
  border-radius: 8px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-around;
  color: white;
  padding: 20px 5px;
  cursor: pointer;
  border: solid 3px #fff;
}
.card ion-icon {
  font-size: 50px;
  color: #20de20;
}
@media screen and (max-width: 650px) {
  div.card {
    width: 30vw !important;
    height: 35vh !important;
  }
}
.card-container .card:first-child {
  transform: translate(-50%, -50%) rotate(10deg);
  background: url(https://cdn.pixabay.com/photo/2016/11/27/21/42/stock-1863880__340.jpg)
    center;
  background-size: cover;
}
.card-container .card:nth-child(2) {
  transform: translate(-50%, -50%) rotate(5deg);
  background: url(https://cdn.pixabay.com/photo/2015/07/28/22/01/office-865091_960_720.jpg)
    center;
  background-size: cover;
}
.card-container .card:nth-child(3) {
  transform: translate(-50%, -50%) rotate(-5deg);
  background: url(https://cdn.pixabay.com/photo/2019/07/12/18/48/code-4333398_960_720.jpg)
    center;
  background-size: cover;
}
.card-container .card:last-child {
  transform: translate(-50%, -50%) rotate(-10deg);
  background: url(https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720_960_720.jpg)
    center;
  background-size: cover;
  /* opacity: 0.5; */
}
.card-container:hover .card {
  transform: translate(-50%, -50%) rotate(0deg);
}
.animation {
  background: white;
  width: 100vw;
  display: flex;
  transition: all 1s ease;
}

#btn {
  width: 100px;
  height: 50px;
  background: transparent;
  color: white;
  border: 2px solid white;
  display: none;
  position: absolute;
  bottom: 5vh;
}
h1 {
  color: white;
  position: absolute;
  top: 5vh;
  font-family: "Roboto Slab", serif;
}
h6 {
  font-size: 30px;
  color: #fff;
  font-weight: 900;
  text-align: center;
  font-family: "Roboto Slab", serif;
}
p {
  font-size: 0.9em;
  color: #fff;
  font-weight: 500;
  font-family: "Roboto Slab", serif;
}
h1,
h6,
p {
  user-select: none;
}
.more {
  background: transparent;
  border: 1px solid #fff;
  color: white;
  padding: 3px 0.9em;
}
.more:hover,
#btn:hover {
  background: white;
  color: gray;
  cursor: pointer;
}
ion-icon {
  color: white;
  font-size: 20px;
}

/*~~~~~~~~~~~~~~~~~~~~~~~~~~|BUTTON SHOW MORE|~~~~~~~~~~~~~~~~~~~~~~~~~~*/

/*~~~~~~~~~~~~~~~~~~~~~~~~~~|BUTTON SHOW MORE|~~~~~~~~~~~~~~~~~~~~~~~~~~*/
</style>

