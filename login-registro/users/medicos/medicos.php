<?php
include_once(conexion.php);

// Ejecutar la consulta SQL para obtener los pacientes
$sql = "SELECT * FROM pacientes";
$resultado = mysqli_query($conn, $sql);

// Verificar si hay datos y guardarlos en un array
$pacientes = array();
if (mysqli_num_rows($resultado) > 0) {
  while($fila = mysqli_fetch_assoc($resultado)) {
    $paciente = array(
      "id" => $fila["id"],
      "numSS" => $fila["numSS"],
      "nombre" => $fila["nombre"],
      "f_nacimiento" => $fila["f_nacimiento"],
      "email" => $fila["email"],
      "f_ingreso" => $fila["f_ingreso"],
      "f_alta" => $fila["f_alta"],
      "motivo" => $fila["motivo"]
    );
    array_push($pacientes, $paciente);
  }
}
// Cerrar la conexión
mysqli_close($conn);
// Mostrar la tabla HTML con los pacientes
echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Número SS</th>
        <th>Nombre</th>
        <th>Fecha Nacimiento</th>
        <th>Email</th>
        <th>Fecha Ingreso</th>
        <th>Fecha Alta</th>
        <th>Motivo</th>
        <th>Acciones</th>
    </tr>";
foreach ($pacientes as $p) {
    echo "<tr>
        <td>".$p['id']."</td>
        <td>".$p['numSS']."</td>
        <td>".$p['nombre']."</td>
        <td>".$p['f_nacimiento']."</td>
        <td>".$p['email']."</td>
        <td>".$p['f_ingreso']."</td>
        <td>".$p['f_alta']."</td>
        <td>".$p['motivo']."</td>
        <td>
          <form action='modificar.php' method='POST'>
            <input type='hidden' name='id' value='".$p['id']."'>
            <button type='submit'>Modificar</button>
          </form>
          <form action='borrar.php' method='POST'>
            <input type='hidden' name='id' value='".$p['id']."'>
            <button type='submit'>Borrar</button>
          </form>
        </td>
    </tr>";
}
echo "</table>";
?>