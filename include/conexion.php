<?php
    include('config.inc');
    $cnn = mysqli_connect($server, $user, $pwd, $database);
    mysqli_set_charset($cnn,"utf8");
?>