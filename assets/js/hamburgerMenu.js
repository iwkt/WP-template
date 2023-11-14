const hamburgerMenuButton = document.querySelector("#hambuger-btn");

const drawer = document.getElementById("drawer");

const mobileMenus = document.querySelectorAll(".js-drawer");
const body = document.querySelector("#body");
const html = document.querySelector("#html");

mobileMenus.forEach((mobileMenu) => {
  mobileMenu.addEventListener("click", () => {
    drawer.classList.toggle("is-active");
    body.classList.toggle("is-active");
    html.classList.toggle("is-active");
  });
});
