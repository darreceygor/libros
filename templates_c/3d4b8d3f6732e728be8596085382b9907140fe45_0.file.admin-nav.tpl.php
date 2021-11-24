<?php
/* Smarty version 3.1.39, created on 2021-11-09 00:54:47
  from 'C:\xampp\htdocs\TPE-Web2\libros\templates\admin-nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6189b8c78c41c7_81328666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d4b8d3f6732e728be8596085382b9907140fe45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\libros\\templates\\admin-nav.tpl',
      1 => 1635993054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6189b8c78c41c7_81328666 (Smarty_Internal_Template $_smarty_tpl) {
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
