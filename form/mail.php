<head>
		<meta http-equiv='refresh' content='5; url=/'>
		<meta charset="UTF-8" />
		<title>Данные получены!</title>
		<link rel="stylesheet" href="../css/slyles.css"/>
		<link rel="stylesheet" href="../css/media.css"/>
</head>
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['skype'])) {$skype = $_POST['skype']; if ($skype == '') {unset($skype);}}
 
if (isset($name) && isset($email) && isset($skype)){
 
$address = "miilafon.ru@gmail.com";
$mes = "Имя: $name \nE-mail: $email \nСкайп: $skype";
$send = mail ($address,"Заявка на консультацию по прибыльной стратегии",$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true') {echo "<div class='main2'><div class='main_container2'><h1>Спасибо! Ваша заявка успешно принята и будет рассмотрена в течении суток</h1>
				<h2>Через 5 секунд Вы будете перенаправлены назад на главный сайт</h2><p>Хорошего Вам дня!</p></div></div>";}
else {echo "Ошибка, сообщение не отправлено!";}
 
}
else
{
echo "Вы заполнили не все поля, необходимо вернуться назад!";
}
?>