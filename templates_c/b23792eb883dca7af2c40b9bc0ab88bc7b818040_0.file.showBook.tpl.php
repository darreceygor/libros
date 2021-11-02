<?php
/* Smarty version 3.1.39, created on 2021-11-02 16:18:08
  from 'C:\xampp1\htdocs\TPE\libros\templates\showBook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618156b0295895_48864637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b23792eb883dca7af2c40b9bc0ab88bc7b818040' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\TPE\\libros\\templates\\showBook.tpl',
      1 => 1635866286,
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
function content_618156b0295895_48864637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-inside"
    <div class="card" style="width: 18rem;">
        <h3> <?php echo $_smarty_tpl->tpl_vars['book']->value->b_title;?>
</h3>

        <?php if (!empty($_smarty_tpl->tpl_vars['book']->value->b_image)) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_image;?>
" class="card-img-top" alt="...">
        <?php } else { ?>
            <img src="./img/libro.jpg" class="card-img-top" alt="...">
        <?php }?>
    
        <div class="card-body">
        <h5 class="card-title"># <?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
</h5>
        <p class="card-text">Autor: <?php echo $_smarty_tpl->tpl_vars['book']->value->b_autor;?>
</p>
        <p class="card-text">Año: <?php echo $_smarty_tpl->tpl_vars['book']->value->b_year;?>
</p>
        <p class="card-text"> Pais/es: <?php echo $_smarty_tpl->tpl_vars['country']->value->name;?>
</p>
        <?php if ((isset($_SESSION['USER_ROL'])) && $_SESSION['USER_ROL'] == 'admin') {?>
            <a class='btn btn-primary btn-sm' href="booksAdmin">Volver<a>
        <?php } else { ?>
            <a class='btn btn-primary btn-sm' href="books/1">Volver<a>
        <?php }?>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
