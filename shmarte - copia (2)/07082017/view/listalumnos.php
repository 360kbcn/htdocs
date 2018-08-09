<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Alumnos</title>
  </head>
  <h1><strong>Listado de Alumnos</strong></h1>
  <body>
    <?php
    if(isset($data['error'])){
      echo "<p class='error'>".$data['error']."</p>";
    }

    
     ?>
     <table>
       <tr>
         <td >Id </td>
         <td >Nombre </td>
         <td>Email </td>
         <td>Asignatura </td>
         <td>Nota </td>
       </tr>
       <?php
       foreach ($data['alumnos'] as $alumno) {
         echo "<tr>"."<td>".$alumno['id']."</td>";
         echo "<td>".$alumno['nombre'] ."</td>";
         echo "<td>".$alumno['mail'] ."</td>";
         echo "<td>".$alumno['asigna'] ."</td>";
         echo "<td>".$alumno['nota'] ."</td>";
         echo "</tr>";
       }
        ?>
     </table>
  </body>
</html>
