<?php
// Подключаем файл с функциями
require_once 'functions.php';
?>
<html>
   <head>
   <title>Тестовое задание №1</title>
   <link rel="stylesheet" href="css/main.css">
   <?
   // Запускаем счетчик
   session_start();
   $_SESSION['count'] = $_SESSION['count'] + 1;
   $visit=$_SESSION['count'];
   // Получаем сегодняшнюю дату
   $date = date("Y-m-d");
   ?>
   </head>
   <body>
      <h1>Тестовое задание №1</h1>
      <h2>Описание задания</h2>
      <p>Создайте файл image.php. Этот файл должен выводить любое изображение. Включите файл  на страницу методом img src="image.php".
      <p>Цель - посчитать и сохранить информацию о том, сколько раз файл был показан.</p>
      <h2>Вывод изображения</h2>
      <img width="450" height="auto" src="image.php"><br>
      <!-- Таблицы вывода данных -->
      <?
      count_visits($db, $date, $visit);      
      $info = get_info($db);
      ?>
      <h2>Вывод данных</h2>
      <table>
         <tr>
            <td>Дата посещения</td>
            <td>Кол-во просмотров</td>
         </tr>
      <?if (count($info) != 0):?>
      <?foreach ($info as $value):?>
         <tr>
            <td><?=$value["DATA"]?></td>
            <td><?=$value["VISITS"]?></td>
         </tr>
      <?endforeach;?>
      <?endif;?>
      </table>
      <?$_SESSION['count'] = 0;?>
   </body>
</html>
