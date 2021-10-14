<?php
/* Smarty version 3.1.39, created on 2021-10-14 22:35:30
  from 'C:\xampp\htdocs\web\libros\templates\cardBook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616894925649e5_31400434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5ec0ee888535d7412ea90bda207531b87c110e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\libros\\templates\\cardBook.tpl',
      1 => 1634113193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616894925649e5_31400434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['book']->value->b_title;?>
</h5>
        <h6 class="card-subtitle mb-2 text-muted"> </h6>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['book']->value->b_year;?>
</p>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['book']->value->country;?>
</p>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['book']->value->b_autor;?>
</p>
        <p class="card-text"> </p>
    </div>

    <td><a href="../list" class="btn btn-info" >Volver</a></td>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
