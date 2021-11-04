<?php
/* Smarty version 3.1.39, created on 2021-11-04 03:32:58
  from 'C:\xampp\htdocs\TPE-Web 2\libros\templates\admin-nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6183465a5c7cd2_81221817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59f646dc29c0773dc8a6ffcd55107bb7e954e985' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web 2\\libros\\templates\\admin-nav.tpl',
      1 => 1635993054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6183465a5c7cd2_81221817 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-light bg-light">
  <form class="container-fluid justify-content-start">
    <a href="countriesAdmin" class="btn btn-outline-success me-2" type="button">Item: Paises</a>
    <a href="booksAdmin" class="btn btn-outline-success me-2" type="button">Fichas: Libros</a>

    <?php if ((isset($_SESSION['USER_ROL'])) && $_SESSION['USER_ROL'] == 'admin') {?>
      <a href="userAdmin" class="btn btn-outline-success me-2" type="button">Control de Usuarios</a>
    <?php }?>

  </form>
</nav><?php }
}
