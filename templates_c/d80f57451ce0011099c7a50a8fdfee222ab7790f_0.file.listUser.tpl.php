<?php
/* Smarty version 3.1.39, created on 2021-11-09 03:43:38
  from 'C:\xampp\htdocs\TPE-Web2\libros\templates\listUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6189e05ac0f7e1_95855270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd80f57451ce0011099c7a50a8fdfee222ab7790f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\libros\\templates\\listUser.tpl',
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
function content_6189e05ac0f7e1_95855270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-3">
    <h3> Listado de Usuarios</h3>

<table class="table able-striped mt-3">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Rol</th>
        <th scope="col">Contraseña</th>
        <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'admin') {?>
            <th scope="col">Acciones</th>
        <?php }?>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                <td id="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
</td>
                <td id="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                <td id="<?php echo $_smarty_tpl->tpl_vars['user']->value->rol;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->rol;?>
</td>
                <td id="<?php echo $_smarty_tpl->tpl_vars['user']->value->password;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->password;?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'admin') {?>
                    <td><a class="btn btn-secondary " href="editUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">Roles</button></td>
                    <td><a class="btn btn-danger" href="delUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">Eliminar</a></td>
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
