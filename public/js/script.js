
document.body.onscroll = function (event) {
  if(window.pageYOffset !== 0) {
    document.querySelectorAll('header')[0].style.transition = "1s";
    document.querySelectorAll('header')[0].style.opacity = "0";
  } else {
    document.querySelectorAll('header')[0].style.transition = "0.5s";
    document.querySelectorAll('header')[0].style.opacity = "1";
  }
};

document.querySelectorAll('.brand-linked-image').forEach(function (element) {
  element.onclick = function (event) {
    location.href = this.getAttribute('data-href')  ;
  }
});