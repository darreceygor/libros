<?php
/* Smarty version 3.1.39, created on 2021-11-02 16:29:05
  from 'C:\xampp1\htdocs\TPE\libros\templates\admin-nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618159413a65a3_56100039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fae1b00958d84d53286273517763e3c2f85581f' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\TPE\\libros\\templates\\admin-nav.tpl',
      1 => 1635866943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618159413a65a3_56100039 (Smarty_Internal_Template $_smarty_tpl) {
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
