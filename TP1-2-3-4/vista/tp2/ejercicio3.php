<?php
    include_once("../estructura/header.php");
?>
<head>
    <link type="text/css" rel="stylesheet" href="../css/tp2Ej3.css">
</head>
<div class="container w-25 border border-dark border-5  p-3 mt-5" id="principal">
        <h2 class="titulo">Member Login</h2>
        <form action="accion/accionEj3.php" name="form" id="form" method="post" class="login">
            <div class="mb-3">
                <div class="input-group-text">
                    <span><i class="bi bi-person"></i></span>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Username"> 

                </div>
            </div>
            <div class="mb-3">
                
                <div class="input-group-text">
                    <span><i class="bi bi-lock-fill"></i></span>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                </div>
                

            </div>
            <small class="aviso">
                
            </small>
            <button type="submit" class="btn btn-success w-100" name="enviar" id="enviar">Login</button>
        </form>
    </div>

    <!--Link js -->
    <script type="text/javascript" src="../js/tp2Ej3.js"></script>
    
<?php
    include_once("../estructura/footer.php");
?>