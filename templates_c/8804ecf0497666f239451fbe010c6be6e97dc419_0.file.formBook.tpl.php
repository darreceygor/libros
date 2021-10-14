<?php
/* Smarty version 3.1.39, created on 2021-10-15 00:28:47
  from 'C:\xampp\htdocs\web\libros\templates\formBook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168af1f2bb753_84526206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8804ecf0497666f239451fbe010c6be6e97dc419' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\libros\\templates\\formBook.tpl',
      1 => 1634250525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168af1f2bb753_84526206 (Smarty_Internal_Template $_smarty_tpl) {
?>        <h1>Catalogo de Libros 2021</h1>

            </ul>
            <h3>Libro nuevo...</h3>

            <form action="createBook" method="POST">
                <div class="mb-3">
                    <label for="b_title" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="b_title"  required>

                    <label for="b_autor" class="form-label">Autor</label>
                    <input type="text" class="form-control" name="b_autor" required>

                    <label for="b_year" class="form-label">Año</label>
                    <input type="text" class="form-control" name="b_year" >

                    <label for="b_country" class="form-label"> Origen
                    <select name="country">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value->id_country;?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value->country;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select> 
                    </label>
                </div>
                <div class="mb-3 form-check">

            <button type="submit" class="btn btn-primary">Agregar</button>
          </form><?php }
}
