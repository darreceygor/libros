<?php
/* Smarty version 3.1.39, created on 2021-11-29 12:07:44
  from 'C:\xampp\htdocs\TPE-Web2\libros\templates\showBook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a4b48076ee01_80121457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '299ef96d761da2af9c98ab6af021a1a43ef32150' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\libros\\templates\\showBook.tpl',
      1 => 1638184051,
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
function content_61a4b48076ee01_80121457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid p-2">
    <h3> <?php echo $_smarty_tpl->tpl_vars['book']->value->b_title;?>
</h3>

    <div class="row p-2">
        <div class="col-sm-4 p-2" style="background-color:lavender;">

            <div class="ms-2">
                <?php if (!empty($_smarty_tpl->tpl_vars['book']->value->b_image)) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_image;?>
" class="book" alt="...">
                <?php } else { ?>
                    <img src="./img/libro.jpg" class="book" alt="...">
                <?php }?>

                <h5># <?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
</h5>
                <p>Autor: <?php echo $_smarty_tpl->tpl_vars['book']->value->b_autor;?>
</p>
                 <p>Año: <?php echo $_smarty_tpl->tpl_vars['book']->value->b_year;?>
</p>
                <p> Pais/es: <?php echo $_smarty_tpl->tpl_vars['country']->value->name;?>
</p>
            </div>
        </div>
        
        <div class="col-sm-8 p-2" style="background-color:lavender;">
            
                <div id="allComments" value =<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
>

                </div>

            <?php if ((isset($_SESSION['USER_ID']))) {?>
            <form id="formComments" method="POST" resource="api/addComment">
                <div class="mt-2">
                    <input type="hidden" id="id_book" name="id_book" value=<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
>
                                        <input type="hidden" id="id_user" name="id_user" value=<?php echo $_SESSION['USER_ID'];?>
>
                    
               
                    <p><label>Opiniones</label>                
                        <textarea required="required" id="textComment" name="textComment" cols="50" rows="1" placeholder="Comentar"></textarea> </td>
                        <label>Calificar</label>            
                            <select name="id_score" id="id_score">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select></td>
                        <button type="submit" id="btn_comment" class="btn btn-success btn-sm">Comentar</button>
                </form>
                </div>    
            <?php }?> 
        </div>
    </div>

    <?php if ((isset($_SESSION['USER_ROL'])) && $_SESSION['USER_ROL'] == 'admin') {?>
        <a class='btn btn-primary btn-sm' href="booksAdmin">Volver<a>
    <?php } else { ?>
        <a class='btn btn-primary btn-sm' href="books/1">Volver<a>
    <?php }?>
</div>





<?php echo '<script'; ?>
 src="js/api.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
