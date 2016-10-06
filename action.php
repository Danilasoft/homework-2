<?php
if ($_POST["name"] == ""){
	$name = "Аноним";
}
else{
$name = trim(htmlspecialchars($_POST["name"]));
}
if (isset($_POST["message"])){
$message = substr(trim(htmlspecialchars($_POST["message"])), 0, 500);
}
else{
	$message = "<Пустое сообщение....>";
}
	$month = date("m");
	switch($month){
		case 1:
			$month = "января";
			break;		
		case 2:
			$month = "февраля";
			break;
		case 3:
			$month = "марта";
			break;
		case 4:
			$month = "апреля";
			break;
		case 5:
			$month = "мая";
			break;
		case 6:
			$month = "июня";
			break;
		case 7:
			$month = "июля";
			break;
		case 8:
			$month = "августа";
			break;
		case 9:
			$month = "сентября";
			break;
		case 10:
			$month = "октября";
			break;
		case 11:
			$month = "ноября";
			break;
		case 12:
			$month = "декабря";
			break;			
	}
	$string = "Добавлено ".date("d ").$month.date(" Y")." г. в ".date("H:i:s")."  пользователем <b>$name</b><br>"."Сообщение: $message<p>";
		$fp = fopen("messages.txt", "a");
		fwrite($fp, $string);
		fclose($fp);
	header ('Location: index.php');
?>