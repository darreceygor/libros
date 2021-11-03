{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}

<div class="container-sm">
    <form name='formEditUser' method='GET' action='modUser/{$users->id}'>
        <div class='row'>
        
            <div class='col-9'>
                <div class='form-group'>
                    <p>
                    <label>Usuario: </label>
                    <label>{$users->email}</label>
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
        <button type="submit" class='btn btn-primary mt-2' >Guardar Modificación</button>
    </form>
</div>

{include file="templates/footer.tpl"}