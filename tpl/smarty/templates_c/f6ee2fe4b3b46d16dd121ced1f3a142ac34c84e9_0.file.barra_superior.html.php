<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 12:24:53
  from 'C:\xampp-jose\htdocs\proyecto\tpl\barra_superior.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd89d05510d09_60395913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6ee2fe4b3b46d16dd121ced1f3a142ac34c84e9' => 
    array (
      0 => 'C:\\xampp-jose\\htdocs\\proyecto\\tpl\\barra_superior.html',
      1 => 1608031466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd89d05510d09_60395913 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
        data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Hola <?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
</a>
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</nav><?php }
}
