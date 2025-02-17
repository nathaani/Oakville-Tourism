let mainImages = document.querySelectorAll('.mainImage');
let thumbnails = document.querySelectorAll('.thumbnail');

thumbnails.forEach((thumbnail, index) => {
  thumbnail.addEventListener('click', () => {
    thumbnails.forEach(t => t.classList.remove('active'));
    thumbnail.classList.add('active');
    mainImages.forEach(image => image.classList.remove('active'));
    mainImages[index].classList.add('active');
  });
});
