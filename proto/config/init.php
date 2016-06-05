<?php

    session_set_cookie_params(3600, '/'); //FIXME
    session_start();

    error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default

    //$BASE_DIR = 'D:/Programs/wamp/www/LBAW55/proto/'; //FIXME
    //$BASE_URL = '/LBAW55/proto/'; //FIXME

    //$BASE_DIR = '/opt/lbaw/lbaw1555/public_html/LBAW55/proto/'; //FIXME
    //$BASE_URL = '/~lbaw1555/LBAW55/proto/'; //FIXME

    $BASE_DIR = '/Applications/MAMP/htdocs/LBAW55/proto/';
    $BASE_URL = '/LBAW55/proto/';

    $conn = new PDO('pgsql:host=dbm.fe.up.pt;dbname=lbaw1555', 'lbaw1555', 'VK15D1P4'); //FIXME
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->exec('SET SCHEMA \'eldoom\''); //FIXME?


    include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');

    $smarty = new Smarty;
    $smarty->template_dir = $BASE_DIR . 'templates/';
    $smarty->compile_dir = $BASE_DIR . 'templates_c/';

    $smarty->assign('BASE_URL', $BASE_URL);

    $smarty->assign('error', $_SESSION['error']);
    unset($_SESSION['error']);

?>
