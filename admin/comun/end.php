<?php

$smarty->assign('menu_izquierda', $menu_izquierda);
$smarty->assign('main', $contenido_main);
$smarty->assign('titulo_pagina', $titulo_pagina);
$smarty->assign('barra_superior', $barra_superior);
$smarty->display('esqueleto.html');