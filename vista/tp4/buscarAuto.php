<?php
$Titulo = "Buscar Auto";
include_once("../estructura/header.php");

?>	
<div>
    <h1 style="text-align: center; color:dodgerblue;">Buscar Auto por la Patente</h1>
        <form class="row g-3 needs-validation" action="accion/accionBuscarAuto.php" method="post" name="formPat" id="formPat">
        <div class="col-md-2"></div>
        <div class="col-md-2">
        <label for="validationCustom01" class="form-label">Patente</label>
        <input type="text" class="form-control" name="patente" id="patente" placeholder="AAA123 o AA123BB">
        </div>
        <div class="col-md-8"> </div>
        <div class="col-md-2"></div>
        <div class="col-md-4"> 
        <button type="submit" class="btn btn-primary" name="enviar" id="enviar">Buscar</button>
       
        </div>
    </form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>


<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="../js/tp4Ej4.js"></script>
<?php

include_once("../estructura/footer.php");
?>
