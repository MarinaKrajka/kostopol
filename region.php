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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaqery.css">
    <link rel="stylesheet" href="./image/bg.jpg">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #650808;
    }
    #tablAll {
      margin-top: 40px;
    margin-bottom: 40px;
    width: 100%;
    overflow-y: auto;
    }
    table tr td.td2:last-child {
        word-break: break-word;
    }
    

</style>
<body>
    <div class="container">
        <div class="navbar">
          <div class="menu">
            <h3 class="logo">Полісся<span>Разом</span></h3>
            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </div>
        <!--содержимое меню-->
        <div class="links">
          <ul>
            <li>
              <a href="index.html" style="--i: 0.2s;">Головна</a>
            </li>
            <li>
              <a href="aboutProject.html" style="--i: 0.2s;">Про проект</a>
            </li>
            <li>
              <a href="page3base.html" style="--i: 0.35s;">Базові принципи</a>
            </li>
            <li>
              <a href="https://science-education.ru/ru/article/view?id=19815" style="--i: 0.50s;">Економічний патріотизм</a>
            <li><a href="http://archiwum.radiopolsha.pl/6/249/Artykul/336129" style="--i: 0.50s;">Приклад Польщі</a>
            </li>
            <li><a href="page6.html" style="--i: 0.50s;">Приклад Германії</a>
            </li>
            <li>
              <a href="#" style="--i: 0.65s; color: aquamarine; color: rgb(255, 0, 0);
              text-shadow: 3px 0px 0px rgba(252, 0, 0, 0.411), 0 0 1em rgb(0, 0, 0), 0 0 0.3em rgb(0, 0, 0); font-size: large;">Регіони</a>
            </li>
            <li>
              <a href="page8Diaty.html" style="--i: 0.75s;">Діяти</a>
            </li>
            <li>
              <a href="kontakt.html" style="--i: 0.9s;">Контакти</a>
            </li>
          </ul>
        </div>
       <!--Содержимое страницы текст-->
        <div class="content">
          <h3 class="whoare" style="padding-bottom: 20%;">Як об'єднати Україну</h3>
          <div class="images">
              <img src="./image/Cкарта.gif" width="50%" alt="історичні землі України" style="margin-left: auto; margin-right: auto; padding-bottom: 20%;">
          </div>
          <div class="textcontent">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur commodi, voluptas nemo soluta error inventore, officiis beatae facere nulla est iste. Et illo quos quae! Repellendus mollitia quam fuga adipisci? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates doloribus deleniti laboriosam inventore voluptatum necessitatibus iste voluptatibus iusto! Autem natus facilis unde ab voluptates expedita totam sed? Explicabo, recusandae quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates doloribus deleniti laboriosam inventore voluptatum necessitatibus iste voluptatibus iusto! Autem natus facilis unde ab voluptates expedita totam sed? Explicabo, recusandae quos.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, cupiditate? Minus, ratione adipisci! In omnis corporis, blanditiis nostrum consectetur, exercitationem et quidem quia molestiae sapiente tenetur aspernatur quisquam quas est.
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum harum dolor doloribus aliquam porro nobis commodi veniam fuga voluptas suscipit voluptatum repellendus, totam facilis hic quisquam adipisci sequi assumenda.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui obcaecati vel ab officia reprehenderit, ratione repellendus eos tempore deserunt consequuntur fuga ex id nobis, assumenda voluptatum in facere nisi. Voluptatum.
            </p>  
          </div>
          <div id="tablAll">
              <table>
                  <tr>
                      <th>Id</th>
                      <th>Action</th>
                      <th>Questions type</th>
                      <th>Helps type</th>
                      <th>Area</th>
                      <th>Regions</th>
                      <th>City</th>
                      <th>Description</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Date</th>

                  </tr>
          
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
                                  <td><?= $question[10] ?></td>
                                  <td><?= $question[11] ?></td>
                              </tr>
                          <?php
                      }
                  ?>
              </table>
          </dv>
          
          </div>

          <!--form-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d43497596.812835924!2d102.31322077306228!3d48.285874069838435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sua!4v1646595126835!5m2!1suk!2sua" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          <!--footer-->
          <footer class="footer-distributed">
          
            <div class="footer-left">
      
              <h3>F - <span>ВЕНУС</span></h3>
      
              <p class="footer-links">
                <a href="index.html">Про проект</a>
                ·
                <a href="#">Технології ремонту</a>
                ·
                <a href="#">Ціни</a>
                ·
                <a href="#">Вакансії</a>
                ·
                <a href="#">Публічні закупівлі</a>
                ·
                <a href="#">Контакти</a>
              </p>
      
              <p class="footer-company-name">F - ВЕНУС © 1997</p>
      
              <div class="footer-icons">
      
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
      
              </div>
      
            </div>
      
            <div class="footer-right">
      
              <p>Напишіть нам свої пропозиції/питання</p>
      
              <form action="#" method="post">
      
                <input type="text" name="email" placeholder="Email">
                <textarea name="message" placeholder="Message"></textarea>
                <button>Send</button>
      
              </form>
      
            </div>
      
          </footer>

        </div>
    </div>
        <script src="js/contenttransform.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.0.min.js"></script>
        <script src="js/h3apear.js"></script>
        <script src="js/jquery.js"></script>
        
</body>
</html>