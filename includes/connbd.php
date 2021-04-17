<?php

    $server = '';
    $user   = '';
    $pass   = '';
    $db     = 'blog';

    $conn = mysqli_connect($server,$user,$pass,$db);

    mysqli_query($conn,"SET NAMES 'utf8'");

    if(!isset($_SESSION)){session_start();}