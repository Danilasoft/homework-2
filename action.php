<?php
if ($_POST["name"] == ""){
	header ('Location: index.php?alert=name');
	exit;
}
elseif($_POST["message"] == ""){
	header ('Location: index.php?alert=message');
	exit;
}
else{
$name = trim(htmlspecialchars($_POST["name"]));
}
$message = (!empty($_POST["message"])) ? mb_substr(trim(htmlspecialchars($_POST["message"])), 0, 500) : "<Пустое сообщение....>";
	require('func.php');
	$month = trMonth(date('F'));
	$time = date("j ").$month.date(" Y ")." в ".date("H:i:s");
	cr_db();
	cr_table();
	add_sql($name, $time, $message);
	header ('Location: index.php');
?>