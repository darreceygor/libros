<?php
/* Smarty version 3.1.39, created on 2021-10-14 22:17:32
  from 'C:\xampp\htdocs\web\libros\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168905c9bad05_93551730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95f23b5c4fcfcadd357e6eef1080c5ecd8546307' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\libros\\templates\\home.tpl',
      1 => 1633908726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168905c9bad05_93551730 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1> Catalogo personal </h1>

<div>
    <img src="./img/libreria.jpg" alt="libreria"> 
</div>

 

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
