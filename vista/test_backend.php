<?php
include_once "../controlador/controladorMedicos.php";
include_once "./data_json.php";

$control = new ControladorMedicos();
$medicos = $control->control($row);
$medicos = json_decode($medicos, true);

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<h2>Medicos</h2>
	<p>Medicos disponibles</p>            
	<table class="table">
	<thead>
	<tr>
		<th>nombre</th>
		<th>apellido</th>
		<th>celular</th>
	</tr>
	</thead>
	<tbody>
	<?php
	foreach($medicos as $medico){
	?>
		<tr>
			<td><?php echo $medico['nombre'] ?></td>
			<td><?php echo $medico['apellido'] ?></td>
			<td><?php echo $medico['celular'] ?></td>
		</tr>
	<?php
	}
	?>	
	</tbody>
	</table>
</div>

</body>
</html>
