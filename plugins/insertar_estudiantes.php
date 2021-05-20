<?php
include("conexion.php");
$con=conectar();


$Nombre=$_POST['Nombre'];
$Apellidos_Paterno=$_POST['apellido_paterno'];
$Apellido_Materno=$_POST['apellido_materno'];
$CI=$_POST['ci'];
$GradoAcademico=$_POST['grado_academico'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$celular=$_POST['celular'];
$nacionalidad=$_POST['nacionalidad'];
$estado=$_POST['estado'];
$ciudad=$_POST['ciudad'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];
$expedito=$_POST['expedito'];
$nota_final=$_POST['nota_final'];

if($_POST)
{
$queryInsert = "INSERT INTO estudiante (Nombre,apellido_paterno,apellido_materno,ci,grado_academico,direccion,correo,celular,nacionalidad,estado,ciudad,sexo,expedito,edad,nota_final) 
VALUES ('"n['Nombre']."', '".$_POST['apellido_paterno']."','".$_POST['apellido_materno']."','".$_POST['ci']."','".$_POST['grado_academico']."','".$_POST['direccion']."','".$_POST['celular']."','".$_POST['nacionalidad']."','".$_POST['estado']."','".$_POST['ciudad']."','".$_POST['sexo']."','".$_POST['expedito']."','".$_POST['edad']."','".$_POST['nota_final']."');";
$resultInsert = mysqli_query($con,$queryInsert);

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?>
<?php if ($state) { ?>
<p><em>Registro insertado correctamente</em></p>
<?php } ?>


