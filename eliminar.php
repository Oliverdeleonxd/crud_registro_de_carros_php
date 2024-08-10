<!-- Actualizar entradas -->

<?php include("conect.php");
$codigo = $_GET["codigo"];
if ( !empty($_GET['codigo']) ) {


$insertar = "delete from carros  WHERE codigo = $codigo;";


$resultado2 = mysqli_query($conn,$insertar);

if ($resultado2) {
    echo "<script>alert('Se ha Eliminado')
    window.location='actualizar.php';</script>";
}else{
    echo "<script>alert('Error al Eliminar')window.history.go(-1);</script>";
}

}else{
    echo "<script>alert('Campos vacios')window.history.go(-1);</script>";
}

?>