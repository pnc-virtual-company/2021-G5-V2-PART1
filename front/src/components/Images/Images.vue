<template>
  <section>
    <nav class="navbar navbar-light bg-info">
      <div class="container-fluid">
        <a class="navbar-brand">Images</a>
      </div>
    </nav>
    <div class="wrapper mt-3">
      <div class="card">
        <figure class="card__thumbnail">
          <img
            src="https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
          />
          <span class="card__title">Mrr. CHUM - YOURN</span>
        </figure>
      </div>
      <div class="card">
        <figure class="card__thumbnail">
          <img
            src="https://cdn.pixabay.com/photo/2021/11/04/06/15/woman-6767494_960_720.jpg"
          />
          <span class="card__title">Ms. SREYEAM - HORN</span>
        </figure>
      </div>
      <div class="card">
        <figure class="card__thumbnail">
          <img
            src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
          />
          <span class="card__title">Mrr. PHEARAK - ENG</span>
        </figure>
      </div>
      <div class="card">
        <figure class="card__thumbnail">
          <img
            src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
          />
          <span class="card__title">Mrr. THIN - CHHRANG</span>
        </figure>
      </div>
      <div class="card">
        <figure class="card__thumbnail">
          <img
            src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
          />
          <span class="card__title">Ms. SOPHORN - ENG</span>
        </figure>
      </div>
    </div>
  </section>
</template>


<style scoped>
@import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");
/* 
| -=-=-=-=-=-=-=-=-=-=-=|-BG LINEAR GRADIAN-|-=-=-=-=-=-=-=-=-=-=-= |
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
.navbar-brand {
  font-family: "Roboto Slab", serif;
  font-weight: 800;
  background: rgba(37, 228, 12, 0.404);
  padding: 5px;
}

/* 
| -=-=-=-=-=-=-=-=-=-=-=|-CARD IMAGE-|-=-=-=-=-=-=-=-=-=-=-= |
*/
*::before,
*::after {
  box-sizing: inherit;
}
.wrapper {
  display: flex;
  flex-flow: row;
  flex-wrap: wrap;
  justify-content: center;
}
.wrapper > * {
  margin: 0 1rem 2rem;
}

/*************************|CARD|**************************/
.card {
  position: relative;
  overflow: hidden;
  display: flex;
  width: 300px;
  height: 400px;
  border-radius: 4px;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14),
    0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
  transition: box-shadow 0.56s ease-in-out;
}

.card:hover {
  cursor: pointer;
  box-shadow: 0 24px 38px 3px rgba(0, 0, 0, 0.14),
    0 9px 46px 8px rgba(0, 0, 0, 0.12), 0 11px 15px -7px rgba(0, 0, 0, 0.2);
}
.card__title {
  align-self: flex-end;
  padding: 0.5rem;
  color: rgba(255, 255, 255, 0.9);
  font-size: 1.3rem;
  line-height: 1;
  font-weight: 600;
  text-align: center;
  align-items: center;
  font-family: "Roboto Slab", serif;
  /* text-shadow: 0 13.36px 8.896px #2c482e, 0 -2px 1px #aeffb4;
    letter-spacing: -4px;
    color: #6fb374; */
  text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9,
    0 5px 0 #aaa, 0 6px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3),
    0 3px 5px rgba(0, 0, 0, 0.2), 0 5px 10px rgba(0, 0, 0, 0.25),
    0 10px 10px rgba(0, 0, 0, 0.2), 0 20px 20px rgba(0, 0, 0, 0.15),
    0 30px 20px rgba(0, 0, 0, 0.1);
}

.card__thumbnail {
  position: relative;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;

  width: 100%;
  height: 100%;
}

.card__thumbnail > img {
  height: 100%;
}

.card__thumbnail > .card__title {
  position: absolute;
  left: 0;
  bottom: 0;
}

.has-bg-img {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

.bg-img-nature {
  background-image: url(https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ);
}
</style>