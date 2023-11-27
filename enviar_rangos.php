<?php
$nick_form = $_POST['nickname'];
$horas_form = $_POST['horas'];
$rango_mm_form = $_POST['rango_mm'];
$rango_dz_form = $_POST['rango_dz'];
$exp_form = $_POST['experiencia'];

$conectar = mysqli_connect("localhost", "root", "", "programadorwebinicial");

mysqli_query($conectar, "INSERT INTO rangos VALUES (DEFAULT, '$nick_form', '$horas_form', '$rango_mm_form', '$rango_dz_form', '$exp_form')");

header("Location: index.php?ok#rangocsgo");

?>