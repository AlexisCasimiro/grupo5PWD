<?php
    include_once("../estructura/header.php");

?>
<div class="card">
<h3 class="bg-info text-primary shadow-lg p-3 mb-5 bg-body-tertiary rounded"><i class="bi bi-pencil-square"></i>Cinem@s</h3>

    <form action="accion/accionEj3.php" class="row g-3 needs-validation" enctype="multipart/form-data" method="post" id="form-cinemas" name="form-cinemas" novalidate >
        <!--SECCION => TITULO -->
        <div class="col-md-6">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo"  placeholder="Titulo" required>
            <!--VALIDACION -->
            <div class="valid-feedback">Válido</div>
            <div class="invalid-feedback">Por favor complete el titulo de la pelicula</div>
        </div>


         <!--SECCION => AUTORES -->
        <div class="col-md-6">
            <label for="actores" class="form-label">Actores</label>
            <input type="text" class="form-control" name="actores" id="actores" placeholder="Actores" required>
            <!--VALIDACION -->
            <div class="valid-feedback">Válido</div>
            <div class="invalid-feedback">Por favor complete el autor de la pelicula</div>   
        </div>
        <!--SECCION => DIRECTOR -->
        <div class="col-md-6">
            <label for="director" class="form-label">Director</label>
            <input type="text" class="form-control" name="director" id="director" placeholder="Director" required>
            <!--VALIDACION -->
            <div class="valid-feedback">Válido</div>
            <div class="invalid-feedback">Falta el nombre del director</div>
        </div>
        <!--SECCION => GUION -->
        <div class="col-md-6">
            <label for="guion" class="form-label">Guión</label>
            <input type="text" class="form-control" name="guion" id="guion" placeholder="Guión" required>
            <!--VALIDACION -->
            <div class="valid-feedback">Válido</div>
            <div class="invalid-feedback">Complete el guion de la pelicula</div>
        </div>
        <!--SECCION => PRODUCCION -->
        <div class="col-md-6">
            <label for="prouccion" class="form-label">Producción</label>
            <input type="text" class="form-control" name="produccion" id="produccion" required>
            <!--VALIDACION -->
            <div class="valid-feedback">Válido</div>
            <div class="invalid-feedback">Produccion de la pelicula</div>
        </div>
        <!--SECCION => AÑO -->
        <div class="col-md-2">
            <label for="Anio" class="form-label">Año</label>
            <input type="number" class="form-control" name="anio" id="anio" required min="1000" max="9999">
            <!--VALIDACION -->
            <div class="valid-feedback">Válido</div>
            <div class="invalid-feedback">Año de la pelicula</div>
        </div>
        <!--SECCION => NACIONALIDAD -->
        <div class="col-md-6">
            <label for="nacionalidad" class="form-label">Nacionalidad</label>
            <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" required>
            <!--VALIDACION-->
            <div class="valid-feedback">Válido</div>
            <div class="invalid-feedback">Nacionalidad</div>
        </div>
        <!--SECCION => GENERO PELICULA -->
        <div class="col-md-6">
            <label for="genero" class="form-label">Género</label><br>
            <select name="genero" id="genero">
                <option value="comedia">Comedia</option>
                <option value="accion">Acción</option>
                <option value="terror">Terror</option>
                <option value="drama">Drama</option>
                <option value="romanticas">Románticas</option>
            </select>
            <!--VALIDACION -->
            <div class="valid-feedback">Válido</div>
            <div class="invalid-feedback">Elija un Genero</div>
        </div>
        <!--SECCION => DURACION -->
        <div class="col-md-4">
            <label for="duracion" class="form-label">Duración</label>
            <input type="number" class="form-control" name="duracion" id="duracion" min="0" max="999" required>
            (minutos)
            <!--VALIDACION -->
            <div class="valid-feedback">Válido</div>
            <div class="invalid-feedback">La duración no debe Exceder los 3 digitos</div>
        </div>
        <!--SECCION => RESTRICCION DE EDAD -->
        <div class="col-md-6">
            <label for="restriccion" class="form-label">Restricción de edad</label><br>
            <input type="radio" class="form-check-input" name="restriccion" id="todo-publico" required>Todo Público 
            <input type="radio" class="form-check-input" name="restriccion" id="mayores7" required>Mayores de 7 años  
            <input type="radio" class="form-check-input" name="restriccion" id="mayores18" required>Mayores de 18 años
            <!--VALIDACION -->
            <div class="valid-feedback">Válido</div>
            <div class="invalid-feedback">Elija una Restriccion</div>  
        </div>
        <!--SECCION => SINOPSIS -->
        <div class="col-md-12">
            <label for="sinopsis" class="form-label">Sinopsis</label><br>
            <textarea class="form-control" name="sinopsis" id="sinopsis" required></textarea>
        </div>

        <!--Carga de Imagen -->
        <div class="col-md-12" id="input">
            <label for="sinopsis" class="form-label">Suba la imagen de la pelicula</label><br>
            <input type="file" name="imagen" id="imagen">
        </div>

        <!--SECCION => SUBMIT Y BORRAR -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input type="submit" class="btn btn-primary justify-content-md-end" value="Enviar">
            <input type="reset" class="btn btn-secondary justify-content-md-end" value="Borrar">
        </div>
        <div class="col-md-12">
        </div>
    </form>

</div>
    <script src="../js/tp3Ej3.js"></script>

<?php
    include_once("../estructura/footer.php");
?>
    
