<?php 
$conn = mysqli_connect("localhost:3308","root","","bdcarros");
mysqli_select_db($conn,"bdcarros");
mysqli_set_charset($conn,"utf8");
if (!$conn) {
  die('no se pudo conectar: ');
}

?>