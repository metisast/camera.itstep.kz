<?php session_start();

    if(isset($_SESSION['login'])) unset($_SESSION['login']);
    if(isset($_SESSION['password'])) unset($_SESSION['password']);
    if(isset($_SESSION['city'])) unset($_SESSION['city']);

header('Location: /');