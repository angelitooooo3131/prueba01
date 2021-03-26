<?php
require_once 'dbconnect/database.class.php';

$objDB = new DataBase;

$result = $objDB->Execute('SELECT * FROM crud_employees');

while($employee = $result->fetch_assoc()){
  ?>
  <tr>
    <td><?= $employee['nombre'] ?></td>
    <td><?= $employee['apellido'] ?></td>
    <td><?= $employee['direccion'] ?></td>
    <td><?= $employee['telefono'] ?></td>
    <td><?= $employee['correo'] ?></td>
    <td><?= $employee['fecha_registro'] ?></td>
    <td>
      <a class="edit" data-id="<?= $employee['id'] ?>" class="button hideForm"  href="#">Editar</a>
   

      <a class="delete" data-id="<?= $employee['id'] ?>" class="button hideForm"  href="#">Eliminar</a>
    </td>
  </tr>
  <?php
}
?>
