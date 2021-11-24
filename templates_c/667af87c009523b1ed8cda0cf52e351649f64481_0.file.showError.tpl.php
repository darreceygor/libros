<?php
/* Smarty version 3.1.39, created on 2021-11-09 03:52:41
  from 'C:\xampp\htdocs\TPE-Web2\libros\templates\showError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6189e279507268_82535549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '667af87c009523b1ed8cda0cf52e351649f64481' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\libros\\templates\\showError.tpl',
      1 => 1636426350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6189e279507268_82535549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    NO SE PUEDE PROCESAR LA SOLICITUD
  </div>
  <a class="btn btn-primary ms-5 btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
">Regresar</a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
