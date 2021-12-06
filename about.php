<?php 
  $conn = new mysqli("localhost", "root", "", "comments");
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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/about.css">
    <link rel="stylesheet" type="text/css" href="assets/css/common.css">
    <link rel="shortcut icon" href="assets/icon/icon.png" type="image/png">
    <title>Offstore - О компании</title>
  </head>

  <body id="aboutBody">
    
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
                <a href="about.php" class="activeLink">О компании</a>
                <a href="catalog.php" class="">Каталог</a>
                <a href="info.html" class="">Информация</a>
            </div>
        </div>

        <div class="row titleRow">
          <div class="col-lg-1"></div>
          <div class="col-lg-11 aboutTitle">Почему мы?</div>
        </div>

        <div class="row prefRow">
          <div class="col-lg-5">
            <div class="pref">
              <i class="bi bi-cart-check prefIcon"></i>
              <div class="pref1">1000+</div>
              <div class="pref2">успешных заказов</div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="pref">
              <a class="prefLink" href="info.html#return">
                <i class="bi bi-clock-history prefIcon"></i>
                <div class="pref1">Возврат<br>товра</div>
                <div class="pref2">в течении 3-ех дней,
                  при сохранении
                  первоначального вида
                  товара</div>
                  <i class="bi bi-arrow-right-circle prefLinkIcon"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="row prefRow">
          <div class="col-lg-4">
            <div class="pref">
              <a class="prefLink" href="info.html#delivery">
                <i class="bi bi-truck prefIcon"></i>
                <div class="pref1">Быстрая<br>доставка</div>
                <div class="pref2">в течении 2-ух дней</div>
                <i class="bi bi-arrow-right-circle prefLinkIcon"></i>
              </a>
           </div>
          </div>
          <div class="col-lg-4">
            <div class="pref">
              <a class="prefLink" href="info.html#warranty">
                <i class="bi bi-shield-check prefIcon"></i>
                <div class="pref1">Гарантия</div>
                <div class="pref2">от 1-го года в
                  зависимости от товара</div>
                  <i class="bi bi-arrow-right-circle prefLinkIcon"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="pref">
              <i class="bi bi-percent prefIcon"></i>
              <div class="pref1">Выгодные<br>цены</div>
              <div class="pref2">и периодические
                скидки</div>
            </div>
          </div>
        </div>

        <div class="row prefRow">
          <div class="col-lg-7">
            <div class="pref">
              <i class="bi bi-person-badge prefIcon"></i>
              <div class="pref1">Грамотная<br>консультация</div>
              <div class="pref2">мы знаем всё о том, что продаём</div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="pref">
              <a class="prefLink" href="info.html#credit">
                <i class="bi bi-calendar3 prefIcon"></i>
                <div class="pref1">Покупка<br>в рассрочку</div>
                <div class="pref2">на 3 или 6 месяцев</div>
                <i class="bi bi-arrow-right-circle prefLinkIcon"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="row titleRow">
          <div class="col-lg-1"></div>
          <div class="col-lg-11 aboutTitle">Отзывы
            <div class="aboutSubtitle">от покупателей (отображается 5 последних отзывов)</div>
          </div>
        </div>

          <?php
            
            $sql = "SELECT * FROM (SELECT * FROM comms ORDER BY id DESC LIMIT 5) t ORDER BY id ";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $name = $row["Имя"];
                $email = $row["Email"];
                $comm = $row["Отзыв"];
            }
            

          ?>

        <div class="row commRow">
          <div class="col-lg-4">
            <div class="comm">
              <div class="personName"><?php echo $name; ?></div>
              <div class="personEmail"><i class="bi bi-envelope"></i><?php echo $email; ?></div>
              <div class="comment"><?php echo $comm; ?></div>
            </div>
           </div>

          <?php
            if($result->num_rows > 0){
              $row = $result->fetch_assoc();
              $name = $row["Имя"];
              $email = $row["Email"];
              $comm = $row["Отзыв"];
          }
          ?>

          <div class="col-lg-4">
            <div class="comm">
              <div class="personName"><?php echo $name; ?></div>
              <div class="personEmail"><i class="bi bi-envelope"></i><?php echo $email; ?></div>
              <div class="comment"><?php echo $comm; ?></div>
            </div>
          </div>

          <?php
            if($result->num_rows > 0){
              $row = $result->fetch_assoc();
              $name = $row["Имя"];
              $email = $row["Email"];
              $comm = $row["Отзыв"];
          }
          ?>

          <div class="col-lg-4">
            <div class="comm">
              <div class="personName"><?php echo $name; ?></div>
              <div class="personEmail"><i class="bi bi-envelope"></i><?php echo $email; ?></div>
              <div class="comment"><?php echo $comm; ?></div>
            </div>
          </div>
        </div>
          
        <?php
            if($result->num_rows > 0){
              $row = $result->fetch_assoc();
              $name = $row["Имя"];
              $email = $row["Email"];
              $comm = $row["Отзыв"];
          }
          ?>


        <div class="row commRow">
          <div class="col-lg-1"></div>
          <div class="col-lg-5">
            <div class="comm">
              <div class="personName"><?php echo $name; ?></div>
              <div class="personEmail"><i class="bi bi-envelope"></i><?php echo $email; ?></div>
              <div class="comment"><?php echo $comm; ?>
            </div>
          </div>
          </div>

          <?php
            if($result->num_rows > 0){
              $row = $result->fetch_assoc();
              $name = $row["Имя"];
              $email = $row["Email"];
              $comm = $row["Отзыв"];
          }
          ?>

          <div class="col-lg-5">
            <div class="comm">
              <div class="personName"><?php echo $name; ?></div>
              <div class="personEmail"><i class="bi bi-envelope"></i><?php echo $email; ?></div>
              <div class="comment"><?php echo $comm; ?>
            </div>
          </div>
          <div class="col-lg-1"></div>
        </div></div>

        <?php $conn->close(); ?>

        <div class="row titleRow">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <a class="sendComm">Оставить отзыв</a>
          </div>
          <div class="col-lg-3"></div>
        </div>

        <div class="addCommRow row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <div class="commBox">
              <form name="commForm" class="commForm" action="assets/php/comms.php" method="POST">
                <input class="myButton" type="submit" value="Отправить">
                <textarea class="myTextarea" name="comm" placeholder="Напишите что вы думаете о нас" required></textarea>
                <label class="myLabel">Отзыв</label>
                <input class="myInput" type="email" name="email" placeholder="Отображаемый адрес">
                <label class="myLabel">E-mail</label>
                <input class="myInput" type="text" name="name" pattern="^[А-Яа-яЁё]+$" placeholder="Отображаемое имя" required>
                <label class="myLabel">Имя</label>
                <div class="commTitle">Отзыв</div>
                <a id="closeComm"><i class="bi bi-x-circle"></i></a>
              </form>
            </div>
          </div>
          <div class="col-lg-3"></div>
        </div>

        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-11 aboutTitle">Контакты</div>
        </div>

        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <div class="aboutBox">
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
лицензия №3688974 от 12.10.2021
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-1"></div>
        </div>

        <div class="row footerRow">
          <div class="col-lg-12 footer">
            
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
  </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/aboutScript.js"></script>
  </body>

</html>