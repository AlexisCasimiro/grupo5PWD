<?php
    include_once( "../estructura/header.php");
?>
<head>
    <link type="text/css" rel="stylesheet" href="../css/tp2Ej4.css">
</head>

    <div class="container mb-5" id="containerP">
        <!-- bg: Background-->
        <h3 class="bg-info text-primary shadow-lg p-3 mb-5 bg-body-tertiary rounded"><i class="bi bi-pencil-square"></i>Cinem@s</h3>
        <form action="accion/accionEj4.php" method="post" class="needs-validation" novalidate>

            <!--SECCION => TITULO -->
            <div class="row">
                <div class="col-sm-6">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" placeholder="titulo" name="titulo" required>

                <!--VALIDACION -->
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor complete el titulo de la pelicula</div>
                </div>

                <!--SECCION => AUTORES -->
                <div class="col-sm-6">
                <label for="autores" class="form-label">Autores</label>
                <input type="text" class="form-control" id="autores" placeholder="autores" name="autores" required></input>
                <!--VALIDACION -->
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor complete el autor de la pelicula</div>   
                </div>
            </div>

            <!--SECCION => DIRECTOR -->
            <div class="row mt-3 mb-3">
                <div class="col-sm-6">
                <label for="Director" class="form-label">Director</label>
                <input type="text" class="form-control" id="director" placeholder="director" name="director" required>
                <!--VALIDACION -->
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Falta el nombre del director</div>
                </div>
                <!--SECCION => GUION -->
                <div class="col-sm-6">
                <label for="guion" class="form-label">Guion</label>
                <input type="text" class="form-control" id="guion" placeholder="guion" name="guion" required></input>
                <!--VALIDACION -->
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Complete el guion de la pelicula</div>
                </div>
            </div>

            <!--SECCION => PRODUCCION -->
            <div class="row mt-3 mb-3">
                <div class="col-sm-6">
                <label for="prduccion" class="form-label">Produccion</label>
                <input type="text" class="form-control" id="produccion" placeholder="produccion" name="produccion" required>
                <!--VALIDACION -->
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Produccion de la pelicula</div>
                </div>
                <!--SECCION => AÑO -->
                <div class="col-sm-6">
                <label for="anio" class="form-label">Año</label>
                <input type="number" class="form-control w-25" id="anio" placeholder="anio" min="1900" max="2023" name="anio" required></input>
                <!--VALIDACION -->
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Año de la pelicula</div>
                </div>
                
            </div>

            <!--SECCION => NACIONALIDAD -->
            <div class="row mt-3 mb-3">
                <div class="col-sm-6">
                <label for="nacionalidad" class="form-label">Nacionalidad</label>
                
                <input type="text" class="form-control" id="nacionalidad" placeholder="nacionalidad" name="nacionalidad" required>
                <!--VALIDACION -->
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Nacionalidad</div>
                </div>
                <!--SECCION => GENERO PELICULA -->
                <div class="col-sm">
                    <label for="genero" class="form-label">Género</label>
                    <select class="form-select w-auto" name="genero" required>
                        <option>Comedia</option>
                        <option>Drama</option>
                        <option>Terror</option>
                        <option>Suspenso</option>
                        <option>Romántica</option>
                        <option>Otras</option>
                    </select>
                    

                <!--VALIDACION -->
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Elija un Genero</div>
                </div>
                
            </div>

            <!--SECCION => DURACION -->
            <div class="row">
                <div class="col-sm-6 mt-3">
                    <label for="duracion" class="form-label">Duración</label>
                    <input type="number" class="form-control" id="duracion" min="100" max="999" name="duracion" required>
                    <span>(Minutos)</span>

                    <!--VALIDACION -->
                    <div class="valid-feedback">Válido</div>
                    <div class="invalid-feedback">La duración no debe Exceder los 3 digitos</div>
                </div>

                <!--SECCION => RESTRICCION DE EDAD -->
                <div class="col-sm-6 mt-3">
                    <label for="restriccionEdad" class="form-label">Restricciones de Edad</label>
                    <div class="form-check"><!--radio button  tp: todo publico    m7: mayores de 7 años  m18: mayores de 18 años-->
                        <input class="form-check-input" type="radio" name="re" value="Todo Publico" checked> Todos públicos
                        <label class="form-check-label" for="tp"></label>
                    </div>     
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="re" value="mayor 7 anios"> Mayores de 7 años
                        <label class="form-check-label" for="m7"></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="re" value="mayor 18 anios"> Mayores de 18 años
                        <label class="form-check-label" for="m18"></label>
                        
                    </div>

                    <!--VALIDACION -->
                    <div class="valid-feedback">Válido</div>
                    <div class="invalid-feedback">Elija una Restriccion</div>
                </div>
            </div>

            <!--SECCION => SINOPSIS -->
            <div class="mb-3 mt-3">
                <label>Sinopsis</label>
                <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3"></textarea>
            </div>

            <!--SECCION => SUBMIT Y BORRAR -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" class="btn btn-primary justify-content-md-end" value="Enviar">
                <input type="reset" class="btn btn-secondary justify-content-md-end" value="Borrar">
            </div>
        </form>

    </div>

    <script type="text/javascript" src="../js/tp2Ej4.js"></script>
    
<?php
    include_once( "../estructura/footer.php");
?>