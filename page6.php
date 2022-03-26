<?php
require_once 'php/config/connect.php';
$query ="SELECT * FROM tbl_employee ORDER BY ID DESC";  
$result = mysqli_query($connect, $query);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проект Полісся</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
    <link rel="stylesheet" href="css/mediaqery.css">
    <link rel="stylesheet" href="css/style.css">
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
@media screen and (max-height: 490px) and (orientation: landscape) {
    
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
              <a href="aboutProject.html" style="--i: 0.25s;">Про проект. Базові принципи</a>
            </li>
            <li>
              <a href="clock.html" style="--i: 0.35s;">Час, що спливає. Порівняння</a>
            </li>
            <li>
              <a href="page8Diaty.html" style="--i: 0.5s;">Допомогти. Діяти</a>
            </li>
            <li><a href="page6.php" style="--i: 0.70s; color: rgb(255, 0, 0);
              text-shadow: 3px 0px 0px rgba(252, 0, 0, 0.411), 0 0 1em rgb(0, 0, 0), 0 0 0.3em rgb(0, 0, 0); font-size: large;">Інформаційна війна. Аналітика</a>
            </li>
            <li>
              <a href="region.php" style="--i: 0.8s;">База даних пропозицій/запитів</a>
            </li>
            <li>
              <a href="kontakt.html" style="--i: 0.9s;">Аналітика. Минуле і майбутнє</a>
            </li>
            <li>
              <a href="page3base.html" style="--i: 1.0s;">Економічний патріотизм. </a>
            </li>
            </ul>
        </div>
        <!--Содержимое страницы текст-->

        <div class="content">
          <h3 class="whoare" style="padding-bottom: 20%;">Інформаційна війна</h3>
          <div class="textcontent">
            <p>Нижче відображена база данних світових та вітчизняних засобів массової інформації, які освітлюють події в Україні, що стосуються військових дій війни 2022 року. <br> База наповнюється читачами сайту анонімно без реєстрації. Спеціально навчаний бот відфільтровує внесені дані в залежності від заданих критеріїв та правил, основний із яких це кількість підписників. На даний час критерій становить не менше ніж 55 000 підписників. З повним алгоритмом роботи програми - фільтра можна ознайомитись тут. <br> Для пошуку починайте вводити запитувану інформацію в діалогове вікно. Таблиця відсортує записи відповідно до Вашого запиту. <br>
          Сайт WUKRAINE не розміщує, не перевіряє та не аналізує інформацію, що висвітлюють ЗМІ. Метою даного проекту являється вивчення сутності інформаційної війни, дослідження ії стратегій та наслідків.</p>  
          </div>
          <div class="container2">  
                <h3 class="whoare"><a name="finderzmi" style="color:rgb(255, 0, 0)">База данних ЗМІ, які висвітлюють війну в Україні<br>Пошук</a></h3> 
                <img src="image/down-chevron.png" class="dirImg" alt="Напрямок пошуку">
                <br />  
                <div class="table-responsive" id="tableContainer" style="background-color:#3CA09E">  
                     <table id="employee_data" class="table table-striped table-bordered"> 
                     <thead class="fixedHeader">
                  <tr style="color:#323635">
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
                <?php
                $allques = mysqli_query($connect, "SELECT * FROM `allques`");
                $allques = mysqli_fetch_all($allques);
                foreach ($allques as $question)
                {  
                     ?>
                     <tr style="color:#0C231F">
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
               </table>
          </div>
        </div>
                   
          <!--<div class="images">
            <img src="./image/wheat.jpg" alt="фото для прикладу" width="100%">
          </div>-->
          <h3 class="whoare">Запис в базу даних ЗМІ</h3>  
          <div class="textcontent">
            <p>Якщо Ви не знайшли в таблиці свій ресурс звідки черпаєте інформацію про війну, будь то вебсайт, телеграмканал, youtube, сторінка/група в соцмережах, телеканал, радіостанція, газета та інше, поділіться інформацією зробивши запис в базу даних. Програма доnоможе заповнити правильно всі поля для зручного користування сервісом. Це можна зробити тут. </p>  
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
                <a href="#">Аналітика. Статті. Прогнози. Минуле і майбутнє</a>
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
                <input type="hidden" name="admin_email" value="wlas2005@ukr.net">
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
    
      <script src="js/contenttransform.js"></script>
      <script src="js/lern.js"></script>
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.0.min.js"></script>
      <script src="js/mail.js"></script>
      <script src="js/jquery.js"></script>
      <script src="js/h3apear.js"></script>

      <!--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
              -->
              
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

