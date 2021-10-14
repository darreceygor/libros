<?php
/* Smarty version 3.1.39, created on 2021-10-15 00:26:54
  from 'C:\xampp\htdocs\web\libros\templates\showCountries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168aeaec89290_03723890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f11d3bbf23fe279e1cf5b8bb4839fc3945f3df98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\libros\\templates\\showCountries.tpl',
      1 => 1634250397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168aeaec89290_03723890 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" id="formCountries">
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
  <button type="submit">Consultar</button>
</form>
<?php }
}
