<?php


$id = $_POST['idProduct'];

$host = 'localhost';
$username = 'root';
$pasword = '';
$db = 'storedb';


$link = mysqli_connect($host, $username, $pasword, $db);

if(!$link) {
    echo mysqli_connect_error();
}

$query = "DELETE FROM product WHERE idProduct=$id";

$res = mysqli_query($link, $query);

mysqli_close($link);