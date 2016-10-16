<?php
//--создание БД
function cr_db(){
require("app_config.php");
	$link = mysqli_connect(DATABASE_HOST, DATABASE_LOGIN, DATABASE_PASSWORD) or die ("MySQL connect error");
	$sql = "CREATE DATABASE IF NOT EXISTS ".DATABASE_NAME;
	mysqli_query($link, $sql);
	mysqli_select_db($link, DATABASE_NAME) or die("No database!");
}
//--создание таблицы в MySQL
function cr_table(){
$cr_table = "CREATE TABLE IF NOT EXISTS messages(
				user_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
				name varchar(20) NOT NULL,
				time varchar(32) NOT NULL,
				message mediumtext)";
	$link = mysqli_connect(DATABASE_HOST, DATABASE_LOGIN, DATABASE_PASSWORD) or die ("MySQL connect error");
mysqli_select_db($link, DATABASE_NAME) or die("No database!");
	$sql = mysqli_query($link, $cr_table);
	if (!$sql){
		echo "Ошибка создания таблицы";
	}
}
//--конец создания таблицы в MySQL
//---------------------------------------------------
//Функция перевода названия месяца
	function trMonth($month){
		$monthEn = strtolower($month); 
		$monthsTranslate = [ 
			'january' => 'января', 
			'february' => 'февраля', 
			'march' => 'марта', 
			'april' => 'апреля', 
			'may' => 'мая', 
			'june' => 'июня', 
			'july' => 'июля', 
			'august' => 'августа', 
			'september' => 'сентября', 
			'october' => 'октября', 
			'november' => 'ноября', 
			'december' => 'декабря', 
		]; 
		return $monthRu = $monthsTranslate[$monthEn];
	}
//---------------------------------------------------
//--добавление данных в MySQL
	function add_sql($name, $time, $message){
		$sql33 = "INSERT INTO messages (name, time, message)
			VALUES ('$name', '$time', '$message')";
			$link = mysqli_connect(DATABASE_HOST, DATABASE_LOGIN, DATABASE_PASSWORD) or die ("MySQL connect error");
mysqli_select_db($link, DATABASE_NAME) or die("No database!");
	$sql2 = mysqli_query($link, $sql33);
	if (!$sql2){
		echo "<p>Ошибка добавления данных";
	}	
	}
//--конец добавления данных в MySQL
//--показ всех сообщений
	function showMessages(){
		$query1 = "SELECT * FROM messages ORDER BY user_id DESC";
		$link = mysqli_connect(DATABASE_HOST, DATABASE_LOGIN, DATABASE_PASSWORD) or die ("MySQL connect error");
		mysqli_select_db($link, DATABASE_NAME) or die("No database!");
		$sql = mysqli_query($link, $query1);
		while($row = mysqli_fetch_array($sql)){
			echo "Сообщение добавлено ".$row[2]." пользователем ".$row[1]."<br>Сообщение: ".$row[3]."<hr>";
		}
	}
?>