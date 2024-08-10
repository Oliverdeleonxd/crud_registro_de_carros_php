<?php include("conect.php");

if ( !empty($_POST['codigo']) and !empty($_POST['marca'])  
and !empty($_POST['modelo'])  and !empty($_POST['precio']) ) {

$codigo = @$_POST["codigo"];
$marca = @$_POST["marca"];
$modelo = @$_POST["modelo"];
$precio = @$_POST["precio"];


$insertar = "UPDATE carros SET codigo = '$codigo',  marca = '$marca', modelo ='$modelo',  precio='$precio' WHERE codigo = $codigo;";


$resultado2 = mysqli_query($conn,$insertar);

if ($resultado2) {
    echo "<script>alert('Se ha actualizado')
    window.location='actualizar.php';</script>";
}else{
    echo "<script>alert('Error al actualizar')window.history.go(-1);</script>";
}

}else{
    echo "<script>alert('Campos vacios')window.history.go(-1);</script>";
}

?>