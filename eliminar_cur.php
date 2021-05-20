<?php
//conexion_db include
include("conexion_db.php");

if (isset($_GET['id_cur'])) {
    $id_cur = $_GET['id_cur'];
    $query = "DELETE FROM curso WHERE id_cur = $id_cur";
    $resultado = mysqli_query($conn,$query);
    if (!$resultado) {
        die("Query falla");
    }
    //mensaje de alerta 
    $_SESSION['message'] = 'Tarea eliminada satisfactoriamente';
    $_SESSION['message_type'] = 'danger';
    //enviar datos a estudiantes.php
    header("location: cursos.php");
}