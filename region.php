<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'php/config/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регіони</title>
    <!--<link rel="stylesheet" href="./image/bg.jpg">-->
    <!--<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
    <link rel="stylesheet" href="css/mediaqery.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">

</head>
<style>
   
@media screen and (max-width: 650px) {
  .dirImg {
      width: 25%;
    }
    .links {
        position: absolute;
        margin-top: 210px;
        height: 400px;
    }
    .links a {
        font-size:medium;
    }
    .logo {
    font-size: 1.5rem;
}
}

@media screen and (min-width: 1200px) {
  .content {
      width: 50%;
    }
    .footer-distributed {
     padding: 50px 95px 40px;
    }
}
@media screen and (max-height: 490px) and (orientation: landscape) {
    
    .logo {
      font-size: 1.5rem;
      }
  }
</style>
<body>
    <div class="container">
        <div class="navbar">
          <div class="menu">
            <h3 class="logo">W<span>UKRAINE</span></h3>
            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </div>
        <!--содержимое меню-->
        <div class="links">
        <ul>
        <li>
              <a href="index.html" style="--i: 0.2s;">Головна сторінка. Візитка</a>
            </li>
            <li>
              <a href="aboutProject.html" style="--i: 0.25s; display: none;">Про проект. Базові принципи</a>
            </li>
            <li>
              <a href="clock.html" style="--i: 0.35s; display: none;">Час, що спливає. Порівняння</a>
            </li>
            <li>
              <a href="page8Diaty.html" style="--i: 0.5s;">Допомогти. Діяти</a>
            </li>
            <li><a href="page6.php" style="--i: 0.70s; display: none;">Інформаційна війна. Аналітика</a>
            </li>
            <li>
              <a href="region.php" style="--i: 0.8s; color: rgb(255, 0, 0);
              text-shadow: 3px 0px 0px rgba(252, 0, 0, 0.411), 0 0 1em rgb(0, 0, 0), 0 0 0.3em rgb(0, 0, 0); font-size: large;">База даних пропозицій/запитів</a>
            </li>
            <li>
              <a href="kontakt.html" style="--i: 0.9s; display: none;">Аналітика. Минуле і майбутнє</a>
            </li>
            <li>
              <a href="page3base.html" style="--i: 1.0s; display: none;">Економічний патріотизм. </a>
            </li>
            </ul>
        </div>
       <!--Содержимое страницы текст-->
        <div class="content">
          <h3 class="whoare" style="padding-bottom: 20%;">База даних WUKRAINE</h3>
          <div id="countdown" style="display: flex; justify-content: center; width: 100%; height: 12vh; color: #928989; font-size: 33px; font-weight: 700;"></div>
          <!--<div class="images">
              <img src="./image/Cкарта.gif" width="50%" alt="історичні землі України" style="margin-left: auto; margin-right: auto; padding-bottom: 20%;">
          </div>-->
          <div class="textcontent">
            <p>
              Всі пропозиції допомоги та інші питання надані <span class="more" id="more"> читачами WUKRAINE попадають в єдину базу даних, що зберігається на серверах Fornex. Дані представлені у вигляді таблиці, в якій простим пошуком можна відфільтрувати записи відповідно до своїх потреб. <br> Для швидкості і зручності записи вносятсья людьми без проходження їх ідентифікації. <br>
              WUKRAINE надає можливість оперативно розміщувати та знаходити інформацію щодо пропозицій та потреб людей, яких зачепила війна в Україні.</span><button class="butMoreCont">...</button> 
            </p> 
            </div>

            <div class="container2">  
 
            <h3 class="whoare"><a name="finder" style="color:rgb(255, 0, 0); text-decoration: none">Загальна база данних<br>Пошук</a></h3>
            <img src="image/down-chevron.png" class="dirImg" alt="Напрямок пошуку">
            
          <div style="background: #000000" class="table-responsive" id="tableContainer" class="tableContainer">
              <table id="employee_data" style="width: 100%" border="0" cellpadding="0" cellspacing="0"  class="scrollTable">

                <thead class="fixedHeader">
                  <tr>
                      <th>Id</th>
                      <th>Спосіб дії</th>
                      <th>Дія</th>
                      <th>Тип допомоги</th>
                      <th>Зона</th>
                      <th>Регіон</th>
                      <th>Населений пункт</th>
                      <th>Опис пропозиції/питання</th>
                      <th>Ім'я</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Date</th>

                  </tr>
                </thead>  
                
                <tbody class="scrollContent">  
          
                  <?php
          
                      /*
                       * Делаем выборку всех строк из таблицы "products"
                       */
          
                      $allques = mysqli_query($connect, "SELECT * FROM `allques`");
          
                      /*
                       * Преобразовываем полученные данные в нормальный массив
                       */
          
                      $allques = mysqli_fetch_all($allques);
          
                      /*
                       * Перебираем массив и рендерим HTML с данными из массива
                       * Ключ 0 - id
                       * Ключ 1 - title
                       * Ключ 2 - price
                       * Ключ 3 - description
                       */
          
                      foreach ($allques as $question) {
                          ?>
                          
                              <tr>
                                  <td><?= $question[0] ?></td>
                                  <td><?= $question[1] ?></td>
                                  <td><?= $question[2] ?></td>
                                  <td><?= $question[3] ?></td>
                                  <td><?= $question[4] ?></td>
                                  <td><?= $question[5] ?></td>
                                  <td><?= $question[6] ?></td>
                                  <td><?= $question[7] ?></td>
                                  <td><?= $question[8] ?></td>
                                  <td><?= $question[9] ?></td>
                                  <td>+<?= $question[10] ?></td>
                                  <td><?= $question[11] ?></td>
                              </tr>
                          <?php
                      }
                  ?>
                  </tbody>
              </table>
          </div>
          </div>
          

          <!--form-->
          <div class="mapio">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d43497596.812835924!2d102.31322077306228!3d48.285874069838435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sua!4v1646595126835!5m2!1suk!2sua" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <!--footer-->
          <!--<section>Footer Example 5</section>-->
          <footer class="footer-distributed">
            <div class="footer-left">
              <h3>W<span>UKRAINE</span></h3>
              <p class="footer-links" style="display: flex; flex-direction: column; align-items: flex-start">
                <a href="aboutProject.html">Інформація про сайт/проект</a>
                 <br>
                <a href="clock.html">Звернути увагу на час</a> 
                <br>
                <a href="page8Diaty.html#helper">Запропонувати свою допомогу</a>
                <br>
                <a href="page6.php#finderzmi">Переглянути, як формується громадська думка</a>
                <br>
                <a href="region.php#finder">Пошук пропозицій в базі данних</a>
                <br>
                <a href="#">Аналітика. Статті. Прогнози. Минуле і майбутнє.</a>
              </p>
              <p class="footer-company-name" style="margin-left: 25px">W - UKRAINE © 2022</p>
              <div class="footer-icons" style="display: flex; flex-direction: row; justify-content: space-around; margin-bottom: 20px">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
              </div>
            </div>
            <div class="footer-right">
              <p>Напишіть нам свої пропозиції, або зауваження щодо роботи сайту</p>
              <form id="mailForm" action="" method="">
                <!-- Hidden Required Fields -->
                <input type="hidden" name="project_name" value="wukraine.net">
                <input type="hidden" name="admin_email" value="energomarket.ua@yandex.ru">
                <input type="hidden" name="form_subject" value="Пропозиції щодо роботи сайту">
                <!-- END Hidden Required Fields -->
                <input type="email" name="email" placeholder="Your email" required>
                <input type="phone" name="phone" placeholder="Your phone">
                <textarea name="message" placeholder="Message" required></textarea>
                <button>Відправити</button>
              </form>
            </div>
          </footer>

        </div>
    </div>
    <!--Выпадающий контент-->
    <script>
        let buttons = document.getElementsByClassName("butMoreCont");
        for (let i = 0; i < buttons.length; i++) {
          buttons[i].addEventListener("click", function readMore () {
            let more = this.previousSibling;

            if (more.classList.contains("active")) {
              more.classList.remove("active");
              this.innerHTML ="...";
            }
            else {
              more.classList.toggle("active");
              this.innerHTML ="^"
            }
          });
        }
    </script>

        <script src="js/contenttransform.js"></script>
        <!--<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.0.min.js"></script>-->
        <script src="js/h3apear.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/table.js"></script>
        <script src="js/timer.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
        
</body>
</html>
<script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>