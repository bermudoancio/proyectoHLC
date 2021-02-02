<?php
require_once '../config/config.php';

$smarty->assign('titulo', "Hola, bienvenido a mi página");
$anyoActual = date('Y');
$smarty->assign('anyoActual', $anyoActual);

$smarty->display('login.html');