<?php session_start() ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1>Сессия закрыта</h1>
<a href="session-1.php">Session1</a><br><br>
</body>
</html>
<?php 
    
// Очистка всех данных сессии
$_SESSION = array(); 
// Удаление сессийной куки
setcookie(session_name(), '', time() - 1, '/'); 
// Наконец, разрушение сессии.
session_destroy(); 

    
?>