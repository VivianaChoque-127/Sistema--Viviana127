<?php
include("conexion_db.php");


if  (isset($_GET['id_cur'])) {
  $id_cur = $_GET['id_cur'];
  $query = "SELECT * FROM curso WHERE id_cur = $id_cur";
  $resultado = mysqli_query($conn, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $id_cur= $row['id_cur'];
    $nombre_de_curso= $row['nombre_de_curso'];
    $tipo_de_capacitacion= $row['tipo_de_capacitacion'];
    $costo= $row['costo'];
    $estado= $row['estado'];
      }
}

if (isset($_POST['guardar'])) {
  $id_cur= $_GET['id_cur'];
  $nombre_de_curso= $_POST['nombre_de_curso'];
  $tipo_de_capacitacion= $_POST['tipo_de_capacitacion'];
  $costo= $_POST['costo'];
  $estado= $_POST['estado'];
  
  
  //echo $edad;
  //echo $celular;
  //echo $idestudiante;
  $query = "UPDATE curso set nombre_de_curso = '$nombre_de_curso', tipo_de_capacitacion = '$tipo_de_capacitacion', costo = '$costo', estado = '$estado' WHERE id_cur = $id_cur";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tarea realizada con exito';
  $_SESSION['message_type'] = 'primary';
  header('Location: cursos.php');
}

?>
<?php include("includes/encabezado.php"); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar_cur.php?id_cur=<?php echo $_GET['id_cur']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre_de_curso" type="text" class="form-control" value="<?php echo $nombre_de_curso; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <input name="tipo_de_capacitacion" type="text" class="form-control" value="<?php echo $tipo_de_capacitacion; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <input name="costo" type="text" class="form-control" value="<?php echo $costo; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <input name="estado" type="text" class="form-control" value="<?php echo $estado; ?>" placeholder="Update Title">
        </div>
        <button class="btn-success" name="guardar">
          guardar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/piedepagina.php')?>