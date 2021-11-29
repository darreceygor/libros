<?php
/* Smarty version 3.1.39, created on 2021-11-28 05:52:11
  from 'C:\xampp\htdocs\TPE-Web2\libros\templates\vue\comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a30afb8b4af4_93560253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e89d9ae6ffa72b986da54f83efad6848f695ab5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\libros\\templates\\vue\\comments.tpl',
      1 => 1638075130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a30afb8b4af4_93560253 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="app">
        <h2>{ titulo } </h2>  
        <ul class="list-group">                
        <li class="list-group-item d-flex">
                {data.comment}       
        <div>
                { calificacion } {data.score}
        </div>             

<?php }
}
