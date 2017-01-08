<?php
    include 'template/header.php';
?>

    <!-- Select map -->
    <div class="container">
        <a class="center-align blue darken-4 btn btn-large">
            <i class="material-icons left">person_pin</i>Выберите свой город
        </a>
        <div id="map"></div>
    </div>

    <!-- Init map  -->
    <script src="/js/raphael.js"></script>
    <script src="/js/map.js"></script>
<?php
    include 'template/footer.php';
?>