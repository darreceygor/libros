<?php
/* Smarty version 3.1.39, created on 2021-11-09 03:43:47
  from 'C:\xampp\htdocs\TPE-Web2\libros\templates\editUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6189e06389e066_70145153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f7b12d391bd695505516a7250e9d19ffb5a38bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\libros\\templates\\editUser.tpl',
      1 => 1635993054,
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
function content_6189e06389e066_70145153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-sm">
    <form name='formEditUser' method='GET' action='modUser/<?php echo $_smarty_tpl->tpl_vars['users']->value->id;?>
'>
        <div class='row'>
        
            <div class='col-9'>
                <div class='form-group'>
                    <p>
                    <label>Usuario: </label>
                    <label><?php echo $_smarty_tpl->tpl_vars['users']->value->email;?>
</label>
                    </p>
                    <p>
                    <label>Cambiar rol: </label>
                    <select name="rol">
                        <option selected>Elegir...</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                    </p>
                </div>
            </div>
        </div>
        <a class='btn btn-secondary mt-2' href='userAdmin'>Cancelar</a>
        <button type="submit" class='btn btn-primary mt-2' >Guardar Modificaci??n</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
