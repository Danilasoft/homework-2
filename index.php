<?php
	if (isset($_GET["alert"])){
		if ($_GET["alert"] == name){
		echo "<script> alert('Не введено имя')</script>";}
		else echo "<script> alert('Не введено сообщение')</script>";
		}
	
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>My homework #2</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<script>
		function memo_onkeydown() 
		{
			var s,c;
			s=memo.value;
			c = 500 - s.length;
			countlabel.innerText="Осталось : " + c + " символов";
		}
	</script>
</head>
<body>
	<div class="content">
	<div class="send_date">
	<form action="action.php" method="POST">
		<input type="text" placeholder="Введите имя" name="name"><p>
		<textarea cols="100" rows="5" placeholder="Введите текст сообщения" name="message" id="memo" onkeyup="memo_onkeydown()"></textarea><p>
		<p id="countlabel">Осталось: 500 символов</p>
		<input type="submit" value="Отправить данные">
	</form>
	</div>
	<fieldset class="messages">
	<legend>Сообщения</legend>
	<?php
		require('app_config.php');
		require('func.php');
		showMessages();
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