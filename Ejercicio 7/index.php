<?php
echo "<head>";
echo "<title>Formulario Contacto</title>";
echo "<meta charset='UTF-8'>";
echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>"; 
echo "<h1 style='color: crimson';><center> Formulario Contacto</h1></center>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
// CSS MATERIALIZE
echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
echo'<link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>';
echo'<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
echo "</head>";
if(!isset($_POST["control"])){


echo "<body>";

echo "<div><center>";
echo '<h5>Si deseas ponerte en contacto con nosotros, rellena el formulario y te responderemos los antes posible.</h5>';
echo "<fieldset class='pee'>";
echo"<legend>Obligatorio:</legend>";

echo '<form action="index.php" method="POST">'; /* metodo POST ingresa y guarda datos de manera filtrada u oculta */
echo '<input type ="hidden" name="control" value="12345">';

echo '</br>
<div class="row">
    <div class="row">
      <div class="input-field col s6">
        <input  id="nombre" type="text" name="nombre" class="validate" required="true">
        <label for="nombre">Nombre</label>
      </div>
      <div class="input-field col s6">
        <input id="apellido" type="text" name="apellido" class="validate" required="true">
        <label for="apellido">Apellido</label>
      </div>
    </div></br></br>
    <div class="row">
      <div class="input-field col s6">
        <input id="email" type="email" name="email" class="validate" required="true">
        <label for="email">Email</label>
      </div>
      <div class="input-field col s6">
          <input id="telefono" type="tel" name="telefono" class="validate" required="true">
          <label for="telefono">Telefono</label>
        </div>
    </div></br>
    <div class="row">
    <div class="input-field col s6">
      <input  id="cuidad" type="text" name="cuidad" class="validate" required="true">
      <label for="cuidad">Cuidad</label>
    </div>
    <div class="input-field col s6">
      <input id="pais" type="text" name="pais" class="validate" required="true">
      <label for="pais">Pais</label>
    </div>
  </div></br>
    
    </br>
    
       

';
      
echo '

    <div class="row">
      <div class="input-field col s12">
        <textarea id="textarea1" name="textarea1" class="materialize-textarea"></textarea>
        <label for="textarea1">Mensaje</label>
      </div>

</div>';

echo '</br></br>
<div class="switch">
<label>
  No
  <input type="checkbox">
  <span class="lever"></span>
  Si Enviarme Una Copia
</label>
</div>

</br></br>
';

echo ' 
<button class="waves-effect waves-light btn-large" type="submit" name="enviar">Enviar
</button>
<button class="waves-effect waves-light btn-large" type="reset" name="reset">Reset
</button>
</div>';

}
else{
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$pais = $_POST['pais'];
$cuidad = $_POST['cuidad'];
$comentario = $_POST ['textarea1'];

echo "Nombre: " . $nombre . '</br>';
echo "Apellido: " . $apellido . '</br>';
echo "E-mail: " . $email . '</br>';
echo "Telefono: " . $telefono . '</br>';
echo "Pais: " . $pais . '</br>';
echo "Cuidad: " . $cuidad . '</br>';
echo "Comentario: " . $comentario . '</br>';
echo "<a href='index.php'>Nuevo Formulario</a>";

echo "</form>";
echo"</fieldset>";
echo "</div></center>";
//CSS MATERIALIZE
echo'<script type="text/javascript" src="/js/materialize.min.js"></script>';

echo "</body>";
}
?>