<?php

// Очистка всех данных сессии
$_SESSION = array(); 
// Удаление сессийной куки
setcookie(session_name(), '', time() - 1, '/'); 
// Наконец, разрушение сессии.
session_destroy(); 

header("location: home.php");