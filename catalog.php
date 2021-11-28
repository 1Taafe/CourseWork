<?php 
  $conn = new mysqli("localhost", "root", "", "catalog");
  if($conn->connect_error){
      header('location: error.html');
      exit();
  }
?>

<!doctype html>
<html lang="ru">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/catalog.css">
    <link rel="stylesheet" type="text/css" href="assets/css/common.css">
    <link rel="shortcut icon" href="assets/icon/icon.png" type="image/png">
    <title>Offstore - Каталог</title>
  </head>

  <body id="catalogBody">
    
    <div class="container-fluid">
        <a class="menuButton">
          <span class="line1"></span>
          <span class="line2"></span>
          <span class="line3"></span>
        </a>
        <div class="row">
            <div class="col-lg-12 bar">
                <span class="siteTitle">Offstore</span>
            </div>
        </div>
        <div class="row menuRow">
            <div class="col-lg-12 menuBar">
                <a href="index.html"><i class="bi bi-house-fill"></i></a>
                <a href="about.php">О компании</a>
                <a href="catalog.php" class="activeLink">Каталог</a>
                <a href="info.html">Информация</a>
            </div>
        </div>
        <div class="row brandsRow sticky-top">
            <div class="col-lg-12 brandsBar">
                <a href="#" class="brands activeBrand" data-bs-target="#carouselExampleControls"  data-bs-slide-to="0">Sony</a>
                <a href="#" class="brands" data-bs-target="#carouselExampleControls"  data-bs-slide-to="1">JBL</a>
                <a href="#" class="brands" data-bs-target="#carouselExampleControls"  data-bs-slide-to="2">Xiaomi</a>
                <a href="#" class="brands" data-bs-target="#carouselExampleControls"  data-bs-slide-to="3">Apple</a>
            </div>
        </div>
        <div class="sliderRow row">
            <div class="col-lg-12 sliderBox myCarousel">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner carouselItems">
                      <div class="carousel-item active item1 items" data-bs-interval="3000">
                        <div class="carousel-caption">Sony WH-1000XM4 <br>Погрузитесь в любимую музыку</div>
                        <a class="cButton">Каталог Sony</a>
                      </div>
                      <div class="carousel-item item2 items" data-bs-interval="3000">
                        <div class="carousel-caption">JBL Club One<br>Звук профессионального уровня</div>
                        <a class="cButton">Каталог JBL</a>
                      </div>
                      <div class="carousel-item item3 items" data-bs-interval="3000">
                        <div class="carousel-caption">Xiaomi Earbuds Basic 2<br>Всегда с собой и никаких проводов</div>
                        <a class="cButton">Каталог Xiaomi</a>
                      </div>
                      <div class="carousel-item item4 items" data-bs-interval="3000">
                        <div class="carousel-caption">Apple Airpods Max<br>Сказочно красивое звучание</div>
                        <a class="cButton">Каталог Apple</a>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Следующий</span>
                    </button>
                  </div>
            </div>
        </div>

        <div class="row rowCatalog">
          <div class="col-lg-1"></div>
          
          <div class="col-lg-10 myCatalog">
            <div class="catalogTitle">
              <span>Каталог Sony</span> 
            </div>


            <div class="accordion catalogBox" id="accordionExample">


            <?php

              $sql = "SELECT * FROM `products` WHERE `name` like 'Sony%' ";
              include "getCatalog.php";
              
            ?>

            </div>
          </div>
          
          <div class="col-lg-1"></div>
        </div>
        <div class="row rowCatalog">
          
          <div class="col-lg-1"></div>
          
          <div class="col-lg-10 myCatalog">
            <div class="catalogTitle">
              <span>Каталог JBL</span> 
            </div>

            <div class="accordion catalogBox" id="accordionExample2">

              <?php

                $sql = "SELECT * FROM `products` WHERE `name` like 'JBL%' ";
                include "getCatalog.php";

              ?>

            </div>
          </div>
          
          <div class="col-lg-1"></div>

        </div>
        <div class="row rowCatalog">
        <div class="col-lg-1"></div>
          
          <div class="col-lg-10 myCatalog">
            <div class="catalogTitle">
              <span>Каталог Xiaomi</span> 
            </div>

            <div class="accordion catalogBox" id="accordionExample3">

              <?php

                $sql = "SELECT * FROM `products` WHERE `name` like 'Xiaomi%' ";
                include "getCatalog.php";

              ?>

            </div>
          </div>
          
          <div class="col-lg-1"></div>
        </div>
        <div class="row rowCatalog">
        <div class="col-lg-1"></div>
          
          <div class="col-lg-10 myCatalog">
            <div class="catalogTitle">
              <span>Каталог Apple</span> 
            </div>

            <div class="accordion catalogBox" id="accordionExample4">

              <?php

                $sql = "SELECT * FROM `products` WHERE `name` like 'Apple%' ";
                include "getCatalog.php";

              ?>

            </div>
          </div>
          
          <div class="col-lg-1"></div>
        </div>

        <div class="row cardsTitleRow">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <div class="catalogTitle2">
              <span>Актуальное</span> 
            </div>
          </div>
          <div class="col-lg-1"></div>
        </div>

        <div class="row cardsRow">
          <?php include "getCatalogCards.php"; ?>
        </div>

        <div class="cartRow row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <div class="orderBox">
              <form name="orderForm" class="orderForm" action="assets/php/mail.php" method="POST">
                <input class="myButton" type="submit" value="Отправить">
                <input class="myInput" id="productCost" type="text" name="cost" readonly>
                <label class="myLabel">Стоимость</label>
                <input class="myInput" id="productName" type="text" name="product" readonly>
                <label class="myLabel">Товар</label>
                <input class="myInput" type="text" name="adress" required placeholder="Укажите полный адрес (город, улица, дом, квартира)">
                <label class="myLabel">Адрес</label>
                <input class="myInput" type="email" name="email" required placeholder="Для отправления вам копии заявки">
                <label class="myLabel">E-mail</label>
                <input class="myInput" type="text" name="phoneNumber" pattern="\+375[0-9]{9}" required placeholder="Формат: +375XXXXXXXXX">
                <label class="myLabel">Номер телефона</label>
                <input class="myInput" type="text" name="name" required pattern="^[А-Яа-яЁё]+$" placeholder="Как к вам можно обращаться? (Только имя)">
                <label class="myLabel">Имя</label>
                <div class="cartTitle">Покупка</div>
                <a id="closeOrder"><i class="bi bi-x-circle"></i></a>
              </form>
            </div>
          </div>
          <div class="col-lg-3"></div>
        </div>

        <div class="row footerRow">
          <div class="col-lg-12 footer">
            <div class="footerBox">
              <div class="contacts">
                <div class="phoneTitle">Оформление заказа по телефону:</div>
                <div class="phone">+375331200036</div>
                <div class="phone">+375441200039</div>
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <div class="emailList">
                    <div>advdep@offstore.by</div>
                    <div>info@offstore.by</div>
                  </div>
                </div>
              </div>
              <div class="moreInfo">
                <div class="logo">Offstore</div>
                <div class="lInfo">
                  ООО "Оффстор-ритейл"<br>
Республика Беларусь, г. Минск, ул. Бенгальская, д. 34
лицензия №3688974 от 12.10.2021<br>
Работаем с 9:00 до 20:10 (Пн - Пт)<br><br>
Информация, размещенная в каталоге носит исключительно информативный характер. Изображение товара может отличаться от реального товара. 
                </div>
              </div>
            </div>
            <div class="footerLinks">
              <ul>
                <li><a href="index.html">Главная</a>
                <li><a href="about.php">О нас</a>
                <li><a href="catalog.php">Каталог</a>
                <li><a href="info.html">Информация</a>
              </ul>
              <a href="#" class="upScroll">
                <i class="bi bi-arrow-up-circle"></i>
              </a>
            </div>
            
          </div>

    </div>

    <?php $conn->close(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
  </body>

</html>