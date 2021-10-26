<?php
/* Smarty version 3.1.39, created on 2021-10-26 17:40:23
  from 'C:\xampp1\htdocs\TPE\libros\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61782167360743_41135581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '212755a8b72ed4bbcafc0822aa3697f08172a949' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\TPE\\libros\\templates\\home.tpl',
      1 => 1635262821,
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
function content_61782167360743_41135581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-inside">
    <h1> Catalogo personal </h1>
    <img src="./img/libreria.jpg" alt="libreria"> 
</div>

 

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
