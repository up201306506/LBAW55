<?php
  session_set_cookie_params(3600, '/~lbaw1555'); //FIXME
  session_start();

  error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default

  $BASE_DIR = '/opt/lbaw/lbaw1555/public_html/LBAW55/proto/'; //FIXME
  $BASE_URL = '/~lbaw1555/LBAW55/proto/'; //FIXME

  $conn = new PDO('pgsql:host=dbm;dbname=lbaw1555', 'lbaw1555', 'VK15D1P4'); //FIXME
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $conn->exec('SET SCHEMA \'eldoom\''); //FIXME?
  
  
  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
  
  $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);  
  $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
  $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
  
  $smarty->assign('USERNAME', $_SESSION['username']);
  $smarty->assign('ACCOUNTTYPEVAR', $_SESSION['accounttypevar']);
  $smarty->assign('DESCRIPTION', $_SESSION['description']);
  $smarty->assign('EMAIL', $_SESSION['email']);
  $smarty->assign('NAME', $_SESSION['name']);

  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);  
  unset($_SESSION['field_errors']);
  unset($_SESSION['form_values']);
  
?>
