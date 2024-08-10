<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css" type="text/css">
    <title>Registrar carros</title>
</head>
<div class='cab'> <h1 class='home' onclick="location.href='index.php';" style="cursor: pointer; " >Registro de carros</h1>


</div>
<body>

<div class="menu">
 
<a href='index.php'>
     <button type='button'class='button' >
     
     <span class='button__text'>Registrar</span>
     </button>
     </a>
     <a href='actualizar.php'>
     <button type='button'class='button' >
 
     <span class='button__text'>Actualizar</span>
     </button>
     </a>

</div>


<div class='cosas2'>
   
<div class="MenuTablas">
<a href="index.php"><button class="btn" role="button">Registrar carros</button></a>

</div>

<div class="container_form">
    <h2 class="form_titulo">Registrar Carros</h2>
    <form action="insertar.php" method="post" class="form">
        <label for="" class="container_label" >Codigo</label>
        <input name="codigo" type="text" class="container_input"  maxlength="10">
        <label for="" class="container_label" >Marca</label>
        <input name="marca" type="text" class="container_input"  maxlength="20">
        <label for="" class="container_label">Modelo</label>
        <input name="modelo" type="text" class="container_input"maxlength="40">
         <label for="" class="container_label">Precio</label>
        <input name="precio" type="number" class="container_input"  maxlength="10">
        <div class="bt">
        <input class="container_submit" type="submit" value="Registrar ">
        </div>
    </form>
   
</div>


<div class="table table--regis_Ent">
<div class="Titulo Titulo--regis_Ent">Carros</div>
<div class="header">Codigo</div>
<div class="header">Marca</div>
<div class="header">Modelo</div>
<div class="header">Precio</div>


<!-- <div class="header">Codigo</div> -->

<?php include("conect.php");
$carros ="select * from carros";


$resultado = mysqli_query($conn,$carros);
while ($row = mysqli_fetch_assoc($resultado)) {?>
<div class="table_item"><?php echo $row["codigo"];?> </div>
<div class="table_item"><?php echo $row["marca"];?> </div>
<div class="table_item"><?php echo $row["modelo"];?> </div>
 <div class="table_item"><?php echo $row["precio"];?> </div>


  
<?php 
}
?>



</div>
</div>


</body>
</html>