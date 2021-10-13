<?php
/* Smarty version 3.1.39, created on 2021-10-12 10:08:15
  from 'C:\xampp\htdocs\web\libros\templates\editBook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165426f230699_72485642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e483819e881bfa2c96340bbc88baa693c4dc6c41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\libros\\templates\\editBook.tpl',
      1 => 1634026080,
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
function content_6165426f230699_72485642 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
    <?php $_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    

    
        <h3>Editar libro</h3>

        <form action="<?php echo BASE_URL;?>
updateBook" method="POST">
            <div class="mb-3">
                <label for="b_title2" class="form-label">Titulo </label>
                <input type="text" class="form-control" name="b_title2" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_title;?>
" >

                <label for="b_autor2" class="form-label">Autor</label>
                <input type="text" class="form-control" name="b_autor2" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_autor;?>
">

                <label for="b_year2" class="form-label">Año</label>
                <input type="text" class="form-control" name="b_year2" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_year;?>
">

                <label for="b_country2" class="form-label">Origen</label>
                <input type="text" class="form-control" name="b_country2" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_country;?>
">
            </div>
            <div class="mb-3 form-check">

        <button type="submit" class="btn btn-primary">Agregar</button>
        <a href="<?php echo BASE_URL;?>
admin" class="btn btn-primary">Volver</a>
                </div>
      </form>



    <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   

<?php }
}
