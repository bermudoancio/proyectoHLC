<?php

require_once '../config/config.php';

$menu_izquierda = $smarty->fetch('menu_izquierda.html');
$smarty->assign('nombre_usuario', "Jose");
$barra_superior = $smarty->fetch('barra_superior.html');

$smarty->assign('titulo', "Mi página");

$contenido_main = $smarty->fetch('main_dashboard.html');

$smarty->assign('barra_superior', $barra_superior);
$smarty->assign('menu_izquierda', $menu_izquierda);
$smarty->assign('main', $contenido_main);
$smarty->assign('titulo_pagina', "Página principal de administración");
$smarty->display('esqueleto.html');