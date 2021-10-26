<?php
/* Smarty version 3.1.39, created on 2021-10-17 21:28:22
  from 'C:\xampp\htdocs\prueba\templates\booksList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616c7956158f44_39542595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c71cafc59bb97caa27411c70d852264c6fd450f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba\\templates\\booksList.tpl',
      1 => 1634498900,
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
function content_616c7956158f44_39542595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3> Listado de Libros</h3>
<ul>
    <table>
        <thead>
            <tr>
            <th> ID </th>
            <th> TITLE </th>    
            <th> AUTOR </th>
            <th> YEAR </th>  
            <th> COUNTRY </th>
            <tr>
        </thead>

        <tbody>
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
            <tr>
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
               </tr> 
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
