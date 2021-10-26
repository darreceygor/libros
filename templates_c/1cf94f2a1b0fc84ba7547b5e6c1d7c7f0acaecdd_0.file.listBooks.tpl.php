<?php
/* Smarty version 3.1.39, created on 2021-10-26 07:44:02
  from 'C:\xampp\htdocs\prueba\templates\listBooks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617795a2843229_08906953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cf94f2a1b0fc84ba7547b5e6c1d7c7f0acaecdd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba\\templates\\listBooks.tpl',
      1 => 1635227027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/admin-nav.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_617795a2843229_08906953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'admin') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/admin-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
<div class="container mt-3">
    <h3> Listado de Libros</h3>
        <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'admin') {?>
            <div class="container-sm mt-3">
                <form name="formAddBook" method='POST' action="addBook" >
                    <div class="row g-3">
                        <div><label></div>
                            <div class="col">
                                <label> Titulo </label>
                                <input type="text" class="form-control" name ="title" placeholder="Titulo" >
                                <label> Año </label>
                                <input type="text" class="form-control" name ="year" placeholder="Año" >
                            </div>
                            <div class="col">
                                <label> Autor </label>
                                <input type="text" class="form-control" name ="autor" placeholder="Autor" >
                                <label> Country</label>
                                <select class="form-control" name="country">
                                    <option selected>Elegir</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value->id_country;?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value->name;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                 
                            </div>
                        </div> 
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success" >Agregar</button>
                    </div>
                </form>   
            </div> 
        <?php }?>
<ul>

<table class="table able-striped mt-3">
  <thead>
    <tr>
        <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'books') {?>
            <th></th>
        <?php }?>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Autor</th>
        <th scope="col">Year</th>
        <th scope="col">Country</th>
        <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'admin') {?>
            <th col=3> Actions <th>
        <?php }?>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
            <tr>
                <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'books') {?>
                    <td>
                        <a class='btn btn-primary btn-sm' href="book/<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
/<?php echo $_smarty_tpl->tpl_vars['user_rol']->value;?>
">Ver</a>
                    </td>
                <?php }?>
                <td id="<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
</td>
                <td id="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_title;?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->b_title;?>
</td>
                <td id="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_autor;?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->b_autor;?>
</td>
                <td id="<?php echo $_smarty_tpl->tpl_vars['book']->value->b_year;?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->b_year;?>
</td>
                <td id="<?php echo $_smarty_tpl->tpl_vars['book']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->name;?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'admin') {?>
                    <td>
                        <a class='btn btn-primary btn-sm' href="book/<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
/<?php echo $_smarty_tpl->tpl_vars['user_rol']->value;?>
">Ver</a>
                        <a class="btn btn-warning btn-sm" href="editBook/<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
">Editar</a>
                        <a class="btn btn-danger btn-sm" href="delBook/<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
">Eliminar</a>
                    </td>
                <?php }?>
                
    </tr> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>

</div>



<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
