<?php
require_once 'dbconnect/database.class.php';

$objDB = new DataBase;

$id = $_GET['id'];
if($id>0){
  $result = $objDB->Execute("SELECT * FROM crud_employees WHERE id=$id");
  $employee = $result->fetch_assoc();
}
?>

  <form id="frmEmployee" class="form">
    <input type="hidden" name="id" value="<?= $id ?>" />
    <label>
      Nombres
      <input type="text" name="nombre" value="<?php if(isset($employee)) echo $employee['nombre'] ?>" required />
    </label>

    <label>
      Apellido
      <input type="text" name="apellido" value="<?php if(isset($employee)) echo $employee['apellido'] ?>" required />
    </label>


    <label>
      Dirección
      <input type="text" name="direccion" value="<?php if(isset($employee)) echo $employee['direccion'] ?>" />
    </label>
 
    <label>
      Telefono
      <input type="tel" name="telefono" value="<?php if(isset($employee)) echo $employee['telefono'] ?>" />
    </label>
    <label>
      Correo
      <input type="text" name="correo" value="<?php if(isset($employee)) echo $employee['correo'] ?>" />
    </label>
    <label>
      Fecha registro
      <input type="date" name="fecha_registro" value="<?php if(isset($employee)) echo $employee['fecha_registro'] ?>" />
    </label>

    <button class="button" type="submit">Guardar datos</button>
  </form>
  <a class="button hideForm" href="#">Cerrar</a>