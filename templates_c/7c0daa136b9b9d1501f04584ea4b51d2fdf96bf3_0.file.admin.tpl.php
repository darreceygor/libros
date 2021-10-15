<?php
/* Smarty version 3.1.39, created on 2021-10-15 01:41:07
  from 'C:\xampp\htdocs\web\libros\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168c0133b9323_54516883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c0daa136b9b9d1501f04584ea4b51d2fdf96bf3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\libros\\templates\\admin.tpl',
      1 => 1634254837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/navAdmin.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168c0133b9323_54516883 (Smarty_Internal_Template $_smarty_tpl) {
?>        <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
