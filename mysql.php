<?php
	require("app_config.php");
	$link = mysqli_connect(DATABASE_HOST, DATABASE_LOGIN, DATABASE_PASSWORD) or die ("MySQL connect error");
	$sql = "CREATE DATABASE IF NOT EXISTS ".DATABASE_NAME;
	mysqli_query($link, $sql);
	mysqli_select_db($link, DATABASE_NAME) or die("No database!");
	echo "Соединение с БД 'MY' установлено!";
?>