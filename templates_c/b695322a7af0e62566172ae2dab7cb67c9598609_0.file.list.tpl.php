<?php
/* Smarty version 3.1.39, created on 2021-10-17 20:55:36
  from 'C:\xampp\htdocs\prueba\templates\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616c71a8ebb772_97487215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b695322a7af0e62566172ae2dab7cb67c9598609' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba\\templates\\list.tpl',
      1 => 1634496935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616c71a8ebb772_97487215 (Smarty_Internal_Template $_smarty_tpl) {
?><h3> Listado de paises </h3>
<ul>
    <select>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value->id_country;?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value->name;?>
</option>';
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</ul><?php }
}
