<?php
include "header.php";
?>


<div class="container">
  <div class="alert alert-warning" id="alerta" role="alert" style="visibility: hidden">
  Se ha cambiado de color
</div>

    <!-- Se crea una columna de tamaño 8 y que va a dejar 2 tamaños de espacio a la izquierda-->
            <div class="col-sm-12 border">
              <!-- Dentro del modal se creó un formulario, siempre inicia con clase form-group y cada elemento tiene la clase form-control -->
              <form action="resultado.php" method="post">

              <div class="form-group">
                <label for="nombre">Nombre:</label><br>
                <input type="text" class="form-control" id="nombre" name="nombre" ><br>
              </div>

              <div class="form-group">
                <label for="fecha">Indique su fecha de nacimiento:</label><br>
                <input type="date" id="fecha" class="form-control" name="fecha" >
              </div>
            </div>
            <br>

            <div class="col-sm-12 border">
              <div class="form-group">
                <label for="correo" >Indique el valor:</label><br>
                <input type="number" class="form-control" id="valor" name="correo" placeholder="0"><br>
              </div>

              <div class="form-group">
                <label for="genero">Indique el número de productos:</label><br>
                <select id="productos" class="form-control" name="genero">               
                          <option value='diseno'> Tecnología en Diseño y Desarrollo Web </option>
                          <option value='sistemas'>  Tecnología en Sistemas</option>
                          <option value='gestion'>  Tecnología en Gestión Informática </option>
                  </select>
               <br>
             </div>

             <div class="col-sm-12 border" id="colorear" >
              <div class="form-group">
                <label for="correo">Indique el color:</label><br>
                <input type="color" class="form-control" id="color" name="color"><br>
              </div>

             <div class="form-group">
                <label for="correo">Otro texto:</label><br>
                <p id="texto">sfdgsadgas 
                </p><br>
              </div>
           </div>


         
         <!-- Pie del modal-->         
          <button class="btn btn-success" type="button" id="enviar">Comprar</button>
          <button  class="btn btn-danger" type="button" id="cambiar">Cambiar Color</button>
          <input type="submit" class="btn btn-primary">
           <p id="texto2">  </p>
        </div>
     </form>
        <img src="imagenes/perro1.jpg" height="200px" id="foto">
</div>
<script src="js/script.js"></script>
<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
