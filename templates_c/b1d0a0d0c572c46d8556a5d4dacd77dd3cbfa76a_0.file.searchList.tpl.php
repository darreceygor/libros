<?php
/* Smarty version 3.1.39, created on 2021-11-09 01:31:37
  from 'C:\xampp\htdocs\TPE-Web2\libros\templates\searchList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6189c1693a2b22_14021029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1d0a0d0c572c46d8556a5d4dacd77dd3cbfa76a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\libros\\templates\\searchList.tpl',
      1 => 1636417892,
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
function content_6189c1693a2b22_14021029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-3">


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Año</th>
    </tr>
  </thead>
  <tbody>
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?> 
        <tr> 
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['row']->value->id_book;?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->b_title;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->b_autor;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->b_year;?>
</td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    

  </tbody>
</table>



        

        <?php if ((isset($_SESSION['USER_ROL'])) && $_SESSION['USER_ROL'] == 'user') {?>
            <a class='btn btn-primary btn-sm' href="booksAdmin">Volver<a>
        <?php } else { ?>
            <a class='btn btn-primary btn-sm' href="books/1">Volver<a>
        <?php }
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
