<?php session_start() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="bower_components/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/bower_components/materialize/dist/css/materialize.min.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
    <title>Просмотр камер</title>
</head>
<body>
<div class="wrapper">
    <!-- Content -->
    <div class="content">
        <nav id="nav-bar" style="z-index: 3;position: relative">
            <div class="nav-wrapper teal darken-1">
                <a href="/" class="brand-logo">
                    <img src="images/logo-ru.png" alt="itStep" width="50">
                </a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars fa-2x"></i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="http://itstep.kz">Сайт академии</a></li>
                    <?php
                        if(isset($_SESSION['login'])){
                            echo "
                                <li><a href='/logout.php'>Выход</a></li>          
                            ";
                        }
                    ?>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="http://itstep.kz">Сайт академии</a></li>
                </ul>
            </div>
        </nav>
    </div>