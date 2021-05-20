<?php
//conexion_db include
include("conexion_db.php");

if (isset($_GET['id_est'])) {
    $id_est = $_GET['id_est'];
    $query = "DELETE FROM estudiante WHERE id_est = $id_est";
    $resultado = mysqli_query($conn,$query);
    if (!$resultado) {
        die("Query falla");
    }
    //mensaje de alerta 
    $_SESSION['message'] = 'Tarea eliminada satisfactoriamente';
    $_SESSION['message_type'] = 'danger';
    //enviar datos a estudiantes.php
    header("location: estudiantes.php");
}