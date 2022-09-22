<?php 

$horast = $_GET["horast"];
$pph = $_GET["pph"];
require_once("salario.php"); 
$obj = new salario();
$obj->sethorast($horast);
$obj->setpph($pph);
?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 1 Salario</title>
    <div class="container-sm">
        <h2>Programa 1 POO</h2>

    <?php echo "Tu salario es ". $obj->Resultado()                ?>
    </div>
</head>
<body>
<div class="container-sm">
    









</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>