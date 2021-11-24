<?php
/* Smarty version 3.1.39, created on 2021-11-07 17:25:33
  from 'C:\xampp\htdocs\TPE-Web2\libros\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6187fdfdddd916_23318532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48e42f46f35dd3c299f6a37ad29f462d21640ce5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\libros\\templates\\formLogin.tpl',
      1 => 1635993054,
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
function content_6187fdfdddd916_23318532 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="user" class="btn btn-secondary">Register</a>
            </div>
        </div>
        <div class="col-md-auto col-8">
        </div>
    </div>
</form>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
