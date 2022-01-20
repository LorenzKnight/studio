//Movement Animation to happen
const card = document.querySelector(".card");
const container = document.querySelector(".container");
//Items
const title = document.querySelector(".title");
const foto = document.querySelector(".foto");
const cerrar = document.querySelector(".close");
const description = document.querySelector(".info p");
const content = document.querySelector(".content");

//Moving Animation Event
container.addEventListener("mousemove", (e) => {
  let xAxis = (window.innerWidth / 2 - e.pageX) / 50;
  let yAxis = (window.innerHeight / 2 - e.pageY) / -50;
  card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
});

//Animate In
container.addEventListener("mouseenter", (e) => {
  card.style.transition = "none";
  //Popout
  title.style.transform = "translateZ(100px)";
  foto.style.transform = "translateZ(80px) rotateZ(-15deg)";
  description.style.transform = "translateZ(100px)";
  content.style.transform = "translateZ(100px)";
  cerrar.style.transform = "translateZ(100px) rotateX(360deg)";
});

//Animate Out
container.addEventListener("mouseleave", (e) => {
  card.style.transition = "all 0.5s ease";
  card.style.transform = `rotateY(0deg) rotateX(0deg)`;
  //Popback
  title.style.transform = "translateZ(0px)";
  foto.style.transform = "translateZ(0px) rotateZ(0deg)";
  description.style.transform = "translateZ(0px)";
  content.style.transform = "translateZ(0px)";
  cerrar.style.transform = "translateZ(0px) rotateX(0deg)";
});
