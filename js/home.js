let images = document.querySelectorAll('.banner-slide');
let thumbnails = document.querySelectorAll('.thumbnail');

thumbnails.forEach((thumbnail, index) => {
  thumbnail.addEventListener('click', () => {
    images.forEach(image => image.classList.remove('active'));
    thumbnails.forEach(thumb => thumb.classList.remove('active'));

    images[index].classList.add('active');
    thumbnails[index].classList.add('active');
  });
});
