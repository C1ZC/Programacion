<?php
	require 'conexion.php';
	//ingresa los valores por get, y los ingresa en value 
	$idempleados = $_GET['idempleados'];
	
	$sql = "SELECT * FROM profesores WHERE idempleados = '$idempleados'";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);

    //registrar usuario este metodo evita inyecciones en tus campos de datos.
    if(isset($_POST["modificar"])){
	$idempleados = mysqli_real_escape_string($conexion,$_POST['idempleados']);
	$apellido = mysqli_real_escape_string($conexion,$_POST['apellido']);
	$nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
	$seccional = mysqli_real_escape_string($conexion,$_POST['seccional']);
    $facultad = mysqli_real_escape_string($conexion,$_POST['facultad']);
    $cargo = mysqli_real_escape_string($conexion,$_POST['cargo']);
    $salario = mysqli_real_escape_string($conexion,$_POST['salario']);
    $fech_com = mysqli_real_escape_string($conexion,$_POST['fech_com']);
    $fech_nac = mysqli_real_escape_string($conexion,$_POST['fech_nac']);
	
	//esto permite que no se agregue 2 empleados con la misma ID 
	$sqluser = "SELECT idempleados FROM profesores WHERE idempleados = '$idempleados'; ";
	$resultadouser = $conexion->query($sqluser);
	$filas= $resultadouser->num_rows;
	if($filas > 0){
		echo " <script> alert('EL usuario ya existe');
		windows.location = 'modificar.php';</script>";
	}else{
		//insertar informacion del usuario + "password encriptada"
		$sqlusuario = "INSERT INTO profesores(idempleados,Apellido,Nombre,Seccional,Facultad,Cargo,Salario,Fech_com,Fech_nac) VALUES ('$idempleados', '$apellido', '$nombre', '$seccional', '$facultad', '$cargo', '$salario', '$fech_com', '$fech_nac')";
		
		$resultadousuario = $conexion->query($sqlusuario);
		if($resultadousuario > 0) {
			echo " <script> alert('Registro Exitoso');
		windows.location = 'modificar.php';</script>";
		}else{
			echo " <script> alert('Error al Registrarse');
		windows.location = 'modificar.php';</script>";
		}
	}

}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>Bienvenido a la Facultad</title>
	<!--CSS MATERIALIZE-->
	<link href="css/estilos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!--register -->
<header>

<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="admin.php">Home</a></li>
        <li><a href="facultad.php">Facultad</a></li>
		<li><a href="salir.php" class="waves-effect waves-light btn">Salir</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="admin.php">Home</a></li>
    <li><a href="facultad.php">Facultad</a></li>
    <li><a href="salir.php" class="waves-effect waves-light btn">Salir</a></li>
  </ul>

      <h1>Modificar Facultad</h1>
    </header>
    <div class="container pt-60">
      <div class="row">
			<h4>Ingresa tu Información del Docente</h4>
        <form class="col s12" action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
          <div class="row">
            <div class="input-field col s6">
              <input id="idemoleados" type="text" class="validate" name ="idempleados" required="true" value="<?php echo $row['idempleados']; ?>">
              <label for="idempleados">ID Empleados</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate" name = "apellido" required="true" value="<?php echo $row['Apellido']; ?>">
              <label for="last_name">Apellido</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="fisrt_name" type="text" class="validate" name = "nombre" required="true" value="<?php echo $row['Nombre']; ?>">
              <label for="fisrt_name">Nombre</label>
            </div>
            <div class="input-field col s6">
              <input id="seccional" type="text" class="validate" name="seccional" required="true" value="<?php echo $row['Seccional']; ?>">
              <label for="seccional">Seccional</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="facultad" type="text" class="validate" name="facultad" required="true" value="<?php echo $row['Facultad']; ?>">
              <label for="facultad">Facultad</label>
            </div>
            <div class="input-field col s6">
              <input id="cargo" type="text" class="validate" name="cargo" required="true" value="<?php echo $row['Cargo']; ?>">
              <label for="cargo">Cargo</label>
            </div>
          </div>
          <div class="row">
          <div class="input-field col s12">
              <input id="salario" type="tel" class="validate" name="salario" required="true" value="<?php echo $row['Salario']; ?>">
              <label for="salario">Salario</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="date1" type="date" class="validate" name="fech_com" required="true" value="<?php echo $row['Fech_com']; ?>">
              <label for="date1">Fecha de Comienzo</label>
            </div>
            <div class="input-field col s6">
              <input id="date2" type="date" class="validate" name="fech_nac" required="true" value="<?php echo $row['Fech_nac']; ?>">
              <label for="date2">Fecha de Nacimiento</label>
            </div>
          </div>
          <div class="row">
            <div class="col s12 mt-25"> 
              <button class="btn waves-effect waves-light pulse" type="submit" name="modificar">Modificar
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    

    <div class="col s12 mt-25"> </div>

<!--register-->
  <div>
  	<?php require_once("piedepagina.php"); ?>
   </div>

</body>
</html>