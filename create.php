<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

/*$data = [
      "action" => $_POST["action"],
      "questionsType" => $_POST["questionsType"],
      "helpsType" => $_POST["helpsType"],
      "continents" => $_POST["continents"],
      "regions" => $_POST["regions"],
      "city" => $_POST["city"],
      "description" => $_POST["description"],
      "name" => $_POST["name"],
      "email" => $_POST["email"],
      "phone" => $_POST["phone"],
      "date" => $_POST["date"]
      
   ];*/

 /*$data = [
   "action" => $_POST["selects[0].options[selects[0].selectedIndex].text"],
    "questionsType" => $_POST["selects[1].options[selects[1].selectedIndex].text"],
    "helpsType" => $_POST["selects[2].options[selects[2].selectedIndex].text"],
    "continents" => $_POST["selects[3].options[selects[3].selectedIndex].text"],
    "regions" => $_POST["selects[4].options[selects[4].selectedIndex].text"],
    "city" => $_POST["inps[0].value"],
    "description" => $_POST["inps[1].value"],
    "name" => $_POST["inps[2].value"],
    "email" => $_POST["inps[3].value"],
    "phone" => $_POST["inps[4].value"],
    "date" => $_POST["inps[5].value"]
    
 ];*/

 /*$connection = new PDO('mysql:host=localhost;dbname=database_kostopol', 'root', '');
 $sql = "INSERT INTO allques (action, questionsType, helpsType, continents, region, city, description, name, email, phone, date) VALUES (:action, :questionsType, :helpsType, :continents, :region, :city, :description, :name, :email, :phone, :date)";
$statement = $connection->prepare($sql);
$result = $statement->execute($data);
var_dump($result);*/


$action = $_POST['action'];
$questionsType = $_POST['questionsType'];
$helpsType = $_POST['helpsType'];
$continents = $_POST['continents'];
$regions = $_POST['regions'];
$city = $_POST['city'];
$description = $_POST['description'];
$name = $_POST["name"];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];


/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `allques` (`id`, `action`, `questionsType`, `helpsType`, `continents`, `region`, `city`, `description`, `name`, `email`, `phone`, `date`) VALUES (NULL, '$action', '$questionsType', '$helpsType', '$continents', '$regions', '$city', '$description', '$name', '$email', '$phone', '$date')");
//mysqli_query($connect,"INSERT INTO `products` (`id`, `title`, `price`, `description`) VALUES (NULL, '$title', '$price', '$description')");

/*
 * Переадресация на главную страницу
 */

//header('Location:/region.php');