<?php
/* Smarty version 3.1.39, created on 2021-11-01 20:23:31
  from 'C:\xampp1\htdocs\TPE\libros\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61803eb3453893_06616166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d299c93e1927b662fb946d0977dbcfdc2cc8462' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\TPE\\libros\\templates\\nav.tpl',
      1 => 1635794609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61803eb3453893_06616166 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a class="nav-link" href="books/1">Books List</a>
        
        <?php if (((isset($_SESSION['USER_ID']))) && ($_SESSION['USER_ROL'] == 'admin')) {?> 
          <a class="nav-link" href="admin">Administrator</a>
        <?php } else { ?>
          <a class="nav-link disabled" href="admin">Administrator</a>
        <?php }?>  
          <div class="d-flex justify-content-end">
          
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
