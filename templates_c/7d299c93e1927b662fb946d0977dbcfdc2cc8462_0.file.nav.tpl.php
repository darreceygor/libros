<?php
/* Smarty version 3.1.39, created on 2021-11-03 13:22:30
  from 'C:\xampp1\htdocs\TPE\libros\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61827f06b97994_65440144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d299c93e1927b662fb946d0977dbcfdc2cc8462' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\TPE\\libros\\templates\\nav.tpl',
      1 => 1635942148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin-nav.tpl' => 1,
  ),
),false)) {
function content_61827f06b97994_65440144 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SESSION['USER_ROL']))) {?>
  <?php $_smarty_tpl->_assignInScope('user_rol', $_SESSION['USER_ROL']);
} else { ?>
  <?php $_smarty_tpl->_assignInScope('user_rol', 'anonimo');
}?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><img class="icon" src="./img/icono.jpg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="home">Inicio</a>

                <?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'admin') {?>
                   <a class="nav-link" >Administrador</a> 
          
        <?php } else { ?>
          <a class="nav-link" href="countries">Item: Paises</a>
          <a class="nav-link" href="books/1">Fichas: Libros</a>
        <?php }?>

                  <div class="d-flex justify-content-end">
          
            <?php if ((isset($_SESSION['USER_ID']))) {?> 
              <a class="nav-link" href="logout"><?php echo $_SESSION['USER_EMAIL'];?>
, Salir</a>
            <?php } else { ?>
              <a class="nav-link" href="login">Ingresar</a>
            <?php }?>
          </div>
      </div>
    </div>
    <div>
          <?php if ((isset($_smarty_tpl->tpl_vars['user_rol']->value))) {?>
            <h6><span class="badge rounded-pill bg-success"><?php echo $_smarty_tpl->tpl_vars['user_rol']->value;?>
</span></h6>
          <?php } else { ?>
            <h6><span class="badge rounded-pill bg-secondary">anonimo</span></h6>
          <?php }?> 
    </div>
  </div>
</nav>
<?php if ($_smarty_tpl->tpl_vars['user_rol']->value == 'admin') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/admin-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php }
}
