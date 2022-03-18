<?php
// Подключаем файл с функциями
require_once 'functions.php';
?>
<html>
   <head>
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <script>
   var img = new Image();
   img.src = 'image.php';
   function ajaxPost(visit) {
      $.ajax({
         url: 'functions.php',
         type: 'POST',
         data: {"visit" : visit},
         success: function(data){
            alert('Данные отправлены');
         },
         error: function(){
	      console.log('ERROR');
         }
      })
   }
   img.onload = function(visit){
      visit = '1';
      alert('Изображение прогрузилось');
      ajaxPost(visit);
   };   
   img.onerror = function(visit){
      visit = '0';
      alert('Изображение не прогрузилось');
      ajaxPost(visit);
   };
    </script>
   <script>
</script>
   <title>Тестовое задание №1</title>
   <link rel="stylesheet" href="css/main.css">
   <?
   $date = date("Y-m-d");
   ?>
   </head>
   <body>
      <h1>Тестовое задание №1 (вариант 2)</h1>
      <h2>Описание задания</h2>
      <p>Создайте файл image.php. Этот файл должен выводить любое изображение. Включите файл  на страницу методом img src="image.php".
      <p>Цель - посчитать и сохранить информацию о том, сколько раз файл был показан.</p>
      <h2>Вывод изображения</h2>
      <img width="450" height="auto" src="image.php"><br>
      <p class="out"></p>
      
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
   </body>
</html>
