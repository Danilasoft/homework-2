<?php
// Функция показа сообщение на главной странице
	function showMessages(){
		if (file_exists("messages.csv")){
		$fh = fopen("messages.csv", 'r');
		while($row = fgetcsv($fh, 0, ','))
    echo "<b>Добавлено $row[0] $row[1] $row[2] в $row[3] пользователем $row[4]</b> <br> Сообщение: $row[5]<hr><p>";
	}
	else echo "Пока записей нет, будь первым!";
	}
//////////////
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
		$monthRu = $monthsTranslate[$monthEn];
	}
/// Конец функции
?>