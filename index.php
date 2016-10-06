<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>My homework #2</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<script id="clientEventHandlersJS" language="javascript">
<!--

function memo_onkeydown() 
{
var s,c;
s=memo.value;
c = 500 - s.length;
countlabel.innerText="Осталось : " + c + " символов";

}

//-->
</script>
</head>
<body>
	<div class="content">
	<div class="send_date">
	<form action="action.php" method="POST">
		<input type="text" placeholder="Введите имя" name="name" required><p>
		<textarea cols="100" rows="5" placeholder="Введите текст сообщения" name="message" id="memo" onkeyup="memo_onkeydown()" required></textarea><p>
		<p id="countlabel">Осталось: 500 символов</p>
		<input type="submit" value="Отправить данные">
	</form>
	</div>
	<fieldset class="messages">
	<legend>Сообщения</legend>
	<?php
	if (file_exists("messages.txt")){
		echo file_get_contents('messages.txt');
	}
	else echo "Пока записей нет, будь первым!";
	?>
	</fieldset>
	</div>
<footer>
	Тип: домашнее задание №2<br>
	Дата: 05.10.2016<br>
	Автор: Парначев Данила
</footer>
</body>

<?php


?>