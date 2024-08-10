<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css" type="text/css">
    <title>Actualizar info</title>
</head>
<div class='cab'> <h1 class='home'  onclick="location.href='index.php';" style="cursor: pointer;" >Registro de carros</h1>


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
<a href="actualizar.php"><button class="btn" role="button">carros</button></a>

</div>


<div class="table table--act_Ent">
<div class="Titulo Titulo--act_Ent">Actualizar Entradas</div>
<div class="header">Codigo</div>
<div class="header">Marca</div>
<div class="header">Modelo</div>
<div class="header">Precio</div>
<div class="header">edit</div>


<?php include("conect.php");
$carros ="select * from carros";

$resultado = mysqli_query($conn,$carros);
while ($row = mysqli_fetch_assoc($resultado)) {?>

<div class="table_item"><?php echo $row["codigo"];?> </div>
<div class="table_item"><?php echo $row["marca"];?> </div>
<div class="table_item"><?php echo $row["modelo"];?> </div>
<div class="table_item"><?php echo $row["precio"];?> </div>

<div class="table_item">
    <a href="editar.php?id=<?php echo $row["codigo"];?>" class="table_item_link">Editar</a>|
    <a href="eliminar.php?codigo=<?php echo $row["codigo"];?>" class="table_item_link">Eliminar</a>
</div>

  
<?php 
}
?>

</div>
</div>


</body>
</html>