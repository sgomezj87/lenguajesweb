<?php
include "header.php"
?>

<div class="container">
              <div class="form-group">
                <label for="genero">Indique el tipo de mascota:</label><br>
                <select id="mascota" class="form-control" name="mascota">  
                <option value='-'> - </option>             
                          <option value='gatos'> Gatos </option>
                          <option value='perros'>Perros</option>
                          <option value='hamster'>Hamster</option>
                  </select>
               <br>
             </div>

             <div class="form-group">
                <label for="genero">Indique la raza:</label><br>
                <select id="raza" class="form-control" name="raza">              
                         
                  </select>
               <br>
             </div>

             <div class="form-group">
                <label for="nombre">Nombre de la mascota:</label><br>
                <input type="text" class="form-control" id="nombre" name="nombre" ><br>
              </div>
              <p id="texto"></p>

              <h2>Indique el tamaño y arrastrelo a su espacio</h2>
              <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" id="joven" name="nombre" value="joven" draggable="true" ondragstart="drag(event)"  readonly><br>
                    <input type="text" class="form-control" id="joven" name="nombre" value="adulto" draggable="true" ondragstart="drag(event)"  readonly><br>
                    <input type="text" class="form-control" id="joven" name="nombre" value="cachorro" draggable="true" ondragstart="drag(event)" readonly><br>
                  </div>
                  <div clas="col">
                  <h2>Arrastre aquí</h2>
                    <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" style="width: 350px;  height: 70px;  padding: 10px;  border: 1px solid #aaaaaa;"></div>
                  </div>
            </div>

            <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="imagenes/perro2.jpg" width="100" height="100">


            <iframe style="width:100%; height: 50vh"
            src="https://www.youtube.com/embed/HSQE0ZCqC68" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <img src="https://tdea.edu.co/images/tdea/galeria/noticias/2019/paz_oct_2019_2.jpg" width="50%">

            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1QNQVIQT2nY1lC87q4-1ocVQJ9rhC0VsK" width="100%" height="480" ></iframe>
</div>
<?php
include "footer.php";
?>