<?php
/* Smarty version 3.1.39, created on 2021-10-24 08:51:17
  from 'C:\xampp\htdocs\prueba\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617502656dbaa9_01511259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '658f8930d1e683f2b32b823d8c01640695aae136' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba\\templates\\formLogin.tpl',
      1 => 1634108898,
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
function content_617502656dbaa9_01511259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="m-4">
    <form method="POST" action="verify" >
        <div class="row align-items-center g-3">
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
            </div>
        </div>
    </form>
    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}