<?php
//conexion_db include
include("conexion_db.php");

if (isset($_POST['guardar'])){
   $nombre = $_POST['nombre'];
   $apellido_paterno = $_POST['apellido_paterno'];
   $apellido_materno = $_POST['apellido_materno'];
   $correo = $_POST['correo'];
   $estado = $_POST['estado'];
   $expedido = $_POST['expedido'];
   //echo $edad;
   //echo $celular;
   //enviar datos a la tabla estudiante
   $query = "INSERT INTO estudiante(nombre,apellido_paterno,apellido_materno,correo,estado,expedido) VALUES ('$nombre','$apellido_paterno','$apellido_materno','$correo','$estado','$expedido')";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("falla");


      if (isset($_POST['id_est'])) {
     if (isset($_POST['activo']) == '1' && $_POST['inactivo'] == '0')
           echo '<div class="alert alert-success">Has aceptado correctamente las condiciones de uso.</div>';
       else
            echo '<div class="alert alert-danger">Debes aceptar las condiciones de uso.</div>';
   }
}
   //echo "guardado";
//sesion tipo y color del mensaje  
$_SESSION['message'] = 'Tarea guardad satisfactoriamente';
$_SESSION['message_type'] = 'success';

 header("Location:estudiantes.php");
} 
?>