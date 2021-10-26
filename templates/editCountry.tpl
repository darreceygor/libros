{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}

<h4 class="title"> {$titulo} </h4>

<div class="container-sm">
    <form name='formEditCountry' method='GET' action='modCountry/{$country->id_country}'>
        <div class='row'>
        
            <div class='col-9'>
                <div class='form-group'>
                    <label>Pais</label>
                    <input name='name' class='form-control' value="{$country->name}">
                </div>
            </div>
        </div>
        <a class='btn btn-secondary mt-2' href='countriesAdmin'>Cancelar</a>
        <button type="submit" class='btn btn-primary mt-2' >Guardar Modificación</button>
    </form>
</div>

{include file="templates/footer.tpl"}