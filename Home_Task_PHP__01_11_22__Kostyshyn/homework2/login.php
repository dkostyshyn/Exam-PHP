<?php
 require_once "header.php";
 require_once "menu.php";

 if(isset($_POST['btn_login'])) {
    require_once "checklogin.php";
 }

?>

<h1>Login: </h1>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    Login: <input type="text" name="login" id="login"><br>
    Password: <input type="password" name="password" id="password"><br>
    <input type="submit" value="Login" name="btn_login">
</form>

