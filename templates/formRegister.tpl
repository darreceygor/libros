{include "header.tpl"}
{include "nav.tpl"}

<div class="login-form"> 
<div class="container-inside">
<h2>Registrar</h2>
<form method="post" class="form-horizontal">

<div class="form-group">
<label class="col-sm-9 text-left">Usuario</label>
<div class="col-sm-12">
<input type="text" name="txt_username" class="form-control" placeholder="Ingrese usuario" />
</div>
</div>

<div class="form-group">
<label class="col-sm-9 text-left">Email</label>
<div class="col-sm-12">
<input type="text" name="txt_email" class="form-control" placeholder="Ingrese email" />
</div>
</div>

<div class="form-group">
<label class="col-sm-9 text-left">Password</label>
<div class="col-sm-12">
<input type="password" name="txt_password" class="form-control" placeholder="Ingrese password" />
</div>
</div>

<div class="form-group">
<label class="col-sm-9 text-left">Seleccione tipo</label>
<div class="col-sm-12">
<input class="form-control" name="txt_role" value="user">
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="submit" name="btn_register" class="btn btn-primary btn-block" value="Registro">

</div>
</div>

<div class="form-group">
<div class="col-sm-12">
¿Tienes una cuenta? <a href="login"><p class="text-info">Inicio de sesión</p></a> 
</div>
</div>
</div>

</form>
</div><!--Cierra div login-->
{include "footer.tpl"}
