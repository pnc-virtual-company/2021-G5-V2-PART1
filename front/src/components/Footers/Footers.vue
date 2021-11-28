<template>
  <footer class="footer-distributed">
    <div class="footer-left">
      <img
        src="../../assets/pnc-logo.png"
      />
      <p>VC-PART-1-GROUP-5 &copy; 2021</p>
    </div>
    <div class="footer-center">
      <div>
        <i class="fas fa-map-marker-alt"></i>
        <p>
          <span>Street: 371, San Kat Tek Laork, Khan Tul Kouk</span>Phnom Penh,
          Cambodia
        </p>
      </div>
      <div>
        <i class="fas fa-phone-volume"></i>
        <p>+855 966 804 347</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p>
          <a href="mailto:support@company.com">example@gmail.com</a>
        </p>
      </div>
    </div>
    <div class="footer-right">
      <p
        class="footer-company-about"
        style="font-family: 'Battambang', cursive"
      >
        <span style="font-family: 'Battambang', cursive">About Our Team</span>
        We are a student at Passerellesnumeriques Cambodia (PNC) &amp;
        WEB-DEVILOPER.
      </p>
     <div class="footer-icons">
        <a href=""><i class="fab fa-facebook-square"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-twitter-square"></i></a>
        <a href=""><i class="fab fa-github-square"></i></a>
     </div>
    </div>
  </footer>
</template>
<script>
export default {};
</script>
<style scoped>
body {
  margin: 0;
  padding: 0;
}

.footer-distributed {
  background-color: #044c66;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 20px 20px;
  font-family: "Roboto Slab", serif;
}
.footer-distributed .footer-left
{
  margin-left: 4%;
  margin-top: 3%;
}
.footer-distributed .footer-left img
{
  width: 55%;
  height: 55%;
}
.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right {
  display: inline-block;
  vertical-align: top;
}

.footer-distributed .footer-left {
  width: 30%;
}

.footer-distributed .footer-links {
  color: #c5ced8;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a {
  display: inline-block;
  line-height: 1.8;
  text-decoration: none;
  color: inherit;
}

.footer-distributed .footer-links a:hover {
  background: rgba(15, 250, 7, 0.336);
  padding: 2px;
  border-radius: 15px 0px 15px 0px;
}

.footer-distributed .footer-company-name {
  color: #c5ced8;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-center {
  width: 35%;
}

.footer-distributed .footer-center i {
  background-color: #c5ced8;
  color: #0000ff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i:hover {
  background-color: #f96233;
}

.footer-distributed .footer-center i.fa-envelope {
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p {
  display: inline-block;
  color: #c5ced8;
  vertical-align: middle;
  margin: 0;
}

.footer-distributed .footer-center p span {
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}

.footer-distributed .footer-center p a {
  color: #5383d3;
  text-decoration: none;
}

.footer-distributed .footer-right {
  width: 20%;
}

.footer-distributed .footer-company-about {
  line-height: 20px;
  color: #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span {
  display: block;
  color: #c5ced8;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons {
  margin-top: 25px;
}

.footer-distributed .footer-icons a {
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  border-radius: 2px;
  font-size: 30px;
  text-align: center;
  line-height: 35px;
  margin-right: 15px;
  margin-bottom: 5px;
}

.footer-distributed .footer-icons a:hover {
  background-color: #f96233;
}

.footer-left img {
  overflow: hidden;
  transition: all 1.2s ease;
  cursor: pointer;
}
.footer-left img:hover {
  transform: scale(1.2);
}

.footer-left p {
  margin-bottom: 20px;
  color: #c5ced8;
  margin: 20px;
}

@media (max-width: 880px) {
  .footer-distributed {
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right {
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i {
    margin-left: 0;
  }
  .main {
    line-height: normal;
    font-size: auto;
  }
}
</style>