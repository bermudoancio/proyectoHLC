<?php

require_once '../config/config.php';
require_once 'comun/comun.php';

$titulo_pagina = "Página principal de administración";
$smarty->assign('titulo', "Mi página");

$contenido_main = $smarty->fetch('main_dashboard.html');

require_once 'comun/end.php';