<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 12:33:43
  from 'C:\xampp-jose\htdocs\proyecto\tpl\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc77b97e7c384_08238731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abed8e1cb14662a7b1e305adf5166b6fdef95bf4' => 
    array (
      0 => 'C:\\xampp-jose\\htdocs\\proyecto\\tpl\\login.html',
      1 => 1606908819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc77b97e7c384_08238731 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

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
/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin">
  <img class="mb-4" src="../img/homer.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-<?php echo $_smarty_tpl->tpl_vars['anyoActual']->value;?>
</p>
</form>
</body>
</html>
<?php }
}
