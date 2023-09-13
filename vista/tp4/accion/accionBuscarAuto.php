<?php
    $Titulo = "Buscar Auto por patente";
    include_once("../../estructura/headerAccion.php");

    $datos = data_submitted();
    //$resp = false;
    echo "<h1> Holasssss</h1>";
    $objAbmAuto = new AbmAuto();
    echo "<p> " . $datos['patente']." </p>";

?>



<?php
include_once("../../estructura/footer.php");
?>