<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 12:45:58
  from 'C:\xampp-jose\htdocs\proyecto\tpl\esqueleto.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8a1f608efa3_08187155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6044ee6ae6f5ed1695e37463f18e0219fe77a1a6' => 
    array (
      0 => 'C:\\xampp-jose\\htdocs\\proyecto\\tpl\\esqueleto.html',
      1 => 1608032193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8a1f608efa3_08187155 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo_pagina']->value;?>
</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['_WEB_PATH_']->value;?>
/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <?php echo $_smarty_tpl->tpl_vars['barra_superior']->value;?>


<div class="container-fluid">
  <div class="row">
    <?php echo $_smarty_tpl->tpl_vars['menu_izquierda']->value;?>


    <?php echo $_smarty_tpl->tpl_vars['main']->value;?>

  </div>
</div>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="../assets/js/vendor/jquery.slim.min.js"><\/script>')<?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="../assets/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_WEB_PATH_']->value;?>
/js/dashboard.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
