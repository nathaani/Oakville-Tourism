let images = document.querySelectorAll('.carousel-image');
let thumbnails = document.querySelectorAll('.thumbnail');

thumbnails.forEach((thumbnail, index) => {
  thumbnail.addEventListener('click', () => {
    images.forEach(image => image.classList.remove('active'));
    images[index].classList.add('active');
  });
});