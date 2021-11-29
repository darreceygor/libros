<?php
/* Smarty version 3.1.39, created on 2021-11-26 03:39:27
  from 'C:\xampp\htdocs\TPE-Web2\libros\templates\listBooks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a048dfba5049_07451422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c4387281a29e5f84b7b3f0eec423d0a48ceefd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\libros\\templates\\listBooks.tpl',
      1 => 1637894363,
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
function content_61a048dfba5049_07451422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ((isset($_SESSION['USER_ROL']))) {?>
    <?php $_smarty_tpl->_assignInScope('user_rol', $_SESSION['USER_ROL']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('user_rol', 'anonimo');
}?>

<div class="container mt-3">
    <h3> Listado de Libros</h3>
    

    <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'user') {?>

        <div class="container">
            <div >
                <label class="me-3"> Busqueda </label>
                    <form name="searchForm" method='POST' action="search">
                        <input type="text" name="buscar" >
                        <input class="ms-2" type="radio" name="opcion" value="b_title"> Titulo
                        <input class="ms-2" type="radio" name="opcion" value="b_autor"> Autor
                        <input class="ms-2" type="radio" name="opcion" value="b_year"> Año
                           
                             <button type="submit" class="btn btn-success btn-sm ms-3" >Buscar</button>
                    </form>
            </div>
        </div>
    <?php }?>
        
          <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'admin') {?>
            <div class="container-sm mt-3">
                <form name="formAddBook" method='POST' action="addBook"  enctype="multipart/form-data">
                    <div class="row g-3">
                        <div><label></div>
                            <div class="col">
                                <label> Titulo </label>
                                <input type="text" class="form-control" name ="title" placeholder="Titulo" required>
                                <label> Año </label>
                                <input type="text" class="form-control" name ="year" placeholder="Año" >
                            </div>
                            <div class="col">
                                <label> Autor </label>
                                <input type="text" class="form-control" name ="autor" placeholder="Autor" required>
                                <label> Pais</label>
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
                                <label> Si no encuentra el pais correspondiente, puede ingresarlo <a href="countriesAdmin">acá</a></label>
                                 
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="imageToUpload" name="input_image">
                            </div>
                        </div> 
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success" >Guardar</button>
                    </div>
                </form>   
            </div> 
        <?php }?>
<ul>

<table class="table able-striped mt-3">
  <thead>
    <tr>
        <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'user') {?>
            <th></th>
        <?php }?>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autor</th>
        <th scope="col">Año</th>
        <th scope="col">Pais</th>
        
        <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'admin') {?>
            <th col=3> Acciones <th>
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
                <?php if ($_smarty_tpl->tpl_vars['user_rol']->value != 'admin') {?>
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
        <nav aria-label="Page navigation example">
</nav>
    </tbody>
    </table>


    <?php if ($_smarty_tpl->tpl_vars['user_rol']->value != 'admin') {?>  
    <div class="m-0 row justify-content-center"> 
        <div class="col-auto p-3 text-center">
            <ul class="pagination">

                <li class="page-item <?php echo $_smarty_tpl->tpl_vars['classPrev']->value;?>
"><a class="page-link" href="books/<?php echo $_smarty_tpl->tpl_vars['previous']->value;?>
">Anterior</a></li>
                <?php
$_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['menuItem']->step = 1;$_smarty_tpl->tpl_vars['menuItem']->total = (int) ceil(($_smarty_tpl->tpl_vars['menuItem']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['menuItem']->step));
if ($_smarty_tpl->tpl_vars['menuItem']->total > 0) {
for ($_smarty_tpl->tpl_vars['menuItem']->value = 1, $_smarty_tpl->tpl_vars['menuItem']->iteration = 1;$_smarty_tpl->tpl_vars['menuItem']->iteration <= $_smarty_tpl->tpl_vars['menuItem']->total;$_smarty_tpl->tpl_vars['menuItem']->value += $_smarty_tpl->tpl_vars['menuItem']->step, $_smarty_tpl->tpl_vars['menuItem']->iteration++) {
$_smarty_tpl->tpl_vars['menuItem']->first = $_smarty_tpl->tpl_vars['menuItem']->iteration === 1;$_smarty_tpl->tpl_vars['menuItem']->last = $_smarty_tpl->tpl_vars['menuItem']->iteration === $_smarty_tpl->tpl_vars['menuItem']->total;?>
                    <li class="page-item"><a class="page-link" href="books/<?php echo $_smarty_tpl->tpl_vars['menuItem']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value;?>
</a></li>
                <?php }
}
?>
                <li class="page-item <?php echo $_smarty_tpl->tpl_vars['classNext']->value;?>
"><a class="page-link" href="books/<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">Siguiente</a></li>
            </ul>
        </div>
    </div>
    <?php }?> 

</div>

<?php echo '<script'; ?>
 src="js/api.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
