{include "header.tpl"}
{include "nav.tpl"}

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
{include "footer.tpl"}
