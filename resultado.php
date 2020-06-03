<?php
include "header.php";

$nombre = $_REQUEST['nombre'];
echo "El nombre de la persona es"
echo $_REQUEST['nombre'];
?>

<h1> Bienvenido <?php echo "hola" ?> a la página </h1>
<h1> Bienvenido <?php echo $nombre ?> a la página </h1>

<div class="form-group">
                <label for="nombre">Nombre:</label><br>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre ?>"><br>
              </div>
</div>
<script src="js/script.js"></script>
<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
