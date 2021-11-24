<?php
/* Smarty version 3.1.39, created on 2021-11-07 17:27:50
  from 'C:\xampp\htdocs\TPE-Web2\libros\templates\formRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6187fe86add9b0_44037802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '007773472f4682080b298bb4173032449f1ac84b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\libros\\templates\\formRegister.tpl',
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
function content_6187fe86add9b0_44037802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="login-form"> 
<div class="container-inside">
<h2>Registrar</h2>
<form action="addUser" method="POST" class="form-horizontal">

<div class="form-group">
<label class="col-sm-9 text-left">Email</label>
<div class="col-sm-12">
<input type="text" name="email" class="form-control" placeholder="Ingrese email" required/>
</div>
</div>

<div class="form-group">
<label class="col-sm-9 text-left">Password</label>
<div class="col-sm-12">
<input type="password" name="password" class="form-control" placeholder="Ingrese password" required/>
</div>
</div>

<div class="form-group">
<div class="col-sm-12 mt-3">
<button type="submit" name="btn_register" class="btn btn-primary btn-block">Salvar</button>

</div>
</div>

<div class="form-group">
<div class="col-sm-12 mt-3">
¿Tienes una cuenta? <a href="login"><p class="text-info">Inicio de sesión</p></a> 
</div>
</div>
</div>

</form>
</div><!--Cierra div login-->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
