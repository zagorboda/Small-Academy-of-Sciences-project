<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ecology</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../css/general.css?<?=filemtime("style.css")?>">
	<link rel="stylesheet" type="text/css" href="style.css?<?=filemtime("general.css")?>">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymuos">

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<link rel="icon" href="../icon/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="../icon/favicon.ico" type="image/x-icon">

	<nav id='cssmenu'>
<div class="logo"><a href="../index.html">Екологія</a></div>
<div id="head-mobile"></div>
<div class="button"></div>
<ul>
<li><a href='../index.html'>Головна</a>
	<ul>
		<li><a href="../general_eco/index.html">Загальна екологічна ситуація</a></li>
		<li><a href="../waste/index.html">Проблема твердих побутових відходів</a></li>
		<li><a href="../results/index.html">Результати діяльності</a></li>
	</ul>
</li>
<li><a href='../news/index.html'>Новини</a></li>
<li><a href='../statistics/index.html'>Статистика</a></li>
<li><a href='../gallery/index.html'>Галерея</a></li>
<li class="active"><a href=''>Зворотній звязок</a></li>
</ul>
</nav>
</head>
<body>

		</head>
		<body>




<div class="head-w"> 
	<div class="head-w1">
	<h2 style="width: 80%;text-align: center;margin:auto;">Тут ви можете залишити свої думки та ідеї щодо покращення екологічної ситуації міста</h2>
	</div>
	<div style="font-size: 18px;" >А також знайти контактну інформацію віділу екології міської ради</div>
</div>


<div style="margin-bottom: 30px;text-align: center;">
<h4>Будь ласка, вводьте правильну контактну інформацію</h4>
</div>

<form method="post">
 <input name="name" placeholder="Укажіть ваше ім'я" class="textbox1" pattern="^[a-zA-Zа-яА-ЯІі][a-zA-Zа-яА-ЯІі]{1,20}$" required oninvalid="setCustomValidity('Імя має бути від 2 до 20 символів і не має містити цифр і спец. символів')" oninput="setCustomValidity('')"/>
 <input name="emailaddress" placeholder="Укажіть ваш еmail" class="textbox1" type="email" pattern="^[a-zA-Zа-яА-ЯІі0-9._%-]+@[a-zA-Zа-яА-ЯІі0-9._-]+\.[a-zA-Zа-яА-ЯІі]{2,4}$" required oninvalid="setCustomValidity('E-mail має бути від 2 до 20 символів')" oninput="setCustomValidity('')" />
 <input rows="4" cols="50" name="subject" placeholder="Введіть ваше повідомлення" class="message1" pattern="^[a-zA-Zа-яА-ЯІі][a-zA-Zа-яА-ЯІі]{1,3000}$" required oninvalid="setCustomValidity('Повідомлення має бути до 3000 символів')" oninput="setCustomValidity('')"></input>
 <input name="submit" class="button1" type="submit" value="Відправити" />
</form>

<h4 style="margin-top: 10px;margin-bottom: 30px;;text-align: center;">Лист буде напрямлений на модерацію</h4>


<?php 
 
$servername = "sql303.byethost.com";
$database = "b15_23384374_user";
$username = "b15_23384374";
$password = "E5Mgc5zM5qgD9iH";

$conn = mysqli_connect($servername, $username, $password, $database);

mysql_query("SET NAMES cp1251");

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}



if (isset($_POST['submit'])) {
	


if (isset($_POST['name'])) {
    $name = $_POST['name'];
} 

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

if (isset($_POST['text'])) {
    $text = $_POST['text'];
}

$query = "";



mysqli_query($conn, " INSERT INTO `eco1` (`name`, `email` , `text`) VALUES (N'$name' , '$email',  N'$text' )") or die("Error " . mysqli_error($conn));

echo('Повідомлення успішно відправлене');

mysqli_close($conn);

}
?>


<footer>
	<div class="foot-m-div">
	<div class="foot-div" ><div style="font-size: 14px;width: 100%;">© 2019 Powered by Bohdan Zahoruiko </div><a href="https://github.com/zagorboda/Small-Academy-of-Sciences-project" class="foot-link"><img src="../icon/GitHub-Mark-32px.png" alt=""></a></div>	
	</div>
	
</footer>

<script type="text/javascript"s src="../js/menu.js"></script>

</body>
</html>

</body>
</html>