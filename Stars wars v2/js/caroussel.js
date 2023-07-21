const img1 = document.getElementById("img1");
const img2 = document.getElementById("img2");
const img3 = document.getElementById("img3");

const link1 = document.getElementById("link1");
const link2 = document.getElementById("link2");
const link3 = document.getElementById("link3");

const images = [
  "../img/poster1.png",
  "../img/poster2.png",
  "../img/poster3.png",
  "../img/poster4.png",
  "../img/poster5.png",
];
const links = [
  "../Episode.html",
  "../Episode2.html",
  "../Episode3.html",
  "../Episode4.html",
  "../Episode5.html",
];

let i = 0;

document.getElementById("aLeft").addEventListener("click", function () {
  i = (i + 1) % images.length;

  img1.src = images[(i + images.length - 1) % images.length];
  img2.src = images[i];
  img3.src = images[(i + 1) % images.length];

  link1.href = links[(i + links.length - 1) % links.length];
  link2.href = links[i];
  link3.href = links[(i + 1) % links.length];
});

document.getElementById("aRight").addEventListener("click", function () {
  i = (i - 1 + images.length) % images.length;

  img1.src = images[(i + images.length - 1) % images.length];
  img2.src = images[i];
  img3.src = images[(i + 1) % images.length];

  link1.href = links[(i + links.length - 1) % links.length];
  link2.href = links[i];
  link3.href = links[(i + 1) % links.length];
});

img1.src = images[images.length - 1];
img2.src = images[0];
img3.src = images[1];

link1.href = links[links.length - 1];
link2.href = links[0];
link3.href = links[1];
