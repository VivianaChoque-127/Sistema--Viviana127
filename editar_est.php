<?php
include("conexion_db.php");


if  (isset($_GET['id_est'])) {
  $id_est = $_GET['id_est'];
  $query = "SELECT * FROM estudiante WHERE id_est = $id_est";
  $resultado = mysqli_query($conn, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $id_est= $row['id_est'];
    $nombre= $row['nombre'];
    $apellido_paterno= $row['apellido_paterno'];
    $apellido_materno= $row['apellido_materno'];
    $ci= $row['ci'];
    $expedido= $row['expedido'];
    $correo= $row['correo'];
    $telefono= $row['telefono'];
    $direccion = $row['direccion'];
    $estado= $row['estado'];
  
  }
}

if (isset($_POST['guardar'])) {
  $id_est= $_GET['id_est'];
  $nombre= $_POST['nombre'];
  $apellido_paterno= $_POST['apellido_paterno'];
  $apellido_materno= $_POST['apellido_materno'];
  $ci= $_POST['ci'];
  $expedido= $_POST['expedido'];
  $correo= $_POST['correo'];
  $telefono= $_POST['telefono'];
  $direccion= $_POST['direccion'];
  $estado= $_POST['estado'];
  
  
  //echo $edad;
  //echo $celular;
  //echo $idestudiante;
  $query = "UPDATE estudiante set nombre = '$nombre', apellido_paterno = '$apellido_paterno', ci = '$ci', expedido = '$expedido', correo = '$correo', telefono = '$telefono', direccion = '$direccion', estado = '$estado' WHERE id_est = $id_est";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tarea realizada con exito';
  $_SESSION['message_type'] = 'primary';
  header('Location: estudiantes.php');
}

?>z
<?php include("includes/encabezado.php"); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar_est.php?id_est=<?php echo $_GET['id_est']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <input name="apellido_paterno" type="text" class="form-control" value="<?php echo $apellido_paterno; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <input name="apellido_materno" type="text" class="form-control" value="<?php echo $apellido_materno; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <input name="expedido" type="text" class="form-control" value="<?php echo $expedido; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <input name="correo" type="text" class="form-control" value="<?php echo $correo; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <input name="direccion" type="text" class="form-control" value="<?php echo $direccion; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <input name="estado" type="text" class="form-control" value="<?php echo $estado; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <button class="btn-success" name="guardar">
          guardar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/piedepagina.php')?>