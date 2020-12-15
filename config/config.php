<?php
/*
 * Este archivo será usado para las operaciones mínimas del archivo de configuración. 
 */
session_start();


define ('_ROOT_PATH_', 'C:/xampp-jose/htdocs/proyecto');
// Base de datos
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', '');
define ('DB_NAME', 'login');

define ('_WEB_PATH_', 'http://' . $_SERVER['SERVER_NAME'] . '/proyecto');



// Vamos a crear el objeto Smarty, pues se usará en todas las páginas
include_once _ROOT_PATH_ . '/lib/Smarty/Smarty.class.php';
$smarty = new Smarty();
$smarty->setTemplateDir(_ROOT_PATH_ . '/tpl/');
$smarty->setCompileDir(_ROOT_PATH_ . '/tpl/smarty/templates_c/');
$smarty->setConfigDir(_ROOT_PATH_ . '/tpl/smarty/configs/');
$smarty->setCacheDir(_ROOT_PATH_ . '/tpl/smarty/cache/');
$smarty->assign('_WEB_PATH_', _WEB_PATH_);