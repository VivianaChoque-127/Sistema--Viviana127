<?php
//conexion_db include
include("conexion_db.php");

if (isset($_POST['guardar'])){
   $nombre_de_curso = $_POST['nombre_de_curso'];
   $tipo_de_capacitacion = $_POST['tipo_de_capacitacion'];
   $costo = $_POST['costo'];
   $estado = $_POST['estado'];
  
   //echo $nombre;
   //echo $horas;
   //enviar datos a la tabla curso
   $query = "INSERT INTO curso(nombre_de_curso,tipo_de_capacitacion,costo,estado) VALUES ('$nombre_de_curso','$tipo_de_capacitacion','$costo','$estado')";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("falla");
}
   //echo "guardado";
//sesion tipo y color del mensaje  
$_SESSION['message'] = 'Tarea guardad satisfactoriamente';
$_SESSION['message_type'] = 'success';

 header("Location:cursos.php");
} 
?>