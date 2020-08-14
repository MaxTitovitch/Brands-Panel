document.querySelectorAll('.brand-item').forEach((element) => {
  element.onclick = function (event) {
    location.href = element.getAttribute('data-path');
  };
})