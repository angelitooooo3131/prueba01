<html>
  <head>
    <title>CRUD PHP, MySQL, jQuery</title>
    <script src="jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="styles.css">



    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
  	<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  </head>
  <body>
  <div class="contenedor">
		<header>
			<h1>Lista de Clientes</h1>

      </header>
    <div class="bg"></div>
    <div class="block">
      <a class="button showForm" href="#">Nuevo Cliente</a>
      <table id="table" class="tables">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th> 
            <th>Fecha registro</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody class="listEmployees">
          <?php include_once 'employee.list.php' ?>
        </tbody>
      </table>
    </div>
    <div class="modalFrmEmployee"></div>
  </body>
  <script src="funcs.js"></script>
</html>
