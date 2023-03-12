<?php
session_start();

$loggedin = false;

if (isset($_SESSION['user'])) {
    $loggedin = true;
    $user = $_SESSION['user'];
} else
    $loggedin = false;
