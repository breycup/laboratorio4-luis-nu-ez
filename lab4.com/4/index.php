<?php
 $texto = $_GET["texto"];
 $salt = $_GET["salt"];
 require_once("cifrar.php");
 $obj = new cifrar();
 $obj->settexto("$texto");
 $obj->setSalt("$salt");
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 4</title>
</head>
<body>
    <h1>Programa de cifrados </h1>
<br>

<div class="container-sm">
    
<table class="table table-success table-striped table-hover table-bordered table-sm table-responsive-sm">
    
<thead>
                    <tr>
                        <th scope="col">Contraseña a Cifrar</th>
                        <th scope="col"><?php echo $texto?></th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                      <th scope = "row">Salt</th>
                      <th><?php echo $salt ?></th>  
                   </tr>
                   <tr>
                      <?php echo $obj->resultado() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->resultado2() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->resultado3() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->resultado4() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->resultado5() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->resultado6() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->resultado7() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->resultado8() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->resultado9() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->resultado10() ?>
                   </tr>
                   
                </tbody>
            </table>













</div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>