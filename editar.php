<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css" type="text/css">
    <title>Editar </title>
</head>
<div class='cab'> <h1 class='home' onclick="location.href='index.php';" style="cursor: pointer; " >Hola mundo</h1>
</div>
<body>
<div class="menu">
  
<a href='./Registros/registrar.php'>
     <button type='button'class='button' >
      <span class='button__icon'><img src='imagenes/palomitas.png'width=25px height=25px ></span>
     <span class='button__text'>Registrar</span>
     </button>
     </a>
     <a href='./Actualizar/actualizar.php'>
     <button type='button'class='button' >
     <span class='button__icon'><img src='imagenes/palomitas.png'width=25px height=25px ></span>
     <span class='button__text'>Actualizar</span>
     </button>
     </a>

</div>


<div class='cosas2'>


<form class="table table--act_Ent" action="edit_actu.php" method="post">
<div class="Titulo Titulo--act_Ent">Editar </div>
<div class="header">Codigo</div>
<div class="header">Marca</div>
<div class="header">Modelo</div>
<div class="header">Precio</div>


<div class="header">edit</div>



<?php include("conect.php");
$id = $_GET["id"];
$clientes ="select * from carros where codigo ='$id'";
$resultado = mysqli_query($conn,$clientes);
while ($row = mysqli_fetch_assoc($resultado)) {?>

<input type="text" class="table_input" value="<?php echo $row["codigo"];?>" name="codigo">
<input type="text" class="table_input" value="<?php echo $row["marca"];?>" name="marca">
<input type="text" class="table_input" value="<?php echo $row["modelo"];?>" name="modelo">
<input type="text" class="table_input" value="<?php echo $row["precio"];?>" name="precio">


 <input type="submit" value="actualizar" class="container_submit container_submit--act">
<?php 
}
?>

</form>
</div>


</body>
</html>