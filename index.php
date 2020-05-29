<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Llamo al CSS propio de bootstrap-->
  <link rel="stylesheet" href="css/bootstrap.min.css" >

  <!-- Título de la página-->
  <title>Ejemplo Bootstrap</title>


</head>
<body>
  <!-- Ejemplo de barra de navagación-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <!-- Ejemplo de título de la página o para poner una imagen del logo-->
    <a class="navbar-brand" href="#">Página</a>
    <!-- Es el botón que a veces denominan hamburguesa, que es cuando la pantalla se hace pequeña aparecen tres lineas-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Los menú son listas desordenadas.-->
      <ul class="navbar-nav mr-auto">
        <!-- Se indica cada elemento de la lista-->
        <li class="nav-item active">
          <!-- En este caso es un enlace a la página inicial-->
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <!-- En este caso es un enlace a la segunda página, denominada conocenos-->
          <a class="nav-link" href="contacto.html">Quienes somos</a>
        </li>
        <li class="nav-item">
          <!-- En este caso es un enlace a la página del TdeA-->
          <a class="nav-link" href="http://www.tdea.edu.co">TdeA</a>
        </li>
         <!-- Este elemento es de tipo lista desplegable (dropdown)-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Productos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <!-- Tiene tres elementos -->
            <a class="dropdown-item" href="#">Páginas Web nueva</a>
            <a class="dropdown-item" href="#">Aplicaciones</a>
            <a class="dropdown-item" href="#">E-commerce</a>
          </div>
        </li>
         <!-- Cierro la lista-->
      </ul>
      <!-- Se crea un formulario para indicar el nombre de usuario y contraseña, tiene la clase inline para que aparezcan los elementos uno al lado del otro-->
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Usuario" aria-label="Search">
        <input class="form-control mr-sm-2" type="search" placeholder="Contraseña" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ingresar</button>
      </form>
    </div>
  </nav>


<!-- Crea un jumbotron que se utiliza para títulos, banner y otros elementos distintivos de gran tamaño-->
  <div id="titulo" class="jumbotron ">
    <h1 id="tituloh1" class="text-center" >Ejemplo de Formulario</h1>
 </div> 

<div class="container">
  <div class="alert alert-warning" id="alerta" role="alert" style="visibility: hidden">
  Se ha cambiado de color
</div>

    <!-- Se crea una columna de tamaño 8 y que va a dejar 2 tamaños de espacio a la izquierda-->
            <div class="col-sm-12 border">
              <!-- Dentro del modal se creó un formulario, siempre inicia con clase form-group y cada elemento tiene la clase form-control -->
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
          <button type="submit" class="btn btn-success" id="enviar">Comprar</button>
          <button type="submit" class="btn btn-danger" id="cambiar">Cambiar Color</button>
           <p id="texto2"> 
        </div>
        <img src="imagenes/perro1.jpg" height="200px" id="foto">
</div>
<script src="js/script.js"></script>
<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
