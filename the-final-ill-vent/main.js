//change the nav color when scrolling
window.onscroll = function () {
  var nav = document.querySelector(".header");
  if (window.pageYOffset > 1) {
    nav.classList.add("nav-scrolled");
  } else {
    nav.classList.remove("nav-scrolled");
  }
};
