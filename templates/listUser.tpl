{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}

{* {if $user_rol=='admin'}
    {include file="templates/admin-nav.tpl"}
{/if} *}
<div class="container mt-3">
    <h3> Listado de Usuarios</h3>

<table class="table able-striped mt-3">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Rol</th>
        <th scope="col">Contraseña</th>
        {if $user_rol=='admin'}
            <th scope="col">Acciones</th>
        {/if}
    </tr>
  </thead>
  <tbody>
    <tr>
        {foreach from=$users item=$user}
                <td id="{$user->id}">{$user->id}</td>
                <td id="{$user->email}">{$user->email}</td>
                <td id="{$user->rol}">{$user->rol}</td>
                <td id="{$user->password}">{$user->password}</td>
                {if $user_rol=='admin'}
                    <td><a class="btn btn-secondary " href="editUser/{$user->id}">Roles</button></td>
                    <td><a class="btn btn-danger" href="delUser/{$user->id}">Eliminar</a></td>
                {/if}
                
    </tr> 
        {/foreach}
    </tbody>
    </table>

</div>



{include file="templates/footer.tpl"}