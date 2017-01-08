<?php session_start();
    include 'template/header.php';

    // Если пользователь не авторизован отправляем его на регистрацию
    if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){
        header('Location: /');
    }

    // Аудитории для Астаны + ip адрес потока в data-ip
    if($_SESSION['city'] == 1){
        $rooms = "
            <select id='rooms' data-ip='89.219.23.94:1935'>
                        <option value=''>Аудитория</option>
                        <option value='102'>102</option>
                        <option value='104'>104</option>
                        <option value='108'>108</option>
                        <option value='202'>202</option>
                        <option value='203'>203</option>
                        <option value='204'>204</option>
                        <option value='206'>206</option>
                        <option value='207'>207</option>
                        <option value='303'>303</option>
                        <option value='304'>304</option>
                        <option value='308'>308</option>
                    </select>
        ";
    }

    // Аудитории для Алматы + ip адрес потока в data-ip
    if($_SESSION['city'] == 2){
        $rooms = "
            <select id='rooms' data-ip='217.11.73.62:1935'>
                        <option value=''>Аудитория</option>
                        <option value='17'>604a</option>
					    <option value='18'>604b</option>
					    <option value='20'>605a</option>
                    </select>
        ";
    }

    // Аудитории для Караганды + ip адрес потока в data-ip
    if($_SESSION['city'] == 2){
        $rooms = "
                <select id='rooms' data-ip='217.11.73.62:1935'>
                            <option value=''>Аудитория</option>
                            <option value='17'>604a</option>
                            <option value='18'>604b</option>
                            <option value='20'>605a</option>
                        </select>
            ";
    }
?>
<script src="https://content.jwplatform.com/libraries/CRrVUFAw.js"></script>

    <div class="container">
        <div class="card-panel hoverable" id="camera-block">
            <h5><i class="material-icons">input</i> Выберите аудиторию</h5>
            <div class="input-field col s12">
                <form action="">
                    <?php echo $rooms;?>
                </form>
            </div>
            <div class="col s12">
                <div id="video"><!-- Блок для видео потока --></div>
                <div id="embed-script"><!-- Динамический скрипт --></div>
            </div>
        </div>
    </div>
    <h3>&nbsp;</h3>
<?php
    include 'template/footer.php';
?>
