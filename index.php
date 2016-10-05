<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>My homework #2</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
	<div class="content">
	<div class="send_date">
	<form action="action.php" method="GET">
		<input type="text" placeholder="Введите имя" name="name" required><p>
		<textarea cols="100" rows="5" placeholder="Введите текст сообщения" name="message"></textarea><p>
		<input type="submit" value="Отправить данные">
	</form>
	</div>
	<fieldset class="messages">
	<legend>Сообщения</legend>
	<?php
	if (file_exists("messages.txt")){
		echo file_get_contents('messages.txt');
	}
	?>
	</fieldset>
	</div>
</body>

<?php


?>