<?php
/* Smarty version 3.1.39, created on 2021-10-14 22:59:27
  from 'C:\xampp\htdocs\web\libros\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61689a2fa84fc7_55263744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f645d14df06cb94d85b189c4c7489f186a36ed44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\libros\\templates\\nav.tpl',
      1 => 1634245165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61689a2fa84fc7_55263744 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><img class="icon" src="./img/icono.jpg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="home">Home</a>
        <a class="nav-link" href="list">List</a>
        <a class="nav-link" href="admin">Administrator</a>
      
      <?php if ((isset($_SESSION['USER_ID']))) {?>
        <a class="nav-link" href="logout"> Logout (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
      <?php }?> 
       
      </div>
    </div>
  </div>
</nav>
<?php }
}
