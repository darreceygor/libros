<?php
/* Smarty version 3.1.39, created on 2021-10-15 00:25:25
  from 'C:\xampp\htdocs\web\libros\templates\formCountry.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168ae5588e748_12353172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ba238c67aed38989c34948c0649013a4197b74d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\libros\\templates\\formCountry.tpl',
      1 => 1634250323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168ae5588e748_12353172 (Smarty_Internal_Template $_smarty_tpl) {
?>            </ul>
            <h3>Nuevo Pais...</h3>

            <form action="createCountry" method="POST">
                <div class="mb-3">
                    <label for="b_title" class="form-label">Pais</label>
                    <input type="text" class="form-control" name="b_title"  required>
                  
                </div>
                <div class="mb-3 form-check">

            <button type="submit" class="btn btn-primary">Agregar</button>
          </form><?php }
}
