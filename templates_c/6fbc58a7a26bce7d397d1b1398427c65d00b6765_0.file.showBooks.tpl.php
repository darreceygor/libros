<?php
/* Smarty version 3.1.39, created on 2021-10-12 10:13:20
  from 'C:\xampp\htdocs\web\libros\templates\showBooks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616543a03f26b2_95338665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fbc58a7a26bce7d397d1b1398427c65d00b6765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\libros\\templates\\showBooks.tpl',
      1 => 1634026398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/formBook.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616543a03f26b2_95338665 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['estado']->value == "nuevo") {?>
            <?php $_smarty_tpl->_subTemplateRender('file:templates/formBook.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>   

          <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Titulo</th>
              <th scope="col">Autor</th>
              <th scope="col">Año</th>
              <th scope="col">Origen</th>
              <?php if ($_smarty_tpl->tpl_vars['estado']->value != "lista") {?>
              <th scope="col 2" colspan="2">Acciones</th>
              <?php }?>
            </tr>
            <br><br>
          </thead>
          <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>         
            <tr>
              <th scope="row"><?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
</th>
              <?php if ($_smarty_tpl->tpl_vars['estado']->value == "lista") {?>
              <td><a href="viewBook/<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->b_title;?>
</a></td>
              <?php } else { ?>
              <td><?php echo $_smarty_tpl->tpl_vars['book']->value->b_title;?>
</td>
              <?php }?>
              <td><?php echo $_smarty_tpl->tpl_vars['book']->value->b_autor;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['book']->value->b_year;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['book']->value->b_country;?>
</td>
              
              <?php if ($_smarty_tpl->tpl_vars['estado']->value != "lista") {?>
              <td><a class="btn btn-warning" href="editBook/<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
">Editar</button></td>
              <td><a class="btn btn-danger" href="deleteBook/<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
">Eliminar</a></td>
              <?php }?>
            </tr>
        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
        </tbody>
        </table>
 

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
