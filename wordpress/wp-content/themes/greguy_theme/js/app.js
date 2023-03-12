function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

let mybutton = document.getElementById("myBtn");
window.onscroll = function () {
  scrollFunction()
};



function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

