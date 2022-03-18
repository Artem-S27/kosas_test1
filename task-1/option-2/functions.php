<?php
// Соединяемся с базой данных
$db_host = "localhost";
$db_name = "kosas-test-1";
$db_user = "root";
$db_pass = "";
$db = mysqli_connect($db_host, $db_user, "", $db_name);
mysqli_query($db, "SET NAMES 'utf8'");
if ($db == false) {
	print("<p>Ошибка: Невозможно подключиться к MySQL</p>" . mysqli_connect_error());
} else {
	// print("<p>Соединение установлено успешно</p>");
}  
// Считаем просмотры за день
function count_visits($db, $date, $visit)
{	
	$sql = "SELECT `DATA` FROM `data-visit` WHERE `DATA` = '$date'";
	$res = mysqli_query($db, $sql) or die ("<p>Проблема при подключении к БД</p>");
	if (mysqli_num_rows($res) == 0) {
     // Добавляем дату и посещения
		if ($visit != 0) {
			mysqli_query($db, "INSERT INTO `data-visit` (DATA, VISITS) VALUES ('$date', '$visit');");
		}
	} else {
     // Добавляем +1 посещение к дате
		mysqli_query($db, "UPDATE `data-visit` SET `VISITS`=`VISITS`+ $visit WHERE `DATA`='$date';");
	}
}   
// Функция получения всех строк из БД
function get_info($db)
{
	$sql = "SELECT * FROM `data-visit`;";
	$result = mysqli_query($db, $sql);
	$info = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $info;
}
?>
