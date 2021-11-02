<?php
/* Smarty version 3.1.39, created on 2021-11-02 15:02:20
  from 'C:\xampp1\htdocs\TPE\libros\templates\editCountry.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618144ec688f35_48904588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4640482687ab091226815ffe206c6545fa90213' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\TPE\\libros\\templates\\editCountry.tpl',
      1 => 1635249868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_618144ec688f35_48904588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h4 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h4>

<div class="container-sm">
    <form name='formEditCountry' method='GET' action='modCountry/<?php echo $_smarty_tpl->tpl_vars['country']->value->id_country;?>
'>
        <div class='row'>
        
            <div class='col-9'>
                <div class='form-group'>
                    <label>Pais</label>
                    <input name='name' class='form-control' value="<?php echo $_smarty_tpl->tpl_vars['country']->value->name;?>
">
                </div>
            </div>
        </div>
        <a class='btn btn-secondary mt-2' href='countriesAdmin'>Cancelar</a>
        <button type="submit" class='btn btn-primary mt-2' >Guardar Modificación</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
