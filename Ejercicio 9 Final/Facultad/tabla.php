<?php
include("conexion.php");

//ordenar lista tabla
 //obtenemos valores que envió la funcion en
 //Javascript mediante el metodo GET
 if(isset($_GET['campo']) and isset($_GET['orden'])){
  $campo=$_GET['campo'];
  $orden=$_GET['orden'];
 }else{
  //por defecto
  $campo='nombre';
  $orden='ASC';
 }
 //realizamos la consulta de los empleados,
 //ordenandolos segun campo y asc o desc
 //ej. SELECT * FROM empleado ORDER BY nombres ASC
//$sql1="SELECT * FROM profesores ORDER BY $campo $orden";
//$Consulta=$conexion->query($sql1);

//buscar en tabla
$where = "";

if (!empty($_POST)) 
{
  $valor = $_POST['campo1'];
  if (!empty($valor)) {
    //buscar varias tablas
    $where = "WHERE idempleados LIKE '%$valor' OR Apellido LIKE '%$valor' OR Nombre LIKE '%$valor' OR Seccional LIKE '%$valor' OR Facultad LIKE '%$valor' OR Cargo LIKE '%$valor' OR Salario LIKE '%$valor' OR Fech_com LIKE '%$valor' OR Fech_nac LIKE '%$valor'";
  }
}
//$sql = "SELECT * FROM profesores $where";
//$resultado = $conexion->query($sql);

//combinacion de busqueda con orden asendente
$sql2 = "SELECT * FROM profesores $where ORDER BY $campo $orden";
$res =$conexion->query($sql2);

?>
<div class="dataTables_scrollBody" style="position: relative; overflow: auto; max-height: 400px; width: 100%;">
<table cellspacing="0" cellpading="0">
      <thead>
        <tr class="encabezado">
        <?php
        //definimos dos arrays uno para los nombre de los campos de la tabla y
        //para los nombres que mostraremos en vez de los de la tabla -encabezados
        $campos = "idempleados, Apellido, Nombre, Seccional, Facultad, Cargo, Salario, Fech_com, Fech_nac";
        $cabecera = "ID Empleados, Apellido, Nombre, Seccional, Facultad, Cargo, Salario, Fecha Comienzo, Fecha Nacimiento";
        //los separamos mediante coma
        $cabecera = explode(",", $cabecera);
        $campos = explode(",", $campos);
        //numero de elementos en el primer array
        $nroItemsArray = count($campos);
        //iniciamos variable i=0
        $i = 0;
        //mediante un bucle crearemos las columnas
        while ($i <= $nroItemsArray - 1) {
          //comparamos: si la columna campo es igual al elemento
          //actual del array
          if ($campos[$i] == $campo) {
            //comparamos: si esta Descendente cambiamos a Ascendente
            //y viceversa
            if ($orden == "DESC") {
              $orden = "ASC";
            } else {
              $orden = "DESC";
            }
            //si coinciden campo con el elemento del array
            //la cabecera tendrá un color distinto
            echo "	<td class=\"encabezado_selec\"><a onclick=\"OrdenarPor('".$campos[$i]."','".$orden."')\">".$cabecera[$i]."</a></td> \n";
          } else {
            //caso contrario la columna no tendra color
            echo "	<td><a onclick=\"OrdenarPor('" . $campos[$i] . "','DESC')\">" . $cabecera[$i] . "</a></td> \n";
          }
          $i++;
        }
        ?>
          <th> <a href="facultad.php"> <button type="button" class="btn btn-info">Agregar</button> </a> </th>
        </tr>
      </thead>

      <tbody>
        <?php
        //esta funcion permite comparar el campo actual y el nombre de
      //la columna en la base de datos
      function estiloCampo($_campo, $_columna)
      {
        if ($_campo == $_columna) {
          return " class=\"filas_selec\"";
        } else {
          return "";
        }
      }
      //mostramos los resultados mediante la consulta de arriba 

         
        
          //while ($filas = $resultado->fetch_assoc()) {
            while ($filas = mysqli_fetch_array($res)){
              
        
          echo "<tr>";
          echo "<td" . estiloCampo($campo, 'idempleados') . ">";
          echo $filas['idempleados'];
          echo "</td>";
          echo "<td " . estiloCampo($campo, 'Apellido') . ">";
          echo $filas['Apellido'];
          echo "</td>";
          echo "<td " . estiloCampo($campo, 'Nombre') . ">";
          echo $filas['Nombre'];
          echo "</td>";
          echo "<td " . estiloCampo($campo, 'Seccional') . ">";
          echo $filas['Seccional'];
          echo "</td>";
          echo "<td " . estiloCampo($campo, 'Facultad') . ">";
          echo $filas['Facultad'];
          echo "</td>";
          echo "<td " . estiloCampo($campo, 'Cargo') . ">";
          echo $filas['Cargo'];
          echo "</td>";
          echo "<td " . estiloCampo($campo, 'Salario') . ">";
          echo $filas['Salario'];
          echo "</td>";
          echo "<td " . estiloCampo($campo, 'Fech comienzo') . ">";
          echo $filas['Fech_com'];
          echo "</td>";
          echo "<td " . estiloCampo($campo, 'Fech Nacimiento') . ">";
          echo $filas['Fech_nac'];
          echo "</td>";
          echo "<td> <a href='modificar.php?idempleados=" . $filas['idempleados'] . "'><button type='button' class='btn btn-danger'>Modificar</button></a> </td>";
          //echo "<td>  <a href='modificar.php?idempleados=" . $filas['idempleados'] . "&apellido=" . $filas['Apellido'] . "&nombre=" . $filas['Nombre'] . "&seccional=" . $filas['Seccional'] . "&facultad=" . $filas['Facultad'] . "&cargo=" . $filas['Cargo'] . "&salarioo=" . $filas['Salario'] . "&fech_com=" . $filas['Fech_com'] . "&fech_nac=" . $filas['Fech_nac'] . "'> <button type='button' formaction='modif_prod1.php' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminar.php?idempleados=" . $filas['idempleados'] . "&idborrar=2845''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
          echo "</tr>";
        }
      
        //}
    
        ?>




      <tbody>
        <!-- AFUERA para que se haga DIVICION-->
    </table>
      </div>