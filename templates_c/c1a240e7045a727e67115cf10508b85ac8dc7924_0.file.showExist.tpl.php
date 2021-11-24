<?php
/* Smarty version 3.1.39, created on 2021-11-09 03:41:26
  from 'C:\xampp\htdocs\TPE-Web2\libros\templates\showExist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6189dfd61b03d4_38379727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1a240e7045a727e67115cf10508b85ac8dc7924' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\libros\\templates\\showExist.tpl',
      1 => 1636425682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6189dfd61b03d4_38379727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, YA EXISTE EN LA BASE DE DATOS
  </div>
  <a class="btn btn-primary ms-5 btn-sm" href="countriesAdmin">Regresar</a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
