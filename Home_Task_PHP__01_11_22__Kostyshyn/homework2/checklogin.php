<?php

$user_login = 'user1';
$user_password = '123';

$login = $_POST['login'];
$password = $_POST['password'];

if($login == $user_login && $password == $user_password) {
    $_SESSION['user'] = $login;
    header("location: home.php");
}
else {
    echo "Wrong data";
}