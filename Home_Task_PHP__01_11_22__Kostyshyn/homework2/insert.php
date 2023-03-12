<?php

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$upload_dir = 'uploads/';

move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $_FILES['image']['name']);
   
$image = $_FILES['image']['name'];




$host = 'localhost';
$username = 'root';
$pasword = '';
$db = 'storedb';


$link = mysqli_connect($host, $username, $pasword, $db);

if(!$link) {
    echo mysqli_connect_error();
}

$query = "INSERT INTO product(idProduct, name, price, description, image) 
            VALUES (NULL, '$name', $price, '$description', '$image')";

$res = mysqli_query($link, $query);

mysqli_close($link);