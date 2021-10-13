<?php
/* Smarty version 3.1.39, created on 2021-10-11 04:59:52
  from 'C:\xampp\htdocs\web\libros\templates\formBook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6163a8a8727721_74712810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8804ecf0497666f239451fbe010c6be6e97dc419' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\libros\\templates\\formBook.tpl',
      1 => 1633921185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6163a8a8727721_74712810 (Smarty_Internal_Template $_smarty_tpl) {
?>        <h1>Catalogo de Libros 2021</h1>

            </ul>
            <h3>Libro nuevo...</h3>

            <form action="createBook" method="POST">
                <div class="mb-3">
                    <label for="b_title" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="b_title"  required>

                    <label for="b_autor" class="form-label">Autor</label>
                    <input type="text" class="form-control" name="b_autor" required>

                    <label for="b_year" class="form-label">Año</label>
                    <input type="text" class="form-control" name="b_year" >

                    <label for="b_country" class="form-label">Origen</label>
                    <input type="text" class="form-control" name="b_country" >
                </div>
                <div class="mb-3 form-check">

            <button type="submit" class="btn btn-primary">Agregar</button>
          </form><?php }
}
