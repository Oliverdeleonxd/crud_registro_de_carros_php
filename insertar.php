<?php include("conect.php");
if ( !empty($_POST['codigo']) and !empty($_POST['marca'])  
and !empty($_POST['modelo'])  and !empty($_POST['precio'])) {

$codigo = @$_POST["codigo"];
$marca = @$_POST["marca"];
$modelo = @$_POST["modelo"];
$precio = @$_POST["precio"];


$insertar = "Insert into carros(codigo,marca,modelo,precio)
values('$codigo','$marca','$modelo','$precio')";

$resultado2 = mysqli_query($conn,$insertar);

if ($resultado2) {
    echo "<script>alert('Se ha registrado')
    window.location='index.php';</script>";
}else{
    echo "<script>alert('Error al registrar')window.history.go(-1);</script>";
}
}else{
    echo "<script>alert('Campos vacios')window.history.go(-1);</script>";
}
?>
