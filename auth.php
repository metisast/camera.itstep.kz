<?php session_start();
    include_once 'logins.php';
    sleep(1);

    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        // Если к нам идёт Ajax запрос, то ловим его
        // Поля пустые
        if(empty($_POST['login']) && empty($_POST['login'])){
            header('HTTP/1.1 422 Internal Server');
            header('Content-Type: application/json; charset=UTF-8');
            die(json_encode(array('message' => 'ERROR', 'code' => 422)));
        }

        if($_POST['login'] == AST_LOGIN &&  $_POST['password'] == AST_PASSWORD){
            $_SESSION['login'] = AST_LOGIN;
            $_SESSION['password'] = AST_PASSWORD;
            $_SESSION['city'] = 1;
            die(json_encode(array('message' => 'OK', 'city_id' => '1')));
        }elseif($_POST['login'] == ALM_LOGIN &&  $_POST['password'] == ALM_PASSWORD) {
            $_SESSION['login'] = ALM_LOGIN;
            $_SESSION['password'] = ALM_PASSWORD;
            $_SESSION['city'] = 2;
            die(json_encode(array('message' => 'OK', 'city_id' => '2')));
        }elseif($_POST['login'] == KAR_LOGIN &&  $_POST['password'] == KAR_PASSWORD) {
            $_SESSION['login'] = KAR_LOGIN;
            $_SESSION['password'] = KAR_PASSWORD;
            $_SESSION['city'] = 9;
            die(json_encode(array('message' => 'OK', 'city_id' => '9')));
        }else{
            header('HTTP/1.1 421 Internal Server');
            header('Content-Type: application/json; charset=UTF-8');
            die(json_encode(array('message' => 'ERROR', 'code' => 421)));
        }

        header('HTTP/1.1 423 Internal Server');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 423)));
    }
    //Если это не ajax запрос
    header('Location: /index.php');

?>