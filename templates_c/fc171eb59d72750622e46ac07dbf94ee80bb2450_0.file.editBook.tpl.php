<?php
/* Smarty version 3.1.39, created on 2021-10-26 17:37:53
  from 'C:\xampp1\htdocs\TPE\libros\templates\editBook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617820d1907a42_02970594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc171eb59d72750622e46ac07dbf94ee80bb2450' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\TPE\\libros\\templates\\editBook.tpl',
      1 => 1635249868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_617820d1907a42_02970594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



  <div class="container-sm mt-5">
  
        <form name="formBook" method='GET' action='modBook/<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
' >
              <div class="row g-3">
                <div><label># <?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
</div>
                <div class="col">
                    <label> Titulo </label>
                    <input type="text" class="form-control" name ="newTitle" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_title;?>
" >
                    <label> Año </label>
                    <input type="text" class="form-control" name ="newYear" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_year;?>
" >
                </div>
                <div class="col">
                    <label> Autor </label>
                    <input type="text" class="form-control" name ="newAutor" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_autor;?>
" >
                    <label> Country <?php echo $_smarty_tpl->tpl_vars['book']->value->id_country;?>
</label>

                    <select class='form-control' name='newCountry'>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>    
                          <?php if ($_smarty_tpl->tpl_vars['country']->value->id_country == $_smarty_tpl->tpl_vars['book']->value->id_country) {?>
                              <option selected value="<?php echo $_smarty_tpl->tpl_vars['country']->value->id_country;?>
"> <?php echo $_smarty_tpl->tpl_vars['country']->value->name;?>
</option>
                          <?php } else { ?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value->id_country;?>
"> <?php echo $_smarty_tpl->tpl_vars['country']->value->name;?>
</option> 
                          <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
              </div> 
            <div class="mt-3">
              <a class="btn btn-secondary" href="booksAdmin">Cerrar</a>
              <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>    

</div>

 <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
