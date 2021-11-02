<?php
/* Smarty version 3.1.39, created on 2021-11-02 16:06:34
  from 'C:\xampp1\htdocs\TPE\libros\templates\listCountries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618153faeda992_86963833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4ca23b40e77f7e7e99d1d1ef1b6b7fb46e3441d' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\TPE\\libros\\templates\\listCountries.tpl',
      1 => 1635865590,
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
function content_618153faeda992_86963833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_SESSION['USER_ROL']))) {?>
    <?php $_smarty_tpl->_assignInScope('user_rol', $_SESSION['USER_ROL']);
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
