<?php
/* Smarty version 3.1.39, created on 2021-10-24 07:27:37
  from 'C:\xampp\htdocs\prueba\templates\modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6174eec933c8c9_46462714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab40757855882f0f0da399659519988c903829c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba\\templates\\modal.tpl',
      1 => 1635053255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6174eec933c8c9_46462714 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal fade" id="bookModal<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookModal<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
">Editar Libro...</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form name="formBook" method='GET' action='modBook/<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
'>
            <div class="row g-3">
                <div><label># <?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
</div>
                <div class="col">
                    <label> Titulo </label>
                    <input type="text" class="form-control" name ="newTitle" placeholder="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_title;?>
" >
                    <label> Año </label>
                    <input type="text" class="form-control" name ="newYear" placeholder="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_year;?>
" >
                </div>
                <div class="col">
                    <label> Autor </label>
                    <input type="text" class="form-control" name ="newAutor" placeholder="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_autor;?>
" >
                    <label> Country </label>
                    <input type="text" class="form-control" name ="newCountry" placeholder="<?php echo $_smarty_tpl->tpl_vars['book']->value->name;?>
" >
                </div>
            </div>
            
            </div>
            <div class="modal-footer" mb-2>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" >Guardar</button>
            </div>
        </form>
    </div>
  </div>
</div><?php }
}
