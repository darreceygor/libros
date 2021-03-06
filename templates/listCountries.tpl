{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}

{if isset($smarty.session.USER_ROL)}
    {$user_rol=$smarty.session.USER_ROL}
{* {else}
    user_rol=user *}
{/if}



{* {if $user_rol=='admin'}
    {include file="templates/admin-nav.tpl"}
{/if}
 *}
<div class="container-inside">
    <h3> Listado de Paises </h3>
    
    {if $user_rol=='admin'}
        <form action="addCountry" method="POST">
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" placeholder="Ingresar pais nuevo.."  aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Agregar</button>
            </div>
        </form>    

    {/if}


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre de Pais</th>

            {if $user_rol=='admin'}
                <th col=2> Acciones <th>
            {/if}
        </tr>
    </thead>

    <tbody>
        {foreach from=$countries item=$country}
            <tr>
                <td id="{$country->id_country}">{$country->id_country} </td>
                <td id="{$country->id_name}">{$country->name} </td>

                {if $user_rol=='admin'}
                    <td><a class="btn btn-warning" href="editCountry/{$country->id_country}">Editar</button></td>
                    <td><a class="btn btn-danger" href="delCountry/{$country->id_country}">Eliminar</a></td>
                {/if}
        {/foreach}
            </tr>
    </tbody>    
</div>
    



{include file="templates/footer.tpl"}