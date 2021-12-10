<template>
  <section>
    <!--========================|-CARD STYLE-|=======================-->
    <div class="page-container">
      <h1>ＷＥＬＣＯＭＥ</h1>
      <p class="descriptions">
        Ｐｌｅａｓｅｓ Ｅｎｊｏｙ Ｏｕｒ Ｗｅｂｓｉｔｅ💗
      </p>
      <br />
      <!--~~~~~~~~~~~~~~~~~~~|BORDER|~~~~~~~~~~~~~~~~~~~-->
      <div class="hr"></div>

      <!--~~~~~~~~~~~~~~~~~~~|CARD|~~~~~~~~~~~~~~~~~~~-->
      <div class="page">
        <div class="card-container" onclick="moveF()">
          <div class="card" id="card1">
            <ion-icon name="code-slash-outline"></ion-icon>
            <h6>My Event</h6>
            <p>
              Event is defined as a particular contest which is part of a
              program of contests.
            </p>
            <button class="more">More</button>
          </div>
          <div class="card" id="card2">
            <ion-icon name="calendar-number-outline"></ion-icon>
            <h6>All Event</h6>
            <p>
              Are occurrences that can be measured and change a business'
              financial position.
            </p>
            <button class="more">More</button>
          </div>
          <div class="card" id="card3">
            <ion-icon name="duplicate-outline"></ion-icon>
            <h6>Categories</h6>
            <p>
              Is any sort of division or class. An example of category is food
              that is made from grains.
            </p>
            <button class="more">More</button>
          </div>
          <div class="card" id="card4">
            <ion-icon name="people-outline"></ion-icon>
            <h6>Users</h6>
            <p>
              Unit for Social and Environmental Research. Governmental »
              Environmental -- and more
            </p>
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
    url(../assets/greateone.jpg) center;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
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
  position: absolute;
  top: 5vh;
  font-family: "Roboto Slab", serif;
  text-shadow: 0 13.36px 8.896px #1c351e, 0 -2px 1px #d4fcd6;
  letter-spacing: 2px;
  color: #62b668;
}
.descriptions {
  font-family: "Roboto Slab", serif;
  font-size: 25px;
  background: linear-gradient(to right, #fff, #86848d);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
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
  text-align: center;
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
/*~~~~~~~~~~~~~~~~~~~~~~~~~~~|~RESPONSIVE~|~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
@media screen and (max-width: 650px) {
  div.card {
    width: 30vw !important;
    height: 35vh !important;
  }
  .card ion-icon {
    font-size: 35px;
  }
  .descriptions {
    font-size: 15px;
  }
  h6 {
    font-size: 15px;
  }
  h1 {
    font-size: 20px;
  }
  p {
    font-size: 10px;
  }
}

/*~~~~~~~~~~~~~~~~~~~~~~~~~~|BUTTON SHOW MORE|~~~~~~~~~~~~~~~~~~~~~~~~~~*/

/*~~~~~~~~~~~~~~~~~~~~~~~~~~|BUTTON SHOW MORE|~~~~~~~~~~~~~~~~~~~~~~~~~~*/
</style>

