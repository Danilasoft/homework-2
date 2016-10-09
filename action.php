<?php
if ($_POST["name"] == ""){
	header ('Location: index.php?alert=o');
	exit;
}
else{
$name = trim(htmlspecialchars($_POST["name"]));
}
if (isset($_POST["message"])){
$message = trim(htmlspecialchars($_POST["message"]));
$message = mb_substr($message,0,500);
}
else{
	$message = "<Пустое сообщение....>";
}
$monthEn = strtolower(date('F')); 
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
	$string = array(date(d), $monthRu, date(Y), date("H:i:s"), $name, $message);
		$fp = fopen("messages.csv", "a");
		fputcsv($fp, $string);
		fclose($fp);
	header ('Location: index.php');
?>