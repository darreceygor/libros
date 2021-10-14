<form method="POST" id="formCountries">
    <select name="country">
      {foreach from=$countries item=$country}
        <option value="{$country->id_country}">{$country->country}</option>
      {/foreach}
    </select>
  <button type="submit">Consultar</button>
</form>
