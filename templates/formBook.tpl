        <h1>Catalogo de Libros 2021</h1>

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
          </form>