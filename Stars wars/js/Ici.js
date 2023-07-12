const logo = document.getElementById('logo');
const originalSrc = logo.src;
const newSrc = '../img/logo2.png';

logo.addEventListener('mouseover', function() {
  logo.src = newSrc;
});

logo.addEventListener('mouseout', function() {
  logo.src = originalSrc;
});
