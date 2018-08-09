<?php
	require('conexion.php');
	
	$query="SELECT *  FROM empleado";

	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Usuarios</title>
<style type="text/css">


/* Datagrid */
	body {
  font: normal medium/1.4 sans-serif;
  background: linear-gradient( 0deg, #C0C0C0   , #F8F8F8);}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 0.25rem;
  border: 1px solid #ccc;
}
tbody tr:nth-child(odd) {
  background: #eee;
}
.centro{
  padding: 0.5rem;
  background: #484848 ;
  color: white;
  text-align: center;
  font-size: 21px;

}

#cuadro{
	width: 90%;
	background: #F8F8F8 ;
	padding: 25px;
	margin: 5px auto;
	border: 3px solid #D8D8D8;
}
#titulo{
	width: 100%;
	background: #282828;
	color:white;

}
	</style>
	</head>
	<body>
	<div id="cuadro">
		<center><img src="contact.png"><br>
		<div id="titulo">
		<center><h1>Regristos</h1></center>
		</div>
		
		<table>
			<thead>
				<tr class="centro">
					<td>Cedula</td>
					<td>Nombre</td>
					<td>Ciudad</td>
					<td>Cargos</td>
					<td>Correo</td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['cedula'];?>
							</td>
							<td>
								<?php echo $row['nombre'];?>
							</td>
							<td>
								<?php echo $row['ciudad'];?>
							</td>
							<td>
								<?php echo $row['cargos'];?>
							</td>
							<td>
								<?php echo $row['correo'];?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>	
			</center
		</div>
		</body>
	</html>	
	
