<?php
if ($_POST["name"] == ""){
	header ('Location: index.php?alert=o');
	exit;
}
else{
$name = trim(htmlspecialchars($_POST["name"]));
}
$message = (!empty($_POST["message"])) ? mb_substr(trim(htmlspecialchars($_POST["message"])), 0, 500) : "<Пустое сообщение....>";
	require('functions.php');
	$month = date('F');
	trMonth($month);
	$string = array(date(d), $monthRu, date(Y), date("H:i:s"), $name, $message);
		$fp = fopen("messages.csv", "a");
		fputcsv($fp, $string);
		fclose($fp);
	header ('Location: index.php');
?>