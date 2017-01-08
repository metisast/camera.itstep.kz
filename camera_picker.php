<?php session_start();

    // Если пользователь не авторизован отправляем его на регистрацию
    if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){
        header('HTTP/1.1 422 Internal Server');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 422)));
    }
    // Если к нам идёт Ajax запрос, то ловим его
    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

        if(isset($_POST['id'])) $id = $_POST['id']; // Идентификатор аудитории
        if(isset($_POST['ip'])) $ip = $_POST['ip']; // Ip адрес потока

        echo "
                    <script type='text/javascript'>
                        jwplayer('video').setup({
                            file: 'rtmp://".$ip."/camera".$id."/stream.flv',
                            autostart: true
                        });
                    </script>
        ";

        exit;
    }
    //Если это не ajax запрос
    header('Location: /index.php');

?>