<?php
/* Smarty version 3.1.39, created on 2021-10-24 09:08:08
  from 'C:\xampp\htdocs\prueba\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6175065861a684_15697117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc5c4fc067258155b7da56c6bb131dfab8151db2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba\\templates\\nav.tpl',
      1 => 1635059287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6175065861a684_15697117 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><img class="icon" src="./img/icono.jpg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="home">Home</a>
        <a class="nav-link" href="countries">Countries List</a>
        <a class="nav-link" href="books">Books List</a>
        <a class="nav-link" href="admin">Administrator</a>
          <div class="d-flex">
            <?php if ((isset($_SESSION['USER_ID']))) {?> 
              <a class="nav-link" href="logout"><?php echo $_SESSION['USER_EMAIL'];?>
, Logout</a>
            <?php } else { ?>
              <a class="nav-link" href="login">Login</a>
            <?php }?>
          </div>
      </div>
    </div>
  </div>
</nav>
<?php }
}
