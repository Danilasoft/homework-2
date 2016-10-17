<?php
require_once('app_config.php');

class Month {
	public $month;
	
	public function Translate($month){
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
}

$name = trim(htmlspecialchars($_POST["name"]));
$message = mb_substr(trim(htmlspecialchars($_POST["message"])), 0, 500);
$ruMonth = new Month();
$newmonth = $ruMonth->Translate(date('F'));
$time = date("j ").$newmonth.date(" Y ")." в ".date("H:i:s");
$query_show_mess = "SELECT * FROM messages ORDER BY user_id DESC";
$query_cr_db = "CREATE DATABASE IF NOT EXISTS ".DATABASE_NAME;
$query_cr_table = "CREATE TABLE IF NOT EXISTS messages(
				user_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
				name varchar(20) NOT NULL,
				time varchar(32) NOT NULL,
				message mediumtext)";
$query_insert = "INSERT INTO messages (`name`, `message`, `time`) VALUES ('$name', '$message', '$time')";


try{
	$cr_db = new PDO('mysql:host=localhost','root','');
	$cr_db->exec($query_cr_db);
	$connect1 = new PDO('mysql:host=localhost;dbname='.DATABASE_NAME,'root','');
	$connect1->exec($query_cr_table);
	$connect3 = new PDO('mysql:host=localhost;dbname='.DATABASE_NAME,'root','');
	$connect2 = new PDO('mysql:host=localhost;dbname='.DATABASE_NAME,'root','');
}

catch(PDOException $e){
	echo "Ошибка: ".$e->getMessage();
	exit;
}
?>