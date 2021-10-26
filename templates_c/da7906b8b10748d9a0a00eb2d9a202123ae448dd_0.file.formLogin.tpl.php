<?php
/* Smarty version 3.1.39, created on 2021-10-26 20:00:48
  from 'C:\xampp1\htdocs\TPE\libros\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61784250d861e8_17273340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da7906b8b10748d9a0a00eb2d9a202123ae448dd' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\TPE\\libros\\templates\\formLogin.tpl',
      1 => 1635271246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61784250d861e8_17273340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form method="POST" action="verify" >
    <div class="container">
        <h3>Iniciar sesión</h3>

        <div class="row  g-3 m-2">

            <div class="col-md-auto col-8">
                    <label class="form-label d-md-none" for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="col-md-auto col-8">
                    <label class="form-label d-md-none" for="inputPassword">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                    <div class="alert alert-danger"> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
  </div>
                <?php }?>

            <div class="col-md-auto col-8">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <a href="addUser" class="btn btn-secondary">Register</a>
            </div>
        </div>
        <div class="col-md-auto col-8">
        </div>
    </div>
</form>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
