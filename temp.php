<?
if (empty($_POST["name"]) && empty($_POST["message"])){
		echo "<script> alert('Не введено имя или текст сообщения')</script>";
		
	}
	else{
		$connect2->exec($query_insert);	
	}
	$row = $connect3->query($query_show_mess);
			foreach ($row as $v){
			echo "<b>".$v['name']."</b> разместил запись ".$v['time'].": <br>Сообщение: ".$v['message']."<br><hr>";
		}
?>