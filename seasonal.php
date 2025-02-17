<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seasonal Page</title>
  <link rel="stylesheet" href="css/seasonal.css">
</head>
<body>

  <div class="seasonal-container">
    <div class="banner-container">
      <img class="mainImage active" src="img/seasonal/banner-winter-text.png" data-index="0">
      <img class="mainImage" src="img/seasonal/banner-spring-text.png" data-index="1">
      <img class="mainImage" src="img/seasonal/banner-summer-text.png" data-index="2">
      <img class="mainImage" src="img/seasonal/banner-fall-text.png" data-index="3">
    </div>
    <div class="text-container">
      <h1>Winter</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="carousel-container">
      <div class="carousel" id="thumbnailCarousel">
        <img class="thumbnail active" src="img/seasonal/icon-winter.png" data-index="0">
        <img class="thumbnail" src="img/seasonal/icon-spring-text.png" data-index="1">
        <img class="thumbnail" src="img/seasonal/icon-summer-text.png" data-index="2">
        <img class="thumbnail" src="img/seasonal/icon-fall-text.png" data-index="3">
      </div>
    </div>
  </div>

  <script src="js/seasonal.js"></script>
</body>
</html>
