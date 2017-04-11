<?php
session_start();
if(isset($_POST["send"])){
	
	$_SESSION["first_name_phone"] = $name;
	$_SESSION["last_name_phone"] = $phone;
	$_SESSION["broken_name_phone"] = $what;
}
	$name = $_POST["first_name_phone"];
	$phone = $_POST["last_name_phone"];
	$what = $_POST["broken_name_phone"];
//Тут указываем на какой ящик посылаем письмо
$to = "pavel@syatkin.ru,";
$to .= "termit92@mail.ru";
//Далее идет тема и само сообщение
$subject = 'Заявка с сайта АВТОМЕХАННИК';
$mailheaders .= "From: АВТОМЕХАНИК <automechanic-samara.ru>rn";
$message = '
Письмо отправлено c сайта АВТОМЕХАННИК.
		Причина поломки: '.htmlspecialchars($what)."
		Имя: ".htmlspecialchars($name)."
		Телефон: ".htmlspecialchars($phone);
		$headers = 'automechanic-samara.ru';
		mail ($to, $subject, $message, $headers);
		header("Location: index_send.php");
		exit();
?>
