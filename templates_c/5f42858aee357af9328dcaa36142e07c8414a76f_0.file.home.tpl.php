<?php
/* Smarty version 3.1.39, created on 2021-10-17 20:50:50
  from 'C:\xampp\htdocs\prueba\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616c708a24f7d1_62585858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f42858aee357af9328dcaa36142e07c8414a76f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba\\templates\\home.tpl',
      1 => 1634496430,
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
function content_616c708a24f7d1_62585858 (Smarty_Internal_Template $_smarty_tpl) {
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
