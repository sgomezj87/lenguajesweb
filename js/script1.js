
//On Change, para un select
document.getElementById("mascota").onchange = function clic2(){
    var mascota = document.getElementById("mascota").value;	
    console.log(mascota)
	if (mascota == "gatos"){
    texto = "<option value='Siames'>Siames</option> \
            <option value='Persa'>Persa</option> \
            <option value='Criollo'>Criollo</option>" ;
		document.getElementById("raza").innerHTML = texto;
	}
  else if (mascota == "perros"){
    texto = "<option value='Pug'>Pug</option> \
            <option value='Beagle'>Beagle</option> \
            <option value='PastorAleman'>Pastor Aleman</option>" ;
    document.getElementById("raza").innerHTML = texto;

  }
  else if (mascota == "hamster"){
    texto = "<option value='Ruso'>Ruso</option> \
            <option value='Panda'>Panda</option> \
            <option value='Otro'>Otro</option>" ;
    document.getElementById("raza").innerHTML = texto;
	}
};

//On Change, para un input

document.getElementById("nombre").onchange = function clic2(){
    var nombre = document.getElementById("nombre").value; 
  
    document.getElementById("texto").innerHTML = "La mascota se llamará " + nombre;
  
};

//Drag and Drop
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}


//Ampliar imagen
function bigImg(x) {
  x.style.height = "200px";
  x.style.width = "200px";
  for (i = 0; i < x.attributes.length; i++) {
    console.log(x.attributes[i].name + " = " + x.attributes[i].value + "<br>");
  }
  x.attributes[3].value="imagenes/perro1.jpg";
}

function normalImg(x) {
  x.style.height = "100px";
  x.style.width = "100px";
  x.attributes[3].value="imagenes/perro2.jpg";
}