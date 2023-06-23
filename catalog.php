<!DOCTYPE html>
<html lang="ru">
<head>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script defer src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script defer src="js/script.js"></script>
</head>
<body>
<header>
  <div class="catalog-header">
  <div class="header__burger">
      <span>
      </span>
    </div>
   <div class="navbar">
   <div class="header__menu">
        <nav class="menu">
          <a href="index.html"><img src="img/logo.png" width=200px height=55px></a>
        <ul>
          <li><a href="index.html">Главная</a></li>
          <li><a href="aboutus.html">О нас</a></li>
          <li><a href="catalog.php">Каталог</a></li>
          <li><a href="reviews.html">Отзывы</a></li>
          <li><img src="img/phone.png" width=15px height=15px>+7 (928)-601-22-26</li>
        </ul>
      </nav>
      </div>
  </div> 
    <div class="banner">
    <h1>Cадовая мебель из массива сосны</h1>
    <p>Доставка по России. Десятки положительных отзывов.<br>Производство под заказ</p><br><br>
    </div>
  </div>
  </header>
  <div class="catalog">
      <h1>Каталог</h1><br>
      <div class="catalog__products"> 
          <?php 
          include "db.php";
          $result = mysqli_query($induction, "SELECT * FROM `products`");

          while($products = mysqli_fetch_assoc($result)){ 
            ?>        
          <div class="product">
          <img src="<?php echo $products['imgFile']; ?>" width=100% height=100%>
          <h3><?php echo $products['name']; ?></h3>
          <a class="btn" href="index.html#feedback">Заказать</a>
        </div>
        <?php } ?>
      </div>

  </div>
  <div class="footer">
      <div class="footer__menu">
      <ul>
        <li><a href="index.html">Главная</a></li>
        <li><a href="aboutus.html">О нас</a></li>
        <li><a href="catalog.php">Каталог</a></li>
        <li><a href="reviews.html">Отзывы</a></li>
        <li><img src="img/phone.png" width=15px height=15px>+7 (928)-601-22-26</li>
      </ul>
    </div>
  </div>
</body>
</html>