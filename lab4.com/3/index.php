<?php 

$precio = $_GET["precio"];
$vida = $_GET["vida"];
require_once("Depresion.php"); 
$obj = new depresion();
$obj->setprecio($precio);
$obj->setvida($vida);
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 3</title>
</head>
<body>
    <div class="container-sm">
    <h3>Depreciasión</h3>
            <h5>Precio: B/.<?php echo $precio ?>.00 </h5>
            <h5>Vida: <?php echo $vida ?> Años</h5>
            <h5>Depresiación Anual: B/.<?php echo ($precio/$vida) ?> .00 </h5>


            <br></br>
            <table class="table table-warning table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">Año</th>
                        <th scope="col">Valor por año</th>
                        <th scope="col">Valor recuperado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $obj->resultado() ?>
                </tbody>
            </table>







    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>