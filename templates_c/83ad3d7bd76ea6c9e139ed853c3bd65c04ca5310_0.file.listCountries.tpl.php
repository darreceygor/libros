<?php
/* Smarty version 3.1.39, created on 2021-10-26 07:44:07
  from 'C:\xampp\htdocs\prueba\templates\listCountries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617795a78987d3_10908815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83ad3d7bd76ea6c9e139ed853c3bd65c04ca5310' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba\\templates\\listCountries.tpl',
      1 => 1635227041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/admin-nav.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_617795a78987d3_10908815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'admin') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/admin-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="container-inside">
    <h3> Listado de Paises </h3>

    <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'admin') {?>
        <form action="addCountry" method="POST">
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" placeholder="Ingresar pais nuevo.."  aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Agregar</button>
            </div>
        </form>    

    <?php }?>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Country Name</th>
            <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'admin') {?>
                <th col=2> Actions <th>
            <?php }?>
        </tr>
    </thead>

    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
            <tr>
                <td id="<?php echo $_smarty_tpl->tpl_vars['country']->value->id_country;?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value->id_country;?>
 </td>
                <td id="<?php echo $_smarty_tpl->tpl_vars['country']->value->id_name;?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value->name;?>
 </td>
                <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'admin') {?>
                    <td><a class="btn btn-warning" href="editCountry/<?php echo $_smarty_tpl->tpl_vars['country']->value->id_country;?>
">Editar</button></td>
                    <td><a class="btn btn-danger" href="delCountry/<?php echo $_smarty_tpl->tpl_vars['country']->value->id_country;?>
">Eliminar</a></td>
                <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
    </tbody>    
</div>
    



<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
