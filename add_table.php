<HEAD>
<TITLE> Турагенство "Travel" - Добавление данных о туристе  </TITLE> 
</HEAD> 
<BODY> 
<H1> Турагенство "Travel".</H1> 
<H2> Добавление данных о туристе.</H2> 
<?php 
	if (isset($_POST['posted'])) { $SecondName = $_POST['SecondName']; 
	$FirstName = $_POST['FirstName']; 
	$Patronym = $_POST['Patronym']; 
	$SeriaPassport = $_POST['SeriaPassport']; 
	$NumberPassport = $_POST['NumberPassport']; 
	//передача данных из формы на сервер 
	if ($SecondName == "" or 
	$FirstName == "" or 
	$Patronym == ""or $SeriaPassport == ""or $NumberPassport == "") 
	{ echo "Необходимо ввести имя - нажмите кнопку Назад и заполните форму еще раз"; exit; } 
	$SecondName = addslashes($SecondName); 
	$FirstName = addslashes($FirstName);  
	$Patronym = addslashes($Patronym);  
	$SeriaPassport = addslashes($SeriaPassport); 
	$NumberPassport = addslashes($NumberPassport); 
	$db = @mysql_pconnect("localhost", "root"); 
	if (!$db) 
	{ echo " Ошибка: Невозможно подключиться к MySQL серверу. Пожалуйста, попробуйте позже."; exit; } 
	mysql_SELECT_db("Travel"); 
	$query = "INSERT INTO Turist(SecondName, FirstName, Patronym,SeriaPassport,NumberPassport) 
	VALUES ('".$SecondName."','".$FirstName."','".$Patronym ."','".$SeriaPassport 
	."','".$NumberPassport ."')"; 
	$result = mysql_query($query); 
	if($result) echo "<H3>Інформація о туристе успешно добавлена в базу данных.</H3>"; } 
?>
</BODY>
