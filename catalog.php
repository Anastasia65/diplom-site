<!DOCTYPE html>
<html lang="ru">
<head>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
  <div class="page-header">
   <div class="navbar">
        <div class="menu">
          <a href=""><img src="img/logo.png" width=11% height=11%></a>
        <ul>
          <li><a href="index.html">Главная</a></li>
          <li><a href="">О нас</a></li>
          <li><a href="catalog.php">Каталог</a></li>
          <li><img src="img/phone.png" width=15px height=15px>+7 (928)-601-22-26</li>
        </ul>
   </div>
  </div> 
    <div class="banner">
    <h1>Cадовая мебель из массива сосны</h1>
    <p>Доставка по России. Десятки положительных отзывов.<br>Производство под заказ</p><br><br>
    <a class="button" href="#feedback">Подробнее</a>
    </div>
  </div>
  <div class="catalog">
      <h1>Каталог</h1><br>
          <?php 
          include "db.php";
          $result = mysqli_query($induction, "SELECT * FROM `products`");

          while($products = mysqli_fetch_assoc($result)){ 
            ?>        
          <div class="product">
          <img src="<?php echo $products['imgFile']; ?>" width=100% height=100%><br>
          <h3><?php echo $products['name']; ?></h3>
          <a class="btn" href="#feedback">Заказать</a>
        </div>
        <?php } ?>

     

   
  </div>

</body>
</html>